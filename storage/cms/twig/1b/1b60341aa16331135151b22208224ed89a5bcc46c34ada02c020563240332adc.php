<?php

/* /opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/school/components/detailactualite/default.htm */
class __TwigTemplate_56019f980735a9f64061112b8dc1b6d4e0922a5d91b3a3f99afbf59949df5f72 extends Twig_Template
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
            <div class=\"section-content clearfix\" style='padding-left: 0px;'>
                <div id=\"news-carousel\" class=\"news-carousel carousel slide\">
                    <div class=\"carousel-inner\">
                        <p>Cover : <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["actualite"] ?? null), "cover", []), "getpath", []), "html", null, true);
        echo "\" alt=\"\"></p>
                        <br>

                       <p>title : ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["actualite"] ?? null), "id", []), "html", null, true);
        echo "</p>
                       <br>

                       <p>Content : ";
        // line 12
        echo twig_get_attribute($this->env, $this->source, ($context["actualite"] ?? null), "content", []);
        echo "</p>
    
                    </div>
                </div>
    
            </div>
        </section>
    </div>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/school/components/detailactualite/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 12,  36 => 9,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-lg-9 col-12\">
        <section class=\"news\">
            <div class=\"section-content clearfix\" style='padding-left: 0px;'>
                <div id=\"news-carousel\" class=\"news-carousel carousel slide\">
                    <div class=\"carousel-inner\">
                        <p>Cover : <img src=\"{{ actualite.cover.getpath }}\" alt=\"\"></p>
                        <br>

                       <p>title : {{ actualite.id }}</p>
                       <br>

                       <p>Content : {{ actualite.content|raw }}</p>
    
                    </div>
                </div>
    
            </div>
        </section>
    </div>", "/opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/school/components/detailactualite/default.htm", "");
    }
}
