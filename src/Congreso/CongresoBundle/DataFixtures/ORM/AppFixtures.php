<?php

// src/Congreso/DataFixtures/AppFixtures.php
namespace Congreso\DataFixtures;

use Congreso\CongresoBundle\Entity\Cientifico;
use Congreso\CongresoBundle\Entity\Track;
use Congreso\CongresoBundle\Entity\Articulo;
use Congreso\CongresoBundle\Entity\Comment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 5; $i++) {
            $cientifico = new Cientifico();
            $cientifico->setNombre('Manolo '.$i);
            $cientifico->setEspecialidad('Linked Data');
            $cientifico->setNacimiento(new \DateTime('1980-01-01'));
            $cientifico->setInfo('Porque la Linked Data le gusta a Manolo '.$i);
            $manager->persist($cientifico);
            $track = new Track();
            $track->setCampo('Web Semantica '.$i);
            $track->setInfo('Porque la Web Semantica es esencial');
            $manager->persist($track);
            $articulo = new Articulo();
            $articulo->setTitulo('Ingeniería Web '.$i);
            $articulo->setCuerpo('Oh lalalala' .$i);
            $articulo->setPublicacion(new \DateTime('2000-01-01'));
            $articulo->setTrack($track);
            $manager->persist($articulo);
            $comentario = new Comment();
            $comentario->setUser('Pepito '.$i);
            $comentario->setComment('Este es el comentario número '.$i);
            $comentario->setArticulo($articulo);
            $manager->persist($comentario);
        }
        $manager->flush();
    }
}
