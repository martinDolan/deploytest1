<?php

/* sidebar/widget.html.twig */
class __TwigTemplate_b5fd567d6f816d12e5799cb20715145b462f90d0fccfe3db501cbf61f56af0d9 extends Twig_Template
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
        echo "<div class=\"widget ";
        if ($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "header", array()), "css_suffix", array())) {
            echo $this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "header", array()), "css_suffix", array());
        } else {
            echo "HTML";
        }
        echo "\">
  <h2 class=\"widget-title\">";
        // line 2
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "title", array());
        echo "</h2>
  ";
        // line 3
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "content", array());
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "sidebar/widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 3,  28 => 2,  19 => 1,);
    }
}
/* <div class="widget {% if module.header.css_suffix %}{{ module.header.css_suffix }}{% else %}HTML{% endif %}">*/
/*   <h2 class="widget-title">{{ module.title }}</h2>*/
/*   {{ module.content }}*/
/* </div>*/
/* */
