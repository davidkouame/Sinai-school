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
        echo "<style type=\"text/css\">
.pagination {
    display: inline-block;
    padding-left: 0;
    margin: 20px 0;
    border-radius: 4px;
}
.pagination > li:first-child > a, .pagination > li:first-child > span {
    margin-left: 0;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
}
.pagination > li:first-child > a, .pagination > li:first-child > span {
    margin-left: 0;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
}
.pagination > li:first-child > a, .pagination > li:first-child > span {
    margin-left: 0;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
}
.pagination > li > a, .pagination > li > span {
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.42857143;
    color: #337ab7;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd;
}
.pagination > li {
    display: inline;
}
.pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus {
    background-color: #6091ba;
    border-color: #6091ba;
}
.pagination > .active > a, .pagination > .active > a:focus, .pagination > .active > a:hover, .pagination > .active > span, .pagination > .active > span:focus, .pagination > .active > span:hover {
    z-index: 3;
    color: #fff;
    cursor: default;
    background-color: #337ab7;
    border-color: #337ab7;
}
.pagination > li > a, .pagination > li > span {
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.42857143;
    color: #337ab7;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd;
        border-top-color: rgb(221, 221, 221);
        border-right-color: rgb(221, 221, 221);
        border-bottom-color: rgb(221, 221, 221);
        border-left-color: rgb(221, 221, 221);
}
ul.pagination{
    margin-top: 0px;
    margin-bottom: 0px;
}
</style>
<div class=\"col-lg-9 col-12\">
    <section class=\"news\">
        <div class='section-header clearfix'>
            <div class=\"col-md-12\">
                <div class=\"row\" style=\"padding-bottom: 5px;border-bottom: 2px #e2e2e2 solid;margin-bottom: 20px;\">
                    <div class=\"col-lg-9\" style=\"padding-left: 0px;\">
                        <h1 class=\"section-title title col-md-2\" style=\"font-size: 1.2rem;padding-left: 0px;margin-bottom: 0px;\">Actualités</h1>
                    </div>
                    <div class=\"col-lg-3\" style=\"padding-right: 0px;\">
                        <a class=\"read-more float-right\" href=\"";
        // line 77
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
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actualites"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["actualite"]) {
            // line 87
            echo "                        <div class=\"item carousel-item active\">
                            <div class=\"row\" data-id=\"";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "id", []), "html", null, true);
            echo "\">
                                <div class=\"col-lg-3\">
                                    <figure class='jss374' style='background-image: url(\"";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["actualite"], "cover", []), "getpath", []), "html", null, true);
            echo "\");'></figure>
                                </div>
                                <div class=\"col-lg-9\">
                                    <h2 class=\"title\"><a href=\"";
            // line 93
            echo url("/actualites");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "id", []), "html", null, true);
            echo "\" style=\"color: #6091ba;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "title", []), "html", null, true);
            echo "</a></h2>
                                    <p>
                                        ";
            // line 95
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
        // line 102
        echo "
                </div>
            </div>

            <!--<div class=\"pagination\" style=\"margin-bottom: 0px;margin-top: 0px;\">
                ";
        // line 107
        echo ($context["actualites"] ?? null);
        echo "
            </div>-->

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
        return array (  160 => 107,  153 => 102,  140 => 95,  131 => 93,  125 => 90,  120 => 88,  117 => 87,  113 => 86,  101 => 77,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<style type=\"text/css\">
.pagination {
    display: inline-block;
    padding-left: 0;
    margin: 20px 0;
    border-radius: 4px;
}
.pagination > li:first-child > a, .pagination > li:first-child > span {
    margin-left: 0;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
}
.pagination > li:first-child > a, .pagination > li:first-child > span {
    margin-left: 0;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
}
.pagination > li:first-child > a, .pagination > li:first-child > span {
    margin-left: 0;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
}
.pagination > li > a, .pagination > li > span {
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.42857143;
    color: #337ab7;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd;
}
.pagination > li {
    display: inline;
}
.pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus {
    background-color: #6091ba;
    border-color: #6091ba;
}
.pagination > .active > a, .pagination > .active > a:focus, .pagination > .active > a:hover, .pagination > .active > span, .pagination > .active > span:focus, .pagination > .active > span:hover {
    z-index: 3;
    color: #fff;
    cursor: default;
    background-color: #337ab7;
    border-color: #337ab7;
}
.pagination > li > a, .pagination > li > span {
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.42857143;
    color: #337ab7;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd;
        border-top-color: rgb(221, 221, 221);
        border-right-color: rgb(221, 221, 221);
        border-bottom-color: rgb(221, 221, 221);
        border-left-color: rgb(221, 221, 221);
}
ul.pagination{
    margin-top: 0px;
    margin-bottom: 0px;
}
</style>
<div class=\"col-lg-9 col-12\">
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
</div>", "/opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/school/components/actualites/default.htm", "");
    }
}
