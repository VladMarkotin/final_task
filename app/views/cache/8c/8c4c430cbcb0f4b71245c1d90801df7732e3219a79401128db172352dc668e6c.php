<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index.html */
class __TwigTemplate_004f24eb3b454e143457764d2af4a54700f516cbe3bcf22a6ff0c2a6d32de3e8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Document</title>
</head>
<body>
    <form method=\"post\" id=\"form\">
        <input type=\"text\" id=\"name\" name=\"name\"><br/>
        <input type=\"number\" name=\"price\" id=\"price\"><br/>
        <textarea name=\"details\" id=\"details\"></textarea><br/>
        <button type=\"button\" id=\"send\">Save Product Info</button>
    </form>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
    <script src=\"app/views/scripts/script.js\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "index.html", "E:\\OpenServer\\OSPanel\\domains\\my-itschool.local\\final.local\\app\\views\\index.html");
    }
}
