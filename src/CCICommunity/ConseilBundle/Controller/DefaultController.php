<?php

namespace CCICommunity\ConseilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function adressesAction()
    {
        return $this->render('CCICommunityConseilBundle:Default:adresses.html.twig', array());
    }
    
    public function liensutilesAction()
    {
        return $this->render('CCICommunityConseilBundle:Default:liensutiles.html.twig', array());
    }
}
