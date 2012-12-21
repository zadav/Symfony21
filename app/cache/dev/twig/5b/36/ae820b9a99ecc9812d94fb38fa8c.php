<?php

/* AcmeDemoBundle:Secured:login.html.twig */
class __TwigTemplate_5b36ae820b9a99ecc9812d94fb38fa8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 29
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Login</h1>

    <p>
        Choose between two default users: <em>user/userpass</em> <small>(ROLE_USER)</small> or <em>admin/adminpass</em> <small>(ROLE_ADMIN)</small>
    </p>

    ";
        // line 10
        if ($this->getContext($context, "error")) {
            // line 11
            echo "        <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
            echo "</div>
    ";
        }
        // line 13
        echo "
    <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_security_check"), "html", null, true);
        echo "\" method=\"post\" id=\"login\">
        <div>
            <label for=\"username\">Username</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" />
        </div>

        <div>
            <label for=\"password\">Password</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />
        </div>

        <input type=\"submit\" class=\"symfony-button-grey\" value=\"LOGIN\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  140 => 39,  124 => 30,  99 => 25,  49 => 13,  90 => 25,  110 => 34,  107 => 33,  97 => 45,  86 => 39,  23 => 1,  77 => 27,  62 => 17,  40 => 6,  56 => 17,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  109 => 5,  103 => 26,  82 => 37,  65 => 23,  38 => 6,  158 => 58,  150 => 55,  144 => 50,  142 => 50,  129 => 45,  125 => 44,  117 => 27,  112 => 42,  87 => 28,  67 => 24,  61 => 22,  47 => 11,  105 => 24,  93 => 20,  76 => 22,  72 => 21,  68 => 24,  27 => 4,  91 => 6,  84 => 45,  94 => 44,  88 => 41,  79 => 23,  59 => 13,  21 => 2,  44 => 12,  31 => 3,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 53,  132 => 48,  127 => 49,  121 => 30,  118 => 29,  114 => 45,  104 => 36,  100 => 9,  78 => 24,  75 => 23,  71 => 20,  58 => 17,  34 => 11,  26 => 9,  24 => 4,  25 => 29,  19 => 2,  70 => 33,  63 => 23,  46 => 8,  22 => 4,  163 => 63,  155 => 50,  152 => 49,  149 => 51,  145 => 42,  139 => 45,  131 => 34,  123 => 33,  120 => 28,  115 => 28,  106 => 35,  101 => 33,  96 => 21,  83 => 18,  80 => 28,  74 => 22,  66 => 15,  55 => 13,  52 => 14,  50 => 10,  43 => 11,  41 => 10,  37 => 5,  35 => 5,  32 => 6,  29 => 5,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 54,  151 => 52,  143 => 40,  138 => 38,  136 => 50,  133 => 31,  130 => 30,  122 => 48,  119 => 47,  116 => 35,  111 => 38,  108 => 29,  102 => 47,  98 => 34,  95 => 33,  92 => 43,  89 => 19,  85 => 24,  81 => 25,  73 => 18,  64 => 30,  60 => 17,  57 => 12,  54 => 10,  51 => 17,  48 => 9,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
