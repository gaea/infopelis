<?php

/* WebProfilerBundle:Profiler:results.html.twig */
class __TwigTemplate_59fe2b9948d775a0fbebefaac5a0c2d3bf94191dc01baaf7b2213a1e5de67009 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_panel($context, array $blocks = array())
    {
        // line 4
        echo "    <h2>Search Results</h2>

    ";
        // line 6
        if ((isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens"))) {
            // line 7
            echo "        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Token</th>
                    <th scope=\"col\">IP</th>
                    <th scope=\"col\">Method</th>
                    <th scope=\"col\">URL</th>
                    <th scope=\"col\">Time</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens")));
            foreach ($context['_seq'] as $context["_key"] => $context["elements"]) {
                // line 19
                echo "                    <tr>
                        <td><a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "token"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "token"), "html", null, true);
                echo "</a></td>
                        <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "ip"), "html", null, true);
                echo "</td>
                        <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "method"), "html", null, true);
                echo "</td>
                        <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "url"), "html", null, true);
                echo "</td>
                        <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "time"), "r"), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elements'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 30
            echo "        <p>
            <em>The query returned no result.</em>
        </p>
    ";
        }
        // line 34
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 27,  76 => 27,  70 => 24,  58 => 18,  53 => 15,  367 => 339,  353 => 328,  350 => 327,  308 => 287,  306 => 286,  155 => 76,  148 => 63,  137 => 55,  126 => 46,  97 => 36,  110 => 26,  170 => 48,  167 => 47,  153 => 46,  146 => 43,  114 => 30,  104 => 26,  81 => 19,  118 => 44,  113 => 43,  77 => 33,  65 => 11,  23 => 3,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 329,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 40,  132 => 51,  128 => 35,  107 => 40,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 66,  135 => 53,  119 => 31,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 12,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 77,  156 => 66,  151 => 63,  142 => 41,  138 => 54,  136 => 38,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 21,  49 => 7,  38 => 12,  87 => 32,  93 => 28,  88 => 6,  78 => 18,  46 => 34,  44 => 11,  31 => 4,  26 => 6,  94 => 44,  89 => 30,  85 => 23,  75 => 24,  68 => 12,  56 => 18,  27 => 4,  21 => 2,  25 => 4,  28 => 3,  24 => 3,  19 => 1,  79 => 17,  72 => 16,  69 => 25,  47 => 11,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 56,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 28,  101 => 25,  98 => 34,  96 => 30,  83 => 31,  74 => 17,  66 => 24,  55 => 38,  52 => 13,  50 => 18,  43 => 5,  41 => 10,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 52,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 44,  147 => 58,  144 => 49,  141 => 65,  133 => 55,  130 => 41,  125 => 34,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 34,  92 => 28,  86 => 30,  82 => 22,  80 => 19,  73 => 19,  64 => 21,  60 => 10,  57 => 20,  54 => 19,  51 => 37,  48 => 8,  45 => 17,  42 => 13,  39 => 7,  36 => 7,  33 => 6,  30 => 7,);
    }
}
