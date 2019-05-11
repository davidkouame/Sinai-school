<?php

/* /opt/lampp/htdocs/sinai_school_october_cms/plugins/raviraj/rjgallery/components/gallerieslist/default.htm */
class __TwigTemplate_a9c437631682bcbbcf52fb718c7fc3ea5e81874653b41415c6439a8c299d3fa3 extends Twig_Template
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
<ul>
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["galleries"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["gallery"]) {
            // line 4
            echo "\t<li>
\t\t<h3><a href=\"";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gallery"], "url", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gallery"], "name", []), "html", null, true);
            echo "</a></h3>
\t</li>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 8
            echo "\t";
            echo twig_escape_filter($this->env, ($context["noGalleriesMessage"] ?? null), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/sinai_school_october_cms/plugins/raviraj/rjgallery/components/gallerieslist/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 10,  45 => 8,  35 => 5,  32 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<ul>
{% for gallery in galleries %}
\t<li>
\t\t<h3><a href=\"{{gallery.url}}\">{{gallery.name}}</a></h3>
\t</li>
{% else %}
\t{{noGalleriesMessage}}
{% endfor %}
</ul>", "/opt/lampp/htdocs/sinai_school_october_cms/plugins/raviraj/rjgallery/components/gallerieslist/default.htm", "");
    }
}
