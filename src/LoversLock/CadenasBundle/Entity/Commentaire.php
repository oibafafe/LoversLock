<?php

namespace LoversLock\CadenasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Commentaire
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
     * @var object
     *
     * @ORM\ManyToOne(targetEntity="Cadenas", inversedBy="commentaires")
     * @ORM\JoinColumn(name="cadenas_id", referencedColumnName="id")
     */
    private $cadenas;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="LoversLock\UtilisateurBundle\Entity\Utilisateur", inversedBy="commentaires")
     * @ORM\JoinColumn(name="utilisateur_id", referencedColumnName="id")
     */
    private $utilisateur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="date")
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=255)
     */
    private $message;


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
     * Set cadenas
     *
     * @param object $cadenas
     * @return Commentaire
     */
    public function setCadenas($cadenas)
    {
        $this->cadenas = $cadenas;

        return $this;
    }

    /**
     * Get cadenas
     *
     * @return object
     */
    public function getCadenas()
    {
        return $this->cadenas;
    }

    /**
     * Set utilisateur
     *
     * @param object $utilisateur
     * @return Commentaire
     */
    public function setUtilisateur($utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return object
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Commentaire
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
     * Set message
     *
     * @param string $message
     * @return Commentaire
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }
}
