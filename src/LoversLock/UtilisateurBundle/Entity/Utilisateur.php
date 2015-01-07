<?php

namespace LoversLock\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table()
 * @ORM\Entity
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
     * @ORM\Column(name="idFacebook", type="string", length=255)
     */
    private $idFacebook;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idFacebook
     *
     * @param string $idFacebook
     * @return Utilisateur
     */
    public function setIdFacebook($idFacebook)
    {
        $this->idFacebook = $idFacebook;

        return $this;
    }

    /**
     * Get idFacebook
     *
     * @return string 
     */
    public function getIdFacebook()
    {
        return $this->idFacebook;
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
}
