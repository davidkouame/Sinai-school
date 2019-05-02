<?php

/* /opt/lampp/htdocs/sinai_school_october_cms/themes/default/pages/home.htm */
class __TwigTemplate_f0590ef7bd76f5de471a465e1ebf889155a84008256c3c7c52a85b0db306b26e extends Twig_Template
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
        <div class=\"row cols-wrapper\">

            ";
        // line 11
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("actualites"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 12
        echo "
            <div class=\"col-lg-3 col-12\">
                <!-- Mot du directeur-->
                ";
        // line 15
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("mot_du_directeur"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 16
        echo "                
                <!-- Majeur de promotion -->
                ";
        // line 18
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("majeur_promotion"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 19
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/sinai_school_october_cms/themes/default/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 19,  62 => 18,  58 => 16,  54 => 15,  49 => 12,  45 => 11,  40 => 8,  36 => 7,  31 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"wrapper\">

    {% partial 'site/header' %}

    <div class=\"content container\">
        
        {% component 'SlideShow' %}

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
</div>", "/opt/lampp/htdocs/sinai_school_october_cms/themes/default/pages/home.htm", "");
    }
}
