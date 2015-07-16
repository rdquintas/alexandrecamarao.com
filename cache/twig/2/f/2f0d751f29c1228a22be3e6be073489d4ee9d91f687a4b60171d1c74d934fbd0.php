<?php

/* contacts.html.twig */
class __TwigTemplate_2f0d751f29c1228a22be3e6be073489d4ee9d91f687a4b60171d1c74d934fbd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "contacts.html.twig", 1);
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        echo "\t
\t<div class=\"page-contacts\">\t    
\t\t<h3>";
        // line 4
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</h3>
\t\t<div class=\"phone\">
\t\t\t<img src=\"";
        // line 6
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/phone.png\">
\t\t\t<p>";
        // line 7
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "telefone", array());
        echo "</p>
\t\t</div>
\t\t<div class=\"email\">
\t\t\t<img src=\"";
        // line 10
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/email.png\">
\t\t\t<a href=\"mailto:";
        // line 11
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "email", array());
        echo "<\">";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "email", array());
        echo "</a>
\t\t</div>
\t\t<h3>";
        // line 13
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title2", array());
        echo "</h3>
\t\t<div class=\"sendform\">
\t\t\t<div class=\"col1\">
\t\t\t\t<form id=\"contact-form\" class=\"col-sm-6 col-md-offset-1 scrollimation fade-left d3 in\" action=\"submit.php\" method=\"post\" novalidate=\"\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t    ";
        // line 19
        echo "\t\t\t\t\t    <input id=\"contact-name\" name=\"contactName\" placeholder=\"Your name\" class=\"form-control requiredField\" 
\t\t\t\t\t    data-new-placeholder=\"Your name\" type=\"text\" data-error-empty=\"Please enter your name\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t    ";
        // line 25
        echo "\t\t\t\t\t    <input id=\"contact-mail\" name=\"email\" placeholder=\"Your email\" class=\"form-control requiredField\" 
\t\t\t\t\t    data-new-placeholder=\"Your email\" type=\"email\" data-error-empty=\"Please enter your email\" 
\t\t\t\t\t    data-error-invalid=\"Invalid email address\">
\t\t\t\t   \t</div>

\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t    ";
        // line 32
        echo "\t\t\t\t\t    <textarea id=\"contact-message\" name=\"comments\" placeholder=\"Your message\" class=\"form-control requiredField\" 
\t\t\t\t\t    data-new-placeholder=\"Your message\" rows=\"6\" data-error-empty=\"Please enter your message\"></textarea>
\t\t   \t\t\t</div>

\t\t\t\t    <p>
\t\t\t\t        <button name=\"submit\" type=\"submit\" data-error-message=\"Error!\" data-sending-message=\"Sending...\" 
\t\t\t\t        data-ok-message=\"Message Sent\">Send Message</button>
\t\t\t\t    </p>
\t\t\t\t    <input type=\"hidden\" name=\"submitted\" id=\"submitted\" value=\"true\">
\t\t\t\t</form>
\t\t\t</div> 
\t\t\t<div class=\"col2\">
\t\t\t\t";
        // line 45
        echo "\t\t\t\t";
        // line 46
        echo "\t\t\t\t\t";
        echo twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
        echo "
\t\t\t\t";
        // line 48
        echo "\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "contacts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 48,  99 => 46,  97 => 45,  83 => 32,  75 => 25,  68 => 19,  60 => 13,  53 => 11,  49 => 10,  43 => 7,  39 => 6,  34 => 4,  28 => 2,  11 => 1,);
    }
}
