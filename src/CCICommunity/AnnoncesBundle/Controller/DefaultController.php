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
}
