<?php

namespace CCICommunity\AnnoncesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexEvenement()
    {
        return $this->render('CCICommunityAnnoncesBundle:Default:evenement_list.html.twig', array());
    }
    
    // A revoir
    /*public function detailEvenement($id)
    {
        return $this->render('CCICommunityAnnoncesBundle:Default:evenement_detail.html.twig', array());
    }*/
}
