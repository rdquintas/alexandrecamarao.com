<?php

/* artworkpage.html.twig */
class __TwigTemplate_0ed884b5d43b572db91849b7861ec448dee45d4c27ed7c042f72d03a26688348 extends Twig_Template
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
\t";
        // line 12
        echo "
\t<div class=\"page-artwork\">
\t\t<h1>";
        // line 14
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</h1>
\t\t";
        // line 15
        $context["currentYear"] = twig_date_format_filter($this->env, "now", "Y");
        echo "\t
\t\t";
        // line 16
        $context["yearURLparam"] = $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "query", array(0 => "year"), "method");
        // line 17
        echo "
\t\t";
        // line 18
        if ( !(isset($context["yearURLparam"]) ? $context["yearURLparam"] : null)) {
            // line 19
            echo "\t\t\t";
            $context["yearURLparam"] = "ALL";
            // line 20
            echo "\t\t";
        }
        // line 21
        echo "\t\t
\t\t<label for=\"year\">YEAR:</label>
\t\t<select id=\"year\">
\t\t\t";
        // line 24
        if (((isset($context["yearURLparam"]) ? $context["yearURLparam"] : null) == "ALL")) {
            echo "\t\t
\t\t\t\t";
            // line 25
            echo $this->getAttribute($this, "createSelectEntry", array(0 => "true", 1 => "ALL"), "method");
            echo "
\t\t\t";
        } else {
            // line 26
            echo "\t
\t\t\t\t";
            // line 27
            echo $this->getAttribute($this, "createSelectEntry", array(0 => "false", 1 => "ALL"), "method");
            echo "
\t\t\t";
        }
        // line 29
        echo "
\t\t\t";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range((isset($context["currentYear"]) ? $context["currentYear"] : null), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "ano_inicial", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "    \t
\t    \t\t";
            // line 31
            if (($context["i"] == (isset($context["yearURLparam"]) ? $context["yearURLparam"] : null))) {
                echo "\t\t
\t\t\t\t\t";
                // line 32
                echo $this->getAttribute($this, "createSelectEntry", array(0 => "true", 1 => $context["i"]), "method");
                echo "
\t\t\t\t";
            } else {
                // line 33
                echo "\t
\t\t\t\t\t";
                // line 34
                echo $this->getAttribute($this, "createSelectEntry", array(0 => "false", 1 => $context["i"]), "method");
                echo "
\t\t\t\t";
            }
            // line 36
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t\t</select>

\t\t";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            echo "\t    
\t\t    ";
            // line 40
            if ((($this->getAttribute($context["img"], "ano", array()) == (isset($context["yearURLparam"]) ? $context["yearURLparam"] : null)) || ((isset($context["yearURLparam"]) ? $context["yearURLparam"] : null) == "ALL"))) {
                // line 41
                echo "\t \t\t\t<div class=\"image\">\t\t
\t\t\t\t\t<a href=\"";
                // line 42
                echo $this->getAttribute($context["img"], "url", array());
                echo "\">
\t\t\t\t\t<img src=\"";
                // line 43
                echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
                echo "/images/loading_spinner.gif\" alt=\"xxx\" data-echo=\"";
                echo $this->getAttribute($this->getAttribute($context["img"], "resize", array(0 => 200, 1 => 200), "method"), "url", array());
                echo "\">
\t\t\t\t\t</a>
\t\t\t\t\t<p class=\"year\">";
                // line 45
                echo $this->getAttribute($context["img"], "ano", array());
                echo "</p>
\t\t\t\t\t<p class=\"description\">";
                // line 46
                echo $this->getAttribute($context["img"], "descricao", array());
                echo "</p>
\t\t\t\t</div>
\t\t    ";
            }
            // line 49
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\t\t
\t\t";
        // line 50
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t</div>

";
    }

    // line 5
    public function getcreateSelectEntry($__selected__ = null, $__value__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "selected" => $__selected__,
            "value" => $__value__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 6
            echo "\t\t";
            if (((isset($context["selected"]) ? $context["selected"] : null) == "true")) {
                // line 7
                echo "\t\t\t<option value=\"";
                echo (isset($context["value"]) ? $context["value"] : null);
                echo "\" selected=\"selected\">";
                echo (isset($context["value"]) ? $context["value"] : null);
                echo "</option>
\t\t";
            } else {
                // line 8
                echo "\t\t\t
\t\t\t<option value=\"";
                // line 9
                echo (isset($context["value"]) ? $context["value"] : null);
                echo "\">";
                echo (isset($context["value"]) ? $context["value"] : null);
                echo "</option>
\t\t";
            }
            // line 11
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
        return array (  198 => 11,  191 => 9,  188 => 8,  180 => 7,  177 => 6,  165 => 5,  157 => 50,  149 => 49,  143 => 46,  139 => 45,  132 => 43,  128 => 42,  125 => 41,  123 => 40,  117 => 39,  113 => 37,  107 => 36,  102 => 34,  99 => 33,  94 => 32,  90 => 31,  84 => 30,  81 => 29,  76 => 27,  73 => 26,  68 => 25,  64 => 24,  59 => 21,  56 => 20,  53 => 19,  51 => 18,  48 => 17,  46 => 16,  42 => 15,  38 => 14,  34 => 12,  31 => 4,  28 => 3,  11 => 1,);
    }
}
