<?php

/* /opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/school/components/organigrame/default.htm */
class __TwigTemplate_14b45ff4ac48fd7f1f1499f6242f489bd2c459c07665aa8ecb28f96d04ceca73 extends Twig_Template
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
        echo "<ol class=\"organizational-chart\">
    <li>
        <div>
            ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["premierParent"] ?? null), "libelle", []), "html", null, true);
        echo "
        </div>
        <ol>
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["premierParent"] ?? null), "getChildren", []));
        foreach ($context['_seq'] as $context["_key"] => $context["premierEnfant"]) {
            // line 8
            echo "            <li>
                <div>
                    ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["premierEnfant"], "libelle", []), "html", null, true);
            echo "
                </div>
                ";
            // line 12
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["premierEnfant"], "getChildren", [])) > 0)) {
                // line 13
                echo "                    <ol>
                        ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["premierEnfant"], "getChildren", []));
                foreach ($context['_seq'] as $context["_key"] => $context["deuxiemeEnfant"]) {
                    // line 15
                    echo "                            <li>
                                <div>
                                    ";
                    // line 17
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deuxiemeEnfant"], "libelle", []), "html", null, true);
                    echo "
                                </div>
                                ";
                    // line 19
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deuxiemeEnfant"], "getChildren", [])) > 0)) {
                        // line 20
                        echo "                                    <ol>
                                        ";
                        // line 21
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["deuxiemeEnfant"], "getChildren", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["troisiemeEnfant"]) {
                            // line 22
                            echo "                                        <li>
                                            <div>
                                                ";
                            // line 24
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["troisiemeEnfant"], "libelle", []), "html", null, true);
                            echo "
                                            </div>
                                            ";
                            // line 26
                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["troisiemeEnfant"], "getChildren", [])) > 0)) {
                                // line 27
                                echo "                                                <ol>
                                                    ";
                                // line 28
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["troisiemeEnfant"], "getChildren", []));
                                foreach ($context['_seq'] as $context["_key"] => $context["quatriemeEnfant"]) {
                                    // line 29
                                    echo "                                                    <li>
                                                        <div>
                                                            ";
                                    // line 31
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["troisiemeEnfant"], "libelle", []), "html", null, true);
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
        return "/opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/school/components/organigrame/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 47,  132 => 45,  128 => 43,  121 => 41,  117 => 39,  110 => 37,  106 => 35,  96 => 31,  92 => 29,  88 => 28,  85 => 27,  83 => 26,  78 => 24,  74 => 22,  70 => 21,  67 => 20,  65 => 19,  60 => 17,  56 => 15,  52 => 14,  49 => 13,  47 => 12,  42 => 10,  38 => 8,  34 => 7,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ol class=\"organizational-chart\">
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
</ol>", "/opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/school/components/organigrame/default.htm", "");
    }
}
