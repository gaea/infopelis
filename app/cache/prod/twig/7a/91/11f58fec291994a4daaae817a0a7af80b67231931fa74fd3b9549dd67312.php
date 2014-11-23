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
        echo "\t<div class=\"container-fluid\">
\t\t";
        // line 12
        if (((isset($context["search"]) ? $context["search"] : null) == false)) {
            // line 13
            echo "\t\t\t<center><h3 class=\"text-primary\">New Movies In Theaters</h3></center>
\t\t\t<hr/>
\t\t";
        }
        // line 16
        echo "\t\t";
        $this->env->loadTemplate("GaeaMoviesInfopelisBundle:Default:movieList.html.twig")->display(array_merge($context, array("movies" => (isset($context["movies"]) ? $context["movies"] : null))));
        // line 17
        echo "\t</div>
";
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        echo "\t
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
        return array (  118 => 44,  113 => 33,  96 => 45,  77 => 33,  65 => 20,  23 => 1,  52 => 13,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 9,  102 => 5,  71 => 17,  67 => 15,  63 => 15,  59 => 14,  47 => 11,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  91 => 27,  69 => 25,  62 => 23,  49 => 19,  38 => 6,  87 => 25,  66 => 24,  55 => 15,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  44 => 10,  40 => 8,  31 => 3,  26 => 6,  101 => 32,  94 => 44,  89 => 20,  85 => 38,  79 => 34,  75 => 17,  72 => 16,  68 => 14,  56 => 18,  50 => 12,  27 => 4,  22 => 2,  35 => 8,  29 => 5,  21 => 2,  25 => 3,  43 => 8,  41 => 10,  32 => 4,  28 => 3,  24 => 4,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 14,  60 => 17,  57 => 16,  54 => 10,  51 => 14,  48 => 8,  45 => 8,  42 => 7,  39 => 7,  36 => 5,  33 => 4,  30 => 7,);
    }
}
