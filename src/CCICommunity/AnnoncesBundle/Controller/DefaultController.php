<?php

namespace CCICommunity\AnnoncesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function evenements_listAction()
    {
        return $this->render('CCICommunityAnnoncesBundle:Default:evenement_list.html.twig', array());
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
}
