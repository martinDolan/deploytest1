<?php

/* partials/base.html.twig */
class __TwigTemplate_7368e251f09dd1d87c1ee30d43eda460bc11d86940534687d896ffbb46b95802 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'slider' => array($this, 'block_slider'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" class='";
        // line 2
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 7)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 8))) {
        } else {
            echo "v2";
        }
        echo " ";
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 7))) {
            echo "ie ie7 ltie8 ltie9";
        }
        echo " ";
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 8))) {
            echo "ie ie8 ltie9";
        }
        echo "'>
<head>
  ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 41
        echo "</head>
<body id=\"top\" class=\"";
        // line 42
        if ((isset($context["template_body_classes"]) ? $context["template_body_classes"] : null)) {
            echo (isset($context["template_body_classes"]) ? $context["template_body_classes"] : null);
        } else {
            echo "fl-builder blog has-featured-posts is-not-singular";
        }
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
  <div id=\"page\" class=\"hfeed site\">
    <div class=\"site-inner\">
      ";
        // line 45
        $this->displayBlock('header', $context, $blocks);
        // line 48
        echo "      ";
        $this->displayBlock('slider', $context, $blocks);
        // line 49
        echo "      ";
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "
      ";
        // line 57
        $this->displayBlock('footer', $context, $blocks);
        // line 60
        echo "  </div>
</div>

