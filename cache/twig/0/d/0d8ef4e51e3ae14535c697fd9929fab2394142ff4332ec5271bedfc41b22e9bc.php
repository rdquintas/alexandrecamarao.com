<?php

/* home.html.twig */
class __TwigTemplate_0d8ef4e51e3ae14535c697fd9929fab2394142ff4332ec5271bedfc41b22e9bc extends Twig_Template
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
        // line 5
        echo "\t";
        $context["img"] = twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
        // line 6
        echo "

\t<section class=\"page-home\">\t\t
\t\t<img class=\"hero\" src=\"";
        // line 9
        echo $this->getAttribute((isset($context["img"]) ? $context["img"] : null), "url", array());
        echo "\" alt=\"\">
    \t";
        // line 11
        echo "
\t";
        // line 21
        echo "\t    
\t\t";
        // line 23
        echo "\t</section>
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
        return array (  51 => 23,  48 => 21,  45 => 11,  41 => 9,  36 => 6,  33 => 5,  28 => 3,  11 => 1,);
    }
}
