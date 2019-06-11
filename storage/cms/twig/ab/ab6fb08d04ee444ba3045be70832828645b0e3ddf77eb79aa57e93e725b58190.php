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
        echo "
<section class=\"news\">
    <div class='section-header clearfix'>
        <div class=\"col-md-12\">
            <div class=\"row\" style=\"padding-bottom: 5px;border-bottom: 2px #e2e2e2 solid;margin-bottom: 20px;\">
                <div class=\"col-lg-10\" style=\"padding-left: 0px;\">
                    <h1 class=\"section-title title col-md-12\" style=\"font-size: 1.2rem;padding-left: 0px;margin-bottom: 0px;\">Clubs d'activités</h1>
                </div>
            </div>
        </div>
    </div>
    <div class=\"section-content clearfix\" style='padding-left: 0px;'>
        <div id=\"news-carousel\" class=\"news-carousel carousel slide\">
            <div class=\"carousel-inner\">

                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clubsActivites"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["clubActivite"]) {
            // line 17
            echo "                <div class=\"item carousel-item active\">
                    <div class=\"row\" data-idclub=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clubActivite"], "id", []), "html", null, true);
            echo "\">
                        <div class=\"col-lg-3\">
                            <figure class='jss374' style='background-image: url(\"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clubActivite"], "logo", []), "getpath", []), "html", null, true);
            echo "\");'></figure>
                        </div>
                        <div class=\"col-lg-9\">
                            <h2 class=\"title\"><a href=\"";
            // line 23
            echo url("clubs-activites");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clubActivite"], "id", []), "html", null, true);
            echo "\" style=\"color: #6091ba;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clubActivite"], "name", []), "html", null, true);
            echo "</a></h2>
                            <p>
                                ";
            // line 25
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
        // line 32
        echo "
                ";
        // line 33
        echo ($context["clubsActivites"] ?? null);
        echo "

            </div>
        </div>

    </div>
</section>
";
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
        return array (  83 => 33,  80 => 32,  67 => 25,  58 => 23,  52 => 20,  47 => 18,  44 => 17,  40 => 16,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<section class=\"news\">
    <div class='section-header clearfix'>
        <div class=\"col-md-12\">
            <div class=\"row\" style=\"padding-bottom: 5px;border-bottom: 2px #e2e2e2 solid;margin-bottom: 20px;\">
                <div class=\"col-lg-10\" style=\"padding-left: 0px;\">
                    <h1 class=\"section-title title col-md-12\" style=\"font-size: 1.2rem;padding-left: 0px;margin-bottom: 0px;\">Clubs d'activités</h1>
                </div>
            </div>
        </div>
    </div>
    <div class=\"section-content clearfix\" style='padding-left: 0px;'>
        <div id=\"news-carousel\" class=\"news-carousel carousel slide\">
            <div class=\"carousel-inner\">

                {% for clubActivite in clubsActivites %}
                <div class=\"item carousel-item active\">
                    <div class=\"row\" data-idclub=\"{{ clubActivite.id }}\">
                        <div class=\"col-lg-3\">
                            <figure class='jss374' style='background-image: url(\"{{ clubActivite.logo.getpath }}\");'></figure>
                        </div>
                        <div class=\"col-lg-9\">
                            <h2 class=\"title\"><a href=\"{{ url('clubs-activites') }}/{{ clubActivite.id }}\" style=\"color: #6091ba;\">{{ clubActivite.name }}</a></h2>
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
", "/Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/clubsactivitesall/default.htm", "");
    }
}
