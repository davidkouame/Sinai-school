<?php

/* /opt/lampp/htdocs/sinai_school_october_cms/themes/default/pages/detailexamens.htm */
class __TwigTemplate_9feff2adae97faeaad1beff1d816cba51e60b45a1f44a29860d3895dc0791489 extends Twig_Template
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

            <div class=\"row cols-wrapper\">
                <div class=\"col-lg-9 col-12\">
                    ";
        // line 8
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("detailexamen"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 9
        echo "                </div>
                <div class=\"col-lg-3 col-12\">
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
        return "/opt/lampp/htdocs/sinai_school_october_cms/themes/default/pages/detailexamens.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 14,  52 => 13,  49 => 12,  45 => 11,  41 => 9,  37 => 8,  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"wrapper\">
    {% partial 'site/header' %}

    <div class=\"content container\">

            <div class=\"row cols-wrapper\">
                <div class=\"col-lg-9 col-12\">
                    {% component 'detailexamen' %}
                </div>
                <div class=\"col-lg-3 col-12\">
                    {% content 'mot_du_directeur' %}
                    
                    {% content 'majeur_promotion' %}
                </div>
            </div>
        </div>
</div>", "/opt/lampp/htdocs/sinai_school_october_cms/themes/default/pages/detailexamens.htm", "");
    }
}
