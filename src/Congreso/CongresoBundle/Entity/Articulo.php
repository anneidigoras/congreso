<?php
// src/Congreso/CongresoBundle/Entity/Articulo.php
namespace Congreso\CongresoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Congreso\CongresoBundle\Entity\Articulo
 *
 * @ORM\Table(name="articulos")
 * @ORM\Entity(repositoryClass="Congreso\CongresoBundle\Entity\ArticuloRepository")
 * @ORM\HasLifecycleCallbacks()
 */

class Articulo
{
	

    /**
    * @ORM\OneToMany(targetEntity="Comment", mappedBy="articulo")
    */
    private $comments;


    /**

     * @ORM\ManyToMany(targetEntity="Track", inversedBy="articulos")

     * @ORM\JoinTable(name="articulos_tracks")

     */

    private $tracks;

    /**

     * @ORM\ManyToMany(targetEntity="Cientifico", inversedBy="articulos")

     * @ORM\JoinTable(name="articulos_cientificos")

     */

    private $cientificos;


    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
	protected $id;

	/**
	* @ORM\Column(type="text")
	*/
	protected $titulo;

	/**
	* @ORM\Column(type="text")
	*/
	protected $cuerpo;
	
	/**
	* @ORM\Column(type="text")
	*/
	protected $tema;

	/**
	* @ORM\Column(type="date")
	*/
	protected $publicacion;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tracks = new \Doctrine\Common\Collections\ArrayCollection();
        $this->cientificos = new \Doctrine\Common\Collections\ArrayCollection();

        $this->setDate(new \DateTime());
    }

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
     * Set titulo
     *
     * @param string $titulo
     * @return Articulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    
        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set cuerpo
     *
     * @param string $cuerpo
     * @return Articulo
     */
    public function setCuerpo($cuerpo)
    {
        $this->cuerpo = $cuerpo;
    
        return $this;
    }

    /**
     * Get cuerpo
     *
     * @return string 
     */
    public function getCuerpo()
    {
        return $this->cuerpo;
    }

    /**
     * Set tema
     *
     * @param string $tema
     * @return Articulo
     */
    public function setTema($tema)
    {
        $this->tema = $tema;
    
        return $this;
    }

    /**
     * Get tema
     *
     * @return string 
     */
    public function getTema()
    {
        return $this->tema;
    }

    /**
     * Set publicacion
     *
     * @param \DateTime $publicacion
     * @return Articulo
     */
    public function setPublicacion($publicacion)
    {
        $this->publicacion = $publicacion;
    
        return $this;
    }

    /**
     * Get publicacion
     *
     * @return \DateTime 
     */
    public function getPublicacion()
    {
        return $this->publicacion;
    }

    /**
     * Add comments
     *
     * @param \Congreso\CongresoBundle\Entity\Comment $comments
     * @return Articulo
     */
    public function addComment(\Congreso\CongresoBundle\Entity\Comment $comments)
    {
        $this->comments[] = $comments;
    
        return $this;
    }

    /**
     * Remove comments
     *
     * @param \Congreso\CongresoBundle\Entity\Comment $comments
     */
    public function removeComment(\Congreso\CongresoBundle\Entity\Comment $comments)
    {
        $this->comments->removeElement($comments);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Add tracks
     *
     * @param \Congreso\CongresoBundle\Entity\Track $tracks
     * @return Articulo
     */
    public function addTrack(\Congreso\CongresoBundle\Entity\Track $tracks)
    {
         $tracks->addArticulo($this);

        $this->tracks[] = $tracks;
    
        return $this;
    }

    /**
     * Remove tracks
     *
     * @param \Congreso\CongresoBundle\Entity\Track $tracks
     */
    public function removeTrack(\Congreso\CongresoBundle\Entity\Track $tracks)
    {
         $tracks->removeArticulo($this);
        $this->tracks->removeElement($tracks);
    }

    /**
     * Get tracks
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTracks()
    {
        return $this->tracks;
    }

    /**
     * Add cientificos
     *
     * @param \Congreso\CongresoBundle\Entity\Cientifico $cientificos
     * @return Articulo
     */
    public function addCientifico(\Congreso\CongresoBundle\Entity\Cientifico $cientificos)
    {
        $cientificos->addArticulo($this);
        $this->cientificos[] = $cientificos;
    
        return $this;
    }

    /**
     * Remove cientificos
     *
     * @param \Congreso\CongresoBundle\Entity\Cientifico $cientificos
     */
    public function removeCientifico(\Congreso\CongresoBundle\Entity\Cientifico $cientificos)
    {
        $cientificos->removeArticulo($this);
        $this->cientificos->removeElement($cientificos);
    }

    /**
     * Get cientificos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCientificos()
    {
        return $this->cientificos;
    }

    public function getnumbercomments()
    {
        return count($this->comments);
    }


    public function __toString()
    {
    return $this->getTitulo();
    }

}
