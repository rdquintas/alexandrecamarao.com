<?php

/* partials/navigation.html.twig */
class __TwigTemplate_c4965c673b560f2bb15f037af72b7021fcb8cc533e4105e4c3e30290aadfa71d extends Twig_Template
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
        // line 22
        echo "
";
        // line 23
        if (((isset($context["withSuperFish"]) ? $context["withSuperFish"] : null) == "true")) {
            // line 24
            echo "    <ul class=\"sf-menu\" id=\"super-fish-menu\">
";
        } else {
            // line 26
            echo "    <ul>
";
        }
        // line 28
        echo "
    ";
        // line 29
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "zrq", array()), "dropdown", array()), "enabled", array())) {
            // line 30
            echo "        ";
            echo $this->getAttribute($this, "loop", array(0 => (isset($context["pages"]) ? $context["pages"] : null)), "method");
            echo "
    ";
        } else {
            // line 32
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 33
                echo "            ";
                if ($this->getAttribute($context["page"], "visible", array())) {
                    // line 34
                    echo "                ";
                    $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
                    // line 35
                    echo "                <li class=\"";
                    echo (isset($context["current_page"]) ? $context["current_page"] : null);
                    echo "\">
                    <a href=\"";
                    // line 36
                    echo $this->getAttribute($context["page"], "url", array());
                    echo "\">                     
                        ";
                    // line 37
                    echo $this->getAttribute($context["page"], "menu", array());
                    echo "
                    </a>
                </li>
            ";
                }
                // line 41
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "    ";
        }
        // line 43
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 44
            echo "        <li>
            <a href=\"";
            // line 45
            echo $this->getAttribute($context["mitem"], "url", array());
            echo "\">
                ";
            // line 46
            echo $this->getAttribute($context["mitem"], "text", array());
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "</ul>           ";
    }

    // line 1
    public function getloop($__page__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "        ";
                if ($this->getAttribute($context["p"], "visible", array())) {
                    // line 4
                    echo "            ";
                    $context["current_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("active") : (""));
                    // line 5
                    echo "            <li class=\"";
                    echo (isset($context["current_page"]) ? $context["current_page"] : null);
                    echo "\">
                <a href=\"";
                    // line 6
                    echo $this->getAttribute($context["p"], "url", array());
                    echo "\">
                    ";
                    // line 7
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array())) {
                        echo "<i class=\"fa fa-";
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array());
                        echo "\"></i>";
                    }
                    // line 8
                    echo "                    ";
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "
                </a>
                ";
                    // line 10
                    if (((($this->getAttribute($this->getAttribute($context["p"], "children", array()), "count", array()) > 0) && ($this->getAttribute($context["p"], "title", array()) != "Solo")) && ($this->getAttribute($context["p"], "title", array()) != "Group"))) {
                        // line 11
                        echo "                    <ul>
                        ";
                        // line 12
                        echo $this->getAttribute($this, "loop", array(0 => $context["p"]), "method");
                        echo "
                    </ul>
                ";
                    }
                    // line 15
                    echo "            </li>
        ";
                }
                // line 17
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "            <li class=\"zrq\">
                <a href=\"http://www.ricardoquintas.com\">Website by</a>
            </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 18,  163 => 17,  159 => 15,  153 => 12,  150 => 11,  148 => 10,  142 => 8,  136 => 7,  132 => 6,  127 => 5,  124 => 4,  121 => 3,  116 => 2,  105 => 1,  101 => 50,  91 => 46,  87 => 45,  84 => 44,  79 => 43,  76 => 42,  70 => 41,  63 => 37,  59 => 36,  54 => 35,  51 => 34,  48 => 33,  43 => 32,  37 => 30,  35 => 29,  32 => 28,  28 => 26,  24 => 24,  22 => 23,  19 => 22,);
    }
}
