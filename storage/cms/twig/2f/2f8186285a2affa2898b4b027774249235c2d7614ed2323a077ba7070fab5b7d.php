<?php

/* /Applications/MAMP/htdocs/Sinai-school/themes/default/pages/clubsactivites.htm */
class __TwigTemplate_797b59044f4f76dfbb4b4c824d1b0e8887b1eb0b1fa7d137611b81f2fb2cfd3a extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("clubsActivites"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/Sinai-school/themes/default/pages/clubsactivites.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'clubsActivites' %}", "/Applications/MAMP/htdocs/Sinai-school/themes/default/pages/clubsactivites.htm", "");
    }
}
