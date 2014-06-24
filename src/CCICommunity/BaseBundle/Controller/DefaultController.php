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
        return $this->render('CCICommunityBaseBundle:Default:vdc.html.twig', array());
    }
    
    public function form_redactionAction($type)
    {
        return $this->render('CCICommunityBaseBundle:Default:form_redaction.html.twig', array('type' => $type ));
    }
}
