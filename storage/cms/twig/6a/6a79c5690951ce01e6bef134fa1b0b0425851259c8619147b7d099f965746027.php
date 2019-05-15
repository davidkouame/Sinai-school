<?php

/* /opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/school/components/sujetsall/default.htm */
class __TwigTemplate_b94e7d4f4d78061312dfcc7a270447834f99e35e24c2601992a465de740721a7 extends Twig_Template
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
                    <h1 class=\"section-title title col-md-2\" style=\"font-size: 1.2rem;padding-left: 0px;margin-bottom: 0px;\">Sujets</h1>
                </div>
            </div>
        </div>
    </div>
    <div class=\"section-content clearfix\" style='padding-left: 0px;'>
        <div id=\"news-carousel\" class=\"news-carousel carousel slide\">
            <div class=\"carousel-inner\">

                <div class=\"row\">
                    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sujets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sujet"]) {
            // line 18
            echo "                    <div class=\"col-lg-6\" style=\"margin-bottom: 20px;\">
                        <div class=\"item carousel-item active\">
                            <div class=\"row\">
                                <div class=\"col-lg-4\">
                                    <figure class='jss374' style='background-image: url(\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sujet"], "sujet", []), "getpath", []), "html", null, true);
            echo "\");'></figure>
                                </div>
                                <div class=\"col-lg-8\">
                                    <h2 class=\"title\"><a href=\"";
            // line 25
            echo url("sujet");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sujet"], "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sujet"], "name", []), "html", null, true);
            echo "</a></h2>
<!--                                    <p>
                                        ";
            // line 27
            echo call_user_func_array($this->env->getFilter('truncate')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["sujet"], "description", []), 235, false, " ..."]);
            echo "
                                    </p>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sujet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                </div>
            </div>
        </div>

    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/school/components/sujetsall/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 34,  66 => 27,  57 => 25,  51 => 22,  45 => 18,  41 => 17,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<section class=\"news\">
    <div class='section-header clearfix'>
        <div class=\"col-md-12\">
            <div class=\"row\" style=\"padding-bottom: 5px;border-bottom: 2px #e2e2e2 solid;margin-bottom: 20px;\">
                <div class=\"col-lg-10\" style=\"padding-left: 0px;\">
                    <h1 class=\"section-title title col-md-2\" style=\"font-size: 1.2rem;padding-left: 0px;margin-bottom: 0px;\">Sujets</h1>
                </div>
            </div>
        </div>
    </div>
    <div class=\"section-content clearfix\" style='padding-left: 0px;'>
        <div id=\"news-carousel\" class=\"news-carousel carousel slide\">
            <div class=\"carousel-inner\">

                <div class=\"row\">
                    {% for sujet in sujets %}
                    <div class=\"col-lg-6\" style=\"margin-bottom: 20px;\">
                        <div class=\"item carousel-item active\">
                            <div class=\"row\">
                                <div class=\"col-lg-4\">
                                    <figure class='jss374' style='background-image: url(\"{{ sujet.sujet.getpath }}\");'></figure>
                                </div>
                                <div class=\"col-lg-8\">
                                    <h2 class=\"title\"><a href=\"{{ url('sujet') }}/{{ sujet.id }}\">{{ sujet.name }}</a></h2>
<!--                                    <p>
                                        {{ sujet.description|truncate(235, false, \" ...\") }}
                                    </p>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    {% endfor %}
                </div>
            </div>
        </div>

    </div>
</section>", "/opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/school/components/sujetsall/default.htm", "");
    }
}
