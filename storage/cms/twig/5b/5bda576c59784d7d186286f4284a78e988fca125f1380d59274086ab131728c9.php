<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /Applications/MAMP/htdocs/install-master/themes/default/pages/reglementinterieur.htm */
class __TwigTemplate_3fb5fb2f6d26f973fbb5a060c897b27269d36f7e79189483c28bc7d2595ba3b3 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
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
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "
    <div class=\"content container\">

        <div class=\"row cols-wrapper\">
            <div class=\"col-lg-9 col-12\">

                <h2>Réglement intérieur</h2>
                <br>
                <p style=\"text-align: justify;\">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam condimentum dui quis dignissim lacinia. Fusce mi felis, maximus vel dui non, accumsan semper eros. Donec molestie gravida augue sit amet lacinia. Phasellus condimentum vulputate ipsum. Donec commodo urna nulla, nec blandit tortor fermentum vel. Donec vitae scelerisque odio. Aenean scelerisque mi purus, id pretium turpis blandit vel. Praesent bibendum nisi eget elit dignissim vulputate. Morbi efficitur augue id ante blandit, ac auctor enim tincidunt. Praesent vehicula eget risus eu cursus. Phasellus eu consectetur neque.

                    Nam varius mi ligula, ac placerat neque accumsan at. Praesent dictum est quis purus porttitor tristique. Suspendisse euismod, erat sed molestie porta, mauris diam ornare risus, ut condimentum purus erat at nunc. Nulla congue et elit eu pulvinar. Nullam facilisis lectus at lacus pulvinar tempus. Vivamus id nunc et nulla accumsan bibendum. Morbi at elementum ligula, a dapibus arcu. Proin viverra ligula eget eros scelerisque, a auctor turpis ultricies. Duis nulla arcu, porttitor vel tincidunt ac, imperdiet eget leo. Nunc eleifend, nibh at sollicitudin sagittis, massa quam tempus ex, nec laoreet urna mi et sapien. Aliquam sed ullamcorper velit. Maecenas quis fermentum justo. Vestibulum et nisl vel enim ultrices ullamcorper. Fusce non risus fermentum, accumsan diam sit amet, volutpat odio. Proin nisl nisl, porttitor condimentum vulputate in, ultrices non libero. Nam sit amet augue sit amet libero venenatis ullamcorper id quis enim.

                    Proin sed tempus sapien. Proin tortor lorem, blandit ac dapibus vitae, ullamcorper et turpis. Nulla gravida enim dolor, a vehicula ipsum iaculis quis. In vitae euismod sapien. Sed laoreet purus vitae magna viverra tempus. Quisque ultrices ipsum eget lectus lobortis sollicitudin. Morbi lacinia lorem nunc, et convallis tellus tempus sit amet. Nunc luctus, lectus non rhoncus faucibus, urna odio auctor diam, eu tincidunt velit massa quis neque. Vivamus venenatis sapien eget sem tincidunt imperdiet. Sed vel tincidunt dolor. Nulla commodo feugiat risus, non semper lectus bibendum nec.

                    Fusce quis lectus egestas, placerat arcu ac, mollis sem. Nunc rutrum mauris porta semper ornare. Nam eu faucibus ligula. Donec sit amet nulla accumsan, sagittis tortor non, sodales leo. Duis vehicula suscipit sagittis. Suspendisse ullamcorper tincidunt dictum. Phasellus aliquet lorem in pretium tincidunt. Suspendisse dictum finibus placerat. Proin purus ex, consectetur eget ultrices eu, consectetur ut nisi. Curabitur vel erat nulla. Cras eget maximus nisl. Vivamus lobortis erat non urna venenatis eleifend. Vestibulum a lobortis dui. Morbi vitae libero sit amet nibh tempor egestas. Sed et elit velit.

                    Duis tellus erat, feugiat ut volutpat nec, ullamcorper vitae dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam erat volutpat. Curabitur euismod condimentum leo lobortis aliquet. Phasellus finibus lorem purus, porta consequat diam semper rhoncus. Nunc maximus fringilla massa, id consectetur nulla sollicitudin et. Quisque nec odio vitae elit auctor egestas. Donec non consectetur sapien. Morbi facilisis lorem ex, et dapibus lorem fringilla in. Vivamus at nisi vel nulla accumsan scelerisque vestibulum quis urna. Nam justo neque, egestas et libero non, sodales sodales odio. Suspendisse sed magna velit. Nam faucibus ex tempus lacus ornare, id fringilla mauris sodales. Duis nunc massa, condimentum ac consectetur aliquam, tincidunt vitae est. Integer sed pretium ipsum. Quisque lobortis tellus sit amet ex pellentesque, sit amet posuere ligula fringilla. 
                </p>
            </div>
            <div class=\"col-lg-3 col-12\">
                ";
        // line 24
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("mot_du_directeur"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 25
        echo "
                ";
        // line 26
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("majeur_promotion"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 27
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/install-master/themes/default/pages/reglementinterieur.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 27,  72 => 26,  69 => 25,  65 => 24,  42 => 3,  38 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"wrapper\">
    {% partial 'site/header' %}

    <div class=\"content container\">

        <div class=\"row cols-wrapper\">
            <div class=\"col-lg-9 col-12\">

                <h2>Réglement intérieur</h2>
                <br>
                <p style=\"text-align: justify;\">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam condimentum dui quis dignissim lacinia. Fusce mi felis, maximus vel dui non, accumsan semper eros. Donec molestie gravida augue sit amet lacinia. Phasellus condimentum vulputate ipsum. Donec commodo urna nulla, nec blandit tortor fermentum vel. Donec vitae scelerisque odio. Aenean scelerisque mi purus, id pretium turpis blandit vel. Praesent bibendum nisi eget elit dignissim vulputate. Morbi efficitur augue id ante blandit, ac auctor enim tincidunt. Praesent vehicula eget risus eu cursus. Phasellus eu consectetur neque.

                    Nam varius mi ligula, ac placerat neque accumsan at. Praesent dictum est quis purus porttitor tristique. Suspendisse euismod, erat sed molestie porta, mauris diam ornare risus, ut condimentum purus erat at nunc. Nulla congue et elit eu pulvinar. Nullam facilisis lectus at lacus pulvinar tempus. Vivamus id nunc et nulla accumsan bibendum. Morbi at elementum ligula, a dapibus arcu. Proin viverra ligula eget eros scelerisque, a auctor turpis ultricies. Duis nulla arcu, porttitor vel tincidunt ac, imperdiet eget leo. Nunc eleifend, nibh at sollicitudin sagittis, massa quam tempus ex, nec laoreet urna mi et sapien. Aliquam sed ullamcorper velit. Maecenas quis fermentum justo. Vestibulum et nisl vel enim ultrices ullamcorper. Fusce non risus fermentum, accumsan diam sit amet, volutpat odio. Proin nisl nisl, porttitor condimentum vulputate in, ultrices non libero. Nam sit amet augue sit amet libero venenatis ullamcorper id quis enim.

                    Proin sed tempus sapien. Proin tortor lorem, blandit ac dapibus vitae, ullamcorper et turpis. Nulla gravida enim dolor, a vehicula ipsum iaculis quis. In vitae euismod sapien. Sed laoreet purus vitae magna viverra tempus. Quisque ultrices ipsum eget lectus lobortis sollicitudin. Morbi lacinia lorem nunc, et convallis tellus tempus sit amet. Nunc luctus, lectus non rhoncus faucibus, urna odio auctor diam, eu tincidunt velit massa quis neque. Vivamus venenatis sapien eget sem tincidunt imperdiet. Sed vel tincidunt dolor. Nulla commodo feugiat risus, non semper lectus bibendum nec.

                    Fusce quis lectus egestas, placerat arcu ac, mollis sem. Nunc rutrum mauris porta semper ornare. Nam eu faucibus ligula. Donec sit amet nulla accumsan, sagittis tortor non, sodales leo. Duis vehicula suscipit sagittis. Suspendisse ullamcorper tincidunt dictum. Phasellus aliquet lorem in pretium tincidunt. Suspendisse dictum finibus placerat. Proin purus ex, consectetur eget ultrices eu, consectetur ut nisi. Curabitur vel erat nulla. Cras eget maximus nisl. Vivamus lobortis erat non urna venenatis eleifend. Vestibulum a lobortis dui. Morbi vitae libero sit amet nibh tempor egestas. Sed et elit velit.

                    Duis tellus erat, feugiat ut volutpat nec, ullamcorper vitae dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam erat volutpat. Curabitur euismod condimentum leo lobortis aliquet. Phasellus finibus lorem purus, porta consequat diam semper rhoncus. Nunc maximus fringilla massa, id consectetur nulla sollicitudin et. Quisque nec odio vitae elit auctor egestas. Donec non consectetur sapien. Morbi facilisis lorem ex, et dapibus lorem fringilla in. Vivamus at nisi vel nulla accumsan scelerisque vestibulum quis urna. Nam justo neque, egestas et libero non, sodales sodales odio. Suspendisse sed magna velit. Nam faucibus ex tempus lacus ornare, id fringilla mauris sodales. Duis nunc massa, condimentum ac consectetur aliquam, tincidunt vitae est. Integer sed pretium ipsum. Quisque lobortis tellus sit amet ex pellentesque, sit amet posuere ligula fringilla. 
                </p>
            </div>
            <div class=\"col-lg-3 col-12\">
                {% content 'mot_du_directeur' %}

                {% content 'majeur_promotion' %}
            </div>
        </div>
    </div>
</div>", "/Applications/MAMP/htdocs/install-master/themes/default/pages/reglementinterieur.htm", "");
    }
}
