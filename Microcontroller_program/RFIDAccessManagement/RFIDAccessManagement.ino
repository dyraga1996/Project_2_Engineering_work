/*
 * RFIDAccessManagement.ino
 *
 * Created: 9/12/2018 1:32:53 PM
 * Author: Michał Dyraga
 */
 
/********************************************************************************

Connecting pins to the RC522 reader:
    RST          49
    SDA(SS)      48
    MOSI         51
    MISO         50
    SCK          52

Connecting pins to the LCD display:
    RS  pin 7
    Enable  pin 6
    D4 pin 5
    D5 pin 3
    D6 pin 2
    D7 pin 1
    R/W pin to ground
    VSS pin to ground
    VCC pin to 5V
    10K resistor to V0
    
Connecting pins to the SD card:
    MOSI - pin 51
    MISO - pin 50
    SCK - pin 52
    CS - pin 4

Connecting pins to Ethernet:
    MOSI - pin 51
    MISO - pin 50
    SCK - pin 52
    CS - pin 12 (10 lub 23)

Connecting pins to the RTC clock:
   SDA - SDA
   SCL - SCL
     
****************************************************************************/   
 
/* ********************************* LIBRARY DEFINITION ********************* */
#include <SPI.h>
#include <Ethernet.h>
#include <MFRC522.h>
#include <LiquidCrystal.h>
// To SD card:
#include <SD.h>
#include <Wire.h>
// To RTC:
#include <PCF8583.h>
#include <stdio.h>
//To Timers:
#include "Timers.h"
/* ********************************* GLOBAL VARIABLES DEFINITION ********************* */
//DEFINE OPTIONS
#define LCD_REFRESH 100
#define ETH_CONN_REFRESH 500

//Button Constants
const byte BTN = 47;

// LCD Constants
const byte RS = 7;
const byte EN = 6;
const byte D4 = 5;
const byte D5 = 3;
const byte D6 = 2;
const byte D7 = 1;
// LCD Model
LiquidCrystal lcd(RS, EN, D4, D5, D6, D7);
// Ethernet Conf Variables
byte mac[] = { 0xD0, 0xFB, 0xFE, 0xEF, 0xC4, 0xEA };
char server[] = "rfid-management.pl"; //Server for our API
// Ethernet Model
EthernetClient client;
// RFID Constants
const byte CS_PIN = 48;
const byte RST_P = 49;
//byte ID[4]; //Variable which contains readed key
// RFID Model
MFRC522 rfid(CS_PIN, RST_P);
MFRC522::MIFARE_Key key; //Key initialization
// RTC Model
int correct_address = 0;
PCF8583 p (0xA0);
//Timers
Timer refreshLCDTimer; //Timer to control LCD
Timer refreshEthernetStatus;

/* END OF Global Variables */

//Definition of functions
void lcdControl(byte option, char text[]=0, byte vertical=5, byte horizontal=5); //Control Display on/off/clear/something else
boolean initSDCard( void ); //Initialization of SD Card
void writeSDCard(byte array[]); //Write logs to SD Card when server is offline
boolean parseSDData( void );
void SetTime(void);

boolean getRfidId(byte *buffor, byte buffor_size); //Prepare RFID ID to GET Connection
//ETH Functions
boolean ethernetBeginAuthorize(byte array[]);
boolean testConnection(void);
boolean ethernetBeginAdd(byte array[]);


//Local Variables

boolean grantedFlag; //Authorization granted flag
boolean onlyOneTimerFlag; //Flag to check if timer was used
boolean ethFlag; //Flag to check if ethernet Connection is estabilished
boolean onlyOneErrorFlag; //Flag to avoid loop in Ethernet Connection Error!
boolean ethStatus; //Boolean variable containing ethStatus.
String answear = ""; //Prepared string with API Answear which uC is searched for prepared strings
char characterReceived; //Characters received from API
boolean result;
String timeData[100];  
String cardData[100];
String actionData[100];
String suckData;
byte iteration;
byte sequence; 


void setup()
{
  pinMode(BTN, INPUT_PULLUP);
    lcd.begin(16, 2);
    lcd.clear();
	  //Author section
    lcdControl(2, "V.2 Produced by");
    lcdControl(2, "Michal Dyraga", 1,0);
	  delay(100);
	  lcd.clear();
    lcdControl(2, "Inicjalizacja...");
    //RFID and Ethernet Initialization over SPI
    SPI.begin();
    rfid.PCD_Init();
    //ETH Initialization
    Ethernet.begin(mac);
	  //SetTime();           
    ethStatus = testConnection();   
	lcd.clear();
}
 
