<?php

/* /Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/examensall/default.htm */
class __TwigTemplate_b0f332761efb5571a5d81baa01002096f034b4843713880316e5d5247f8d38c3 extends Twig_Template
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
        echo "<div class=\"page-wrapper\">

    <header class=\"page-heading clearfix\">
        <h1 class=\"heading-title float-left\" style=\"margin-top: 12px; margin-bottom: 0px\">Examens et resultats</h1>
        <div class=\"breadcrumbs float-right\">
            <ul class=\"breadcrumbs-list\">
                <!-- <li class=\"breadcrumbs-label\">You are here:</li> -->
                <li><a href=\"";
        // line 8
        echo url("/");
        echo "\">Accueil</a><svg class=\"svg-inline--fa fa-angle-right fa-w-8\" aria-hidden=\"true\"
                        focusable=\"false\" data-prefix=\"fas\" data-icon=\"angle-right\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\"
                        viewBox=\"0 0 256 512\" data-fa-i2svg=\"\">
                        <path fill=\"currentColor\" d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"></path>
                    </svg><!-- <i class=\"fas fa-angle-right\"></i> -->
                </li>
                <li class=\"current\">Examens et resultats</li>
            </ul>
        </div>
    </header>

    <div class=\"page-content\">
        <div class=\"row page-row\">
            <div class=\"col-md-12\">
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["examensall"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["examen"]) {
            // line 23
            echo "                <div class=\"item carousel2-item active\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <h2 class=\"title\" style=\"margin-bottom: 0rem;\"><a href=\"";
            // line 26
            echo url("examens");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["examen"], "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 27
$context["examen"], "name", []), "html", null, true);
            // line 28
            echo "</a></h2>
                            <p style=\"margin-bottom: 0rem;\">
                                ";
            // line 30
            echo call_user_func_array($this->env->getFilter('truncate')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["examen"], "description", []), 400, false, " ..."]);
            echo "
                            </p>
                        </div>
                        <div class=\"col-lg-12\">
                            ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, $context["examen"], "sujets", [])) {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["examen"], "sujets", []), "getpath", []), "html", null, true);
                echo "\" target=\"_blank\">Sujets</a>/
                            ";
            }
            // line 36
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, $context["examen"], "corrections", [])) {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["examen"], "corrections", []), "getpath", []), "html", null, true);
                echo "\" target=\"_blank\">Corrections</a>/
                            ";
            }
            // line 39
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, $context["examen"], "resultats", [])) {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["examen"], "resultats", []), "getpath", []), "html", null, true);
                echo "\" target=\"_blank\">Resultats</a>
                            ";
            }
            // line 42
            echo "                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['examen'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
                <div class=\"pagination\">
                    ";
        // line 48
        echo ($context["examensall"] ?? null);
        echo "
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/examensall/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 48,  108 => 46,  99 => 42,  91 => 39,  83 => 36,  76 => 34,  69 => 30,  65 => 28,  63 => 27,  58 => 26,  53 => 23,  49 => 22,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"page-wrapper\">

    <header class=\"page-heading clearfix\">
        <h1 class=\"heading-title float-left\" style=\"margin-top: 12px; margin-bottom: 0px\">Examens et resultats</h1>
        <div class=\"breadcrumbs float-right\">
            <ul class=\"breadcrumbs-list\">
                <!-- <li class=\"breadcrumbs-label\">You are here:</li> -->
                <li><a href=\"{{ url('/') }}\">Accueil</a><svg class=\"svg-inline--fa fa-angle-right fa-w-8\" aria-hidden=\"true\"
                        focusable=\"false\" data-prefix=\"fas\" data-icon=\"angle-right\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\"
                        viewBox=\"0 0 256 512\" data-fa-i2svg=\"\">
                        <path fill=\"currentColor\" d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"></path>
                    </svg><!-- <i class=\"fas fa-angle-right\"></i> -->
                </li>
                <li class=\"current\">Examens et resultats</li>
            </ul>
        </div>
    </header>

    <div class=\"page-content\">
        <div class=\"row page-row\">
            <div class=\"col-md-12\">
                {% for examen in examensall %}
                <div class=\"item carousel2-item active\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <h2 class=\"title\" style=\"margin-bottom: 0rem;\"><a href=\"{{ url('examens')}}/{{ examen.id }}\">{{
                                    examen.name
                                    }}</a></h2>
                            <p style=\"margin-bottom: 0rem;\">
                                {{ examen.description|truncate(400, false, \" ...\") }}
                            </p>
                        </div>
                        <div class=\"col-lg-12\">
                            {% if(examen.sujets) %} <a href=\"{{ examen.sujets.getpath }}\" target=\"_blank\">Sujets</a>/
                            {% endif %}
                            {% if(examen.corrections) %} <a href=\"{{ examen.corrections.getpath }}\" target=\"_blank\">Corrections</a>/
                            {%
                            endif %}
                            {% if(examen.resultats) %} <a href=\"{{ examen.resultats.getpath }}\" target=\"_blank\">Resultats</a>
                            {% endif
                            %}
                        </div>
                    </div>
                </div>
                {% endfor %}

                <div class=\"pagination\">
                    {{ examensall|raw }}
                </div>
            </div>
        </div>
    </div>
</div>", "/Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/examensall/default.htm", "");
    }
}
