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
        echo "<div id=\"promo-slider\" class=\"slider flexslider\" style='margin-bottom: 23px;'>
    <ul class=\"slides\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slideshows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["slideshow"]) {
            // line 4
            echo "            <li>
                <img src=\"";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["slideshow"], "slide", []), "getpath", []), "html", null, true);
            echo "\" alt=\"\" />
                <p class=\"flex-caption\">
                        ";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["slideshow"], "text_slide", []);
            echo "
                </p>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slideshow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
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
        return array (  49 => 11,  39 => 7,  34 => 5,  31 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"promo-slider\" class=\"slider flexslider\" style='margin-bottom: 23px;'>
    <ul class=\"slides\">
        {% for slideshow in slideshows %}
            <li>
                <img src=\"{{ slideshow.slide.getpath  }}\" alt=\"\" />
                <p class=\"flex-caption\">
                        {{ slideshow.text_slide|raw  }}
                </p>
            </li>
        {% endfor %}
    </ul>
</div>", "/opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/slideshow/components/slideshow/default.htm", "");
    }
}
