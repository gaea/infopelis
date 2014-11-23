<?php

/* GaeaMoviesInfopelisBundle:Default:actorDetail.html.twig */
class __TwigTemplate_a7d573b601095e521c22d69970f965b06251f39cef41b7cd41317d92c01df232 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    InfoPelis
";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 col-sm-12\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h3 class=\"panel-title text-center\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "name"), "html", null, true);
        echo "</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t";
        // line 22
        if (($this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "profile_path") != "")) {
            // line 23
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"img-thumbnail pull-right\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://image.tmdb.org/t/p/w150/";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "profile_path"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "name"), "html", null, true);
            echo "\" class=\"img-responsive\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 27
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"img-thumbnail thumbnail-actor pull-right col-middle\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gaeamoviesinfopelis/images/no-user-image.jpg"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "name"), "html", null, true);
            echo "\" class=\"img-responsive img-no-actor\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 31
        echo "\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<dl class=\"dl-horizontal\">
\t\t\t\t\t\t\t\t\t<dt>Place of birth</dt>
\t\t\t\t\t\t\t\t\t<dd>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "place_of_birth"), "html", null, true);
        echo "</dd>
\t\t\t\t\t\t\t\t\t<dt>Birthday</dt>
\t\t\t\t\t\t\t\t\t<dd>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "birthday"), "html", null, true);
        echo "</dd>
\t\t\t\t\t\t\t\t\t<dt>Deathday</dt>
\t\t\t\t\t\t\t\t\t<dd>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "deathday"), "html", null, true);
        echo "</dd>
\t\t\t\t\t\t\t\t\t<dt>Homepage</dt>
\t\t\t\t\t\t\t\t\t<dd><a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "homepage"), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "homepage"), "html", null, true);
        echo "</a></dd>
\t\t\t\t\t\t\t\t\t<dt>Popularity</dt>
\t\t\t\t\t\t\t\t\t<dd>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "popularity"), "html", null, true);
        echo "</dd>
\t\t\t\t\t\t\t\t\t<dt>Biography</dt>
\t\t\t\t\t\t\t\t\t<dd>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "biography"), "html", null, true);
        echo "</dd>
\t\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</br>
\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12 pull-left\">
\t\t\t\t\t\t\t\t\t<form class=\"form-inline\" role=\"form\" action=\"javascript:filterMovies()\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label text-primary lead\">Movies</label>
\t\t\t\t\t\t\t\t\t\t\t<input id=\"searchMovieField\" type=\"text\" class=\"form-control\" placeholder=\"Search movie\"/>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-primary\" onclick=\"filterMovies()\">Find Movies</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-primary\" onclick=\"showAllMovies()\">View All</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-primary\" onclick=\"orderMoviesBy()\">Sort By Release Date</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</center>
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t";
        // line 67
        $this->env->loadTemplate("GaeaMoviesInfopelisBundle:Default:movieList.html.twig")->display(array_merge($context, array("movies" => (isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies")))));
        // line 68
        echo "\t\t\t\t\t\t<div id=\"noMoviesFoundDiv\" class='row hidden'>
\t\t\t\t\t\t\t<h3 class=\"text-primary\">We're sorry, no movies were found for your seach.</h3>
\t\t\t\t\t\t</div> 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    // line 78
    public function block_javascripts($context, array $blocks = array())
    {
        // line 79
        echo "\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gaeamoviesinfopelis/js/actorDetail.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "GaeaMoviesInfopelisBundle:Default:actorDetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 79,  159 => 78,  147 => 68,  145 => 67,  121 => 46,  116 => 44,  109 => 42,  104 => 40,  99 => 38,  94 => 36,  87 => 31,  79 => 28,  76 => 27,  68 => 24,  65 => 23,  63 => 22,  54 => 16,  47 => 11,  44 => 10,  39 => 7,  34 => 4,  31 => 3,);
    }
}
