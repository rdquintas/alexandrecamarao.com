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
            'header_extra' => array($this, 'block_header_extra'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'showcase' => array($this, 'block_showcase'),
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
        // line 35
        echo "</head>
<body id=\"top\" class=\"";
        // line 36
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
    <div id=\"sb-site\">
        ";
        // line 38
        $this->displayBlock('header', $context, $blocks);
        // line 52
        echo "
        ";
        // line 53
        $this->displayBlock('showcase', $context, $blocks);
        // line 54
        echo "
        ";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 64
        echo "        
    </div>
  ";
        // line 83
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 91
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

    // line 38
    public function block_header($context, array $blocks = array())
    {
        // line 39
        echo "        <header id=\"header\">
                <div class=\"logo\">
                    <h3><a href=\"";
        // line 41
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "site", array()), "title", array());
        echo "</a></h3>                 
                </div>
                <div id=\"navbar\">
                    ";
        // line 44
        $this->displayBlock('header_extra', $context, $blocks);
        // line 45
        echo "                    ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 48
        echo "                    <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
                </div>
        </header>
        ";
    }

    // line 44
    public function block_header_extra($context, array $blocks = array())
    {
    }

    // line 45
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 46
        echo "                    ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 46)->display($context);
        // line 47
        echo "                    ";
    }

    // line 53
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        // line 56
        echo "        <section id=\"body\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
            ";
        // line 57
        $this->displayBlock('content', $context, $blocks);
        // line 58
        echo "            
            ";
        // line 59
        $this->displayBlock('footer', $context, $blocks);
        // line 62
        echo "        </section>
        ";
    }

    // line 57
    public function block_content($context, array $blocks = array())
    {
    }

    // line 59
    public function block_footer($context, array $blocks = array())
    {
        // line 60
        echo "            ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 60)->display($context);
        // line 61
        echo "            ";
    }

    // line 83
    public function block_javascripts($context, array $blocks = array())
    {
        // line 84
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 85
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/app.dist.js", 1 => 100), "method");
        // line 86
        echo "        ";
        // line 87
        echo "        ";
        // line 88
        echo "        ";
        // line 89
        echo "        ";
        // line 90
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
        return array (  233 => 90,  231 => 89,  229 => 88,  227 => 87,  225 => 86,  222 => 85,  219 => 84,  216 => 83,  212 => 61,  209 => 60,  206 => 59,  201 => 57,  196 => 62,  194 => 59,  191 => 58,  189 => 57,  184 => 56,  181 => 55,  176 => 53,  172 => 47,  169 => 46,  166 => 45,  161 => 44,  154 => 48,  151 => 45,  149 => 44,  141 => 41,  137 => 39,  134 => 38,  130 => 31,  127 => 30,  124 => 29,  116 => 32,  114 => 29,  109 => 27,  106 => 26,  104 => 25,  96 => 24,  93 => 23,  90 => 22,  81 => 91,  78 => 83,  74 => 64,  72 => 55,  69 => 54,  67 => 53,  64 => 52,  62 => 38,  57 => 36,  54 => 35,  52 => 22,  29 => 1,);
    }
}
