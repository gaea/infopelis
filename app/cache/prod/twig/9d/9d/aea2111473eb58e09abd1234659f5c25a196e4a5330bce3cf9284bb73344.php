<?php

/* GaeaMoviesInfopelisBundle:Default:movieList.html.twig */
class __TwigTemplate_9d9daea2111473eb58e09abd1234659f5c25a196e4a5330bce3cf9284bb73344 extends Twig_Template
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
        echo "<center>
\t<div id=\"movies\" class=\"row\">
\t\t";
        // line 3
        if ((twig_length_filter($this->env, (isset($context["movies"]) ? $context["movies"] : null)) > 0)) {
            // line 4
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) ? $context["movies"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
                // line 5
                echo "\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gaea_movies_infopelis_movie_detail", array("id" => $this->getAttribute((isset($context["movie"]) ? $context["movie"] : null), "id"))), "html", null, true);
                echo "\">
\t\t\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-3 col-lg-3\">
\t\t\t\t\t\t<h5>";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : null), "original_title"), "html", null, true);
                echo "<br/><small>Release date: ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : null), "release_date"), "html", null, true);
                echo "</small></h5>
\t\t\t\t\t\t";
                // line 8
                if (($this->getAttribute((isset($context["movie"]) ? $context["movie"] : null), "poster_path") != "")) {
                    // line 9
                    echo "\t\t\t\t\t\t\t<div class=\"img-thumbnail thumbnail-movie-list\">
\t\t\t\t\t\t\t\t<img src=\"https://image.tmdb.org/t/p/w130/";
                    // line 10
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : null), "poster_path"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : null), "original_title"), "html", null, true);
                    echo "\" class=\"img-responsive img-movie-list\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                } else {
                    // line 13
                    echo "\t\t\t\t\t\t\t<div class=\"img-thumbnail thumbnail-movie-list\">
\t\t\t\t\t\t\t\t<img src=\"";
                    // line 14
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gaeamoviesinfopelis/images/photo.png"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : null), "original_title"), "html", null, true);
                    echo "\" class=\"img-responsive img-no-movie-list\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 17
                echo "\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t\t";
                // line 19
                if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 4) == 0)) {
                    // line 20
                    echo "\t\t\t\t\t<div class=\"clearfix visible-md visible-lg\"></div>
\t\t\t\t";
                }
                // line 22
                echo "\t\t\t\t";
                if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 3) == 0)) {
                    // line 23
                    echo "\t\t\t\t\t<div class=\"clearfix visible-sm\"></div>
\t\t\t\t";
                }
                // line 25
                echo "\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t\t";
        } else {
            // line 27
            echo "\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t<h3 class=\"text-primary\">We're sorry, no movies were found for your seach.</h3>
\t\t</div>
\t\t";
        }
        // line 31
        echo "
\t</div>
</center>
";
    }

    public function getTemplateName()
    {
        return "GaeaMoviesInfopelisBundle:Default:movieList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 26,  83 => 19,  170 => 48,  167 => 47,  153 => 46,  146 => 43,  114 => 30,  104 => 26,  81 => 19,  74 => 17,  118 => 44,  113 => 27,  96 => 25,  77 => 33,  65 => 14,  23 => 3,  52 => 13,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 40,  132 => 51,  128 => 35,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 31,  108 => 28,  102 => 5,  71 => 14,  67 => 15,  63 => 15,  59 => 12,  47 => 11,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 41,  138 => 54,  136 => 38,  123 => 47,  121 => 46,  117 => 31,  115 => 43,  105 => 40,  91 => 27,  69 => 25,  62 => 23,  49 => 7,  38 => 6,  87 => 25,  66 => 24,  55 => 8,  98 => 24,  93 => 28,  88 => 6,  78 => 18,  46 => 6,  44 => 10,  40 => 8,  31 => 3,  26 => 6,  101 => 25,  94 => 44,  89 => 22,  85 => 20,  79 => 17,  75 => 17,  72 => 16,  68 => 13,  56 => 18,  50 => 7,  27 => 4,  22 => 2,  35 => 8,  29 => 5,  21 => 2,  25 => 4,  43 => 5,  41 => 10,  32 => 4,  28 => 3,  24 => 4,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 52,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 44,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 34,  122 => 43,  116 => 41,  112 => 29,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 23,  86 => 20,  82 => 22,  80 => 19,  73 => 19,  64 => 14,  60 => 10,  57 => 9,  54 => 10,  51 => 14,  48 => 8,  45 => 8,  42 => 7,  39 => 7,  36 => 5,  33 => 4,  30 => 7,);
    }
}
