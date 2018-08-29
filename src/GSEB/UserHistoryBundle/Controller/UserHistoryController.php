<?php

namespace GSEB\UserHistoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Doctrine\DBAL\Driver\Connection;
use Symfony\Component\HttpFoundation\Session\Session;
use Doctrine\ORM\EntityManagerInterface;

class UserHistoryController extends Controller
{
    public function listDemandeAction()
    {
        $repository = $this
        ->getDoctrine()
        ->getManager('demande')
        ->getRepository('GSEBMainBundle:Demande')
        ;

    $listDemandes = $repository->findAll();

    return $this->render('@GSEBUserHistory/History/listDemandes.html.twig', array('listDemandes' => $listDemandes));
    }

    public function viewDemandeAction($id_demande)
    {
        $repository = $this
        ->getDoctrine()
        ->getManager('demande')
        ->getRepository('GSEBMainBundle:Demande')
    ;
        $reporack = $this
        ->getDoctrine()
        ->getManager('demande')
        ->getRepository('GSEBMainBundle:Rackspace')
    ;
        $repoAttr= $this
        ->getDoctrine()
        ->getManager('demande')
        ->getRepository('GSEBMainBundle:Attribut')
    ;
    
    $demande = $repository->find($id_demande);
    $object = $demande->getObject();
    $rackspace = $reporack->findByObject($object);
    
    return $this->render('@GSEBUserHistory/History/viewDemande.html.twig', array(
        'demande' => $demande,
        'object' => $object,
        'rack' => $rackspace,
    ));
        
    }
}
