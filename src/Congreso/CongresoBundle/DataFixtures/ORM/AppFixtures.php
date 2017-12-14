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
        // create 20 products! Bam!
        for ($i = 0; $i < 5; $i++) {
            $cientifico = new Cientifico();
            //$cientifico->setId(mt_rand (50, 5000) + $i);
            $cientifico->setNombre('Manolo '.$i);
            $cientifico->setEspecialidad('Linked Data');
            $cientifico->setNacimiento(new \DateTime('1980-01-01'));
            $cientifico->setInfo('Porque la Linked Data le gusta a Manolo '.$i);
            $manager->persist($cientifico);
        }

        for ($i = 0; $i < 5; $i++) {
            $track = new Track();
            //$track->setId(mt_rand (50, 5000) + $i);
            $track->setCampo('Web Semantica '.$i);
            $track->setInfo('Porque la Web Semantica es esencial');
            $manager->persist($track);
        }

        for ($i = 0; $i < 5; $i++) {
            $articulo = new Articulo();
            //$articulo->setId(mt_rand (50, 5000) + $i);
            $articulo->setTitulo('Ingeniería Web '.$i);
            $articulo->setCuerpo('Oh lalalala' .$i);
            $articulo->setPublicacion(new \DateTime('2000-01-01'));
            $articulo->setTrack(null);
            $manager->persist($articulo);
        }

        for ($i = 0; $i < 5; $i++) {
            $comentario = new Comment();
            //$cientifico->setId(mt_rand (50, 5000) + $i);
            $comentario->setUser('Pepito '.$i);
            $comentario->setComment('Este es el comentario número '.$i);
            $comentario->setArticulo(null);
            $manager->persist($comentario);
        }

        $manager->flush();
    }
}
