<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Workers
 *
 * @ORM\Table(name="workers")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\WorkersRepository")
 */
class Workers
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
     * @ORM\Column(name="first_name", type="string", length=50)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=50)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="job_title", type="string", length=100)
     */
    private $jobTitle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hired_at", type="datetime")
     */
    private $hiredAt;

    /**
     * @var int
     *
     * @ORM\Column(name="working", type="integer", nullable=true)
     */
    private $working;

    /**
     * @var int
     *
     * @ORM\Column(name="hired", type="integer")
     */
    private $hired;

    /**
     * @var ArrayCollection|Cards[]
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Cards", mappedBy="worker")
     * @ORM\JoinColumn(name="cardId", referencedColumnName="id")
     */
    private $cards;

    public function __construct()
    {
        $cards = new ArrayCollection();
    }

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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Workers
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Workers
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set jobTitle
     *
     * @param string $jobTitle
     *
     * @return Workers
     */
    public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;

        return $this;
    }

    /**
     * Get jobTitle
     *
     * @return string
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * Set hiredAt
     *
     * @param \DateTime $hiredAt
     *
     * @return Workers
     */
    public function setHiredAt($hiredAt)
    {
        $this->hiredAt = $hiredAt;

        return $this;
    }

    /**
     * Get hiredAt
     *
     * @return \DateTime
     */
    public function getHiredAt()
    {
        return $this->hiredAt;
    }

    /**
     * Set working
     *
     * @param integer $working
     *
     * @return Workers
     */
    public function setWorking($working)
    {
        $this->working = $working;

        return $this;
    }

    /**
     * Get working
     *
     * @return int
     */
    public function getWorking()
    {
        return $this->working;
    }

    /**
     * Set hired
     *
     * @param integer $hired
     *
     * @return Workers
     */
    public function setHired($hired)
    {
        $this->hired = $hired;

        return $this;
    }

    /**
     * Get hired
     *
     * @return int
     */
    public function getHired()
    {
        return $this->hired;
    }

    public function addCard(Cards $card)
    {
        $this->cards = new $card;
    }

    public function getCards()
    {
        return $this->cards;
    }
}

