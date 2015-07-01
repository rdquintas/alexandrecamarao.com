<?php

/* drawings.html.twig */
class __TwigTemplate_81fe401baaae2dc9e85d25e2813d4a83e609fe3c34364a70c343368b755b0ec9 extends Twig_Template
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
        $context["var"] = $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "query", array(0 => "ano"), "method");
        // line 5
        echo "
\t";
        // line 6
        if ( !(isset($context["var"]) ? $context["var"] : null)) {
            // line 7
            echo "\t\t";
            $context["var"] = "ALL";
            // line 8
            echo "\t";
        }
        // line 9
        echo "
\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["imagem"]) {
            echo "\t    
\t    ";
            // line 11
            if ((($this->getAttribute($context["imagem"], "ano", array()) == (isset($context["var"]) ? $context["var"] : null)) || ((isset($context["var"]) ? $context["var"] : null) == "ALL"))) {
                // line 12
                echo " \t\t\t<div>
\t\t\t\t<img src=\"";
                // line 13
                echo $this->getAttribute($context["imagem"], "url", array());
                echo "\">
\t\t\t\t<p>";
                // line 14
                echo $this->getAttribute($context["imagem"], "ano", array());
                echo "</p>
\t\t\t\t<p>";
                // line 15
                echo $this->getAttribute($context["imagem"], "descricao", array());
                echo "</p>
\t\t\t</div>
\t    ";
            }
            // line 18
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t";
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
        return array (  79 => 19,  73 => 18,  67 => 15,  63 => 14,  59 => 13,  56 => 12,  54 => 11,  48 => 10,  45 => 9,  42 => 8,  39 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
