<?php

/* drawings.html.twig */
class __TwigTemplate_6f9314177f880defc16f8f7767301e676b0f02a9cf28ad835807f8354beda2bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "drawings.html.twig", 1);
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
        // line 4
        echo "\t";
        $context["img"] = twig_random($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
        // line 5
        echo "\t<div>
\t\t<img src=\"";
        // line 6
        echo $this->getAttribute((isset($context["img"]) ? $context["img"] : null), "url", array());
        echo "\">\t
\t</div>

\tCENAS: ";
        // line 9
        echo $this->getAttribute((isset($context["img"]) ? $context["img"] : null), "cenas", array());
        echo "


\t";
        // line 12
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "noticia", array()), "mostra_noticia", array())) {
            // line 13
            echo "\t\t<div>
\t\t<p>";
            // line 14
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "noticia", array()), "texto1", array());
            echo "</p>       
\t\t<p>";
            // line 15
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "noticia", array()), "texto2", array());
            echo "</p>       
\t\t";
            // line 16
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "noticia", array()), "link_para_mais_info", array())) {
                // line 17
                echo "\t\t\t<a target=\"_blank\" href=\"";
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "noticia", array()), "link_para_mais_info", array());
                echo "\">More info</a>\t
\t    ";
            }
            // line 19
            echo "\t\t</div>
    ";
        }
        // line 21
        echo "
\t";
        // line 22
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
";
    }

    public function getTemplateName()
    {
        return "drawings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 22,  74 => 21,  70 => 19,  64 => 17,  62 => 16,  58 => 15,  54 => 14,  51 => 13,  49 => 12,  43 => 9,  37 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
