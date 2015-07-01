<?php

/* partials/base.html.twig */
class __TwigTemplate_97f69c717b64d8d4e61a8a0ba918e5c9a7503fb1d11c50e443723795be177556 extends Twig_Template
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
<!-- 
   Hi, you're looking at a web page built with love by:

   Ricardo

  /\$\$\$\$\$\$            /\$\$             /\$\$                        
 /\$\$__  \$\$          |__/            | \$\$                        
| \$\$  \\ \$\$ /\$\$   /\$\$ /\$\$ /\$\$\$\$\$\$\$  /\$\$\$\$\$\$    /\$\$\$\$\$\$   /\$\$\$\$\$\$\$
| \$\$  | \$\$| \$\$  | \$\$| \$\$| \$\$__  \$\$|_  \$\$_/   |____  \$\$ /\$\$_____/
| \$\$  | \$\$| \$\$  | \$\$| \$\$| \$\$  \\ \$\$  | \$\$      /\$\$\$\$\$\$\$|  \$\$\$\$\$\$ 
| \$\$/\$\$ \$\$| \$\$  | \$\$| \$\$| \$\$  | \$\$  | \$\$ /\$\$ /\$\$__  \$\$ \\____  \$\$
|  \$\$\$\$\$\$/|  \$\$\$\$\$\$/| \$\$| \$\$  | \$\$  |  \$\$\$\$/|  \$\$\$\$\$\$\$ /\$\$\$\$\$\$\$/
 \\____ \$\$\$ \\______/ |__/|__/  |__/   \\___/   \\_______/|_______/ 
      \\__/                                                                      

   ricardoquintas.com   
   June/2015 
-->
<html lang=\"en\">
<head>
";
        // line 22
        $this->displayBlock('head', $context, $blocks);
        // line 45
        echo "</head>
<body id=\"top\" class=\"";
        // line 46
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
    <div id=\"sb-site\">
        ";
        // line 48
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
  ";
        // line 93
        echo "</body>
</html>
";
    }

    // line 22
    public function block_head($context, array $blocks = array())
    {
        // line 23
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 24
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
    ";
        // line 25
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 25)->display($context);
        // line 26
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 27
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/favicon.png\" />

    ";
        // line 29
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    ";
        // line 34
        $this->displayBlock('javascripts', $context, $blocks);
        // line 42
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

";
    }

    // line 29
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 30
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/app.dist.css", 1 => 100), "method");
        // line 31
        echo "    ";
    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        // line 35
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 36
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/app.dist.js", 1 => 100), "method");
        // line 37
        echo "        ";
        // line 38
        echo "        ";
        // line 39
        echo "        ";
        // line 40
        echo "        ";
        // line 41
        echo "    ";
    }

    // line 48
    public function block_header($context, array $blocks = array())
    {
        // line 49
        echo "        <header id=\"header\">
                <div class=\"logo\">
                    <h3><a href=\"";
        // line 51
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "site", array()), "title", array());
        echo "</a></h3>                 
                </div>
                <div id=\"navbar\">
                    ";
        // line 54
        $this->displayBlock('header_extra', $context, $blocks);
        // line 55
        echo "                    ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 58
        echo "                    <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
                </div>
        </header>
        ";
    }

    // line 54
    public function block_header_extra($context, array $blocks = array())
    {
    }

    // line 55
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 56
        echo "                    ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 56)->display($context);
        // line 57
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
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 70)->display($context);
        // line 71
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
        return array (  235 => 71,  232 => 70,  229 => 69,  224 => 67,  219 => 72,  217 => 69,  214 => 68,  212 => 67,  207 => 66,  204 => 65,  199 => 63,  195 => 57,  192 => 56,  189 => 55,  184 => 54,  177 => 58,  174 => 55,  172 => 54,  164 => 51,  160 => 49,  157 => 48,  153 => 41,  151 => 40,  149 => 39,  147 => 38,  145 => 37,  142 => 36,  139 => 35,  136 => 34,  132 => 31,  129 => 30,  126 => 29,  118 => 42,  116 => 34,  110 => 32,  108 => 29,  103 => 27,  100 => 26,  98 => 25,  90 => 24,  87 => 23,  84 => 22,  78 => 93,  74 => 74,  72 => 65,  69 => 64,  67 => 63,  64 => 62,  62 => 48,  57 => 46,  54 => 45,  52 => 22,  29 => 1,);
    }
}
