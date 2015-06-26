<?php

/* home.html.twig */
class __TwigTemplate_aeb06c61dd006426e941aab406aa33f9574dd0fbcd94b2b1a5adde8523721de2 extends Twig_Template
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

\t";
        // line 9
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "noticia", array()), "mostra_noticia", array())) {
            // line 10
            echo "\t\t<div>
\t\t<p>";
            // line 11
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "noticia", array()), "texto1", array());
            echo "</p>       
\t\t<p>";
            // line 12
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "noticia", array()), "texto2", array());
            echo "</p>       
\t\t";
            // line 13
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "noticia", array()), "link_para_mais_info", array())) {
                // line 14
                echo "\t\t\t<a target=\"_blank\" href=\"";
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "noticia", array()), "link_para_mais_info", array());
                echo "\">More info</a>\t
\t    ";
            }
            // line 16
            echo "\t\t</div>
    ";
        }
        // line 18
        echo "
\t";
        // line 19
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
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
        return array (  71 => 19,  68 => 18,  64 => 16,  58 => 14,  56 => 13,  52 => 12,  48 => 11,  45 => 10,  43 => 9,  37 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
