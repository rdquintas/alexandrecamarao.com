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
\t\t<h2>";
        // line 14
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</h2>
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
        $context["counter"] = 0;
        echo "\t
\t\t
\t\t";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            echo "\t    
\t\t\t";
            // line 42
            if ((($this->getAttribute($context["img"], "ano", array()) == (isset($context["yearURLparam"]) ? $context["yearURLparam"] : null)) || ((isset($context["yearURLparam"]) ? $context["yearURLparam"] : null) == "ALL"))) {
                // line 43
                echo "\t\t\t    ";
                $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : null) + 1);
                // line 44
                echo "\t\t    ";
            }
            // line 45
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 

  \t\t<section class=\"container\">
  \t\t\t";
        // line 48
        if (((isset($context["counter"]) ? $context["counter"] : null) == 0)) {
            // line 49
            echo "\t\t    \t<h4>No results found for that year</h4>
\t\t\t";
        } else {
            // line 50
            echo "\t\t\t
\t            <ul id=\"da-thumbs\" class=\"da-thumbs\">
\t\t\t\t";
            // line 52
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                echo "\t    
\t\t\t\t    ";
                // line 53
                if ((($this->getAttribute($context["img"], "ano", array()) == (isset($context["yearURLparam"]) ? $context["yearURLparam"] : null)) || ((isset($context["yearURLparam"]) ? $context["yearURLparam"] : null) == "ALL"))) {
                    // line 54
                    echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                    // line 55
                    echo $this->getAttribute($context["img"], "url", array());
                    echo "\">
\t\t\t\t\t\t<img src=\"";
                    // line 56
                    echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
                    echo "/images/loading_spinner.gif\" alt=\"\" data-echo=\"";
                    echo $this->getAttribute($this->getAttribute($context["img"], "crop", array(0 => 0, 1 => 0, 2 => 300, 3 => 300), "method"), "url", array());
                    echo "\">
\t\t\t\t\t\t<div class=\"texto\">
\t\t\t\t\t\t\t<p class=\"description\">";
                    // line 58
                    echo $this->getAttribute($context["img"], "descricao", array());
                    echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t    ";
                }
                // line 63
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "            \t
\t            </ul>
\t\t\t";
        }
        // line 66
        echo "        </section>\t\t
\t\t";
        // line 67
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t</div>
\t<script type=\"text/javascript\">
\t
\t\t\$(document).ready(function() {
\t\t\t// Initializes the hoverdir stuff
\t\t\t\$(' #da-thumbs > li ').hoverdir();

\t\t\t// Initializes the lazy-load library
\t\t    echo.init({
\t\t        offset: 100,
\t\t        throttle: 250,
\t\t        unload: false
\t\t    });
\t\t});\t
\t</script>
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
        return array (  253 => 11,  246 => 9,  243 => 8,  235 => 7,  232 => 6,  220 => 5,  199 => 67,  196 => 66,  186 => 63,  178 => 58,  171 => 56,  167 => 55,  164 => 54,  162 => 53,  156 => 52,  152 => 50,  148 => 49,  146 => 48,  136 => 45,  133 => 44,  130 => 43,  128 => 42,  122 => 41,  117 => 39,  113 => 37,  107 => 36,  102 => 34,  99 => 33,  94 => 32,  90 => 31,  84 => 30,  81 => 29,  76 => 27,  73 => 26,  68 => 25,  64 => 24,  59 => 21,  56 => 20,  53 => 19,  51 => 18,  48 => 17,  46 => 16,  42 => 15,  38 => 14,  34 => 12,  31 => 4,  28 => 3,  11 => 1,);
    }
}
