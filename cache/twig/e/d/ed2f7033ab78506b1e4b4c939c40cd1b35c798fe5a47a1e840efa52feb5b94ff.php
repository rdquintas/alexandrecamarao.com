<?php

/* partials/search.html.twig */
class __TwigTemplate_ed2f7033ab78506b1e4b4c939c40cd1b35c798fe5a47a1e840efa52feb5b94ff extends Twig_Template
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
        echo "<form class=\"search-box\">
    <input type=\"search\" placeholder=\"Search...\" value=\"";
        // line 2
        echo (isset($context["query"]) ? $context["query"] : null);
        echo "\" data-search-input=\"";
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "simplesearch", array()), "route", array());
        echo "/query\" />
    <script>
    jQuery(document).ready(function(\$){
        var input = \$('[data-search-input]');

        input.on('keypress', function(event) {
            if (event.which == 13 && input.val().length > 3) {
                event.preventDefault();
                window.location.href = input.data('search-input') + ':' + input.val();
            }
        });
    });
    </script>
    <i class=\"fa fa-search\"></i>
</form>";
    }

    public function getTemplateName()
    {
        return "partials/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
