<?php

/* DavidBlogBundle:Blog:modifier.html.twig */
class __TwigTemplate_a8907f649dfb482d82e461133646f890 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DavidBlogBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'davidblog_body' => array($this, 'block_davidblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DavidBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\tModifier un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_davidblog_body($context, array $blocks = array())
    {
        // line 8
        echo "\t<h2>Modifier un article</h2>

\t";
        // line 10
        $this->env->loadTemplate("DavidBlogBundle:Blog:formulaire.html.twig")->display($context);
        // line 11
        echo "
\t<p>
\t\tVous éditez un article déjà existant,
\t\tne le changez pas trop pour éviter
\t\taux membres de ne pas comprendre
\t\tce qu'il se passe.
\t</p>

\t<p>
\t\t<a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("davidblog_voir", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
        echo "\" class=\"btn\">
\t\t\t<i class=\"icon-chevron-left\"></i>
\t\t\tRetour à l'article
\t\t</a>
\t</p>
";
    }

    public function getTemplateName()
    {
        return "DavidBlogBundle:Blog:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 25,  110 => 34,  107 => 33,  97 => 26,  86 => 50,  23 => 1,  77 => 31,  62 => 17,  40 => 7,  56 => 17,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  109 => 41,  103 => 34,  82 => 22,  65 => 15,  38 => 6,  158 => 58,  150 => 55,  144 => 50,  142 => 50,  129 => 45,  125 => 44,  117 => 46,  112 => 42,  87 => 28,  67 => 24,  61 => 14,  47 => 11,  105 => 24,  93 => 20,  76 => 22,  72 => 35,  68 => 12,  27 => 4,  91 => 6,  84 => 45,  94 => 39,  88 => 27,  79 => 23,  59 => 20,  21 => 2,  44 => 12,  31 => 5,  28 => 8,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 53,  132 => 48,  127 => 49,  121 => 45,  118 => 44,  114 => 45,  104 => 36,  100 => 9,  78 => 24,  75 => 23,  71 => 20,  58 => 12,  34 => 11,  26 => 6,  24 => 4,  25 => 3,  19 => 2,  70 => 33,  63 => 23,  46 => 10,  22 => 4,  163 => 63,  155 => 50,  152 => 49,  149 => 51,  145 => 46,  139 => 45,  131 => 42,  123 => 47,  120 => 46,  115 => 39,  106 => 35,  101 => 33,  96 => 21,  83 => 18,  80 => 20,  74 => 22,  66 => 15,  55 => 13,  52 => 12,  50 => 10,  43 => 11,  41 => 7,  37 => 11,  35 => 8,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 54,  151 => 52,  143 => 54,  138 => 47,  136 => 50,  133 => 43,  130 => 47,  122 => 48,  119 => 47,  116 => 35,  111 => 38,  108 => 29,  102 => 30,  98 => 34,  95 => 33,  92 => 28,  89 => 19,  85 => 24,  81 => 25,  73 => 18,  64 => 30,  60 => 23,  57 => 16,  54 => 10,  51 => 17,  48 => 11,  45 => 14,  42 => 8,  39 => 7,  36 => 5,  33 => 4,  30 => 6,);
    }
}
