<?php

/* /Applications/MAMP/htdocs/Sinai-school/themes/default/pages/actualites.htm */
class __TwigTemplate_08109b141b3751bde09c4888e1415a7bc4c7d1a87db373618206d7146b019a15 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("actualitesall"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/Sinai-school/themes/default/pages/actualites.htm";
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
        return new Twig_Source("{% component 'actualitesall' %}", "/Applications/MAMP/htdocs/Sinai-school/themes/default/pages/actualites.htm", "");
    }
}
