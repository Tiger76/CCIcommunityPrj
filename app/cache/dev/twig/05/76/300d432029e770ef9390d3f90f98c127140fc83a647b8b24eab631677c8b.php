<?php

/* CCICommunityBaseBundle:Default:index.html.twig */
class __TwigTemplate_0576300d432029e770ef9390d3f90f98c127140fc83a647b8b24eab631677c8b extends Twig_Template
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
            <div class=\"row\">
                <!--<div class=\"box-wrapper span12\">
                        <div class=\"widget\">
                                <div class=\"wrapper-search\">
                                        <form class=\"form-inline form-search border-rd4\">
                                                <input placeholder=\"Type somethings to search ..\" type=\"text\" class=\"box-text\">
                                                <a href=\"#\"class=\"btn-search\"></a>
                                        </form>
                                </div>
                        </div>
                </div><!-- end box-wrapper -->
            </div>
            <br>
            <br>
            <br>
            <!-- **************** start All Flie  ****************** -->
            <div class=\"box-wrapper span10\">

                <div id=\"myCarousel\" class=\"carousel slide\">
                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#myCarousel\" data-slide-to=\"1\" class=\"\"></li>
                        <li data-target=\"#myCarousel\" data-slide-to=\"2\" class=\"\"></li>
                    </ol>
                    <div class=\"carousel-inner\">
                        <div class=\"item active\">
                            <img class=\"img responsive\" src=\"http://lorempixel.com/400/200/nightlife/\" alt=\"\">
                            <div class=\"carousel-caption\">
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                            </div>
                        </div>
                        <div class=\"item\">
                            <img class=\"img responsive\" src=\"http://lorempixel.com/400/200/nightlife/\" alt=\"\">
                            <div class=\"carousel-caption\">
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                            </div>
                        </div>
                        <div class=\"item\">
                            <img class=\"img responsive\" src=\"http://lorempixel.com/400/200/nightlife/\" alt=\"\">
                            <div class=\"carousel-caption\">
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                            </div>
                        </div>
                    </div>
                    <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">‹</a>
                    <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">›</a>
                </div>

                <div class=\"row\">
                    <div class=\"title span10\">
                        <h3 class=\"pull-left\">Dernières actualités</h3>
                        <div class=\"sort pull-right dropdown\">
                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                Most Viewed
                                <b class=\"caret\"></b>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\"><i class=\"icon-tag\"></i>By Name</a></li>
                                <li><a href=\"#\"><i class=\"icon-list\"></i>List</a></li>
                                <li><a href=\"#\"><i class=\"icon-eye-open\"></i>View</a></li>
                            </ul>
                        </div>
                    </div><!-- end title -->
                </div>
                <ul class=\"thumbnails thumbnails-vertical\">
                    <li class=\"span5\">

                        <div class=\"thumbnail border-radius-top\">
                            <div class=\"bg-thumbnail-img\">
                                <a class=\"overlay\" href=\"detail.html\" style=\"display: none;\">
                                    <img src=\"assets/img/icons/plus.png\">
                                </a>
                                <img class=\"border-radius-top\" src=\"assets/img/project/pj1.jpg\" style=\"opacity: 1;\">

                            </div>
                            <div class=\"thumbnail-content-left\">
                                <h5><a href=\"detail.html\">KEEP CALM AND PARTY ON</a></h5>
                                <p>
                                    *Forty One<br>
                                    *01/05/2014 23:30-05:00<br>
                                    ◈ 1 SHOOTER offerts aux 100 premiers arrivants !<br>
                                    ◈ 2 DJ'S:<br>
                                    Warm Up : Dj Bes (Résident) ...<br>
                                </p>
                                <h6><a href=\"#\">[Read more]</a></h6>
                            </div>
                        </div>
                        <div class=\"box border-radius-bottom\">
                            <p>
                                <span class=\"title_torrent pull-left\">Evenement</span>
                                <span class=\"number-view pull-right\">18/06/2014</span>
                            </p>
                        </div>
                    </li>
                    <li class=\"span5\">
                        <div class=\"thumbnail border-radius-top\">
                            <div class=\"bg-thumbnail-img\">
                                <a class=\"overlay\" href=\"detail.html\">
                                    <img src=\"assets/img/icons/plus.png\">
                                </a>
                                <img class=\"border-radius-top\" src=\"assets/img/project/pj2.jpg\">
                            </div>
                            <div class=\"thumbnail-content-left\">
                                <h5><a href=\"detail.html\">Lorem ipsum dolor sit amet ... </a></h5>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit magna aliqua.
                                </p>
                                <h6><a href=\"#\">[Read more]</a></h6>
                            </div>
                        </div>
                        <div class=\"box border-radius-bottom\">
                            <p>
                                <span class=\"title_torrent pull-left\">Vie de Classe</span>
                                <span class=\"number-view pull-right\">13/06/2014</span>
                            </p>
                        </div>
                    </li>
                    <li class=\"span5\">
                        <div class=\"thumbnail border-radius-top\">
                            <div class=\"bg-thumbnail-img\">
                                <a class=\"overlay\" href=\"detail.html\">
                                    <img src=\"assets/img/icons/plus.png\">
                                </a>
                                <img class=\"border-radius-top\" src=\"assets/img/project/pj3.jpg\">
                            </div>
                            <div class=\"thumbnail-content-left\">
                                <h5><a href=\"detail.html\">Lorem ipsum dolor sit amet ... </a></h5>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit magna aliqua.
                                </p>
                                <h6><a href=\"#\">[Read more]</a></h6>
                            </div>
                        </div>
                        <div class=\"box border-radius-bottom\">
                            <p>
                                <span class=\"title_torrent pull-left\">Annonce</span>
                                <span class=\"number-view pull-right\">14/07/1789</span>
                            </p>
                        </div>
                    </li>
                    <li class=\"span5\">
                        <div class=\"thumbnail border-radius-top\">
                            <div class=\"bg-thumbnail-img\">
                                <a class=\"overlay\" href=\"detail.html\">
                                    <img src=\"assets/img/icons/plus.png\">
                                </a>
                                <img class=\"border-radius-top\" src=\"assets/img/project/pj4.jpg\">
                            </div>
                            <div class=\"thumbnail-content-left\">
                                <h5><a href=\"detail.html\">Lorem ipsum dolor sit amet ... </a></h5>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit magna aliqua.
                                </p>
                                <h6><a href=\"#\">[Read more]</a></h6>
                            </div>
                        </div>
                        <div class=\"box border-radius-bottom\">
                            <p>
                                <span class=\"title_torrent pull-left\">Spotted</span>
                                <span class=\"number-view pull-right\">18/06/2014</span>
                            </p>
                        </div>
                    </li>

                    <li class=\"span5\">
                        <div class=\"thumbnail border-radius-top\">
                            <div class=\"bg-thumbnail-img\">
                                <a class=\"overlay\" href=\"detail.html\">
                                    <img src=\"assets/img/icons/plus.png\">
                                </a>
                                <img class=\"border-radius-top\" src=\"assets/img/project/pj5.jpg\">
                            </div>
                            <div class=\"thumbnail-content-left\">
                                <h5><a href=\"detail.html\">Lorem ipsum dolor sit amet ... </a></h5>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit magna aliqua.
                                </p>
                                <h6><a href=\"#\">[Read more]</a></h6>
                            </div>
                        </div>
                        <div class=\"box border-radius-bottom\">
                            <p>
                                <span class=\"title_torrent pull-left\">Adresse</span>
                                <span class=\"number-view pull-right\">15/01/2014</span>
                            </p>
                        </div>
                    </li>

                    <li class=\"span5\">
                        <div class=\"thumbnail border-radius-top\">
                            <div class=\"bg-thumbnail-img\">
                                <a class=\"overlay\" href=\"detail.html\">
                                    <img src=\"assets/img/icons/plus.png\">
                                </a>
                                <img class=\"border-radius-top\" src=\"assets/img/project/pj6.jpg\">
                            </div>
                            <div class=\"thumbnail-content-left\">
                                <h5><a href=\"detail.html\">Lorem ipsum dolor sit amet ... </a></h5>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit magna aliqua.
                                </p>
                                <h6><a href=\"#\">[Read more]</a></h6>
                            </div>
                        </div>
                        <div class=\"box border-radius-bottom\">
                            <p>
                                <span class=\"title_torrent pull-left\">Lien Utile</span>
                                <span class=\"number-view pull-right\">31/02/2047</span>
                            </p>
                        </div>
                    </li>
                </ul>
            </div><!-- end  -->

            <!-- **************** end All Flie  ****************** -->
        </div><!-- row -->

    </div>


";
    }

    public function getTemplateName()
    {
        return "CCICommunityBaseBundle:Default:index.html.twig";
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
