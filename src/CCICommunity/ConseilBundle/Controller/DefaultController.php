<?php

namespace CCICommunity\ConseilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CCICommunity\ConseilBundle\Entity\Adresses;
use CCICommunity\ConseilBundle\Form\AdressesType;

class DefaultController extends Controller
{
    public function adresses_listAction()
    {

      $request = $this->get('request');
      $page = $request->request->get('page', 1);

      $maxAdresses = 6;
        $listeAdresses = $this->getDoctrine()->getManager()
                ->getRepository("CCICommunityConseilBundle:Adresses")
                ->getList($page, $maxAdresses);

         $nbAdresses = $this->getDoctrine()
            ->getRepository('CCICommunityConseilBundle:Adresses')
            ->countTotalAdresses();

         $pagination = array(
            'page' => $page,
            'route' => 'cci_community_conseil_adresses_list',
            'pages_count' => ceil($nbAdresses / $maxAdresses),
            'route_params' => array()
            );
        
        return $this->render('CCICommunityConseilBundle:Default:adresses_list.html.twig', array('pagination' => $pagination, 'listeAdresses' => $listeAdresses ));
    }
    
    // A revoir
    public function adresses_detailAction($id)
    {
        return $this->render('CCICommunityConseilBundle:Default:adresses_detail.html.twig', array());
    }
    
    public function ajouter_adressesAction()
    {
        $adresses = new Adresses;
        $form = $this->createForm(new AdressesType, $adresses);

          $request = $this->get('request');
          if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
              $em = $this->getDoctrine()->getManager();
              $em->persist($vdc);
              $em->flush();

              return $this->redirect($this->generateUrl('cci_community_conseil_adresses_list'));
            }
          }



        return $this->render('CCICommunityConseilBundle:Default:adresses_form.html.twig', array('form' => $form->createView() ));
    }
    
    public function liensutiles_listAction()
    {
        return $this->render('CCICommunityConseilBundle:Default:liensutiles_list.html.twig', array());
    }
}
