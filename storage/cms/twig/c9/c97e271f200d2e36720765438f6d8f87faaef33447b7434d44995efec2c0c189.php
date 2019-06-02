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

/* /Applications/MAMP/htdocs/install-master/plugins/bootnetcrasher/school/components/examensall/default.htm */
class __TwigTemplate_ef82565cc17b601a69c8e6fc2f0eb1737c9555a0d2e8a5d9dcc215b086a2f81c extends \Twig\Template
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["examen"], "id", [], "any", false, false, false, 5), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["examen"], "name", [], "any", false, false, false, 5), "html", null, true);
            echo "</a></h2>
                <p style=\"margin-bottom: 0rem;\">
                    ";
            // line 7
            echo call_user_func_array($this->env->getFilter('truncate')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["examen"], "description", [], "any", false, false, false, 7), 210, false, " ..."]);
            echo "
                </p>
            </div>
            <div class=\"col-lg-12\">
                ";
            // line 11
            if (twig_get_attribute($this->env, $this->source, $context["examen"], "sujets", [], "any", false, false, false, 11)) {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["examen"], "sujets", [], "any", false, false, false, 11), "getpath", [], "any", false, false, false, 11), "html", null, true);
                echo "\" target=\"_blank\">Sujets</a>/ ";
            }
            // line 12
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["examen"], "corrections", [], "any", false, false, false, 12)) {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["examen"], "corrections", [], "any", false, false, false, 12), "getpath", [], "any", false, false, false, 12), "html", null, true);
                echo "\" target=\"_blank\">Corrections</a>/ ";
            }
            // line 13
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["examen"], "resultats", [], "any", false, false, false, 13)) {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["examen"], "resultats", [], "any", false, false, false, 13), "getpath", [], "any", false, false, false, 13), "html", null, true);
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
        return "/Applications/MAMP/htdocs/install-master/plugins/bootnetcrasher/school/components/examensall/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 20,  89 => 18,  80 => 14,  73 => 13,  66 => 12,  60 => 11,  53 => 7,  44 => 5,  39 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for examen in examensall %}
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
</div>", "/Applications/MAMP/htdocs/install-master/plugins/bootnetcrasher/school/components/examensall/default.htm", "");
    }
}
