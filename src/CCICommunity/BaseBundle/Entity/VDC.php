<?php

namespace CCICommunity\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * VDC
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="CCICommunity\BaseBundle\Entity\VDCRepository")
 */
class VDC
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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="text")
     */
    private $texte;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255)
     */
    private $auteur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @Assert\File(maxSize="8000000")
     */
    public $file;


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
     * Set titre
     *
     * @param string $titre
     * @return VDC
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set texte
     *
     * @param string $texte
     * @return VDC
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string 
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return VDC
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        if($this->image){
            return "/ccicommunityprj/web/".$this->getUploadDir()."/".$this->image;
        }
        else{
            return null;
        }
    }

    /**
     * Set typeAuteur
     *
     * @param string $typeAuteur
     * @return VDC
     */
    public function setAuteur($newAuteur)
    {
        $this->auteur = $newAuteur;

        return $this;
    }

    /**
     * Get typeAuteur
     *
     * @return string 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return VDC
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
    
    /**
      * @ORM\ManyToOne(targetEntity="CCICommunity\BaseBundle\Entity\Promo", inversedBy="vdcs")
    * @ORM\JoinColumn(nullable=false)
    */
    private $promo;
    
     /**
     * Set promo
     *
     * @param string $promo
     * @return Promo
     */
    public function setPromo($promo)
    {
        $this->promo = $promo;

        return $this;
    }

    /**
     * Get promo
     *
     * @return string 
     */
    public function getPromo()
    {
        return $this->promo;
    }

        public function getAbsolutePath()
    {
        return null === $this->image ? null : $this->getUploadRootDir().'/'.$this->image;
    }

    public function getWebPath()
    {
        return null === $this->image ? null : $this->getUploadDir().'/'.$this->image;
    }

    protected function getUploadRootDir()
    {
        // le chemin absolu du répertoire où les documents uploadés doivent être sauvegardés
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // on se débarrasse de « __DIR__ » afin de ne pas avoir de problème lorsqu'on affiche
        // le document/image dans la vue.
        return 'uploads/img/vdc';
    }

    public function upload()
    {
            // la propriété « file » peut être vide si le champ n'est pas requis
            if (null !== $this->file) {

                // utilisez le nom de fichier original ici mais
                // vous devriez « l'assainir » pour au moins éviter
                // quelconques problèmes de sécurité

                // la méthode « move » prend comme arguments le répertoire cible et
                // le nom de fichier cible où le fichier doit être déplacé
                $this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());

                // définit la propriété « path » comme étant le nom de fichier où vous
                // avez stocké le fichier
                $this->image = $this->file->getClientOriginalName();

                // « nettoie » la propriété « file » comme vous n'en aurez plus besoin
                $this->file = null;
            }
    }
}
