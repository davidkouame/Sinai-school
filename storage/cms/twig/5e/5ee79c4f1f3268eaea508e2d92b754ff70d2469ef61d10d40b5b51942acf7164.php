<?php

/* /opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/school/components/emploisdutemps/default.htm */
class __TwigTemplate_851f9b6caf33d823475ad37117cc73efc3522f46959a437608f7e74be3e5c456 extends Twig_Template
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
        echo "<div class=\"col-lg-9 col-12\">
    <section class=\"news\">
        <div class='section-header clearfix'>
            <div class=\"col-md-12\">
                <div class=\"row\" style=\"padding-bottom: 5px;border-bottom: 2px #e2e2e2 solid;margin-bottom: 20px;\">
                    <div class=\"col-lg-10\" style=\"padding-left: 0px;\">
                        <h1 class=\"section-title title col-md-2\" style=\"font-size: 1.2rem;padding-left: 0px;margin-bottom: 0px;\">Emplois du temps</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"section-content clearfix\" style='padding-left: 0px;'>
            <div id=\"news-carousel\" class=\"news-carousel carousel slide\">
                <div class=\"carousel-inner\">

                    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
            // line 17
            echo "                       <h2>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classe"], "libelle", []), "html", null, true);
            echo "</h2>
                        <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["classe"], "emploisdutemps", []), "getpath", []), "html", null, true);
            echo "\" alt=\"\">
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                    
                </div>

                ";
        // line 23
        echo ($context["actualitesall"] ?? null);
        echo "
            </div>

        </div>
    </section>
</div>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/school/components/emploisdutemps/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 23,  57 => 20,  49 => 18,  44 => 17,  40 => 16,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-lg-9 col-12\">
    <section class=\"news\">
        <div class='section-header clearfix'>
            <div class=\"col-md-12\">
                <div class=\"row\" style=\"padding-bottom: 5px;border-bottom: 2px #e2e2e2 solid;margin-bottom: 20px;\">
                    <div class=\"col-lg-10\" style=\"padding-left: 0px;\">
                        <h1 class=\"section-title title col-md-2\" style=\"font-size: 1.2rem;padding-left: 0px;margin-bottom: 0px;\">Emplois du temps</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"section-content clearfix\" style='padding-left: 0px;'>
            <div id=\"news-carousel\" class=\"news-carousel carousel slide\">
                <div class=\"carousel-inner\">

                    {% for classe in classes %}
                       <h2>{{ classe.libelle }}</h2>
                        <img src=\"{{ classe.emploisdutemps.getpath }}\" alt=\"\">
                    {% endfor %}
                    
                </div>

                {{ actualitesall|raw }}
            </div>

        </div>
    </section>
</div>", "/opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/school/components/emploisdutemps/default.htm", "");
    }
}
