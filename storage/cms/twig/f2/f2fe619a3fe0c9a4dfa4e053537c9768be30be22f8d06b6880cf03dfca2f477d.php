<?php

/* /opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/school/components/filariane/default.htm */
class __TwigTemplate_60b8e7cc08a9f9b8dc2206894d3f0364628fd46a82a7ad6c05f531c3930f5461 extends Twig_Template
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
        echo "<style>
    .row{
        padding-bottom: 8px;
        font-size: 14px;
    }
</style>
<div class=\"row\">
    <div class=\"col-lg-12\">
        <a href=\"";
        // line 9
        echo url("/");
        echo "\">Accueil</a> > <a href=\"";
        echo url("/examens");
        echo "\">Examens</a> > Simili Bac 2018-2019
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/school/components/filariane/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 9,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<style>
    .row{
        padding-bottom: 8px;
        font-size: 14px;
    }
</style>
<div class=\"row\">
    <div class=\"col-lg-12\">
        <a href=\"{{ url('/') }}\">Accueil</a> > <a href=\"{{ url('/examens') }}\">Examens</a> > Simili Bac 2018-2019
    </div>
</div>", "/opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/school/components/filariane/default.htm", "");
    }
}
