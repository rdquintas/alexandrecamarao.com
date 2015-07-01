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
        $this->loadTemplate("exhibitions.html.twig", "exhibitions.html.twig", 1, "740680642")->display($context);
        // line 47
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
        return array (  21 => 47,  19 => 1,);
    }
}


/* exhibitions.html.twig */
class __TwigTemplate_9bd13f154b838c7761903958d58ea338871d19b01bedf327f208c9ba3b97f2d9_740680642 extends Twig_Template
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
        // line 4
        $context["base_url"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
        // line 5
        $context["feed_url"] = (isset($context["base_url"]) ? $context["base_url"] : null);
        // line 7
        if (((isset($context["base_url"]) ? $context["base_url"] : null) == "/")) {
            // line 8
            $context["base_url"] = "";
        }
        // line 11
        if (((isset($context["base_url"]) ? $context["base_url"] : null) == (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null))) {
            // line 12
            $context["feed_url"] = (((isset($context["base_url"]) ? $context["base_url"] : null) . "/") . $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug", array()));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "\t\t";
        $context["blog_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
        // line 17
        echo "        
\t\t";
        // line 18
        if ((isset($context["blog_image"]) ? $context["blog_image"] : null)) {
            // line 19
            echo "\t\t<div class=\"flush-top blog-header blog-header-image\" style=\"background: ";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "bg_color", array());
            echo " url(";
            echo $this->getAttribute((isset($context["blog_image"]) ? $context["blog_image"] : null), "url", array());
            echo ") no-repeat right;\">
\t\t";
        } else {
            // line 21
            echo "\t\t<div class=\"blog-header\">
\t\t";
        }
        // line 23
        echo "\t\t\t";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t\t</div>

  ";
        // line 29
        echo "
\t\t<div class=\"content-wrapper blog-content-list g-grid pure-g-r\">
\t\t\t<div id=\"listing\" class=\"g-block pure-u-2-3\">
\t\t\t\t";
        // line 32
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
            // line 33
            echo "\t\t\t        ";
            $this->loadTemplate("partials/blog_item.html.twig", "exhibitions.html.twig", 33)->display(array_merge($context, array("page" => $context["child"], "truncate" => true)));
            // line 34
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
        // line 35
        echo "
                ";
        // line 36
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))) {
            // line 37
            echo "                    ";
            $this->loadTemplate("pagination.html.twig", "exhibitions.html.twig", 37)->display(array_merge($context, array("pagination" => $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))));
            // line 38
            echo "                ";
        }
        // line 39
        echo "\t\t\t</div>
\t\t";
        // line 43
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
        return array (  168 => 43,  165 => 39,  162 => 38,  159 => 37,  157 => 36,  154 => 35,  140 => 34,  137 => 33,  120 => 32,  115 => 29,  108 => 23,  104 => 21,  96 => 19,  94 => 18,  91 => 17,  88 => 16,  85 => 15,  81 => 1,  78 => 12,  76 => 11,  73 => 8,  71 => 7,  69 => 5,  67 => 4,  65 => 3,  51 => 1,  21 => 47,  19 => 1,);
    }
}
