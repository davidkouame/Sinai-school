<?php

/* /opt/lampp/htdocs/sinai_school_october_cms/themes/default/pages/suivre-mes-eleves.htm */
class __TwigTemplate_a8efefc02d980c490d5e370e0036c743c68073cfdb88e1599df6017710c2057e extends Twig_Template
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


Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam condimentum dui quis dignissim lacinia. Fusce mi felis, maximus vel dui non, accumsan semper eros. Donec molestie gravida augue sit amet lacinia. Phasellus condimentum vulputate ipsum. Donec commodo urna nulla, nec blandit tortor fermentum vel. Donec vitae scelerisque odio. Aenean scelerisque mi purus, id pretium turpis blandit vel. Praesent bibendum nisi eget elit dignissim vulputate. Morbi efficitur augue id ante blandit, ac auctor enim tincidunt. Praesent vehicula eget risus eu cursus. Phasellus eu consectetur neque.

\t\t\t\t\t<a href=\"http://www.suivre-eleve.com/\" class=\"btn btn-primary\">accèder</a>
                </div>
                <div class=\"col-lg-3 col-12\">
                    ";
        // line 15
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("mot_du_directeur"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 16
        echo "                    
                    ";
        // line 17
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("majeur_promotion"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 18
        echo "                </div>
            </div>
        </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/sinai_school_october_cms/themes/default/pages/suivre-mes-eleves.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 18,  51 => 17,  48 => 16,  44 => 15,  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"wrapper\">
    {% partial 'site/header' %}

    <div class=\"content container\">

            <div class=\"row cols-wrapper\">
                <div class=\"col-lg-9 col-12\">


Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam condimentum dui quis dignissim lacinia. Fusce mi felis, maximus vel dui non, accumsan semper eros. Donec molestie gravida augue sit amet lacinia. Phasellus condimentum vulputate ipsum. Donec commodo urna nulla, nec blandit tortor fermentum vel. Donec vitae scelerisque odio. Aenean scelerisque mi purus, id pretium turpis blandit vel. Praesent bibendum nisi eget elit dignissim vulputate. Morbi efficitur augue id ante blandit, ac auctor enim tincidunt. Praesent vehicula eget risus eu cursus. Phasellus eu consectetur neque.

\t\t\t\t\t<a href=\"http://www.suivre-eleve.com/\" class=\"btn btn-primary\">accèder</a>
                </div>
                <div class=\"col-lg-3 col-12\">
                    {% content 'mot_du_directeur' %}
                    
                    {% content 'majeur_promotion' %}
                </div>
            </div>
        </div>
</div>", "/opt/lampp/htdocs/sinai_school_october_cms/themes/default/pages/suivre-mes-eleves.htm", "");
    }
}
