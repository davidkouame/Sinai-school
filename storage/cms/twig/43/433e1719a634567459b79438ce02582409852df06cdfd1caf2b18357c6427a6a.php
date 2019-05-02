<?php

/* /opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/school/components/actualites/default.htm */
class __TwigTemplate_af176312418702e71ef12323e0c0ee5bd9afcddd120b63847cbda7cf973a6835 extends Twig_Template
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
                    <div class=\"col-lg-10\" style=\"padding-left: 0px;\">
                        <h1 class=\"section-title title col-md-2\" style=\"font-size: 1.2rem;padding-left: 0px;margin-bottom: 0px;\">Actualités</h1>
                    </div>
                    <div class=\"col-md-2\" style=\"text-align: right;padding-right: 0px;\">
                        <ul class=\"list-inline\" style=\"padding-top: 4px;margin-bottom: 0px;\">
                            <li>
                                <a href=\"";
        // line 12
        echo url("/actualites");
        echo "\">Voir <svg class=\"svg-inline--fa fa-plus fa-w-14\"
                                        aria-hidden=\"true\" data-prefix=\"fa\" data-icon=\"plus\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\"
                                        viewBox=\"0 0 448 512\" data-fa-i2svg=\"\">
                                        <path fill=\"currentColor\" d=\"M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z\"></path>
                                    </svg><!-- <i class=\"fa fa-plus\"></i> --></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"section-content clearfix\" style='padding-left: 0px;'>
            <div id=\"news-carousel\" class=\"news-carousel carousel slide\">
                <div class=\"carousel-inner\">

                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actualites"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["actualite"]) {
            // line 28
            echo "                        <div class=\"item carousel-item active\">
                            <div class=\"row\">
                                <div class=\"col-lg-3\">
                                    <figure class='jss374' style='background-image: url(\"";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["actualite"], "cover", []), "getpath", []), "html", null, true);
            echo "\");'></figure>
                                </div>
                                <div class=\"col-lg-9\">
                                    <h2 class=\"title\"><a href=\"news-single.html\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "title", []), "html", null, true);
            echo "</a></h2>
                                    <p>
                                        ";
            // line 36
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
        // line 43
        echo "
                </div>
            </div>

        </div>
    </section>
</div>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/school/components/actualites/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 43,  74 => 36,  69 => 34,  63 => 31,  58 => 28,  54 => 27,  36 => 12,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-lg-9 col-12\">
    <section class=\"news\">
        <div class='section-header clearfix'>
            <div class=\"col-md-12\">
                <div class=\"row\" style=\"padding-bottom: 5px;border-bottom: 2px #e2e2e2 solid;margin-bottom: 20px;\">
                    <div class=\"col-lg-10\" style=\"padding-left: 0px;\">
                        <h1 class=\"section-title title col-md-2\" style=\"font-size: 1.2rem;padding-left: 0px;margin-bottom: 0px;\">Actualités</h1>
                    </div>
                    <div class=\"col-md-2\" style=\"text-align: right;padding-right: 0px;\">
                        <ul class=\"list-inline\" style=\"padding-top: 4px;margin-bottom: 0px;\">
                            <li>
                                <a href=\"{{ url('/actualites') }}\">Voir <svg class=\"svg-inline--fa fa-plus fa-w-14\"
                                        aria-hidden=\"true\" data-prefix=\"fa\" data-icon=\"plus\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\"
                                        viewBox=\"0 0 448 512\" data-fa-i2svg=\"\">
                                        <path fill=\"currentColor\" d=\"M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z\"></path>
                                    </svg><!-- <i class=\"fa fa-plus\"></i> --></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"section-content clearfix\" style='padding-left: 0px;'>
            <div id=\"news-carousel\" class=\"news-carousel carousel slide\">
                <div class=\"carousel-inner\">

                    {% for actualite in actualites %}
                        <div class=\"item carousel-item active\">
                            <div class=\"row\">
                                <div class=\"col-lg-3\">
                                    <figure class='jss374' style='background-image: url(\"{{ actualite.cover.getpath }}\");'></figure>
                                </div>
                                <div class=\"col-lg-9\">
                                    <h2 class=\"title\"><a href=\"news-single.html\">{{ actualite.title }}</a></h2>
                                    <p>
                                        {{ actualite.content|truncate(235, false, \" ...\") }}
                                    </p>
                                </div>
                            </div>
                        </div>

                    {% endfor %}

                </div>
            </div>

        </div>
    </section>
</div>", "/opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/school/components/actualites/default.htm", "");
    }
}
