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
\t\t<h3>";
        // line 7
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</h3>
\t\t";
        // line 8
        $context["yearURLparam"] = $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "query", array(0 => "year"), "method");
        // line 9
        echo "
\t\t";
        // line 10
        if ( !(isset($context["yearURLparam"]) ? $context["yearURLparam"] : null)) {
            // line 11
            echo "\t\t\t";
            $context["yearURLparam"] = "ALL";
            // line 12
            echo "\t\t";
        }
        // line 13
        echo "\t\t
\t\t<label for=\"year\">YEAR:</label>

\t\t";
        // line 16
        if (((isset($context["yearURLparam"]) ? $context["yearURLparam"] : null) == "ALL")) {
            echo "\t
\t\t\t<a class=\"selected\" href=\"";
            // line 17
            echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "path", array());
            echo "\">ALL</a>
\t\t";
        } else {
            // line 18
            echo "\t
\t\t\t<a href=\"";
            // line 19
            echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "path", array());
            echo "\">ALL</a>
\t\t";
        }
        // line 21
        echo "
\t\t";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "anos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ano"]) {
            echo "    \t
    \t\t";
            // line 23
            if (($context["ano"] == (isset($context["yearURLparam"]) ? $context["yearURLparam"] : null))) {
                echo "\t
    \t\t\t<a class=\"selected\" href=\"#\">";
                // line 24
                echo $context["ano"];
                echo "</a>\t
\t\t\t";
            } else {
                // line 25
                echo "\t
\t\t\t\t<a href=\"";
                // line 26
                echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "path", array());
                echo "?year=";
                echo $context["ano"];
                echo "\">";
                echo $context["ano"];
                echo "</a>\t
\t\t\t";
            }
            // line 28
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ano'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t
\t\t";
        // line 30
        $context["counter"] = 0;
        echo "\t
\t\t
\t\t";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            echo "\t    
\t\t\t";
            // line 33
            if ((($this->getAttribute($context["img"], "ano", array()) == (isset($context["yearURLparam"]) ? $context["yearURLparam"] : null)) || ((isset($context["yearURLparam"]) ? $context["yearURLparam"] : null) == "ALL"))) {
                // line 34
                echo "\t\t\t    ";
                $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : null) + 1);
                // line 35
                echo "\t\t    ";
            }
            // line 36
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 

  \t\t<section class=\"container\">
  \t\t\t";
        // line 39
        if (((isset($context["counter"]) ? $context["counter"] : null) == 0)) {
            // line 40
            echo "\t\t    \t<h4>No results found for that year</h4>
\t\t\t";
        } else {
            // line 41
            echo "\t\t\t
\t            <ul id=\"da-thumbs\" class=\"da-thumbs\">
\t\t\t\t";
            // line 43
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                echo "\t    
\t\t\t\t    ";
                // line 44
                if ((($this->getAttribute($context["img"], "ano", array()) == (isset($context["yearURLparam"]) ? $context["yearURLparam"] : null)) || ((isset($context["yearURLparam"]) ? $context["yearURLparam"] : null) == "ALL"))) {
                    // line 45
                    echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                    // line 46
                    echo $this->getAttribute($context["img"], "url", array());
                    echo "\">
\t\t\t\t\t\t";
                    // line 48
                    echo "\t\t\t\t\t\t<img src=\"";
                    echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
                    echo "/images/loading_spinner.gif\" alt=\"\" data-echo=\"";
                    echo $this->getAttribute($this->getAttribute($context["img"], "resize", array(0 => 300, 1 => 300), "method"), "url", array());
                    echo "\">
\t\t\t\t\t";
                    // line 52
                    echo "\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t    ";
                }
                // line 55
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "            \t
\t            </ul>
\t\t\t";
        }
        // line 58
        echo "        </section>\t\t
\t\t";
        // line 59
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
        return array (  196 => 59,  193 => 58,  183 => 55,  178 => 52,  171 => 48,  167 => 46,  164 => 45,  162 => 44,  156 => 43,  152 => 41,  148 => 40,  146 => 39,  136 => 36,  133 => 35,  130 => 34,  128 => 33,  122 => 32,  117 => 30,  114 => 29,  108 => 28,  99 => 26,  96 => 25,  91 => 24,  87 => 23,  81 => 22,  78 => 21,  73 => 19,  70 => 18,  65 => 17,  61 => 16,  56 => 13,  53 => 12,  50 => 11,  48 => 10,  45 => 9,  43 => 8,  39 => 7,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
