<?php

/* /Applications/MAMP/htdocs/Sinai-school/themes/default/pages/detailclubsactivites.htm */
class __TwigTemplate_71315deb31fa608625e071684a84a9c3311f3fdf7f817c27ab653f3f1915270b extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("detailClubsActivites"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/Sinai-school/themes/default/pages/detailclubsactivites.htm";
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
        return new Twig_Source("{% component 'detailClubsActivites' %}", "/Applications/MAMP/htdocs/Sinai-school/themes/default/pages/detailclubsactivites.htm", "");
    }
}
