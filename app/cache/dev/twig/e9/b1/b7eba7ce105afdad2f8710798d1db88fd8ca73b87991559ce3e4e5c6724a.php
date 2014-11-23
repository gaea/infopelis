<?php

/* GaeaMoviesInfopelisBundle:Default:movieList.html.twig */
class __TwigTemplate_e9b1b7eba7ce105afdad2f8710798d1db88fd8ca73b87991559ce3e4e5c6724a extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies"))) > 0)) {
            // line 4
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies")));
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
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gaea_movies_infopelis_movie_detail", array("id" => $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "id"))), "html", null, true);
                echo "\">
\t\t\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-3 col-lg-3\">
\t\t\t\t\t\t<h5>";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "original_title"), "html", null, true);
                echo "<br/><small>Release date: ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "release_date"), "html", null, true);
                echo "</small></h5>
\t\t\t\t\t\t";
                // line 8
                if (($this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "poster_path") != "")) {
                    // line 9
                    echo "\t\t\t\t\t\t\t<div class=\"img-thumbnail thumbnail-movie-list\">
\t\t\t\t\t\t\t\t<img src=\"https://image.tmdb.org/t/p/w130/";
                    // line 10
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "poster_path"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "original_title"), "html", null, true);
                    echo "\" class=\"item img-responsive img-movie-list\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                } else {
                    // line 13
                    echo "\t\t\t\t\t\t\t<div class=\"img-thumbnail thumbnail-movie-list col-middle\">
\t\t\t\t\t\t\t\t<img src=\"";
                    // line 14
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gaeamoviesinfopelis/images/no-movie-image.png"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "original_title"), "html", null, true);
                    echo "\" class=\"item img-responsive img-no-movie-list\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 17
                echo "\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t\t";
                // line 19
                if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 4) == 0)) {
                    // line 20
                    echo "\t\t\t\t\t<div class=\"clearfix visible-md visible-lg\"></div>
\t\t\t\t";
                }
                // line 22
                echo "\t\t\t\t";
                if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 3) == 0)) {
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
        return array (  119 => 31,  113 => 27,  96 => 25,  92 => 23,  89 => 22,  85 => 20,  83 => 19,  71 => 14,  60 => 10,  57 => 9,  55 => 8,  49 => 7,  43 => 5,  25 => 4,  19 => 1,  120 => 45,  115 => 34,  110 => 26,  97 => 46,  95 => 45,  86 => 39,  80 => 35,  78 => 34,  56 => 18,  52 => 17,  41 => 10,  35 => 8,  29 => 5,  23 => 3,  162 => 79,  159 => 78,  147 => 68,  145 => 67,  121 => 46,  116 => 44,  109 => 42,  104 => 5,  99 => 38,  94 => 36,  87 => 31,  79 => 17,  76 => 27,  68 => 13,  65 => 24,  63 => 22,  54 => 16,  47 => 11,  44 => 10,  39 => 9,  34 => 4,  31 => 3,);
    }
}
