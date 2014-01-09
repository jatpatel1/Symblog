<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_5c36714bb27d5e7351d447e0f35946c9d0d57faa5d991fe64a3442caaf25f8d8 extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  660 => 464,  649 => 462,  634 => 456,  629 => 454,  625 => 453,  622 => 452,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  527 => 408,  522 => 406,  517 => 404,  202 => 94,  188 => 90,  170 => 84,  165 => 83,  153 => 77,  97 => 41,  70 => 21,  53 => 11,  90 => 42,  58 => 25,  77 => 25,  84 => 40,  65 => 19,  172 => 48,  127 => 60,  114 => 13,  110 => 22,  76 => 34,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 53,  169 => 47,  140 => 55,  132 => 51,  128 => 49,  107 => 10,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 40,  143 => 34,  135 => 62,  119 => 42,  102 => 17,  71 => 24,  67 => 23,  63 => 19,  59 => 16,  94 => 34,  89 => 50,  85 => 32,  75 => 17,  68 => 30,  56 => 11,  87 => 41,  21 => 2,  28 => 3,  201 => 92,  196 => 92,  183 => 82,  171 => 61,  166 => 71,  163 => 82,  158 => 80,  156 => 66,  151 => 35,  142 => 59,  138 => 54,  136 => 71,  121 => 46,  117 => 19,  105 => 18,  91 => 27,  62 => 27,  49 => 14,  38 => 7,  25 => 35,  31 => 4,  26 => 9,  24 => 3,  19 => 1,  93 => 27,  88 => 31,  78 => 26,  46 => 13,  44 => 10,  27 => 8,  79 => 18,  72 => 22,  69 => 25,  47 => 11,  40 => 6,  37 => 5,  22 => 3,  246 => 136,  157 => 56,  145 => 74,  139 => 63,  131 => 61,  123 => 61,  120 => 20,  115 => 43,  111 => 37,  108 => 19,  101 => 43,  98 => 45,  96 => 54,  83 => 21,  74 => 27,  66 => 35,  55 => 24,  52 => 10,  50 => 22,  43 => 7,  41 => 19,  35 => 6,  32 => 6,  29 => 3,  209 => 82,  203 => 78,  199 => 93,  193 => 73,  189 => 71,  187 => 84,  182 => 87,  176 => 86,  173 => 85,  168 => 72,  164 => 43,  162 => 57,  154 => 58,  149 => 51,  147 => 75,  144 => 49,  141 => 73,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 57,  112 => 42,  109 => 52,  106 => 51,  103 => 32,  99 => 34,  95 => 28,  92 => 43,  86 => 28,  82 => 28,  80 => 30,  73 => 33,  64 => 13,  60 => 14,  57 => 12,  54 => 10,  51 => 13,  48 => 9,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
