<?php

/* BloggerBlogBundle:Comment:form.html.twig */
class __TwigTemplate_682d93b5d827b4287ff62dc9ca160e86d5e0efc786928d710f0a48d6bdec7cbf extends Twig_Template
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
<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_comment_create", array("blog_id" => $this->getAttribute($this->getAttribute($this->getContext($context, "comment"), "blog"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"blogger\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
    <p>
        <input type=\"submit\" value=\"Submit\">
    </p>
</form>";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Comment:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 11,  40 => 4,  22 => 3,  19 => 2,  177 => 53,  172 => 48,  169 => 47,  164 => 43,  159 => 40,  151 => 35,  143 => 34,  135 => 27,  131 => 26,  127 => 25,  123 => 23,  120 => 22,  114 => 13,  110 => 11,  107 => 10,  101 => 6,  96 => 54,  94 => 53,  89 => 50,  87 => 47,  82 => 44,  80 => 43,  74 => 40,  66 => 35,  62 => 34,  57 => 8,  55 => 22,  44 => 15,  28 => 4,  50 => 11,  47 => 10,  41 => 7,  37 => 6,  32 => 5,  78 => 25,  76 => 41,  72 => 22,  70 => 21,  60 => 14,  53 => 12,  48 => 6,  42 => 10,  38 => 7,  35 => 6,  29 => 4,);
    }
}
