<?php

/* BloggerBlogBundle:Page:sidebar.html.twig */
class __TwigTemplate_a1043fccb952583ce23a7cd97b3b25c040c7f9d2251e73c04863acc69fc764a6 extends Twig_Template
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
<section class=\"section\">
    <header>
        <h3>Tag Cloud</h3>
    </header>
    <p class=\"tags\">
        ";
        // line 8
        if (isset($context["tags"])) { $_tags_ = $context["tags"]; } else { $_tags_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_tags_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["tag"] => $context["weight"]) {
            // line 9
            echo "            <span class=\"weight-";
            if (isset($context["weight"])) { $_weight_ = $context["weight"]; } else { $_weight_ = null; }
            echo twig_escape_filter($this->env, $_weight_, "html", null, true);
            echo "\">";
            if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
            echo twig_escape_filter($this->env, $_tag_, "html", null, true);
            echo "</span>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 11
            echo "            <p>There are no tags</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tag'], $context['weight'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </p>
</section>

<section class=\"section\">
    <header>
        <h3>Latest Comments</h3>
    </header>
    ";
        // line 20
        if (isset($context["latestComments"])) { $_latestComments_ = $context["latestComments"]; } else { $_latestComments_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_latestComments_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 21
            echo "        <article class=\"comment\">
            <header>
                <p class=\"small\"><span class=\"highlight\">";
            // line 23
            if (isset($context["comment"])) { $_comment_ = $context["comment"]; } else { $_comment_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_comment_, "user"), "html", null, true);
            echo "</span> commented on
                    <a href=\"";
            // line 24
            if (isset($context["comment"])) { $_comment_ = $context["comment"]; } else { $_comment_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($this->getAttribute($_comment_, "blog"), "id"), "slug" => $this->getAttribute($this->getAttribute($_comment_, "blog"), "slug"))), "html", null, true);
            echo "#comment-";
            if (isset($context["comment"])) { $_comment_ = $context["comment"]; } else { $_comment_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_comment_, "id"), "html", null, true);
            echo "\">
                        ";
            // line 25
            if (isset($context["comment"])) { $_comment_ = $context["comment"]; } else { $_comment_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_comment_, "blog"), "title"), "html", null, true);
            echo "
                    </a>
                    [<em><time datetime=\"";
            // line 27
            if (isset($context["comment"])) { $_comment_ = $context["comment"]; } else { $_comment_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_comment_, "created"), "c"), "html", null, true);
            echo "\">";
            if (isset($context["comment"])) { $_comment_ = $context["comment"]; } else { $_comment_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('blogger_blog_extension')->createdAgo($this->getAttribute($_comment_, "created")), "html", null, true);
            echo "</time></em>]
                </p>
            </header>
            <p>";
            // line 30
            if (isset($context["comment"])) { $_comment_ = $context["comment"]; } else { $_comment_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_comment_, "comment"), "html", null, true);
            echo "</p>
            </p>
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "        <p>There are no recent comments</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 20,  79 => 19,  95 => 21,  177 => 53,  172 => 48,  169 => 47,  164 => 43,  159 => 40,  151 => 35,  135 => 27,  123 => 23,  94 => 53,  87 => 20,  82 => 44,  74 => 20,  42 => 10,  54 => 14,  31 => 5,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 34,  138 => 44,  134 => 43,  131 => 26,  122 => 37,  117 => 36,  108 => 31,  102 => 28,  92 => 25,  84 => 25,  72 => 15,  69 => 17,  51 => 13,  48 => 7,  35 => 6,  29 => 4,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 51,  127 => 25,  112 => 32,  96 => 54,  76 => 24,  71 => 23,  114 => 13,  109 => 31,  106 => 20,  101 => 27,  85 => 23,  77 => 12,  67 => 21,  28 => 4,  110 => 34,  89 => 50,  65 => 14,  63 => 13,  58 => 10,  34 => 5,  39 => 7,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  173 => 58,  162 => 58,  158 => 56,  155 => 55,  152 => 55,  142 => 52,  136 => 44,  133 => 43,  130 => 42,  120 => 22,  105 => 25,  100 => 30,  75 => 24,  60 => 12,  53 => 19,  55 => 22,  43 => 7,  26 => 6,  57 => 31,  50 => 9,  47 => 7,  38 => 6,  25 => 3,  24 => 4,  19 => 2,  98 => 40,  88 => 17,  80 => 22,  78 => 25,  46 => 12,  44 => 11,  40 => 6,  36 => 6,  32 => 5,  27 => 8,  22 => 2,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 37,  129 => 36,  124 => 35,  121 => 24,  118 => 36,  115 => 39,  111 => 32,  107 => 10,  104 => 28,  97 => 24,  93 => 18,  90 => 27,  81 => 14,  70 => 18,  66 => 14,  62 => 16,  59 => 15,  56 => 12,  52 => 13,  49 => 12,  45 => 11,  41 => 7,  37 => 5,  33 => 9,  30 => 3,);
    }
}
