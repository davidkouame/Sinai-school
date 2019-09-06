<?php

/* /Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/detailclubsactivites/default.htm */
class __TwigTemplate_f1fb2ecdb2dd48020e771d0878d8a9322ad36bb346871d9e4ef48bc964e51fd1 extends Twig_Template
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
        echo "<div class=\"page-wrapper\">

    <header class=\"page-heading clearfix\">
        <h1 class=\"heading-title float-left\" style=\"margin-top: 12px; margin-bottom: 0px\">Clubs d'activités</h1>
        <div class=\"breadcrumbs float-right\">
            <ul class=\"breadcrumbs-list\">
                <li>
                    <a href=\"";
        // line 8
        echo url("/");
        echo "\">Accueil</a><svg class=\"svg-inline--fa fa-angle-right fa-w-8\" aria-hidden=\"true\"
                        focusable=\"false\" data-prefix=\"fas\" data-icon=\"angle-right\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\"
                        viewBox=\"0 0 256 512\" data-fa-i2svg=\"\">
                        <path fill=\"currentColor\" d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"></path>
                    </svg>
                </li>
                <li>
                        <a href=\"";
        // line 15
        echo url("/clubs-activites");
        echo "\">Clubs d'activités</a><svg class=\"svg-inline--fa fa-angle-right fa-w-8\" aria-hidden=\"true\"
                            focusable=\"false\" data-prefix=\"fas\" data-icon=\"angle-right\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\"
                            viewBox=\"0 0 256 512\" data-fa-i2svg=\"\">
                            <path fill=\"currentColor\" d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"></path>
                        </svg>
                    </li>
                <li class=\"current\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["clubActivite"] ?? null), "name", []), "html", null, true);
        echo "</li>
            </ul>
        </div>
    </header>

    <div class=\"page-content\">
        <div class=\"row page-row\">
            <div class=\"col-md-12\">
                <section class=\"news\" style=\"margin-bottom: 0px;\">
                    <div class=\"section-content clearfix\" style='padding-left: 0px;'>
                        <div id=\"news-carousel\" class=\"news-carousel carousel slide\">
                            <div class=\"carousel-inner\">
                                <!-- <img src=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slide-2.jpg");
        echo "\" class=\"img-fluid\" alt=\"Responsive image\">-->
                                <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["clubActivite"] ?? null), "logo", []), "getpath", []), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Responsive image\">

                                <h3 style=\"margin-top: 2%;\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["clubActivite"] ?? null), "name", []), "html", null, true);
        echo "</h3>
                                <p style=\"text-align: justify;\">";
        // line 37
        echo twig_get_attribute($this->env, $this->source, ($context["clubActivite"] ?? null), "content", []);
        echo "</p>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/detailclubsactivites/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 37,  75 => 36,  70 => 34,  66 => 33,  51 => 21,  42 => 15,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"page-wrapper\">

    <header class=\"page-heading clearfix\">
        <h1 class=\"heading-title float-left\" style=\"margin-top: 12px; margin-bottom: 0px\">Clubs d'activités</h1>
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
                        <a href=\"{{ url('/clubs-activites') }}\">Clubs d'activités</a><svg class=\"svg-inline--fa fa-angle-right fa-w-8\" aria-hidden=\"true\"
                            focusable=\"false\" data-prefix=\"fas\" data-icon=\"angle-right\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\"
                            viewBox=\"0 0 256 512\" data-fa-i2svg=\"\">
                            <path fill=\"currentColor\" d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"></path>
                        </svg>
                    </li>
                <li class=\"current\">{{ clubActivite.name }}</li>
            </ul>
        </div>
    </header>

    <div class=\"page-content\">
        <div class=\"row page-row\">
            <div class=\"col-md-12\">
                <section class=\"news\" style=\"margin-bottom: 0px;\">
                    <div class=\"section-content clearfix\" style='padding-left: 0px;'>
                        <div id=\"news-carousel\" class=\"news-carousel carousel slide\">
                            <div class=\"carousel-inner\">
                                <!-- <img src=\"{{'assets/images/slide-2.jpg' | theme }}\" class=\"img-fluid\" alt=\"Responsive image\">-->
                                <img src=\"{{ clubActivite.logo.getpath }}\" class=\"img-fluid\" alt=\"Responsive image\">

                                <h3 style=\"margin-top: 2%;\">{{ clubActivite.name }}</h3>
                                <p style=\"text-align: justify;\">{{ clubActivite.content|raw }}</p>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>", "/Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/detailclubsactivites/default.htm", "");
    }
}
