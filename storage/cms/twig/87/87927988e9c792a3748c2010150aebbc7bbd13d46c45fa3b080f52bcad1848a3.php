<?php

/* /Applications/MAMP/htdocs/sinai_school_october_cms/themes/default/partials/site/footer.htm */
class __TwigTemplate_84e62ea4ec4c183d2dfec36d59d4c6018341d840c057f873c7912f33cb29b6d5 extends Twig_Template
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
        echo "<div class=\"footer-content\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"footer-col col-lg-2 col-md-4 col-12 no-padding-left-and-right about\" style=\"margin-right: 24px;\">
                        <div class=\"footer-col-inner no-padding-left-and-right\">
                            <h3>Administration</h3>
                            <ul>
                                <li><a href=\"about.html\"><i class=\"fas fa-caret-right\"></i>Organigrame</a></li>
                                <li><a href=\"contact.html\"><i class=\"fas fa-caret-right\"></i>Resultats et examens</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"footer-col col-lg-2 col-md-4 col-12 no-padding-left-and-right about\" style=\"margin-right: 24px;\">
                        <div class=\"footer-col-inner no-padding-left-and-right\" style=\"width: 109%;\">
                            <h3>Enseignants</h3>
                            <ul>
                                <li><a href=\"about.html\"><i class=\"fas fa-caret-right\"></i>Infos aux Enseignants</a></li>
                                <li><a href=\"contact.html\"><i class=\"fas fa-caret-right\"></i>Activités de fin de trimestre</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"footer-col col-lg-2 col-md-4 col-12 no-padding-left-and-right about\">
                        <div class=\"footer-col-inner no-padding-left-and-right\">
                            <h3>Vie Scolaire</h3>
                            <ul>
                                <li><a href=\"about.html\"><i class=\"fas fa-caret-right\"></i>Clubs d'activités</a></li>
                                <li><a href=\"contact.html\"><i class=\"fas fa-caret-right\"></i>Conseil Scolaire</a></li>
                                <li><a href=\"contact.html\"><i class=\"fas fa-caret-right\"></i>Galerie</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"footer-col col-lg-2 col-md-4 col-12 no-padding-left-and-right about\" style=\"margin-right: 24px;\">
                        <div class=\"footer-col-inner no-padding-left-and-right\">
                            <h3>Espace Elèves</h3>
                            <ul>
                                <li><a href=\"about.html\"><i class=\"fas fa-caret-right\"></i>Règlement intérieur</a></li>
                                <li><a href=\"";
        // line 37
        echo url("emplois-du-temps");
        echo "\"><i class=\"fas fa-caret-right\"></i>Emplois du temps élève</a></li>
                                <li><a href=\"contact.html\"><i class=\"fas fa-caret-right\"></i>Devoirs de niveaux</a></li>
                                <li><a href=\"contact.html\"><i class=\"fas fa-caret-right\"></i>Bibliothèque numérique</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"footer-col col-lg-3 col-md-4 col-12 no-padding-left-and-right about\">
                        <div class=\"footer-col-inner no-padding-left-and-right\">
                            <h3>Parents d'élèves</h3>
                            <ul>
                                <li><a href=\"about.html\"><i class=\"fas fa-caret-right\"></i>Suivre mon élève</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"footer-col col-lg-8 col-md-4 col-12 no-padding-left-and-right newsletter\">
                        <div class=\"footer-col-inner no-padding-left-and-right\">
                            <h3 style=\"margin-bottom: 2px;\">Joignez-vous à notre liste d'envoi</h3>
                            <p style=\"margin-bottom: 6px;border-bottom-width: 1px;\">Abonnez-vous pour recevoir notre lettre d'information</p>
                            <form class=\"subscribe-form\">
                                <div class=\"form-group\">
                                    <input type=\"email\" class=\"form-control\" placeholder=\"Entrez votre mail\" />
                                </div>
                                <input class=\"btn btn-theme btn-subscribe\" type=\"submit\" value=\"Abonnez-vous\">
                            </form>
                        </div>
                    </div>
                    <div class=\"footer-col col-lg-4 col-12 contact\">
                        <div class=\"footer-col-inner\" style=\"margin-left: 12%;\">
                            <h3 style=\"margin-bottom: 12px;\">Contactez-nous</h3>
                            <div class=\"row\">
                                <p class=\"tel col-lg-12 col-md-4 col-12\" style=\"margin-bottom: 4px;\"><i class=\"fas fa-phone\"></i>";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["parametrages"] ?? null), "number_front", []), "html", null, true);
        echo "</p>
                                <p class=\"email col-lg-12 col-md-4 col-12\" style=\"margin-bottom: 14px;\"><i class=\"fas fa-envelope\"></i><a href=\"#\">";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["parametrages"] ?? null), "email_front", []), "html", null, true);
        echo "</a></p>  
                            </div>
                        </div>            
                    </div>  
                </div>   
            </div>        
        </div>
        <div class=\"bottom-bar\">
            <div class=\"container\">
                <div class=\"row\">
                    <small class=\"copyright col-lg-6 col-12\">Sinai 2019 @ <a href=\"http://www.sinai.com\">www.sinai.com</a></small>
                    <ul class=\"social float-right col-lg-6 col-12\">
                        <li><a href=\"#\" ><i class=\"fab fa-twitter\"></i></a></li>
                        <li><a href=\"#\" ><i class=\"fab fa-facebook-f\"></i></a></li>
                        <li><a href=\"#\" ><i class=\"fab fa-youtube\"></i></a></li>
                        <li><a href=\"#\" ><i class=\"fab fa-linkedin-in\"></i></a></li>
                        <li><a href=\"#\" ><i class=\"fab fa-google-plus-g\"></i></a></li>
                        <li><a href=\"#\" ><i class=\"fab fa-pinterest\"></i></a></li>
                        <li><a href=\"#\" ><i class=\"fab fa-skype\"></i></a></li> 
                        <li class=\"row-end\"><a href=\"#\" ><i class=\"fas fa-rss\"></i></a></li>
                    </ul><!--//social-->
                </div><!--//row-->
            </div><!--//container-->
        </div><!--//bottom-bar-->";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/sinai_school_october_cms/themes/default/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 70,  96 => 69,  61 => 37,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"footer-content\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"footer-col col-lg-2 col-md-4 col-12 no-padding-left-and-right about\" style=\"margin-right: 24px;\">
                        <div class=\"footer-col-inner no-padding-left-and-right\">
                            <h3>Administration</h3>
                            <ul>
                                <li><a href=\"about.html\"><i class=\"fas fa-caret-right\"></i>Organigrame</a></li>
                                <li><a href=\"contact.html\"><i class=\"fas fa-caret-right\"></i>Resultats et examens</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"footer-col col-lg-2 col-md-4 col-12 no-padding-left-and-right about\" style=\"margin-right: 24px;\">
                        <div class=\"footer-col-inner no-padding-left-and-right\" style=\"width: 109%;\">
                            <h3>Enseignants</h3>
                            <ul>
                                <li><a href=\"about.html\"><i class=\"fas fa-caret-right\"></i>Infos aux Enseignants</a></li>
                                <li><a href=\"contact.html\"><i class=\"fas fa-caret-right\"></i>Activités de fin de trimestre</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"footer-col col-lg-2 col-md-4 col-12 no-padding-left-and-right about\">
                        <div class=\"footer-col-inner no-padding-left-and-right\">
                            <h3>Vie Scolaire</h3>
                            <ul>
                                <li><a href=\"about.html\"><i class=\"fas fa-caret-right\"></i>Clubs d'activités</a></li>
                                <li><a href=\"contact.html\"><i class=\"fas fa-caret-right\"></i>Conseil Scolaire</a></li>
                                <li><a href=\"contact.html\"><i class=\"fas fa-caret-right\"></i>Galerie</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"footer-col col-lg-2 col-md-4 col-12 no-padding-left-and-right about\" style=\"margin-right: 24px;\">
                        <div class=\"footer-col-inner no-padding-left-and-right\">
                            <h3>Espace Elèves</h3>
                            <ul>
                                <li><a href=\"about.html\"><i class=\"fas fa-caret-right\"></i>Règlement intérieur</a></li>
                                <li><a href=\"{{ url('emplois-du-temps') }}\"><i class=\"fas fa-caret-right\"></i>Emplois du temps élève</a></li>
                                <li><a href=\"contact.html\"><i class=\"fas fa-caret-right\"></i>Devoirs de niveaux</a></li>
                                <li><a href=\"contact.html\"><i class=\"fas fa-caret-right\"></i>Bibliothèque numérique</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"footer-col col-lg-3 col-md-4 col-12 no-padding-left-and-right about\">
                        <div class=\"footer-col-inner no-padding-left-and-right\">
                            <h3>Parents d'élèves</h3>
                            <ul>
                                <li><a href=\"about.html\"><i class=\"fas fa-caret-right\"></i>Suivre mon élève</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"footer-col col-lg-8 col-md-4 col-12 no-padding-left-and-right newsletter\">
                        <div class=\"footer-col-inner no-padding-left-and-right\">
                            <h3 style=\"margin-bottom: 2px;\">Joignez-vous à notre liste d'envoi</h3>
                            <p style=\"margin-bottom: 6px;border-bottom-width: 1px;\">Abonnez-vous pour recevoir notre lettre d'information</p>
                            <form class=\"subscribe-form\">
                                <div class=\"form-group\">
                                    <input type=\"email\" class=\"form-control\" placeholder=\"Entrez votre mail\" />
                                </div>
                                <input class=\"btn btn-theme btn-subscribe\" type=\"submit\" value=\"Abonnez-vous\">
                            </form>
                        </div>
                    </div>
                    <div class=\"footer-col col-lg-4 col-12 contact\">
                        <div class=\"footer-col-inner\" style=\"margin-left: 12%;\">
                            <h3 style=\"margin-bottom: 12px;\">Contactez-nous</h3>
                            <div class=\"row\">
                                <p class=\"tel col-lg-12 col-md-4 col-12\" style=\"margin-bottom: 4px;\"><i class=\"fas fa-phone\"></i>{{ parametrages.number_front }}</p>
                                <p class=\"email col-lg-12 col-md-4 col-12\" style=\"margin-bottom: 14px;\"><i class=\"fas fa-envelope\"></i><a href=\"#\">{{ parametrages.email_front }}</a></p>  
                            </div>
                        </div>            
                    </div>  
                </div>   
            </div>        
        </div>
        <div class=\"bottom-bar\">
            <div class=\"container\">
                <div class=\"row\">
                    <small class=\"copyright col-lg-6 col-12\">Sinai 2019 @ <a href=\"http://www.sinai.com\">www.sinai.com</a></small>
                    <ul class=\"social float-right col-lg-6 col-12\">
                        <li><a href=\"#\" ><i class=\"fab fa-twitter\"></i></a></li>
                        <li><a href=\"#\" ><i class=\"fab fa-facebook-f\"></i></a></li>
                        <li><a href=\"#\" ><i class=\"fab fa-youtube\"></i></a></li>
                        <li><a href=\"#\" ><i class=\"fab fa-linkedin-in\"></i></a></li>
                        <li><a href=\"#\" ><i class=\"fab fa-google-plus-g\"></i></a></li>
                        <li><a href=\"#\" ><i class=\"fab fa-pinterest\"></i></a></li>
                        <li><a href=\"#\" ><i class=\"fab fa-skype\"></i></a></li> 
                        <li class=\"row-end\"><a href=\"#\" ><i class=\"fas fa-rss\"></i></a></li>
                    </ul><!--//social-->
                </div><!--//row-->
            </div><!--//container-->
        </div><!--//bottom-bar-->", "/Applications/MAMP/htdocs/sinai_school_october_cms/themes/default/partials/site/footer.htm", "");
    }
}
