<?php

/* /opt/lampp/htdocs/sinai_school_october_cms/themes/default/layouts/default.htm */
class __TwigTemplate_3910e96255a0b0d0e0438b92eb835951d4c32d5d10d6b22f19544519ec6f3233 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <!--<title>October CMS - ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "title", []), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "meta_description", []), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"Sinai-School}\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">-->
        <!--<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\">
        <link href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/vendor.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme.css");
        echo "\" rel=\"stylesheet\">-->


        <!-- <title>";
        // line 16
        $this->displayBlock('title', $context, $blocks);
        echo "</title> -->
        <title>Sinai-School</title>
        <!-- Meta -->
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">    
        <link rel=\"shortcut icon\" href=\"favicon.ico\">  
        <!--x<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>-->
        <!-- FontAwesome JS-->
        <script defer src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/all.js");
        echo "\" integrity=\"sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9\" crossorigin=\"anonymous\"></script>
        
        <!-- Global CSS -->
        <link href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/bootstrap/css/bootstrap.css");
        echo "\" rel=\"stylesheet\">
        <!-- Plugins CSS -->
        <link href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/flexslider/css/flexslider.css");
        echo "\" rel=\"stylesheet\">
        <!-- Theme CSS -->  
        <link id=\"theme-style\" rel=\"stylesheet\" href=\"./static/assets/css/theme-1.css\">
        <link href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme-1.css");
        echo "\" rel=\"stylesheet\">


        <!-- Facebook Pixel Code -->
        <!--<script>
          !function(f,b,e,v,n,t,s)
          {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
          n.callMethod.apply(n,arguments):n.queue.push(arguments)};
          if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
          n.queue=[];t=b.createElement(e);t.async=!0;
          t.src=v;s=b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t,s)}(window, document,'script',
          'https://connect.facebook.net/en_US/fbevents.js');
          fbq('init', '1506230579705064');
          fbq('track', 'PageView');
        </script>-->
        <noscript><img height=\"1\" width=\"1\" style=\"display:none\"
          src=\"https://www.facebook.com/tr?id=1506230579705064&ev=PageView&noscript=1\"
        /></noscript>
        <!-- End Facebook Pixel Code -->

        <!-- css add -->
        <style type=\"text/css\">
          .home-page section.news {
              background: #fff;
          }

          .home-page .news .news-item {
            margin-bottom: 36px;
          }
          
          .jss374 {
            width: 100%;
            height: auto;
            margin: 0;
            display: block;
            padding: 0;
            padding-bottom: 56.25%;
            background-size: cover;
            background-color: #d2d2d2;
            background-position: center;
        }
        
        .item.carousel-item.active{
            margin-bottom: 2%;
        }
        

        /*img {
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px;
        width: 150px;
        }

        img:hover {
        box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
        }*/

        .profile:hover{
            box-shadow: initial;
        }

        .item.carousel-item{
            cursor: pointer
        }

        .no-padding-left-and-right{
            padding-left: 0px !important;
            padding-right: 0px !important;
        }

        </style>
        ";
        // line 108
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 109
        echo "        <script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/popover/popper.min.js");
        echo "\"></script>
    </head>
    <body class=\"home-page\">

        <!-- Content -->
        <section id=\"layout-content\">
          
            ";
        // line 116
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 117
        echo "        </section>

        <!-- Footer -->
        <footer class=\"footer\">
            ";
        // line 121
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 122
        echo "        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 125
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
        <script src=\"";
        // line 126
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
        <script src=\"";
        // line 127
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/app.js");
        echo "\"></script>

       <!-- JS --> 
       <script src=\"";
        // line 130
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/jquery/jquery-3.3.1.min.js");
        echo "\"></script>
       <script src=\"";
        // line 131
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/bootstrap/js/bootstrap.min.js");
        echo "\"></script>
       <script src=\"";
        // line 132
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/back-to-top.js");
        echo "\"></script>
       <script src=\"";
        // line 133
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/flexslider/js/jquery.flexslider-min.js");
        echo "\"></script>
       <script src=\"";
        // line 134
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jflickrfeed.min.js");
        echo "\"></script>
       <script src=\"";
        // line 135
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>
    
    <!-- Theme Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
    <script src=\"";
        // line 138
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/theme-switcher.js");
        echo "\"></script>
        ";
        // line 139
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 140
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 141
        echo "
        <script type=\"text/javascript\">
          \$(document).ready(function(){
            \$(\".carousel-item div.row\").click(function(e){
              window.location.href = \"";
        // line 145
        echo url("actualites");
        echo "/\"+\$(this).data('id');
            })
          });
        </script>
    </body>
