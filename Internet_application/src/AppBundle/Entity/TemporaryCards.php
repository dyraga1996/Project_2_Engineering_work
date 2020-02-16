<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TemporaryCards
 *
 * @ORM\Table(name="temporary_cards")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TemporaryCardsRepository")
 */
class TemporaryCards
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
     * @var int
     *
     * @ORM\Column(name="gate_id", type="integer")
     */
    private $gateId;

    /**
     * @var string
     *
     * @ORM\Column(name="temp_cardId", type="string")
     */
    private $cardId;


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
     * Set gateId
     *
     * @param integer $gateId
     *
     * @return TemporaryCards
     */
    public function setGateId($gateId)
    {
        $this->gateId = $gateId;

        return $this;
    }

    /**
     * Get gateId
     *
     * @return int
     */
    public function getGateId()
    {
        return $this->gateId;
    }

    /**
     * @return string
     */
    public function getCardId()
    {
        return $this->cardId;
    }

    /**
     * @param $cardId
     * @return $this
     */
    public function setCardId($cardId)
    {
        $this->cardId = $cardId;

        return $this;
    }


}

