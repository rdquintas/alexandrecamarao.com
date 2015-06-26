<?php

/* partials/base.html.twig */
class __TwigTemplate_e8c0af13259d484e771eff7f08bb5964d5c81d86329aabdf736ca33d262898db extends Twig_Template
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
            'header_extra' => array($this, 'block_header_extra'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'showcase' => array($this, 'block_showcase'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
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
        // line 27
        echo "</head>
<body id=\"top\" class=\"";
        // line 28
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
    <div id=\"sb-site\">
        ";
        // line 30
        $this->displayBlock('header', $context, $blocks);
        // line 44
        echo "
        ";
        // line 45
        $this->displayBlock('showcase', $context, $blocks);
        // line 46
        echo "
        ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "        
    </div>
  ";
        // line 75
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
        // line 14
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
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
        echo "    ";
    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        // line 17
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 18
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/app.dist.js", 1 => 100), "method");
        // line 19
        echo "        ";
        // line 20
        echo "        ";
        // line 21
        echo "        ";
        // line 22
        echo "        ";
        // line 23
        echo "    ";
    }

    // line 30
    public function block_header($context, array $blocks = array())
    {
        // line 31
        echo "        <header id=\"header\">
                <div class=\"logo\">
                    <h3><a href=\"";
        // line 33
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "site", array()), "title", array());
        echo "</a></h3>                 
                </div>
                <div id=\"navbar\">
                    ";
        // line 36
        $this->displayBlock('header_extra', $context, $blocks);
        // line 37
        echo "                    ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 40
        echo "                    <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
                </div>
        </header>
        ";
    }

    // line 36
    public function block_header_extra($context, array $blocks = array())
    {
    }

    // line 37
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 38
        echo "                    ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 38)->display($context);
        // line 39
        echo "                    ";
    }

    // line 45
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        // line 48
        echo "        <section id=\"body\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
            ";
        // line 49
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "            
            ";
        // line 51
        $this->displayBlock('footer', $context, $blocks);
        // line 54
        echo "        </section>
        ";
    }

    // line 49
    public function block_content($context, array $blocks = array())
    {
    }

    // line 51
    public function block_footer($context, array $blocks = array())
    {
        // line 52
        echo "            ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 52)->display($context);
        // line 53
        echo "            ";
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
        return array (  217 => 53,  214 => 52,  211 => 51,  206 => 49,  201 => 54,  199 => 51,  196 => 50,  194 => 49,  189 => 48,  186 => 47,  181 => 45,  177 => 39,  174 => 38,  171 => 37,  166 => 36,  159 => 40,  156 => 37,  154 => 36,  146 => 33,  142 => 31,  139 => 30,  135 => 23,  133 => 22,  131 => 21,  129 => 20,  127 => 19,  124 => 18,  121 => 17,  118 => 16,  114 => 13,  111 => 12,  108 => 11,  100 => 24,  98 => 16,  92 => 14,  90 => 11,  85 => 9,  82 => 8,  80 => 7,  72 => 6,  69 => 5,  66 => 4,  60 => 75,  56 => 56,  54 => 47,  51 => 46,  49 => 45,  46 => 44,  44 => 30,  39 => 28,  36 => 27,  34 => 4,  29 => 1,);
    }
}
