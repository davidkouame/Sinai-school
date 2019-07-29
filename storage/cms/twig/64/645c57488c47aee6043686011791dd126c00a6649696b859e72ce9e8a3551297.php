<?php

/* /Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/galeries/default.htm */
class __TwigTemplate_d7f9818f8ebe190bd2958efcb00e80de8b4489c8359eda8ad40e1cf6384c2120 extends Twig_Template
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
        <h1 class=\"heading-title float-left\" style=\"margin-top: 12px; margin-bottom: 0px\">Galleries</h1>
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
                <li class=\"current\">Gallerie</li>
            </ul>
        </div>
    </header>
    
    <div class=\"page-content\">
        <div class=\"row page-row\">
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["galeries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["galerie"]) {
            // line 22
            echo "            <div class=\"col-md-4 col-12 text-center\">
                <div class=\"album-cover\">
                    <a href=\"";
            // line 24
            echo url("galeries");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["galerie"], "slug", []), "html", null, true);
            echo "\">
                        <img class=\"img-fluid\" src=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, $context["galerie"], "images", [])) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[0] ?? null) : null), "getpath", []), "html", null, true);
            echo "\" style=\"height: 141px;
                        width: 253px;\"
                            alt=\"\"></a>
                    <div class=\"desc\" style=\"height: 131px;\">
                        <h4><small><a href=\"#\">";
            // line 29
            echo call_user_func_array($this->env->getFilter('truncate')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["galerie"], "name", []), 40, false, ""]);
            echo "</a></small></h4>
                        <p style=\"
                        margin-bottom: 0px;
                    \">";
            // line 32
            echo call_user_func_array($this->env->getFilter('truncate')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["galerie"], "description", []), 90, false, ""]);
            echo "</p>
                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['galerie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </div>
        ";
        // line 38
        echo ($context["galeries"] ?? null);
        echo "
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/galeries/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 38,  86 => 37,  75 => 32,  69 => 29,  62 => 25,  56 => 24,  52 => 22,  48 => 21,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"page-wrapper\">

    <header class=\"page-heading clearfix\">
        <h1 class=\"heading-title float-left\" style=\"margin-top: 12px; margin-bottom: 0px\">Galleries</h1>
        <div class=\"breadcrumbs float-right\">
            <ul class=\"breadcrumbs-list\">
                <!-- <li class=\"breadcrumbs-label\">You are here:</li> -->
                <li><a href=\"{{ url('/') }}\">Accueil</a><svg class=\"svg-inline--fa fa-angle-right fa-w-8\" aria-hidden=\"true\"
                        focusable=\"false\" data-prefix=\"fas\" data-icon=\"angle-right\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\"
                        viewBox=\"0 0 256 512\" data-fa-i2svg=\"\">
                        <path fill=\"currentColor\" d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"></path>
                    </svg><!-- <i class=\"fas fa-angle-right\"></i> -->
                </li>
                <li class=\"current\">Gallerie</li>
            </ul>
        </div>
    </header>
    
    <div class=\"page-content\">
        <div class=\"row page-row\">
            {% for galerie in galeries %}
            <div class=\"col-md-4 col-12 text-center\">
                <div class=\"album-cover\">
                    <a href=\"{{ url('galeries')}}/{{ galerie.slug }}\">
                        <img class=\"img-fluid\" src=\"{{ galerie.images[0].getpath }}\" style=\"height: 141px;
                        width: 253px;\"
                            alt=\"\"></a>
                    <div class=\"desc\" style=\"height: 131px;\">
                        <h4><small><a href=\"#\">{{ galerie.name|truncate(40, false, '') }}</a></small></h4>
                        <p style=\"
                        margin-bottom: 0px;
                    \">{{ galerie.description|raw|truncate(90, false, '') }}</p>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
        {{ galeries|raw }}
    </div>
</div>", "/Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/galeries/default.htm", "");
    }
}
