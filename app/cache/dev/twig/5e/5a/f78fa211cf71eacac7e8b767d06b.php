<?php

/* DavidBlogBundle:Blog:menu.html.twig */
class __TwigTemplate_5e5af78fa211cf71eacac7e8b767d06b extends Twig_Template
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
        // line 2
        echo "
";
        // line 4
        echo "
<h3>Les derniers articles</h3>

<ul class=\"nav nav-pills nav-stacked\">
    ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "liste_articles"));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 9
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("davidblog_voir", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "titre"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 11
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "DavidBlogBundle:Blog:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 25,  110 => 34,  107 => 33,  97 => 26,  86 => 50,  23 => 1,  77 => 31,  62 => 17,  40 => 7,  56 => 17,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  109 => 41,  103 => 34,  82 => 22,  65 => 15,  38 => 6,  158 => 58,  150 => 55,  144 => 50,  142 => 50,  129 => 45,  125 => 44,  117 => 46,  112 => 42,  87 => 28,  67 => 24,  61 => 14,  47 => 11,  105 => 24,  93 => 20,  76 => 22,  72 => 35,  68 => 12,  27 => 4,  91 => 6,  84 => 45,  94 => 39,  88 => 27,  79 => 23,  59 => 22,  21 => 2,  44 => 12,  31 => 5,  28 => 8,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 53,  132 => 48,  127 => 49,  121 => 45,  118 => 44,  114 => 45,  104 => 36,  100 => 9,  78 => 24,  75 => 23,  71 => 20,  58 => 12,  34 => 11,  26 => 6,  24 => 4,  25 => 3,  19 => 2,  70 => 33,  63 => 23,  46 => 10,  22 => 4,  163 => 63,  155 => 50,  152 => 49,  149 => 51,  145 => 46,  139 => 45,  131 => 42,  123 => 47,  120 => 46,  115 => 39,  106 => 35,  101 => 33,  96 => 21,  83 => 18,  80 => 20,  74 => 22,  66 => 15,  55 => 13,  52 => 12,  50 => 10,  43 => 11,  41 => 7,  37 => 11,  35 => 8,  32 => 9,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 54,  151 => 52,  143 => 54,  138 => 47,  136 => 50,  133 => 43,  130 => 47,  122 => 48,  119 => 47,  116 => 35,  111 => 38,  108 => 29,  102 => 30,  98 => 34,  95 => 33,  92 => 28,  89 => 19,  85 => 24,  81 => 25,  73 => 18,  64 => 30,  60 => 23,  57 => 16,  54 => 10,  51 => 17,  48 => 11,  45 => 14,  42 => 8,  39 => 7,  36 => 5,  33 => 4,  30 => 6,);
    }
}
