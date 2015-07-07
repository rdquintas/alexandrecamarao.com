<?php

/* home.html.twig */
class __TwigTemplate_23a0e5cf2abe255ecc854bd51920b11e99c62db61a047e21e2e158b653f69802 extends Twig_Template
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
\t<div class=\"page-home\">
\t\t";
        // line 5
        $context["img"] = twig_random($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
        // line 6
        echo "\t\t<div class=\"hero-img\">
\t\t\t<img src=\"";
        // line 7
        echo $this->getAttribute((isset($context["img"]) ? $context["img"] : null), "url", array());
        echo "\">\t
\t\t</div>

\t\t";
        // line 10
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "noticia", array()), "mostra_noticia", array())) {
            // line 11
            echo "\t\t\t<div class=\"news\">
\t\t\t\t<p>";
            // line 12
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "noticia", array()), "texto1", array());
            echo "</p>       
\t\t\t\t<p>";
            // line 13
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "noticia", array()), "texto2", array());
            echo "</p>       
\t\t\t\t";
            // line 14
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "noticia", array()), "link_para_mais_info", array())) {
                // line 15
                echo "\t\t\t\t\t<a target=\"_blank\" href=\"";
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "noticia", array()), "link_para_mais_info", array());
                echo "\">More info</a>
\t\t\t    ";
            }
            // line 17
            echo "\t\t\t</div>
\t    ";
        }
        // line 19
        echo "\t    
\t\t";
        // line 20
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t</div>
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
        return array (  73 => 20,  70 => 19,  66 => 17,  60 => 15,  58 => 14,  54 => 13,  50 => 12,  47 => 11,  45 => 10,  39 => 7,  36 => 6,  34 => 5,  28 => 3,  11 => 1,);
    }
}
