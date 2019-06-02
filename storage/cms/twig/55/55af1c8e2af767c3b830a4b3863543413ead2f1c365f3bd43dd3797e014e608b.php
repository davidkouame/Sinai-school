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

/* /Applications/MAMP/htdocs/install-master/themes/default/pages/home.htm */
class __TwigTemplate_387796272013bd30f46013b11d23f5b6dc749fe177921e5ab23cb9b3cb62a6c3 extends \Twig\Template
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
        echo "<div class=\"wrapper\">

    ";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "
    <div class=\"content container\">
        
        ";
        // line 7
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("SlideShow"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 8
        echo "
        <section class=\"promo box box-dark\" style=\"padding-top: 15px;padding-left: 15px;padding-bottom: 15px;padding-right: 15px;\">        
                <div class=\"row\">
                    <div class=\"col-md-9\">
                <h1 class=\"section-heading\">Why College Green</h1>
                    <p style=\"margin-bottom: 0px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed bibendum orci eget nulla mattis, quis viverra tellus porta. Donec vitae neque ut velit eleifend commodo. Maecenas turpis odio, placerat eu lorem ut, suscipit commodo augue.  </p>   
                </div>  
                <div class=\"col-md-3\">
                    <a class=\"btn btn-cta\" href=\"index.html#\"><i class=\"fa fa-play-circle\"></i>Apply Now</a>  
                </div>
                </div>
            </section><!--//promo-->

        <div class=\"row cols-wrapper\">

            ";
        // line 23
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("actualites"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 24
        echo "
            <div class=\"col-lg-3 col-12\">
                <!-- Mot du directeur-->
                ";
        // line 27
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("mot_du_directeur"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 28
        echo "                
                <!-- Majeur de promotion -->
                ";
        // line 30
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("majeur_promotion"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 31
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/install-master/themes/default/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 31,  86 => 30,  82 => 28,  78 => 27,  73 => 24,  69 => 23,  52 => 8,  48 => 7,  43 => 4,  39 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"wrapper\">

    {% partial 'site/header' %}

    <div class=\"content container\">
        
        {% component 'SlideShow' %}

        <section class=\"promo box box-dark\" style=\"padding-top: 15px;padding-left: 15px;padding-bottom: 15px;padding-right: 15px;\">        
                <div class=\"row\">
                    <div class=\"col-md-9\">
                <h1 class=\"section-heading\">Why College Green</h1>
                    <p style=\"margin-bottom: 0px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed bibendum orci eget nulla mattis, quis viverra tellus porta. Donec vitae neque ut velit eleifend commodo. Maecenas turpis odio, placerat eu lorem ut, suscipit commodo augue.  </p>   
                </div>  
                <div class=\"col-md-3\">
                    <a class=\"btn btn-cta\" href=\"index.html#\"><i class=\"fa fa-play-circle\"></i>Apply Now</a>  
                </div>
                </div>
            </section><!--//promo-->

        <div class=\"row cols-wrapper\">

            {% component 'actualites' %}

            <div class=\"col-lg-3 col-12\">
                <!-- Mot du directeur-->
                {% content 'mot_du_directeur' %}
                
                <!-- Majeur de promotion -->
                {% content 'majeur_promotion' %}
            </div>
        </div>
    </div>
</div>", "/Applications/MAMP/htdocs/install-master/themes/default/pages/home.htm", "");
    }
}
