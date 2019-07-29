<?php

/* /Applications/MAMP/htdocs/Sinai-school/themes/default/pages/reglementinterieur.htm */
class __TwigTemplate_a5a7a972592e5cc64adf592e8a5c38a68c94dc75f93c6551a0488be96d431632 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("reglementinterieur"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/Sinai-school/themes/default/pages/reglementinterieur.htm";
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
        return new Twig_Source("{% component 'reglementinterieur' %}", "/Applications/MAMP/htdocs/Sinai-school/themes/default/pages/reglementinterieur.htm", "");
    }
}
