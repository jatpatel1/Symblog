<?php

/* BloggerBlogBundle:Comment:index.html.twig */
class __TwigTemplate_961cba058c42ded4651a52f54842a705adb630e960549e8d78f55535d08c3f82 extends Twig_Template
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
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "comments"));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 4
            echo "    <article class=\"comment ";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($this->getContext($context, "loop"), "index0")), "html", null, true);
            echo "\" id=\"comment-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comment"), "id"), "html", null, true);
            echo "\">
        <header>
            <p><span class=\"highlight\">";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comment"), "user"), "html", null, true);
            echo "</span> commented <time datetime=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "comment"), "created"), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('blogger_blog_extension')->createdAgo($this->getAttribute($this->getContext($context, "comment"), "created")), "html", null, true);
            echo "</time></p>
        </header>
        <p>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comment"), "comment"), "html", null, true);
            echo "</p>
    </article>
";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 11
            echo "    <p>There are no comments for this post. Be the first to comment...</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Comment:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 11,  40 => 4,  22 => 3,  19 => 2,  177 => 53,  172 => 48,  169 => 47,  164 => 43,  159 => 40,  151 => 35,  143 => 34,  135 => 27,  131 => 26,  127 => 25,  123 => 23,  120 => 22,  114 => 13,  110 => 11,  107 => 10,  101 => 6,  96 => 54,  94 => 53,  89 => 50,  87 => 47,  82 => 44,  80 => 43,  74 => 40,  66 => 35,  62 => 34,  57 => 8,  55 => 22,  44 => 15,  28 => 1,  50 => 11,  47 => 10,  41 => 7,  37 => 6,  32 => 5,  78 => 25,  76 => 41,  72 => 22,  70 => 21,  60 => 14,  53 => 12,  48 => 6,  42 => 10,  38 => 7,  35 => 6,  29 => 4,);
    }
}
