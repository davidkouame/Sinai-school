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

/* /Applications/MAMP/htdocs/install-master/plugins/bootnetcrasher/school/components/organigrame/default.htm */
class __TwigTemplate_ac90d4e127f4699f2c8d99115e462d446b5eb9de1e04ddfd10bc31b3ceffcc56 extends \Twig\Template
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
        echo "<ol class=\"organizational-chart\">
    <li>
        <div>
            ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["premierParent"] ?? null), "libelle", [], "any", false, false, false, 4), "html", null, true);
        echo "
        </div>
        <ol>
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["premierParent"] ?? null), "getChildren", [], "any", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["premierEnfant"]) {
            // line 8
            echo "            <li>
                <div>
                    ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["premierEnfant"], "libelle", [], "any", false, false, false, 10), "html", null, true);
            echo "
                </div>
                ";
            // line 12
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["premierEnfant"], "getChildren", [], "any", false, false, false, 12)) > 0)) {
                // line 13
                echo "                    <ol>
                        ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["premierEnfant"], "getChildren", [], "any", false, false, false, 14));
                foreach ($context['_seq'] as $context["_key"] => $context["deuxiemeEnfant"]) {
                    // line 15
                    echo "                            <li>
                                <div>
                                    ";
                    // line 17
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deuxiemeEnfant"], "libelle", [], "any", false, false, false, 17), "html", null, true);
                    echo "
                                </div>
                                ";
                    // line 19
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deuxiemeEnfant"], "getChildren", [], "any", false, false, false, 19)) > 0)) {
                        // line 20
                        echo "                                    <ol>
                                        ";
                        // line 21
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["deuxiemeEnfant"], "getChildren", [], "any", false, false, false, 21));
                        foreach ($context['_seq'] as $context["_key"] => $context["troisiemeEnfant"]) {
                            // line 22
                            echo "                                        <li>
                                            <div>
                                                ";
                            // line 24
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["troisiemeEnfant"], "libelle", [], "any", false, false, false, 24), "html", null, true);
                            echo "
                                            </div>
                                            ";
                            // line 26
                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["troisiemeEnfant"], "getChildren", [], "any", false, false, false, 26)) > 0)) {
                                // line 27
                                echo "                                                <ol>
                                                    ";
                                // line 28
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["troisiemeEnfant"], "getChildren", [], "any", false, false, false, 28));
                                foreach ($context['_seq'] as $context["_key"] => $context["quatriemeEnfant"]) {
                                    // line 29
                                    echo "                                                    <li>
                                                        <div>
                                                            ";
                                    // line 31
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["troisiemeEnfant"], "libelle", [], "any", false, false, false, 31), "html", null, true);
                                    echo "
                                                        </div>
                                                    </li>
                                                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quatriemeEnfant'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 35
                                echo "                                                </ol>
                                            ";
                            }
                            // line 37
                            echo "                                        </li>
                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['troisiemeEnfant'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 39
                        echo "                                    </ol>
                                ";
                    }
                    // line 41
                    echo "                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deuxiemeEnfant'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "                    </ol>
                ";
            }
            // line 45
            echo "            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['premierEnfant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </ol>
    </li>
</ol>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/install-master/plugins/bootnetcrasher/school/components/organigrame/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 47,  144 => 45,  140 => 43,  133 => 41,  129 => 39,  122 => 37,  118 => 35,  108 => 31,  104 => 29,  100 => 28,  97 => 27,  95 => 26,  90 => 24,  86 => 22,  82 => 21,  79 => 20,  77 => 19,  72 => 17,  68 => 15,  64 => 14,  61 => 13,  59 => 12,  54 => 10,  50 => 8,  46 => 7,  40 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ol class=\"organizational-chart\">
    <li>
        <div>
            {{ premierParent.libelle }}
        </div>
        <ol>
            {% for premierEnfant in premierParent.getChildren %}
            <li>
                <div>
                    {{ premierEnfant.libelle }}
                </div>
                {% if premierEnfant.getChildren|length > 0 %}
                    <ol>
                        {% for deuxiemeEnfant in premierEnfant.getChildren %}
                            <li>
                                <div>
                                    {{ deuxiemeEnfant.libelle }}
                                </div>
                                {% if deuxiemeEnfant.getChildren|length > 0 %}
                                    <ol>
                                        {% for troisiemeEnfant in deuxiemeEnfant.getChildren %}
                                        <li>
                                            <div>
                                                {{ troisiemeEnfant.libelle }}
                                            </div>
                                            {% if troisiemeEnfant.getChildren|length > 0 %}
                                                <ol>
                                                    {% for quatriemeEnfant in troisiemeEnfant.getChildren %}
                                                    <li>
                                                        <div>
                                                            {{ troisiemeEnfant.libelle }}
                                                        </div>
                                                    </li>
                                                    {% endfor %}
                                                </ol>
                                            {% endif %}
                                        </li>
                                        {% endfor %}
                                    </ol>
                                {% endif %}
                            </li>
                        {% endfor %}
                    </ol>
                {% endif %}
            </li>
            {% endfor %}
        </ol>
    </li>
</ol>", "/Applications/MAMP/htdocs/install-master/plugins/bootnetcrasher/school/components/organigrame/default.htm", "");
    }
}
