<?php

namespace CCICommunity\AnnoncesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CCICommunity\AnnoncesBundle\Entity\Evenement;
use CCICommunity\AnnoncesBundle\Form\EvenementType;

class DefaultController extends Controller
{
    public function evenements_listAction()
    {
        //$id = 1;
        //return $this->render('CCICommunityAnnoncesBundle:Default:evenement_list.html.twig', array('id' => $id ));
    
        $request = $this->get('request');
        $page = $request->get('page', 1);

        $maxEvt = 6;
        $listeEvt = $this->getDoctrine()->getManager()
                ->getRepository("CCICommunityAnnoncesBundle:Evenement")
                ->getList($page, $maxEvt);

         $nbEvt = $this->getDoctrine()
            ->getRepository('CCICommunityAnnoncesBundle:Evenement')
            ->countTotalVDC();

         $pagination = array(
            'page' => $page,
            'route' => 'cci_community_annonces_evenements_list',
            'pages_count' => ceil($nbEvt / $maxEvt),
            'route_params' => array()
            );
        
        return $this->render('CCICommunityAnnoncesBundle:Default:evenement_list.html.twig', array('pagination' => $pagination, 'listeEvt' => $listeEvt ));

    }
    
  
    public function evenements_detailAction($id)
    {
        //return $this->render('CCICommunityAnnoncesBundle:Default:evenement_detail.html.twig', array());
    
        $Evt = $this->getDoctrine()->getManager()
                ->getRepository("CCICommunityAnnoncesBundle:Evenement")
                ->findOneById($id);
        return $this->render('CCICommunityAnnoncesBundle:Default:evenement_detail.html.twig', array('evt'=>$Evt));
    }
    
    /*public function petitesannonces_listAction()
    {
        return $this->render('CCICommunityAnnoncesBundle:Default:petitesannonces_list.html.twig', array());
    }

    public function petitesannonces_detailAction($id)
    {
        return $this->render('CCICommunityAnnoncesBundle:Default:petitesannonces_detail.html.twig', array());
    }*/

    
    public function vdc_detailAction($id)
    {
        return $this->render('CCICommunityAnnoncesBundle:Default:form_redaction.html.twig', array());
    }
    public function ajouter_evenementAction()
    {
        return $this->render('CCICommunityAnnoncesBundle:Default:form_redaction.html.twig', array());
    }
    public function ajouter_adresseAction()
    {
        return $this->render('CCICommunityAnnoncesBundle:Default:form_redaction.html.twig', array());
    }
    
    public function creer_evtAction()
    {
        $evt = new EVT;
        $form = $this->createForm(new EvenementType, $evt);
        
          $request = $this->get('request');
          if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
              $em = $this->getDoctrine()->getManager();
              $em->persist($evt);
              $em->flush();

              return $this->redirect($this->generateUrl('cci_community_annonces_evenement_list'));
            }
          }

          //return $this->render('CCICommunityBaseBundle:Default:form_redaction.html.twig', array(
            //'form' => $form,
          //));

        return $this->render('CCICommunityAnnoncesBundle:Default:form_redaction.html.twig', array('form' => $form->createView() ));
    }
    
  
    
    
    

}
