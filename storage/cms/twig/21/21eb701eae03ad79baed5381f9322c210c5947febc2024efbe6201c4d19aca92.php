<?php

/* /Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/detailexamen/default.htm */
class __TwigTemplate_f9cbaedfc94d366751d65a365867741b55319fa1b369fb7657cdaef05892ac90 extends Twig_Template
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
        echo "<style>
    .news ul li {
        list-style: none;
        margin-top: 12px;
    }

    .key {
        font-size: 15px;
        font-weight: bold;
    }

    .value {
        font-size: 14px;
    }

    .detail {}

    ul {
        padding-left: 0px;
    }
</style>


<div class=\"page-wrapper\">

    <header class=\"page-heading clearfix\">
        <h1 class=\"heading-title float-left\" style=\"margin-top: 12px; margin-bottom: 0px\">Examens et resultats</h1>
        <div class=\"breadcrumbs float-right\">
            <ul class=\"breadcrumbs-list\">
                <li>
                    <a href=\"";
        // line 31
        echo url("/");
        echo "\">Accueil</a><svg class=\"svg-inline--fa fa-angle-right fa-w-8\" aria-hidden=\"true\"
                        focusable=\"false\" data-prefix=\"fas\" data-icon=\"angle-right\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\"
                        viewBox=\"0 0 256 512\" data-fa-i2svg=\"\">
                        <path fill=\"currentColor\" d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"></path>
                    </svg>
                </li>
                <li>
                        <a href=\"";
        // line 38
        echo url("/examens");
        echo "\">Examens et resultats</a><svg class=\"svg-inline--fa fa-angle-right fa-w-8\" aria-hidden=\"true\"
                            focusable=\"false\" data-prefix=\"fas\" data-icon=\"angle-right\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\"
                            viewBox=\"0 0 256 512\" data-fa-i2svg=\"\">
                            <path fill=\"currentColor\" d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"></path>
                        </svg>
                    </li>
                <li class=\"current\">";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["examen"] ?? null), "name", []), "html", null, true);
        echo "</li>
            </ul>
        </div>
    </header>

    <div class=\"page-content\">
        <div class=\"row page-row\">
            <div class=\"col-md-12\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <img src=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slide-2.jpg");
        echo "\" class=\"img-fluid\" alt=\"Responsive image\">
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12 col-12\">
                        <section class=\"news\">
                            <div class=\"section-content clearfix\" style='padding-left: 0px;'>
                                <div id=\"news-carousel\" class=\"news-carousel carousel slide\">
                                    <div class=\"carousel-inner\">
                                        <ul>
                                            <li class=\"detail\">
                                                <span class=\"key\">Nom :</span>
                                                <span class=\"value\">";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["examen"] ?? null), "name", []), "html", null, true);
        echo "</span></li>
                                            <li>
                                                <span class=\"key\">Date de début :</span>
                                                <span class=\"value\">";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["examen"] ?? null), "datedebut", []), "html", null, true);
        echo "</span>
                                            </li>
                                            <li>
                                                <span class=\"key\">Date de fin :</span>
                                                <span class=\"value\">";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["examen"] ?? null), "datefin", []), "html", null, true);
        echo "</span>
                                            </li>
                                            <li>
                                                <span class=\"key\">Description :</span>
                                                <span class=\"value\">";
        // line 77
        echo twig_get_attribute($this->env, $this->source, ($context["examen"] ?? null), "description", []);
        echo "</span>
                                            </li>
                                            <li>
                                                ";
        // line 80
        if (twig_get_attribute($this->env, $this->source, ($context["examen"] ?? null), "sujets", [])) {
            echo " <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["examen"] ?? null), "sujets", []), "getpath", []), "html", null, true);
            echo "\" target=\"_blank\">Télécharger
                                                    les sujets</a> /";
        }
        // line 82
        echo "                                                ";
        if (twig_get_attribute($this->env, $this->source, ($context["examen"] ?? null), "corrections", [])) {
            echo " <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["examen"] ?? null), "corrections", []), "getpath", []), "html", null, true);
            echo "\"
                                                    target=\"_blank\">Télécharger
                                                    les corrections</a> /";
        }
        // line 85
        echo "                                                ";
        if (twig_get_attribute($this->env, $this->source, ($context["examen"] ?? null), "resultats", [])) {
            echo " <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["examen"] ?? null), "resultats", []), "getpath", []), "html", null, true);
            echo "\"
                                                    target=\"_blank\">Télécharger
                                                    les resultats</a>";
        }
        // line 88
        echo "                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/detailexamen/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 88,  144 => 85,  135 => 82,  128 => 80,  122 => 77,  115 => 73,  108 => 69,  102 => 66,  87 => 54,  74 => 44,  65 => 38,  55 => 31,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<style>
    .news ul li {
        list-style: none;
        margin-top: 12px;
    }

    .key {
        font-size: 15px;
        font-weight: bold;
    }

    .value {
        font-size: 14px;
    }

    .detail {}

    ul {
        padding-left: 0px;
    }
