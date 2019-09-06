<?php

/* /opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/school/components/detailclubsactivites/default.htm */
class __TwigTemplate_24cf10e68cb78ebcb73aa2377e7f8579984c1382af95aa75ad363ddc7c36894d extends Twig_Template
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
        echo "<section class=\"news\" style=\"margin-bottom: 0px;\">
    <div class=\"section-content clearfix\" style='padding-left: 0px;'>
        <div id=\"news-carousel\" class=\"news-carousel carousel slide\">
            <div class=\"carousel-inner\">
                <!-- <img src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slide-2.jpg");
        echo "\" class=\"img-fluid\" alt=\"Responsive image\">-->
                <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["clubActivite"] ?? null), "logo", []), "getpath", []), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Responsive image\">

                <h3 style=\"margin-top: 2%;\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["clubActivite"] ?? null), "name", []), "html", null, true);
        echo "</h3>
                <p style=\"text-align: justify;\">";
        // line 9
        echo twig_get_attribute($this->env, $this->source, ($context["clubActivite"] ?? null), "content", []);
        echo "</p>

            </div>
        </div>
    </div>
</section>
<div class=\"float-right\" style=\"margin-right: 12px;\"><b>Publié le ";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["clubActivite"] ?? null), "created_at", []), "d-m-Y"), "html", null, true);
        echo "</b></div>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/school/components/detailclubsactivites/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 15,  42 => 9,  38 => 8,  33 => 6,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"news\" style=\"margin-bottom: 0px;\">
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
<div class=\"float-right\" style=\"margin-right: 12px;\"><b>Publié le {{ clubActivite.created_at|date(\"d-m-Y\") }}</b></div>", "/opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/school/components/detailclubsactivites/default.htm", "");
    }
}
