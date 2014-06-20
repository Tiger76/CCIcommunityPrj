<?php

/* ::layout.html.twig */
class __TwigTemplate_f515abadf23acb936b91e4520be5142107e82cce4d1cc2bb0b1675839f9f2634 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'contenu' => array($this, 'block_contenu'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccicommunitybase/css/bootstrap.min.css"), "html", null, true);
        echo "\">
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccicommunitybase/css/global.css"), "html", null, true);
        echo "\">
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccicommunitybase/css/color-button.css"), "html", null, true);
        echo "\">
\t<!-- js Boots_from -->
\t<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccicommunitybase/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccicommunitybase/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ccicommunitybase/js/custom.js"), "html", null, true);
        echo "\"></script>
\t<!-- end Boots_from -->
        
    </head>
    <body>
        <div class=\"navbar navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <a class=\"brand\" href=\"#\">
                        <span>CCI</span>&amp;<span class=\"cl-blue\">Community</span>
                    </a>
                    <div class=\"nav-collapse\">
                        <ul class=\"nav pull-right\">
                            <li><a href=\"index.html\">Accueil</a></li>
                            <li><a href=\"liste_evenement.html\">Evenements</a></li>
                            <li><a href=\"vdc.html\">Vie de classe</a></li>
                            <li><a href=\"liste_adresse.html\">Adresses</a></li>
                            <li><a href=\"liens_utiles.html\">Liens utiles</a></li>

                            <li class=\"divider-vertical\"></li>

                            <li class=\"avatar_small\"><a href=\"account.html\"></a></li>
                            <li class=\"dropdown\">
                                <a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">
                                    john doe
                                    <b class=\"caret\"></b>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <a href=\"profile.html\">
                                            <i class=\"icon-user\"></i>
                                            Account Setting  </a>
                                    </li>
                                    <li>
                                        <a href=\"setting.html\">
                                            <i class=\"icon-lock\"></i> Change Password</a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"login.html\"><i class=\"icon-off\"></i> Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 65
        $this->displayBlock('contenu', $context, $blocks);
        // line 66
        echo "
        <div class=\"footer\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"span6 logo-vt\">
                        <a class=\"brand\" href=\"#\">
                            <span>CCI</span>&amp;<span class=\"cl-blue\">Community</span>
                        </a>
                        <span class=\"coppy_right\">
                            <p>CAIP 13-15</p>
                            <p>@2014 All Rights Reserved. VPT !</p>
                        </span>
                    </div>
                    <div class=\"span2\">
                        <ul class=\"nav nav-list\">
                            <li class=\"nav-header\">Contact</li>
                            <li><a href=\"#\">Support</a></li>
                            <li><a href=\"#\">About</a></li>
                            <li>84.903.197.895</li>
                        </ul>
                    </div>
                    <div class=\"span2\">
                        <ul class=\"nav nav-list\">
                            <li class=\"nav-header\">Blog</li>
                            <li><a href=\"#\">Regulation</a></li>
                            <li><a href=\"#\">Blog</a></li>
                        </ul>
                    </div>
                    <div class=\"span2\">
                        <ul class=\"nav nav-list\">
                            <li class=\"nav-header\">Follow Us</li>
                            <li><a href=\"#\"><i class=\"twitter\"></i>Twitter</a></li>
                            <li><a href=\"#\"><i class=\"facebook\"></i>Facebook</a></li>
                            <li><a href=\"#\"><i class=\"dd\"></i>Forum</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 106
        $this->displayBlock('javascripts', $context, $blocks);
        // line 107
        echo "

    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 65
    public function block_contenu($context, array $blocks = array())
    {
    }

    // line 106
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 106,  180 => 65,  175 => 6,  169 => 5,  161 => 107,  159 => 106,  117 => 66,  115 => 65,  63 => 16,  59 => 15,  55 => 14,  50 => 12,  46 => 11,  42 => 10,  35 => 7,  33 => 6,  29 => 5,  23 => 1,  31 => 4,  28 => 3,);
    }
}
