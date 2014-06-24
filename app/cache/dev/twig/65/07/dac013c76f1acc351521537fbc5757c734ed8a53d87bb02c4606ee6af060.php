<?php

/* CCICommunityAnnoncesBundle:Default:evenement_list.html.twig */
class __TwigTemplate_6507dac013c76f1acc351521537fbc5757c734ed8a53d87bb02c4606ee6af060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"main\">
        <div class=\"container\">
            <div class=\"box-wrapper \">
                <div class=\"box-content-widget \">
                    <div class=\"widget\">
                        <div class=\"widget-content\">
                            <div class=\"title\">
                                <h3><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cci_community_annonces_evenements_detail", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">Le Trop cool</a></h3>
                                <div class=\"desc\">
                                    Posted by: <a href=\"#\">jane doe</a> | Posted on: 
                                    <strong>April 6th, 2011</strong> | 
                                    <a href=\"blog.html\">12 Comments</a>
                                </div>
                            </div>
                            <p class=\"ct-img\"><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cci_community_annonces_evenements_detail", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\"><img src=\"assets/img/macdo.jpg\"></a></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div><!-- widget -->

                    <div class=\"widget\">
                        <div class=\"widget-content\">
                            <div class=\"title\">
                                <h3><a href=\"#\">Le Laser Game</a></h3>
                                <div class=\"desc\">
                                    Posted by: <a href=\"#\">jane doe</a> | Posted on: 
                                    <strong>April 6th, 2011</strong> | 
                                    <a href=\"blog.html\">12 Comments</a>
                                </div>
                            </div>
                            <p class=\"ct-img\"><a href=\"detail_evenement.html\"><img src=\"assets/img/project/laser.jpg\"></a></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div><!-- widget -->

                    <div class=\"widget\">
                        <div class=\"widget-content\">
                            <div class=\"title\">
                                <h3><a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cci_community_annonces_evenements_detail", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">La Trop bien</a></h3>
                                <div class=\"desc\">
                                    Posted by: <a href=\"#\">jane doe</a> | Posted on: 
                                    <strong>April 6th, 2011</strong> | 
                                    <a href=\"blog.html\">12 Comments</a>
                                </div>
                            </div>
                            <p class=\"ct-img\"><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cci_community_annonces_evenements_detail", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\"><img src=\"assets/img/project/patinoire.jpg\"></a></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div><!-- widget -->




                </div><!-- box-content-widget -->

            </div>
        </div><!-- end container -->
    </div>

";
    }

    public function getTemplateName()
    {
        return "CCICommunityAnnoncesBundle:Default:evenement_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 48,  76 => 41,  50 => 18,  40 => 11,  31 => 4,  28 => 3,);
    }
}
