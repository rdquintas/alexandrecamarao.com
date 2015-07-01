<?php

/* partials/blog_item.html.twig */
class __TwigTemplate_e916228787e4c043043448b3fb10062115b16c213901894b36534fd34c865464 extends Twig_Template
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
        echo "<div class=\"list-item\">

    <div class=\"list-blog-header\">
        ";
        // line 4
        if ((isset($context["big_header"]) ? $context["big_header"] : null)) {
            // line 5
            echo "            ";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "cropResize", array(0 => 900, 1 => 600), "method"), "html", array());
            echo "
        ";
        } else {
            // line 7
            echo "            ";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "cropZoom", array(0 => 900, 1 => 300), "method"), "html", array());
            echo "
        ";
        }
        // line 9
        echo "
        ";
        // line 10
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array())) {
            // line 11
            echo "            <h4>
                ";
            // line 12
            if ( !($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
                // line 13
                echo "                <a href=\"";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "\"><i class=\"fa fa-angle-double-right\"></i></a>
                ";
            }
            // line 15
            echo "                <a href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array());
            echo "\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a>
            </h4>
        ";
        } else {
            // line 18
            echo "            <h4><a href=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a></h4>
        ";
        }
        // line 20
        echo "
        <span class=\"list-blog-date\">
            <i class=\"fa fa-calendar\"></i>
            ";
        // line 23
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "d");
        echo ", ";
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "M");
        echo "
        </span>
        
        ";
        // line 26
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array())) {
            // line 27
            echo "        <span class=\"list-blog-author\">
            <i class=\"fa fa-user\"></i>
            ";
            // line 29
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "author", array());
            echo "
        </span>
        ";
        }
        // line 32
        echo "       
       ";
        // line 33
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array())) {
            // line 34
            echo "        <ul class=\"tags\">
            <i class=\"fa fa-tag\"></i>
            ";
            // line 36
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 37
                echo "            <li><a href=\"";
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo "/tag";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo $context["tag"];
                echo "\">";
                echo $context["tag"];
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "        </ul>
        ";
        }
        // line 41
        echo "        
    </div>

    <div class=\"list-blog-padding\">

    ";
        // line 46
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
            // line 47
            echo "        <p>";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "</p>
        ";
            // line 48
            if ( !(isset($context["truncate"]) ? $context["truncate"] : null)) {
                // line 49
                echo "        ";
                $context["show_prev_next"] = true;
                // line 50
                echo "        ";
            }
            // line 51
            echo "    ";
        } elseif (((isset($context["truncate"]) ? $context["truncate"] : null) && ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())))) {
            // line 52
            echo "        <p>";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array());
            echo "</p>
        <p><a href=\"";
            // line 53
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">Continue Reading...</a></p>
    ";
        } elseif (        // line 54
(isset($context["truncate"]) ? $context["truncate"] : null)) {
            // line 55
            echo "        <p>";
            echo $this->env->getExtension('GravTwigExtension')->truncateFilter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), 550);
            echo "</p>
        <p><a href=\"";
            // line 56
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">Continue Reading...</a></p>
    ";
        } else {
            // line 58
            echo "        <p>";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "</p>
        ";
            // line 59
            $context["show_prev_next"] = true;
            // line 60
            echo "    ";
        }
        // line 61
        echo "
    ";
        // line 62
        if ((isset($context["show_prev_next"]) ? $context["show_prev_next"] : null)) {
            // line 63
            echo "
        <p class=\"prev-next\">
            ";
            // line 65
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isFirst", array())) {
                // line 66
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "url", array());
                echo "\"><i class=\"fa fa-chevron-left\"></i> Next Post</a>
            ";
            }
            // line 68
            echo "
            ";
            // line 69
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isLast", array())) {
                // line 70
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "url", array());
                echo "\">Previous Post <i class=\"fa fa-chevron-right\"></i></a>
            ";
            }
            // line 72
            echo "        </p>
    ";
        }
        // line 74
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 74,  211 => 72,  205 => 70,  203 => 69,  200 => 68,  194 => 66,  192 => 65,  188 => 63,  186 => 62,  183 => 61,  180 => 60,  178 => 59,  173 => 58,  168 => 56,  163 => 55,  161 => 54,  157 => 53,  152 => 52,  149 => 51,  146 => 50,  143 => 49,  141 => 48,  136 => 47,  134 => 46,  127 => 41,  123 => 39,  109 => 37,  105 => 36,  101 => 34,  99 => 33,  96 => 32,  90 => 29,  86 => 27,  84 => 26,  76 => 23,  71 => 20,  63 => 18,  54 => 15,  48 => 13,  46 => 12,  43 => 11,  41 => 10,  38 => 9,  32 => 7,  26 => 5,  24 => 4,  19 => 1,);
    }
}
