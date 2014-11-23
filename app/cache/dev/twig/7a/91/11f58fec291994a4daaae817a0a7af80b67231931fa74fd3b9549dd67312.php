<?php

/* GaeaMoviesInfopelisBundle:Default:index.html.twig */
class __TwigTemplate_7a9111f58fec291994a4daaae817a0a7af80b67231931fa74fd3b9549dd67312 extends Twig_Template
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
        echo "\t\t<div class=\"row page-header\">
\t\t\t<div class=\"col-md-3 pull-left\">
\t\t\t\t<h4 class=\"text-primary\">
\t\t\t\t\t";
        // line 14
        if (((isset($context["search"]) ? $context["search"] : $this->getContext($context, "search")) == true)) {
            // line 15
            echo "\t\t\t\t\t\tMovie search results:
\t\t\t\t\t";
        } else {
            // line 17
            echo "\t\t\t\t\t\tDiscover Movies
\t\t\t\t\t";
        }
        // line 19
        echo "\t\t\t\t</h4>
\t\t\t</div>\t\t\t
\t\t\t<div class=\"col-md-2 pull-right\">
\t\t\t\t<a class=\"btn btn-default btn-primary\" onclick=\"orderMoviesBy()\">Sort By Release Date</a>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 25
        $this->env->loadTemplate("GaeaMoviesInfopelisBundle:Default:movieList.html.twig")->display(array_merge($context, array("movies" => (isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies")))));
    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        echo "\t
\t<script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gaeamoviesinfopelis/js/actorDetail.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "GaeaMoviesInfopelisBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 29,  74 => 28,  70 => 25,  62 => 19,  58 => 17,  54 => 15,  52 => 14,  47 => 11,  44 => 10,  39 => 7,  34 => 4,  31 => 3,);
    }
}
