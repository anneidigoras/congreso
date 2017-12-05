<?php

namespace Congreso\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CongresoAdminBundle:Default:index.html.twig');
    }
}
