<?php

/* GaeaMoviesInfopelisBundle:Default:actorList.html.twig */
class __TwigTemplate_18d75e6e222dba2bfe96dd8db072a4a593cc5ac0d84974d839a000ddd80bb409 extends Twig_Template
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
        echo "<div class=\"row\">
\t<center>
\t\t";
        // line 3
        if ((twig_length_filter($this->env, (isset($context["actors"]) ? $context["actors"] : $this->getContext($context, "actors"))) > 0)) {
            // line 4
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["actors"]) ? $context["actors"] : $this->getContext($context, "actors")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
                // line 5
                echo "\t\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-3 col-lg-3\">
\t\t\t\t\t<a href=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gaea_movies_infopelis_actor_detail", array("id" => $this->getAttribute((isset($context["actor"]) ? $context["actor"] : $this->getContext($context, "actor")), "id"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t<h5>";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actor"]) ? $context["actor"] : $this->getContext($context, "actor")), "name"), "html", null, true);
                echo "<br></h5>
\t\t\t\t\t</a>
\t\t\t\t\t<h5>
\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t";
                // line 11
                if ($this->getAttribute((isset($context["actor"]) ? $context["actor"] : null), "character", array(), "any", true, true)) {
                    // line 12
                    echo "\t\t\t\t\t\t\t\tCharacter: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actor"]) ? $context["actor"] : $this->getContext($context, "actor")), "character"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 14
                echo "\t\t\t\t\t\t\t";
                if ($this->getAttribute((isset($context["actor"]) ? $context["actor"] : null), "known_for", array(), "any", true, true)) {
                    // line 15
                    echo "\t\t\t\t\t\t\t\t";
                    if ((twig_length_filter($this->env, $this->getAttribute((isset($context["actor"]) ? $context["actor"] : $this->getContext($context, "actor")), "known_for")) > 0)) {
                        // line 16
                        echo "\t\t\t\t\t\t\t\t\tKnown for: 
\t\t\t\t\t\t\t\t\t";
                        // line 17
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["actor"]) ? $context["actor"] : $this->getContext($context, "actor")), "known_for"));
                        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
                            // line 18
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if ($this->getAttribute((isset($context["movie"]) ? $context["movie"] : null), "original_title", array(), "any", true, true)) {
                                // line 19
                                echo "\t\t\t\t\t\t\t\t\t\t\t<a  class=\"popoverMovieData\" 
\t\t\t\t\t\t\t\t\t\t\t\trel=\"popover\" 
\t\t\t\t\t\t\t\t\t\t\t\tdata-content=\"<center>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='img-thumbnail thumbnail-movie-list'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class='img-movie-list' src='
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 24
                                if (($this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "poster_path") != "")) {
                                    // line 25
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thttps://image.tmdb.org/t/p/w130/";
                                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "poster_path"), "html", null, true);
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 27
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gaeamoviesinfopelis/images/no-movie-image.png"), "html", null, true);
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 29
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  </center>\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-original-title=\"<center class='text-primary'>";
                                // line 32
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "original_title"), "html", null, true);
                                echo "<br/><small>Release Date: ";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "release_date"), "html", null, true);
                                echo "</small></center>\" 
\t\t\t\t\t\t\t\t\t\t\t\thref=\"";
                                // line 33
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gaea_movies_infopelis_movie_detail", array("id" => $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "id"))), "html", null, true);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 34
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "original_title"), "html", null, true);
                                echo ". 
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 37
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 38
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    // line 39
                    echo "\t\t\t\t\t\t\t";
                }
                // line 40
                echo "\t\t\t\t\t\t</small>
\t\t\t\t\t</h5>
\t\t\t\t\t<a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gaea_movies_infopelis_actor_detail", array("id" => $this->getAttribute((isset($context["actor"]) ? $context["actor"] : $this->getContext($context, "actor")), "id"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t<div class=\"img-thumbnail thumbnail-actor-list col-middle\">
\t\t\t\t\t\t\t";
                // line 44
                if (($this->getAttribute((isset($context["actor"]) ? $context["actor"] : $this->getContext($context, "actor")), "profile_path") != "")) {
                    // line 45
                    echo "\t\t\t\t\t\t\t\t<img src=\"https://image.tmdb.org/t/p/w130/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actor"]) ? $context["actor"] : $this->getContext($context, "actor")), "profile_path"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actor"]) ? $context["actor"] : $this->getContext($context, "actor")), "name"), "html", null, true);
                    echo "\" class=\"img-responsive img-actor-list\"/>
\t\t\t\t\t\t\t";
                } else {
                    // line 47
                    echo "\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gaeamoviesinfopelis/images/no-user-image.jpg"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actor"]) ? $context["actor"] : $this->getContext($context, "actor")), "name"), "html", null, true);
                    echo "\" class=\"img-responsive img-no-actor-list\"/>
\t\t\t\t\t\t\t";
                }
                // line 49
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t";
                // line 52
                if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 4) == 0)) {
                    // line 53
                    echo "\t\t\t\t\t<div class=\"clearfix visible-md visible-lg\"></div>
\t\t\t\t";
                }
                // line 55
                echo "\t\t\t\t";
                if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 3) == 0)) {
                    // line 56
                    echo "\t\t\t\t\t<div class=\"clearfix visible-sm\"></div>
\t\t\t\t";
                }
                // line 58
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "\t\t";
        } else {
            // line 60
            echo "\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t<h3 class=\"text-primary\">We're sorry, no actors were found</h3>
\t\t\t</div>
\t\t";
        }
        // line 64
        echo "\t</center>
</div>

";
    }

    public function getTemplateName()
    {
        return "GaeaMoviesInfopelisBundle:Default:actorList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 64,  197 => 60,  194 => 59,  180 => 58,  176 => 56,  173 => 55,  169 => 53,  167 => 52,  162 => 49,  154 => 47,  146 => 45,  144 => 44,  139 => 42,  135 => 40,  132 => 39,  129 => 38,  123 => 37,  117 => 34,  113 => 33,  107 => 32,  102 => 29,  96 => 27,  90 => 25,  88 => 24,  81 => 19,  74 => 17,  71 => 16,  68 => 15,  59 => 12,  57 => 11,  50 => 7,  46 => 6,  43 => 5,  25 => 4,  19 => 1,  120 => 45,  115 => 34,  110 => 9,  104 => 5,  97 => 46,  95 => 45,  86 => 39,  80 => 35,  78 => 18,  65 => 14,  56 => 18,  52 => 17,  41 => 10,  35 => 8,  29 => 5,  23 => 3,  61 => 20,  58 => 19,  54 => 16,  47 => 11,  44 => 10,  39 => 9,  34 => 4,  31 => 3,);
    }
}
