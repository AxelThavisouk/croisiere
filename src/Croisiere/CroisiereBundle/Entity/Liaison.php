<?php

namespace Croisiere\CroisiereBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Liaison
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Croisiere\CroisiereBundle\Entity\LiaisonRepository")
 */
class Liaison
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="distance", type="float")
     */
    private $distance;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set distance
     *
     * @param float $distance
     * @return Liaison
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;
    
        return $this;
    }

    /**
     * Get distance
     *
     * @return float 
     */
    public function getDistance()
    {
        return $this->distance;
    }
}
