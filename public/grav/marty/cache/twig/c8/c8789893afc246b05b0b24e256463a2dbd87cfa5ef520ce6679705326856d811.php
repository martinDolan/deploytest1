<?php

/* partials/footer.html.twig */
class __TwigTemplate_f6e5a72e0c43da82a7ec0b1f3a1b1a305781f1db274a0a58ab4f73f83e7b2fda extends Twig_Template
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
        echo "<footer id=\"colophon\" class=\"site-footer\" itemscope=\"\" itemtype=\"http://schema.org/WPFooter\">
   <div class=\"site-footer-area footer-area-site-info\">
      <div class=\"site-info-container\">
         <div class=\"site-info\" role=\"contentinfo\">
           ";
        // line 5
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "copyright", array())) {
            // line 6
            echo "           ";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "copyright", array());
            echo "
           ";
        }
        // line 8
        echo "         </div>
      </div>
   </div>
</footer>
";
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
        return array (  33 => 8,  27 => 6,  25 => 5,  19 => 1,);
    }
}
/* <footer id="colophon" class="site-footer" itemscope="" itemtype="http://schema.org/WPFooter">*/
/*    <div class="site-footer-area footer-area-site-info">*/
/*       <div class="site-info-container">*/
/*          <div class="site-info" role="contentinfo">*/
/*            {% if site.copyright %}*/
/*            {{ site.copyright }}*/
/*            {% endif %}*/
/*          </div>*/
/*       </div>*/
/*    </div>*/
/* </footer>*/
/* */
