<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cards_Old
 *
 * @ORM\Table(name="cards__old")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Cards_OldRepository")
 */
class Cards_Old
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
     * @var string
     *
     * @ORM\Column(name="card_id", type="string", length=255)
     */
    private $cardId;

    /**
     * @var int
     *
     * @ORM\Column(name="access_level", type="integer")
     */
    private $accessLevel;

    /**
     * @var int
     *
     * @ORM\Column(name="worker_id", type="integer")
     */
    private $workerId;


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
     * Set cardId
     *
     * @param string $cardId
     *
     * @return Cards_Old
     */
    public function setCardId($cardId)
    {
        $this->cardId = $cardId;

        return $this;
    }

    /**
     * Get cardId
     *
     * @return string
     */
    public function getCardId()
    {
        return $this->cardId;
    }

    /**
     * Set accessLevel
     *
     * @param integer $accessLevel
     *
     * @return Cards_Old
     */
    public function setAccessLevel($accessLevel)
    {
        $this->accessLevel = $accessLevel;

        return $this;
    }

    /**
     * Get accessLevel
     *
     * @return int
     */
    public function getAccessLevel()
    {
        return $this->accessLevel;
    }

    /**
     * Set workerId
     *
     * @param integer $workerId
     *
     * @return Cards_Old
     */
    public function setWorkerId($workerId)
    {
        $this->workerId = $workerId;

        return $this;
    }

    /**
     * Get workerId
     *
     * @return int
     */
    public function getWorkerId()
    {
        return $this->workerId;
    }
}

