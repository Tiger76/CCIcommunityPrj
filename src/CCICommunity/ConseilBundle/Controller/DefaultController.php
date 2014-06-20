<?php

namespace CCICommunity\ConseilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CCICommunityConseilBundle:Default:index.html.twig', array('name' => $name));
    }
}
