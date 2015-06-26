<?php

/* modular/showcase.html.twig */
class __TwigTemplate_89b91bf3b116a7eaedd595956d413436320086bf1bf9ebb19b37fcbf1fc17734 extends Twig_Template
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
        echo "<div id=\"content-slide\">
  <div class=\"slideme\">
    ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "slides", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 4
            echo "       <div class=\"modular-row showcase flush-top\" ";
            if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($context["slide"], "image", array()), array(), "array")) {
                echo "style=\"background-image: url(";
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($context["slide"], "image", array()), array(), "array"), "url", array());
                echo ");\"";
            }
            echo ">
          <h1>";
            // line 5
            echo $this->getAttribute($context["slide"], "heading", array());
            echo "</h1>
          <h2>";
            // line 6
            echo $this->getAttribute($context["slide"], "subheading", array());
            echo "</h2>
          <a class=\"button\" href=\"";
            // line 7
            echo $this->getAttribute($context["slide"], "button_url", array());
            echo "\">";
            echo $this->getAttribute($context["slide"], "button_text", array());
            echo "</a>
      </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</div>
</div>

";
        // line 13
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "

<script type=\"text/javascript\">
\$('#content-slide').slideme({
  arrows: ";
        // line 17
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header_options", array()), "arrows", array());
        echo ",
  autoslide: ";
        // line 18
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header_options", array()), "autoslide", array());
        echo ",
  autoslideHoverStop: ";
        // line 19
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header_options", array()), "autoslideHoverStop", array());
        echo ",
  interval: ";
        // line 20
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header_options", array()), "interval", array());
        echo ",
  loop: ";
        // line 21
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header_options", array()), "loop", array());
        echo ",
  pagination: \"numbers\",
  transition : '";
        // line 23
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header_options", array()), "transition", array());
        echo "',
  itemsForSlide: ";
        // line 24
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header_options", array()), "itemsForSlide", array());
        echo ",
  touch: ";
        // line 25
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header_options", array()), "touch", array());
        echo ",
  swipe: ";
        // line 26
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header_options", array()), "swipe", array());
        echo ",

});
</script>
";
    }

    public function getTemplateName()
    {
        return "modular/showcase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 26,  96 => 25,  92 => 24,  88 => 23,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  60 => 13,  55 => 10,  44 => 7,  40 => 6,  36 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
