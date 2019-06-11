<?php

/* /Applications/MAMP/htdocs/Sinai-school/themes/default/layouts/fallback.htm */
class __TwigTemplate_d88d4672b7c638e5f22d12ec053c9e0cde9f2a917d6abf60aab69ee957f5f47d extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/Sinai-school/themes/default/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "/Applications/MAMP/htdocs/Sinai-school/themes/default/layouts/fallback.htm", "");
    }
}
