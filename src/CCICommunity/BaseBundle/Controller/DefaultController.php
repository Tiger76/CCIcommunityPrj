<?php

namespace CCICommunity\BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CCICommunityBaseBundle:Default:index.html.twig', array());
    }
    
    public function vdc_listAction()
    {
        return $this->render('CCICommunityBaseBundle:Default:index.html.twig', array());
    }
}
