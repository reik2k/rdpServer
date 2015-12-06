<?php

/* base.html.twig */
class __TwigTemplate_c3b1ec671de3375ced3c2e356d14d7782d70be4076b1185abba0f39feec3428b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascript' => array($this, 'block_javascript'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 17
        echo "        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("faviicon.ico"), "html", null, true);
        echo "\" />
        
        ";
        // line 20
        $this->displayBlock('javascript', $context, $blocks);
        // line 25
        echo "    </head>
    <body class=\"body\">
    \t<div class=\"container-fluid\">
        ";
        // line 28
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "\t\t</div>

    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ((array_key_exists("title", $context)) ? (_twig_default_filter((isset($context["title"]) ? $context["title"] : null), "el Rey del Pollo Server")) : ("el Rey del Pollo Server")), "html", null, true);
    }

    // line 7
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 8
        echo "\t\t\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/css/app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t\t\t<link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\"/>
\t\t
\t\t\t<!-- Latest compiled and minified CSS -->
\t\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css\"/>
\t\t
\t\t\t<!-- Optional theme -->
\t\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css\"/>
        ";
    }

    // line 20
    public function block_javascript($context, array $blocks = array())
    {
        // line 21
        echo "        \t<script src=\"//code.jquery.com/jquery-1.11.2.min.js\"></script>
        \t<!-- Latest compiled and minified JavaScript -->
\t\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js\"></script>
        ";
    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        // line 29
        echo "        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 29,  94 => 28,  87 => 21,  84 => 20,  70 => 8,  67 => 7,  61 => 6,  53 => 30,  51 => 28,  46 => 25,  44 => 20,  39 => 18,  36 => 17,  34 => 7,  30 => 6,  23 => 1,);
    }
}
