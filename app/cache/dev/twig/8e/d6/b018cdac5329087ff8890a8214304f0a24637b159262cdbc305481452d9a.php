<?php

/* CCICommunityConseilBundle:Default:liensutiles_list.html.twig */
class __TwigTemplate_8ed6b018cdac5329087ff8890a8214304f0a24637b159262cdbc305481452d9a extends Twig_Template
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
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span12\">
                <div class=\"row\">
                    <div class=\"title bg-title span12\">
                        <h3>Liens Utiles</h3>
                    </div>
                </div>
                <div class=\"widget\">
                    <div class=\"widget-content\">
                        <h3 class=\"title\"><a href=\"http://youpomm.com/\">You Pomm</a></h3>
                        <p>\t\t\t\t\t\t\t
                            Une petite pause gourmande ?
                        </p>
                    </div>

                    <div class=\"widget-content\">
                        <h3 class=\"title\"><a href=\"http://facebook.com/\">Devoirs.com</a></h3>
                        <p>\t\t\t\t\t\t\t
                            Aide aux devoirs
                        </p>
                    </div>

                    <div class=\"widget-content\">
                        <h3 class=\"title\"><a href=\"http://9gag.com/\">9Gag</a></h3>
                        <p>\t\t\t\t\t\t\t
                            Tout pour la culture !
                        </p>
                    </div>
                    <div class=\"widget-content\">
                        <h3 class=\"title\"><a href=\"https://www.youtube.com/watch?v=dQw4w9WgXcQ\">Ne surtout pas cliquer ce lien</a></h3>
                        <p>\t\t\t\t\t\t\t
                            J'aurais prévenu !
                        </p>
                    </div>
                </div>
            </div><!-- end span12 -->

        </div><!-- row -->
    </div><!-- end container -->
";
    }

    public function getTemplateName()
    {
        return "CCICommunityConseilBundle:Default:liensutiles_list.html.twig";
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