</body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "  <meta charset=\"utf-8\" />
  <title>";
        // line 6
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " - ";
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('GravTwigExtension')->translate("SITE.TITLE"), "html");
        echo "</title>
  ";
        // line 7
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 7)->display($context);
        // line 8
        echo "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/favicon.png\" />
  <link rel='stylesheet' id='receptar-google-fonts-css' href='//fonts.googleapis.com/css?family=Roboto%7CRoboto+Condensed%3A400%2C300%7CAlegreya%3A400%2C700&#038;subset&#038;ver=44d4db587900ff753163772c910c3b34' type='text/css' media='all'/>
  <link href='//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css' rel='stylesheet'/>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab%3A400%2C700&ver=4.2.2' id='roboto-slab-css' media='all' rel='stylesheet' type='text/css'/>
  <meta name=\"google-translate-customization\" content=\"";
        // line 13
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "google_translate_token", array());
        echo "\">
  ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "  ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

  ";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "  ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

  ";
        // line 36
        if ((isset($context["singular"]) ? $context["singular"] : null)) {
            // line 37
            echo "  <style id='receptar-stylesheet-inline-css' type='text/css'>.entry-media{background-image:url(";
            if (twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()))) {
                echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "url", array());
            } else {
                echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
                echo "/images/";
                echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "global_featured_image", array());
            }
            echo ")}</style>
  ";
        }
        // line 39
        echo "
  ";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/slick.css"), "method");
        // line 16
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://genericons/genericons.css"), "method");
        // line 17
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/starter.css"), "method");
        // line 18
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/style.css"), "method");
        // line 19
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/colors.css"), "method");
        // line 20
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/jetpack.css"), "method");
        // line 21
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/lightbox.css"), "method");
        // line 22
        echo "    ";
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 7)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 8))) {
            // line 23
            echo "    ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/ie.css"), "method");
            // line 24
            echo "  ";
        }
        // line 25
        echo "  ";
    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 30
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/slick.min.js"), "method");
        // line 31
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/scripts-global.js"), "method");
        // line 32
        echo "
  ";
    }

    // line 45
    public function block_header($context, array $blocks = array())
    {
        // line 46
        echo "        ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 46)->display($context);
        // line 47
        echo "      ";
    }

    // line 48
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        // line 50
        echo "      <div id=\"content\" class=\"site-content\">
        <div id=\"primary\" class=\"content-area\">
          ";
        // line 52
        $this->displayBlock('content', $context, $blocks);
        // line 53
        echo "        </div>
      </div>
      ";
    }

    // line 52
    public function block_content($context, array $blocks = array())
    {
    }

    // line 57
    public function block_footer($context, array $blocks = array())
    {
        // line 58
        echo "        ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 58)->display($context);
        // line 59
        echo "      ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 59,  241 => 58,  238 => 57,  233 => 52,  227 => 53,  225 => 52,  221 => 50,  218 => 49,  213 => 48,  209 => 47,  206 => 46,  203 => 45,  198 => 32,  195 => 31,  192 => 30,  189 => 29,  186 => 28,  182 => 25,  179 => 24,  176 => 23,  173 => 22,  170 => 21,  167 => 20,  164 => 19,  161 => 18,  158 => 17,  155 => 16,  152 => 15,  149 => 14,  144 => 39,  132 => 37,  130 => 36,  124 => 34,  122 => 28,  116 => 26,  114 => 14,  110 => 13,  103 => 9,  100 => 8,  98 => 7,  90 => 6,  87 => 5,  84 => 4,  75 => 60,  73 => 57,  70 => 56,  67 => 49,  64 => 48,  62 => 45,  51 => 42,  48 => 41,  46 => 4,  30 => 2,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en" class='{% if browser.getBrowser == 'msie' and browser.getVersion == 7 and browser.getVersion == 8 %}{% else %}v2{% endif %} {% if browser.getBrowser == 'msie' and browser.getVersion == 7 %}ie ie7 ltie8 ltie9{% endif %} {% if browser.getBrowser == 'msie' and browser.getVersion == 8 %}ie ie8 ltie9{% endif %}'>*/
/* <head>*/
/*   {% block head %}*/
/*   <meta charset="utf-8" />*/
/*   <title>{% if header.title %}{{ header.title|e('html') }} - {% endif %}{{ 'SITE.TITLE'|t|e('html') }}</title>*/
/*   {% include 'partials/metadata.html.twig' %}*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">*/
/*   <link rel="icon" type="image/png" href="{{ theme_url }}/images/favicon.png" />*/
/*   <link rel='stylesheet' id='receptar-google-fonts-css' href='//fonts.googleapis.com/css?family=Roboto%7CRoboto+Condensed%3A400%2C300%7CAlegreya%3A400%2C700&#038;subset&#038;ver=44d4db587900ff753163772c910c3b34' type='text/css' media='all'/>*/
/*   <link href='//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css' rel='stylesheet'/>*/
/*   <link href='http://fonts.googleapis.com/css?family=Roboto+Slab%3A400%2C700&ver=4.2.2' id='roboto-slab-css' media='all' rel='stylesheet' type='text/css'/>*/
/*   <meta name="google-translate-customization" content="{{ site.google_translate_token }}">*/
/*   {% block stylesheets %}*/
/*     {% do assets.addCss('theme://css/slick.css') %}*/
/*     {% do assets.addCss('theme://genericons/genericons.css') %}*/
/*     {% do assets.addCss('theme://css/starter.css') %}*/
/*     {% do assets.addCss('theme://css/style.css') %}*/
/*     {% do assets.addCss('theme://css/colors.css') %}*/
/*     {% do assets.addCss('theme://css/jetpack.css') %}*/
/*     {% do assets.addCss('theme://css/lightbox.css') %}*/
/*     {% if browser.getBrowser == 'msie' and browser.getVersion >= 7 and browser.getVersion <= 8 %}*/
/*     {% do assets.addCss('theme://css/ie.css') %}*/
/*   {% endif %}*/
/*   {% endblock %}*/
/*   {{ assets.css() }}*/
/* */
/*   {% block javascripts %}*/
/*     {% do assets.add('jquery',101) %}*/
/*     {% do assets.add('theme://js/slick.min.js') %}*/
/*     {% do assets.add('theme://js/scripts-global.js') %}*/
/* */
/*   {% endblock %}*/
/*   {{ assets.js() }}*/
/* */
/*   {% if singular %}*/
/*   <style id='receptar-stylesheet-inline-css' type='text/css'>.entry-media{background-image:url({% if page.media.images|first %}{{ page.media.images|first.url }}{% else %}{{ theme_url }}/images/{{ site.global_featured_image }}{% endif %})}</style>*/
/*   {% endif %}*/
/* */
/*   {% endblock head %}*/
/* </head>*/
/* <body id="top" class="{% if template_body_classes %}{{ template_body_classes }}{% else %}fl-builder blog has-featured-posts is-not-singular{% endif %}{{ page.header.body_classes }}">*/
/*   <div id="page" class="hfeed site">*/
/*     <div class="site-inner">*/
/*       {% block header %}*/
/*         {% include 'partials/header.html.twig' %}*/
/*       {% endblock %}*/
/*       {% block slider %}{% endblock %}*/
/*       {% block body %}*/
/*       <div id="content" class="site-content">*/
/*         <div id="primary" class="content-area">*/
/*           {% block content %}{% endblock %}*/
/*         </div>*/
/*       </div>*/
/*       {% endblock %}*/
/* */
/*       {% block footer %}*/
/*         {% include 'partials/footer.html.twig' %}*/
/*       {% endblock %}*/
/*   </div>*/
/* </div>*/
/* */
/* </body>*/
/* </html>*/
/* */
