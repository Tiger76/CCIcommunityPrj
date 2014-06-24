<?php

/* CCICommunityConseilBundle:Default:adresses_list.html.twig */
class __TwigTemplate_39c871988492d2a688087e79f9bf24be337b8ff4ef769e3083975a2fd23ab59f extends Twig_Template
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
                                <h3><a href=\"./detail_adresse.html\">Le Maque-Do</a></h3>
                                <div class=\"desc\">
                                    Posted by: <a href=\"#\">jane doe</a> | Posted on: 
                                    <strong>April 6th, 2011</strong> | 
                                    <a href=\"blog.html\">12 Comments</a>
                                </div>
                            </div>
                            <p class=\"ct-img\"><a href=\"detail_adresse.html\"><img src=\"assets/img/macdo.jpg\"></a></p>
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
                            <p class=\"ct-img\"><a href=\"detail.html\"><img src=\"assets/img/project/laser.jpg\"></a></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div><!-- widget -->

                    <div class=\"widget\">
                        <div class=\"widget-content\">
                            <div class=\"title\">
                                <h3><a href=\"#\">La Patinoire du Havre</a></h3>
                                <div class=\"desc\">
                                    Posted by: <a href=\"#\">jane doe</a> | Posted on: 
                                    <strong>April 6th, 2011</strong> | 
                                    <a href=\"blog.html\">12 Comments</a>
                                </div>
                            </div>
                            <p class=\"ct-img\"><a href=\"detail.html\"><img src=\"assets/img/project/patinoire.jpg\"></a></p>
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
        return "CCICommunityConseilBundle:Default:adresses_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
