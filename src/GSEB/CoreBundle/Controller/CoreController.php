<?php

namespace GSEB\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CoreController extends Controller
{
    public function indexAction()
    {
        return $this->render('@GSEBCore/Default/index.html.twig');
    }
}
