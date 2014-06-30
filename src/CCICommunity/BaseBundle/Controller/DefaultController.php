<?php

namespace CCICommunity\BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CCICommunity\BaseBundle\Entity\VDC;
use CCICommunity\BaseBundle\Form\VDCType;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CCICommunityBaseBundle:Default:index.html.twig', array());
    }
    
    public function vdc_listAction()
    {

      $request = $this->get('request');
      $page = $request->request->get('page', 1);

      $maxVDC = 5;
        $listeVDC = $this->getDoctrine()->getManager()
                ->getRepository("CCICommunityBaseBundle:VDC")
                ->getList($page, $maxVDC);

         $nbVDC = $this->getDoctrine()
            ->getRepository('CCICommunityBaseBundle:VDC')
            ->countTotalVDC();

         $pagination = array(
            'page' => $page,
            'route' => 'cci_community_base_vdc_list',
            'pages_count' => ceil($nbVDC / $maxVDC),
            'route_params' => array()
            );
        
        return $this->render('CCICommunityBaseBundle:Default:vdc_list.html.twig', array('pagination' => $pagination, 'listeVDC' => $listeVDC ));
    }
    
    public function vdc_detailAction($id)
    {
        return $this->render('CCICommunityBaseBundle:Default:vdc_detail.html.twig', array());
    }
    
     public function loginAction()
    {
         return $this->render('CCICommunityBaseBundle:Default:login.html.twig', array());
    }
    
     public function profileAction()
    {
         return $this->render('CCICommunityBaseBundle:Default:profile.html.twig', array());
    }
    
    public function ajouter_vdcAction()
    {
        $vdc = new VDC;
        $form = $this->createForm(new VDCType, $vdc);

          $request = $this->get('request');
          if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
              $em = $this->getDoctrine()->getManager();
              $em->persist($vdc);
              $em->flush();

              return $this->redirect($this->generateUrl('cci_community_base_vdc_list'));
            }
          }
          
       
          //return $this->render('CCICommunityBaseBundle:Default:form_redaction.html.twig', array(
            //'form' => $form,
          //));

        return $this->render('CCICommunityBaseBundle:Default:form_redaction.html.twig', array('form' => $form->createView() ));
    }
    
    
}


