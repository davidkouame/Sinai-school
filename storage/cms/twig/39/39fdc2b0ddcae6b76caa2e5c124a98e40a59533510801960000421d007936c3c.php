<?php

/* /Applications/MAMP/htdocs/Sinai-school/themes/default/pages/detailsactualite.htm */
class __TwigTemplate_ffb08ee9550888cfafcc46c952d845f06add4efdf6c2d130d17e689abbbac073 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("detailactualite"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/Sinai-school/themes/default/pages/detailsactualite.htm";
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
        return new Twig_Source("{% component 'detailactualite' %}", "/Applications/MAMP/htdocs/Sinai-school/themes/default/pages/detailsactualite.htm", "");
    }
}
