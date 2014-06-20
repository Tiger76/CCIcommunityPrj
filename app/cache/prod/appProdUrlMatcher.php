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

        // cci_community_annonces_homepage
        if (0 === strpos($pathinfo, '/annonces/hello') && preg_match('#^/annonces/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cci_community_annonces_homepage')), array (  '_controller' => 'CCICommunity\\AnnoncesBundle\\Controller\\DefaultController::indexAction',));
        }

        // cci_community_conseil_homepage
        if (0 === strpos($pathinfo, '/conseil/hello') && preg_match('#^/conseil/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cci_community_conseil_homepage')), array (  '_controller' => 'CCICommunity\\ConseilBundle\\Controller\\DefaultController::indexAction',));
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
