<?php

/* item.html.twig */
class __TwigTemplate_2346dc8ff841ec4623afe1443913344a6ba32155b85d786bc2cbbf1ad85f8c16 extends Twig_Template
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
        $this->loadTemplate("item.html.twig", "item.html.twig", 1, "1100236661")->display($context);
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* item.html.twig */
class __TwigTemplate_2346dc8ff841ec4623afe1443913344a6ba32155b85d786bc2cbbf1ad85f8c16_1100236661 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
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
        $context["base_url"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "url", array());
        // line 4
        $context["feed_url"] = (isset($context["base_url"]) ? $context["base_url"] : null);
        // line 5
        if (((isset($context["base_url"]) ? $context["base_url"] : null) == "/")) {
            // line 6
            $context["base_url"] = "";
        }
        // line 9
        $context["singular"] = true;
        // line 10
        $context["template_body_classes"] = "is-singular not-front-page single single-format-standard single-post not-scrolled ";
        // line 12
        if (((isset($context["base_url"]) ? $context["base_url"] : null) == (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null))) {
            // line 13
            $context["feed_url"] = (((isset($context["base_url"]) ? $context["base_url"] : null) . "/") . $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "slug", array()));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "  ";
        $this->loadTemplate("partials/blog_item.html.twig", "item.html.twig", 17)->display(array_merge($context, array("truncate" => false, "big_header" => true)));
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 17,  77 => 16,  73 => 1,  70 => 13,  68 => 12,  66 => 10,  64 => 9,  61 => 6,  59 => 5,  57 => 4,  55 => 3,  19 => 1,);
    }
}
/* {% embed 'partials/base.html.twig' %}*/
/* */
/* {% set base_url = page.parent.url %}*/
/*   {% set feed_url = base_url %}*/
/* {% if base_url == '/' %}*/
/*   {% set base_url = '' %}*/
/* {% endif %}*/
/* */
/* {% set singular = true %}*/
/* {% set template_body_classes = 'is-singular not-front-page single single-format-standard single-post not-scrolled ' %}*/
/* */
/* {% if base_url == base_url_relative %}*/
/*   {% set feed_url = base_url~'/'~page.parent.slug %}*/
/* {% endif  %}*/
/* */
/* {% block content %}*/
/*   {% include 'partials/blog_item.html.twig' with {'truncate':false,'big_header':true} %}*/
/* {% endblock %}*/
/* {% endembed %}*/
/* */
