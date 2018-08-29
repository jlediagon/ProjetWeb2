<?php

namespace GSEB\DemandeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
require_once("/var/www/html/FormdGseb/src/GSEB/MainBundle/Racktables/QueryRacktables.php");

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Doctrine\DBAL\Driver\Connection;
use Symfony\Component\HttpFoundation\Session\Session;
use Doctrine\ORM\EntityManagerInterface;

// //--Nécessaire au formulaire
use GSEB\MainBundle\Entity\Demande;
use GSEB\MainBundle\Entity\Contact;
use GSEB\MainBundle\Entity\Attribut;
use GSEB\MainBundle\Entity\Object;
use GSEB\MainBundle\Entity\Rackspace;

use GSEB\MainBundle\Form\DemandeType;

use Symfony\Component\Form\Extension\Core\Type\FormType;
class DemandeController extends Controller
{
    public function listSalleAction()
    {
        /*---------------------------------------/
        /            Connexion BDD               /
        /---------------------------------------*/
        $conn = $this->get('doctrine.dbal.default_connection');
        
        $salles = querySalle($conn);

        return $this->render('@GSEBDemande/Add/listSalle.html.twig',array('resultat' => $salles));
    }

    public function listBaieAction($id_salle, Request $request)
    {
        /*---------------------------------------/
        /            Connexion BDD               /
        /      Récupération de la session        /
        /---------------------------------------*/             
        $conn = $this->get('doctrine.dbal.default_connection');
        $session= $request->getSession();   

        $session->set('Salle',$id_salle);
        $baies = queryBaie($conn, $id_salle);

        return $this->render('@GSEBDemande/Add/listBaie.html.twig',array('resultat' => $baies));
    }
    public function listObjectAction($id_baie,Request $request)
    {
        /*---------------------------------------/
        /            Connexion BDD               /
        /      Récupération de la session        /
        /---------------------------------------*/
        $conn = $this->get('doctrine.dbal.default_connection');
        $session= $request->getSession();        
        $session->set('Baie',$id_baie);
        /*---------------------------------------/
        /        Partie Requête BDD              /
        /---------------------------------------*/
        $object_type = queryListObjType ($conn);
        return $this->render('@GSEBDemande/Add/listObject.html.twig',array('resultat' => $object_type));
    }

    public function listPropertiesAction($id_objtype,Request $request)
    {
        $session= $request->getSession();           
        $demande = new Demande();   
        /*---------------------------------------/
        /          Partie Formulaire             /
        /---------------------------------------*/        
        $formDemande = $this
            ->get('form.factory')
            ->create(DemandeType::class, $demande,[
                'action' => $session->get('Action'),
                'idObjType' => $id_objtype,
            ]);
        /*---------------------------------------/
        /        Validation du formulaire        /
        /---------------------------------------*/   
        if ($request->isMethod('POST')) {
            $formDemande->handleRequest($request);
            if ($formDemande->isValid()) {
                $em = $this->getDoctrine()->getManager('demande');
                $em->persist($demande);
                $em->flush();
                return $this->redirectToRoute('gseb_demande_attributs',array('id_demande' => $demande->getId()));
            }        
        }
        return $this->render('@GSEBDemande/Add/listProperties.html.twig',array(
            'form' => $formDemande->createView(),
        ));
    }
    public function listAttributsAction ($id_demande,Request $request)
    {
        /*---------------------------------------/
        /            Connexion BDD               /
        /      Récupération de la session        /
        /---------------------------------------*/        
        $conn = $this->get('doctrine.dbal.default_connection');
        $repo = $this
            ->getDoctrine()
            ->getManager('demande')
            ->getRepository('GSEBMainBundle:Demande')
        ;
        $demande = $repo->find($id_demande);
        $id_objtype = $demande->getObject()->getObjtypeId();
        $object = $demande->getObject();

        /*---------------------------------------/
        /        Partie Requête BDD              /
        /---------------------------------------*/ 
        $caracobject = queryAttrObj($conn, $id_objtype);
        $nbcaract = count($caracobject);
        $nameobj_type = queryObjTypeName($conn, $id_objtype);

        /*---------------------------------------/
        /        Validation du formulaire        /
        /---------------------------------------*/  
        if ($request->isMethod('POST')) {
            $em = $this->getDoctrine()->getManager('demande');
            
            for ($i=1;$i<$nbcaract;$i++)
            {
                $attribut = new Attribut();
                $value = $request->request->get($caracobject[$i]['id'],'none');    
                $attribut->setValue($value);
                $attribut->setAttrId($caracobject[$i]['id']);
                $attribut->setObject($object);
                $em->persist($attribut);
                $em->flush();             
            }
            return $this->redirectToRoute('gseb_demande_rackspace',array('id_demande' => $demande->getId()));
        }
        return $this->render('@GSEBDemande/Add/listAttributs.html.twig',array(
            'resultat'=>$caracobject,
            'demande' =>$demande,
            'nameObjtype' => $nameobj_type
        ));        
    }

