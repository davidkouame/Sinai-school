<?php

/* /opt/lampp/htdocs/sinai_school_october_cms/themes/default/pages/organigrame.htm */
class __TwigTemplate_4d5a5b1df12822e124e79b7d5ea3b4b0fced952a93659398f7ed947c2fdfb2ac extends Twig_Template
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
        echo "<link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/organigrame.css");
        echo "\" rel=\"stylesheet\">

<div class=\"wrapper\">

    ";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "
    <div class=\"content container\">


        <div class=\"row cols-wrapper\">
            <div class=\"col-lg-9 col-12\">
                    <div id=\"wrapper\">
                            <div id=\"container\">
                        
                                <ol class=\"organizational-chart\">
                                    <li>
                                        <div>
                                            <h1>CE</h1>
                                        </div>
                                        <ol>
                                            <li>
                                                <div>
                                                    <h2>Services Rattachés</h2>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h2>Intendance</h2>
                                                </div>
                                                <ol>
                                                    <li>
                                                        <div>
                                                            <h3>Services tech.et d'entretien</h3>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <h3>Elèvres</h3>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </li>
                                            <li>
                                                <div>
                                                    <h2>ACE</h2>
                                                </div>
                                                <ol>
                                                    <li>
                                                        <div>
                                                            <h3>Insp.d'Orientation</h3>
                                                        </div>
                                                        <ol>
                                                            <li>
                                                                <div>
                                                                    <h4>Elèves</h4>
                                                                </div>
                                                            </li>
                                                        </ol>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <h3>Insp.d'Education</h3>
                                                        </div>
                                                        <ol>
                                                            <li>
                                                                <div>
                                                                    <h5>Educateurs</h5>
                                                                </div>
                                                                <ol>
                                                                    <li>
                                                                        <div>
                                                                            <h6>Elèves</h6>
                                                                        </div>
                                                                    </li>
                                                                </ol>
                                                            </li>
                                                        </ol>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <h3>I.E.S</h3>
                                                        </div>
                                                        <ol>
                                                            <li>
                                                                <div>
                                                                    <h5>Elèves</h5>
                                                                </div>
                                                            </li>
                                                        </ol>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <h3>Enseignants</h3>
                                                        </div>
                                                        <ol>
                                                            <li>
                                                                <div>
                                                                    <h5>Elèves</h5>
                                                                </div>
                                                            </li>
                                                        </ol>
                                                    </li>
                                                </ol>
                                            </li>
                                        </ol>
                                    </li>
                                </ol>
                        
                            </div>
                        </div>
            </div>
            <div class=\"col-lg-3 col-12\">
                ";
        // line 113
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("mot_du_directeur"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 114
        echo "
                ";
        // line 115
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("majeur_promotion"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 116
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/sinai_school_october_cms/themes/default/pages/organigrame.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 116,  151 => 115,  148 => 114,  144 => 113,  35 => 6,  31 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<link href=\"{{ 'assets/css/organigrame.css'|theme }}\" rel=\"stylesheet\">

<div class=\"wrapper\">

    {% partial 'site/header' %}

    <div class=\"content container\">


        <div class=\"row cols-wrapper\">
            <div class=\"col-lg-9 col-12\">
                    <div id=\"wrapper\">
                            <div id=\"container\">
                        
                                <ol class=\"organizational-chart\">
                                    <li>
                                        <div>
                                            <h1>CE</h1>
                                        </div>
                                        <ol>
                                            <li>
                                                <div>
                                                    <h2>Services Rattachés</h2>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h2>Intendance</h2>
                                                </div>
                                                <ol>
                                                    <li>
                                                        <div>
                                                            <h3>Services tech.et d'entretien</h3>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <h3>Elèvres</h3>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </li>
                                            <li>
                                                <div>
                                                    <h2>ACE</h2>
                                                </div>
                                                <ol>
                                                    <li>
                                                        <div>
                                                            <h3>Insp.d'Orientation</h3>
                                                        </div>
                                                        <ol>
                                                            <li>
                                                                <div>
                                                                    <h4>Elèves</h4>
                                                                </div>
                                                            </li>
                                                        </ol>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <h3>Insp.d'Education</h3>
                                                        </div>
                                                        <ol>
                                                            <li>
                                                                <div>
                                                                    <h5>Educateurs</h5>
                                                                </div>
                                                                <ol>
                                                                    <li>
                                                                        <div>
                                                                            <h6>Elèves</h6>
                                                                        </div>
                                                                    </li>
                                                                </ol>
                                                            </li>
                                                        </ol>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <h3>I.E.S</h3>
                                                        </div>
                                                        <ol>
                                                            <li>
                                                                <div>
                                                                    <h5>Elèves</h5>
                                                                </div>
                                                            </li>
                                                        </ol>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <h3>Enseignants</h3>
                                                        </div>
                                                        <ol>
                                                            <li>
                                                                <div>
                                                                    <h5>Elèves</h5>
                                                                </div>
                                                            </li>
                                                        </ol>
                                                    </li>
                                                </ol>
                                            </li>
                                        </ol>
                                    </li>
                                </ol>
                        
                            </div>
                        </div>
            </div>
            <div class=\"col-lg-3 col-12\">
                {% content 'mot_du_directeur' %}

                {% content 'majeur_promotion' %}
            </div>
        </div>
    </div>
</div>", "/opt/lampp/htdocs/sinai_school_october_cms/themes/default/pages/organigrame.htm", "");
    }
}
