<?php

/* /Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/activitesfintrimestre/default.htm */
class __TwigTemplate_1791b0c81edae4f207e54af8bf21615c33e7424ee215068c1cba71d8bfc46e09 extends Twig_Template
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
    <div class=\"col-md-12\">
        <h3 style=\"margin-left: 17px;\">Activités de fin trimestre</h3>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-lg-12 col-12\">
        <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["parametragesActivitesFinTrimestre"] ?? null), "activite_fin_trimestre", []), "html", null, true);
        echo "\" style=\"width: 100%;\"/>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/activitesfintrimestre/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
    <div class=\"col-md-12\">
        <h3 style=\"margin-left: 17px;\">Activités de fin trimestre</h3>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-lg-12 col-12\">
        <img src=\"{{ parametragesActivitesFinTrimestre.activite_fin_trimestre }}\" style=\"width: 100%;\"/>
    </div>
</div>", "/Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/activitesfintrimestre/default.htm", "");
    }
}
