<?php
// src/Blogger/BlogBundle/Controller/BlogController.php
namespace Congreso\CongresoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CongresoController extends Controller
{

	public function listAction()
	{
	$articulos = $this->get('doctrine')->getManager()->getRepository('CongresoCongresoBundle:Cientifico')->getLatestArticulos();

	return $this->render('CongresoCongresoBundle:Congreso:list.html.twig', array('cientificos' => $cientificos));
	}

	/*public function getBody($length = null)
{
	if (false === is_null($length) && $length > 0 && strlen($this->body) > $length)
		return substr($this->body, 0, $length) . "(...)";
	else
		return $this->body;
}*/

public function showAction($id)
{
	$articulo = $this->get('doctrine')->getManager()->getRepository('CongresoCongresoBundle:Articulo')->find($id);
	
	if (!$articulo) {
		throw $this->createNotFoundException('No se ha encontrado el articulo.');
	}

	/*$tags = $cientifico->getTags();
	$comments = $this->get('doctrine')->getManager()->getRepository('BloggerBlogBundle:Comment')->getCommentsForPost($post->getId());
*/
	return $this->render('CongresoCongresoBundle:Congreso:show.html.twig', array('cientifico' => $cientifico, 'comments' => $comments ,'tracks' => $tracks, 'cientificos' => $cientificos));
}



}
?>