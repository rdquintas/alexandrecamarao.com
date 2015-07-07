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
\t\t";
        // line 4
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t\t<p class=\"phone\">";
        // line 5
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "telefone", array());
        echo "</p>
\t\t<p class=\"email\">";
        // line 6
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "email", array());
        echo "</p>

\t\t<form id=\"contact-form\" class=\"col-sm-6 col-md-offset-1 scrollimation fade-left d3 in\" action=\"submit.php\" method=\"post\" novalidate=\"\">
\t\t\t<div class=\"form-group\">
\t\t\t    <label class=\"control-label\" for=\"contact-name\">Name</label>
\t\t\t    <input id=\"contact-name\" name=\"contactName\" placeholder=\"Your name\" class=\"form-control requiredField\" 
\t\t\t    data-new-placeholder=\"Your name\" type=\"text\" data-error-empty=\"Please enter your name\">
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t    <label class=\"control-label\" for=\"contact-mail\">Email</label>
\t\t\t    <input id=\"contact-mail\" name=\"email\" placeholder=\"Your email\" class=\"form-control requiredField\" 
\t\t\t    data-new-placeholder=\"Your email\" type=\"email\" data-error-empty=\"Please enter your email\" 
\t\t\t    data-error-invalid=\"Invalid email address\">
\t\t   \t</div>

\t\t    <div class=\"form-group\">
\t\t\t    <label class=\"control-label\" for=\"contact-message\">Message</label>
\t\t\t    <textarea id=\"contact-message\" name=\"comments\" placeholder=\"Your message\" class=\"form-control requiredField\" 
\t\t\t    data-new-placeholder=\"Your message\" rows=\"6\" data-error-empty=\"Please enter your message\"></textarea>
   \t\t\t</div>

\t\t    <p>
\t\t        <button name=\"submit\" type=\"submit\" data-error-message=\"Error!\" data-sending-message=\"Sending...\" 
\t\t        data-ok-message=\"Message Sent\">Send Message</button>
\t\t    </p>
\t\t    <input type=\"hidden\" name=\"submitted\" id=\"submitted\" value=\"true\">
\t\t</form>

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
        return array (  42 => 6,  38 => 5,  34 => 4,  28 => 2,  11 => 1,);
    }
}
