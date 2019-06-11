<?php

/* /Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/detailexamen/default.htm */
class __TwigTemplate_f9cbaedfc94d366751d65a365867741b55319fa1b369fb7657cdaef05892ac90 extends Twig_Template
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
    .news ul li {
        list-style: none;
        margin-top: 12px;
    }
    
    .key{
        font-size: 15px;
        font-weight: bold;
    }
    
    .value{
        font-size: 14px;
    }
    
    .detail{
        
    }
    
    ul{padding-left: 0px;}
</style>
<div class=\"row\">
    <div class=\"col-lg-12\">
        <img src=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slide-2.jpg");
        echo "\" class=\"img-fluid\" alt=\"Responsive image\">
    </div>
</div>
<div class=\"row\">
    <div class=\"col-lg-12 col-12\">
        <section class=\"news\">
            <div class=\"section-content clearfix\" style='padding-left: 0px;'>
                <div id=\"news-carousel\" class=\"news-carousel carousel slide\">
                    <div class=\"carousel-inner\">
                        <ul>
                            <li class=\"detail\">
                                <span class=\"key\">Nom :</span> 
                                <span class=\"value\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["examen"] ?? null), "name", []), "html", null, true);
        echo "</span></li>
                            <li>
                                <span class=\"key\">Date de début :</span> 
                                <span class=\"value\">";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["examen"] ?? null), "datedebut", []), "html", null, true);
        echo "</span>
                            </li>
                            <li>
                                <span class=\"key\">Date de fin :</span> 
                                <span class=\"value\">";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["examen"] ?? null), "datefin", []), "html", null, true);
        echo "</span>
                            </li>
                            <li>
                                <span class=\"key\">Description :</span>
                                <span class=\"value\">";
        // line 47
        echo twig_get_attribute($this->env, $this->source, ($context["examen"] ?? null), "description", []);
        echo "</span>
                            </li>
                            <li>
                                ";
        // line 50
        if (twig_get_attribute($this->env, $this->source, ($context["examen"] ?? null), "sujets", [])) {
            echo " <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["examen"] ?? null), "sujets", []), "getpath", []), "html", null, true);
            echo "\" target=\"_blank\">Télécharger les Sujets</a> /";
        }
        // line 51
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, ($context["examen"] ?? null), "corrections", [])) {
            echo " <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["examen"] ?? null), "corrections", []), "getpath", []), "html", null, true);
            echo "\" target=\"_blank\">Télécharger les Corrections</a> /";
        }
        // line 52
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, ($context["examen"] ?? null), "resultats", [])) {
            echo " <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["examen"] ?? null), "resultats", []), "getpath", []), "html", null, true);
            echo "\" target=\"_blank\">Télécharger Resultats</a>";
        }
        // line 53
        echo "                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/detailexamen/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 53,  102 => 52,  95 => 51,  89 => 50,  83 => 47,  76 => 43,  69 => 39,  63 => 36,  48 => 24,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<style>
    .news ul li {
        list-style: none;
        margin-top: 12px;
    }
    
    .key{
        font-size: 15px;
        font-weight: bold;
    }
    
    .value{
        font-size: 14px;
    }
    
    .detail{
        
    }
    
    ul{padding-left: 0px;}
</style>
<div class=\"row\">
    <div class=\"col-lg-12\">
        <img src=\"{{'assets/images/slide-2.jpg' | theme }}\" class=\"img-fluid\" alt=\"Responsive image\">
    </div>
</div>
<div class=\"row\">
    <div class=\"col-lg-12 col-12\">
        <section class=\"news\">
            <div class=\"section-content clearfix\" style='padding-left: 0px;'>
                <div id=\"news-carousel\" class=\"news-carousel carousel slide\">
                    <div class=\"carousel-inner\">
                        <ul>
                            <li class=\"detail\">
                                <span class=\"key\">Nom :</span> 
                                <span class=\"value\">{{ examen.name }}</span></li>
                            <li>
                                <span class=\"key\">Date de début :</span> 
                                <span class=\"value\">{{ examen.datedebut }}</span>
                            </li>
                            <li>
                                <span class=\"key\">Date de fin :</span> 
                                <span class=\"value\">{{ examen.datefin }}</span>
                            </li>
                            <li>
                                <span class=\"key\">Description :</span>
                                <span class=\"value\">{{ examen.description|raw }}</span>
                            </li>
                            <li>
                                {% if(examen.sujets) %} <a href=\"{{ examen.sujets.getpath }}\" target=\"_blank\">Télécharger les Sujets</a> /{% endif %}
                                {% if(examen.corrections) %} <a href=\"{{ examen.corrections.getpath }}\" target=\"_blank\">Télécharger les Corrections</a> /{% endif %}
                                {% if(examen.resultats) %} <a href=\"{{ examen.resultats.getpath }}\" target=\"_blank\">Télécharger Resultats</a>{% endif %}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>", "/Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/detailexamen/default.htm", "");
    }
}
