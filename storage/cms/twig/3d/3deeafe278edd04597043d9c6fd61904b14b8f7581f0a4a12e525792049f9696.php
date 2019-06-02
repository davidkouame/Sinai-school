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

/* /Applications/MAMP/htdocs/install-master/themes/default/pages/suivre-mes-eleves.htm */
class __TwigTemplate_cf165ccbdddea0c5ae88aa1406c5cf4db29e720cd7e1f2b496b313469e7fb0da extends \Twig\Template
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
                <p style=\"text-align: justify;\">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Nullam condimentum dui quis dignissim lacinia. Fusce mi felis, 
                maximus vel dui non, accumsan semper eros. Donec molestie 
                gravida augue sit amet lacinia. Phasellus condimentum vulputate 
                ipsum. Donec commodo urna nulla, nec blandit tortor fermentum 
                vel. Donec vitae scelerisque odio. Aenean scelerisque mi purus, 
                id pretium turpis blandit vel. Praesent bibendum nisi eget elit 
                dignissim vulputate. Morbi efficitur augue id ante blandit, ac 
                auctor enim tincidunt. Praesent vehicula eget risus eu cursus. 
                Phasellus eu consectetur neque.
                </p>

                <a href=\"http://www.suivre-eleve.com/\">Accèder mon espace -></a>
            </div>
            <div class=\"col-lg-3 col-12\">
                ";
        // line 24
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("mot_du_directeur"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 25
        echo "
                ";
        // line 26
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("majeur_promotion"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 27
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/install-master/themes/default/pages/suivre-mes-eleves.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 27,  72 => 26,  69 => 25,  65 => 24,  42 => 3,  38 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"wrapper\">
    {% partial 'site/header' %}

    <div class=\"content container\">

        <div class=\"row cols-wrapper\">
            <div class=\"col-lg-9 col-12\">
                <p style=\"text-align: justify;\">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Nullam condimentum dui quis dignissim lacinia. Fusce mi felis, 
                maximus vel dui non, accumsan semper eros. Donec molestie 
                gravida augue sit amet lacinia. Phasellus condimentum vulputate 
                ipsum. Donec commodo urna nulla, nec blandit tortor fermentum 
                vel. Donec vitae scelerisque odio. Aenean scelerisque mi purus, 
                id pretium turpis blandit vel. Praesent bibendum nisi eget elit 
                dignissim vulputate. Morbi efficitur augue id ante blandit, ac 
                auctor enim tincidunt. Praesent vehicula eget risus eu cursus. 
                Phasellus eu consectetur neque.
                </p>

                <a href=\"http://www.suivre-eleve.com/\">Accèder mon espace -></a>
            </div>
            <div class=\"col-lg-3 col-12\">
                {% content 'mot_du_directeur' %}

                {% content 'majeur_promotion' %}
            </div>
        </div>
    </div>
</div>", "/Applications/MAMP/htdocs/install-master/themes/default/pages/suivre-mes-eleves.htm", "");
    }
}
