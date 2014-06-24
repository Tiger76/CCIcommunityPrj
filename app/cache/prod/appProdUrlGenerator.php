<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'cci_community_annonces_petitesannonces_detail' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CCICommunity\\AnnoncesBundle\\Controller\\DefaultController::petitesannonces_detailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/annonces/petitesannonces',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cci_community_annonces_petitesannonces_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CCICommunity\\AnnoncesBundle\\Controller\\DefaultController::petitesannonces_listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/annonces/petitesannonces',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cci_community_annonces_evenements_detail' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CCICommunity\\AnnoncesBundle\\Controller\\DefaultController::evenements_detailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/annonces/evenements',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cci_community_annonces_evenements_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CCICommunity\\AnnoncesBundle\\Controller\\DefaultController::evenements_listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/annonces/evenements',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cci_community_conseil_adresses_detail' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CCICommunityConseileBundle:Default:adresses_detail',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/conseil/adresses',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cci_community_conseil_adresses_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CCICommunity\\ConseilBundle\\Controller\\DefaultController::adresses_listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/conseil/adresses',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cci_community_conseil_liensutiles_detail' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CCICommunityConseileBundle:Default:liensutiles_detail',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/conseil/liensutiles',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cci_community_conseil_liensutiles_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CCICommunity\\ConseilBundle\\Controller\\DefaultController::liensutiles_listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/conseil/liensutiles',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cci_community_base_vdc_detail' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CCICommunity\\BaseBundle\\Controller\\DefaultController::vdc_detailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/vdc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cci_community_base_vdc_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CCICommunity\\BaseBundle\\Controller\\DefaultController::vdc_listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/vdc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cci_community_base_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CCICommunity\\BaseBundle\\Controller\\DefaultController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cci_community_base_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CCICommunity\\BaseBundle\\Controller\\DefaultController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cci_community_base_inscription' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CCICommunity\\BaseBundle\\Controller\\DefaultController::inscriptionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inscription',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cci_community_base_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CCICommunity\\BaseBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
