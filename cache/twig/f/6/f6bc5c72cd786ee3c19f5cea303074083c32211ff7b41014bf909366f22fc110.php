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
        $this->loadTemplate("exhibitions.html.twig", "exhibitions.html.twig", 1, "2117101017")->display($context);
        // line 28
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
        return array (  21 => 28,  19 => 1,);
    }
}


/* exhibitions.html.twig */
class __TwigTemplate_f6bc5c72cd786ee3c19f5cea303074083c32211ff7b41014bf909366f22fc110_2117101017 extends Twig_Template
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
        echo "\t\t\t
\t\t";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            echo "\t\t\t
\t\t\t";
            // line 5
            echo $this->env->getExtension('GravTwigExtension')->dump($this->env, $context, $this->getAttribute($context["loop"], "index", array()));
            echo "
\t\t\t";
            // line 6
            if ((twig_date_format_filter($this->env, $this->getAttribute($context["page"], "date", array()), "Y") == "2015")) {
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
            // line 20
            echo "\t    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
        ";
        // line 22
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))) {
            // line 23
            echo "            ";
            $this->loadTemplate("partials/pagination.html.twig", "exhibitions.html.twig", 23)->display(array_merge($context, array("pagination" => $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))));
            // line 24
            echo "        ";
        }
        // line 25
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
        return array (  156 => 25,  153 => 24,  150 => 23,  148 => 22,  145 => 21,  131 => 20,  124 => 16,  120 => 15,  116 => 14,  112 => 13,  106 => 10,  101 => 7,  99 => 6,  95 => 5,  76 => 4,  71 => 3,  67 => 1,  65 => 2,  51 => 1,  21 => 28,  19 => 1,);
    }
}
