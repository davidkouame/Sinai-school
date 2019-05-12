<?php

/* /opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/slideshow/components/slideshow/default.htm */
class __TwigTemplate_4c707226debe549741316394f3a26bfcf7112ac1453ad2568ea4f84ab09f210b extends Twig_Template
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
    .flex-control-nav.flex-control-paging{
        position: unset;
    }
</style>
<div id=\"promo-slider\" class=\"slider flexslider\" style='margin-bottom: 23px;'>
    <ul class=\"slides\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slideshows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["slideshow"]) {
            // line 9
            echo "            <li>
                <img src=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["slideshow"], "slide", []), "getpath", []), "html", null, true);
            echo "\" alt=\"\" />
                <p class=\"flex-caption\">
                    <p class=\"flex-caption\">
                        <span class=\"main\">
                            ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slideshow"], "title_cover", []), "html", null, true);
            echo "
                        </span>
                        <br>
                        <span class=\"secondary clearfix\">
                            ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slideshow"], "description_cover", []), "html", null, true);
            echo "
                        </span>
                    </p>
                </p>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slideshow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/slideshow/components/slideshow/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 24,  53 => 18,  46 => 14,  39 => 10,  36 => 9,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<style type=\"text/css\">
    .flex-control-nav.flex-control-paging{
        position: unset;
    }
</style>
<div id=\"promo-slider\" class=\"slider flexslider\" style='margin-bottom: 23px;'>
    <ul class=\"slides\">
        {% for slideshow in slideshows %}
            <li>
                <img src=\"{{ slideshow.slide.getpath  }}\" alt=\"\" />
                <p class=\"flex-caption\">
                    <p class=\"flex-caption\">
                        <span class=\"main\">
                            {{ slideshow.title_cover }}
                        </span>
                        <br>
                        <span class=\"secondary clearfix\">
                            {{ slideshow.description_cover }}
                        </span>
                    </p>
                </p>
            </li>
        {% endfor %}
    </ul>
</div>", "/opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/slideshow/components/slideshow/default.htm", "");
    }
}