void loop()
{  
	//Every single loop start - Set new datetime.
	lcdControl(3, 0, 1, 0);
	if (onlyOneTimerFlag == false)
	{
		if(refreshLCDTimer.available()) {
			lcdControl(1);
			onlyOneTimerFlag = true;
		}
	}
	if(ethFlag == false) {
		if (refreshEthernetStatus.available())
		{
			onlyOneErrorFlag = false;
			ethStatus = testConnection();
			refreshEthernetStatus.restart();
		}
	}
	       
    if(rfid.PICC_IsNewCardPresent() && rfid.PICC_ReadCardSerial())
    {
        ethStatus = getRfidId(rfid.uid.uidByte, rfid.uid.size); 
		
		rfid.PICC_HaltA();
		rfid.PCD_StopCrypto1();  
	} else {
		if(ethFlag != false) {
			ethStatus = true;
		}
	}
	
	if(ethStatus) { //Section where we handle eth connection responses
		if (client.available())
		{
			while (client.available() > 0) {
				characterReceived = client.read();
				answear += characterReceived;
       Serial.print(characterReceived);
			}
			} else {
			answear = "";
		}
		
		//Authentication's ifs
		if(grantedFlag == false) {
			if( answear.indexOf("Error") > 0 ) {
				lcdControl(2, "Brak autoryzacji");
				//Make refresh time for LCD and set flag to avoid accidentaly grant authorization
				grantedFlag = true;
				onlyOneTimerFlag = false;
				refreshLCDTimer.begin(LCD_REFRESH);
			}
				
			if( answear.indexOf("Access") > 0) {
				lcdControl(2, "Autoryzacja");      
				grantedFlag = true;
				onlyOneTimerFlag = false;
				refreshLCDTimer.begin(LCD_REFRESH);
			}
			
			//TestETH ifs
			if( answear.indexOf("Connected") > 0) {
				lcdControl(2, "Polaczenie OK");
				grantedFlag = true;
				onlyOneTimerFlag = false;
				refreshLCDTimer.begin(LCD_REFRESH);
       
				if(SD.exists("LOGI.TXT"))  {
        
				   prepareSDData();  
				  }
				ethFlag = true;
			}
			
			//Card add if
			if( answear.indexOf("Added OK") > 0) {
        lcd.clear();
				lcdControl(2, "Dodano!");
				grantedFlag = true;
				onlyOneTimerFlag = false;
				refreshLCDTimer.begin(LCD_REFRESH);
			}
				
		}
	} else { //Section where we handle error with Ethernet Connection
		if(onlyOneErrorFlag == false) {
			refreshLCDTimer.begin(LCD_REFRESH);
			refreshEthernetStatus.begin(ETH_CONN_REFRESH);
			onlyOneErrorFlag = true;
			
			lcdControl(2, "Blad autoryzacji");
			ethFlag = false;
		}
	}
	
	//Flush for flags etc.
	grantedFlag = false;
}
 
boolean getRfidId(byte *buffor, byte buffor_size)
{
    byte newArray[4];
   
    for (byte i = 0; i < buffor_size; i++)
    {
        newArray[i] = buffor[i];        
    }

    

    if(digitalRead(47) == LOW){
	ethStatus = ethernetBeginAdd(newArray);
	} else {
    ethStatus = ethernetBeginAuthorize(newArray);
	}
	if (ethStatus == false)
	{
		  writeSDCard(newArray);
	}
	return ethStatus;
}
 
// Function connect to server,
boolean ethernetBeginAuthorize(byte array[]) {
	lcdControl(2, "Komunikacja...");
    if (client.connect(server, 80)) {
        // Make a HTTP request:
        client.print("GET /access/");
		for(byte i=0; i < 4; i++)
		{
		    client.print(array[i], HEX);
		}
		client.println(" HTTP/1.1");
        client.println("Host: rfid-management.pl");
        client.println("Connection: close");
        client.println();
		
		return true;
    }
   
    if (!client.connected()) {
		
        if(!client.connect(server,80)) {
			
        }
		
        return false;
        } 
}
 
