<?php

namespace Congreso\CongresoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CongresoCongresoBundle:Default:index.html.twig');
    }
}
