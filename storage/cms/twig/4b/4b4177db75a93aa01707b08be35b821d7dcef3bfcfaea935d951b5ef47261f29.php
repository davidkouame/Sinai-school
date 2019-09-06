<?php

/* /opt/lampp/htdocs/sinai_school_october_cms/themes/default/pages/home.htm */
class __TwigTemplate_f0590ef7bd76f5de471a465e1ebf889155a84008256c3c7c52a85b0db306b26e extends Twig_Template
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
        echo "<div class=\"wrapper\">

    ";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "
    <div class=\"content container\">
        
        ";
        // line 7
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("SlideShow"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 8
        echo "
        <section class=\"promo box box-dark\" style=\"padding-top: 15px;padding-left: 15px;padding-bottom: 15px;padding-right: 15px;\">        
                <div class=\"row\">
                    <div class=\"col-md-9\">
                <h1 class=\"section-heading\">Why College Green</h1>
                    <p style=\"margin-bottom: 0px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed bibendum orci eget nulla mattis, quis viverra tellus porta. Donec vitae neque ut velit eleifend commodo. Maecenas turpis odio, placerat eu lorem ut, suscipit commodo augue.  </p>   
                </div>  
                <div class=\"col-md-3\">
                    <a class=\"btn btn-cta\" href=\"index.html#\"><i class=\"fa fa-play-circle\"></i>Apply Now</a>  
                </div>
                </div>
            </section><!--//promo-->

        <div class=\"row cols-wrapper\">

            ";
        // line 23
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("actualites"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 24
        echo "
            <div class=\"col-lg-3 col-12\">
                <!-- Mot du directeur-->
                ";
        // line 27
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("mot_du_directeur"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 28
        echo "                
                <!-- Majeur de promotion -->
                ";
        // line 30
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("majeur_promotion"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 31
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/sinai_school_october_cms/themes/default/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 31,  74 => 30,  70 => 28,  66 => 27,  61 => 24,  57 => 23,  40 => 8,  36 => 7,  31 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"wrapper\">

    {% partial 'site/header' %}

    <div class=\"content container\">
        
        {% component 'SlideShow' %}

        <section class=\"promo box box-dark\" style=\"padding-top: 15px;padding-left: 15px;padding-bottom: 15px;padding-right: 15px;\">        
                <div class=\"row\">
                    <div class=\"col-md-9\">
                <h1 class=\"section-heading\">Why College Green</h1>
                    <p style=\"margin-bottom: 0px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed bibendum orci eget nulla mattis, quis viverra tellus porta. Donec vitae neque ut velit eleifend commodo. Maecenas turpis odio, placerat eu lorem ut, suscipit commodo augue.  </p>   
                </div>  
                <div class=\"col-md-3\">
                    <a class=\"btn btn-cta\" href=\"index.html#\"><i class=\"fa fa-play-circle\"></i>Apply Now</a>  
                </div>
                </div>
            </section><!--//promo-->

        <div class=\"row cols-wrapper\">

            {% component 'actualites' %}

            <div class=\"col-lg-3 col-12\">
                <!-- Mot du directeur-->
                {% content 'mot_du_directeur' %}
                
                <!-- Majeur de promotion -->
                {% content 'majeur_promotion' %}
            </div>
        </div>
    </div>
</div>", "/opt/lampp/htdocs/sinai_school_october_cms/themes/default/pages/home.htm", "");
    }
}
