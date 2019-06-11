<?php

/* /Applications/MAMP/htdocs/Sinai-school/themes/default/pages/suivre-mes-eleves.htm */
class __TwigTemplate_743e7f096aa7a7e78374d6854046575d8090bd47f000dc55b11437b6ac6b4eb3 extends Twig_Template
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
            
            ";
        // line 24
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/navabar-right"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 25
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/Sinai-school/themes/default/pages/suivre-mes-eleves.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 25,  53 => 24,  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"wrapper\">
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
            
            {% partial 'site/navabar-right' %}
        </div>
    </div>
</div>", "/Applications/MAMP/htdocs/Sinai-school/themes/default/pages/suivre-mes-eleves.htm", "");
    }
}
