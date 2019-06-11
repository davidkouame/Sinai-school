<?php

/* /Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/filariane/default.htm */
class __TwigTemplate_44ab714dc946045024053f04713e19dbcbd78bea41f24f9300a2a9d0eddb8a2a extends Twig_Template
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
        return "/Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/filariane/default.htm";
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
</div>", "/Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/filariane/default.htm", "");
    }
}
