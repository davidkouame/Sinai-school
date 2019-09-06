<?php

/* /opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/school/components/detailgalerie/default.htm */
class __TwigTemplate_a4fb29dfccdf84e1dbefa45a8eed1b972aacc7440a9dd23731c977cd5949a959 extends Twig_Template
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
<style>
    body {
        font-family: Verdana, sans-serif;
        margin: 0;
    }

    * {
        box-sizing: border-box;
    }

    .row > .column {
        padding: 0 8px;
    }

    .row:after {
        content: \"\";
        display: table;
        clear: both;
    }

    .column {
        float: left;
        width: 25%;
    }

    /* The Modal (background) */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: black;
    }

    /* Modal Content */
    .modal-content {
        position: relative;
        background-color: #fefefe;
        margin: auto;
        padding: 0;
        width: 90%;
        max-width: 1200px;
    }

    /* The Close Button */
    .close {
        color: white;
        position: absolute;
        top: 10px;
        right: 25px;
        font-size: 35px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #999;
        text-decoration: none;
        cursor: pointer;
    }

    .mySlides {
        display: none;
    }

    .cursor {
        cursor: pointer;
    }

    /* Next & previous buttons */
    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -50px;
        color: white;
        font-weight: bold;
        font-size: 20px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
        -webkit-user-select: none;
    }

    /* Position the \"next button\" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    /* Number text (1/3 etc) */
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    img {
        margin-bottom: -4px;
    }

    .caption-container {
        text-align: center;
        background-color: black;
        padding: 2px 16px;
        color: white;
    }

    .demo {
        opacity: 0.6;
    }

    .active,
    .demo:hover {
        opacity: 1;
    }

    img.hover-shadow {
        transition: 0.3s;
    }

    .hover-shadow:hover {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
</style>

<section class=\"news\" style=\"margin-bottom: 0px;\">
    <div class=\"section-content clearfix\" style='padding-left: 0px;'>
        <div id=\"news-carousel\" class=\"news-carousel carousel slide\">
            <div class=\"carousel-inner\">
                <div class=\"row\">
                    ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 150
            echo "                    <div class=\"item col-md-3 col-6\" title=\"Lorem ipsum dolor sit amet\" style=\"margin-bottom: 20px;\">
                        <a href=\"assets/images/gallery/gallery-1.jpg\">
                            <img class=\"img-fluid\" src='";
            // line 152
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "getpath", []), "html", null, true);
            echo "' alt=\"\">
                        </a>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "                </div>



            </div>
        </div>
    </div>
</section>

<div class=\"row\">
    <div class=\"column\">
        <img src=\"https://www.w3schools.com/howto/img_nature.jpg\" style=\"width:100%\" onclick=\"openModal();currentSlide(1)\" class=\"hover-shadow cursor\">
    </div>
    <div class=\"column\">
        <img src=\"https://www.w3schools.com/howto/img_snow.jpg\" style=\"width:100%\" onclick=\"openModal();currentSlide(2)\" class=\"hover-shadow cursor\">
    </div>
    <div class=\"column\">
        <img src=\"https://www.w3schools.com/howto/img_mountains.jpg\" style=\"width:100%\" onclick=\"openModal();currentSlide(3)\" class=\"hover-shadow cursor\">
    </div>
    <div class=\"column\">
        <img src=\"https://www.w3schools.com/howto/img_lights.jpg\" style=\"width:100%\" onclick=\"openModal();currentSlide(4)\" class=\"hover-shadow cursor\">
    </div>
</div>

