<?php

/* partials/base.html.twig */
class __TwigTemplate_a2d6b9eb8f01ac53bbac8f3c06b25d6eccbf62b68bd3dccd62eca08cabd6b194 extends Twig_Template
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
        // line 39
        echo "</head>
<body id=\"top\" class=\"";
        // line 40
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
    <div id=\"sb-site\">
        ";
        // line 42
        $this->displayBlock('header', $context, $blocks);
        // line 60
        echo "
        ";
        // line 61
        $this->displayBlock('showcase', $context, $blocks);
        // line 62
        echo "
        ";
        // line 63
        $this->displayBlock('body', $context, $blocks);
        // line 72
        echo "        
    </div>
    <div class=\"sb-slidebar sb-left sb-width-thin\">
        <div id=\"panel\">
        ";
        // line 76
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 76)->display($context);
        // line 77
        echo "        </div>
    </div>
    ";
        // line 79
        $this->displayBlock('bottom', $context, $blocks);
        // line 91
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
        // line 27
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    ";
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
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
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 10))) {
            // line 19
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie10.css"), "method");
            // line 20
            echo "        ";
        }
        // line 21
        echo "        ";
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 22
            echo "            ";
            // line 23
            echo "            ";
            // line 24
            echo "            ";
            // line 25
            echo "        ";
        }
        // line 26
        echo "    ";
    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        // line 30
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 31
        echo "        ";
        // line 32
        echo "        ";
        // line 33
        echo "        ";
        // line 34
        echo "        ";
        // line 35
        echo "    ";
    }

    // line 42
    public function block_header($context, array $blocks = array())
    {
        // line 43
        echo "        <header id=\"header\">
                <div class=\"logo\">
                    <h3><a href=\"";
        // line 45
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "site", array()), "title", array());
        echo "</a></h3>
                    ";
        // line 46
        $this->displayBlock('social', $context, $blocks);
        // line 49
        echo "                </div>
                <div id=\"navbar\">
                    ";
        // line 51
        $this->displayBlock('header_extra', $context, $blocks);
        // line 52
        echo "                    ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 55
        echo "                    ";
        $this->loadTemplate("partials/search.html.twig", "partials/base.html.twig", 55)->display($context);
        // line 56
        echo "                    <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
                </div>
        </header>
        ";
    }

    // line 46
    public function block_social($context, array $blocks = array())
    {
        // line 47
        echo "                        ";
        $this->loadTemplate("partials/social.html.twig", "partials/base.html.twig", 47)->display($context);
        // line 48
        echo "                    ";
    }

    // line 51
    public function block_header_extra($context, array $blocks = array())
    {
    }

    // line 52
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 53
        echo "                    ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 53)->display($context);
        // line 54
        echo "                    ";
    }

    // line 61
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 63
    public function block_body($context, array $blocks = array())
    {
        // line 64
        echo "        <section id=\"body\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
            ";
        // line 65
        $this->displayBlock('content', $context, $blocks);
        // line 66
        echo "            
            ";
        // line 67
        $this->displayBlock('footer', $context, $blocks);
        // line 70
        echo "        </section>
        ";
    }

    // line 65
    public function block_content($context, array $blocks = array())
    {
    }

    // line 67
    public function block_footer($context, array $blocks = array())
    {
        // line 68
        echo "            ";
        $this->loadTemplate("modular/footer.html.twig", "partials/base.html.twig", 68)->display($context);
        // line 69
        echo "            ";
    }

    // line 79
    public function block_bottom($context, array $blocks = array())
    {
        // line 80
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
        return array (  280 => 80,  277 => 79,  273 => 69,  270 => 68,  267 => 67,  262 => 65,  257 => 70,  255 => 67,  252 => 66,  250 => 65,  245 => 64,  242 => 63,  237 => 61,  233 => 54,  230 => 53,  227 => 52,  222 => 51,  218 => 48,  215 => 47,  212 => 46,  205 => 56,  202 => 55,  199 => 52,  197 => 51,  193 => 49,  191 => 46,  185 => 45,  181 => 43,  178 => 42,  174 => 35,  172 => 34,  170 => 33,  168 => 32,  166 => 31,  163 => 30,  160 => 29,  156 => 26,  153 => 25,  151 => 24,  149 => 23,  147 => 22,  144 => 21,  141 => 20,  138 => 19,  135 => 18,  133 => 17,  131 => 16,  129 => 15,  127 => 14,  125 => 13,  123 => 12,  120 => 11,  112 => 36,  110 => 29,  104 => 27,  102 => 11,  97 => 9,  94 => 8,  92 => 7,  84 => 6,  81 => 5,  78 => 4,  72 => 91,  70 => 79,  66 => 77,  64 => 76,  58 => 72,  56 => 63,  53 => 62,  51 => 61,  48 => 60,  46 => 42,  41 => 40,  38 => 39,  36 => 4,  31 => 1,);
    }
}
