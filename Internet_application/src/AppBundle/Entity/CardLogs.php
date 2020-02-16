<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CardLogs
 *
 * @ORM\Table(name="card_logs")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CardLogsRepository")
 */
class CardLogs
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="orginal_datetime", type="datetime")
     */
    private $orginalDatetime;

    /**
     * @var int
     *
     * @ORM\Column(name="card_id", type="bigint")
     */
    private $cardId;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=255)
     */
    private $action;

    /**
     * @var int
     *
     * @ORM\Column(name="gate_level", type="integer")
     */
    private $gateLevel;

    /**
     * @var int
     *
     * @ORM\Column(name="result", type="boolean", nullable=false)
     */
    private $result;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set orginalDatetime
     *
     * @param \DateTime $orginalDatetime
     *
     * @return CardLogs
     */
    public function setOrginalDatetime($orginalDatetime)
    {
        $this->orginalDatetime = $orginalDatetime;

        return $this;
    }

    /**
     * Get orginalDatetime
     *
     * @return \DateTime
     */
    public function getOrginalDatetime()
    {
        return $this->orginalDatetime;
    }

    /**
     * Set cardId
     *
     * @param integer $cardId
     *
     * @return CardLogs
     */
    public function setCardId($cardId)
    {
        $this->cardId = $cardId;

        return $this;
    }

    /**
     * Get cardId
     *
     * @return int
     */
    public function getCardId()
    {
        return $this->cardId;
    }

    /**
     * Set action
     *
     * @param string $action
     *
     * @return CardLogs
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set gateLevel
     *
     * @param integer $gateLevel
     *
     * @return CardLogs
     */
    public function setGateLevel($gateLevel)
    {
        $this->gateLevel = $gateLevel;

        return $this;
    }

    /**
     * Get gateLevel
     *
     * @return int
     */
    public function getGateLevel()
    {
        return $this->gateLevel;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return CardLogs
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return CardLogs
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param int $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }


}

