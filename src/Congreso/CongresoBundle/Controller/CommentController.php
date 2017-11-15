<?php
// src/Congreso/CongresoBundle/Controller/CommentController.php

namespace Congreso\CongresoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Congreso\CongresoBundle\Entity\Comment;
use Congreso\CongresoBundle\Form\CommentType;

/**
 * Comment controller.
 */
class CommentController extends Controller
{
    public function newAction($articulo_id)
    {
        $articulo = $this->getArticulo($articulo_id);

        $comment = new Comment();
        $comment->setArticulo($articulo);
        $form   = $this->createForm(new CommentType(), $comment);

        return $this->render('CongresoCongresoBundle:Comment:form.html.twig', array('comment' => $comment,'form'   => $form->createView()));
    }

    public function createAction($articulo_id)
    {
        $articulo = $this->getarticulo($articulo_id);

        $comment  = new Comment();
        $comment->setArticulo($articulo);
        $request = $this->getRequest();
        $form = $this->createForm(new CommentType(), $comment);
        $form->bind($request);

        if ($form->isValid()) {
            // TODO: Persist the comment entity

             $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();

            return $this->redirect($this->generateUrl('Congreso_Congreso_show', array('id' => $comment->getarticulo()->getId())) . '#comment-' . $comment->getId());
        }

        return $this->render('CongresoCongresoBundle:Comment:create.html.twig', array('comment' => $comment, 'form' => $form->createView()));
    }

    protected function getarticulo($articulo_id)
    {
        $em = $this->getDoctrine()->getManager();

        $articulo = $em->getRepository('CongresoCongresoBundle:articulo')->find($articulo_id);

        if (!$articulo) {
            throw $this->createNotFoundException('Unable to find Blog articulo.');
        }

        return $articulo;
    }
}
?>
