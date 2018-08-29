<?php

namespace GSEB\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GSEBUserBundle:Default:index.html.twig');
    }
}
