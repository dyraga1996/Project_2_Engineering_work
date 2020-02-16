<?php
/**
 * Created by PhpStorm.
 * User: Norbert Orlikowski
 * Date: 25.07.2018
 * Time: 16:15
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Cards;
use AppBundle\Entity\TemporaryCards;
use AppBundle\Form\CardType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class RfidController extends Controller
{
    /**
     * @return Response
     */
    public function indexAction()
    {

        return $this->render("rfid/index.html.twig");
    }

    public function testConnectionAction()
    {
        $loggerService = $this->get('app.logger');

        $array  = ['message' => 'Connected'];

        $loggerService->addCardLog(0, $loggerService::ACTION_TEST_CONNECTION, 4);

        return new Response(json_encode($array), 200);
    }

    public function accessAction(Request $request)
    {
        $loggerService = $this->get('app.logger');

        $cardId = $request->attributes->get('id');
        $cardIdFormatted = hexdec($cardId);
        $entityManager = $this->getDoctrine();
        $card = $entityManager->getRepository('AppBundle:Cards')->findBy(['cardId'=>$cardId]);
        if(empty($card)) {
            $loggerService->addCardLog
            (
                $cardIdFormatted, $loggerService::ACTION_NOT_AUTHORIZE, 4, $loggerService::ACCESS_RESULT_FAILURE
            );
            $array = ['message' => 'Error'];
        } else {
            $loggerService->addCardLog
            (
                $cardIdFormatted, $loggerService::ACTION_AUTHORIZE, 4, $loggerService::ACCESS_RESULT_SUCCESS
            );
            $array = ['message' => 'Access'];
        }


        return new Response(json_encode($array), 200);
    }

    public function temporaryCardAddAction(Request $request)
    {
        $loggerService = $this->get('app.logger');

        $card = new TemporaryCards();
        $cardId = $request->attributes->get('id');

        $card->setCardId($cardId);
        $card->setGateId(2);

        $eM = $this->getDoctrine()->getManager();
        //Szybkie kasowanie jakichkolwiek danych jeśli takowe istnieją
        $tempAllCards = $eM->getRepository('AppBundle:TemporaryCards')->findAll();
        if(!empty($tempAllCards))
        {
            foreach($tempAllCards as $tempCard)
            {
                $eM->remove($tempCard);
                $eM->flush();
            }
        }
        //END
        $eM->persist($card);
        $eM->flush();

        $loggerService->addCardLog($cardId, $loggerService::ACTION_ADD_CARD, 4, $loggerService::ACCESS_RESULT_SUCCESS);
        $array = ['message' => "Added OK"];

        return new Response(json_encode($array));
    }

    /**
     * @return Response
     */
    public function returnTemporaryCardAction()
    {
        $card = $this->getDoctrine()->getRepository('AppBundle:TemporaryCards')->findAll();

        $json = ['cardID' => $card[0]->getCardId()];
        return new Response(json_encode($json));
    }
}