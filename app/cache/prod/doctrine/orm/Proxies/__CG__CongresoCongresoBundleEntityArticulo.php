<?php

namespace Proxies\__CG__\Congreso\CongresoBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Articulo extends \Congreso\CongresoBundle\Entity\Articulo implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Congreso\\CongresoBundle\\Entity\\Articulo' . "\0" . 'comments', '' . "\0" . 'Congreso\\CongresoBundle\\Entity\\Articulo' . "\0" . 'track', '' . "\0" . 'Congreso\\CongresoBundle\\Entity\\Articulo' . "\0" . 'cientificos', 'id', 'titulo', 'cuerpo', 'publicacion');
        }

        return array('__isInitialized__', '' . "\0" . 'Congreso\\CongresoBundle\\Entity\\Articulo' . "\0" . 'comments', '' . "\0" . 'Congreso\\CongresoBundle\\Entity\\Articulo' . "\0" . 'track', '' . "\0" . 'Congreso\\CongresoBundle\\Entity\\Articulo' . "\0" . 'cientificos', 'id', 'titulo', 'cuerpo', 'publicacion');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Articulo $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitulo($titulo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitulo', array($titulo));

        return parent::setTitulo($titulo);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitulo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitulo', array());

        return parent::getTitulo();
    }

    /**
     * {@inheritDoc}
     */
    public function setCuerpo($cuerpo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCuerpo', array($cuerpo));

        return parent::setCuerpo($cuerpo);
    }

    /**
     * {@inheritDoc}
     */
    public function getCuerpo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCuerpo', array());

        return parent::getCuerpo();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublicacion($publicacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublicacion', array($publicacion));

        return parent::setPublicacion($publicacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublicacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublicacion', array());

        return parent::getPublicacion();
    }

    /**
     * {@inheritDoc}
     */
    public function addComment(\Congreso\CongresoBundle\Entity\Comment $comments)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addComment', array($comments));

        return parent::addComment($comments);
    }

    /**
     * {@inheritDoc}
     */
    public function removeComment(\Congreso\CongresoBundle\Entity\Comment $comments)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeComment', array($comments));

        return parent::removeComment($comments);
    }

    /**
     * {@inheritDoc}
     */
    public function getComments()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComments', array());

        return parent::getComments();
    }

    /**
     * {@inheritDoc}
     */
    public function addCientifico(\Congreso\CongresoBundle\Entity\Cientifico $cientificos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCientifico', array($cientificos));

        return parent::addCientifico($cientificos);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCientifico(\Congreso\CongresoBundle\Entity\Cientifico $cientificos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCientifico', array($cientificos));

        return parent::removeCientifico($cientificos);
    }

    /**
     * {@inheritDoc}
     */
    public function getCientificos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCientificos', array());

        return parent::getCientificos();
    }

    /**
     * {@inheritDoc}
     */
    public function getNumberOfComments()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumberOfComments', array());

        return parent::getNumberOfComments();
    }

    /**
     * {@inheritDoc}
     */
    public function ParsearFecha()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'ParsearFecha', array());

        return parent::ParsearFecha();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function setTrack(\Congreso\CongresoBundle\Entity\Track $track = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTrack', array($track));

        return parent::setTrack($track);
    }

    /**
     * {@inheritDoc}
     */
    public function getTrack()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTrack', array());

        return parent::getTrack();
    }

}
