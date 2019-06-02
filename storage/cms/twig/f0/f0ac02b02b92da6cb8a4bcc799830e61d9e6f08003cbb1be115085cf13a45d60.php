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

/* /Applications/MAMP/htdocs/install-master/plugins/bootnetcrasher/school/components/actualitesall/default.htm */
class __TwigTemplate_50131099c9cc2233cdcf635df88be7fc08b5101f5f2a6d1e825b6c3d83f85694 extends \Twig\Template
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
        echo "<div class=\"col-lg-9 col-12\">
        <section class=\"news\">
            <div class='section-header clearfix'>
                <div class=\"col-md-12\">
                    <div class=\"row\" style=\"padding-bottom: 5px;border-bottom: 2px #e2e2e2 solid;margin-bottom: 20px;\">
                        <div class=\"col-lg-10\" style=\"padding-left: 0px;\">
                            <h1 class=\"section-title title col-md-2\" style=\"font-size: 1.2rem;padding-left: 0px;margin-bottom: 0px;\">Actualités</h1>
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
        $context['_seq'] = twig_ensure_traversable(($context["actualitesall"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["actualite"]) {
            // line 17
            echo "                            <div class=\"item carousel-item active\">
                                <div class=\"row\" data-id=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "id", [], "any", false, false, false, 18), "html", null, true);
            echo "\">
                                    <div class=\"col-lg-3\">
                                        <figure class='jss374' style='background-image: url(\"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["actualite"], "cover", [], "any", false, false, false, 20), "getpath", [], "any", false, false, false, 20), "html", null, true);
            echo "\");'></figure>
                                    </div>
                                    <div class=\"col-lg-9\">
                                        <h2 class=\"title\"><a href=\"";
            // line 23
            echo url("actualites");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "\" style=\"color: #6091ba;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "title", [], "any", false, false, false, 23), "html", null, true);
            echo "</a></h2>
                                        <p>
                                            ";
            // line 25
            echo call_user_func_array($this->env->getFilter('truncate')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["actualite"], "content", [], "any", false, false, false, 25), 235, false, " ..."]);
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
        // line 32
        echo "                        
                    </div>

                    ";
        // line 35
        echo ($context["actualitesall"] ?? null);
        echo "
                </div>
    
            </div>
        </section>
    </div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/install-master/plugins/bootnetcrasher/school/components/actualitesall/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 35,  92 => 32,  79 => 25,  70 => 23,  64 => 20,  59 => 18,  56 => 17,  52 => 16,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-lg-9 col-12\">
        <section class=\"news\">
            <div class='section-header clearfix'>
                <div class=\"col-md-12\">
                    <div class=\"row\" style=\"padding-bottom: 5px;border-bottom: 2px #e2e2e2 solid;margin-bottom: 20px;\">
                        <div class=\"col-lg-10\" style=\"padding-left: 0px;\">
                            <h1 class=\"section-title title col-md-2\" style=\"font-size: 1.2rem;padding-left: 0px;margin-bottom: 0px;\">Actualités</h1>
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
                                        <h2 class=\"title\"><a href=\"{{ url('actualites')}}/{{ actualite.id }}\" style=\"color: #6091ba;\">{{ actualite.title }}</a></h2>
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
    </div>", "/Applications/MAMP/htdocs/install-master/plugins/bootnetcrasher/school/components/actualitesall/default.htm", "");
    }
}
