<?php

/* /Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/detailactualite/default.htm */
class __TwigTemplate_fc57932420ecd5b82d8c7c8bced8c1e03913a3ef3057f89bd6651755b33b2569 extends Twig_Template
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
        echo "<div class=\"row\">
    <div class=\"col-lg-12 col-12\">
        <section class=\"news\" style=\"margin-bottom: 0px;\">
            <div class=\"section-content clearfix\" style='padding-left: 0px;'>
                <div id=\"news-carousel\" class=\"news-carousel carousel slide\">
                    <div class=\"carousel-inner\">
                        <!-- <img src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slide-2.jpg");
        echo "\" class=\"img-fluid\" alt=\"Responsive image\">-->
                        <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["actualite"] ?? null), "cover", []), "getpath", []), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Responsive image\">

                        <h3 style=\"margin-top: 2%;\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["actualite"] ?? null), "title", []), "html", null, true);
        echo "</h3>
                        <p style=\"text-align: justify;\">";
        // line 11
        echo twig_get_attribute($this->env, $this->source, ($context["actualite"] ?? null), "content", []);
        echo "</p>

                    </div>
                </div>
            </div>
        </section>
        <div class=\"float-right\" style=\"margin-right: 12px;\"><b>Publié le ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["actualite"] ?? null), "created_at", []), "d-m-Y"), "html", null, true);
        echo "</b></div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/detailactualite/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 17,  44 => 11,  40 => 10,  35 => 8,  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
    <div class=\"col-lg-12 col-12\">
        <section class=\"news\" style=\"margin-bottom: 0px;\">
            <div class=\"section-content clearfix\" style='padding-left: 0px;'>
                <div id=\"news-carousel\" class=\"news-carousel carousel slide\">
                    <div class=\"carousel-inner\">
                        <!-- <img src=\"{{'assets/images/slide-2.jpg' | theme }}\" class=\"img-fluid\" alt=\"Responsive image\">-->
                        <img src=\"{{ actualite.cover.getpath }}\" class=\"img-fluid\" alt=\"Responsive image\">

                        <h3 style=\"margin-top: 2%;\">{{ actualite.title }}</h3>
                        <p style=\"text-align: justify;\">{{ actualite.content|raw }}</p>

                    </div>
                </div>
            </div>
        </section>
        <div class=\"float-right\" style=\"margin-right: 12px;\"><b>Publié le {{ actualite.created_at|date(\"d-m-Y\") }}</b></div>
    </div>
</div>", "/Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/detailactualite/default.htm", "");
    }
}
