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
                <a href=\"";
        // line 27
        echo url("/");
        echo "\"><img id=\"logo\" src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["parametrages"] ?? null), "logo", []), "html", null, true);
        echo "\"
                        alt=\"Logo\"></a>
            </h1>
            <!--//logo-->
            <div class=\"info col-md-8 col-12\">
                <ul class=\"menu-top float-right d-none d-md-block\">
                    <li class=\"divider\"><a href=\"";
        // line 33
        echo url("/");
        echo "\">Home</a></li>
                    <!-- <li class=\"divider\"><a href=\"faq.html\">FAQ</a></li> -->
                    <li><a href=\"";
        // line 35
        echo url("/contact");
        echo "\">Contact</a></li>
                </ul>
                <!--//menu-top-->
                <br />
                <div class=\"contact float-right\">
                    <p class=\"phone\"><i class=\"fas fa-phone\"></i>Appelez nous aujourd'hui au ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["parametrages"] ?? null), "number_front", []), "html", null, true);
        echo "</p>
                    <p class=\"email\"><i class=\"fas fa-envelope\"></i><a href=\"#\">";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["parametrages"] ?? null), "email_front", []), "html", null, true);
        echo "</a></p>
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
                    <li class=\"nav-item\"><a class=\"active nav-link\" href=\"";
        // line 65
        echo url("/");
        echo "\">Home</a></li>

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
                            <a class=\"dropdown-item\" href=\"";
        // line 81
        echo url("/professeurs");
        echo "\">Infos aux Enseignants</a>
                            <a class=\"dropdown-item\" href=\"";
        // line 82
        echo url("/activites-fin-trimestre");
        echo "\" style=\"width: 109%;\">Activites de
                                fin de trimestre</a>
                        </div>
                    </li>

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"0\"
                            data-close-others=\"false\" href=\"#\">Vie scolaire <i class=\"fas fa-angle-down\"></i></a>
                        <div class=\"dropdown-menu\">
                            <a class=\"dropdown-item\" href=\"";
        // line 91
        echo url("clubs-activites");
        echo "\">Clubs d'activites</a>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">Conseil scolaire</a>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">Galerie</a>
                        </div>
                    </li>

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"0\"
                            data-close-others=\"false\" href=\"#\">Espace Elèves <i class=\"fas fa-angle-down\"></i></a>
                        <div class=\"dropdown-menu\">
                            <a class=\"dropdown-item\" href=\"";
        // line 101
        echo url("/reglement-interieur");
        echo "\">Règlement intérieur</a>
                            <!--<a class=\"dropdown-item\" href=\"javascript:void(0)\">Infos aux élèves</a>-->
                            <a class=\"dropdown-item\" href=\"";
        // line 103
        echo url("/emplois-du-temps");
        echo "\">Emplois du temps eleve</a>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">Devoirs de niveau</a>
                            <a class=\"dropdown-item\" href=\"";
        // line 105
        echo url("/sujets");
        echo "\">Sujets</a>
                        </div>
                    </li>

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"0\"
                            data-close-others=\"false\" href=\"#\">Parents d'Elèves <i class=\"fas fa-angle-down\"></i></a>
                        <div class=\"dropdown-menu\">
                            <a class=\"dropdown-item\" href=\"";
        // line 113
        echo url("/suivre-mes-eleves");
        echo "\">Suivre mes élèves </a>
                            <!-- c'est programme qui a pour de suivre les moyennes de son enfant 
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">Notes-Moyennes-Bulletins</a>-->
                        </div>
                    </li>

                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 119
        echo url("/contact");
        echo "\">Contact</a></li>
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
        return array (  190 => 119,  181 => 113,  170 => 105,  165 => 103,  160 => 101,  147 => 91,  135 => 82,  131 => 81,  119 => 72,  115 => 71,  106 => 65,  79 => 41,  75 => 40,  67 => 35,  62 => 33,  51 => 27,  23 => 1,);
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
                <a href=\"{{ url('/') }}\"><img id=\"logo\" src=\"{{ parametrages.logo }}\"
                        alt=\"Logo\"></a>
            </h1>
            <!--//logo-->
            <div class=\"info col-md-8 col-12\">
                <ul class=\"menu-top float-right d-none d-md-block\">
                    <li class=\"divider\"><a href=\"{{ url('/') }}\">Home</a></li>
                    <!-- <li class=\"divider\"><a href=\"faq.html\">FAQ</a></li> -->
                    <li><a href=\"{{ url('/contact') }}\">Contact</a></li>
                </ul>
                <!--//menu-top-->
                <br />
                <div class=\"contact float-right\">
                    <p class=\"phone\"><i class=\"fas fa-phone\"></i>Appelez nous aujourd'hui au {{ parametrages.number_front }}</p>
                    <p class=\"email\"><i class=\"fas fa-envelope\"></i><a href=\"#\">{{ parametrages.email_front }}</a></p>
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
                    <li class=\"nav-item\"><a class=\"active nav-link\" href=\"{{ url('/') }}\">Home</a></li>

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
                            <a class=\"dropdown-item\" href=\"{{ url('/professeurs') }}\">Infos aux Enseignants</a>
                            <a class=\"dropdown-item\" href=\"{{ url('/activites-fin-trimestre') }}\" style=\"width: 109%;\">Activites de
                                fin de trimestre</a>
                        </div>
                    </li>

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"0\"
                            data-close-others=\"false\" href=\"#\">Vie scolaire <i class=\"fas fa-angle-down\"></i></a>
                        <div class=\"dropdown-menu\">
                            <a class=\"dropdown-item\" href=\"{{ url('clubs-activites')}}\">Clubs d'activites</a>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">Conseil scolaire</a>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">Galerie</a>
                        </div>
                    </li>

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"0\"
                            data-close-others=\"false\" href=\"#\">Espace Elèves <i class=\"fas fa-angle-down\"></i></a>
                        <div class=\"dropdown-menu\">
                            <a class=\"dropdown-item\" href=\"{{ url('/reglement-interieur') }}\">Règlement intérieur</a>
                            <!--<a class=\"dropdown-item\" href=\"javascript:void(0)\">Infos aux élèves</a>-->
                            <a class=\"dropdown-item\" href=\"{{ url('/emplois-du-temps') }}\">Emplois du temps eleve</a>
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">Devoirs de niveau</a>
                            <a class=\"dropdown-item\" href=\"{{ url('/sujets') }}\">Sujets</a>
                        </div>
                    </li>

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"0\"
                            data-close-others=\"false\" href=\"#\">Parents d'Elèves <i class=\"fas fa-angle-down\"></i></a>
                        <div class=\"dropdown-menu\">
                            <a class=\"dropdown-item\" href=\"{{ url('/suivre-mes-eleves') }}\">Suivre mes élèves </a>
                            <!-- c'est programme qui a pour de suivre les moyennes de son enfant 
                            <a class=\"dropdown-item\" href=\"javascript:void(0)\">Notes-Moyennes-Bulletins</a>-->
                        </div>
                    </li>

                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ url('/contact') }}\">Contact</a></li>
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
