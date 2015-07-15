<?php

/* partials/base.html.twig */
class __TwigTemplate_192853850050418731bbce9198584dee31c78a7db83d38d7ef627604103598ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
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
        // line 37
        echo "</head>

<body>
   <!--[if lte IE 9]>
    <div class=\"browserupdate\">
        You are using an obsolete browser which can harm your experience and cause security troubles.
        <br> Please <a href=\"http://browsehappy.com/\" target=\"_blank\">update your browser!</a>
    </div>
  <![endif]-->
    <noscript>
        <div class=\"browserupdate\">
            Oh, no! You don't have JavaScript enabled on your browser!
            <br> This website only works with JavaScript. Sorry.
        </div>
    </noscript>
    
    ";
        // line 53
        $this->displayBlock('header', $context, $blocks);
        // line 67
        echo "
    <nav id=\"mobile-menu\" class=\"\">
        ";
        // line 69
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 69)->display(array_merge($context, array("withSuperFish" => "false")));
        // line 70
        echo "    </nav>
    <div class=\"container\">
        ";
        // line 72
        $this->displayBlock('body', $context, $blocks);
        // line 78
        echo "    </div>
    ";
        // line 79
        $this->displayBlock('javascripts', $context, $blocks);
        // line 84
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
</body>
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
.
    ";
        // line 34
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/modernizr.custom.31616.js", 1 => 100), "method");
        // line 35
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

    // line 53
    public function block_header($context, array $blocks = array())
    {
        // line 54
        echo "    <header class=\"header\">
            <a class=\"burger-icon\" href=\"#\">
                <img src=\"";
        // line 56
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/burguer.png\">
            </a>        
            <div class=\"logo\">
                <img src=\"";
        // line 59
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/camarao.jpg\">
                <h5>";
        // line 60
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "site", array()), "title", array());
        echo "</h5>
            </div>
            <nav id=\"original-menu\" class=\"navigation-menu\">
                ";
        // line 63
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 63)->display(array_merge($context, array("withSuperFish" => "true")));
        // line 64
        echo "            </nav>
    </header>
    ";
    }

    // line 72
    public function block_body($context, array $blocks = array())
    {
        // line 73
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        echo "        
            ";
        // line 74
        $this->displayBlock('footer', $context, $blocks);
        // line 77
        echo "        ";
    }

    // line 73
    public function block_content($context, array $blocks = array())
    {
    }

    // line 74
    public function block_footer($context, array $blocks = array())
    {
        // line 75
        echo "            ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 75)->display($context);
        // line 76
        echo "            ";
    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        // line 80
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 81
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/libs.dist.js", 1 => 100), "method");
        // line 82
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/app.dist.js"), "method");
        // line 83
        echo "    ";
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
        return array (  220 => 83,  217 => 82,  214 => 81,  211 => 80,  208 => 79,  204 => 76,  201 => 75,  198 => 74,  193 => 73,  189 => 77,  187 => 74,  182 => 73,  179 => 72,  173 => 64,  171 => 63,  165 => 60,  161 => 59,  155 => 56,  151 => 54,  148 => 53,  144 => 31,  141 => 30,  138 => 29,  131 => 35,  129 => 34,  123 => 32,  121 => 29,  116 => 27,  113 => 26,  111 => 25,  103 => 24,  100 => 23,  97 => 22,  88 => 84,  86 => 79,  83 => 78,  81 => 72,  77 => 70,  75 => 69,  71 => 67,  69 => 53,  51 => 37,  49 => 22,  26 => 1,);
    }
}
