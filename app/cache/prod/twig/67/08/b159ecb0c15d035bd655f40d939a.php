<?php

/* BloggerBlogBundle:Page:contact.html.twig */
class __TwigTemplate_6708b159ecb0c15d035bd655f40d939a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BloggerBlogBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Contact";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <header>
        <h1>Contact symblog</h1>
    </header>
\t";
        // line 10
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "hasFlash", array(0 => "blogger-notice"), "method")) {
            // line 11
            echo "\t    <div class=\"blogger-notice\">
\t        ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flash", array(0 => "blogger-notice"), "method"), "html", null, true);
            echo "
\t    </div>
\t";
        }
        // line 15
        echo "    <p>Want to contact symblog?</p>

    <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_contact"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " class=\"blogger\">
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name"), 'row');
        echo "
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'row');
        echo "
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "subject"), 'row');
        echo "
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "body"), 'row');
        echo "

        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

        <input type=\"submit\" value=\"Submit\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 22,  74 => 11,  58 => 17,  23 => 3,  150 => 34,  134 => 26,  113 => 12,  100 => 5,  81 => 23,  65 => 34,  34 => 5,  37 => 6,  76 => 24,  53 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 21,  111 => 37,  107 => 36,  71 => 22,  38 => 7,  177 => 65,  165 => 64,  160 => 61,  139 => 50,  135 => 47,  126 => 24,  114 => 42,  84 => 28,  70 => 20,  67 => 15,  61 => 33,  47 => 11,  94 => 22,  89 => 20,  85 => 25,  79 => 42,  75 => 40,  68 => 14,  56 => 30,  50 => 12,  29 => 4,  87 => 20,  72 => 16,  55 => 15,  21 => 2,  26 => 6,  98 => 31,  93 => 52,  88 => 49,  78 => 21,  46 => 7,  27 => 4,  40 => 8,  44 => 12,  35 => 6,  31 => 5,  43 => 10,  41 => 4,  28 => 3,  196 => 90,  183 => 70,  171 => 47,  166 => 71,  163 => 42,  158 => 39,  156 => 58,  151 => 57,  142 => 33,  138 => 57,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 31,  69 => 20,  66 => 15,  62 => 23,  49 => 6,  24 => 3,  32 => 5,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 52,  173 => 74,  168 => 46,  164 => 59,  162 => 62,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 25,  125 => 44,  122 => 22,  116 => 36,  112 => 42,  109 => 10,  106 => 9,  103 => 37,  99 => 30,  95 => 53,  92 => 33,  86 => 25,  82 => 22,  80 => 26,  73 => 21,  64 => 18,  60 => 14,  57 => 11,  54 => 15,  51 => 14,  48 => 12,  45 => 11,  42 => 9,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
