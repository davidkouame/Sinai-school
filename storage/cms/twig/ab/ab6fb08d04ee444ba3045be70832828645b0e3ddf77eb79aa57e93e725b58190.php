<?php

/* /Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/clubsactivitesall/default.htm */
class __TwigTemplate_3f7dc3473898b48352a8b67940dc4d030c8f99894a9960379e7a8266566944d0 extends Twig_Template
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
        <h1 class=\"heading-title float-left\" style=\"margin-top: 12px; margin-bottom: 0px\">Clubs d'activités</h1>
        <div class=\"breadcrumbs float-right\">
            <ul class=\"breadcrumbs-list\">
                <li>
                    <a href=\"";
        // line 8
        echo url("/");
        echo "\">Accueil</a><svg class=\"svg-inline--fa fa-angle-right fa-w-8\" aria-hidden=\"true\"
                        focusable=\"false\" data-prefix=\"fas\" data-icon=\"angle-right\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\"
                        viewBox=\"0 0 256 512\" data-fa-i2svg=\"\">
                        <path fill=\"currentColor\" d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"></path>
                    </svg>
                </li>
                <li class=\"current\">Clubs d'activités</li>
            </ul>
        </div>
    </header>

    <div class=\"page-content\">
        <div class=\"row page-row\">
            <div class=\"col-md-12\">
                <section class=\"news\">
                    <div class=\"section-content clearfix\" style='padding-left: 0px;'>
                        <div id=\"news-carousel\" class=\"news-carousel carousel slide\">
                            <div class=\"carousel-inner\">

                                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clubsActivites"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["clubActivite"]) {
            // line 28
            echo "                                <div class=\"item carousel-item active\">
                                    <div class=\"row clubactivite\" data-idclub=\"";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clubActivite"], "id", []), "html", null, true);
            echo "\">
                                        <div class=\"col-lg-3\">
                                            <figure class='jss374' style='background-image: url(\"";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clubActivite"], "logo", []), "getpath", []), "html", null, true);
            echo "\");'></figure>
                                        </div>
                                        <div class=\"col-lg-9\">
                                            <h2 class=\"title\"><a href=\"";
            // line 34
            echo url("clubs-activites");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clubActivite"], "id", []), "html", null, true);
            echo "\"
                                                    style=\"color: #6091ba;\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 36
$context["clubActivite"], "name", []), "html", null, true);
            echo "</a></h2>
                                            <p>
                                                ";
            // line 38
            echo call_user_func_array($this->env->getFilter('truncate')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["clubActivite"], "description", []), 235, false, " ..."]);
            echo "
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clubActivite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
                                ";
        // line 45
        echo ($context["clubsActivites"] ?? null);
        echo "
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/clubsactivitesall/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 45,  96 => 44,  84 => 38,  79 => 36,  78 => 35,  72 => 34,  66 => 31,  61 => 29,  58 => 28,  54 => 27,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"page-wrapper\">

    <header class=\"page-heading clearfix\">
        <h1 class=\"heading-title float-left\" style=\"margin-top: 12px; margin-bottom: 0px\">Clubs d'activités</h1>
        <div class=\"breadcrumbs float-right\">
            <ul class=\"breadcrumbs-list\">
                <li>
                    <a href=\"{{ url('/') }}\">Accueil</a><svg class=\"svg-inline--fa fa-angle-right fa-w-8\" aria-hidden=\"true\"
                        focusable=\"false\" data-prefix=\"fas\" data-icon=\"angle-right\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\"
                        viewBox=\"0 0 256 512\" data-fa-i2svg=\"\">
                        <path fill=\"currentColor\" d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"></path>
                    </svg>
                </li>
                <li class=\"current\">Clubs d'activités</li>
            </ul>
        </div>
    </header>

    <div class=\"page-content\">
        <div class=\"row page-row\">
            <div class=\"col-md-12\">
                <section class=\"news\">
                    <div class=\"section-content clearfix\" style='padding-left: 0px;'>
                        <div id=\"news-carousel\" class=\"news-carousel carousel slide\">
                            <div class=\"carousel-inner\">

                                {% for clubActivite in clubsActivites %}
                                <div class=\"item carousel-item active\">
                                    <div class=\"row clubactivite\" data-idclub=\"{{ clubActivite.id }}\">
                                        <div class=\"col-lg-3\">
                                            <figure class='jss374' style='background-image: url(\"{{ clubActivite.logo.getpath }}\");'></figure>
                                        </div>
                                        <div class=\"col-lg-9\">
                                            <h2 class=\"title\"><a href=\"{{ url('clubs-activites') }}/{{ clubActivite.id }}\"
                                                    style=\"color: #6091ba;\">{{
                                                    clubActivite.name }}</a></h2>
                                            <p>
                                                {{ clubActivite.description|truncate(235, false, \" ...\") }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {% endfor %}

                                {{ clubsActivites|raw }}
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>", "/Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/clubsactivitesall/default.htm", "");
    }
}
