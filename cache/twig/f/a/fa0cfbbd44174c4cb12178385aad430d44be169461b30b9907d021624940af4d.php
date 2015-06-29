<?php

/* partials/footer.html.twig */
class __TwigTemplate_fa0cfbbd44174c4cb12178385aad430d44be169461b30b9907d021624940af4d extends Twig_Template
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
        echo "<hr>
<div class=\"footer-modules\">
    <div class=\"footer-copyright\">
        ";
        // line 4
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "copyright", array());
        echo "
    </div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
