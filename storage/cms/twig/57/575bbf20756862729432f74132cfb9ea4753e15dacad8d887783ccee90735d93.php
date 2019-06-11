<?php

/* /Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/organigrame/default.htm */
class __TwigTemplate_a330c219ae45aa3f41a8b82559d315cb20872c8e011c4f9c2815dc01a485f31b extends Twig_Template
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
        echo "
<link href=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/organigrame.css");
        echo "\" rel=\"stylesheet\">

<style>
    .organizational-chart div{
            color: #fff;
    font-weight: bold;
    }
</style>

<ol class=\"organizational-chart\">
    <li>
        <div>
            ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["premierParent"] ?? null), "libelle", []), "html", null, true);
        echo "
        </div>
        <ol>
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["premierParent"] ?? null), "getChildren", []));
        foreach ($context['_seq'] as $context["_key"] => $context["premierEnfant"]) {
            // line 18
            echo "            <li>
                <div>
                    ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["premierEnfant"], "libelle", []), "html", null, true);
            echo "
                </div>
                ";
            // line 22
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["premierEnfant"], "getChildren", [])) > 0)) {
                // line 23
                echo "                    <ol>
                        ";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["premierEnfant"], "getChildren", []));
                foreach ($context['_seq'] as $context["_key"] => $context["deuxiemeEnfant"]) {
                    // line 25
                    echo "                            <li>
                                <div>
                                    ";
                    // line 27
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deuxiemeEnfant"], "libelle", []), "html", null, true);
                    echo "
                                </div>
                                ";
                    // line 29
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deuxiemeEnfant"], "getChildren", [])) > 0)) {
                        // line 30
                        echo "                                    <ol>
                                        ";
                        // line 31
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["deuxiemeEnfant"], "getChildren", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["troisiemeEnfant"]) {
                            // line 32
                            echo "                                        <li>
                                            <div>
                                                ";
                            // line 34
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["troisiemeEnfant"], "libelle", []), "html", null, true);
                            echo "
                                            </div>
                                            ";
                            // line 36
                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["troisiemeEnfant"], "getChildren", [])) > 0)) {
                                // line 37
                                echo "                                                <ol>
                                                    ";
                                // line 38
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["troisiemeEnfant"], "getChildren", []));
                                foreach ($context['_seq'] as $context["_key"] => $context["quatriemeEnfant"]) {
                                    // line 39
                                    echo "                                                    <li>
                                                        <div>
                                                            ";
                                    // line 41
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["troisiemeEnfant"], "libelle", []), "html", null, true);
                                    echo "
                                                        </div>
                                                    </li>
                                                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quatriemeEnfant'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 45
                                echo "                                                </ol>
                                            ";
                            }
                            // line 47
                            echo "                                        </li>
                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['troisiemeEnfant'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 49
                        echo "                                    </ol>
                                ";
                    }
                    // line 51
                    echo "                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deuxiemeEnfant'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "                    </ol>
                ";
            }
            // line 55
            echo "            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['premierEnfant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </ol>
    </li>
</ol>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/organigrame/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 57,  145 => 55,  141 => 53,  134 => 51,  130 => 49,  123 => 47,  119 => 45,  109 => 41,  105 => 39,  101 => 38,  98 => 37,  96 => 36,  91 => 34,  87 => 32,  83 => 31,  80 => 30,  78 => 29,  73 => 27,  69 => 25,  65 => 24,  62 => 23,  60 => 22,  55 => 20,  51 => 18,  47 => 17,  41 => 14,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<link href=\"{{ 'assets/css/organigrame.css'|theme }}\" rel=\"stylesheet\">

<style>
    .organizational-chart div{
            color: #fff;
    font-weight: bold;
    }
</style>

<ol class=\"organizational-chart\">
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
</ol>", "/Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/organigrame/default.htm", "");
    }
}
