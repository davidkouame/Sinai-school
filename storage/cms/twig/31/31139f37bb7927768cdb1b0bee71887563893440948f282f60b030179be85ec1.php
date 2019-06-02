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

/* /Applications/MAMP/htdocs/install-master/themes/default/pages/clubsactivites.htm */
class __TwigTemplate_cca06b399076b5e344eb2f2fd4f347a4195fb331c89d7518f3dc7b15a4c439b9 extends \Twig\Template
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
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "
    <div class=\"content container\">
    
            <div class=\"row cols-wrapper\">
                
                <div class=\"col-lg-9 col-12\">
                    ";
        // line 9
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("clubsActivites"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 10
        echo "                </div>
                <div class=\"col-lg-3 col-12\">
                    ";
        // line 12
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("mot_du_directeur"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 13
        echo "                    
                    ";
        // line 14
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("majeur_promotion"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 15
        echo "                </div>
            </div>
        </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/install-master/themes/default/pages/clubsactivites.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 15,  65 => 14,  62 => 13,  58 => 12,  54 => 10,  50 => 9,  42 => 3,  38 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"wrapper\">
    {% partial 'site/header' %}

    <div class=\"content container\">
    
            <div class=\"row cols-wrapper\">
                
                <div class=\"col-lg-9 col-12\">
                    {% component 'clubsActivites' %}
                </div>
                <div class=\"col-lg-3 col-12\">
                    {% content 'mot_du_directeur' %}
                    
                    {% content 'majeur_promotion' %}
                </div>
            </div>
        </div>
</div>", "/Applications/MAMP/htdocs/install-master/themes/default/pages/clubsactivites.htm", "");
    }
}
