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
        echo "
<style>
    .album-cover {
    border: 1px solid #e8e8e8;
    margin-bottom: 30px;
}

.carousel-inner>.item>a>img, .carousel-inner>.item>img, .img-responsive, .thumbnail a>img, .thumbnail>img {
    display: block;
    max-width: 100%;
    height: auto;
}

.album-cover .desc {
    padding: 15px;
    position: relative;
}

.album-cover .desc:before {
    content: \"\";
    display: block;
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-bottom: 10px solid #fff;
    position: absolute;
    top: -10px;
}

:after, :before {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.page-wrapper .page-content h4 {
    font-size: 18px;
    font-weight: normal;
}

.h4 .small, .h4 small, .h5 .small, .h5 small, .h6 .small, .h6 small, h4 .small, h4 small, h5 .small, h5 small, h6 .small, h6 small {
    font-size: 75%;
}

.h1 .small, .h1 small, .h2 .small, .h2 small, .h3 .small, .h3 small, .h4 .small, .h4 small, .h5 .small, .h5 small, .h6 .small, .h6 small, h1 .small, h1 small, h2 .small, h2 small, h3 .small, h3 small, h4 .small, h4 small, h5 .small, h5 small, h6 .small, h6 small {
    font-weight: 400;
    line-height: 1;
    color: #777;
}

p {
    color: #444;
    font-size: 13px;
}

.album-cover:hover {
    -webkit-box-shadow: 0px 0px 5px 0px #e8e8e8;
    -moz-box-shadow: 0px 0px 5px 0px #e8e8e8;
    box-shadow: 0px 0px 5px 0px #e8e8e8;
}

.album-cover {
    border: 1px solid #e8e8e8;
    margin-bottom: 30px;
}
</style>
<section class=\"news\">
    <div class='section-header clearfix'>
        <div class=\"col-md-12\">
            <div class=\"row\" style=\"padding-bottom: 5px;border-bottom: 2px #e2e2e2 solid;margin-bottom: 20px;\">
                <div class=\"col-lg-10\" style=\"padding-left: 0px;\">
                    <h1 class=\"section-title title col-md-2\" style=\"font-size: 1.2rem;padding-left: 0px;margin-bottom: 0px;\">Galeries</h1>
                </div>
            </div>
        </div>
    </div>
    <div class=\"section-content clearfix\" style='padding-left: 0px;'>
        <div id=\"news-carousel\" class=\"news-carousel carousel slide\">
            <div class=\"carousel-inner\">

                <div class=\"row page-row\">
                    ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["galeries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["galerie"]) {
            // line 82
            echo "                        <div class=\"col-md-3 col-sm-3 col-xs-12 text-center\">
                            <div class=\"album-cover\">
                                <a href=\"";
            // line 84
            echo url("galeries");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["galerie"], "slug", []), "html", null, true);
            echo "\"\"><img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, $context["galerie"], "images", [])) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[0] ?? null) : null), "getpath", []), "html", null, true);
            echo "\" alt=\"\"></a>
                                <div class=\"desc\">
                                    <h4><small><a href=\"#\">";
            // line 86
            echo call_user_func_array($this->env->getFilter('truncate')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["galerie"], "name", []), 40, "..."]);
            echo "</a></small></h4>
                                    <p>";
            // line 87
            echo twig_get_attribute($this->env, $this->source, $context["galerie"], "description", []);
            echo "</p>
                                </div>
                            </div>
                        </div>
                    <!--                    <div class=\"col-md-4 col-12 text-center\">
                                            <div class=\"album-cover\">
                                                <a href=\"";
            // line 93
            echo url("galeries");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["galerie"], "slug", []), "html", null, true);
            echo "\"><img class=\"img-fluid\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = twig_get_attribute($this->env, $this->source, $context["galerie"], "images", [])) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[0] ?? null) : null), "getpath", []), "html", null, true);
            echo "\" alt=\"\"></a>
                                                <div class=\"desc\">
                                                    <h4><small><a href=\"#\">";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["galerie"], "name", []), "html", null, true);
            echo "</a></small></h4>
                                                    <p>";
            // line 96
            echo twig_get_attribute($this->env, $this->source, $context["galerie"], "description", []);
            echo "</p>
                                                </div>
                                            </div>
                                        </div>-->
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['galerie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                </div>

            </div>

            ";
        // line 105
        echo ($context["galeries"] ?? null);
        echo "
        </div>

    </div>
</section>
";
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
        return array (  165 => 105,  159 => 101,  148 => 96,  144 => 95,  135 => 93,  126 => 87,  122 => 86,  113 => 84,  109 => 82,  105 => 81,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<style>
    .album-cover {
    border: 1px solid #e8e8e8;
    margin-bottom: 30px;
}

.carousel-inner>.item>a>img, .carousel-inner>.item>img, .img-responsive, .thumbnail a>img, .thumbnail>img {
    display: block;
    max-width: 100%;
    height: auto;
}

.album-cover .desc {
    padding: 15px;
    position: relative;
}

.album-cover .desc:before {
    content: \"\";
    display: block;
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-bottom: 10px solid #fff;
    position: absolute;
    top: -10px;
}

:after, :before {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.page-wrapper .page-content h4 {
    font-size: 18px;
    font-weight: normal;
}

.h4 .small, .h4 small, .h5 .small, .h5 small, .h6 .small, .h6 small, h4 .small, h4 small, h5 .small, h5 small, h6 .small, h6 small {
    font-size: 75%;
}

.h1 .small, .h1 small, .h2 .small, .h2 small, .h3 .small, .h3 small, .h4 .small, .h4 small, .h5 .small, .h5 small, .h6 .small, .h6 small, h1 .small, h1 small, h2 .small, h2 small, h3 .small, h3 small, h4 .small, h4 small, h5 .small, h5 small, h6 .small, h6 small {
    font-weight: 400;
    line-height: 1;
    color: #777;
}

p {
    color: #444;
    font-size: 13px;
}

.album-cover:hover {
    -webkit-box-shadow: 0px 0px 5px 0px #e8e8e8;
    -moz-box-shadow: 0px 0px 5px 0px #e8e8e8;
    box-shadow: 0px 0px 5px 0px #e8e8e8;
}

.album-cover {
    border: 1px solid #e8e8e8;
    margin-bottom: 30px;
}
</style>
<section class=\"news\">
    <div class='section-header clearfix'>
        <div class=\"col-md-12\">
            <div class=\"row\" style=\"padding-bottom: 5px;border-bottom: 2px #e2e2e2 solid;margin-bottom: 20px;\">
                <div class=\"col-lg-10\" style=\"padding-left: 0px;\">
                    <h1 class=\"section-title title col-md-2\" style=\"font-size: 1.2rem;padding-left: 0px;margin-bottom: 0px;\">Galeries</h1>
                </div>
            </div>
        </div>
    </div>
    <div class=\"section-content clearfix\" style='padding-left: 0px;'>
        <div id=\"news-carousel\" class=\"news-carousel carousel slide\">
            <div class=\"carousel-inner\">

                <div class=\"row page-row\">
                    {% for galerie in galeries %}
                        <div class=\"col-md-3 col-sm-3 col-xs-12 text-center\">
                            <div class=\"album-cover\">
                                <a href=\"{{ url('galeries')}}/{{ galerie.slug }}\"\"><img class=\"img-responsive\" src=\"{{ galerie.images[0].getpath }}\" alt=\"\"></a>
                                <div class=\"desc\">
                                    <h4><small><a href=\"#\">{{ galerie.name|truncate(40, '...') }}</a></small></h4>
                                    <p>{{ galerie.description|raw }}</p>
                                </div>
                            </div>
                        </div>
                    <!--                    <div class=\"col-md-4 col-12 text-center\">
                                            <div class=\"album-cover\">
                                                <a href=\"{{ url('galeries')}}/{{ galerie.slug }}\"><img class=\"img-fluid\" src=\"{{ galerie.images[0].getpath }}\" alt=\"\"></a>
                                                <div class=\"desc\">
                                                    <h4><small><a href=\"#\">{{ galerie.name }}</a></small></h4>
                                                    <p>{{ galerie.description|raw }}</p>
                                                </div>
                                            </div>
                                        </div>-->
                    {% endfor %}
                </div>

            </div>

            {{ galeries|raw }}
        </div>

    </div>
</section>
", "/Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/galeries/default.htm", "");
    }
}
