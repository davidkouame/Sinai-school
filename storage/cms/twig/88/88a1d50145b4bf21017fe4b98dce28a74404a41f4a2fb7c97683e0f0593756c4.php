<?php

/* /Applications/MAMP/htdocs/Sinai-school/themes/default/pages/detailgalerie.htm */
class __TwigTemplate_e35daf68a2394964a802cf07ddefcd764ca01a5554f52f528fbdb2756213451e extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("detailGalerie"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/Sinai-school/themes/default/pages/detailgalerie.htm";
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
        return new Twig_Source("{% component 'detailGalerie' %}", "/Applications/MAMP/htdocs/Sinai-school/themes/default/pages/detailgalerie.htm", "");
    }
}
