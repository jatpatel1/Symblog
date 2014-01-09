<?php

/* BloggerBlogBundle:Page:contact.html.twig */
class __TwigTemplate_3ff420d888bad62ff97d8b3717737e39c54be08f8479816294e0551fc2bb8b60 extends Twig_Template
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

";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "blogger-notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "<div class=\"blogger-notice\">
";
            // line 13
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
</div> 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    <p>Want to contact symblog?</p>

    <form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_contact");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"blogger\">
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "

        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'row');
        echo "
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'row');
        echo "
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "subject"), 'row');
        echo "
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "body"), 'row');
        echo "

        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
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
        return array (  84 => 24,  65 => 19,  172 => 48,  127 => 25,  114 => 13,  110 => 11,  76 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 53,  169 => 47,  140 => 55,  132 => 51,  128 => 49,  107 => 10,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 40,  143 => 34,  135 => 27,  119 => 42,  102 => 32,  71 => 20,  67 => 15,  63 => 15,  59 => 14,  94 => 53,  89 => 50,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 47,  21 => 2,  28 => 1,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 35,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 34,  49 => 19,  38 => 7,  25 => 3,  31 => 5,  26 => 6,  24 => 3,  19 => 2,  93 => 27,  88 => 25,  78 => 21,  46 => 7,  44 => 11,  27 => 4,  79 => 18,  72 => 16,  69 => 25,  47 => 10,  40 => 7,  37 => 6,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 26,  123 => 23,  120 => 22,  115 => 43,  111 => 37,  108 => 36,  101 => 6,  98 => 31,  96 => 54,  83 => 25,  74 => 40,  66 => 35,  55 => 22,  52 => 21,  50 => 11,  43 => 8,  41 => 7,  35 => 6,  32 => 5,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 43,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 44,  80 => 23,  73 => 19,  64 => 17,  60 => 16,  57 => 31,  54 => 10,  51 => 13,  48 => 12,  45 => 17,  42 => 10,  39 => 9,  36 => 7,  33 => 4,  30 => 7,);
    }
}
