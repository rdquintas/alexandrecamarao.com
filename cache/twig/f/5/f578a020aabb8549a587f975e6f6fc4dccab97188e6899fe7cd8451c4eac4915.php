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

\t\t";
        // line 9
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "noticia", array()), "mostra_noticia", array())) {
            // line 10
            echo "\t\t\t<div class=\"news\">
\t\t\t\t<h4>";
            // line 11
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "noticia", array()), "texto1", array());
            echo "</h4>       
\t\t\t\t<p>";
            // line 12
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "noticia", array()), "texto2", array());
            echo "</p>       
\t\t\t\t";
            // line 13
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "noticia", array()), "link_para_mais_info", array())) {
                // line 14
                echo "\t\t\t\t\t<a target=\"_blank\" href=\"";
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "noticia", array()), "link_para_mais_info", array());
                echo "\">More info</a>
\t\t\t    ";
            }
            // line 16
            echo "\t\t\t</div>
\t    ";
        }
        // line 18
        echo "\t    
\t\t";
        // line 19
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t</section>
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
        return array (  72 => 19,  69 => 18,  65 => 16,  59 => 14,  57 => 13,  53 => 12,  49 => 11,  46 => 10,  44 => 9,  39 => 7,  35 => 5,  33 => 4,  28 => 3,  11 => 1,);
    }
}
