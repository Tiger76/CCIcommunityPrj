<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/annonces')) {
            if (0 === strpos($pathinfo, '/annonces/petitesannonces')) {
                // cci_community_annonces_petitesannonces_detail
                if (preg_match('#^/annonces/petitesannonces/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cci_community_annonces_petitesannonces_detail')), array (  '_controller' => 'CCICommunity\\AnnoncesBundle\\Controller\\DefaultController::petitesannonces_detailAction',));
                }

                // cci_community_annonces_petitesannonces_list
                if ($pathinfo === '/annonces/petitesannonces') {
                    return array (  '_controller' => 'CCICommunity\\AnnoncesBundle\\Controller\\DefaultController::petitesannonces_listAction',  '_route' => 'cci_community_annonces_petitesannonces_list',);
                }

            }

            if (0 === strpos($pathinfo, '/annonces/evenements')) {
                // cci_community_annonces_evenements_detail
                if (preg_match('#^/annonces/evenements/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cci_community_annonces_evenements_detail')), array (  '_controller' => 'CCICommunity\\AnnoncesBundle\\Controller\\DefaultController::evenements_detailAction',));
                }

                // cci_community_annonces_evenements_list
                if ($pathinfo === '/annonces/evenements') {
                    return array (  '_controller' => 'CCICommunity\\AnnoncesBundle\\Controller\\DefaultController::evenements_listAction',  '_route' => 'cci_community_annonces_evenements_list',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/conseil')) {
            if (0 === strpos($pathinfo, '/conseil/adresses')) {
                // cci_community_conseil_adresses_detail
                if (preg_match('#^/conseil/adresses/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cci_community_conseil_adresses_detail')), array (  '_controller' => 'CCICommunityConseileBundle:Default:adresses_detail',));
                }

                // cci_community_conseil_adresses_list
                if ($pathinfo === '/conseil/adresses') {
                    return array (  '_controller' => 'CCICommunity\\ConseilBundle\\Controller\\DefaultController::adresses_listAction',  '_route' => 'cci_community_conseil_adresses_list',);
                }

            }

            if (0 === strpos($pathinfo, '/conseil/liensutiles')) {
                // cci_community_conseil_liensutiles_detail
                if (preg_match('#^/conseil/liensutiles/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cci_community_conseil_liensutiles_detail')), array (  '_controller' => 'CCICommunityConseileBundle:Default:liensutiles_detail',));
                }

                // cci_community_conseil_liensutiles_list
                if ($pathinfo === '/conseil/liensutiles') {
                    return array (  '_controller' => 'CCICommunity\\ConseilBundle\\Controller\\DefaultController::liensutiles_listAction',  '_route' => 'cci_community_conseil_liensutiles_list',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/vdc')) {
            // cci_community_base_vdc_detail
            if (preg_match('#^/vdc/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cci_community_base_vdc_detail')), array (  '_controller' => 'CCICommunity\\BaseBundle\\Controller\\DefaultController::vdc_detailAction',));
            }

            // cci_community_base_vdc_list
            if ($pathinfo === '/vdc') {
                return array (  '_controller' => 'CCICommunity\\BaseBundle\\Controller\\DefaultController::vdc_listAction',  '_route' => 'cci_community_base_vdc_list',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            // cci_community_base_login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'CCICommunity\\BaseBundle\\Controller\\DefaultController::loginAction',  '_route' => 'cci_community_base_login',);
            }

            // cci_community_base_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'CCICommunity\\BaseBundle\\Controller\\DefaultController::logoutAction',  '_route' => 'cci_community_base_logout',);
            }

        }

        // cci_community_base_inscription
        if ($pathinfo === '/inscription') {
            return array (  '_controller' => 'CCICommunity\\BaseBundle\\Controller\\DefaultController::inscriptionAction',  '_route' => 'cci_community_base_inscription',);
        }

        // cci_community_base_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'cci_community_base_homepage');
            }

            return array (  '_controller' => 'CCICommunity\\BaseBundle\\Controller\\DefaultController::indexAction',  '_route' => 'cci_community_base_homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
