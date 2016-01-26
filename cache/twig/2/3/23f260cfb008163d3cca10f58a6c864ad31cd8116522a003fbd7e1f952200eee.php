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
    
      ";
        // line 61
        $this->displayBlock('header', $context, $blocks);
        // line 76
        echo "    <div id=\"sb-site\">
      ";
        // line 78
        echo "      <div class=\"container\">
          ";
        // line 79
        $this->displayBlock('body', $context, $blocks);
        // line 85
        echo "      </div>
    </div>
";
        // line 90
        echo "    <section id=\"nav-menu-mobile\" class=\"sb-slidebar sb-left\">
        <!-- Here will be the mobile nav menu. jQuery will copy menu entries here.  -->
    </section>
    ";
        // line 93
        $this->displayBlock('javascripts', $context, $blocks);
        // line 98
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
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/app.dist.css", 1 => 100), "method");
        // line 31
        echo "    ";
    }

    // line 61
    public function block_header($context, array $blocks = array())
    {
        // line 62
        echo "      <header class=\"header sb-slide\">
              <i class=\"burger-icon sb-toggle-left fa fa-bars\"></i>
             ";
        // line 66
        echo "       
              <div class=\"logo\">
                  ";
        // line 69
        echo "                  <a href=\"/\">";
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "site", array()), "title", array());
        echo "</a>
              </div>
              <nav id=\"original-menu\" class=\"navigation-menu\">
                  ";
        // line 72
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 72)->display(array_merge($context, array("withSuperFish" => "true")));
        // line 73
        echo "              </nav>
      </header>
      ";
    }

    // line 79
    public function block_body($context, array $blocks = array())
    {
        // line 80
        echo "              ";
        $this->displayBlock('content', $context, $blocks);
        echo "        
       ";
        // line 84
        echo "          ";
    }

    // line 80
    public function block_content($context, array $blocks = array())
    {
    }

    // line 93
    public function block_javascripts($context, array $blocks = array())
    {
        // line 94
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 95
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/libs.dist.js", 1 => 100), "method");
        // line 96
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/app.dist.js"), "method");
        // line 97
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
        return array (  212 => 97,  209 => 96,  206 => 95,  203 => 94,  200 => 93,  195 => 80,  191 => 84,  186 => 80,  183 => 79,  177 => 73,  175 => 72,  168 => 69,  164 => 66,  160 => 62,  157 => 61,  153 => 31,  150 => 30,  147 => 29,  132 => 35,  130 => 34,  124 => 32,  122 => 29,  117 => 27,  114 => 26,  112 => 25,  104 => 24,  101 => 23,  98 => 22,  89 => 98,  87 => 93,  82 => 90,  78 => 85,  76 => 79,  73 => 78,  70 => 76,  68 => 61,  50 => 45,  48 => 22,  25 => 1,);
    }
}
