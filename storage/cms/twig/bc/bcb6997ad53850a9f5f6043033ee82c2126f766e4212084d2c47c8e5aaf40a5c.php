<?php

/* /Applications/MAMP/htdocs/Sinai-school/themes/default/pages/detailexamens.htm */
class __TwigTemplate_9c78eb2c8722d171affac3eb72f861a8f3b7de48401b125ce142aa0575fd5c57 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("detailexamen"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/Sinai-school/themes/default/pages/detailexamens.htm";
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
        return new Twig_Source("{% component 'detailexamen' %}", "/Applications/MAMP/htdocs/Sinai-school/themes/default/pages/detailexamens.htm", "");
    }
}
