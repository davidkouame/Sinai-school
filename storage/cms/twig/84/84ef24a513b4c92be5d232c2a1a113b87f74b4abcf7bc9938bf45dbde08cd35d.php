<?php

/* /opt/lampp/htdocs/sinai_school_october_cms/themes/default/partials/site/header.htm */
class __TwigTemplate_8423bb07acf847a499175a1d7154ec43e178d7e5d81f320c303a91839d846b0a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<header class=\"header\">
    <div class=\"top-bar\">
        <div class=\"container\">
            <div class=\"row\">
                <ul class=\"social-icons col-md-6 col-12 d-none d-md-block\">
                    <li><a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
                    <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                    <li><a href=\"#\"><i class=\"fab fa-youtube\"></i></a></li>
                    <li><a href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                    <li><a href=\"#\"><i class=\"fab fa-google-plus-g\"></i></a></li>
                    <li class=\"row-end\"><a href=\"#\"><i class=\"fas fa-rss\"></i></a></li>
                </ul>
                <form class=\"col-md-6 col-12 search-form\" role=\"search\">
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher sur le site ...\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-theme\">Go</button>
                </form>
            </div>
        </div>
    </div>
    <!--//to-bar-->

    <div class=\"header-main container\">
        <div class=\"row\">
            <h1 class=\"logo col-md-4 col-12\">
                <a href=\"index.html\"><img id=\"logo\" src=\"https://themes.3rdwavemedia.com/college-green/bs4/3.0/assets/images/logo.png\"
                        alt=\"Logo\"></a>
            </h1>
            <!--//logo-->
            <div class=\"info col-md-8 col-12\">
                <ul class=\"menu-top float-right d-none d-md-block\">
                    <li class=\"divider\"><a href=\"index.html\">Home</a></li>
                    <!-- <li class=\"divider\"><a href=\"faq.html\">FAQ</a></li> -->
                    <li><a href=\"contact.html\">Contact</a></li>
                </ul>
                <!--//menu-top-->
                <br />
                <div class=\"contact float-right\">
                    <p class=\"phone\"><i class=\"fas fa-phone\"></i>Appelez nous aujourd'hui au 20 34 56 76</p>
                    <p class=\"email\"><i class=\"fas fa-envelope\"></i><a href=\"#\">info-nom-ecole@sinsai.com</a></p>
                </div>
                <!--//contact-->
            </div>
            <!--//info-->
        </div>
        <!--//row-->
    </div>
    <!--//header-main-->
</header>

<div class=\"main-nav-wrapper\">
    <div class=\"container\">
        <nav class=\"main-nav navbar navbar-expand-md\" role=\"navigation\">
            <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <!--//nav-toggle-->

            <div class=\"navbar-collapse collapse\" id=\"navbar-collapse\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"nav-item\"><a class=\"active nav-link\" href=\"index.html\">Home</a></li>

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown-1\" role=\"button\" data-toggle=\"dropdown\"
                            aria-haspopup=\"true\" aria-expanded=\"false\">Administration <i class=\"fas fa-angle-down\"></i></a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item\" href=\"";
        // line 71
        echo url("/organigrame");
        echo "\">Organigrame</a>
                            <a class=\"dropdown-item\" href=\"";
        // line 72
        echo url("/examens");
        echo "\">Resultats et Examens</a>
                        </div>
                        <!--//dropdown-menu-->
                    </li>

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown-2\" role=\"button\" data-toggle=\"dropdown\"
                            aria-haspopup=\"true\" aria-expanded=\"false\">Enseignants <i class=\"fas fa-angle-down\"></i></a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown-2\">
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">Infos aux Enseignants</a>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\" style=\"width: 109%;\">Activites de
                                fin de trimestre</a>
                        </div>
                    </li>

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"0\"
                            data-close-others=\"false\" href=\"#\">Vie scolaire <i class=\"fas fa-angle-down\"></i></a>
                        <div class=\"dropdown-menu\">
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">Clubs d'activites</a>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">Conseil scolaire</a>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">Galerie</a>
                        </div>
                    </li>

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"0\"
                            data-close-others=\"false\" href=\"#\">Espace Elèves <i class=\"fas fa-angle-down\"></i></a>
                        <div class=\"dropdown-menu\">
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">Règlement intérieur</a>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">Infos aux élèves</a>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">Emplois du temps eleve</a>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">Devoirs de niveau</a>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">Bibliotheque numérique</a>
                        </div>
                    </li>

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"0\"
                            data-close-others=\"false\" href=\"#\">Parents d'Elèves <i class=\"fas fa-angle-down\"></i></a>
                        <div class=\"dropdown-menu\">
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">Suivre mes élèves </a>
                            <!-- c'est programme qui a pour de suivre les moyennes de son enfant -->
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">Notes-Moyennes-Bulletins</a>
                        </div>
                    </li>

                    <li class=\"nav-item\"><a class=\"nav-link\" href=javascript:void(0)>Contact</a></li>
                </ul>
                <!--//nav-->
            </div>
            <!--//navabr-collapse-->

        </nav>
        <!--//main-nav-->
    </div>
    <!--//container-->