</style>


<div class=\"page-wrapper\">

    <header class=\"page-heading clearfix\">
        <h1 class=\"heading-title float-left\" style=\"margin-top: 12px; margin-bottom: 0px\">Examens et resultats</h1>
        <div class=\"breadcrumbs float-right\">
            <ul class=\"breadcrumbs-list\">
                <li>
                    <a href=\"{{ url('/') }}\">Accueil</a><svg class=\"svg-inline--fa fa-angle-right fa-w-8\" aria-hidden=\"true\"
                        focusable=\"false\" data-prefix=\"fas\" data-icon=\"angle-right\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\"
                        viewBox=\"0 0 256 512\" data-fa-i2svg=\"\">
                        <path fill=\"currentColor\" d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"></path>
                    </svg>
                </li>
                <li>
                        <a href=\"{{ url('/examens') }}\">Examens et resultats</a><svg class=\"svg-inline--fa fa-angle-right fa-w-8\" aria-hidden=\"true\"
                            focusable=\"false\" data-prefix=\"fas\" data-icon=\"angle-right\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\"
                            viewBox=\"0 0 256 512\" data-fa-i2svg=\"\">
                            <path fill=\"currentColor\" d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"></path>
                        </svg>
                    </li>
                <li class=\"current\">{{ examen.name }}</li>
            </ul>
        </div>
    </header>

    <div class=\"page-content\">
        <div class=\"row page-row\">
            <div class=\"col-md-12\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <img src=\"{{'assets/images/slide-2.jpg' | theme }}\" class=\"img-fluid\" alt=\"Responsive image\">
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12 col-12\">
                        <section class=\"news\">
                            <div class=\"section-content clearfix\" style='padding-left: 0px;'>
                                <div id=\"news-carousel\" class=\"news-carousel carousel slide\">
                                    <div class=\"carousel-inner\">
                                        <ul>
                                            <li class=\"detail\">
                                                <span class=\"key\">Nom :</span>
                                                <span class=\"value\">{{ examen.name }}</span></li>
                                            <li>
                                                <span class=\"key\">Date de début :</span>
                                                <span class=\"value\">{{ examen.datedebut }}</span>
                                            </li>
                                            <li>
                                                <span class=\"key\">Date de fin :</span>
                                                <span class=\"value\">{{ examen.datefin }}</span>
                                            </li>
                                            <li>
                                                <span class=\"key\">Description :</span>
                                                <span class=\"value\">{{ examen.description|raw }}</span>
                                            </li>
                                            <li>
                                                {% if(examen.sujets) %} <a href=\"{{ examen.sujets.getpath }}\" target=\"_blank\">Télécharger
                                                    les sujets</a> /{% endif %}
                                                {% if(examen.corrections) %} <a href=\"{{ examen.corrections.getpath }}\"
                                                    target=\"_blank\">Télécharger
                                                    les corrections</a> /{% endif %}
                                                {% if(examen.resultats) %} <a href=\"{{ examen.resultats.getpath }}\"
                                                    target=\"_blank\">Télécharger
                                                    les resultats</a>{% endif %}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "/Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/detailexamen/default.htm", "");
    }
}
