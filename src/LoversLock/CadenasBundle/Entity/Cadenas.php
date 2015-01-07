<?php

namespace LoversLock\CadenasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use LoversLock\UtilisateurBundle\Entity\Utilisateur;

/**
 * Cadenas
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LoversLock\CadenasBundle\Service\CadenasService")
 */
class Cadenas
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
     * @ORM\ManyToMany(targetEntity="LoversLock\UtilisateurBundle\Entity\Utilisateur", mappedBy="cadenas")
     */
    private $utilisateurs;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=255)
     */
    private $statut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="date")
     */
    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateRencontre", type="date")
     */
    private $dateRencontre;

    /**
     * @ORM\OneToMany(targetEntity="Commentaire", mappedBy="cadenas")
     */
    private $commentaires;

    /**
     * @var object
     *
     * @ORM\ManyToOne(targetEntity="TypeCadenas", inversedBy="cadenas")
     * @ORM\JoinColumn(name="type_cadenas_id", referencedColumnName="id")
     */
    private $typeCadenas;

    /**
     * @var string
     *
     * @ORM\Column(name="URLImage", type="string", length=255)
     */
    private $URLImage;


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
     * @return mixed
     */
    public function getUtilisateurs()
    {
        return $this->utilisateurs;
    }

    /**
     * @param mixed $utilisateurs
     */
    public function setUtilisateurs($utilisateurs)
    {
        $this->utilisateurs = $utilisateurs;
    }

    /**
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param string $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return Cadenas
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set statut
     *
     * @param string $statut
     * @return Cadenas
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

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Cadenas
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set dateRencontre
     *
     * @param \DateTime $dateRencontre
     * @return Cadenas
     */
    public function setDateRencontre($dateRencontre)
    {
        $this->dateRencontre = $dateRencontre;

        return $this;
    }

    /**
     * Get dateRencontre
     *
     * @return \DateTime 
     */
    public function getDateRencontre()
    {
        return $this->dateRencontre;
    }

    /**
     * @return mixed
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }

    /**
     * @param mixed $commentaires
     */
    public function setCommentaires($commentaires)
    {
        $this->commentaires = $commentaires;
    }

    /**
     * @return object
     */
    public function getTypeCadenas()
    {
        return $this->typeCadenas;
    }

    /**
     * @param object $typeCadenas
     */
    public function setTypeCadenas($typeCadenas)
    {
        $this->typeCadenas = $typeCadenas;
    }

    /**
     * Set URLImage
     *
     * @param string $URLImage
     * @return Cadenas
     */
    public function setURLImage($URLImage)
    {
        $this->URLImage = $URLImage;

        return $this;
    }

    /**
     * Get URLImage
     *
     * @return string
     */
    public function getURLImage()
    {
        return $this->URLImage;
    }
}
