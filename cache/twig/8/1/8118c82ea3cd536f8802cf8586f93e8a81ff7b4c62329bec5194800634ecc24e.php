<?php

/* partials/pagination.html.twig */
class __TwigTemplate_8118c82ea3cd536f8802cf8586f93e8a81ff7b4c62329bec5194800634ecc24e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : null)) > 1)) {
            // line 2
            echo "
<ul class=\"pagination\">
    ";
            // line 4
            if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "hasPrev", array())) {
                // line 5
                echo "        <li><a rel=\"prev\" href=\"";
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array());
                echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "prevUrl", array());
                echo "\">&laquo;</a></li>
    ";
            } else {
                // line 7
                echo "        <li><span>&laquo;</span></li>
    ";
            }
            // line 9
            echo "
    ";
            // line 10
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["paginate"]) {
                // line 11
                echo "
        ";
                // line 12
                if ($this->getAttribute($context["paginate"], "isCurrent", array())) {
                    // line 13
                    echo "            <li><span>";
                    echo $this->getAttribute($context["paginate"], "number", array());
                    echo "</span></li>
        ";
                } elseif ($this->getAttribute(                // line 14
$context["paginate"], "isInDelta", array())) {
                    // line 15
                    echo "            <li><a href=\"";
                    echo (isset($context["base_url"]) ? $context["base_url"] : null);
                    echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array());
                    echo $this->getAttribute($context["paginate"], "url", array());
                    echo "\">";
                    echo $this->getAttribute($context["paginate"], "number", array());
                    echo "</a></li>
        ";
                } elseif ($this->getAttribute(                // line 16
$context["paginate"], "isDeltaBorder", array())) {
                    // line 17
                    echo "            <li class=\"gap\"><span>&hellip;</span></li>
        ";
                }
                // line 19
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paginate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    ";
            if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "hasNext", array())) {
                // line 22
                echo "        <li><a rel=\"next\" href=\"";
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array());
                echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "nextUrl", array());
                echo "\">&raquo;</a></li>
    ";
            } else {
                // line 24
                echo "        <li><span>&raquo;</span></li>
    ";
            }
            // line 26
            echo "</ul>

";
        }
    }

    public function getTemplateName()
    {
        return "partials/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 26,  91 => 24,  83 => 22,  80 => 21,  73 => 19,  69 => 17,  67 => 16,  58 => 15,  56 => 14,  51 => 13,  49 => 12,  46 => 11,  42 => 10,  39 => 9,  35 => 7,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
