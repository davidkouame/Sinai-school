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

/* /Applications/MAMP/htdocs/install-master/themes/default/pages/activitesfintrimestre.htm */
class __TwigTemplate_e19df24c04e4850c902e22404a0d9e99880739b7632b1b8521042ceb9c61dd8d extends \Twig\Template
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
        return "/Applications/MAMP/htdocs/install-master/themes/default/pages/activitesfintrimestre.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 16,  64 => 15,  61 => 14,  57 => 13,  51 => 10,  42 => 3,  38 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"wrapper\">
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
</div>", "/Applications/MAMP/htdocs/install-master/themes/default/pages/activitesfintrimestre.htm", "");
    }
}
