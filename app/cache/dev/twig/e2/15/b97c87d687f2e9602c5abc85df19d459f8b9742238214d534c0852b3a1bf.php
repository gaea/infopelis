<?php

/* GaeaMoviesInfopelisBundle:Default:search.html.twig */
class __TwigTemplate_e215b97c87d687f2e9602c5abc85df19d459f8b9742238214d534c0852b3a1bf extends Twig_Template
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
        echo "\t<div class=\"row page-header\">
\t\t<div class=\"col-md-3 pull-left\">
\t\t\t<h4 class=\"text-primary\">Actor search results:</h4>
\t\t</div>
\t</div>
\t";
        // line 16
        $this->env->loadTemplate("GaeaMoviesInfopelisBundle:Default:actorList.html.twig")->display(array_merge($context, array("actors" => (isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")))));
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        // line 20
        echo "\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gaeamoviesinfopelis/js/actorList.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "GaeaMoviesInfopelisBundle:Default:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 20,  58 => 19,  54 => 16,  47 => 11,  44 => 10,  39 => 7,  34 => 4,  31 => 3,);
    }
}
