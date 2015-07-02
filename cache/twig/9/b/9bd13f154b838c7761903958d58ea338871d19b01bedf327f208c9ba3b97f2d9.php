<?php

/* exhibitions.html.twig */
class __TwigTemplate_9bd13f154b838c7761903958d58ea338871d19b01bedf327f208c9ba3b97f2d9 extends Twig_Template
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
        $this->loadTemplate("exhibitions.html.twig", "exhibitions.html.twig", 1, "1616935076")->display($context);
        // line 48
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
        return array (  21 => 48,  19 => 1,);
    }
}


/* exhibitions.html.twig */
class __TwigTemplate_9bd13f154b838c7761903958d58ea338871d19b01bedf327f208c9ba3b97f2d9_1616935076 extends Twig_Template
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
        // line 3
        $context["collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        // line 5
        $context["base_url"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
        // line 6
        $context["feed_url"] = (isset($context["base_url"]) ? $context["base_url"] : null);
        // line 8
        if (((isset($context["base_url"]) ? $context["base_url"] : null) == "/")) {
            // line 9
            $context["base_url"] = "";
        }
        // line 12
        if (((isset($context["base_url"]) ? $context["base_url"] : null) == (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null))) {
            // line 13
            $context["feed_url"] = (((isset($context["base_url"]) ? $context["base_url"] : null) . "/") . $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug", array()));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "\t\t";
        $context["blog_image"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "grayscale", array(), "method"), "contrast", array(0 => 20), "method"), "brightness", array(0 =>  -100), "method"), "colorize", array(0 =>  -35, 1 => 81, 2 => 122), "method");
        // line 18
        echo "
\t\t";
        // line 19
        if ((isset($context["blog_image"]) ? $context["blog_image"] : null)) {
            // line 20
            echo "\t\t<div class=\"flush-top blog-header blog-header-image\" style=\"background-image: url(";
            echo $this->getAttribute((isset($context["blog_image"]) ? $context["blog_image"] : null), "url", array());
            echo ");\">
\t\t";
        } else {
            // line 22
            echo "\t\t<div class=\"blog-header\">
\t\t";
        }
        // line 24
        echo "\t\t\t";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t\t</div>

";
        // line 30
        echo "
\t\t<div class=\"content-wrapper blog-content-list grid pure-g\">
\t\t\t<div id=\"listing\" class=\"block pure-u-2-3\">
\t\t\t\t";
        // line 33
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 34
            echo "\t\t\t        ";
            $this->loadTemplate("partials/blog_item.html.twig", "exhibitions.html.twig", 34)->display(array_merge($context, array("page" => $context["child"], "truncate" => true)));
            // line 35
            echo "\t\t\t    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
                ";
        // line 37
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))) {
            // line 38
            echo "                    ";
            $this->loadTemplate("partials/pagination.html.twig", "exhibitions.html.twig", 38)->display(array_merge($context, array("pagination" => $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))));
            // line 39
            echo "                ";
        }
        // line 40
        echo "\t\t\t</div>
\t\t";
        // line 44
        echo "\t\t</div>
\t";
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
        return array (  166 => 44,  163 => 40,  160 => 39,  157 => 38,  155 => 37,  152 => 36,  138 => 35,  135 => 34,  118 => 33,  113 => 30,  106 => 24,  102 => 22,  96 => 20,  94 => 19,  91 => 18,  88 => 17,  85 => 16,  81 => 1,  78 => 13,  76 => 12,  73 => 9,  71 => 8,  69 => 6,  67 => 5,  65 => 3,  51 => 1,  21 => 48,  19 => 1,);
    }
}
