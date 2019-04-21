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
    <header class=\"header\">
        <div class=\"top-bar\">
            <div class=\"container\">
                <div class=\"row\">
                    <ul class=\"social-icons col-md-6 col-12 d-none d-md-block\">
                        <li><a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fab fa-youtube\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fab fa-google-plus-g\"></i></a></li>
                        <li class=\"row-end\"><a href=\"#\"><i class=\"fas fa-rss\"></i></a></li>
                    </ul>
                    <form class=\"col-md-6 col-12 search-form\" role=\"search\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher sur le site ...\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-theme\">Go</button>
                    </form>
                </div>
            </div>
        </div>
        <!--//to-bar-->

        <div class=\"header-main container\">
            <div class=\"row\">
                <h1 class=\"logo col-md-4 col-12\">
                    <a href=\"index.html\"><img id=\"logo\" src=\"https://themes.3rdwavemedia.com/college-green/bs4/3.0/assets/images/logo.png\"
                            alt=\"Logo\"></a>
                </h1>
                <!--//logo-->
                <div class=\"info col-md-8 col-12\">
                    <ul class=\"menu-top float-right d-none d-md-block\">
                        <li class=\"divider\"><a href=\"index.html\">Home</a></li>
                        <li class=\"divider\"><a href=\"faq.html\">FAQ</a></li>
                        <li><a href=\"contact.html\">Contact</a></li>
                    </ul>
                    <!--//menu-top-->
                    <br />
                    <div class=\"contact float-right\">
                        <p class=\"phone\"><i class=\"fas fa-phone\"></i>Appelez nous aujourd'hui au 20 34 56 76</p>
                        <p class=\"email\"><i class=\"fas fa-envelope\"></i><a href=\"#\">info-nom-ecole@sinsai.com</a></p>
                    </div>
                    <!--//contact-->
                </div>
                <!--//info-->
            </div>
            <!--//row-->
        </div>
        <!--//header-main-->
    </header>

    <div class=\"main-nav-wrapper\">
        <div class=\"container\">
            <nav class=\"main-nav navbar navbar-expand-md\" role=\"navigation\">
                <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <!--//nav-toggle-->

                <div class=\"navbar-collapse collapse\" id=\"navbar-collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"nav-item\"><a class=\"active nav-link\" href=\"index.html\">Home</a></li>

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown-1\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Administration <i
                                    class=\"fas fa-angle-down\"></i></a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <a class=\"dropdown-item\" href=\"javascript:void(0)\">Organigrame</a>
                                <a class=\"dropdown-item\" href=\"javascript:void(0)\">Resultats et Examens</a>
                            </div>
                            <!--//dropdown-menu-->
                        </li>

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown-2\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Enseignants <i class=\"fas fa-angle-down\"></i></a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown-2\">
                                <a class=\"dropdown-item\" href=\"javascript:void(0)\">Infos aux Enseignants</a>
                                <a class=\"dropdown-item\" href=\"javascript:void(0)\" style=\"width: 109%;\">Activites de
                                    fin de trimestre</a>
                            </div>
                        </li>

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"0\"
                                data-close-others=\"false\" href=\"#\">Vie scolaire <i class=\"fas fa-angle-down\"></i></a>
                            <div class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"javascript:void(0)\">Clubs d'activites</a>
                                <a class=\"dropdown-item\" href=\"javascript:void(0)\">Conseil scolaire</a>
                                <a class=\"dropdown-item\" href=\"javascript:void(0)\">Galerie</a>
                            </div>
                        </li>

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"0\"
                                data-close-others=\"false\" href=\"#\">Espace Elèves <i class=\"fas fa-angle-down\"></i></a>
                            <div class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"javascript:void(0)\">Règlement intérieur</a>
                                <a class=\"dropdown-item\" href=\"javascript:void(0)\">Infos aux élèves</a>
                                <a class=\"dropdown-item\" href=\"javascript:void(0)\">Emplois du temps eleve</a>
                                <a class=\"dropdown-item\" href=\"javascript:void(0)\">Devoirs de niveau</a>
                                <a class=\"dropdown-item\" href=\"javascript:void(0)\">Bibliotheque numérique</a>
                            </div>
                        </li>

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"0\"
                                data-close-others=\"false\" href=\"#\">Parents d'Elèves <i class=\"fas fa-angle-down\"></i></a>
                            <div class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"javascript:void(0)\">Suivre mes élèves </a>
                                <!-- c'est programme qui a pour de suivre les moyennes de son enfant -->
                                <a class=\"dropdown-item\" href=\"javascript:void(0)\">Notes-Moyennes-Bulletins</a>
                            </div>
                        </li>

                        <li class=\"nav-item\"><a class=\"nav-link\" href=javascript:void(0)>Contact</a></li>
                    </ul>
                    <!--//nav-->
                </div>
                <!--//navabr-collapse-->

            </nav>
            <!--//main-nav-->
        </div>
        <!--//container-->
    </div>

    <div class=\"content container\">
        <div id=\"promo-slider\" class=\"slider flexslider\" style='margin-bottom: 23px;'>
            <ul class=\"slides\">
                <li>
                    <img src=\"";
        // line 137
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slide-2.jpg");
        echo "\" alt=\"\" />
                    <p class=\"flex-caption\">
                        <span class=\"main\">Rejoignez \"Nom de l'école\"</span>
                        <br />
                        <span class=\"secondary clearfix\">Une seule école qui forme les élites de demain</span>
                    </p>
                </li>
                <li>
                    <img src=\"";
        // line 145
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slide-2.jpg");
        echo "\" alt=\"\" />
                    <p class=\"flex-caption\">
                        <span class=\"main\">Come to our Open Days</span>
                        <br />
                        <span class=\"secondary clearfix\">Une seule école qui forme les élites de demain</span>
                    </p>
                </li>
                <li>
                    <img src=\"";
        // line 153
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slide-2.jpg");
        echo "\" alt=\"\" />
                    <p class=\"flex-caption\">
                        <span class=\"main\">Discover online courses</span>
                        <br />
                        <span class=\"secondary clearfix\">Une seule école qui forme les élites de demain</span>
                    </p>
                </li>
                <li>
                    <img src=\"";
        // line 161
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slide-2.jpg");
        echo "\" alt=\"\" />
                    <p class=\"flex-caption\">
                        <span class=\"main\">Nam ultricies accumsan pellentesque</span>
                        <br />
                        <span class=\"secondary clearfix\">Une seule école qui forme les élites de demain</span>
                    </p>
                </li>
            </ul>
        </div>
        <div class=\"row cols-wrapper\">
            <div class=\"col-lg-9 col-12\">
                <section class=\"news\">
                    <div class='section-header clearfix'>
                        <div class=\"col-md-12\">
                            <div class=\"row\" style=\"padding-bottom: 5px;border-bottom: 2px #e2e2e2 solid;margin-bottom: 20px;\">
                                <div class=\"col-lg-10\" style=\"padding-left: 0px;\">
                                    <h1 class=\"section-title title col-md-2\" style=\"font-size: 1.2rem;padding-left: 0px;margin-bottom: 0px;\">Actualités</h1>
                                </div>
                                <div class=\"col-md-2\" style=\"text-align: right;padding-right: 0px;\">
                                    <ul class=\"list-inline\" style=\"padding-top: 4px;margin-bottom: 0px;\">
                                        <li>
                                            <a href=\"http://news.educarriere.ci/rubrique-education-formation\">Voir <svg
                                                    class=\"svg-inline--fa fa-plus fa-w-14\" aria-hidden=\"true\"
                                                    data-prefix=\"fa\" data-icon=\"plus\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\"
                                                    viewBox=\"0 0 448 512\" data-fa-i2svg=\"\">
                                                    <path fill=\"currentColor\" d=\"M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z\"></path>
                                                </svg><!-- <i class=\"fa fa-plus\"></i> --></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"section-content clearfix\" style='padding-left: 0px;'>
                        <div id=\"news-carousel\" class=\"news-carousel carousel slide\">
                            <div class=\"carousel-inner\">

                                <div class=\"item carousel-item active\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-3\">
                                            <figure class='jss374' style='background-image: url(\"https://oc-course.imgix.net/courses/2459331/2459331_teaser_picture_1547548876.jpg%3Fr%3Dpad?auto=compress,format&q=80\");'></figure>
                                        </div>
                                        <div class=\"col-lg-9\">
                                            <h2 class=\"title\"><a href=\"news-single.html\">Phasellus scelerisque metus</a></h2>
                                            <p>
                                                Suspendisse purus felis, porttitor
                                                quis sollicitudin sit amet, elementum et
                                                tortor. Praesent lacinia magna in malesuada
                                                vestibulum. Pellentesque urna libero.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"item carousel-item active\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-3\">
                                            <figure class='jss374' style='background-image: url(\"https://oc-course.imgix.net/courses/2459331/2459331_teaser_picture_1547548876.jpg%3Fr%3Dpad?auto=compress,format&q=80\");'></figure>
                                        </div>
                                        <div class=\"col-lg-9\">
                                            <h2 class=\"title\"><a href=\"news-single.html\">Phasellus scelerisque metus</a></h2>
                                            <p>
                                                Suspendisse purus felis, porttitor
                                                quis sollicitudin sit amet, elementum et
                                                tortor. Praesent lacinia magna in malesuada
                                                vestibulum. Pellentesque urna libero.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"item carousel-item active\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-3\">
                                            <figure class='jss374' style='background-image: url(\"https://oc-course.imgix.net/courses/2459331/2459331_teaser_picture_1547548876.jpg%3Fr%3Dpad?auto=compress,format&q=80\");'></figure>
                                        </div>
                                        <div class=\"col-lg-9\">
                                            <h2 class=\"title\"><a href=\"news-single.html\">Phasellus scelerisque metus</a></h2>
                                            <p>
                                                Suspendisse purus felis, porttitor
                                                quis sollicitudin sit amet, elementum et
                                                tortor. Praesent lacinia magna in malesuada
                                                vestibulum. Pellentesque urna libero.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"item carousel-item active\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-3\">
                                            <figure class='jss374' style='background-image: url(\"https://oc-course.imgix.net/courses/2459331/2459331_teaser_picture_1547548876.jpg%3Fr%3Dpad?auto=compress,format&q=80\");'></figure>
                                        </div>
                                        <div class=\"col-lg-9\">
                                            <h2 class=\"title\"><a href=\"news-single.html\">Phasellus scelerisque metus</a></h2>
                                            <p>
                                                Suspendisse purus felis, porttitor
                                                quis sollicitudin sit amet, elementum et
                                                tortor. Praesent lacinia magna in malesuada
                                                vestibulum. Pellentesque urna libero.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"item carousel-item active\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-3\">
                                            <figure class='jss374' style='background-image: url(\"https://oc-course.imgix.net/courses/2459331/2459331_teaser_picture_1547548876.jpg%3Fr%3Dpad?auto=compress,format&q=80\");'></figure>
                                        </div>
                                        <div class=\"col-lg-9\">
                                            <h2 class=\"title\"><a href=\"news-single.html\">Phasellus scelerisque metus</a></h2>
                                            <p>
                                                Suspendisse purus felis, porttitor
                                                quis sollicitudin sit amet, elementum et
                                                tortor. Praesent lacinia magna in malesuada
                                                vestibulum. Pellentesque urna libero.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--//carousel-inner-->
                        </div>
                        <!--//news-carousel-->
                    </div>
                    <!--//section-content-->
                </section>
            </div>
            <div class=\"col-lg-3 col-12\">
                <section class=\"testimonials\" data-click=\"\" style=\"cursor: pointer;margin-bottom: 15px;\">
                    <h1 class=\"section-heading text-highlight\"><span class=\"line\"> Mot du directeur</span></h1>
                    <!--<div class=\"carousel-controls\">
                          <a class=\"prev\" href=\"#testimonials-carousel\" data-slide=\"prev\"><i class=\"fas fa-caret-left\"></i></a>
                          <a class=\"next\" href=\"#testimonials-carousel\" data-slide=\"next\"><i class=\"fas fa-caret-right\"></i></a>
                      </div>-->
                    <!--//carousel-controls-->
                    <div class=\"section-content\">
                        <div class=\"testimonials-carousel carousel slide\">
                            <div class=\"carousel-inner\">
                                <div class=\"carousel-item item active\" style='min-height: 188px;'>
                                    <blockquote class=\"quote\">
                                        <p>
                                            <i class=\"fas fa-quote-left\"></i>I’m very happy interdum eget ipsum. Nunc
                                            pulvinar ut nulla eget
                                            sollicitudin. In hac habitasse platea dictumst. Duis luctus...</p>
                                    </blockquote>
                                    <div class=\"source\" style='padding-top: 4px;'>
                                        <p class=\"people\"><span class=\"name\">Marissa Spencer</span><br /><span class=\"title\">Curabitur
                                                commodo</span></p>
                                        <img class=\"profile\" src=\"https://themes.3rdwavemedia.com/college-green/bs4/3.0/assets/images/testimonials/profile-1.png\"
                                            alt=\"\" style=\"border: 0px;right: 0px;\" />
                                    </div>
                                </div>
                                <!--//item-->
                            </div>
                            <!--//carousel-inner-->
                        </div>
                        <!--//testimonials-carousel-->
                    </div>
                    <!--//section-content-->
                </section>
                <!--//testimonials-->
                <section class=\"testimonials\">
                    <h1 class=\"section-heading text-highlight\"><span class=\"line\" style='font-size: 18px;'>Majeur de
                            promotion</span></h1>
                    <h3 class=\"section-heading text-highlight\" style='margin-bottom: 4px;margin-top: -31px;text-align: center;'>
                        <span class=\"line\" style='font-size: 15px;color: #444444;'>Didja Kobenan .</span>
                    </h3>
                    <a target=\"_blank\" href=\"img_forest.jpg\">
                        <img src=\"https://www.w3schools.com/howto/img_forest.jpg\" alt=\"Forest\" style=\"width:209px;height: 146px;\">
                    </a>
                </section>
            </div>
            <!--//col-md-3-->
        </div>
        <!--//cols-wrapper-->
        <!--
          <section class=\"promo box box-dark\">     
            <div class=\"row\">  
                <div class=\"col-lg-9 col-12\">
                <h1 class=\"section-heading\">Why College Green</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed bibendum orci eget nulla mattis, quis viverra tellus porta. Donec vitae neque ut velit eleifend commodo. Maecenas turpis odio, placerat eu lorem ut, suscipit commodo augue.  </p>   
                </div>  
                <div class=\"col-lg-3 col-12\">
                    <a class=\"btn btn-cta\" href=\"#\"><i class=\"fas fa-play-circle\"></i>Apply Now</a>  
                </div>
            </div>
          </section>
        -->
        <!--
          <section class=\"awards\">
              <div id=\"awards-carousel\" class=\"awards-carousel carousel slide\">
                  <div class=\"carousel-inner\">
                      <div class=\"carousel-item item active\">
                          <ul class=\"logos row\">
                            
                              <li class=\"col-md-2 col-4\">
                                  <a href=\"#\"><img class=\"img-fluid\" src=\"https://themes.3rdwavemedia.com/college-green/bs4/3.0/assets/images/awards/award1.jpg\"  alt=\"\" /></a>
                              </li>
                              <li class=\"col-md-2 col-4\">
                                  <a href=\"#\"><img class=\"img-fluid\" src=\"https://themes.3rdwavemedia.com/college-green/bs4/3.0/assets/images/awards/award2.jpg\"  alt=\"\" /></a>
                              </li>
                              <li class=\"col-md-2 col-4\">
                                  <a href=\"#\"><img class=\"img-fluid\" src=\"https://themes.3rdwavemedia.com/college-green/bs4/3.0/assets/images/awards/award3.jpg\"  alt=\"\" /></a>
                              </li>
                              <li class=\"col-md-2 col-4\">
                                  <a href=\"#\"><img class=\"img-fluid\" src=\"https://themes.3rdwavemedia.com/college-green/bs4/3.0/assets/images/awards/award4.jpg\"  alt=\"\" /></a>
                              </li>
                              <li class=\"col-md-2 col-4\">
                                  <a href=\"#\"><img class=\"img-fluid\" src=\"https://themes.3rdwavemedia.com/college-green/bs4/3.0/assets/images/awards/award5.jpg\"  alt=\"\" /></a>
                              </li>
                              <li class=\"col-md-2 col-4\">
                                  <a href=\"#\"><img class=\"img-fluid\" src=\"https://themes.3rdwavemedia.com/college-green/bs4/3.0/assets/images/awards/award6.jpg\"  alt=\"\" /></a>
                              </li>             
                          </ul>
                      </div>
                      
                      <div class=\"carousel-item item\">
                          <ul class=\"logos row\">
                              <li class=\"col-md-2 col-4\">
                                  <img class=\"img-fluid\" src=\"https://themes.3rdwavemedia.com/college-green/bs4/3.0/assets/images/awards/award7.jpg\"  alt=\"\" />
                              </li>
                              <li class=\"col-md-2 col-4\">
                                  <img class=\"img-fluid\" src=\"https://themes.3rdwavemedia.com/college-green/bs4/3.0/assets/images/awards/award6.jpg\"  alt=\"\" />
                              </li>
                              <li class=\"col-md-2 col-4\">
                                  <img class=\"img-fluid\" src=\"https://themes.3rdwavemedia.com/college-green/bs4/3.0/assets/images/awards/award5.jpg\"  alt=\"\" />
                              </li>
                              <li class=\"col-md-2 col-4\">
                                  <img class=\"img-fluid\" src=\"https://themes.3rdwavemedia.com/college-green/bs4/3.0/assets/images/awards/award4.jpg\"  alt=\"\" />
                              </li>
                              <li class=\"col-md-2 col-4\">
                                  <img class=\"img-fluid\" src=\"https://themes.3rdwavemedia.com/college-green/bs4/3.0/assets/images/awards/award3.jpg\"  alt=\"\" />
                              </li>
                              <li class=\"col-md-2 col-4\">
                                  <img class=\"img-fluid\" src=\"https://themes.3rdwavemedia.com/college-green/bs4/3.0/assets/images/awards/award2.jpg\"  alt=\"\" />
                              </li>             
                          </ul>
                      </div>
                  </div>
                  <a class=\"left carousel-control\" href=\"#awards-carousel\" data-slide=\"prev\">
                      <i class=\"fas fa-angle-left\"></i>
                  </a>
                  <a class=\"right carousel-control\" href=\"#awards-carousel\" data-slide=\"next\">
                      <i class=\"fas fa-angle-right\"></i>
                  </a>
              </div>
          </section>
          -->

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
        return array (  194 => 161,  183 => 153,  172 => 145,  161 => 137,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"wrapper\">
    <header class=\"header\">
        <div class=\"top-bar\">
            <div class=\"container\">
                <div class=\"row\">
                    <ul class=\"social-icons col-md-6 col-12 d-none d-md-block\">
                        <li><a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fab fa-youtube\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fab fa-google-plus-g\"></i></a></li>
                        <li class=\"row-end\"><a href=\"#\"><i class=\"fas fa-rss\"></i></a></li>
                    </ul>
                    <form class=\"col-md-6 col-12 search-form\" role=\"search\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher sur le site ...\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-theme\">Go</button>
                    </form>
                </div>
            </div>
        </div>
        <!--//to-bar-->

        <div class=\"header-main container\">
            <div class=\"row\">
                <h1 class=\"logo col-md-4 col-12\">
                    <a href=\"index.html\"><img id=\"logo\" src=\"https://themes.3rdwavemedia.com/college-green/bs4/3.0/assets/images/logo.png\"
                            alt=\"Logo\"></a>
                </h1>
                <!--//logo-->
                <div class=\"info col-md-8 col-12\">
                    <ul class=\"menu-top float-right d-none d-md-block\">
                        <li class=\"divider\"><a href=\"index.html\">Home</a></li>
                        <li class=\"divider\"><a href=\"faq.html\">FAQ</a></li>
                        <li><a href=\"contact.html\">Contact</a></li>
                    </ul>
                    <!--//menu-top-->
                    <br />
                    <div class=\"contact float-right\">
                        <p class=\"phone\"><i class=\"fas fa-phone\"></i>Appelez nous aujourd'hui au 20 34 56 76</p>
                        <p class=\"email\"><i class=\"fas fa-envelope\"></i><a href=\"#\">info-nom-ecole@sinsai.com</a></p>
                    </div>
                    <!--//contact-->
                </div>
                <!--//info-->
            </div>
            <!--//row-->
        </div>
        <!--//header-main-->
    </header>

    <div class=\"main-nav-wrapper\">
        <div class=\"container\">
            <nav class=\"main-nav navbar navbar-expand-md\" role=\"navigation\">
                <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <!--//nav-toggle-->

                <div class=\"navbar-collapse collapse\" id=\"navbar-collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"nav-item\"><a class=\"active nav-link\" href=\"index.html\">Home</a></li>

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown-1\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Administration <i
                                    class=\"fas fa-angle-down\"></i></a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <a class=\"dropdown-item\" href=\"javascript:void(0)\">Organigrame</a>
                                <a class=\"dropdown-item\" href=\"javascript:void(0)\">Resultats et Examens</a>
                            </div>
                            <!--//dropdown-menu-->
                        </li>

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown-2\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Enseignants <i class=\"fas fa-angle-down\"></i></a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown-2\">
                                <a class=\"dropdown-item\" href=\"javascript:void(0)\">Infos aux Enseignants</a>
                                <a class=\"dropdown-item\" href=\"javascript:void(0)\" style=\"width: 109%;\">Activites de
                                    fin de trimestre</a>
                            </div>
                        </li>

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"0\"
                                data-close-others=\"false\" href=\"#\">Vie scolaire <i class=\"fas fa-angle-down\"></i></a>
                            <div class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"javascript:void(0)\">Clubs d'activites</a>
                                <a class=\"dropdown-item\" href=\"javascript:void(0)\">Conseil scolaire</a>
                                <a class=\"dropdown-item\" href=\"javascript:void(0)\">Galerie</a>
                            </div>
                        </li>

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"0\"
                                data-close-others=\"false\" href=\"#\">Espace Elèves <i class=\"fas fa-angle-down\"></i></a>
                            <div class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"javascript:void(0)\">Règlement intérieur</a>
                                <a class=\"dropdown-item\" href=\"javascript:void(0)\">Infos aux élèves</a>
                                <a class=\"dropdown-item\" href=\"javascript:void(0)\">Emplois du temps eleve</a>
                                <a class=\"dropdown-item\" href=\"javascript:void(0)\">Devoirs de niveau</a>
                                <a class=\"dropdown-item\" href=\"javascript:void(0)\">Bibliotheque numérique</a>
                            </div>
                        </li>

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"0\"
                                data-close-others=\"false\" href=\"#\">Parents d'Elèves <i class=\"fas fa-angle-down\"></i></a>
                            <div class=\"dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"javascript:void(0)\">Suivre mes élèves </a>
                                <!-- c'est programme qui a pour de suivre les moyennes de son enfant -->
                                <a class=\"dropdown-item\" href=\"javascript:void(0)\">Notes-Moyennes-Bulletins</a>
                            </div>
                        </li>

                        <li class=\"nav-item\"><a class=\"nav-link\" href=javascript:void(0)>Contact</a></li>
                    </ul>
                    <!--//nav-->
                </div>
                <!--//navabr-collapse-->

            </nav>
            <!--//main-nav-->
        </div>
        <!--//container-->
    </div>

    <div class=\"content container\">
        <div id=\"promo-slider\" class=\"slider flexslider\" style='margin-bottom: 23px;'>
            <ul class=\"slides\">
                <li>
                    <img src=\"{{ 'assets/images/slide-2.jpg'|theme }}\" alt=\"\" />
                    <p class=\"flex-caption\">
                        <span class=\"main\">Rejoignez \"Nom de l'école\"</span>
                        <br />
                        <span class=\"secondary clearfix\">Une seule école qui forme les élites de demain</span>
                    </p>
                </li>
                <li>
                    <img src=\"{{ 'assets/images/slide-2.jpg'|theme }}\" alt=\"\" />
                    <p class=\"flex-caption\">
                        <span class=\"main\">Come to our Open Days</span>
                        <br />
                        <span class=\"secondary clearfix\">Une seule école qui forme les élites de demain</span>
                    </p>
                </li>
                <li>
                    <img src=\"{{ 'assets/images/slide-2.jpg'|theme }}\" alt=\"\" />
                    <p class=\"flex-caption\">
                        <span class=\"main\">Discover online courses</span>
                        <br />
                        <span class=\"secondary clearfix\">Une seule école qui forme les élites de demain</span>
                    </p>
                </li>
                <li>
                    <img src=\"{{ 'assets/images/slide-2.jpg'|theme }}\" alt=\"\" />
                    <p class=\"flex-caption\">
                        <span class=\"main\">Nam ultricies accumsan pellentesque</span>
                        <br />
                        <span class=\"secondary clearfix\">Une seule école qui forme les élites de demain</span>
                    </p>
                </li>
            </ul>
        </div>
        <div class=\"row cols-wrapper\">
            <div class=\"col-lg-9 col-12\">
                <section class=\"news\">
                    <div class='section-header clearfix'>
                        <div class=\"col-md-12\">
                            <div class=\"row\" style=\"padding-bottom: 5px;border-bottom: 2px #e2e2e2 solid;margin-bottom: 20px;\">
                                <div class=\"col-lg-10\" style=\"padding-left: 0px;\">
                                    <h1 class=\"section-title title col-md-2\" style=\"font-size: 1.2rem;padding-left: 0px;margin-bottom: 0px;\">Actualités</h1>
                                </div>
                                <div class=\"col-md-2\" style=\"text-align: right;padding-right: 0px;\">
                                    <ul class=\"list-inline\" style=\"padding-top: 4px;margin-bottom: 0px;\">
                                        <li>
                                            <a href=\"http://news.educarriere.ci/rubrique-education-formation\">Voir <svg
                                                    class=\"svg-inline--fa fa-plus fa-w-14\" aria-hidden=\"true\"
                                                    data-prefix=\"fa\" data-icon=\"plus\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\"
                                                    viewBox=\"0 0 448 512\" data-fa-i2svg=\"\">
                                                    <path fill=\"currentColor\" d=\"M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z\"></path>
                                                </svg><!-- <i class=\"fa fa-plus\"></i> --></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"section-content clearfix\" style='padding-left: 0px;'>
                        <div id=\"news-carousel\" class=\"news-carousel carousel slide\">
                            <div class=\"carousel-inner\">

                                <div class=\"item carousel-item active\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-3\">
                                            <figure class='jss374' style='background-image: url(\"https://oc-course.imgix.net/courses/2459331/2459331_teaser_picture_1547548876.jpg%3Fr%3Dpad?auto=compress,format&q=80\");'></figure>
                                        </div>
                                        <div class=\"col-lg-9\">
                                            <h2 class=\"title\"><a href=\"news-single.html\">Phasellus scelerisque metus</a></h2>
                                            <p>
                                                Suspendisse purus felis, porttitor
                                                quis sollicitudin sit amet, elementum et
                                                tortor. Praesent lacinia magna in malesuada
                                                vestibulum. Pellentesque urna libero.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"item carousel-item active\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-3\">
                                            <figure class='jss374' style='background-image: url(\"https://oc-course.imgix.net/courses/2459331/2459331_teaser_picture_1547548876.jpg%3Fr%3Dpad?auto=compress,format&q=80\");'></figure>
                                        </div>
                                        <div class=\"col-lg-9\">
                                            <h2 class=\"title\"><a href=\"news-single.html\">Phasellus scelerisque metus</a></h2>
                                            <p>
                                                Suspendisse purus felis, porttitor
                                                quis sollicitudin sit amet, elementum et
                                                tortor. Praesent lacinia magna in malesuada
                                                vestibulum. Pellentesque urna libero.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"item carousel-item active\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-3\">
                                            <figure class='jss374' style='background-image: url(\"https://oc-course.imgix.net/courses/2459331/2459331_teaser_picture_1547548876.jpg%3Fr%3Dpad?auto=compress,format&q=80\");'></figure>
                                        </div>
                                        <div class=\"col-lg-9\">
                                            <h2 class=\"title\"><a href=\"news-single.html\">Phasellus scelerisque metus</a></h2>
                                            <p>
                                                Suspendisse purus felis, porttitor
                                                quis sollicitudin sit amet, elementum et
                                                tortor. Praesent lacinia magna in malesuada
                                                vestibulum. Pellentesque urna libero.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"item carousel-item active\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-3\">
                                            <figure class='jss374' style='background-image: url(\"https://oc-course.imgix.net/courses/2459331/2459331_teaser_picture_1547548876.jpg%3Fr%3Dpad?auto=compress,format&q=80\");'></figure>
                                        </div>
                                        <div class=\"col-lg-9\">
                                            <h2 class=\"title\"><a href=\"news-single.html\">Phasellus scelerisque metus</a></h2>
                                            <p>
                                                Suspendisse purus felis, porttitor
                                                quis sollicitudin sit amet, elementum et
                                                tortor. Praesent lacinia magna in malesuada
                                                vestibulum. Pellentesque urna libero.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"item carousel-item active\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-3\">
                                            <figure class='jss374' style='background-image: url(\"https://oc-course.imgix.net/courses/2459331/2459331_teaser_picture_1547548876.jpg%3Fr%3Dpad?auto=compress,format&q=80\");'></figure>
                                        </div>
                                        <div class=\"col-lg-9\">
                                            <h2 class=\"title\"><a href=\"news-single.html\">Phasellus scelerisque metus</a></h2>
                                            <p>
                                                Suspendisse purus felis, porttitor
                                                quis sollicitudin sit amet, elementum et
                                                tortor. Praesent lacinia magna in malesuada
                                                vestibulum. Pellentesque urna libero.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--//carousel-inner-->
                        </div>
                        <!--//news-carousel-->
                    </div>
                    <!--//section-content-->
                </section>
            </div>
            <div class=\"col-lg-3 col-12\">
                <section class=\"testimonials\" data-click=\"\" style=\"cursor: pointer;margin-bottom: 15px;\">
                    <h1 class=\"section-heading text-highlight\"><span class=\"line\"> Mot du directeur</span></h1>
                    <!--<div class=\"carousel-controls\">
                          <a class=\"prev\" href=\"#testimonials-carousel\" data-slide=\"prev\"><i class=\"fas fa-caret-left\"></i></a>
                          <a class=\"next\" href=\"#testimonials-carousel\" data-slide=\"next\"><i class=\"fas fa-caret-right\"></i></a>
                      </div>-->
                    <!--//carousel-controls-->
                    <div class=\"section-content\">
                        <div class=\"testimonials-carousel carousel slide\">
                            <div class=\"carousel-inner\">
                                <div class=\"carousel-item item active\" style='min-height: 188px;'>
                                    <blockquote class=\"quote\">
                                        <p>
                                            <i class=\"fas fa-quote-left\"></i>I’m very happy interdum eget ipsum. Nunc
                                            pulvinar ut nulla eget
                                            sollicitudin. In hac habitasse platea dictumst. Duis luctus...</p>
                                    </blockquote>
                                    <div class=\"source\" style='padding-top: 4px;'>
                                        <p class=\"people\"><span class=\"name\">Marissa Spencer</span><br /><span class=\"title\">Curabitur
                                                commodo</span></p>
                                        <img class=\"profile\" src=\"https://themes.3rdwavemedia.com/college-green/bs4/3.0/assets/images/testimonials/profile-1.png\"
                                            alt=\"\" style=\"border: 0px;right: 0px;\" />
                                    </div>
                                </div>
                                <!--//item-->
                            </div>
                            <!--//carousel-inner-->
                        </div>
                        <!--//testimonials-carousel-->
                    </div>
                    <!--//section-content-->
                </section>
                <!--//testimonials-->
                <section class=\"testimonials\">
                    <h1 class=\"section-heading text-highlight\"><span class=\"line\" style='font-size: 18px;'>Majeur de
                            promotion</span></h1>
                    <h3 class=\"section-heading text-highlight\" style='margin-bottom: 4px;margin-top: -31px;text-align: center;'>
                        <span class=\"line\" style='font-size: 15px;color: #444444;'>Didja Kobenan .</span>
                    </h3>
                    <a target=\"_blank\" href=\"img_forest.jpg\">
                        <img src=\"https://www.w3schools.com/howto/img_forest.jpg\" alt=\"Forest\" style=\"width:209px;height: 146px;\">
                    </a>
                </section>
            </div>
            <!--//col-md-3-->
        </div>
        <!--//cols-wrapper-->
        <!--
          <section class=\"promo box box-dark\">     
            <div class=\"row\">  
                <div class=\"col-lg-9 col-12\">
                <h1 class=\"section-heading\">Why College Green</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed bibendum orci eget nulla mattis, quis viverra tellus porta. Donec vitae neque ut velit eleifend commodo. Maecenas turpis odio, placerat eu lorem ut, suscipit commodo augue.  </p>   
                </div>  
                <div class=\"col-lg-3 col-12\">
                    <a class=\"btn btn-cta\" href=\"#\"><i class=\"fas fa-play-circle\"></i>Apply Now</a>  
                </div>
            </div>
          </section>
        -->
        <!--
          <section class=\"awards\">
              <div id=\"awards-carousel\" class=\"awards-carousel carousel slide\">
                  <div class=\"carousel-inner\">
                      <div class=\"carousel-item item active\">
                          <ul class=\"logos row\">
                            
                              <li class=\"col-md-2 col-4\">
                                  <a href=\"#\"><img class=\"img-fluid\" src=\"https://themes.3rdwavemedia.com/college-green/bs4/3.0/assets/images/awards/award1.jpg\"  alt=\"\" /></a>
                              </li>
                              <li class=\"col-md-2 col-4\">
                                  <a href=\"#\"><img class=\"img-fluid\" src=\"https://themes.3rdwavemedia.com/college-green/bs4/3.0/assets/images/awards/award2.jpg\"  alt=\"\" /></a>
                              </li>
                              <li class=\"col-md-2 col-4\">
                                  <a href=\"#\"><img class=\"img-fluid\" src=\"https://themes.3rdwavemedia.com/college-green/bs4/3.0/assets/images/awards/award3.jpg\"  alt=\"\" /></a>
                              </li>
                              <li class=\"col-md-2 col-4\">
                                  <a href=\"#\"><img class=\"img-fluid\" src=\"https://themes.3rdwavemedia.com/college-green/bs4/3.0/assets/images/awards/award4.jpg\"  alt=\"\" /></a>
                              </li>
                              <li class=\"col-md-2 col-4\">
                                  <a href=\"#\"><img class=\"img-fluid\" src=\"https://themes.3rdwavemedia.com/college-green/bs4/3.0/assets/images/awards/award5.jpg\"  alt=\"\" /></a>
                              </li>
                              <li class=\"col-md-2 col-4\">
                                  <a href=\"#\"><img class=\"img-fluid\" src=\"https://themes.3rdwavemedia.com/college-green/bs4/3.0/assets/images/awards/award6.jpg\"  alt=\"\" /></a>
                              </li>             
                          </ul>
                      </div>
                      
                      <div class=\"carousel-item item\">
                          <ul class=\"logos row\">
                              <li class=\"col-md-2 col-4\">
                                  <img class=\"img-fluid\" src=\"https://themes.3rdwavemedia.com/college-green/bs4/3.0/assets/images/awards/award7.jpg\"  alt=\"\" />
                              </li>
                              <li class=\"col-md-2 col-4\">
                                  <img class=\"img-fluid\" src=\"https://themes.3rdwavemedia.com/college-green/bs4/3.0/assets/images/awards/award6.jpg\"  alt=\"\" />
                              </li>
                              <li class=\"col-md-2 col-4\">
                                  <img class=\"img-fluid\" src=\"https://themes.3rdwavemedia.com/college-green/bs4/3.0/assets/images/awards/award5.jpg\"  alt=\"\" />
                              </li>
                              <li class=\"col-md-2 col-4\">
                                  <img class=\"img-fluid\" src=\"https://themes.3rdwavemedia.com/college-green/bs4/3.0/assets/images/awards/award4.jpg\"  alt=\"\" />
                              </li>
                              <li class=\"col-md-2 col-4\">
                                  <img class=\"img-fluid\" src=\"https://themes.3rdwavemedia.com/college-green/bs4/3.0/assets/images/awards/award3.jpg\"  alt=\"\" />
                              </li>
                              <li class=\"col-md-2 col-4\">
                                  <img class=\"img-fluid\" src=\"https://themes.3rdwavemedia.com/college-green/bs4/3.0/assets/images/awards/award2.jpg\"  alt=\"\" />
                              </li>             
                          </ul>
                      </div>
                  </div>
                  <a class=\"left carousel-control\" href=\"#awards-carousel\" data-slide=\"prev\">
                      <i class=\"fas fa-angle-left\"></i>
                  </a>
                  <a class=\"right carousel-control\" href=\"#awards-carousel\" data-slide=\"next\">
                      <i class=\"fas fa-angle-right\"></i>
                  </a>
              </div>
          </section>
          -->

    </div>
</div>", "/opt/lampp/htdocs/sinai_school_october_cms/themes/default/pages/home.htm", "");
    }
}
