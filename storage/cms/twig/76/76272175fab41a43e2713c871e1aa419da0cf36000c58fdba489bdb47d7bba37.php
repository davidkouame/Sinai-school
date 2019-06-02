<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /Applications/MAMP/htdocs/install-master/plugins/bootnetcrasher/school/components/detailclubsactivites/default.htm */
class __TwigTemplate_4b57c74d2d129422dbc41d1a6bb068d6a7e4f92b9a7103cd3411604b10012e12 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["clubActivite"] ?? null), "logo", [], "any", false, false, false, 6), "getpath", [], "any", false, false, false, 6), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Responsive image\">

                <h3 style=\"margin-top: 2%;\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["clubActivite"] ?? null), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "</h3>
                <p style=\"text-align: justify;\">";
        // line 9
        echo twig_get_attribute($this->env, $this->source, ($context["clubActivite"] ?? null), "content", [], "any", false, false, false, 9);
        echo "</p>

            </div>
        </div>
    </div>
</section>
<div class=\"float-right\" style=\"margin-right: 12px;\"><b>Publié le ";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["clubActivite"] ?? null), "created_at", [], "any", false, false, false, 15), "d-m-Y"), "html", null, true);
        echo "</b></div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/install-master/plugins/bootnetcrasher/school/components/detailclubsactivites/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 15,  54 => 9,  50 => 8,  45 => 6,  41 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"news\" style=\"margin-bottom: 0px;\">
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
<div class=\"float-right\" style=\"margin-right: 12px;\"><b>Publié le {{ clubActivite.created_at|date(\"d-m-Y\") }}</b></div>", "/Applications/MAMP/htdocs/install-master/plugins/bootnetcrasher/school/components/detailclubsactivites/default.htm", "");
    }
}
