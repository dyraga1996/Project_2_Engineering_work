<?php

namespace AppBundle\Controller;

use AppBundle\Entity\AdminLogs;
use AppBundle\Entity\CardLogs;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class LogsController extends Controller
{
    /**
     * @return Response
     */
    public function indexAction()
    {
        return $this->render('Logs/index.html.twig');
    }

    /**
     * @param $page
     * @return Response
     */
    public function adminIndexAction($page)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $adminLogs = $entityManager->getRepository("AppBundle:AdminLogs")->findAll();
        try {
            $userManager = $this->get('fos_user.user_manager');
        } catch(\Exception $exception) {
            dump($exception);
        };
        $paginator  = $this->get('knp_paginator');

        foreach ($adminLogs as $key=>$adminLog) {
            $user = $userManager->findUserBy(['id' => $adminLog->getUserId()]);
            $usernames[$key] = $user->getUsernameCanonical();

            if($adminLog->getAction() == "edit") {
                $adminLogs[$key]->setAction("Edycja");
            }
            elseif ($adminLog->getAction() == "add") {
                $adminLogs[$key]->setAction("Adnotacja");
            }

            if( ($adminLog->getController() == "card_edit") || $adminLog->getController() == "card_add" ) {
                $adminLogs[$key]->setController("Karty");
            }
            elseif ( ($adminLog->getController() == "worker_edit") || $adminLog->getController() == "worker_add" ) {
                $adminLogs[$key]->setController("Pracownicy");
            }
        }
        $pagination = $paginator->paginate(
            $adminLogs, /* query NOT result */
            $page,
            10/*limit per page*/
        );

        return $this->render('Logs/admin_index.html.twig', ['adminLogs' => $adminLogs, 'usernames' => $usernames, 'pagination' => $pagination]);
    }

    public function adminDetailsAction(AdminLogs $adminLog)
    {
        $logAction = $adminLog->getAction();
        $entityManager = $this->getDoctrine()->getManager();
        $userManager = $this->get('fos_user.user_manager');
        $user = $userManager->findUserBy(['id' => $adminLog->getUserId()]);
        $controller = $adminLog->getController();

        $newId = $adminLog->getNewValue();
        if($logAction == "edit") {
            $oldId = $adminLog->getOldValue();
            if($controller == "card_edit") {
                $oldObject = $entityManager->getRepository("AppBundle:Cards_Old")->findOneBy(['id' => $oldId]);
                $oldWorker = $entityManager->getRepository("AppBundle:Workers")->findOneBy(['id' => $oldObject->getWorkerId()]);
                $oldCard = $entityManager->getRepository("AppBundle:Cards")->findOneBy(['cardId' => $oldObject->getCardId()]);
                $newObject = $entityManager->getRepository("AppBundle:Cards")->findOneBy(['id' => $newId]);
                $newCard = $entityManager->getRepository("AppBundle:Cards")->findOneBy(['cardId' => $newObject->getCardId()]);
                $newWorker = $newObject->getWorker();
            }
            elseif ($controller == "worker_edit") {
                $oldObject = $entityManager->getRepository("AppBundle:WorkersOld")->findOneBy(['id' => $oldId]);
                $newObject = $entityManager->getRepository("AppBundle:Workers")->findOneBy(['id' => $newId]);
                $oldWorker = null;
                $oldCard = null;
                $newWorker = null;
                $newCard = null;
            }
        }
        elseif ($logAction == "add") {
            $oldObject = null;
            $oldWorker = null;
            $oldCard = null;
            if($controller == "card_add") {
                $newObject = $entityManager->getRepository("AppBundle:Cards")->findOneBy(['id' => $newId]);
                $newWorker = null; //FOR SIMPLER GET TO VIEWS
                $newCard = null; //FOR SIMPLER GET TO VIEWS
            }
            elseif ($controller == "worker_add") {
                $newWorker = null;
                $newCard = null;
                $newObject = $entityManager->getRepository("AppBundle:Workers")->findOneBy(['id' => $newId]);
            }
        }
        else {
            $oldObject = null;
            $newObject = $entityManager->getRepository("AppBundle:Workers")->findOneBy(['id' => $newId]);
            $oldWorker = null;
            $oldCard = null;
            $newWorker = null;
            $newCard = null;
        }

        if( ($adminLog->getController() == "card_edit") || ($adminLog->getController() == "card_add") ) {
            $place = "cards";
        }
        elseif ( ($adminLog->getController() == "worker_edit") || ($adminLog->getController() == "worker_add") ) {
            $place = "workers";
        }

        return $this->render(
            'Logs/admin_details.html.twig',
            [
                'log' => $adminLog,
                'user' => $user,
                'oldObject' => $oldObject,
                'newObject' => $newObject,
                'place' => $place,
                'oldWorker' => $oldWorker,
                'oldCard' => $oldCard,
                'newWorker' => $newWorker,
                'newCard' => $newCard,
                'logAction' => $logAction,
            ]);
    }

    /**
     * @param $page
     * @return Response
     */
    public function cardIndexAction($page)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $paginator  = $this->get('knp_paginator');
        $cardLogs = $entityManager->getRepository("AppBundle:CardLogs")->findAll();
        foreach($cardLogs as $key => $cardLog) {
            if($cardLog->getAction() == "authorize") {$cardLogs[$key]->setAction("Dostęp [+]");}
            elseif ($cardLog->getAction() == "not authorize") {$cardLogs[$key]->setAction("Dostęp [-]");}
            $cardLogs[$key]->setCardId( strtoupper( dechex($cardLog->getCardId()) ) );
        }


        $pagination = $paginator->paginate(
            $cardLogs, /* query NOT result */
            $page,
            10/*limit per page*/
        );



        return $this->render('Logs/card_index.html.twig', ["cardLogs" => $cardLogs, 'pagination' => $pagination]);
    }

    public function cardDetailsAction(CardLogs $cardLog)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $convertedCardId = dechex($cardLog->getCardId()); //Konwertujemy z INTEGER na HEXADECIMAL

        //Wyciągamy poszczególne dane z bazy
        $card = $entityManager->getRepository("AppBundle:Cards")->findOneBy(['cardId' => $convertedCardId]);

        return $this->render('Logs/card_details.html.twig', ["card" => $card, "card_log" => $cardLog]);
    }

    /**
     * @param Request $request
     * @return Response
     * @throws \Exception
     */
    public function synchronizeAction(Request $request)
    {
        $loggerService = $this->get('app.logger');

        $datetime = $request->attributes->get('datetime');
        $cardId = $request->attributes->get('id');
        $action = $request->attributes->get('action');
        if($action == "Access") {
            $action = $loggerService::ACTION_AUTHORIZE;
        }

        $convertedCardId = hexdec($cardId); //Konwertujemy wartość HEX do wartości Integer[Decimal]

        $log = new CardLogs();

        $dateFormatted = str_replace("T", " ", $datetime);

        $accessDate = new \DateTime($dateFormatted);

        //Tworzymy cały log
        $loggerService->addCardLog($convertedCardId, $action, 4, $accessDate);
        //END

        $eM = $this->getDoctrine()->getManager();
        $eM->persist($log);
        $eM->flush();

        $response = ['message' => "Log synchronized succesfull!"];
        return new Response(json_encode($response));
    }
}
