<?php

/* exhibitions.html.twig */
class __TwigTemplate_f6bc5c72cd786ee3c19f5cea303074083c32211ff7b41014bf909366f22fc110 extends Twig_Template
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
        $this->loadTemplate("exhibitions.html.twig", "exhibitions.html.twig", 1, "307580691")->display($context);
        // line 67
        echo "
";
    }

    public function getTemplateName()
    {
        return "exhibitions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 67,  19 => 1,);
    }
}


/* exhibitions.html.twig */
class __TwigTemplate_f6bc5c72cd786ee3c19f5cea303074083c32211ff7b41014bf909366f22fc110_307580691 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "exhibitions.html.twig", 1);
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
        // line 3
        $context["collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        echo "\t\t

\t";
        // line 14
        echo "
\t<div class=\"page-exhibitions\">
\t\t<h2>";
        // line 16
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</h2>
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
        $context['_seq'] = twig_ensure_traversable(range((isset($context["currentYear"]) ? $context["currentYear"] : null), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "ano_inicial", array())));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo "\t\t\t
\t\t    ";
            // line 42
            if (((twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", array()), "Y") == (isset($context["yearURLparam"]) ? $context["yearURLparam"] : null)) || ((isset($context["yearURLparam"]) ? $context["yearURLparam"] : null) == "ALL"))) {
                // line 43
                echo "\t\t\t    <div class=\"exhibition-item\">
\t\t\t    \t<hr>
\t\t\t    \t";
                // line 45
                $context["img"] = $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($context["item"], "media", array()), "images", array())), "cropZoom", array(0 => 300, 1 => 300), "method");
                echo "\t
\t\t\t    \t<h4 class=\"title\">";
                // line 46
                echo $this->getAttribute($context["item"], "title", array());
                echo "</h4>
\t\t\t\t    ";
                // line 47
                if ((isset($context["img"]) ? $context["img"] : null)) {
                    // line 48
                    echo "\t\t\t\t\t    <div class=\"image\">
\t\t\t\t\t    \t<a href=\"";
                    // line 49
                    echo $this->getAttribute($context["item"], "url", array());
                    echo "\">
\t\t\t\t\t        \t";
                    // line 50
                    echo $this->getAttribute((isset($context["img"]) ? $context["img"] : null), "html", array());
                    echo "
\t\t\t\t\t        </a>
\t\t\t\t\t    </div>
\t\t\t\t    ";
                }
                // line 54
                echo "\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t";
                // line 55
                if ($this->getAttribute($context["item"], "date", array())) {
                    // line 56
                    echo "\t\t\t\t        \t<p class=\"date\">";
                    echo twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", array()), "d/M/Y");
                    echo "</p>
\t\t\t\t        ";
                }
                // line 58
                echo "\t\t\t\t        <p class=\"summary\">";
                echo $this->env->getExtension('GravTwigExtension')->truncateFilter($this->getAttribute($context["item"], "content", array()), 350);
                echo "</p>
\t\t\t\t        <p class=\"continue\"><a href=\"";
                // line 59
                echo $this->getAttribute($context["item"], "url", array());
                echo "\">Continue Reading...</a></p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t    \t";
            }
            // line 63
            echo "\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "\t</div>
\t";
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
        return "exhibitions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 13,  255 => 11,  252 => 10,  244 => 9,  241 => 8,  229 => 7,  224 => 64,  218 => 63,  211 => 59,  206 => 58,  200 => 56,  198 => 55,  195 => 54,  188 => 50,  184 => 49,  181 => 48,  179 => 47,  175 => 46,  171 => 45,  167 => 43,  165 => 42,  159 => 41,  155 => 39,  149 => 38,  144 => 36,  141 => 35,  136 => 34,  132 => 33,  126 => 32,  123 => 31,  118 => 29,  115 => 28,  110 => 27,  106 => 26,  101 => 23,  98 => 22,  95 => 21,  93 => 20,  90 => 19,  88 => 18,  84 => 17,  80 => 16,  76 => 14,  70 => 5,  66 => 1,  64 => 3,  50 => 1,  21 => 67,  19 => 1,);
    }
}
