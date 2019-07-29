<?php

/* /Applications/MAMP/htdocs/Sinai-school/themes/default/pages/galeries.htm */
class __TwigTemplate_12bb48a936fe9dcd6ec3a134f096db93c5f0a0993c6e7e99f3dd01467f9b759d extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("galeriesAll"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/Sinai-school/themes/default/pages/galeries.htm";
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
        return new Twig_Source("{% component 'galeriesAll' %}", "/Applications/MAMP/htdocs/Sinai-school/themes/default/pages/galeries.htm", "");
    }
}
