<?php

/* /Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/detailgalerie/default.htm */
class __TwigTemplate_9fb6ba7725790ec92cd558bdccc72e2362d49f984954a63d65363bb88567a058 extends Twig_Template
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
        echo "<!--<div class=\"page-wrapper\">
    <header class=\"page-heading clearfix\">
        <h1 class=\"heading-title pull-left\">Album Lorem Ipsum <small>(without sidebar)</small></h1>
        <div class=\"breadcrumbs pull-right\">
            <ul class=\"breadcrumbs-list\">
                <li class=\"breadcrumbs-label\">You are here:</li>
                <li><a href=\"index.html\">Home</a><i class=\"fa fa-angle-right\"></i></li>
                <li><a href=\"gallery.html\">Gallery</a><i class=\"fa fa-angle-right\"></i></li>
                <li class=\"current\">Album Lorem Ipsum</li>
            </ul>
        </div>//breadcrumbs
    </header> 
    <div class=\"page-content\">     
        <div class=\"row page-row\">
            <a class=\"prettyphoto col-md-3 col-sm-3 col-xs-6\" rel=\"prettyPhoto[gallery]\" title=\"Lorem ipsum dolor sit amet\" href=\"https://themes.3rdwavemedia.com/college-green/assets/images/gallery/gallery-1.jpg\"><img class=\"img-responsive img-thumbnail\" src=\"https://themes.3rdwavemedia.com/college-green/assets/images/gallery/gallery-thumb-1.jpg\" alt=\"\"></a>
            <a class=\"prettyphoto col-md-3 col-sm-3 col-xs-6\" rel=\"prettyPhoto[gallery]\" href=\"https://themes.3rdwavemedia.com/college-green/assets/images/gallery/gallery-24.jpg\"><img class=\"img-responsive img-thumbnail\" src=\"https://themes.3rdwavemedia.com/college-green/assets/images/gallery/gallery-thumb-1.jpg\" alt=\"\"></a>
            <a class=\"prettyphoto col-md-3 col-sm-3 col-xs-6\" rel=\"prettyPhoto[gallery]\" href=\"https://themes.3rdwavemedia.com/college-green/assets/images/gallery/gallery-23.jpg\"><img class=\"img-responsive img-thumbnail\" src=\"https://themes.3rdwavemedia.com/college-green/assets/images/gallery/gallery-thumb-1.jpg\" alt=\"\"></a>
            <a class=\"prettyphoto col-md-3 col-sm-3 col-xs-6\" rel=\"prettyPhoto[gallery]\" href=\"https://themes.3rdwavemedia.com/college-green/assets/images/gallery/gallery-14.jpg\"><img class=\"img-responsive img-thumbnail\" src=\"https://themes.3rdwavemedia.com/college-green/assets/images/gallery/gallery-thumb-1.jpg\" alt=\"\"></a>                              
        </div>//page-row
    </div>//page-content 
</div>-->

";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 24
        echo "<link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/app-lightbox.css");
        echo "\" rel=\"stylesheet\" />
";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 26
        echo "
<div class=\"lightbox\">

    <header class=\"page-heading clearfix\">
        <h1 class=\"heading-title pull-left\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["galerie"] ?? null), "name", []), "html", null, true);
        echo "</h1>
        <div class=\"breadcrumbs pull-right\">
            <ul class=\"breadcrumbs-list\">
                <li class=\"breadcrumbs-label\">You are here:</li>
                <li><a href=\"index.html\">Home</a><i class=\"fa fa-angle-right\"></i></li>
                <li><a href=\"gallery.html\">Gallery</a><i class=\"fa fa-angle-right\"></i></li>
                <li class=\"current\">Album Lorem Ipsum</li>
            </ul>
        </div><!--//breadcrumbs-->
    </header>

    <div class=\"row\">
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["galerie"] ?? null), "images", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 43
            echo "        <div class=\"prettyphoto col-md-3 col-sm-3 col-xs-6\">
            <img src=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "getpath", []), "html", null, true);
            echo "\" style=\"width:100%\" onclick=\"openModal(); currentSlide(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
            echo ")\" class=\"img-responsive img-thumbnail hover-shadow cursor\">
        </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    </div>

    <div id=\"myModal\" class=\"modal\">
        <span class=\"close cursor\" onclick=\"closeModal()\">&times;</span>
        <div class=\"modal-content\">
            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["galerie"] ?? null), "images", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 53
            echo "            <div class=\"mySlides\">
                <div class=\"numbertext\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "length", []), "html", null, true);
            echo "</div>
                <img src=\"";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "getpath", []), "html", null, true);
            echo "\" style=\"width:100%\">
            </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
            <a class=\"prev\" onclick=\"plusSlides( - 1)\">&#10094;</a>
            <a class=\"next\" onclick=\"plusSlides(1)\">&#10095;</a>

            <div class=\"caption-container\">
                <p id=\"caption\"></p>
            </div>


            ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["galerie"] ?? null), "images", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 68
            echo "            <div class=\"";
            echo twig_escape_filter($this->env, ($context["column"] ?? null), "html", null, true);
            echo "\">
                <img class=\"demo cursor\" src=\"";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "getpath", []), "html", null, true);
            echo "\" style=\"width:100%\" onclick=\"currentSlide(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
            echo ")\" >
            </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        </div>
    </div>

