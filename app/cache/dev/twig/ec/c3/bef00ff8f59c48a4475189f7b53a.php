<?php

/* ::layout.html.twig */
class __TwigTemplate_ecc3bef00ff8f59c48a4475189f7b53a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

\t\t<title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

\t\t";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "\t</head>

\t<body>
\t\t<div class=\"container\">
\t\t\t<div id=\"header\" class=\"hero-unit\">
\t\t\t\t<h1>Test</h1>
\t\t\t\t<p>Ce projet est propulsé par Symfony2, et construit grâce au tutoriel du siteduzero.</p>
\t\t\t\t<p><a class=\"btn btn-primary btn-large\" href=\"http://www.siteduzero.com/tutoriel-3-517569-symfony2.html\">
\t\t\t\t\tLire le tutoriel &raquo;
\t\t\t\t</a></p>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div id=\"menu\" class=\"span3\">
\t\t\t\t\t<h3>Le blog</h3>
\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t<li><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("davidblog_accueil"), "html", null, true);
        echo "\">Accueil du blog</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("davidblog_ajouter"), "html", null, true);
        echo "\">Ajouter un article</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t";
        // line 30
        echo $this->env->getExtension('actions')->renderAction("DavidBlogBundle:Blog:menu", array("nombre" => 3), array());
        echo "                 
\t\t\t\t</div>\t
\t\t\t\t<div id=\"content\" class=\"span9\">
\t\t\t\t\t";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t<hr>

\t\t\t<footer>
\t\t\t\t<p>The sky's the limit &copy; 2012 and beyond.</p>
\t\t\t</footer>
\t\t</div>

\t";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 50
        echo "\t</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "David";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "\t\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t\t";
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        // line 34
        echo "\t\t\t\t\t";
    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        // line 46
        echo "\t\t";
        // line 47
        echo "\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
\t";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 34,  107 => 33,  97 => 8,  86 => 50,  23 => 1,  77 => 24,  62 => 17,  40 => 7,  56 => 17,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  109 => 41,  103 => 34,  82 => 22,  65 => 16,  38 => 6,  158 => 58,  150 => 55,  144 => 50,  142 => 50,  129 => 45,  125 => 44,  117 => 46,  112 => 42,  87 => 28,  67 => 19,  61 => 16,  47 => 9,  105 => 24,  93 => 20,  76 => 22,  72 => 35,  68 => 12,  27 => 4,  91 => 6,  84 => 45,  94 => 39,  88 => 27,  79 => 23,  59 => 28,  21 => 2,  44 => 12,  31 => 5,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 53,  132 => 48,  127 => 49,  121 => 45,  118 => 44,  114 => 45,  104 => 36,  100 => 9,  78 => 24,  75 => 23,  71 => 20,  58 => 12,  34 => 11,  26 => 6,  24 => 3,  25 => 3,  19 => 1,  70 => 33,  63 => 24,  46 => 10,  22 => 2,  163 => 63,  155 => 50,  152 => 49,  149 => 51,  145 => 46,  139 => 45,  131 => 42,  123 => 47,  120 => 46,  115 => 39,  106 => 35,  101 => 33,  96 => 21,  83 => 18,  80 => 24,  74 => 22,  66 => 15,  55 => 27,  52 => 15,  50 => 10,  43 => 8,  41 => 7,  37 => 11,  35 => 8,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 54,  151 => 52,  143 => 54,  138 => 47,  136 => 50,  133 => 43,  130 => 47,  122 => 48,  119 => 47,  116 => 35,  111 => 38,  108 => 37,  102 => 30,  98 => 34,  95 => 33,  92 => 28,  89 => 19,  85 => 23,  81 => 25,  73 => 19,  64 => 30,  60 => 23,  57 => 16,  54 => 10,  51 => 14,  48 => 11,  45 => 8,  42 => 8,  39 => 7,  36 => 5,  33 => 4,  30 => 6,);
    }
}
