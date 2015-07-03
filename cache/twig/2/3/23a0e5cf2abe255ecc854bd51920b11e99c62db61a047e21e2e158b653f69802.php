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
\t\t<button id=\"zrq\">TESTE</button>
\t\t<div class=\"teste_zrq\"></div>
\t\t";
        // line 7
        $context["img"] = twig_random($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
        // line 8
        echo "\t\t<div class=\"hero-img\">
\t\t\t<img src=\"";
        // line 9
        echo $this->getAttribute((isset($context["img"]) ? $context["img"] : null), "url", array());
        echo "\">\t
\t\t</div>

\t\t";
        // line 12
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "noticia", array()), "mostra_noticia", array())) {
            // line 13
            echo "\t\t\t<div class=\"news\">
\t\t\t\t<p>";
            // line 14
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "noticia", array()), "texto1", array());
            echo "</p>       
\t\t\t\t<p>";
            // line 15
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "noticia", array()), "texto2", array());
            echo "</p>       
\t\t\t\t";
            // line 16
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "noticia", array()), "link_para_mais_info", array())) {
                // line 17
                echo "\t\t\t\t\t<a target=\"_blank\" href=\"";
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "noticia", array()), "link_para_mais_info", array());
                echo "\">More info</a>
\t\t\t    ";
            }
            // line 19
            echo "\t\t\t</div>
\t    ";
        }
        // line 21
        echo "\t    
\t\t";
        // line 22
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
        return array (  75 => 22,  72 => 21,  68 => 19,  62 => 17,  60 => 16,  56 => 15,  52 => 14,  49 => 13,  47 => 12,  41 => 9,  38 => 8,  36 => 7,  28 => 3,  11 => 1,);
    }
}
