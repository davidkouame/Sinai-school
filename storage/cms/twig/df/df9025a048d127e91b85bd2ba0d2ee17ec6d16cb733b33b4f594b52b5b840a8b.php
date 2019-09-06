<?php

/* /opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/school/components/examensall/default.htm */
class __TwigTemplate_f6efab256f0c70653aa320121a6dcd2020681de713885d3c55e6351c952e99f3 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["examensall"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["examen"]) {
            // line 2
            echo "    <div class=\"item carousel2-item active\">
        <div class=\"row\">
            <div class=\"col-lg-9\">
                <h2 class=\"title\" style=\"margin-bottom: 0rem;\"><a href=\"";
            // line 5
            echo url("examens");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["examen"], "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["examen"], "name", []), "html", null, true);
            echo "</a></h2>
                <p style=\"margin-bottom: 0rem;\">
                    ";
            // line 7
            echo call_user_func_array($this->env->getFilter('truncate')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["examen"], "description", []), 210, false, " ..."]);
            echo "
                </p>
            </div>
            <div class=\"col-lg-12\">
                ";
            // line 11
            if (twig_get_attribute($this->env, $this->source, $context["examen"], "sujets", [])) {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["examen"], "sujets", []), "getpath", []), "html", null, true);
                echo "\" target=\"_blank\">Sujets</a>/ ";
            }
            // line 12
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["examen"], "corrections", [])) {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["examen"], "corrections", []), "getpath", []), "html", null, true);
                echo "\" target=\"_blank\">Corrections</a>/ ";
            }
            // line 13
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["examen"], "resultats", [])) {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["examen"], "resultats", []), "getpath", []), "html", null, true);
                echo "\" target=\"_blank\">Resultats</a> ";
            }
            // line 14
            echo "            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['examen'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
<div class=\"pagination\">
    ";
        // line 20
        echo ($context["examensall"] ?? null);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/school/components/examensall/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 20,  77 => 18,  68 => 14,  61 => 13,  54 => 12,  48 => 11,  41 => 7,  32 => 5,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for examen in examensall %}
    <div class=\"item carousel2-item active\">
        <div class=\"row\">
            <div class=\"col-lg-9\">
                <h2 class=\"title\" style=\"margin-bottom: 0rem;\"><a href=\"{{ url('examens')}}/{{ examen.id }}\">{{ examen.name }}</a></h2>
                <p style=\"margin-bottom: 0rem;\">
                    {{ examen.description|truncate(210, false, \" ...\") }}
                </p>
            </div>
            <div class=\"col-lg-12\">
                {% if(examen.sujets) %} <a href=\"{{ examen.sujets.getpath }}\" target=\"_blank\">Sujets</a>/ {% endif %}
                {% if(examen.corrections) %} <a href=\"{{ examen.corrections.getpath }}\" target=\"_blank\">Corrections</a>/ {% endif %}
                {% if(examen.resultats) %} <a href=\"{{ examen.resultats.getpath }}\" target=\"_blank\">Resultats</a> {% endif %}
            </div>
        </div>
    </div>
{% endfor %}

<div class=\"pagination\">
    {{ examensall|raw }}
</div>", "/opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/school/components/examensall/default.htm", "");
    }
}
