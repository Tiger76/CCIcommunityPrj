<?php

namespace CCICommunity\ConseilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function adresses_listAction()
    {

      $request = $this->get('request');
      $page = $request->get('page', 1);

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
    
    public function Adresses_detailAction($id)
    {
        $Adresses = $this->getDoctrine()->getManager()
                ->getRepository("CCICommunityConseilBundle:Adresses")
                ->findOneById($id);
        return $this->render('CCICommunityConseilBundle:Default:adresses_detail', array('adresses'=>$Adresses));
    }
    
    public function ajouter_adressesAction()
    {
        $Adresses = new Adresses;
        $form = $this->createForm(new AdressesType, $Adresses);

          $request = $this->get('request');
          if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
              $em = $this->getDoctrine()->getManager();
              $em->persist($Adresses);
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
