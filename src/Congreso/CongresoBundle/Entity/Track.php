<?php
// src/Congreso/CongresoBundle/Entity/Track.php
namespace Congreso\CongresoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Congreso\CongresoBundle\Entity\Track
 *
 * @ORM\Table(name="track")
 * @ORM\Entity(repositoryClass="Congreso\CongresoBundle\Entity\TrackRepository")
 * @ORM\HasLifecycleCallbacks()
 */

class Track
{
	

    /**
    * @ORM\OneToMany(targetEntity="Articulo", mappedBy="track")
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
	protected $campo;

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
     * Set campo
     *
     * @param string $campo
     * @return Track
     */
    public function setCampo($campo)
    {
        $this->campo = $campo;
    
        return $this;
    }

    /**
     * Get campo
     *
     * @return string 
     */
    public function getCampo()
    {
        return $this->campo;
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
     * @return Track
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

    public function __toString()
    {
        return sprintf('%s (%s)', $this->getId(), $this->getCampo());
    }
}
