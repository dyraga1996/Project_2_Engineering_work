<?php
/**
 * Created by PhpStorm.
 * User: Norbert Orlikowski
 * Date: 25.09.2018
 * Time: 20:16
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Cards;
use AppBundle\Entity\Cards_Old;
use AppBundle\Form\CardType;
use AppBundle\Service\Logger;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CardController extends Controller
{
    /**
     * @param $page
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction($page)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $paginator  = $this->get('knp_paginator');

        $cards = $entityManager->getRepository('AppBundle:Cards')->findAll();

        $pagination = $paginator->paginate(
            $cards, /* query NOT result */
            $page,
            10/*limit per page*/
        );

        return $this->render('Cards/index.html.twig', ['cards' => $cards, 'pagination' => $pagination]);
    }

    public function detailsAction(Cards $card)
    {

        return $this->render('Cards/details.html.twig', ['card' => $card]);
    }

    public function addCardAction(Request $request)
    {
        $loggerService = $this->get('app.logger');
        $controller = $request->attributes->get("_route");
        $user = $this->getUser();
        $userId = $user->getId();
        $card = new Cards();

        $form = $this->createForm(CardType::class, $card);

        //Zapis do bazy danych
        if($request->isMethod("post")) {
            $form->handleRequest($request);
            if($form->isSubmitted()) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($card);
                $entityManager->flush();

                $cardToDeleteFromTemporary = $entityManager->getRepository('AppBundle:TemporaryCards')->findOneBy(['cardId'=>$card->getCardId()]);
                $entityManager->remove($cardToDeleteFromTemporary);
                $entityManager->flush();

                $loggerService->addAdminLog(Logger::ACTION_ADD, $controller, $userId, null, $card->getId(), Logger::RESULT_SUCCESS);

                $this->addFlash("success", "Dodawanie karty przebiegło pomyślnie");
                return $this->redirectToRoute("card_details", ['id'=>$card->getId()]);
            }
        }

        return $this->render('Cards/add.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @param Cards $card
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @throws \Exception
     */
    public function editAction(Cards $card, Request $request)
    {
        $loggerService = $this->get('app.logger');
        $controller = $request->attributes->get("_route");
        $user = $this->getUser();
        $userId = $user->getId();
        $clonedCard = clone($card);

        $form = $this->createForm(CardType::class, $card);

        if($request->isMethod('POST'))
        {
            $form->handleRequest($request);

            if($form->isSubmitted())
            {
                $entityManager = $this->getDoctrine()->getManager();
                //We handled old values from Cards to show it in logs after
                $oldCard = new Cards_Old();
                $oldCard->setCardId($clonedCard->getCardId());
                $oldCard->setAccessLevel($clonedCard->getAccessLevel());
                $oldCard->setWorkerId($clonedCard->getWorker()->getId());
                //End

                $entityManager->persist($oldCard);
                $entityManager->persist($card);
                $entityManager->flush();

                $loggerService->addAdminLog(Logger::ACTION_EDIT, $controller, $userId, $oldCard->getId(), $card->getId(), Logger::RESULT_SUCCESS);

                $this->addFlash('success', 'Karta została pomyślnie edytowana !');
                return $this->redirectToRoute('card_details', ['id' => $card->getId()]);
            }
        }

        return $this->render("Cards/edit.html.twig", ['form'=>$form->createView(), 'card' => $card]);
    }

    public function removeAction(Cards $card, Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', 'Tylko administrator może usuwać użytkowników');
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($card);
        $entityManager->flush();

        $loggerService = $this->get('app.logger');
        $controller = $request->attributes->get("_route");
        $user = $this->getUser();
        $userId = $user->getId();

        $loggerService->addAdminLog(Logger::ACTTION_REMOVE, $controller, $userId, null, null, Logger::RESULT_SUCCESS);

        $this->addFlash("success","Usuwanie karty powiodło się !");
        return $this->redirectToRoute("cards_index");
    }
}