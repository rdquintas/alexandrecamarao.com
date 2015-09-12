<?php

/* partials/base.html.twig */
class __TwigTemplate_9896e483a99f97ccc4d2b22109817542fc45c7884cf848bf40ebe43885b85b22 extends Twig_Template
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
        // line 77
        echo "
    <nav id=\"mobile-menu\" class=\"\">
        ";
        // line 79
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 79)->display(array_merge($context, array("withSuperFish" => "false")));
        // line 80
        echo "    </nav>
    <div class=\"container\">
        ";
        // line 82
        $this->displayBlock('body', $context, $blocks);
        // line 88
        echo "    </div>
    ";
        // line 89
        $this->displayBlock('javascripts', $context, $blocks);
        // line 94
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

    // line 61
    public function block_header($context, array $blocks = array())
    {
        // line 62
        echo "    <header class=\"header\">
            <a class=\"burger-icon\" href=\"#\">
                <img src=\"";
        // line 64
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/burguer.png\">
            </a>        
            <div class=\"logo\">
                ";
        // line 68
        echo "                <a href=\"/\">
                  <h2>";
        // line 69
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "site", array()), "title", array());
        echo "</h2>
                </a>
            </div>
            <nav id=\"original-menu\" class=\"navigation-menu\">
                ";
        // line 73
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 73)->display(array_merge($context, array("withSuperFish" => "true")));
        // line 74
        echo "            </nav>
    </header>
    ";
    }

    // line 82
    public function block_body($context, array $blocks = array())
    {
        // line 83
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        echo "        
            ";
        // line 84
        $this->displayBlock('footer', $context, $blocks);
        // line 87
        echo "        ";
    }

    // line 83
    public function block_content($context, array $blocks = array())
    {
    }

    // line 84
    public function block_footer($context, array $blocks = array())
    {
        // line 85
        echo "            ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 85)->display($context);
        // line 86
        echo "            ";
    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        // line 90
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 91
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/libs.dist.js", 1 => 100), "method");
        // line 92
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/app.dist.js"), "method");
        // line 93
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
        return array (  228 => 93,  225 => 92,  222 => 91,  219 => 90,  216 => 89,  212 => 86,  209 => 85,  206 => 84,  201 => 83,  197 => 87,  195 => 84,  190 => 83,  187 => 82,  181 => 74,  179 => 73,  172 => 69,  169 => 68,  163 => 64,  159 => 62,  156 => 61,  152 => 31,  149 => 30,  146 => 29,  131 => 35,  129 => 34,  123 => 32,  121 => 29,  116 => 27,  113 => 26,  111 => 25,  103 => 24,  100 => 23,  97 => 22,  88 => 94,  86 => 89,  83 => 88,  81 => 82,  77 => 80,  75 => 79,  71 => 77,  69 => 61,  51 => 45,  49 => 22,  26 => 1,);
    }
}
