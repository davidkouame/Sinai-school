<?php

/* /opt/lampp/htdocs/sinai_school_october_cms/themes/default/pages/activitesfintrimestre.htm */
class __TwigTemplate_e50539f59cad3c02a23c18c1c5234319487e18decb7ced512c82bd97881358ac extends Twig_Template
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
        <div class=\"row\">
            <h3 style=\"margin-left: 17px;\">Activités de fin trimestre<h3>
        </div>
        <div class=\"row cols-wrapper\">
            <div class=\"col-lg-9 col-12\">
                <img src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/capture.png");
        echo "\" style=\"width: 100%;\"/>
            </div>
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
        return "/opt/lampp/htdocs/sinai_school_october_cms/themes/default/pages/activitesfintrimestre.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 16,  52 => 15,  49 => 14,  45 => 13,  39 => 10,  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"wrapper\">
    {% partial 'site/header' %}

    <div class=\"content container\">
        <div class=\"row\">
            <h3 style=\"margin-left: 17px;\">Activités de fin trimestre<h3>
        </div>
        <div class=\"row cols-wrapper\">
            <div class=\"col-lg-9 col-12\">
                <img src=\"{{ 'assets/images/capture.png'|theme }}\" style=\"width: 100%;\"/>
            </div>
            <div class=\"col-lg-3 col-12\">
                {% content 'mot_du_directeur' %}

                {% content 'majeur_promotion' %}
            </div>
        </div>
    </div>
</div>", "/opt/lampp/htdocs/sinai_school_october_cms/themes/default/pages/activitesfintrimestre.htm", "");
    }
}
