<?php

/* partials/base.html.twig */
class __TwigTemplate_52d621cbf6e45e51f83322908ce7cb0bc036b0a40a22feb78cea1f77ca20e7cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'social' => array($this, 'block_social'),
            'header_extra' => array($this, 'block_header_extra'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'showcase' => array($this, 'block_showcase'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 41
        echo "</head>
<body id=\"top\" class=\"";
        // line 42
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
    <div id=\"sb-site\">
        ";
        // line 44
        $this->displayBlock('header', $context, $blocks);
        // line 62
        echo "
        ";
        // line 63
        $this->displayBlock('showcase', $context, $blocks);
        // line 64
        echo "
        ";
        // line 65
        $this->displayBlock('body', $context, $blocks);
        // line 74
        echo "        
    </div>
    <div class=\"sb-slidebar sb-left sb-width-thin\">
        <div id=\"panel\">
        ";
        // line 78
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 78)->display($context);
        // line 79
        echo "        </div>
    </div>
    ";
        // line 81
        $this->displayBlock('bottom', $context, $blocks);
        // line 93
        echo "</body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 6
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
    ";
        // line 7
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 7)->display($context);
        // line 8
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/favicon.png\" />

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/app.dist.css", 1 => 100), "method");
        // line 13
        echo "        ";
        // line 14
        echo "        ";
        // line 15
        echo "        ";
        // line 16
        echo "        ";
        // line 17
        echo "        ";
        // line 18
        echo "        ";
        // line 19
        echo "        ";
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 10))) {
            // line 20
            echo "            ";
            // line 21
            echo "        ";
        }
        // line 22
        echo "        ";
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 23
            echo "            ";
            // line 24
            echo "            ";
            // line 25
            echo "            ";
            // line 26
            echo "        ";
        }
        // line 27
        echo "    ";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 32
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/app.dist.js", 1 => 100), "method");
        // line 33
        echo "        ";
        // line 34
        echo "        ";
        // line 35
        echo "        ";
        // line 36
        echo "        ";
        // line 37
        echo "    ";
    }

    // line 44
    public function block_header($context, array $blocks = array())
    {
        // line 45
        echo "        <header id=\"header\">
                <div class=\"logo\">
                    <h3><a href=\"";
        // line 47
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "site", array()), "title", array());
        echo "</a></h3>
                    ";
        // line 48
        $this->displayBlock('social', $context, $blocks);
        // line 51
        echo "                </div>
                <div id=\"navbar\">
                    ";
        // line 53
        $this->displayBlock('header_extra', $context, $blocks);
        // line 54
        echo "                    ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 57
        echo "                    ";
        $this->loadTemplate("partials/search.html.twig", "partials/base.html.twig", 57)->display($context);
        // line 58
        echo "                    <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
                </div>
        </header>
        ";
    }

    // line 48
    public function block_social($context, array $blocks = array())
    {
        // line 49
        echo "                        ";
        $this->loadTemplate("partials/social.html.twig", "partials/base.html.twig", 49)->display($context);
        // line 50
        echo "                    ";
    }

    // line 53
    public function block_header_extra($context, array $blocks = array())
    {
    }

    // line 54
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 55
        echo "                    ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 55)->display($context);
        // line 56
        echo "                    ";
    }

    // line 63
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
        // line 66
        echo "        <section id=\"body\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
            ";
        // line 67
        $this->displayBlock('content', $context, $blocks);
        // line 68
        echo "            
            ";
        // line 69
        $this->displayBlock('footer', $context, $blocks);
        // line 72
        echo "        </section>
        ";
    }

    // line 67
    public function block_content($context, array $blocks = array())
    {
    }

    // line 69
    public function block_footer($context, array $blocks = array())
    {
        // line 70
        echo "            ";
        $this->loadTemplate("modular/footer.html.twig", "partials/base.html.twig", 70)->display($context);
        // line 71
        echo "            ";
    }

    // line 81
    public function block_bottom($context, array $blocks = array())
    {
        // line 82
        echo "    <script>
    \$(function () {
        \$(document).ready(function() {
          \$.slidebars({
            hideControlClasses: true,
            scrollLock: true
          });
        });
    });
    </script>
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 82,  282 => 81,  278 => 71,  275 => 70,  272 => 69,  267 => 67,  262 => 72,  260 => 69,  257 => 68,  255 => 67,  250 => 66,  247 => 65,  242 => 63,  238 => 56,  235 => 55,  232 => 54,  227 => 53,  223 => 50,  220 => 49,  217 => 48,  210 => 58,  207 => 57,  204 => 54,  202 => 53,  198 => 51,  196 => 48,  190 => 47,  186 => 45,  183 => 44,  179 => 37,  177 => 36,  175 => 35,  173 => 34,  171 => 33,  168 => 32,  165 => 31,  162 => 30,  158 => 27,  155 => 26,  153 => 25,  151 => 24,  149 => 23,  146 => 22,  143 => 21,  141 => 20,  138 => 19,  136 => 18,  134 => 17,  132 => 16,  130 => 15,  128 => 14,  126 => 13,  123 => 12,  120 => 11,  112 => 38,  110 => 30,  104 => 28,  102 => 11,  97 => 9,  94 => 8,  92 => 7,  84 => 6,  81 => 5,  78 => 4,  72 => 93,  70 => 81,  66 => 79,  64 => 78,  58 => 74,  56 => 65,  53 => 64,  51 => 63,  48 => 62,  46 => 44,  41 => 42,  38 => 41,  36 => 4,  31 => 1,);
    }
}
