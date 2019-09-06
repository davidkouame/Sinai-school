<?php

/* /opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/school/components/galeries/default.htm */
class __TwigTemplate_c8335c95e2e5dcf53d16e525ced92446132572a980550410f0f87327a9592948 extends Twig_Template
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
        echo "
        <section class=\"news\">
            <div class='section-header clearfix'>
                <div class=\"col-md-12\">
                    <div class=\"row\" style=\"padding-bottom: 5px;border-bottom: 2px #e2e2e2 solid;margin-bottom: 20px;\">
                        <div class=\"col-lg-10\" style=\"padding-left: 0px;\">
                            <h1 class=\"section-title title col-md-2\" style=\"font-size: 1.2rem;padding-left: 0px;margin-bottom: 0px;\">Actualités</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"section-content clearfix\" style='padding-left: 0px;'>
                <div id=\"news-carousel\" class=\"news-carousel carousel slide\">
                    <div class=\"carousel-inner\">
                        
                        <div class=\"row\">
                        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["galeries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["galerie"]) {
            // line 18
            echo "                             <div class=\"col-md-6 col-12 text-center\">
                            <div class=\"album-cover\">
                                <a href=\"";
            // line 20
            echo url("galeries");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["galerie"], "slug", []), "html", null, true);
            echo "\"><img class=\"img-fluid\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, $context["galerie"], "images", [])) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[0] ?? null) : null), "getpath", []), "html", null, true);
            echo "\" alt=\"\"></a>
                                <div class=\"desc\">
                                    <h4><small><a href=\"#\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["galerie"], "name", []), "html", null, true);
            echo "</a></small></h4>
                                    <p>";
            // line 23
            echo twig_get_attribute($this->env, $this->source, $context["galerie"], "description", []);
            echo "</p>
                                </div>
                            </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['galerie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                        </div>
                        
                    </div>

                    ";
        // line 32
        echo ($context["galeries"] ?? null);
        echo "
                </div>
    
            </div>
        </section>
   ";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/school/components/galeries/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 32,  73 => 28,  62 => 23,  58 => 22,  49 => 20,  45 => 18,  41 => 17,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
        <section class=\"news\">
            <div class='section-header clearfix'>
                <div class=\"col-md-12\">
                    <div class=\"row\" style=\"padding-bottom: 5px;border-bottom: 2px #e2e2e2 solid;margin-bottom: 20px;\">
                        <div class=\"col-lg-10\" style=\"padding-left: 0px;\">
                            <h1 class=\"section-title title col-md-2\" style=\"font-size: 1.2rem;padding-left: 0px;margin-bottom: 0px;\">Actualités</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"section-content clearfix\" style='padding-left: 0px;'>
                <div id=\"news-carousel\" class=\"news-carousel carousel slide\">
                    <div class=\"carousel-inner\">
                        
                        <div class=\"row\">
                        {% for galerie in galeries %}
                             <div class=\"col-md-6 col-12 text-center\">
                            <div class=\"album-cover\">
                                <a href=\"{{ url('galeries')}}/{{ galerie.slug }}\"><img class=\"img-fluid\" src=\"{{ galerie.images[0].getpath }}\" alt=\"\"></a>
                                <div class=\"desc\">
                                    <h4><small><a href=\"#\">{{ galerie.name }}</a></small></h4>
                                    <p>{{ galerie.description|raw }}</p>
                                </div>
                            </div>
                        </div>
                        {% endfor %}
                        </div>
                        
                    </div>

                    {{ galeries|raw }}
                </div>
    
            </div>
        </section>
   ", "/opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/school/components/galeries/default.htm", "");
    }
}
