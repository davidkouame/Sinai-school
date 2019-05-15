<?php

/* /opt/lampp/htdocs/sinai_school_october_cms/themes/default/pages/organigrame.htm */
class __TwigTemplate_4d5a5b1df12822e124e79b7d5ea3b4b0fced952a93659398f7ed947c2fdfb2ac extends Twig_Template
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
        echo "<link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/organigrame.css");
        echo "\" rel=\"stylesheet\">

<div class=\"wrapper\">
    ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "
    <div class=\"content container\">

        <div class=\"row cols-wrapper\">
            <div class=\"col-lg-9 col-12\">
                ";
        // line 10
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("Organigrame"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 11
        echo "            </div>
            <div class=\"col-lg-3 col-12\">
                ";
        // line 13
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("mot_du_directeur"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 14
        echo "
                ";
        // line 15
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("majeur_promotion"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 16
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/sinai_school_october_cms/themes/default/pages/organigrame.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  56 => 15,  53 => 14,  49 => 13,  45 => 11,  41 => 10,  34 => 5,  30 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<link href=\"{{ 'assets/css/organigrame.css'|theme }}\" rel=\"stylesheet\">

<div class=\"wrapper\">
    {% partial 'site/header' %}

    <div class=\"content container\">

        <div class=\"row cols-wrapper\">
            <div class=\"col-lg-9 col-12\">
                {% component 'Organigrame' %}
            </div>
            <div class=\"col-lg-3 col-12\">
                {% content 'mot_du_directeur' %}

                {% content 'majeur_promotion' %}
            </div>
        </div>
    </div>
</div>", "/opt/lampp/htdocs/sinai_school_october_cms/themes/default/pages/organigrame.htm", "");
    }
}
