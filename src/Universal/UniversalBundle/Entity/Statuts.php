<?php

namespace Universal\UniversalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * statuts
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Universal\UniversalBundle\Entity\statutsRepository")
 */
class Statuts
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
     * @var string
     *
     * @ORM\Column(name="visiteur", type="string", length=100)
     */
    private $visiteur;

    /**
     * @var string
     *
     * @ORM\Column(name="comptable", type="string", length=100)
     */
    private $comptable;

    /**
     * @var string
     *
     * @ORM\Column(name="administrateur", type="string", length=100)
     */
    private $administrateur;

    /**
     * @var string
     *
     * @ORM\Column(name="superviseur", type="string", length=100)
     */
    private $superviseur;

    /**
     * @var string
     *
     * @ORM\Column(name="praticien", type="string", length=100)
     */
    private $praticien;


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
     * Set visiteur
     *
     * @param string $visiteur
     * @return statuts
     */
    public function setVisiteur($visiteur)
    {
        $this->visiteur = $visiteur;
    
        return $this;
    }

    /**
     * Get visiteur
     *
     * @return string 
     */
    public function getVisiteur()
    {
        return $this->visiteur;
    }

    /**
     * Set comptable
     *
     * @param string $comptable
     * @return statuts
     */
    public function setComptable($comptable)
    {
        $this->comptable = $comptable;
    
        return $this;
    }

    /**
     * Get comptable
     *
     * @return string 
     */
    public function getComptable()
    {
        return $this->comptable;
    }

    /**
     * Set administrateur
     *
     * @param string $administrateur
     * @return statuts
     */
    public function setAdministrateur($administrateur)
    {
        $this->administrateur = $administrateur;
    
        return $this;
    }

    /**
     * Get administrateur
     *
     * @return string 
     */
    public function getAdministrateur()
    {
        return $this->administrateur;
    }

    /**
     * Set superviseur
     *
     * @param string $superviseur
     * @return statuts
     */
    public function setSuperviseur($superviseur)
    {
        $this->superviseur = $superviseur;
    
        return $this;
    }

    /**
     * Get superviseur
     *
     * @return string 
     */
    public function getSuperviseur()
    {
        return $this->superviseur;
    }

    /**
     * Set praticien
     *
     * @param string $praticien
     * @return statuts
     */
    public function setPraticien($praticien)
    {
        $this->praticien = $praticien;
    
        return $this;
    }

    /**
     * Get praticien
     *
     * @return string 
     */
    public function getPraticien()
    {
        return $this->praticien;
    }
}
