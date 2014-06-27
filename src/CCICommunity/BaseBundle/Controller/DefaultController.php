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
        $id = 1;
        return $this->render('CCICommunityBaseBundle:Default:vdc_list.html.twig', array('id' => $id ));
    }
    
    public function vdc_detailAction($id)
    {
        return $this->render('CCICommunityBaseBundle:Default:vdc_detail.html.twig', array());
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
