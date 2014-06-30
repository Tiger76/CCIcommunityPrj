<?php

namespace CCICommunity\AnnoncesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function evenements_listAction()
    {
        $id = 1;
        return $this->render('CCICommunityAnnoncesBundle:Default:evenement_list.html.twig', array('id' => $id ));
    }
    
    // A revoir
    public function evenements_detailAction($id)
    {
        return $this->render('CCICommunityAnnoncesBundle:Default:evenement_detail.html.twig', array());
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
    public function ajouter_EvenementAction()
    {
        return $this->render('CCICommunityAnnoncesBundle:Default:form_redaction.html.twig', array());
    }
    public function ajouter_AdresseAction()
    {
        return $this->render('CCICommunityAnnoncesBundle:Default:form_redaction.html.twig', array());
    }
}
