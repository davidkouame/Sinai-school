<?php

/* /Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/actualitesall/default.htm */
class __TwigTemplate_bd6c0770c03073c229244e185cce12a32100a5038030a5be58b17099d42e6469 extends Twig_Template
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
        <h1 class=\"heading-title float-left\" style=\"margin-top: 12px; margin-bottom: 0px\">Actualités</h1>
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
                <li class=\"current\">Actualités</li>
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
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actualitesall"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["actualite"]) {
            // line 27
            echo "                                <div class=\"item carousel-item active\">
                                    <div class=\"row actualite\" data-id=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "id", []), "html", null, true);
            echo "\">
                                        <div class=\"col-lg-3\">
                                            <figure class='jss374' style='background-image: url(\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["actualite"], "cover", []), "getpath", []), "html", null, true);
            echo "\");'></figure>
                                        </div>
                                        <div class=\"col-lg-9\">
                                            <h2 class=\"title\" style=\"margin-bottom: 5px;\"><a href=\"";
            // line 33
            echo url("actualites");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "id", []), "html", null, true);
            echo "\" style=\"color: #6091ba;\">";
            echo call_user_func_array($this->env->getFilter('truncate')->getCallable(), [twig_get_attribute($this->env, $this->source,             // line 34
$context["actualite"], "title", []), 144, false, " ..."]);
            echo "</a></h2>
                                            <p>
                                                ";
            // line 36
            echo call_user_func_array($this->env->getFilter('truncate')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["actualite"], "content", []), 290, false, " ..."]);
            echo "
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                            </div>
                            ";
        // line 43
        echo ($context["actualitesall"] ?? null);
        echo "
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
        return "/Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/actualitesall/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 43,  93 => 42,  81 => 36,  76 => 34,  71 => 33,  65 => 30,  60 => 28,  57 => 27,  53 => 26,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"page-wrapper\">

    <header class=\"page-heading clearfix\">
        <h1 class=\"heading-title float-left\" style=\"margin-top: 12px; margin-bottom: 0px\">Actualités</h1>
        <div class=\"breadcrumbs float-right\">
            <ul class=\"breadcrumbs-list\">
                <li>
                    <a href=\"{{ url('/') }}\">Accueil</a><svg class=\"svg-inline--fa fa-angle-right fa-w-8\" aria-hidden=\"true\"
                        focusable=\"false\" data-prefix=\"fas\" data-icon=\"angle-right\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\"
                        viewBox=\"0 0 256 512\" data-fa-i2svg=\"\">
                        <path fill=\"currentColor\" d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"></path>
                    </svg>
                </li>
                <li class=\"current\">Actualités</li>
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
                                {% for actualite in actualitesall %}
                                <div class=\"item carousel-item active\">
                                    <div class=\"row actualite\" data-id=\"{{ actualite.id }}\">
                                        <div class=\"col-lg-3\">
                                            <figure class='jss374' style='background-image: url(\"{{ actualite.cover.getpath }}\");'></figure>
                                        </div>
                                        <div class=\"col-lg-9\">
                                            <h2 class=\"title\" style=\"margin-bottom: 5px;\"><a href=\"{{ url('actualites')}}/{{ actualite.id }}\" style=\"color: #6091ba;\">{{
                                                    actualite.title|truncate(144, false, \" ...\") }}</a></h2>
                                            <p>
                                                {{ actualite.content|truncate(290, false, \" ...\") }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {% endfor %}
                            </div>
                            {{ actualitesall|raw }}
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>", "/Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/actualitesall/default.htm", "");
    }
}
