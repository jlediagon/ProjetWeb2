<?php

namespace GSEB\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class MainController extends Controller
{
    public function indexAction($action, Request $request)
    {
        $session= $request->getSession();                
        if ($action ==  "add")
        {
            $session->set('Action',$action);
            return $this->render('@GSEBMain/Action/add.html.twig');            
        }
        if ($action == "edit")
        {
            $session->set('Action',$action);
            return $this->render('@GSEBMain/Action/edit.html.twig');            
        }
        if ($action == "delete")
        {
            $session->set('Action',$action);            
            return $this->render('@GSEBMain/Action/delete.html.twig');
        }    
    }
    public function accueilAction()
    {
        return $this->render('@GSEBMain/Accueil/accueil.html.twig');  
    } 
    
}
