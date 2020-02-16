<?php
/**
 * Created by PhpStorm.
 * User: Norbert Orlikowski
 * Date: 25.07.2018
 * Time: 16:26
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Workers;
use AppBundle\Entity\WorkersOld;
use AppBundle\Form\WorkerType;
use AppBundle\Service\Logger;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class WorkerController extends Controller
{
    /**
     * @param $page
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction($page)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $paginator  = $this->get('knp_paginator');
        $workers = $entityManager->getRepository("AppBundle:Workers")->findAll();

        foreach($workers as $key=>$worker) {
            if($worker->getHired() == 1) {
                $workers[$key]->setHired('Tak');
            } else {
                $workers[$key]->setHired('Nie');
            }
        }

        $pagination = $paginator->paginate(
            $workers, /* query NOT result */
            $page,
            10/*limit per page*/
        );

        return $this->render("Workers/index.html.twig", ['workers' => $workers, 'pagination' => $pagination]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @throws \Exception
     */
    public function addAction(Request $request)
    {
        $this->denyAccessUnlessGranted("ROLE_ADMIN");

        $loggerService = $this->get('app.logger');
        $controller = $request->attributes->get("_route");
        $user = $this->getUser();
        $userId = $user->getId();

        $worker = new Workers();

        $form = $this->createForm(WorkerType::class, $worker);
        $form->handleRequest($request);

        if($request->isMethod("post")) {
            if($form->isSubmitted()) {
                $entityManager = $this->getDoctrine()->getManager();

                $entityManager->persist($worker);
                $entityManager->flush();

                $loggerService->addAdminLog(Logger::ACTION_ADD, $controller, $userId, null, $worker->getId(), Logger::RESULT_SUCCESS);

                $this->addFlash("success", "Dodawanie pracownika przebiegło pomyślnie !");
                return $this->redirectToRoute("worker_index");
            }
        }

        return $this->render("Workers/add.html.twig", ['form' => $form->createView()]);
    }

    /**
     * @param Workers $worker
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function detailsAction(Workers $worker)
    {
        return $this->render("Workers/details.html.twig", ['worker' => $worker]);
    }

    public function removeAction(Workers $worker, Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', 'Tylko administrator może usuwać użytkowników');

        $loggerService = $this->get('app.logger');
        $controller = $request->attributes->get("_route");
        $user = $this->getUser();
        $userId = $user->getId();

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($worker);
        $entityManager->flush();

        $loggerService->addAdminLog(Logger::ACTTION_REMOVE, $controller, $userId, null, null, Logger::RESULT_SUCCESS);

        $this->addFlash('success', 'Pracownik został poprawnie usunięty.');
        return $this->render('Workers/index.html.twig');
    }

    /**
     * @param Workers $worker
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @throws \Exception
     */
    public function editAction(Workers $worker, Request $request)
    {
        $form = $this->createForm(WorkerType::class, $worker);

        $loggerService = $this->get('app.logger');
        $controller = $request->attributes->get("_route");
        $user = $this->getUser();
        $userId = $user->getId();
        $oldValue = clone($worker);

        if($request->isMethod('POST'))
        {
            $form->handleRequest($request);

            if($form->isSubmitted())
            {
                //We handled old values from Workers to show it in logs after
                $oldWorker = new WorkersOld();
                $oldWorker->setFirstName($oldValue->getFirstName());
                $oldWorker->setLastName($oldValue->getLastName());
                $oldWorker->setJobTitle($oldValue->getJobTitle());
                $oldWorker->setHired($oldValue->getHired());
                $oldWorker->setHiredAt($oldValue->getHiredAt());
                $oldWorker->setWorking($oldValue->getWorking());
                //End
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($oldWorker);
                $entityManager->persist($worker);
                $entityManager->flush();

                $loggerService->addAdminLog(Logger::ACTION_EDIT, $controller, $userId, $oldWorker->getId(), $worker->getId(), Logger::RESULT_SUCCESS);

                $this->addFlash('success', 'Użytkownik został pomyślnie edytowany !');
                return $this->redirectToRoute('worker_details', ['id' =>$worker->getId()]);
            }
        }

        return $this->render('Workers/edit.html.twig', ['form'=>$form->createView(), 'worker' => $worker]);
    }
}