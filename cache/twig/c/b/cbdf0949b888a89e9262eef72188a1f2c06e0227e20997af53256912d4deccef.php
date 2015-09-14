<?php

/* contacts.html.twig */
class __TwigTemplate_cbdf0949b888a89e9262eef72188a1f2c06e0227e20997af53256912d4deccef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "contacts.html.twig", 1);
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        echo "\t
\t<div class=\"page-contacts\">\t    
\t\t<p>";
        // line 4
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</p>
\t\t<div class=\"phone\">
\t\t\t<img src=\"";
        // line 6
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/phone.png\">
\t\t\t<p>";
        // line 7
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "telefone", array());
        echo "</p>
\t\t</div>
\t\t<div class=\"email\">
\t\t\t<img src=\"";
        // line 10
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/email.png\">
\t\t\t<a href=\"mailto:";
        // line 11
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "email", array());
        echo "<\">";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "email", array());
        echo "</a>
\t\t</div>
";
        // line 46
        echo "
\t\t
\t</div>
";
    }

    public function getTemplateName()
    {
        return "contacts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 46,  53 => 11,  49 => 10,  43 => 7,  39 => 6,  34 => 4,  28 => 2,  11 => 1,);
    }
}