</html>";
    }

    // line 16
    public function block_title($context, array $blocks = [])
    {
        echo "This is my new project home page";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/sinai_school_october_cms/themes/default/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 16,  263 => 145,  257 => 141,  253 => 140,  238 => 139,  234 => 138,  228 => 135,  224 => 134,  220 => 133,  216 => 132,  212 => 131,  208 => 130,  202 => 127,  198 => 126,  194 => 125,  189 => 122,  185 => 121,  179 => 117,  177 => 116,  166 => 109,  163 => 108,  87 => 35,  81 => 32,  76 => 30,  70 => 27,  56 => 16,  50 => 13,  46 => 12,  42 => 11,  34 => 6,  30 => 5,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <!--<title>October CMS - {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"Sinai-School}\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">-->
        <!--<link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\">
        <link href=\"{{ 'assets/css/vendor.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/theme.css'|theme }}\" rel=\"stylesheet\">-->


        <!-- <title>{% block title %}This is my new project home page{% endblock title %}</title> -->
        <title>Sinai-School</title>
        <!-- Meta -->
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">    
        <link rel=\"shortcut icon\" href=\"favicon.ico\">  
        <!--x<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>-->
        <!-- FontAwesome JS-->
        <script defer src=\"{{ 'assets/js/all.js'|theme }}\" integrity=\"sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9\" crossorigin=\"anonymous\"></script>
        
        <!-- Global CSS -->
        <link href=\"{{ 'assets/plugins/bootstrap/css/bootstrap.css'|theme }}\" rel=\"stylesheet\">
        <!-- Plugins CSS -->
        <link href=\"{{ 'assets/plugins/flexslider/css/flexslider.css'|theme }}\" rel=\"stylesheet\">
        <!-- Theme CSS -->  
        <link id=\"theme-style\" rel=\"stylesheet\" href=\"./static/assets/css/theme-1.css\">
        <link href=\"{{ 'assets/css/theme-1.css'|theme }}\" rel=\"stylesheet\">


        <!-- Facebook Pixel Code -->
        <!--<script>
          !function(f,b,e,v,n,t,s)
          {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
          n.callMethod.apply(n,arguments):n.queue.push(arguments)};
          if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
          n.queue=[];t=b.createElement(e);t.async=!0;
          t.src=v;s=b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t,s)}(window, document,'script',
          'https://connect.facebook.net/en_US/fbevents.js');
          fbq('init', '1506230579705064');
          fbq('track', 'PageView');
        </script>-->
        <noscript><img height=\"1\" width=\"1\" style=\"display:none\"
          src=\"https://www.facebook.com/tr?id=1506230579705064&ev=PageView&noscript=1\"
        /></noscript>
        <!-- End Facebook Pixel Code -->

        <!-- css add -->
        <style type=\"text/css\">
          .home-page section.news {
              background: #fff;
          }

          .home-page .news .news-item {
            margin-bottom: 36px;
          }
          
          .jss374 {
            width: 100%;
            height: auto;
            margin: 0;
            display: block;
            padding: 0;
            padding-bottom: 56.25%;
            background-size: cover;
            background-color: #d2d2d2;
            background-position: center;
        }
        
        .item.carousel-item.active{
            margin-bottom: 2%;
        }
        

        /*img {
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px;
        width: 150px;
        }

        img:hover {
        box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
        }*/

        .profile:hover{
            box-shadow: initial;
        }

        .item.carousel-item{
            cursor: pointer
        }

        .no-padding-left-and-right{
            padding-left: 0px !important;
            padding-right: 0px !important;
        }

        </style>
        {% styles %}
        <script src=\"{{ 'assets/plugins/popover/popper.min.js'|theme }}\"></script>
    </head>
    <body class=\"home-page\">

        <!-- Content -->
        <section id=\"layout-content\">
          
            {% page %}
        </section>

        <!-- Footer -->
        <footer class=\"footer\">
            {% partial 'site/footer' %}
        </footer>

        <!-- Scripts -->
        <script src=\"{{ 'assets/vendor/jquery.js'|theme }}\"></script>
        <script src=\"{{ 'assets/vendor/bootstrap.js'|theme }}\"></script>
        <script src=\"{{ 'assets/javascript/app.js'|theme }}\"></script>

       <!-- JS --> 
       <script src=\"{{ 'assets/plugins/jquery/jquery-3.3.1.min.js'|theme }}\"></script>
       <script src=\"{{ 'assets/plugins/bootstrap/js/bootstrap.min.js'|theme }}\"></script>
       <script src=\"{{ 'assets/js/back-to-top.js'|theme }}\"></script>
       <script src=\"{{ 'assets/plugins/flexslider/js/jquery.flexslider-min.js'|theme }}\"></script>
       <script src=\"{{ 'assets/js/jflickrfeed.min.js'|theme }}\"></script>
       <script src=\"{{ 'assets/js/main.js'|theme }}\"></script>
    
    <!-- Theme Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
    <script src=\"{{ 'assets/js/theme-switcher.js'|theme }}\"></script>
        {% framework extras %}
        {% scripts %}

        <script type=\"text/javascript\">
          \$(document).ready(function(){
            \$(\".carousel-item div.row\").click(function(e){
              window.location.href = \"{{ url('actualites') }}/\"+\$(this).data('id');
            })
          });
        </script>
    </body>
</html>", "/opt/lampp/htdocs/sinai_school_october_cms/themes/default/layouts/default.htm", "");
    }
}
