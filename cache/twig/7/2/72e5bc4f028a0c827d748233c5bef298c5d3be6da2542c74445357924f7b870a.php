<?php

/* item.html.twig */
class __TwigTemplate_72e5bc4f028a0c827d748233c5bef298c5d3be6da2542c74445357924f7b870a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
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
\t<div class=\"page-exhibitions-item\">
\t\t<h2>";
        // line 5
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h2>
\t\t<p class=\"date\">";
        // line 6
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "d/M/Y");
        echo "</p>
\t\t<div class=\"image\">
\t\t\t";
        // line 8
        echo twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
        echo "
\t\t</div>
\t\t";
        // line 10
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t</div>
";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  43 => 8,  38 => 6,  34 => 5,  28 => 3,  11 => 1,);
    }
}
