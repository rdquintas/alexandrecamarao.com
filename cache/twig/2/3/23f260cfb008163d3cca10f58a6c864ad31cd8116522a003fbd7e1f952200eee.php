<?php

/* partials/base.html.twig */
class __TwigTemplate_23f260cfb008163d3cca10f58a6c864ad31cd8116522a003fbd7e1f952200eee extends Twig_Template
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
        // line 45
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
    
    <div id=\"sb-site\">
      <i class=\"sb-toggle-left fa fa-bars\"></i>
      ";
        // line 63
        $this->displayBlock('header', $context, $blocks);
        // line 77
        echo "      <div class=\"container\">
          ";
        // line 78
        $this->displayBlock('body', $context, $blocks);
        // line 84
        echo "      </div>
    </div>
";
        // line 89
        echo "    <section id=\"nav-menu-mobile\" class=\"sb-slidebar sb-left\">
        <!-- Here will be the mobile nav menu. jQuery will copy menu entries here.  -->
    </section>
    ";
        // line 92
        $this->displayBlock('javascripts', $context, $blocks);
        // line 97
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

    ";
        // line 34
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/modernizr.custom.31616.js", 1 => 100), "method");
        // line 35
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo " 
    <script type=\"text/javascript\">
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-56535261-4', 'auto');
      ga('send', 'pageview');
    </script>
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

    // line 63
    public function block_header($context, array $blocks = array())
    {
        // line 64
        echo "      <header class=\"header\">
              <a class=\"burger-icon\" href=\"#\">
                  <img src=\"";
        // line 66
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/burguer.png\">
              </a>        
              <div class=\"logo\">
                  ";
        // line 70
        echo "                  <a href=\"/\">";
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "site", array()), "title", array());
        echo "</a>
              </div>
              <nav id=\"original-menu\" class=\"navigation-menu\">
                  ";
        // line 73
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 73)->display(array_merge($context, array("withSuperFish" => "true")));
        // line 74
        echo "              </nav>
      </header>
      ";
    }

    // line 78
    public function block_body($context, array $blocks = array())
    {
        // line 79
        echo "              ";
        $this->displayBlock('content', $context, $blocks);
        echo "        
       ";
        // line 83
        echo "          ";
    }

    // line 79
    public function block_content($context, array $blocks = array())
    {
    }

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        // line 93
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 94
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/libs.dist.js", 1 => 100), "method");
        // line 95
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/app.dist.js"), "method");
        // line 96
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
        return array (  213 => 96,  210 => 95,  207 => 94,  204 => 93,  201 => 92,  196 => 79,  192 => 83,  187 => 79,  184 => 78,  178 => 74,  176 => 73,  169 => 70,  163 => 66,  159 => 64,  156 => 63,  152 => 31,  149 => 30,  146 => 29,  131 => 35,  129 => 34,  123 => 32,  121 => 29,  116 => 27,  113 => 26,  111 => 25,  103 => 24,  100 => 23,  97 => 22,  88 => 97,  86 => 92,  81 => 89,  77 => 84,  75 => 78,  72 => 77,  70 => 63,  50 => 45,  48 => 22,  25 => 1,);
    }
}
