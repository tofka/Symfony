<?php

/* @WebProfiler/Profiler/toolbar_item.html.twig */
class __TwigTemplate_864b1774eb00c7af4b43a21d7967406e extends Twig_Template
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
        if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
            // line 2
            echo "    ";
            ob_start();
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "panel" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "html", null, true);
            echo "</a>
    ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 6
        echo "<div class=\"sf-toolbar-block\">
     <div class=\"sf-toolbar-icon\">";
        // line 7
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "")) : ("")), "html", null, true);
        echo "</div>
     <div class=\"sf-toolbar-info\">";
        // line 8
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  346 => 321,  343 => 320,  299 => 278,  24 => 3,  19 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  407 => 131,  402 => 130,  398 => 129,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  368 => 112,  365 => 111,  360 => 332,  337 => 103,  314 => 99,  294 => 90,  268 => 85,  264 => 84,  252 => 80,  247 => 78,  241 => 77,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  132 => 51,  128 => 49,  93 => 38,  71 => 17,  183 => 70,  160 => 61,  135 => 47,  126 => 45,  114 => 42,  78 => 21,  203 => 78,  189 => 71,  182 => 66,  176 => 64,  173 => 63,  154 => 54,  149 => 51,  144 => 53,  133 => 42,  95 => 39,  86 => 24,  48 => 8,  57 => 11,  51 => 10,  34 => 5,  31 => 4,  28 => 3,  353 => 121,  344 => 119,  332 => 116,  321 => 112,  318 => 111,  315 => 110,  309 => 97,  306 => 107,  300 => 105,  297 => 277,  291 => 102,  283 => 88,  278 => 86,  274 => 97,  263 => 95,  258 => 81,  224 => 71,  161 => 63,  136 => 48,  125 => 44,  122 => 43,  117 => 39,  112 => 35,  109 => 41,  104 => 32,  85 => 25,  75 => 23,  58 => 14,  49 => 14,  46 => 12,  44 => 10,  27 => 3,  91 => 33,  63 => 18,  385 => 160,  382 => 159,  374 => 116,  367 => 156,  363 => 126,  359 => 153,  357 => 123,  354 => 151,  351 => 120,  349 => 149,  339 => 146,  336 => 145,  330 => 141,  324 => 113,  322 => 101,  317 => 135,  311 => 131,  308 => 130,  303 => 106,  292 => 121,  289 => 120,  286 => 119,  284 => 118,  279 => 115,  277 => 114,  272 => 111,  270 => 110,  265 => 96,  261 => 105,  255 => 93,  249 => 100,  244 => 97,  242 => 96,  237 => 93,  231 => 83,  228 => 88,  225 => 87,  223 => 86,  218 => 83,  212 => 78,  206 => 77,  204 => 76,  199 => 67,  193 => 73,  190 => 76,  187 => 70,  180 => 63,  174 => 65,  171 => 61,  166 => 56,  159 => 53,  151 => 57,  148 => 46,  143 => 56,  140 => 55,  107 => 36,  103 => 37,  100 => 24,  97 => 23,  88 => 25,  82 => 22,  76 => 28,  61 => 23,  39 => 6,  36 => 7,  79 => 21,  72 => 27,  69 => 26,  54 => 10,  47 => 9,  42 => 11,  40 => 8,  37 => 10,  22 => 2,  246 => 32,  164 => 59,  157 => 56,  145 => 52,  139 => 50,  131 => 45,  120 => 40,  115 => 39,  111 => 37,  108 => 47,  106 => 33,  101 => 43,  98 => 31,  92 => 33,  83 => 35,  80 => 29,  74 => 14,  66 => 11,  60 => 13,  55 => 13,  52 => 12,  50 => 10,  41 => 8,  32 => 7,  29 => 3,  409 => 132,  400 => 180,  396 => 179,  393 => 126,  388 => 177,  386 => 176,  378 => 170,  376 => 158,  369 => 165,  362 => 110,  355 => 106,  348 => 322,  341 => 105,  334 => 145,  327 => 114,  312 => 98,  305 => 95,  298 => 91,  293 => 118,  288 => 101,  285 => 89,  276 => 113,  273 => 112,  271 => 111,  262 => 104,  259 => 103,  251 => 101,  248 => 96,  243 => 92,  240 => 92,  235 => 74,  229 => 73,  221 => 85,  219 => 84,  209 => 82,  202 => 77,  195 => 71,  191 => 69,  188 => 68,  185 => 74,  177 => 65,  172 => 62,  168 => 66,  165 => 64,  162 => 62,  156 => 58,  153 => 56,  150 => 55,  147 => 58,  141 => 51,  134 => 47,  130 => 41,  123 => 35,  119 => 42,  116 => 36,  113 => 38,  105 => 34,  102 => 33,  99 => 30,  96 => 31,  90 => 37,  84 => 28,  81 => 23,  73 => 19,  70 => 20,  67 => 15,  64 => 24,  59 => 22,  53 => 12,  45 => 8,  43 => 9,  38 => 6,  35 => 5,  33 => 6,  30 => 3,);
    }
}
