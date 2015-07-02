<?php

/* partials/blog_item.html.twig */
class __TwigTemplate_5ee574966a80e480a2e8ff6483ebb96529132fc4693bd8b6ecc37020aff82583 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"exhibition-item\">
    <div class=\"image\">
        ";
        // line 3
        echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "cropZoom", array(0 => 300, 1 => 300), "method"), "html", array());
        echo "
    </div>
    <div class=\"text\">
        <p class=\"title\">";
        // line 6
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</p>
        <p class=\"date\">";
        // line 7
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "d/M/Y");
        echo "</p>
        <p class=\"summary\">";
        // line 8
        echo $this->env->getExtension('GravTwigExtension')->truncateFilter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), 350);
        echo "</p>
        <p class=\"continue\"><a href=\"";
        // line 9
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
        echo "\">Continue Reading...</a></p>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  37 => 8,  33 => 7,  29 => 6,  23 => 3,  19 => 1,);
    }
}
