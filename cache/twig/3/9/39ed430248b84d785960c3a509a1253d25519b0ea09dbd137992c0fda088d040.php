<?php

/* modular/features.html.twig */
class __TwigTemplate_39ed430248b84d785960c3a509a1253d25519b0ea09dbd137992c0fda088d040 extends Twig_Template
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
        echo "<div class=\"modular-row features ";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "class", array());
        echo "\">
    ";
        // line 2
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
    ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 4
            echo "        <a class=\"button";
            if ($this->getAttribute($context["button"], "primary", array())) {
                echo " primary";
            }
            echo "\" href=\"";
            echo $this->getAttribute($context["button"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["button"], "text", array());
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    <div class=\"feature-items\">
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "features", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 8
            echo "           <div class=\"feature\">
            ";
            // line 9
            if ($this->getAttribute($context["feature"], "icon", array())) {
                // line 10
                echo "            <i class=\"fa fa-fw fa-";
                echo $this->getAttribute($context["feature"], "icon", array());
                echo "\"></i>
            <div class=\"feature-content icon-offset\">
            ";
            } else {
                // line 13
                echo "            <div class=\"feature-content\">
            ";
            }
            // line 15
            echo "            ";
            if ($this->getAttribute($context["feature"], "header", array())) {
                // line 16
                echo "            <h4>";
                echo $this->getAttribute($context["feature"], "header", array());
                echo "</h4>
            ";
            }
            // line 18
            echo "            ";
            if ($this->getAttribute($context["feature"], "text", array())) {
                // line 19
                echo "            <p>";
                echo $this->getAttribute($context["feature"], "text", array());
                echo "</p>
            <p><a href=\"";
                // line 20
                echo $this->getAttribute($context["feature"], "linkurl", array());
                echo "\">";
                echo $this->getAttribute($context["feature"], "linktext", array());
                echo "</a></p>
            ";
            }
            // line 22
            echo "            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 25,  94 => 22,  87 => 20,  82 => 19,  79 => 18,  73 => 16,  70 => 15,  66 => 13,  59 => 10,  57 => 9,  54 => 8,  50 => 7,  47 => 6,  32 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}
