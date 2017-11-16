<?php
// src/Congreso/CongresoBundle/Controller/TrackController.php
namespace Congreso\CongresoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TrackController extends Controller
{


public function listAction($id)
{
	$track = $this->get('doctrine')->getManager()->getRepository('CongresoCongresoBundle:Track')->find($id);
	
	if (!$track) {
		throw $this->createNotFoundException('No se ha encontrado el articulo.');
	}

	$articulos = $track->getArticulos();

	return $this->render('CongresoCongresoBundle:Track:arttrac.html.twig', array('track' => $track, 'articulos' => $articulos));

	
}



}
?>