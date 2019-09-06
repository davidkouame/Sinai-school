<?php

/* /Applications/MAMP/htdocs/Sinai-school/themes/default/pages/organigrame.htm */
class __TwigTemplate_a02dc4f2e5772d97fcbac01493bdd7f65a90d31d8e5499d70890738f56f9ed91 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("Organigrame"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/Sinai-school/themes/default/pages/organigrame.htm";
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
        return new Twig_Source("{% component 'Organigrame' %}", "/Applications/MAMP/htdocs/Sinai-school/themes/default/pages/organigrame.htm", "");
    }
}
