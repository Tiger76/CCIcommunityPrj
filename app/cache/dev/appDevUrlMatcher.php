<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

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
