<?php
/**
 * Created by PhpStorm.
 * User: Norbert Orlikowski
 * Date: 12.10.2018
 * Time: 15:52
 */

namespace AppBundle\Service;

use AppBundle\Entity\AdminLogs;
use AppBundle\Entity\CardLogs;
use Doctrine\ORM\EntityManagerInterface;

class Logger
{
    //Constant actions - Admin Logs
    const ACTION_EDIT = "edit";
    const ACTION_ADD = "add";
    const ACTTION_REMOVE = "remove";
    const ACTION_TEMP_ADD = "temporary_add";
    const RESULT_SUCCESS = "success";
    const RESULT_FAILED = "failed";

    //Constant actions - Card Logs
    const ACTION_AUTHORIZE = "authorize";
    const ACTION_NOT_AUTHORIZE = "not authorize";
    const ACTION_TEST_CONNECTION = "test connection";
    const ACTION_ADD_CARD = "add card";
    const ACCESS_RESULT_SUCCESS = 1;
    const ACCESS_RESULT_FAILURE = 0;
    //End
    private $em;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }

    /**
     * @param string $action
     * @param string $controller
     * @param integer $user
     * @param mixed $oldValue
     * @param mixed $newValue
     * @param boolean $result
     * @throws \Exception
     */
    public function addAdminLog($action, $controller, $user, $oldValue, $newValue, $result)
    {
        $log = new AdminLogs();
        $nowDate = new \DateTime();
        //Budowanie obiektu
        $log->setAction($action);
        $log->setController($controller);
        $log->setUserId($user);
        $log->setOldValue($oldValue);
        $log->setNewValue($newValue);
        $log->setResult($result);
        $log->setCreatedAt($nowDate);
        $log->setUpdatedAt($nowDate);
        //END

        $entityManager = $this->em;
        $entityManager->persist($log);
        $entityManager->flush();
    }

    /**
     * @param string $cardId
     * @param $action
     * @param $gateLevel
     * @param $result
     * @param int $orginalDate
     * @throws \Exception
     */
    public function addCardLog($cardId, $action, $gateLevel, $result, $orginalDate = 0)
    {
        $log = new CardLogs();
        if($orginalDate == 0) {
            $orginalDate = new \DateTime();
        }
        $log->setOrginalDatetime($orginalDate);
        $log->setAction($action);
        $log->setCardId($cardId);
        $log->setGateLevel($gateLevel);
        $log->setResult($result);
        $log->setCreatedAt(new \DateTime());
        $log->setUpdatedAt(new \DateTime());

        $entityManager = $this->em;
        $entityManager->persist($log);
        $entityManager->flush();
    }
}