<div id=\"myModal\" class=\"modal\">
    <span class=\"close cursor\" onclick=\"closeModal()\">&times;</span>
    <div class=\"modal-content\">

        <div class=\"mySlides\">
            <div class=\"numbertext\">1 / 4</div>
            <img src=\"https://www.w3schools.com/howto/img_nature.jpg\" style=\"width:100%\">
        </div>

        <div class=\"mySlides\">
            <div class=\"numbertext\">2 / 4</div>
            <img src=\"https://www.w3schools.com/howto/img_snow.jpg\" style=\"width:100%\">
        </div>

        <div class=\"mySlides\">
            <div class=\"numbertext\">3 / 4</div>
            <img src=\"https://www.w3schools.com/howto/img_mountains.jpg\" style=\"width:100%\">
        </div>

        <div class=\"mySlides\">
            <div class=\"numbertext\">4 / 4</div>
            <img src=\"https://www.w3schools.com/howto/img_lights.jpg\" style=\"width:100%\">
        </div>

        <a class=\"prev\" onclick=\"plusSlides(-1)\">&#10094;</a>
        <a class=\"next\" onclick=\"plusSlides(1)\">&#10095;</a>

        <div class=\"caption-container\">
            <p id=\"caption\"></p>
        </div>


        <div class=\"column\">
            <img class=\"demo cursor\" src=\"https://www.w3schools.com/howto/img_nature.jpg\" style=\"width:100%\" onclick=\"currentSlide(1)\" alt=\"Nature and sunrise\">
        </div>
        <div class=\"column\">
            <img class=\"demo cursor\" src=\"https://www.w3schools.com/howto/img_snow.jpg\" style=\"width:100%\" onclick=\"currentSlide(2)\" alt=\"Snow\">
        </div>
        <div class=\"column\">
            <img class=\"demo cursor\" src=\"https://www.w3schools.com/howto/img_mountains.jpg\" style=\"width:100%\" onclick=\"currentSlide(3)\" alt=\"Mountains and fjords\">
        </div>
        <div class=\"column\">
            <img class=\"demo cursor\" src=\"https://www.w3schools.com/howto/img_lights.jpg\" style=\"width:100%\" onclick=\"currentSlide(4)\" alt=\"Northern Lights\">
        </div>
    </div>
</div>

<!-- Modal -->
<div class=\"modal fade\" id=\"exampleModalCenter\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Modal title</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        ...
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
        <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
      </div>
    </div>
  </div>
</div>


