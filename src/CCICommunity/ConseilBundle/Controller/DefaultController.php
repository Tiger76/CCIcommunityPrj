<?php

namespace CCICommunity\ConseilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function adresses_listAction()
    {
        return $this->render('CCICommunityConseilBundle:Default:adresses_list.html.twig', array());
    }
    
    // A revoir
    /*public function detailAdresses($id)
    {
        return $this->render('CCICommunityConseilBundle:Default:adresses_detail.html.twig', array());
    }*/
    
    public function liensutiles_listAction()
    {
        return $this->render('CCICommunityConseilBundle:Default:liensutiles_list.html.twig', array());
    }
}
