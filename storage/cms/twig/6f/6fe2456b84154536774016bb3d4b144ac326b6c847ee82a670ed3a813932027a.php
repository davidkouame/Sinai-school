<?php

/* /Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/actualites/default.htm */
class __TwigTemplate_45a8f65c8f80eb92298f7a1c8999b5a908c33d69b05d7197894d72f6ea061488 extends Twig_Template
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
        echo "<div class=\"col-lg-9 col-12\">
    <section class=\"news\">
        <div class='section-header clearfix'>
            <div class=\"col-md-12\">
                <div class=\"row\" style=\"padding-bottom: 5px;border-bottom: 2px #e2e2e2 solid;margin-bottom: 20px;\">
                    <div class=\"col-lg-9\" style=\"padding-left: 0px;\">
                        <h1 class=\"section-title title col-md-2\" style=\"font-size: 1.2rem;padding-left: 0px;margin-bottom: 0px;\">Actualités</h1>
                    </div>
                    <div class=\"col-lg-3\" style=\"padding-right: 0px;\">
                        <a class=\"read-more float-right\" href=\"";
        // line 10
        echo url("actualites");
        echo "\">Voir toutes les actualités<i class=\"fa fa-chevron-right\"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"section-content clearfix\" style=\"padding-left: 0px;padding-bottom: 0px;\">
            <div id=\"news-carousel\" class=\"news-carousel carousel slide\">
                <div class=\"carousel-inner\">

                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actualites"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["actualite"]) {
            // line 20
            echo "                        <div class=\"item carousel-item active\">
                            <div class=\"row\" data-id=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "id", []), "html", null, true);
            echo "\">
                                <div class=\"col-lg-3\">
                                    <figure class='jss374' style='background-image: url(\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["actualite"], "cover", []), "getpath", []), "html", null, true);
            echo "\");'></figure>
                                </div>
                                <div class=\"col-lg-9\">
                                    <h2 class=\"title\"><a href=\"";
            // line 26
            echo url("/actualites");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "id", []), "html", null, true);
            echo "\" style=\"color: #6091ba;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "title", []), "html", null, true);
            echo "</a></h2>
                                    <p>
                                        ";
            // line 28
            echo call_user_func_array($this->env->getFilter('truncate')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["actualite"], "content", []), 235, false, " ..."]);
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
        // line 35
        echo "
                </div>
            </div>

            <!--<div class=\"pagination\" style=\"margin-bottom: 0px;margin-top: 0px;\">
                ";
        // line 40
        echo ($context["actualites"] ?? null);
        echo "
            </div>-->

        </div>
    </section>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/actualites/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 40,  86 => 35,  73 => 28,  64 => 26,  58 => 23,  53 => 21,  50 => 20,  46 => 19,  34 => 10,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-lg-9 col-12\">
    <section class=\"news\">
        <div class='section-header clearfix'>
            <div class=\"col-md-12\">
                <div class=\"row\" style=\"padding-bottom: 5px;border-bottom: 2px #e2e2e2 solid;margin-bottom: 20px;\">
                    <div class=\"col-lg-9\" style=\"padding-left: 0px;\">
                        <h1 class=\"section-title title col-md-2\" style=\"font-size: 1.2rem;padding-left: 0px;margin-bottom: 0px;\">Actualités</h1>
                    </div>
                    <div class=\"col-lg-3\" style=\"padding-right: 0px;\">
                        <a class=\"read-more float-right\" href=\"{{ url('actualites') }}\">Voir toutes les actualités<i class=\"fa fa-chevron-right\"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"section-content clearfix\" style=\"padding-left: 0px;padding-bottom: 0px;\">
            <div id=\"news-carousel\" class=\"news-carousel carousel slide\">
                <div class=\"carousel-inner\">

                    {% for actualite in actualites %}
                        <div class=\"item carousel-item active\">
                            <div class=\"row\" data-id=\"{{ actualite.id }}\">
                                <div class=\"col-lg-3\">
                                    <figure class='jss374' style='background-image: url(\"{{ actualite.cover.getpath }}\");'></figure>
                                </div>
                                <div class=\"col-lg-9\">
                                    <h2 class=\"title\"><a href=\"{{ url('/actualites') }}/{{ actualite.id }}\" style=\"color: #6091ba;\">{{ actualite.title }}</a></h2>
                                    <p>
                                        {{ actualite.content|truncate(235, false, \" ...\") }}
                                    </p>
                                </div>
                            </div>
                        </div>

                    {% endfor %}

                </div>
            </div>

            <!--<div class=\"pagination\" style=\"margin-bottom: 0px;margin-top: 0px;\">
                {{ actualites|raw}}
            </div>-->

        </div>
    </section>
</div>", "/Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/actualites/default.htm", "");
    }
}
