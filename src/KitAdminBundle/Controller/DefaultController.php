<?php

namespace KitAdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KitAdminBundle:Default:index.html.twig');
    }
    public function listAction()
    {
        return $this->render('KitAdminBundle:Default:index.html.twig');
    }
    public function addAction()
    {
        return $this->render('KitAdminBundle:Default:index.html.twig');
    }
}