boolean testConnection(void) {
  lcd.clear();
	lcdControl(2, "Test ETH...");
	client.stop();
	if (client.connect(server, 80)) {
		// Make a HTTP request:
		client.println("GET /test_connection/ HTTP/1.1");
		client.println("Host: rfid-management.pl");
		client.println("Connection: close");
		client.println();
		
		return true;
	}
	
	if (!client.connected()) {
		
		if(!client.connect(server,80)) {
		}
		
		return false;
	}
}

boolean ethernetBeginAdd(byte array[]) {
  lcdControl(2, "Dodawanie...");
  if (client.connect(server, 80)) {
	  // Make a HTTP request:
	  client.print("GET /rfid/temp/");
	  for(byte i=0; i < 4; i++)
	  {
		  client.print(array[i], HEX);
	  }
	  client.println(" HTTP/1.1");
	  client.println("Host: rfid-management.pl");
	  client.println("Connection: close");
	  client.println();
	  
	  return true;
  }
  
  if (!client.connected()) {
	  
	  if(!client.connect(server,80)) {
	  }
	  
	  return false;
  }
}

boolean ethernetSynchronizeLogs(String timeData,String cardData,String actionData) {
  if (client.connect(server, 80)) {
    // Make a HTTP request:

    client.print("GET /logs/synchronize/");
    client.print(timeData);
    client.print("/");
    client.print(cardData);
    client.print("/");
    client.print(actionData);
    client.println(" HTTP/1.1");
    client.println("Host: rfid-management.pl");
    client.println("Connection: close");
    client.println();
   
    return true;
  }
 
  if (!client.connected()) {
   
    if(!client.connect(server,80)) {
     
    }
   
    return false;
  }
}

boolean prepareSDData() {
  File myFile;
  myFile = SD.open("LOGI.TXT");
 
  if (myFile) {
    sequence = 0;
    iteration = 0;
    // read from the file until there's nothing else in it:
    while (myFile.available()) {
      if( sequence == 0) {
        timeData[iteration] = myFile.readStringUntil(';');
      }
      else if( sequence == 1 ) {
        cardData[iteration] = myFile.readStringUntil(';');
      }
      else if( sequence == 2 ) {
        actionData[iteration] = myFile.readStringUntil(';');
      }
      else if( sequence == 3 ) {
        suckData = myFile.readStringUntil('\n');
      }
      sequence++;
      if(sequence > 3) {
        sequence = 0;
        iteration++;
      }
    }
     
    for(byte i = 0; i<iteration; i++) {
      
 
      result = ethernetSynchronizeLogs(timeData[i], cardData[i], actionData[i]);
 
      timeData[i] = "";
      cardData[i] = "";
      actionData[i] = "";
    }
    suckData = "";

    SD.remove("LOGI.TXT");
}
}
void lcdControl(byte option, char text[], byte vertical, byte horizontal) {
	lcd.print("                ");
	lcd.setCursor(0,0);
	if( (vertical != 5) && (horizontal != 5) ) {
		lcd.setCursor(horizontal, vertical);
	}
	if(option == 1) {
		lcd.print("Zbliz karte...");
	}
	if(option == 2) {
		if(text != 0) {
			lcd.print(text);
		}
	}
	if(option == 3) {
		p.get_time();
		char time[50];
		sprintf(time, "%02d/%02d/%02d   %02d:%02d",
		p.day, p.month, p.year, p.hour, p.minute);
		lcd.print(time);
	}
}

/*
Function for change datetime. If you want change timezone or smth. Anyway - USELESS
*/
//void SetTime(void){
//  p.year = 19;
//  p.month = 01;
//  p.day = 29;
//  p.hour = 19;
//  p.minute = 47;
//  p.second = 00;
// p.set_time();
//} 

void writeSDCard(byte array[]){
    File myFile;
    initSDCard();
    myFile = SD.open("LOGI.txt", FILE_WRITE);                                         
    if (myFile) {
		p.get_time();
		char time[50];
		sprintf(time, "%02d-%02d-%02d %02d:%02d:%02d",
		p.year, p.month, p.day, p.hour, p.minute, p.second);
		myFile.print(time);

    myFile.print(";");
    for(int i=0; i<4; i++){
      myFile.print( array[i], HEX);
      }
      
		myFile.print(";");
		myFile.print("Access");
		myFile.print(";");
		myFile.close();
		lcdControl(2, "Wejście zapisane");
  } 
}

boolean initSDCard(){
  if (!SD.begin(4)) {
	  return false;
  } else {
	  return true;
  }
}
