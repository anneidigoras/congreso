<?php
// src/Congreso/CongresoBundle/Entity/Cientifico.php
namespace Congreso\CongresoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Congreso\CongresoBundle\Entity\Cientifico
 *
 * @ORM\Table(name="cientificos")
 * @ORM\Entity(repositoryClass="Congreso\CongresoBundle\Entity\CientificoRepository")
 * @ORM\HasLifecycleCallbacks()
 */

class Cientifico
{
	

    /**

    * @ORM\ManyToMany(targetEntity="Articulo", mappedBy="cientificos")

    */

    private $articulos;


    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
	protected $id;

	/**
	* @ORM\Column(type="text")
	*/
	protected $nombre;

	/**
	* @ORM\Column(type="text")
	*/
	protected $especialidad;
	

	/**
	* @ORM\Column(type="date")
	*/
	protected $nacimiento;


    /**
    * @ORM\Column(type="text")
    */
    protected $info;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->articulos = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombre
     *
     * @param string $nombre
     * @return Cientifico
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set especialidad
     *
     * @param string $especialidad
     * @return Cientifico
     */
    public function setEspecialidad($especialidad)
    {
        $this->especialidad = $especialidad;
    
        return $this;
    }

    /**
     * Get especialidad
     *
     * @return string 
     */
    public function getEspecialidad()
    {
        return $this->especialidad;
    }

    /**
     * Set nacimiento
     *
     * @param \DateTime $nacimiento
     * @return Cientifico
     */
    public function setNacimiento($nacimiento)
    {
        $this->nacimiento = $nacimiento;
    
        return $this;
    }

    /**
     * Get nacimiento
     *
     * @return \DateTime 
     */
    public function getNacimiento()
    {
        return $this->nacimiento;
    }


    /**
     * Set info
     *
     * @param string $info
     * @return Cientifico
     */
    public function setInfo($info)
    {
        $this->info = $info;
    
        return $this;
    }

    /**
     * Get info
     *
     * @return string 
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Add articulos
     *
     * @param \Congreso\CongresoBundle\Entity\Articulo $articulos
     * @return Cientifico
     */
    public function addArticulo(\Congreso\CongresoBundle\Entity\Articulo $articulos)
    {
        $this->articulos[] = $articulos;
    
        return $this;
    }

    /**
     * Remove articulos
     *
     * @param \Congreso\CongresoBundle\Entity\Articulo $articulos
     */
    public function removeArticulo(\Congreso\CongresoBundle\Entity\Articulo $articulos)
    {
        $this->articulos->removeElement($articulos);
    }

    /**
     * Get articulos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArticulos()
    {
        return $this->articulos;
    }
}