</div>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/sinai_school_october_cms/themes/default/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 72,  95 => 71,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header class=\"header\">
    <div class=\"top-bar\">
        <div class=\"container\">
            <div class=\"row\">
                <ul class=\"social-icons col-md-6 col-12 d-none d-md-block\">
                    <li><a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
                    <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                    <li><a href=\"#\"><i class=\"fab fa-youtube\"></i></a></li>
                    <li><a href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                    <li><a href=\"#\"><i class=\"fab fa-google-plus-g\"></i></a></li>
                    <li class=\"row-end\"><a href=\"#\"><i class=\"fas fa-rss\"></i></a></li>
                </ul>
                <form class=\"col-md-6 col-12 search-form\" role=\"search\">
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher sur le site ...\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-theme\">Go</button>
                </form>
            </div>
        </div>
    </div>
    <!--//to-bar-->

    <div class=\"header-main container\">
        <div class=\"row\">
            <h1 class=\"logo col-md-4 col-12\">
                <a href=\"index.html\"><img id=\"logo\" src=\"https://themes.3rdwavemedia.com/college-green/bs4/3.0/assets/images/logo.png\"
                        alt=\"Logo\"></a>
            </h1>
            <!--//logo-->
            <div class=\"info col-md-8 col-12\">
                <ul class=\"menu-top float-right d-none d-md-block\">
                    <li class=\"divider\"><a href=\"index.html\">Home</a></li>
                    <!-- <li class=\"divider\"><a href=\"faq.html\">FAQ</a></li> -->
                    <li><a href=\"contact.html\">Contact</a></li>
                </ul>
                <!--//menu-top-->
                <br />
                <div class=\"contact float-right\">
                    <p class=\"phone\"><i class=\"fas fa-phone\"></i>Appelez nous aujourd'hui au 20 34 56 76</p>
                    <p class=\"email\"><i class=\"fas fa-envelope\"></i><a href=\"#\">info-nom-ecole@sinsai.com</a></p>
                </div>
                <!--//contact-->
            </div>
            <!--//info-->
        </div>
        <!--//row-->
    </div>
    <!--//header-main-->
</header>

<div class=\"main-nav-wrapper\">
    <div class=\"container\">
        <nav class=\"main-nav navbar navbar-expand-md\" role=\"navigation\">
            <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <!--//nav-toggle-->

            <div class=\"navbar-collapse collapse\" id=\"navbar-collapse\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"nav-item\"><a class=\"active nav-link\" href=\"index.html\">Home</a></li>

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown-1\" role=\"button\" data-toggle=\"dropdown\"
                            aria-haspopup=\"true\" aria-expanded=\"false\">Administration <i class=\"fas fa-angle-down\"></i></a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item\" href=\"{{ url('/organigrame') }}\">Organigrame</a>
                            <a class=\"dropdown-item\" href=\"{{ url('/examens') }}\">Resultats et Examens</a>
                        </div>
                        <!--//dropdown-menu-->
                    </li>

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown-2\" role=\"button\" data-toggle=\"dropdown\"
                            aria-haspopup=\"true\" aria-expanded=\"false\">Enseignants <i class=\"fas fa-angle-down\"></i></a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown-2\">
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">Infos aux Enseignants</a>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\" style=\"width: 109%;\">Activites de
                                fin de trimestre</a>
                        </div>
                    </li>

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"0\"
                            data-close-others=\"false\" href=\"#\">Vie scolaire <i class=\"fas fa-angle-down\"></i></a>
                        <div class=\"dropdown-menu\">
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">Clubs d'activites</a>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">Conseil scolaire</a>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">Galerie</a>
                        </div>
                    </li>

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"0\"
                            data-close-others=\"false\" href=\"#\">Espace Elèves <i class=\"fas fa-angle-down\"></i></a>
                        <div class=\"dropdown-menu\">
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">Règlement intérieur</a>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">Infos aux élèves</a>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">Emplois du temps eleve</a>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">Devoirs de niveau</a>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">Bibliotheque numérique</a>
                        </div>
                    </li>

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"0\"
                            data-close-others=\"false\" href=\"#\">Parents d'Elèves <i class=\"fas fa-angle-down\"></i></a>
                        <div class=\"dropdown-menu\">
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">Suivre mes élèves </a>
                            <!-- c'est programme qui a pour de suivre les moyennes de son enfant -->
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">Notes-Moyennes-Bulletins</a>
                        </div>
                    </li>

                    <li class=\"nav-item\"><a class=\"nav-link\" href=javascript:void(0)>Contact</a></li>
                </ul>
                <!--//nav-->
            </div>
            <!--//navabr-collapse-->

        </nav>
        <!--//main-nav-->
    </div>
    <!--//container-->
</div>", "/opt/lampp/htdocs/sinai_school_october_cms/themes/default/partials/site/header.htm", "");
    }
}
