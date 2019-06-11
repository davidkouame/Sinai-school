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
        echo "<div class=\"row\">
    <div class=\"col-lg-12 col-12\">
        <section class=\"news\">
            <div class='section-header clearfix'>
                <div class=\"col-md-12\">
                    <div class=\"row\" style=\"padding-bottom: 5px;border-bottom: 2px #e2e2e2 solid;margin-bottom: 20px;\">
                        <div class=\"col-lg-10\" style=\"padding-left: 0px;\">
                            <h3 class=\"section-title title col-md-2\" style=\"padding-left: 0px;margin-bottom: 0px;\">Actualités</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"section-content clearfix\" style='padding-left: 0px;'>
                <div id=\"news-carousel\" class=\"news-carousel carousel slide\">
                    <div class=\"carousel-inner\">

                        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actualitesall"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["actualite"]) {
            // line 18
            echo "                        <div class=\"item carousel-item active\">
                            <div class=\"row\" data-id=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "id", []), "html", null, true);
            echo "\">
                                <div class=\"col-lg-3\">
                                    <figure class='jss374' style='background-image: url(\"";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["actualite"], "cover", []), "getpath", []), "html", null, true);
            echo "\");'></figure>
                                </div>
                                <div class=\"col-lg-9\">
                                    <h2 class=\"title\"><a href=\"";
            // line 24
            echo url("actualites");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "id", []), "html", null, true);
            echo "\" style=\"color: #6091ba;\">";
            echo call_user_func_array($this->env->getFilter('truncate')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["actualite"], "title", []), 142, false, " ..."]);
            echo "</a></h2>
                                    <p>
                                        ";
            // line 26
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
        // line 33
        echo "
                    </div>

                    ";
        // line 36
        echo ($context["actualitesall"] ?? null);
        echo "
                </div>

            </div>
        </section>
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
        return array (  86 => 36,  81 => 33,  68 => 26,  59 => 24,  53 => 21,  48 => 19,  45 => 18,  41 => 17,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
    <div class=\"col-lg-12 col-12\">
        <section class=\"news\">
            <div class='section-header clearfix'>
                <div class=\"col-md-12\">
                    <div class=\"row\" style=\"padding-bottom: 5px;border-bottom: 2px #e2e2e2 solid;margin-bottom: 20px;\">
                        <div class=\"col-lg-10\" style=\"padding-left: 0px;\">
                            <h3 class=\"section-title title col-md-2\" style=\"padding-left: 0px;margin-bottom: 0px;\">Actualités</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"section-content clearfix\" style='padding-left: 0px;'>
                <div id=\"news-carousel\" class=\"news-carousel carousel slide\">
                    <div class=\"carousel-inner\">

                        {% for actualite in actualitesall %}
                        <div class=\"item carousel-item active\">
                            <div class=\"row\" data-id=\"{{ actualite.id }}\">
                                <div class=\"col-lg-3\">
                                    <figure class='jss374' style='background-image: url(\"{{ actualite.cover.getpath }}\");'></figure>
                                </div>
                                <div class=\"col-lg-9\">
                                    <h2 class=\"title\"><a href=\"{{ url('actualites')}}/{{ actualite.id }}\" style=\"color: #6091ba;\">{{ actualite.title|truncate(142, false, \" ...\") }}</a></h2>
                                    <p>
                                        {{ actualite.content|truncate(235, false, \" ...\") }}
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
</div>", "/Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/actualitesall/default.htm", "");
    }
}
