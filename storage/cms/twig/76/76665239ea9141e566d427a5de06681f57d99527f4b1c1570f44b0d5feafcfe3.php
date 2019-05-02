<?php

/* /opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/school/components/detailexamen/default.htm */
class __TwigTemplate_03c5ebecf8118e4090f781f674aebf5d90805463b817a6b0a5129e876ae8a23a extends Twig_Template
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

                    <p>name : ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["examen"] ?? null), "name", []), "html", null, true);
        echo "</p>
                    <br>

                    <p>Date de début : ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["examen"] ?? null), "datedebut", []), "html", null, true);
        echo "</p>
                    <br>

                    <p>Date de fin : ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["examen"] ?? null), "datefin", []), "html", null, true);
        echo "</p>
                    <br>

                    <p>Description : ";
        // line 16
        echo twig_get_attribute($this->env, $this->source, ($context["examen"] ?? null), "description", []);
        echo "</p>
                    <br>

                    <p>
                        ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["examen"] ?? null), "sujets", [])) {
            echo " <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["examen"] ?? null), "sujets", []), "getpath", []), "html", null, true);
            echo "\" target=\"_blank\">Sujets</a> /";
        }
        // line 21
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["examen"] ?? null), "corrections", [])) {
            echo " <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["examen"] ?? null), "corrections", []), "getpath", []), "html", null, true);
            echo "\" target=\"_blank\">Corrections</a>/";
        }
        // line 22
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["examen"] ?? null), "resultats", [])) {
            echo " <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["examen"] ?? null), "resultats", []), "getpath", []), "html", null, true);
            echo "\" target=\"_blank\">Resultats</a>";
        }
        // line 23
        echo "                    </p>
                    <br>

                </div>
            </div>

        </div>
    </section>
</div>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/school/components/detailexamen/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 23,  69 => 22,  62 => 21,  56 => 20,  49 => 16,  43 => 13,  37 => 10,  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-lg-9 col-12\">
    <section class=\"news\">
        <div class=\"section-content clearfix\" style='padding-left: 0px;'>
            <div id=\"news-carousel\" class=\"news-carousel carousel slide\">
                <div class=\"carousel-inner\">

                    <p>name : {{ examen.name }}</p>
                    <br>

                    <p>Date de début : {{ examen.datedebut }}</p>
                    <br>

                    <p>Date de fin : {{ examen.datefin }}</p>
                    <br>

                    <p>Description : {{ examen.description|raw }}</p>
                    <br>

                    <p>
                        {% if(examen.sujets) %} <a href=\"{{ examen.sujets.getpath }}\" target=\"_blank\">Sujets</a> /{% endif %}
                        {% if(examen.corrections) %} <a href=\"{{ examen.corrections.getpath }}\" target=\"_blank\">Corrections</a>/{% endif %}
                        {% if(examen.resultats) %} <a href=\"{{ examen.resultats.getpath }}\" target=\"_blank\">Resultats</a>{% endif %}
                    </p>
                    <br>

                </div>
            </div>

        </div>
    </section>
</div>", "/opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/school/components/detailexamen/default.htm", "");
    }
}
