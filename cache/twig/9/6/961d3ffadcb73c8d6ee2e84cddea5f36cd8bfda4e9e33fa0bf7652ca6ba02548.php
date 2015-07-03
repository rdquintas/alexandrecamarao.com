<?php

/* teste.html.twig */
class __TwigTemplate_961d3ffadcb73c8d6ee2e84cddea5f36cd8bfda4e9e33fa0bf7652ca6ba02548 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 2
        echo "\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo " 
\t\tRicardoTwig ";
            // line 3
            echo $context["i"];
            echo " 
\t\t<br>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "teste.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 3,  26 => 2,  20 => 1,);
    }
}
