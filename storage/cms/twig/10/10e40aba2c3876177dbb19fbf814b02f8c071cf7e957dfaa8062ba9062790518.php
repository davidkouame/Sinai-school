<?php

/* /opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/school/components/contact/default.htm */
class __TwigTemplate_0107a3ecef93c0c94981f058ac99e144f8ca5b2f145aa85d9e161c7a9d38f3d4 extends Twig_Template
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
        echo "<div class=\"page-wrapper\">
                <header class=\"page-heading clearfix\">
                    <h1 class=\"heading-title pull-left\">Contact</h1>
                    <div class=\"breadcrumbs pull-right\">
                        <ul class=\"breadcrumbs-list\">
                            <li class=\"breadcrumbs-label\">You are here:</li>
                            <li><a href=\"";
        // line 7
        echo url("/");
        echo "\">Home</a><i class=\"fa fa-angle-right\"></i></li>
                            <li class=\"current\">Contact</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header> 
                <div class=\"page-content\">
                    <div class=\"row\">
                        <article class=\"contact-form col-md-8 col-sm-7  page-row\">                            
                            <h3 class=\"title\">Contactez-nous</h3>
                            <p>We’d love to hear from you. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut erat magna. Aliquam porta sem a lacus imperdiet posuere. Integer semper eget ligula id eleifend. </p>
                            <form>
                                <div class=\"form-group name\">
                                    <label for=\"name\">Nom et prénom</label>
                                    <input id=\"name\" type=\"text\" class=\"form-control\" placeholder=\"Entrez votre nom et prénoms\">
                                </div><!--//form-group-->
                                <div class=\"form-group email\">
                                    <label for=\"email\">Email<span class=\"required\">*</span></label>
                                    <input id=\"email\" type=\"email\" class=\"form-control\" placeholder=\"Entrez votre email\">
                                </div><!--//form-group-->
                                <div class=\"form-group phone\">
                                    <label for=\"phone\">Téléphone</label>
                                    <input id=\"phone\" type=\"tel\" class=\"form-control\" placeholder=\"Entrez votre contact\">
                                </div><!--//form-group-->
                                <div class=\"form-group message\">
                                    <label for=\"message\">Message<span class=\"required\">*</span></label>
                                    <textarea id=\"message\" class=\"form-control\" rows=\"6\" placeholder=\"Entrez votre message ici ...\"></textarea>
                                </div><!--//form-group-->
                                <button type=\"submit\" class=\"btn btn-theme\">Envoyer</button>
                            </form>                  
                        </article><!--//contact-form-->
                        <aside class=\"page-sidebar  col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1\">
                            <section class=\"widget has-divider\">
                                <h3 class=\"title\">Télécharger le prospectus</h3>
                                <p>Donec pulvinar arcu lacus, vel aliquam libero scelerisque a. Cras mi tellus, vulputate eu eleifend at, consectetur fringilla lacus. Nulla ut purus.</p>
                                <a class=\"btn btn-theme\" href=\"#\"><i class=\"fa fa-download\"></i>Download now</a>
                            </section><!--//widget-->   
                            
                            <section class=\"widget has-divider\">
                                <h3 class=\"title\">Adresse postale</h3>
                                <p class=\"adr\">
                                    <span class=\"adr-group\">       
                                        <span class=\"street-address\">College Green</span><br>
                                        <span class=\"region\">56 College Green Road</span><br>
                                        <span class=\"postal-code\">BS16 AP18</span><br>
                                        <span class=\"country-name\">UK</span>
                                    </span>
                                </p>
                            </section><!--//widget-->     
                            
                            <section class=\"widget\">
                                <h3 class=\"title\">Contacts</h3>
                                <p class=\"tel\"><i class=\"fa fa-phone\"></i>Tel: 0800 123 4567</p>
                                <p class=\"email\"><i class=\"fa fa-envelope\"></i>Email: <a href=\"#\">enquires@website.com</a></p>
                            </section>   
                        </aside><!--//page-sidebar-->
                    </div><!--//page-row-->
                    <div class=\"page-row\">
                        <article class=\"map-section\">
                            <h3 class=\"title\">Comment nous trouvez ?</h3>
                            <div class=\"gmap-wrapper\" id=\"map\">
                                <!--//You need to embed your own google map below-->
                                <!--//Ref: https://support.google.com/maps/answer/144361?co=GENIE.Platform%3DDesktop&hl=en -->
                                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2485.985798395094!2d-2.6051732483185885!3d51.458417179527075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48718ddbdfd292fb%3A0x2f0b60f89b4b6d56!2sUniversity+of+Bristol!5e0!3m2!1sen!2suk!4v1469704137699\" style=\"border:0\" allowfullscreen=\"\" width=\"600\" height=\"450\" frameborder=\"0\"></iframe>
                            </div><!--//gmap-wrapper-->
                        </article><!--//map-->
                    </div><!--//page-row-->
                </div><!--//page-content-->
            </div>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/school/components/contact/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"page-wrapper\">
                <header class=\"page-heading clearfix\">
                    <h1 class=\"heading-title pull-left\">Contact</h1>
                    <div class=\"breadcrumbs pull-right\">
                        <ul class=\"breadcrumbs-list\">
                            <li class=\"breadcrumbs-label\">You are here:</li>
                            <li><a href=\"{{ url('/') }}\">Home</a><i class=\"fa fa-angle-right\"></i></li>
                            <li class=\"current\">Contact</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header> 
                <div class=\"page-content\">
                    <div class=\"row\">
                        <article class=\"contact-form col-md-8 col-sm-7  page-row\">                            
                            <h3 class=\"title\">Contactez-nous</h3>
                            <p>We’d love to hear from you. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut erat magna. Aliquam porta sem a lacus imperdiet posuere. Integer semper eget ligula id eleifend. </p>
                            <form>
                                <div class=\"form-group name\">
                                    <label for=\"name\">Nom et prénom</label>
                                    <input id=\"name\" type=\"text\" class=\"form-control\" placeholder=\"Entrez votre nom et prénoms\">
                                </div><!--//form-group-->
                                <div class=\"form-group email\">
                                    <label for=\"email\">Email<span class=\"required\">*</span></label>
                                    <input id=\"email\" type=\"email\" class=\"form-control\" placeholder=\"Entrez votre email\">
                                </div><!--//form-group-->
                                <div class=\"form-group phone\">
                                    <label for=\"phone\">Téléphone</label>
                                    <input id=\"phone\" type=\"tel\" class=\"form-control\" placeholder=\"Entrez votre contact\">
                                </div><!--//form-group-->
                                <div class=\"form-group message\">
                                    <label for=\"message\">Message<span class=\"required\">*</span></label>
                                    <textarea id=\"message\" class=\"form-control\" rows=\"6\" placeholder=\"Entrez votre message ici ...\"></textarea>
                                </div><!--//form-group-->
                                <button type=\"submit\" class=\"btn btn-theme\">Envoyer</button>
                            </form>                  
                        </article><!--//contact-form-->
                        <aside class=\"page-sidebar  col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1\">
                            <section class=\"widget has-divider\">
                                <h3 class=\"title\">Télécharger le prospectus</h3>
                                <p>Donec pulvinar arcu lacus, vel aliquam libero scelerisque a. Cras mi tellus, vulputate eu eleifend at, consectetur fringilla lacus. Nulla ut purus.</p>
                                <a class=\"btn btn-theme\" href=\"#\"><i class=\"fa fa-download\"></i>Download now</a>
                            </section><!--//widget-->   
                            
                            <section class=\"widget has-divider\">
                                <h3 class=\"title\">Adresse postale</h3>
                                <p class=\"adr\">
                                    <span class=\"adr-group\">       
                                        <span class=\"street-address\">College Green</span><br>
                                        <span class=\"region\">56 College Green Road</span><br>
                                        <span class=\"postal-code\">BS16 AP18</span><br>
                                        <span class=\"country-name\">UK</span>
                                    </span>
                                </p>
                            </section><!--//widget-->     
                            
                            <section class=\"widget\">
                                <h3 class=\"title\">Contacts</h3>
                                <p class=\"tel\"><i class=\"fa fa-phone\"></i>Tel: 0800 123 4567</p>
                                <p class=\"email\"><i class=\"fa fa-envelope\"></i>Email: <a href=\"#\">enquires@website.com</a></p>
                            </section>   
                        </aside><!--//page-sidebar-->
                    </div><!--//page-row-->
                    <div class=\"page-row\">
                        <article class=\"map-section\">
                            <h3 class=\"title\">Comment nous trouvez ?</h3>
                            <div class=\"gmap-wrapper\" id=\"map\">
                                <!--//You need to embed your own google map below-->
                                <!--//Ref: https://support.google.com/maps/answer/144361?co=GENIE.Platform%3DDesktop&hl=en -->
                                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2485.985798395094!2d-2.6051732483185885!3d51.458417179527075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48718ddbdfd292fb%3A0x2f0b60f89b4b6d56!2sUniversity+of+Bristol!5e0!3m2!1sen!2suk!4v1469704137699\" style=\"border:0\" allowfullscreen=\"\" width=\"600\" height=\"450\" frameborder=\"0\"></iframe>
                            </div><!--//gmap-wrapper-->
                        </article><!--//map-->
                    </div><!--//page-row-->
                </div><!--//page-content-->
            </div>", "/opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/school/components/contact/default.htm", "");
    }
}