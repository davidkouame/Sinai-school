<?php

/* /Applications/MAMP/htdocs/Sinai-school/themes/default/pages/activitesfintrimestre.htm */
class __TwigTemplate_ccef83a573991cf581936d37fbee6334c8f1a11587609a281caf8330954f0367 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("activitesFinTrimestre"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/Sinai-school/themes/default/pages/activitesfintrimestre.htm";
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
        return new Twig_Source("{% component 'activitesFinTrimestre' %}", "/Applications/MAMP/htdocs/Sinai-school/themes/default/pages/activitesfintrimestre.htm", "");
    }
}