</div>
<script>
            function openModal() {
            document.getElementById(\"myModal\").style.display = \"block\";
                    document.getElementById(\"main-nav-wrapper\").style.display = \"none\";
            }

    function closeModal() {
    document.getElementById(\"myModal\").style.display = \"none\";
            document.getElementById(\"main-nav-wrapper\").style.display = \"block\";
    }

    var slideIndex = 1;
            showSlides(slideIndex);
            function plusSlides(n) {
            showSlides(slideIndex += n);
            }

    function currentSlide(n) {
    showSlides(slideIndex = n);
    }

    function showSlides(n) {
    var i;
            var slides = document.getElementsByClassName(\"mySlides\");
            var dots = document.getElementsByClassName(\"demo\");
            var captionText = document.getElementById(\"caption\");
            if (n > slides.length) {
    slideIndex = 1
    }
    if (n < 1) {
    slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
    slides[i].style.display = \"none\";
    }
    for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(\" active\", \"\");
    }
    slides[slideIndex - 1].style.display = \"block\";
            dots[slideIndex - 1].className += \" active\";
            captionText.innerHTML = dots[slideIndex - 1].alt;
    }
</script>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/detailgalerie/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 72,  199 => 69,  194 => 68,  177 => 67,  166 => 58,  149 => 55,  143 => 54,  140 => 53,  123 => 52,  116 => 47,  97 => 44,  94 => 43,  77 => 42,  62 => 30,  56 => 26,  54 => 23,  49 => 24,  47 => 23,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--<div class=\"page-wrapper\">
    <header class=\"page-heading clearfix\">
        <h1 class=\"heading-title pull-left\">Album Lorem Ipsum <small>(without sidebar)</small></h1>
        <div class=\"breadcrumbs pull-right\">
            <ul class=\"breadcrumbs-list\">
                <li class=\"breadcrumbs-label\">You are here:</li>
                <li><a href=\"index.html\">Home</a><i class=\"fa fa-angle-right\"></i></li>
                <li><a href=\"gallery.html\">Gallery</a><i class=\"fa fa-angle-right\"></i></li>
                <li class=\"current\">Album Lorem Ipsum</li>
            </ul>
        </div>//breadcrumbs
    </header> 
    <div class=\"page-content\">     
        <div class=\"row page-row\">
            <a class=\"prettyphoto col-md-3 col-sm-3 col-xs-6\" rel=\"prettyPhoto[gallery]\" title=\"Lorem ipsum dolor sit amet\" href=\"https://themes.3rdwavemedia.com/college-green/assets/images/gallery/gallery-1.jpg\"><img class=\"img-responsive img-thumbnail\" src=\"https://themes.3rdwavemedia.com/college-green/assets/images/gallery/gallery-thumb-1.jpg\" alt=\"\"></a>
            <a class=\"prettyphoto col-md-3 col-sm-3 col-xs-6\" rel=\"prettyPhoto[gallery]\" href=\"https://themes.3rdwavemedia.com/college-green/assets/images/gallery/gallery-24.jpg\"><img class=\"img-responsive img-thumbnail\" src=\"https://themes.3rdwavemedia.com/college-green/assets/images/gallery/gallery-thumb-1.jpg\" alt=\"\"></a>
            <a class=\"prettyphoto col-md-3 col-sm-3 col-xs-6\" rel=\"prettyPhoto[gallery]\" href=\"https://themes.3rdwavemedia.com/college-green/assets/images/gallery/gallery-23.jpg\"><img class=\"img-responsive img-thumbnail\" src=\"https://themes.3rdwavemedia.com/college-green/assets/images/gallery/gallery-thumb-1.jpg\" alt=\"\"></a>
            <a class=\"prettyphoto col-md-3 col-sm-3 col-xs-6\" rel=\"prettyPhoto[gallery]\" href=\"https://themes.3rdwavemedia.com/college-green/assets/images/gallery/gallery-14.jpg\"><img class=\"img-responsive img-thumbnail\" src=\"https://themes.3rdwavemedia.com/college-green/assets/images/gallery/gallery-thumb-1.jpg\" alt=\"\"></a>                              
        </div>//page-row
    </div>//page-content 
</div>-->

{% put styles %}
<link href=\"{{ 'assets/css/app-lightbox.css'|theme }}\" rel=\"stylesheet\" />
{% endput %}

<div class=\"lightbox\">

    <header class=\"page-heading clearfix\">
        <h1 class=\"heading-title pull-left\">{{ galerie.name }}</h1>
        <div class=\"breadcrumbs pull-right\">
            <ul class=\"breadcrumbs-list\">
                <li class=\"breadcrumbs-label\">You are here:</li>
                <li><a href=\"index.html\">Home</a><i class=\"fa fa-angle-right\"></i></li>
                <li><a href=\"gallery.html\">Gallery</a><i class=\"fa fa-angle-right\"></i></li>
                <li class=\"current\">Album Lorem Ipsum</li>
            </ul>
        </div><!--//breadcrumbs-->
    </header>

    <div class=\"row\">
        {% for image in galerie.images %}
        <div class=\"prettyphoto col-md-3 col-sm-3 col-xs-6\">
            <img src=\"{{ image.getpath }}\" style=\"width:100%\" onclick=\"openModal(); currentSlide({{ loop.index }})\" class=\"img-responsive img-thumbnail hover-shadow cursor\">
        </div>
        {% endfor %}
    </div>

    <div id=\"myModal\" class=\"modal\">
        <span class=\"close cursor\" onclick=\"closeModal()\">&times;</span>
        <div class=\"modal-content\">
            {% for image in galerie.images %}
            <div class=\"mySlides\">
                <div class=\"numbertext\">{{ loop.index }} / {{ loop.length }}</div>
                <img src=\"{{ image.getpath }}\" style=\"width:100%\">
            </div>
            {% endfor %}

            <a class=\"prev\" onclick=\"plusSlides( - 1)\">&#10094;</a>
            <a class=\"next\" onclick=\"plusSlides(1)\">&#10095;</a>

            <div class=\"caption-container\">
                <p id=\"caption\"></p>
            </div>


            {% for image in galerie.images %}
            <div class=\"{{ column }}\">
                <img class=\"demo cursor\" src=\"{{ image.getpath }}\" style=\"width:100%\" onclick=\"currentSlide({{ loop.index }})\" >
            </div>
            {% endfor %}
        </div>
    </div>

</div>
<script>
            function openModal() {
            document.getElementById(\"myModal\").style.display = \"block\";
                    document.getElementById(\"main-nav-wrapper\").style.display = \"none\";
            }

    function closeModal() {
    document.getElementById(\"myModal\").style.display = \"none\";
            document.getElementById(\"main-nav-wrapper\").style.display = \"block\";
    }

    var slideIndex = 1;
            showSlides(slideIndex);
            function plusSlides(n) {
            showSlides(slideIndex += n);
            }

    function currentSlide(n) {
    showSlides(slideIndex = n);
    }

    function showSlides(n) {
    var i;
            var slides = document.getElementsByClassName(\"mySlides\");
            var dots = document.getElementsByClassName(\"demo\");
            var captionText = document.getElementById(\"caption\");
            if (n > slides.length) {
    slideIndex = 1
    }
    if (n < 1) {
    slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
    slides[i].style.display = \"none\";
    }
    for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(\" active\", \"\");
    }
    slides[slideIndex - 1].style.display = \"block\";
            dots[slideIndex - 1].className += \" active\";
            captionText.innerHTML = dots[slideIndex - 1].alt;
    }
</script>", "/Applications/MAMP/htdocs/Sinai-school/plugins/bootnetcrasher/school/components/detailgalerie/default.htm", "");
    }
}
