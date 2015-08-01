<?php

namespace Universal\UniversalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Universal\UniversalBundle\Entity\UsersRepository")
 */
class Users
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
     * @ORM\Column(name="civilite", type="string", length=50)
     */
    private $civilite;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=50)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="motPasse", type="string", length=50)
     */
    private $motPasse;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=50)
     */
    private $adresse;

    /**
     * @var integer
     *
     * @ORM\Column(name="codePostal", type="integer")
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=50)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="dateEmbauche", type="string", length=50)
     */
    private $dateEmbauche;

    /**
     * @var string
     *
     * @ORM\Column(name="dateCreation", type="string", length=50)
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="dateExpiration", type="string", length=50)
     */
    private $dateExpiration;

    /**
     * @var boolean
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=50)
     */
    private $statut;


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
     * Set civilite
     *
     * @param string $civilite
     * @return Users
     */
    public function setCivilite($civilite)
    {
        $this->civilite = $civilite;
    
        return $this;
    }

    /**
     * Get civilite
     *
     * @return string 
     */
    public function getCivilite()
    {
        return $this->civilite;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Users
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Users
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return Users
     */
    public function setLogin($login)
    {
        $this->login = $login;
    
        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set motPasse
     *
     * @param string $motPasse
     * @return Users
     */
    public function setMotPasse($motPasse)
    {
        $this->motPasse = $motPasse;
    
        return $this;
    }

    /**
     * Get motPasse
     *
     * @return string 
     */
    public function getMotPasse()
    {
        return $this->motPasse;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Users
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    
        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set codePostal
     *
     * @param integer $codePostal
     * @return Users
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;
    
        return $this;
    }

    /**
     * Get codePostal
     *
     * @return integer 
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Users
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    
        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set dateEmbauche
     *
     * @param string $dateEmbauche
     * @return Users
     */
    public function setDateEmbauche($dateEmbauche)
    {
        $this->dateEmbauche = $dateEmbauche;
    
        return $this;
    }

    /**
     * Get dateEmbauche
     *
     * @return string
     */
    public function getDateEmbauche()
    {
        return $this->dateEmbauche;
    }

    /**
     * Set dateCreation
     *
     * @param string $dateCreation
     * @return Users
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    
        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return string
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set dateExpiration
     *
     * @param string $dateExpiration
     * @return Users
     */
    public function setDateExpiration($dateExpiration)
    {
        $this->dateExpiration = $dateExpiration;
    
        return $this;
    }

    /**
     * Get dateExpiration
     *
     * @return string
     */
    public function getDateExpiration()
    {
        return $this->dateExpiration;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     * @return Users
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    
        return $this;
    }

    /**
     * Get etat
     *
     * @return boolean
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set statut
     *
     * @param string $statut
     * @return Users
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    
        return $this;
    }

    /**
     * Get statut
     *
     * @return string 
     */
    public function getStatut()
    {
        return $this->statut;
    }
}
