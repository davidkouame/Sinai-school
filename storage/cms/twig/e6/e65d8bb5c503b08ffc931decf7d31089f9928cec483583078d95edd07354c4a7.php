<?php

/* /opt/lampp/htdocs/sinai_school_october_cms/themes/default/layouts/fallback.htm */
class __TwigTemplate_e04884f86e0b3c7842f5df136c601c864797f48f75fd4f8415a5db6033698d5a extends Twig_Template
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
        return "/opt/lampp/htdocs/sinai_school_october_cms/themes/default/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "/opt/lampp/htdocs/sinai_school_october_cms/themes/default/layouts/fallback.htm", "");
    }
}
