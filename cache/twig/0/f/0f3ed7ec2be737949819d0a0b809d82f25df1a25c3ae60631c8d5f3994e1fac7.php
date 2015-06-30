<?php

/* default.html.twig */
class __TwigTemplate_0f3ed7ec2be737949819d0a0b809d82f25df1a25c3ae60631c8d5f3994e1fac7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        $context["currentYear"] = twig_date_format_filter($this->env, "now", "Y");
        // line 5
        echo "\tYEAR: 
\t<select>
\t\t<option value=\"ALL\">ALL</option>
\t\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range((isset($context["currentYear"]) ? $context["currentYear"] : null), 2010));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "    \t
    \t<option value=\"";
            // line 9
            echo $context["i"];
            echo "\">";
            echo $context["i"];
            echo "</option>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t</select>


\t";
        // line 14
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 14,  54 => 11,  44 => 9,  38 => 8,  33 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
