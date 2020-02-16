<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cards
 *
 * @ORM\Table(name="cards")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CardsRepository")
 */
class Cards
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
     * @ORM\Column(name="card_id", type="string", length=255, unique=true)
     */
    private $cardId;

    /**
     * @var int
     *
     * @ORM\Column(name="access_level", type="integer")
     */
    private $accessLevel;

    /**
     * @var Workers
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Workers", inversedBy="cards")
     */
    private $worker;


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
     * @return Cards
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
     * @return Cards
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
     * @return Workers
     */
    public function getWorker()
    {
        return $this->worker;
    }

    /**
     * @param $worker
     */
    public function setWorker($worker)
    {
        $this->worker = $worker;
    }


}

