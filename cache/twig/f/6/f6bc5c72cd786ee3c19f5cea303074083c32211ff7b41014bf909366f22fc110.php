<?php

/* exhibitions.html.twig */
class __TwigTemplate_f6bc5c72cd786ee3c19f5cea303074083c32211ff7b41014bf909366f22fc110 extends Twig_Template
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
        $this->loadTemplate("exhibitions.html.twig", "exhibitions.html.twig", 1, "1806495316")->display($context);
        // line 27
        echo "

";
    }

    public function getTemplateName()
    {
        return "exhibitions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 27,  19 => 1,);
    }
}


/* exhibitions.html.twig */
class __TwigTemplate_f6bc5c72cd786ee3c19f5cea303074083c32211ff7b41014bf909366f22fc110_1806495316 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "exhibitions.html.twig", 1);
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
        // line 2
        $context["collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        echo "\t

\t\t";
        // line 5
        echo $this->env->getExtension('GravTwigExtension')->dump($this->env, $context, $this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()));
        echo "\t
\t\t";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 7
            echo "\t\t    <div class=\"exhibition-item\">
\t\t    \t<hr>
\t\t\t    <div class=\"image\">
\t\t\t        ";
            // line 10
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($context["page"], "media", array()), "images", array())), "cropZoom", array(0 => 300, 1 => 300), "method"), "html", array());
            echo "
\t\t\t    </div>
\t\t\t    <div class=\"text\">
\t\t\t        <p class=\"title\">";
            // line 13
            echo $this->getAttribute($context["page"], "title", array());
            echo "</p>
\t\t\t        <p class=\"date\">";
            // line 14
            echo twig_date_format_filter($this->env, $this->getAttribute($context["page"], "date", array()), "d/M/Y");
            echo "</p>
\t\t\t        <p class=\"summary\">";
            // line 15
            echo $this->env->getExtension('GravTwigExtension')->truncateFilter($this->getAttribute($context["page"], "content", array()), 350);
            echo "</p>
\t\t\t        <p class=\"continue\"><a href=\"";
            // line 16
            echo $this->getAttribute($context["page"], "url", array());
            echo "\">Continue Reading...</a></p>
\t\t\t\t</div>
\t\t\t</div>
\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
        ";
        // line 21
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))) {
            // line 22
            echo "            ";
            $this->loadTemplate("partials/pagination.html.twig", "exhibitions.html.twig", 22)->display(array_merge($context, array("pagination" => $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))));
            // line 23
            echo "        ";
        }
        // line 24
        echo "\t";
    }

    public function getTemplateName()
    {
        return "exhibitions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 24,  126 => 23,  123 => 22,  121 => 21,  118 => 20,  108 => 16,  104 => 15,  100 => 14,  96 => 13,  90 => 10,  85 => 7,  81 => 6,  77 => 5,  71 => 3,  67 => 1,  65 => 2,  51 => 1,  21 => 27,  19 => 1,);
    }
}
