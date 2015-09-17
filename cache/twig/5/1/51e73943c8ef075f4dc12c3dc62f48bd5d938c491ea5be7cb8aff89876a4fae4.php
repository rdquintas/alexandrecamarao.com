<?php

/* exhibitions.html.twig */
class __TwigTemplate_51e73943c8ef075f4dc12c3dc62f48bd5d938c491ea5be7cb8aff89876a4fae4 extends Twig_Template
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
        $this->loadTemplate("exhibitions.html.twig", "exhibitions.html.twig", 1, "1329585655")->display($context);
        // line 73
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
        return array (  21 => 73,  19 => 1,);
    }
}


/* exhibitions.html.twig */
class __TwigTemplate_51e73943c8ef075f4dc12c3dc62f48bd5d938c491ea5be7cb8aff89876a4fae4_1329585655 extends Twig_Template
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



\t<div class=\"page-exhibitions\">
\t\t<div class=\"intro\">
\t\t<p>";
        // line 11
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</p>
\t\t";
        // line 12
        $context["yearURLparam"] = $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "query", array(0 => "year"), "method");
        // line 13
        echo "
\t\t";
        // line 14
        if ( !(isset($context["yearURLparam"]) ? $context["yearURLparam"] : null)) {
            // line 15
            echo "\t\t\t";
            $context["yearURLparam"] = "ALL";
            // line 16
            echo "\t\t";
        }
        // line 17
        echo "\t\t
\t\t";
        // line 19
        echo "
\t\t";
        // line 20
        if (((isset($context["yearURLparam"]) ? $context["yearURLparam"] : null) == "ALL")) {
            echo "\t
\t\t\t<a class=\"selected\" href=\"";
            // line 21
            echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "path", array());
            echo "\">All</a>
\t\t";
        } else {
            // line 22
            echo "\t
\t\t\t<a href=\"";
            // line 23
            echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "path", array());
            echo "\">All</a>
\t\t";
        }
        // line 25
        echo "
\t\t";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "anos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ano"]) {
            echo "    \t
    \t\t";
            // line 27
            if (($context["ano"] == (isset($context["yearURLparam"]) ? $context["yearURLparam"] : null))) {
                echo "\t
    \t\t\t<a class=\"selected\" href=\"#\">";
                // line 28
                echo $context["ano"];
                echo "</a>\t
\t\t\t";
            } else {
                // line 29
                echo "\t
\t\t\t\t<a href=\"";
                // line 30
                echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "path", array());
                echo "?year=";
                echo $context["ano"];
                echo "\">";
                echo $context["ano"];
                echo "</a>\t
\t\t\t";
            }
            // line 32
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ano'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t
\t\t";
        // line 34
        $context["counter"] = 0;
        echo "\t
\t\t
\t\t";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo "\t    
\t\t\t";
            // line 37
            if (((twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", array()), "Y") == (isset($context["yearURLparam"]) ? $context["yearURLparam"] : null)) || ((isset($context["yearURLparam"]) ? $context["yearURLparam"] : null) == "ALL"))) {
                // line 38
                echo "\t\t\t    ";
                $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : null) + 1);
                // line 39
                echo "\t\t    ";
            }
            // line 40
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 

\t\t</div>
\t\t
\t\t";
        // line 44
        if (((isset($context["counter"]) ? $context["counter"] : null) == 0)) {
            // line 45
            echo "\t    \t<h4>No results found for that year</h4>
\t\t";
        } else {
            // line 46
            echo "\t
\t\t\t";
            // line 47
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                echo "\t
\t\t\t    ";
                // line 48
                if (((twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", array()), "Y") == (isset($context["yearURLparam"]) ? $context["yearURLparam"] : null)) || ((isset($context["yearURLparam"]) ? $context["yearURLparam"] : null) == "ALL"))) {
                    // line 49
                    echo "\t\t\t\t    <div class=\"exhibition-item\">
\t\t\t\t    \t";
                    // line 50
                    $context["img"] = $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($context["item"], "media", array()), "images", array())), "cropZoom", array(0 => 300, 1 => 300), "method");
                    echo "\t
\t\t\t\t    \t<h5 class=\"title\">";
                    // line 51
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</h5>
\t\t\t\t\t    ";
                    // line 52
                    if ((isset($context["img"]) ? $context["img"] : null)) {
                        // line 53
                        echo "\t\t\t\t\t\t    <div class=\"image\">
\t\t\t\t\t\t    \t<a href=\"";
                        // line 54
                        echo $this->getAttribute($context["item"], "url", array());
                        echo "\">
\t\t\t\t\t\t        \t";
                        // line 55
                        echo $this->getAttribute((isset($context["img"]) ? $context["img"] : null), "html", array());
                        echo "
\t\t\t\t\t\t        </a>
\t\t\t\t\t\t    </div>
\t\t\t\t\t    ";
                    }
                    // line 59
                    echo "\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t";
                    // line 60
                    if ($this->getAttribute($context["item"], "date", array())) {
                        // line 61
                        echo "\t\t\t\t\t        \t<p class=\"date\">";
                        echo twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", array()), "d/M/Y");
                        echo "</p>
\t\t\t\t\t        ";
                    }
                    // line 63
                    echo "\t\t\t\t\t        <p class=\"summary\">";
                    echo $this->env->getExtension('GravTwigExtension')->truncateFilter($this->getAttribute($context["item"], "content", array()), 350);
                    echo "</p>
\t\t\t\t\t        <p class=\"continue\"><a href=\"";
                    // line 64
                    echo $this->getAttribute($context["item"], "url", array());
                    echo "\">Continue Reading...</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t    \t";
                }
                // line 68
                echo "\t\t    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "\t\t";
        }
        // line 70
        echo "\t</div>
\t";
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
        return array (  265 => 70,  262 => 69,  256 => 68,  249 => 64,  244 => 63,  238 => 61,  236 => 60,  233 => 59,  226 => 55,  222 => 54,  219 => 53,  217 => 52,  213 => 51,  209 => 50,  206 => 49,  204 => 48,  198 => 47,  195 => 46,  191 => 45,  189 => 44,  178 => 40,  175 => 39,  172 => 38,  170 => 37,  164 => 36,  159 => 34,  156 => 33,  150 => 32,  141 => 30,  138 => 29,  133 => 28,  129 => 27,  123 => 26,  120 => 25,  115 => 23,  112 => 22,  107 => 21,  103 => 20,  100 => 19,  97 => 17,  94 => 16,  91 => 15,  89 => 14,  86 => 13,  84 => 12,  80 => 11,  70 => 5,  66 => 1,  64 => 3,  50 => 1,  21 => 73,  19 => 1,);
    }
}
