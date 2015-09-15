<?php

/* home.html.twig */
class __TwigTemplate_f578a020aabb8549a587f975e6f6fc4dccab97188e6899fe7cd8451c4eac4915 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "home.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        echo "\t
\t";
        // line 4
        $context["img"] = twig_random($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
        // line 5
        echo "\t
\t<section class=\"page-home\">
\t\t<img class=\"hero\" src=\"";
        // line 7
        echo $this->getAttribute((isset($context["img"]) ? $context["img"] : null), "url", array());
        echo "\" alt=\"\">
    \t";
        // line 9
        echo "
\t";
        // line 19
        echo "\t    
\t\t";
        // line 20
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t</section>
\t
";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  46 => 19,  43 => 9,  39 => 7,  35 => 5,  33 => 4,  28 => 3,  11 => 1,);
    }
}
