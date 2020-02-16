<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gates
 *
 * @ORM\Table(name="gates")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GatesRepository")
 */
class Gates
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
     * @ORM\Column(name="gate_level", type="integer")
     */
    private $gateLevel;


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
     * Set gateLevel
     *
     * @param integer $gateLevel
     *
     * @return Gates
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
}

