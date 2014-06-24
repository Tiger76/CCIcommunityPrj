<?php

namespace CCICommunity\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="CCICommunity\BaseBundle\Entity\PromoRepository")
 */
class Promo
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
     * @ORM\Column(name="nom_promo", type="string", length=255)
     */
    private $nomPromo;


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
     * Set nomPromo
     *
     * @param string $nomPromo
     * @return Promo
     */
    public function setNomPromo($nomPromo)
    {
        $this->nomPromo = $nomPromo;

        return $this;
    }

    /**
     * Get nomPromo
     *
     * @return string 
     */
    public function getNomPromo()
    {
        return $this->nomPromo;
    }
    
    /**
    * * @ORM\OneToMany(targetEntity="CCICommunity\BaseBundle\Entity\Utilisateur", mappedBy="promo")
    
    */
        private $utilisateurs;
        
        
   /**
    * * @ORM\OneToOne(targetEntity="CCICommunity\BaseBundle\Entity\Utilisateur", mappedBy="promochef")
    
    */
        private $admin;
        
    /**
    * * @ORM\OneToMany(targetEntity="CCICommunity\BaseBundle\Entity\VDC", mappedBy="promo")
    
    */
        private $vdcs;
        
        
    /**
     * Set Utilisateurs
     *
     * @param string $utilisateurs
     * @return Promo
     */
    public function setUtilisateurs($utilisateurs)
    {
        $this->utilisateurs = $utilisateurs;

        return $this;
    }

    /**
     * Get utilisateurs
     *
     * @return string 
     */
    public function getUtilisateurs()
    {
        return $this->utilisateurs;
    }
    
     /**
     * Set Admin
     *
     * @param string $admin
     * @return Promo
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;

        return $this;
    }

    /**
     * Get Admin
     *
     * @return utilisateur
     */
    public function getAdmin()
    {
        return $this->admin;
    }
    
     /**
     * Set vdcs
     *
     * @param string $vdcs
     * @return vdcs
     */
    public function setVdcs($vdcs)
    {
        $this->vdcs = $vdcs;

        return $this;
    }

    /**
     * Get vdcs
     *
     * @return vdcs
     */
    public function getVdcs()
    {
        return $this->vdcs;
    }
}
