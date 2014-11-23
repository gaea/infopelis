<?php

/* ::base.html.twig */
class __TwigTemplate_7e483b100c305d040a09c3f0111e84eeaf244f9116d742a23d07edb141fd3087 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gaeamoviesinfopelis/css/styles.css"), "html", null, true);
        echo "\" />
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
\t\t<div class=\"container container-xs-height\">
\t\t\t<div class=\"page-header\">
\t\t\t\t<nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t<a class=\"navbar-brand text-primary text-md\" href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("gaea_movies_infopelis_index");
        echo "\"><p>InfoPelis</p></a>
\t\t\t\t\t\t<form class=\"navbar-form navbar-right\" action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("gaea_movies_infopelis_index");
        echo "\" method=\"get\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"movie\" placeholder=\"Search by Movie's Title\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default btn-primary\">Find Movies</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<form class=\"navbar-form navbar-right\" action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("gaea_movies_infopelis_search");
        echo "\" method=\"get\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"actor\" placeholder=\"Search by Actor's Name\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default btn-primary\">Find Actors</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</div>
\t\t\t<div class=\"page-header\">
\t\t\t\t";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "\t\t\t</div>
\t\t\t</div>
\t\t\t\t<center>
\t\t\t\t\t<footer class=\"page-footer\">
\t\t\t\t\t\t<a class=\"text-primary\" href=\"http://gaea-uv.blogspot.com\" target=\"_blank\">infopelis - gaea-uv - ";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "<br/><br/></a>
\t\t\t\t\t</footer>
\t\t\t\t</center>
\t\t\t</div>
\t\t\t<script type=\"text/javascript\" src=\"//code.jquery.com/jquery-1.11.0.min.js\"></script>
\t\t\t<script type=\"text/javascript\" src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js\"></script>
\t\t\t";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "        </div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 45,  115 => 34,  110 => 9,  97 => 46,  95 => 45,  86 => 39,  80 => 35,  78 => 34,  56 => 18,  52 => 17,  41 => 10,  35 => 8,  29 => 5,  23 => 1,  162 => 79,  159 => 78,  147 => 68,  145 => 67,  121 => 46,  116 => 44,  109 => 42,  104 => 5,  99 => 38,  94 => 36,  87 => 31,  79 => 28,  76 => 27,  68 => 24,  65 => 24,  63 => 22,  54 => 16,  47 => 11,  44 => 10,  39 => 9,  34 => 4,  31 => 3,);
    }
}
