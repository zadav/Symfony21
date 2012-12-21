<?php

/* DavidBlogBundle::layout.html.twig */
class __TwigTemplate_c8363f9bb8be74c54f445e6649b8d37e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'davidblog_body' => array($this, 'block_davidblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\tBlog - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
\t";
        // line 10
        echo "\t<h1>Blog</h1>

\t<hr>

\t";
        // line 15
        echo "\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "getFlashes", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["flash"]) {
            // line 16
            echo "\t\t<div class=\"alert alert-";
            echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
            echo "\">
\t\t\t";
            // line 17
            echo twig_escape_filter($this->env, $this->getContext($context, "flash"), "html", null, true);
            echo "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 20
        echo "
\t";
        // line 22
        echo "\t";
        $this->displayBlock('davidblog_body', $context, $blocks);
        // line 24
        echo "
";
    }

    // line 22
    public function block_davidblog_body($context, array $blocks = array())
    {
        // line 23
        echo "\t";
    }

    public function getTemplateName()
    {
        return "DavidBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 24,  62 => 17,  40 => 7,  56 => 17,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  109 => 41,  103 => 34,  82 => 22,  65 => 16,  38 => 6,  158 => 58,  150 => 55,  144 => 50,  142 => 50,  129 => 45,  125 => 44,  117 => 42,  112 => 42,  87 => 28,  67 => 19,  61 => 16,  47 => 9,  105 => 24,  93 => 20,  76 => 22,  72 => 14,  68 => 12,  27 => 4,  91 => 20,  84 => 19,  94 => 39,  88 => 27,  79 => 23,  59 => 22,  21 => 2,  44 => 12,  31 => 5,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 53,  132 => 48,  127 => 49,  121 => 45,  118 => 44,  114 => 43,  104 => 36,  100 => 33,  78 => 24,  75 => 23,  71 => 20,  58 => 12,  34 => 11,  26 => 6,  24 => 3,  25 => 3,  19 => 1,  70 => 20,  63 => 24,  46 => 10,  22 => 2,  163 => 63,  155 => 50,  152 => 49,  149 => 51,  145 => 46,  139 => 45,  131 => 42,  123 => 47,  120 => 46,  115 => 39,  106 => 35,  101 => 33,  96 => 21,  83 => 18,  80 => 24,  74 => 22,  66 => 15,  55 => 15,  52 => 15,  50 => 10,  43 => 8,  41 => 7,  37 => 8,  35 => 5,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 54,  151 => 52,  143 => 54,  138 => 47,  136 => 50,  133 => 43,  130 => 47,  122 => 37,  119 => 36,  116 => 35,  111 => 38,  108 => 37,  102 => 30,  98 => 34,  95 => 33,  92 => 28,  89 => 19,  85 => 23,  81 => 25,  73 => 19,  64 => 17,  60 => 23,  57 => 16,  54 => 10,  51 => 14,  48 => 11,  45 => 8,  42 => 8,  39 => 7,  36 => 5,  33 => 4,  30 => 3,);
    }
}
