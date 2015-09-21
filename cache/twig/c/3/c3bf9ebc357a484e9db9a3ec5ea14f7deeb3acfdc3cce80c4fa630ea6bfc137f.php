<?php

/* artworkpage.html.twig */
class __TwigTemplate_c3bf9ebc357a484e9db9a3ec5ea14f7deeb3acfdc3cce80c4fa630ea6bfc137f extends Twig_Template
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
";
        // line 5
        echo $this->env->getExtension('GravTwigExtension')->dump($this->env, $context, (isset($context["uri"]) ? $context["uri"] : null));
        echo "
\t<div class=\"page-artwork\">
\t\t<div class=\"intro\">
\t\t<p>";
        // line 8
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</p>
\t\t";
        // line 9
        $context["yearURLparam"] = $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "query", array(0 => "year"), "method");
        // line 10
        echo "
\t\t";
        // line 11
        if ( !(isset($context["yearURLparam"]) ? $context["yearURLparam"] : null)) {
            // line 12
            echo "\t\t\t";
            $context["yearURLparam"] = "ALL";
            // line 13
            echo "\t\t";
        }
        // line 14
        echo "\t\t
\t\t";
        // line 16
        echo "
\t\t";
        // line 17
        if (((isset($context["yearURLparam"]) ? $context["yearURLparam"] : null) == "ALL")) {
            echo "\t
\t\t\t<a class=\"selected\" href=\"";
            // line 18
            echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "path", array());
            echo "\">All</a>
\t\t";
        } else {
            // line 19
            echo "\t
\t\t\t<a href=\"";
            // line 20
            echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "path", array());
            echo "\">All</a>
\t\t";
        }
        // line 22
        echo "
\t\t";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "anos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ano"]) {
            echo "    \t
    \t\t";
            // line 24
            if (($context["ano"] == (isset($context["yearURLparam"]) ? $context["yearURLparam"] : null))) {
                echo "\t
    \t\t\t<a class=\"selected\" href=\"#\">";
                // line 25
                echo $context["ano"];
                echo "</a>\t
\t\t\t";
            } else {
                // line 26
                echo "\t
\t\t\t\t<a href=\"";
                // line 27
                echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "path", array());
                echo "?year=";
                echo $context["ano"];
                echo "\">";
                echo $context["ano"];
                echo "</a>\t
\t\t\t";
            }
            // line 29
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ano'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t
\t\t";
        // line 31
        $context["counter"] = 0;
        echo "\t
\t\t
\t\t";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            echo "\t    
\t\t\t";
            // line 34
            if ((($this->getAttribute($context["img"], "ano", array()) == (isset($context["yearURLparam"]) ? $context["yearURLparam"] : null)) || ((isset($context["yearURLparam"]) ? $context["yearURLparam"] : null) == "ALL"))) {
                // line 35
                echo "\t\t\t    ";
                $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : null) + 1);
                // line 36
                echo "\t\t    ";
            }
            // line 37
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
\t\t</div>
  \t\t<section class=\"container\">
  \t\t\t";
        // line 40
        if (((isset($context["counter"]) ? $context["counter"] : null) == 0)) {
            // line 41
            echo "\t\t    \t<h4>No results found for that year</h4>
\t\t\t";
        } else {
            // line 42
            echo "\t\t\t
\t            <ul id=\"da-thumbs\" class=\"da-thumbs\">
\t\t\t\t";
            // line 44
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                echo "\t    
\t\t\t\t    ";
                // line 45
                if ((($this->getAttribute($context["img"], "ano", array()) == (isset($context["yearURLparam"]) ? $context["yearURLparam"] : null)) || ((isset($context["yearURLparam"]) ? $context["yearURLparam"] : null) == "ALL"))) {
                    // line 46
                    echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                    // line 47
                    echo $this->getAttribute($context["img"], "url", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["img"], "descricao", array());
                    echo "\">
\t\t\t\t\t\t";
                    // line 49
                    echo "\t\t\t\t\t\t<img src=\"";
                    echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
                    echo "/images/loading_spinner.gif\" alt=\"\" data-echo=\"";
                    echo $this->getAttribute($this->getAttribute($context["img"], "cropResize", array(0 => 300, 1 => 300), "method"), "url", array());
                    echo "\">
\t\t\t\t\t\t<div class=\"texto\">
\t\t\t\t\t\t\t<p class=\"description\">";
                    // line 51
                    echo $this->getAttribute($context["img"], "descricao", array());
                    echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t    ";
                }
                // line 56
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "            \t
\t            </ul>
\t\t\t";
        }
        // line 59
        echo "        </section>\t\t
\t\t";
        // line 60
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t</div>
\t
";
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
        return array (  204 => 60,  201 => 59,  191 => 56,  183 => 51,  175 => 49,  169 => 47,  166 => 46,  164 => 45,  158 => 44,  154 => 42,  150 => 41,  148 => 40,  138 => 37,  135 => 36,  132 => 35,  130 => 34,  124 => 33,  119 => 31,  116 => 30,  110 => 29,  101 => 27,  98 => 26,  93 => 25,  89 => 24,  83 => 23,  80 => 22,  75 => 20,  72 => 19,  67 => 18,  63 => 17,  60 => 16,  57 => 14,  54 => 13,  51 => 12,  49 => 11,  46 => 10,  44 => 9,  40 => 8,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
