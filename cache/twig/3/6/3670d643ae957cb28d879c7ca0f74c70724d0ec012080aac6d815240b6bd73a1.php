<?php

/* artworkpage.html.twig */
class __TwigTemplate_3670d643ae957cb28d879c7ca0f74c70724d0ec012080aac6d815240b6bd73a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "artworkpage.html.twig", 1);
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

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
\t";
        // line 14
        echo "
\t<div class=\"page-artwork\">
\t\t<h1>";
        // line 16
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</h1>
\t\t";
        // line 17
        $context["currentYear"] = twig_date_format_filter($this->env, "now", "Y");
        echo "\t
\t\t";
        // line 18
        $context["yearURLparam"] = $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "query", array(0 => "year"), "method");
        // line 19
        echo "
\t\t";
        // line 20
        if ( !(isset($context["yearURLparam"]) ? $context["yearURLparam"] : null)) {
            // line 21
            echo "\t\t\t";
            $context["yearURLparam"] = "ALL";
            // line 22
            echo "\t\t";
        }
        // line 23
        echo "\t\t
\t\t<label for=\"year\">YEAR:</label>
\t\t<select id=\"year\">
\t\t\t";
        // line 26
        if (((isset($context["yearURLparam"]) ? $context["yearURLparam"] : null) == "ALL")) {
            echo "\t\t
\t\t\t\t";
            // line 27
            echo $this->getAttribute($this, "createSelectEntry", array(0 => "true", 1 => "ALL"), "method");
            echo "
\t\t\t";
        } else {
            // line 28
            echo "\t
\t\t\t\t";
            // line 29
            echo $this->getAttribute($this, "createSelectEntry", array(0 => "false", 1 => "ALL"), "method");
            echo "
\t\t\t";
        }
        // line 31
        echo "
\t\t\t";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range((isset($context["currentYear"]) ? $context["currentYear"] : null), 2010));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "    \t
\t    \t\t";
            // line 33
            if (($context["i"] == (isset($context["yearURLparam"]) ? $context["yearURLparam"] : null))) {
                echo "\t\t
\t\t\t\t\t";
                // line 34
                echo $this->getAttribute($this, "createSelectEntry", array(0 => "true", 1 => $context["i"]), "method");
                echo "
\t\t\t\t";
            } else {
                // line 35
                echo "\t
\t\t\t\t\t";
                // line 36
                echo $this->getAttribute($this, "createSelectEntry", array(0 => "false", 1 => $context["i"]), "method");
                echo "
\t\t\t\t";
            }
            // line 38
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t\t</select>

\t\t";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            echo "\t    
\t\t    ";
            // line 42
            if ((($this->getAttribute($context["img"], "ano", array()) == (isset($context["yearURLparam"]) ? $context["yearURLparam"] : null)) || ((isset($context["yearURLparam"]) ? $context["yearURLparam"] : null) == "ALL"))) {
                // line 43
                echo "\t \t\t\t<div class=\"image\">\t\t
\t\t\t\t\t<a href=\"";
                // line 44
                echo $this->getAttribute($context["img"], "url", array());
                echo "\">
\t\t\t\t\t\t";
                // line 45
                echo $this->getAttribute($context["img"], "resize", array(0 => 200, 1 => 200), "method");
                echo "
\t\t\t\t\t</a>
\t\t\t\t\t<p class=\"year\">";
                // line 47
                echo $this->getAttribute($context["img"], "ano", array());
                echo "</p>
\t\t\t\t\t<p class=\"description\">";
                // line 48
                echo $this->getAttribute($context["img"], "descricao", array());
                echo "</p>
\t\t\t\t</div>
\t\t    ";
            }
            // line 51
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "\t\t";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t</div>
";
    }

    // line 7
    public function getcreateSelectEntry($__selected__ = null, $__value__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "selected" => $__selected__,
            "value" => $__value__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 8
            echo "\t\t";
            if (((isset($context["selected"]) ? $context["selected"] : null) == "true")) {
                // line 9
                echo "\t\t\t<option value=\"";
                echo (isset($context["value"]) ? $context["value"] : null);
                echo "\" selected=\"selected\">";
                echo (isset($context["value"]) ? $context["value"] : null);
                echo "</option>
\t\t";
            } else {
                // line 10
                echo "\t\t\t
\t\t\t<option value=\"";
                // line 11
                echo (isset($context["value"]) ? $context["value"] : null);
                echo "\">";
                echo (isset($context["value"]) ? $context["value"] : null);
                echo "</option>
\t\t";
            }
            // line 13
            echo "\t";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "artworkpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 13,  187 => 11,  184 => 10,  176 => 9,  173 => 8,  161 => 7,  153 => 52,  147 => 51,  141 => 48,  137 => 47,  132 => 45,  128 => 44,  125 => 43,  123 => 42,  117 => 41,  113 => 39,  107 => 38,  102 => 36,  99 => 35,  94 => 34,  90 => 33,  84 => 32,  81 => 31,  76 => 29,  73 => 28,  68 => 27,  64 => 26,  59 => 23,  56 => 22,  53 => 21,  51 => 20,  48 => 19,  46 => 18,  42 => 17,  38 => 16,  34 => 14,  31 => 6,  28 => 5,  11 => 1,);
    }
}
