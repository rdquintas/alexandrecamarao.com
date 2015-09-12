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
        $this->loadTemplate("exhibitions.html.twig", "exhibitions.html.twig", 1, "1513358444")->display($context);
        // line 71
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
        return array (  21 => 71,  19 => 1,);
    }
}


/* exhibitions.html.twig */
class __TwigTemplate_51e73943c8ef075f4dc12c3dc62f48bd5d938c491ea5be7cb8aff89876a4fae4_1513358444 extends Twig_Template
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
\t\t<h3>";
        // line 10
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</h3>
\t\t";
        // line 11
        $context["yearURLparam"] = $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "query", array(0 => "year"), "method");
        // line 12
        echo "
\t\t";
        // line 13
        if ( !(isset($context["yearURLparam"]) ? $context["yearURLparam"] : null)) {
            // line 14
            echo "\t\t\t";
            $context["yearURLparam"] = "ALL";
            // line 15
            echo "\t\t";
        }
        // line 16
        echo "\t\t
\t\t<label for=\"year\">YEAR:</label>

\t\t";
        // line 19
        if (((isset($context["yearURLparam"]) ? $context["yearURLparam"] : null) == "ALL")) {
            echo "\t
\t\t\t<a class=\"selected\" href=\"";
            // line 20
            echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "path", array());
            echo "\">ALL</a>
\t\t";
        } else {
            // line 21
            echo "\t
\t\t\t<a href=\"";
            // line 22
            echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "path", array());
            echo "\">ALL</a>
\t\t";
        }
        // line 24
        echo "
\t\t";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "anos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ano"]) {
            echo "    \t
    \t\t";
            // line 26
            if (($context["ano"] == (isset($context["yearURLparam"]) ? $context["yearURLparam"] : null))) {
                echo "\t
    \t\t\t<a class=\"selected\" href=\"#\">";
                // line 27
                echo $context["ano"];
                echo "</a>\t
\t\t\t";
            } else {
                // line 28
                echo "\t
\t\t\t\t<a href=\"";
                // line 29
                echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "path", array());
                echo "?year=";
                echo $context["ano"];
                echo "\">";
                echo $context["ano"];
                echo "</a>\t
\t\t\t";
            }
            // line 31
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ano'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t
\t\t";
        // line 33
        $context["counter"] = 0;
        echo "\t
\t\t
\t\t";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo "\t    
\t\t\t";
            // line 36
            if (((twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", array()), "Y") == (isset($context["yearURLparam"]) ? $context["yearURLparam"] : null)) || ((isset($context["yearURLparam"]) ? $context["yearURLparam"] : null) == "ALL"))) {
                // line 37
                echo "\t\t\t    ";
                $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : null) + 1);
                // line 38
                echo "\t\t    ";
            }
            // line 39
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 

\t\t";
        // line 41
        if (((isset($context["counter"]) ? $context["counter"] : null) == 0)) {
            // line 42
            echo "\t    \t<h4>No results found for that year</h4>
\t\t";
        } else {
            // line 43
            echo "\t
\t\t\t";
            // line 44
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                echo "\t
\t\t\t    ";
                // line 45
                if (((twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", array()), "Y") == (isset($context["yearURLparam"]) ? $context["yearURLparam"] : null)) || ((isset($context["yearURLparam"]) ? $context["yearURLparam"] : null) == "ALL"))) {
                    // line 46
                    echo "\t\t\t\t    <div class=\"exhibition-item\">
\t\t\t\t    \t<hr>
\t\t\t\t    \t";
                    // line 48
                    $context["img"] = $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($context["item"], "media", array()), "images", array())), "cropZoom", array(0 => 300, 1 => 300), "method");
                    echo "\t
\t\t\t\t    \t<h4 class=\"title\">";
                    // line 49
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</h4>
\t\t\t\t\t    ";
                    // line 50
                    if ((isset($context["img"]) ? $context["img"] : null)) {
                        // line 51
                        echo "\t\t\t\t\t\t    <div class=\"image\">
\t\t\t\t\t\t    \t<a href=\"";
                        // line 52
                        echo $this->getAttribute($context["item"], "url", array());
                        echo "\">
\t\t\t\t\t\t        \t";
                        // line 53
                        echo $this->getAttribute((isset($context["img"]) ? $context["img"] : null), "html", array());
                        echo "
\t\t\t\t\t\t        </a>
\t\t\t\t\t\t    </div>
\t\t\t\t\t    ";
                    }
                    // line 57
                    echo "\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t";
                    // line 58
                    if ($this->getAttribute($context["item"], "date", array())) {
                        // line 59
                        echo "\t\t\t\t\t        \t<p class=\"date\">";
                        echo twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", array()), "d/M/Y");
                        echo "</p>
\t\t\t\t\t        ";
                    }
                    // line 61
                    echo "\t\t\t\t\t        <p class=\"summary\">";
                    echo $this->env->getExtension('GravTwigExtension')->truncateFilter($this->getAttribute($context["item"], "content", array()), 350);
                    echo "</p>
\t\t\t\t\t        <p class=\"continue\"><a href=\"";
                    // line 62
                    echo $this->getAttribute($context["item"], "url", array());
                    echo "\">Continue Reading...</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t    \t";
                }
                // line 66
                echo "\t\t    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "\t\t";
        }
        // line 68
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
        return array (  262 => 68,  259 => 67,  253 => 66,  246 => 62,  241 => 61,  235 => 59,  233 => 58,  230 => 57,  223 => 53,  219 => 52,  216 => 51,  214 => 50,  210 => 49,  206 => 48,  202 => 46,  200 => 45,  194 => 44,  191 => 43,  187 => 42,  185 => 41,  176 => 39,  173 => 38,  170 => 37,  168 => 36,  162 => 35,  157 => 33,  154 => 32,  148 => 31,  139 => 29,  136 => 28,  131 => 27,  127 => 26,  121 => 25,  118 => 24,  113 => 22,  110 => 21,  105 => 20,  101 => 19,  96 => 16,  93 => 15,  90 => 14,  88 => 13,  85 => 12,  83 => 11,  79 => 10,  70 => 5,  66 => 1,  64 => 3,  50 => 1,  21 => 71,  19 => 1,);
    }
}
