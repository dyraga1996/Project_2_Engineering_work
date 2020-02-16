<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WorkersOld
 *
 * @ORM\Table(name="workers_old")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\WorkersOldRepository")
 */
class WorkersOld
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
     * @ORM\Column(name="working", type="integer", nullable=true)
     */
    private $working;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="job_title", type="string", length=255)
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
     * @ORM\Column(name="hired", type="integer")
     */
    private $hired;


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
     * Set working
     *
     * @param integer $working
     *
     * @return WorkersOld
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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return WorkersOld
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
     * @return WorkersOld
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
     * @return WorkersOld
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
     * @return WorkersOld
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
     * Set hired
     *
     * @param integer $hired
     *
     * @return WorkersOld
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
}

