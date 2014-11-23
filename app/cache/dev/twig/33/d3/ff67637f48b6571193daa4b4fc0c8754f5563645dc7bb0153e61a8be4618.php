<?php

/* GaeaMoviesInfopelisBundle:Default:movieDetail.html.twig */
class __TwigTemplate_33d3ff67637f48b6571193daa4b4fc0c8754f5563645dc7bb0153e61a8be4618 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "title"), "html", null, true);
        echo "</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t";
        // line 22
        if (($this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "poster_path") != "")) {
            // line 23
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"img-thumbnail pull-right\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://image.tmdb.org/t/p/w150/";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "poster_path"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "title"), "html", null, true);
            echo "\" class=\"img-responsive\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 27
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"img-thumbnail thumbnail-movie pull-right\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gaeamoviesinfopelis/images/no-movie-image.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "title"), "html", null, true);
            echo "\" class=\"img-responsive img-no-movie\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 31
        echo "\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t<dl class=\"dl-horizontal\">
\t\t\t\t\t\t\t\t\t<dt>Original title</dt>
\t\t\t\t\t\t\t\t\t<dd>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "original_title"), "html", null, true);
        echo "</dd>
\t\t\t\t\t\t\t\t\t<dt>Overview</dt>
\t\t\t\t\t\t\t\t\t<dd>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "overview"), "html", null, true);
        echo "</dd>
\t\t\t\t\t\t\t\t\t<dt>Release date</dt>
\t\t\t\t\t\t\t\t\t<dd>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "release_date"), "html", null, true);
        echo "</dd>
\t\t\t\t\t\t\t\t\t<dt>Status</dt>
\t\t\t\t\t\t\t\t\t<dd>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "status"), "html", null, true);
        echo "</dd>
\t\t\t\t\t\t\t\t\t<dt>Genres</dt>
\t\t\t\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t\t\t\t";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "genres"));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 46
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["genre"]) ? $context["genre"] : $this->getContext($context, "genre")), "name"), "html", null, true);
            echo ".
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-12 pull-left\">
\t\t\t\t\t\t\t\t<h3 class=\"text-primary text-center\">Cast</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 57
        $this->env->loadTemplate("GaeaMoviesInfopelisBundle:Default:actorList.html.twig")->display(array_merge($context, array("actors" => (isset($context["credits"]) ? $context["credits"] : $this->getContext($context, "credits")))));
        // line 58
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "GaeaMoviesInfopelisBundle:Default:movieDetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 65,  141 => 58,  139 => 57,  128 => 48,  119 => 46,  115 => 45,  109 => 42,  104 => 40,  99 => 38,  94 => 36,  87 => 31,  79 => 28,  76 => 27,  68 => 24,  65 => 23,  63 => 22,  54 => 16,  47 => 11,  44 => 10,  39 => 7,  34 => 4,  31 => 3,);
    }
}
