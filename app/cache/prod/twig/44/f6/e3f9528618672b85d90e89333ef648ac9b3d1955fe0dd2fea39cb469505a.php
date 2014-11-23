<?php

/* GaeaMoviesInfopelisBundle:Default:actorDetail.html.twig */
class __TwigTemplate_44f6e3f9528618672b85d90e89333ef648ac9b3d1955fe0dd2fea39cb469505a extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "name"), "html", null, true);
        echo "</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t";
        // line 21
        if (($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "profile_path") != "")) {
            // line 22
            echo "\t\t\t\t\t\t\t\t\t<div class=\"img-thumbnail pull-right\">
\t\t\t\t\t\t\t\t\t\t<img src=\"https://image.tmdb.org/t/p/w150/";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "profile_path"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "name"), "html", null, true);
            echo "\" class=\"img-responsive\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        } else {
            // line 26
            echo "\t\t\t\t\t\t\t\t\t<div class=\"img-thumbnail thumbnail-actor pull-right\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gaeamoviesinfopelis/images/photo.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "name"), "html", null, true);
            echo "\" class=\"img-responsive img-no-actor\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 30
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<dl class=\"dl-horizontal\">
\t\t\t\t\t\t\t\t\t<dt>Place of birth</dt>
\t\t\t\t\t\t\t\t\t<dd>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "place_of_birth"), "html", null, true);
        echo "</dd>
\t\t\t\t\t\t\t\t\t<dt>Birthday</dt>
\t\t\t\t\t\t\t\t\t<dd>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "birthday"), "html", null, true);
        echo "</dd>
\t\t\t\t\t\t\t\t\t<dt>Deathday</dt>
\t\t\t\t\t\t\t\t\t<dd>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "deathday"), "html", null, true);
        echo "</dd>
\t\t\t\t\t\t\t\t\t<dt>Homepage</dt>
\t\t\t\t\t\t\t\t\t<dd>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "homepage"), "html", null, true);
        echo "</dd>
\t\t\t\t\t\t\t\t\t<dt>Popularity</dt>
\t\t\t\t\t\t\t\t\t<dd>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "popularity"), "html", null, true);
        echo "</dd>
\t\t\t\t\t\t\t\t\t<dt>Biography</dt>
\t\t\t\t\t\t\t\t\t<dd>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "biography"), "html", null, true);
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
        // line 65
        $this->env->loadTemplate("GaeaMoviesInfopelisBundle:Default:movieList.html.twig")->display(array_merge($context, array("movies" => (isset($context["movies"]) ? $context["movies"] : null))));
        // line 66
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

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        // line 77
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
        return array (  155 => 76,  148 => 63,  139 => 56,  137 => 55,  126 => 46,  97 => 36,  110 => 26,  83 => 19,  170 => 48,  167 => 47,  153 => 46,  146 => 43,  114 => 30,  104 => 26,  81 => 19,  74 => 17,  118 => 44,  113 => 43,  96 => 25,  77 => 33,  65 => 14,  23 => 3,  52 => 13,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 40,  132 => 51,  128 => 35,  111 => 37,  107 => 40,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 66,  135 => 53,  131 => 52,  119 => 31,  108 => 28,  102 => 38,  71 => 14,  67 => 23,  63 => 15,  59 => 12,  47 => 11,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 77,  156 => 66,  151 => 63,  142 => 41,  138 => 54,  136 => 38,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  91 => 27,  69 => 25,  62 => 21,  49 => 7,  38 => 6,  87 => 25,  66 => 24,  55 => 8,  98 => 24,  93 => 28,  88 => 6,  78 => 27,  46 => 6,  44 => 10,  40 => 8,  31 => 3,  26 => 6,  101 => 25,  94 => 44,  89 => 22,  85 => 20,  79 => 17,  75 => 26,  72 => 16,  68 => 13,  56 => 18,  50 => 7,  27 => 4,  22 => 2,  35 => 8,  29 => 5,  21 => 2,  25 => 4,  43 => 5,  41 => 10,  32 => 4,  28 => 3,  24 => 4,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 52,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 44,  147 => 58,  144 => 49,  141 => 65,  133 => 55,  130 => 41,  125 => 34,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 34,  86 => 30,  82 => 22,  80 => 19,  73 => 19,  64 => 22,  60 => 10,  57 => 9,  54 => 16,  51 => 14,  48 => 8,  45 => 8,  42 => 7,  39 => 7,  36 => 5,  33 => 4,  30 => 7,);
    }
}
