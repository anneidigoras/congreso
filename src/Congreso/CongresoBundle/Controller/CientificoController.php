<?php
// src/Congreso/CongresoBundle/Controller/CientificoController.php
namespace Congreso\CongresoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CientificoController extends Controller
{


public function listAction($id)
{
	$cientifico = $this->get('doctrine')->getManager()->getRepository('CongresoCongresoBundle:Cientifico')->find($id);
	
	if (!$cientifico) {
		throw $this->createNotFoundException('No se ha encontrado el articulo.');
	}

	$articulos = $cientifico->getArticulos();

	return $this->render('CongresoCongresoBundle:Cientifico:artcen.html.twig', array('cientifico' => $cientifico, 'articulos' => $articulos));

	
}



}
?>