    public function rackspaceAction($id_demande, Request $request)
    {
        $session= $request->getSession();   
        $id_baie = $session->get('Baie');

        $conn = $this->get('doctrine.dbal.default_connection');
        $repo = $this
            ->getDoctrine()
            ->getManager('demande')
            ->getRepository('GSEBMainBundle:Demande')
        ;
        $demande = $repo->find($id_demande);        
        $object = $demande->getObject();

        $height = queryRackHeight($conn, $id_baie);
        
        $rackspace = queryRackspaceAlloc($conn, $id_baie);

        if ($request->isMethod('POST')) {
            $em = $this->getDoctrine()->getManager('demande');
            if (isset($_POST['interior']))
            {
                foreach( $_POST['interior'] as $value )
                {
                    $rackspace = new Rackspace();
                    $rackspace->setUnitNo($value);
                    $rackspace->setAtom(1);
                    $rackspace->setRackId($id_baie);
                    $rackspace->setObject($object);                
                    $em->persist($rackspace);
                    $em->flush();         
                }
            }
            if (isset($_POST['front']))
            {
                foreach( $_POST['front'] as $value )
                {
                    $rackspace = new Rackspace();
                    $rackspace->setUnitNo($value);
                    $rackspace->setAtom(2);
                    $rackspace->setRackId($id_baie);
                    $rackspace->setObject($object);                
                    $em->persist($rackspace);
                    $em->flush();                  
                }
            }
            if (isset($_POST['rear']))
            {
                foreach( $_POST['rear'] as $value )
                {
                    $rackspace = new Rackspace();
                    $rackspace->setUnitNo($value);
                    $rackspace->setAtom(3);
                    $rackspace->setRackId($id_baie);
                    $rackspace->setObject($object);                
                    $em->persist($rackspace);
                    $em->flush();         
                }
            }
            return $this->redirectToRoute('gseb_demande_success',array('id_demande' => $demande->getId()));     
        }
        return $this->render('@GSEBDemande/Add/rackspace.html.twig',array(
            'demande' =>$demande,
            'id_rack' =>$id_baie,
            'height' => $height,
            'rackspace' => $rackspace,
        ));
    }
    public function demandeSuccessAction($id_demande)
    {
        //$em_demande = $this->getEntityManager('demande');

        return $this->render('@GSEBDemande/Add/demandeSuccess.html.twig',array('demande'=>$id_demande));
    }

    public function listDemandesAction()
    {
          
        $repository = $this
            ->getDoctrine()
            ->getManager('demande')
            ->getRepository('GSEBMainBundle:Demande')
        ;

        $listDemandes = $repository->findAll();

        return $this->render('@GSEBDemande/EditDel/listDemandes.html.twig', array('listDemandes' => $listDemandes));
    }
    public function viewDemandeAction($id)
    {
        $repository = $this
            ->getDoctrine()
            ->getManager('demande')
            ->getRepository('GSEBMainBundle:Demande')
        ;
        
        $demande = $repository->find($id);
  
      return $this->render('@GSEBDemande/EditDel/viewDemande.html.twig', array(
        'demande' => $demande
      ));
    }
}
