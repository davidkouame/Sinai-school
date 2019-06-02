<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /Applications/MAMP/htdocs/install-master/plugins/bootnetcrasher/slideshow/components/slideshow/default.htm */
class __TwigTemplate_b1e71a87a701abdb39d1df6ec4565a173b09a8d373c669501ede39a0c9ec366d extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["slideshow"], "slide", [], "any", false, false, false, 10), "getpath", [], "any", false, false, false, 10), "html", null, true);
            echo "\" alt=\"\" />
                <p class=\"flex-caption\">
                    <p class=\"flex-caption\">
                        ";
            // line 13
            if (twig_get_attribute($this->env, $this->source, $context["slideshow"], "title_cover", [], "any", false, false, false, 13)) {
                // line 14
                echo "                            <span class=\"main\">
                                ";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slideshow"], "title_cover", [], "any", false, false, false, 15), "html", null, true);
                echo "
                            </span>
                            <br>
                        ";
            }
            // line 19
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, $context["slideshow"], "description_cover", [], "any", false, false, false, 19)) {
                // line 20
                echo "                            <span class=\"secondary clearfix\">
                                ";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slideshow"], "description_cover", [], "any", false, false, false, 21), "html", null, true);
                echo "
                            </span>
                        ";
            }
            // line 24
            echo "                    </p>
                </p>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slideshow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/install-master/plugins/bootnetcrasher/slideshow/components/slideshow/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 28,  81 => 24,  75 => 21,  72 => 20,  69 => 19,  62 => 15,  59 => 14,  57 => 13,  51 => 10,  48 => 9,  44 => 8,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style type=\"text/css\">
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
                        {% if slideshow.title_cover %}
                            <span class=\"main\">
                                {{ slideshow.title_cover }}
                            </span>
                            <br>
                        {% endif %}
                        {% if slideshow.description_cover %}
                            <span class=\"secondary clearfix\">
                                {{ slideshow.description_cover }}
                            </span>
                        {% endif %}
                    </p>
                </p>
            </li>
        {% endfor %}
    </ul>
</div>", "/Applications/MAMP/htdocs/install-master/plugins/bootnetcrasher/slideshow/components/slideshow/default.htm", "");
    }
}
