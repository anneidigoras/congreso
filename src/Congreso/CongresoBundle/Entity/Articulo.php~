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
     * @ORM\ManyToOne(targetEntity="Track", inversedBy="articulos")
     * @ORM\JoinColumn(name="track_id", referencedColumnName="id")
     */

    private $track;

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
	* @ORM\Column(type="date")
	*/
	protected $publicacion;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->cientificos = new \Doctrine\Common\Collections\ArrayCollection();
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

    function getNumberOfComments()
    {
        return count($this->comments);
    }


     function ParsearFecha()
    {
        $dia;
        if($this->getPublicacion()->format('d')=="01")$dia="1";
        elseif($this->getPublicacion()->format('d')=="02")$dia="2";
        elseif($this->getPublicacion()->format('d')=="03")$dia="3";
        elseif($this->getPublicacion()->format('d')=="04")$dia="4";
        elseif($this->getPublicacion()->format('d')=="05")$dia="5";
        elseif($this->getPublicacion()->format('d')=="06")$dia="6";
        elseif($this->getPublicacion()->format('d')=="07")$dia="7";
        elseif($this->getPublicacion()->format('d')=="08")$dia="8";
        elseif($this->getPublicacion()->format('d')=="09")$dia="9";
        else{$dia=$this->getPublicacion()->format('d');}


        $mes;
        if($this->getPublicacion()->format('m')=="01")$mes="enero";
        elseif($this->getPublicacion()->format('m')=="02")$mes="febrero";
        elseif($this->getPublicacion()->format('m')=="03")$mes="marzo";
        elseif($this->getPublicacion()->format('m')=="04")$mes="abril";
        elseif($this->getPublicacion()->format('m')=="05")$mes="mayo";
        elseif($this->getPublicacion()->format('m')=="06")$mes="junio";
        elseif($this->getPublicacion()->format('m')=="07")$mes="julio";
        elseif($this->getPublicacion()->format('m')=="08")$mes="agosto";
        elseif($this->getPublicacion()->format('m')=="09")$mes="septiembre";
        elseif($this->getPublicacion()->format('m')=="10")$mes="octubre";
        elseif($this->getPublicacion()->format('m')=="11")$mes="noviembre";
        else{$mes="diciembre";}


        $año=$this->getPublicacion()->format('Y');



        $fecha_final=$dia." de ".$mes." de ".$año;

        return $fecha_final;
                  
    }


    public function __toString()
    {
    return $this->getTitulo();
    }


    /**
     * Set track
     *
     * @param \Congreso\CongresoBundle\Entity\Track $track
     * @return Articulo
     */
    public function setTrack(\Congreso\CongresoBundle\Entity\Track $track = null)
    {
        $this->track = $track;
    
        return $this;
    }

    /**
     * Get track
     *
     * @return \Congreso\CongresoBundle\Entity\Track 
     */
    public function getTrack()
    {
        return $this->track;
    }
}