<script>
    function openModal() {
        document.getElementById(\"myModal\").style.display = \"block\";
    }

    function closeModal() {
        document.getElementById(\"myModal\").style.display = \"none\";
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
    
    \$(document).ready(function(){
        \$(\"#exampleModalCenter\").modal();
    });
</script>

";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/school/components/detailgalerie/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 156,  181 => 152,  177 => 150,  173 => 149,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<style>
    body {
        font-family: Verdana, sans-serif;
        margin: 0;
    }

    * {
        box-sizing: border-box;
    }

    .row > .column {
        padding: 0 8px;
    }

    .row:after {
        content: \"\";
        display: table;
        clear: both;
    }

    .column {
        float: left;
        width: 25%;
    }

    /* The Modal (background) */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: black;
    }

    /* Modal Content */
    .modal-content {
        position: relative;
        background-color: #fefefe;
        margin: auto;
        padding: 0;
        width: 90%;
        max-width: 1200px;
    }

    /* The Close Button */
    .close {
        color: white;
        position: absolute;
        top: 10px;
        right: 25px;
        font-size: 35px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #999;
        text-decoration: none;
        cursor: pointer;
    }

    .mySlides {
        display: none;
    }

    .cursor {
        cursor: pointer;
    }

    /* Next & previous buttons */
    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -50px;
        color: white;
        font-weight: bold;
        font-size: 20px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
        -webkit-user-select: none;
    }

    /* Position the \"next button\" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    /* Number text (1/3 etc) */
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    img {
        margin-bottom: -4px;
    }

    .caption-container {
        text-align: center;
        background-color: black;
        padding: 2px 16px;
        color: white;
    }

    .demo {
        opacity: 0.6;
    }

    .active,
    .demo:hover {
        opacity: 1;
    }

    img.hover-shadow {
        transition: 0.3s;
    }

    .hover-shadow:hover {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
</style>

<section class=\"news\" style=\"margin-bottom: 0px;\">
    <div class=\"section-content clearfix\" style='padding-left: 0px;'>
        <div id=\"news-carousel\" class=\"news-carousel carousel slide\">
            <div class=\"carousel-inner\">
                <div class=\"row\">
                    {% for image in images %}
                    <div class=\"item col-md-3 col-6\" title=\"Lorem ipsum dolor sit amet\" style=\"margin-bottom: 20px;\">
                        <a href=\"assets/images/gallery/gallery-1.jpg\">
                            <img class=\"img-fluid\" src='{{ image.getpath }}' alt=\"\">
                        </a>
                    </div>
                    {% endfor %}
                </div>



            </div>
        </div>
    </div>
</section>

<div class=\"row\">
    <div class=\"column\">
        <img src=\"https://www.w3schools.com/howto/img_nature.jpg\" style=\"width:100%\" onclick=\"openModal();currentSlide(1)\" class=\"hover-shadow cursor\">
    </div>
    <div class=\"column\">
        <img src=\"https://www.w3schools.com/howto/img_snow.jpg\" style=\"width:100%\" onclick=\"openModal();currentSlide(2)\" class=\"hover-shadow cursor\">
    </div>
    <div class=\"column\">
        <img src=\"https://www.w3schools.com/howto/img_mountains.jpg\" style=\"width:100%\" onclick=\"openModal();currentSlide(3)\" class=\"hover-shadow cursor\">
    </div>
    <div class=\"column\">
        <img src=\"https://www.w3schools.com/howto/img_lights.jpg\" style=\"width:100%\" onclick=\"openModal();currentSlide(4)\" class=\"hover-shadow cursor\">
    </div>
</div>

<div id=\"myModal\" class=\"modal\">
    <span class=\"close cursor\" onclick=\"closeModal()\">&times;</span>
    <div class=\"modal-content\">

        <div class=\"mySlides\">
            <div class=\"numbertext\">1 / 4</div>
            <img src=\"https://www.w3schools.com/howto/img_nature.jpg\" style=\"width:100%\">
        </div>

        <div class=\"mySlides\">
            <div class=\"numbertext\">2 / 4</div>
            <img src=\"https://www.w3schools.com/howto/img_snow.jpg\" style=\"width:100%\">
        </div>

        <div class=\"mySlides\">
            <div class=\"numbertext\">3 / 4</div>
            <img src=\"https://www.w3schools.com/howto/img_mountains.jpg\" style=\"width:100%\">
        </div>

        <div class=\"mySlides\">
            <div class=\"numbertext\">4 / 4</div>
            <img src=\"https://www.w3schools.com/howto/img_lights.jpg\" style=\"width:100%\">
        </div>

        <a class=\"prev\" onclick=\"plusSlides(-1)\">&#10094;</a>
        <a class=\"next\" onclick=\"plusSlides(1)\">&#10095;</a>

        <div class=\"caption-container\">
            <p id=\"caption\"></p>
        </div>


        <div class=\"column\">
            <img class=\"demo cursor\" src=\"https://www.w3schools.com/howto/img_nature.jpg\" style=\"width:100%\" onclick=\"currentSlide(1)\" alt=\"Nature and sunrise\">
        </div>
        <div class=\"column\">
            <img class=\"demo cursor\" src=\"https://www.w3schools.com/howto/img_snow.jpg\" style=\"width:100%\" onclick=\"currentSlide(2)\" alt=\"Snow\">
        </div>
        <div class=\"column\">
            <img class=\"demo cursor\" src=\"https://www.w3schools.com/howto/img_mountains.jpg\" style=\"width:100%\" onclick=\"currentSlide(3)\" alt=\"Mountains and fjords\">
        </div>
        <div class=\"column\">
            <img class=\"demo cursor\" src=\"https://www.w3schools.com/howto/img_lights.jpg\" style=\"width:100%\" onclick=\"currentSlide(4)\" alt=\"Northern Lights\">
        </div>
    </div>
</div>

<!-- Modal -->
<div class=\"modal fade\" id=\"exampleModalCenter\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Modal title</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        ...
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
        <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
      </div>
    </div>
  </div>
</div>


<script>
    function openModal() {
        document.getElementById(\"myModal\").style.display = \"block\";
    }

    function closeModal() {
        document.getElementById(\"myModal\").style.display = \"none\";
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
    
    \$(document).ready(function(){
        \$(\"#exampleModalCenter\").modal();
    });
</script>

", "/opt/lampp/htdocs/sinai_school_october_cms/plugins/bootnetcrasher/school/components/detailgalerie/default.htm", "");
    }
}
