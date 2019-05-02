<?php

/* /opt/lampp/htdocs/sinai_school_october_cms/themes/default/pages/actualites.htm */
class __TwigTemplate_ff1de5dac787f6dedb952bb6575ee5caf322d2dae6dca81cefc32af86a79788a extends Twig_Template
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
        echo "<div class=\"wrapper\">
    ";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "
    <div class=\"content container\">

            ";
        // line 6
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("SlideShow"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 7
        echo "    
            <div class=\"row cols-wrapper\">
                    ";
        // line 9
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("actualitesall"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 10
        echo "                <div class=\"col-lg-3 col-12\">
                    ";
        // line 11
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("mot_du_directeur"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 12
        echo "                    
                    ";
        // line 13
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("majeur_promotion"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 14
        echo "                </div>
            </div>
        </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/sinai_school_october_cms/themes/default/pages/actualites.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  57 => 13,  54 => 12,  50 => 11,  47 => 10,  43 => 9,  39 => 7,  35 => 6,  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"wrapper\">
    {% partial 'site/header' %}

    <div class=\"content container\">

            {% component 'SlideShow' %}
    
            <div class=\"row cols-wrapper\">
                    {% component 'actualitesall' %}
                <div class=\"col-lg-3 col-12\">
                    {% content 'mot_du_directeur' %}
                    
                    {% content 'majeur_promotion' %}
                </div>
            </div>
        </div>
</div>", "/opt/lampp/htdocs/sinai_school_october_cms/themes/default/pages/actualites.htm", "");
    }
}
