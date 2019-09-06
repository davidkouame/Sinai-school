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
        echo "<link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/organigrame.css");
        echo "\" rel=\"stylesheet\">

<style>
    .organizational-chart div {
        color: #fff;
        font-weight: bold;
    }
</style>



<div class=\"page-wrapper\">

    <header class=\"page-heading clearfix\">
        <h1 class=\"heading-title float-left\" style=\"margin-top: 12px; margin-bottom: 0px\">Organigrame</h1>
        <div class=\"breadcrumbs float-right\">
            <ul class=\"breadcrumbs-list\">
                <!-- <li class=\"breadcrumbs-label\">You are here:</li> -->
                <li><a href=\"";
        // line 19
        echo url("/");
        echo "\">Accueil</a><svg class=\"svg-inline--fa fa-angle-right fa-w-8\" aria-hidden=\"true\"
                        focusable=\"false\" data-prefix=\"fas\" data-icon=\"angle-right\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\"
                        viewBox=\"0 0 256 512\" data-fa-i2svg=\"\">
                        <path fill=\"currentColor\" d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"></path>
                    </svg><!-- <i class=\"fas fa-angle-right\"></i> -->
                </li>
                <li class=\"current\">Organigrame</li>
            </ul>
        </div>
    </header>

    <div class=\"page-content\">
        <div class=\"row page-row\">
            <div class=\"col-md-12\">
                <ol class=\"organizational-chart\">
                    <li>
                        <div>
                            ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["premierParent"] ?? null), "libelle", []), "html", null, true);
        echo "
                        </div>
                        <ol>
                            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["premierParent"] ?? null), "getChildren", []));
        foreach ($context['_seq'] as $context["_key"] => $context["premierEnfant"]) {
            // line 40
            echo "                            <li>
                                <div>
                                    ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["premierEnfant"], "libelle", []), "html", null, true);
            echo "
                                </div>
                                ";
            // line 44
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["premierEnfant"], "getChildren", [])) > 0)) {
                // line 45
                echo "                                <ol>
                                    ";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["premierEnfant"], "getChildren", []));
                foreach ($context['_seq'] as $context["_key"] => $context["deuxiemeEnfant"]) {
                    // line 47
                    echo "                                    <li>
                                        <div>
                                            ";
                    // line 49
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deuxiemeEnfant"], "libelle", []), "html", null, true);
                    echo "
                                        </div>
                                        ";
                    // line 51
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deuxiemeEnfant"], "getChildren", [])) > 0)) {
                        // line 52
                        echo "                                        <ol>
                                            ";
                        // line 53
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["deuxiemeEnfant"], "getChildren", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["troisiemeEnfant"]) {
                            // line 54
                            echo "                                            <li>
                                                <div>
                                                    ";
                            // line 56
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["troisiemeEnfant"], "libelle", []), "html", null, true);
                            echo "
                                                </div>
                                                ";
                            // line 58
                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["troisiemeEnfant"], "getChildren", [])) > 0)) {
                                // line 59
                                echo "                                                <ol>
                                                    ";
                                // line 60
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["troisiemeEnfant"], "getChildren", []));
                                foreach ($context['_seq'] as $context["_key"] => $context["quatriemeEnfant"]) {
                                    // line 61
                                    echo "                                                    <li>
                                                        <div>
                                                            ";
                                    // line 63
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["troisiemeEnfant"], "libelle", []), "html", null, true);
                                    echo "
                                                        </div>
                                                    </li>
                                                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quatriemeEnfant'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 67
                                echo "                                                </ol>
                                                ";
                            }
                            // line 69
                            echo "                                            </li>
                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['troisiemeEnfant'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 71
                        echo "                                        </ol>
                                        ";
                    }
                    // line 73
                    echo "                                    </li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deuxiemeEnfant'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "                                </ol>
                                ";
            }
            // line 77
            echo "                            </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['premierEnfant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                        </ol>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>";
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
        return array (  176 => 79,  169 => 77,  165 => 75,  158 => 73,  154 => 71,  147 => 69,  143 => 67,  133 => 63,  129 => 61,  125 => 60,  122 => 59,  120 => 58,  115 => 56,  111 => 54,  107 => 53,  104 => 52,  102 => 51,  97 => 49,  93 => 47,  89 => 46,  86 => 45,  84 => 44,  79 => 42,  75 => 40,  71 => 39,  65 => 36,  45 => 19,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<link href=\"{{ 'assets/css/organigrame.css'|theme }}\" rel=\"stylesheet\">

<style>
    .organizational-chart div {
        color: #fff;
        font-weight: bold;
    }
</style>



<div class=\"page-wrapper\">

    <header class=\"page-heading clearfix\">
        <h1 class=\"heading-title float-left\" style=\"margin-top: 12px; margin-bottom: 0px\">Organigrame</h1>
        <div class=\"breadcrumbs float-right\">
            <ul class=\"breadcrumbs-list\">
                <!-- <li class=\"breadcrumbs-label\">You are here:</li> -->
                <li><a href=\"{{ url('/') }}\">Accueil</a><svg class=\"svg-inline--fa fa-angle-right fa-w-8\" aria-hidden=\"true\"
                        focusable=\"false\" data-prefix=\"fas\" data-icon=\"angle-right\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\"
                        viewBox=\"0 0 256 512\" data-fa-i2svg=\"\">
                        <path fill=\"currentColor\" d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"></path>
                    </svg><!-- <i class=\"fas fa-angle-right\"></i> -->
                </li>
                <li class=\"current\">Organigrame</li>
            </ul>
        </div>
    </header>

    <div class=\"page-content\">
        <div class=\"row page-row\">
            <div class=\"col-md-12\">
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
                </ol>
            </div>
        </div>
    </div>
</div>", "/Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/organigrame/default.htm", "");
    }
}
