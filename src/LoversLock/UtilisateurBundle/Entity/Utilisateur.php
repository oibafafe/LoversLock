<?php

namespace LoversLock\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use LoversLock\CadenasBundle\Entity\Cadenas;

/**
 * Utilisateur
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LoversLock\UtilisateurBundle\Service\UtilisateurService")
 */
class Utilisateur
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
     * @ORM\Column(name="idSite", type="string", length=255)
     */
    private $idSite;

    /**
     * @var string
     *
     * @ORM\Column(name="nomSite", type="string", length=255)
     */
    private $nomSite;

    /**
     * @ORM\ManyToMany(targetEntity="LoversLock\CadenasBundle\Entity\Cadenas", inversedBy="utilisateurs")
     * @ORM\JoinTable(name="utilisateurs_liste_cadenas",
     *      joinColumns={@ORM\JoinColumn(name="utilisateur_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="cadenas_id", referencedColumnName="id")}
     *      )
     */
    private $cadenas;

    /**
     * @ORM\ManyToMany(targetEntity="LoversLock\CadenasBundle\Entity\TypeCadenas", inversedBy="utilisateurs")
     * @ORM\JoinTable(name="utilisateurs_type_cadenas",
     *      joinColumns={@ORM\JoinColumn(name="utilisateur_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="type_cadenas_id", referencedColumnName="id")}
     *      )
     */
    private $typeCadenas;

    /**
     * @ORM\OneToMany(targetEntity="LoversLock\CadenasBundle\Entity\Commentaire", mappedBy="utilisateur")
     */
    private $commentaires;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateInscription", type="date")
     */
    private $dateInscription;


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
     * Set idSite
     *
     * @param string $idSite
     * @return Utilisateur
     */
    public function setIdSite($idSite)
    {
        $this->idSite = $idSite;

        return $this;
    }

    /**
     * Get idSite
     *
     * @return string
     */
    public function getIdSite()
    {
        return $this->idSite;
    }

    /**
     * @return string
     */
    public function getNomSite()
    {
        return $this->nomSite;
    }

    /**
     * @param string $nomSite
     */
    public function setNomSite($nomSite)
    {
        $this->nomSite = $nomSite;
    }

    /**
     * @return mixed
     */
    public function getCadenas()
    {
        return $this->cadenas;
    }

    /**
     * @param mixed $cadenas
     */
    public function setCadenas($cadenas)
    {
        $this->cadenas = $cadenas;
    }

    /**
     * @return mixed
     */
    public function getTypeCadenas()
    {
        return $this->typeCadenas;
    }

    /**
     * @param mixed $typeCadenas
     */
    public function setTypeCadenas($typeCadenas)
    {
        $this->typeCadenas = $typeCadenas;
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
     * @return mixed
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * @param mixed $dateInscription
     */
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;
    }

    public function __construct()
    {
        $this->dateInscription = new \DateTime('NOW');
    }
}
