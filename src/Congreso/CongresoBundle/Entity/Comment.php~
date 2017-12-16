<?php

namespace Congreso\CongresoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;


/**
 * Congreso\CongresoBundle\Entity\Comment
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Congreso\CongresoBundle\Entity\CommentRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Comment
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $user;

    /**
     * @ORM\Column(type="text")
     */
    private $comment;

    /**
     * @ORM\Column(type="boolean")
     */
    private $approved;

    /**
     * @ORM\ManyToOne(targetEntity="Articulo", inversedBy="comments")
     * @ORM\JoinColumn(name="articulo_id", referencedColumnName="id")
     */
    private $articulo;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updated;



    public function __construct()
    {
        $this->setCreated(new \DateTime());
        $this->setUpdated(new \DateTime());

        $this->setApproved(true);
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
     * Set user
     *
     * @param string $user
     * @return Comment
     */
    public function setUser($user)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return string 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    
        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set approved
     *
     * @param boolean $approved
     * @return Comment
     */
    public function setApproved($approved)
    {
        $this->approved = $approved;
    
        return $this;
    }

    /**
     * Get approved
     *
     * @return boolean 
     */
    public function getApproved()
    {
        return $this->approved;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Comment
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return Comment
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    
        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set articulo
     *
     * @param \Congreso\CongresoBundle\Entity\Articulo $articulo
     * @return Comment
     */
    public function setArticulo(\Congreso\CongresoBundle\Entity\Articulo $articulo = null)
    {
        $this->articulo = $articulo;
    
        return $this;
    }

    /**
     * Get articulo
     *
     * @return \Congreso\CongresoBundle\Entity\Articulo 
     */
    public function getArticulo()
    {
        return $this->articulo;
    }

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
    $metadata->addPropertyConstraint('user', new NotBlank(array('message' => 'Debes indicar tu nombre')));
    $metadata->addPropertyConstraint('comment', new NotBlank(array('message' => 'Debes escribir tu comentario')));
    }

    /**
     * @return string
     */
    public function __toString() : string
    {
        return sprintf('%s (%s)', $this->getId(), $this->getComment());
    }
}
