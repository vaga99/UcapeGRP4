<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annee
 *
 * @ORM\Table(name="annee")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AnneeRepository")
 */
class Annee
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_annee", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @ORM\OneToMany(targetEntity="Appartenir", mappedBy="annees")
     */
    private $appartenir;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_annee", type="string", length=50)
     */
    private $libelleAnnee;


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
     * Set libelleAnnee
     *
     * @param string $libelleAnnee
     *
     * @return Annee
     */
    public function setLibelleAnnee($libelleAnnee)
    {
        $this->libelleAnnee = $libelleAnnee;

        return $this;
    }

    /**
     * Get libelleAnnee
     *
     * @return string
     */
    public function getLibelleAnnee()
    {
        return $this->libelleAnnee;
    }

    /**
     * Get idAnnee
     *
     * @return integer
     */
    public function getIdAnnee()
    {
        return $this->idAnnee;
    }

    /**
     * Set appartenir
     *
     * @param \AppBundle\Entity\Appartenir $appartenir
     *
     * @return Annee
     */
    public function setAppartenir(\AppBundle\Entity\Appartenir $appartenir = null)
    {
        $this->appartenir = $appartenir;

        return $this;
    }

    /**
     * Get appartenir
     *
     * @return \AppBundle\Entity\Appartenir
     */
    public function getAppartenir()
    {
        return $this->appartenir;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->appartenir = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add appartenir
     *
     * @param \AppBundle\Entity\Appartenir $appartenir
     *
     * @return Annee
     */
    public function addAppartenir(\AppBundle\Entity\Appartenir $appartenir)
    {
        $this->appartenir[] = $appartenir;

        return $this;
    }

    /**
     * Remove appartenir
     *
     * @param \AppBundle\Entity\Appartenir $appartenir
     */
    public function removeAppartenir(\AppBundle\Entity\Appartenir $appartenir)
    {
        $this->appartenir->removeElement($appartenir);
    }
}
