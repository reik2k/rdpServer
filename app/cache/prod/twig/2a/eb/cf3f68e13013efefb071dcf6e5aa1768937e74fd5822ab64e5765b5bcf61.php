<?php

/* :default:index.html.twig */
class __TwigTemplate_2aebcf3f68e13013efefb071dcf6e5aa1768937e74fd5822ab64e5765b5bcf61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"centrar welcome\">
    \t<h1 class=\"h\">Bienvenido</h1>
    \t<div class=\"list-group\">
\t\t  <a class=\"list-group-item\" href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">
\t\t  \t<i class=\"fa fa-home fa-fw\"></i>&nbsp; Home</a>
\t\t  <!--a class=\"list-group-item\" href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("listaBoda");
        echo "\">
\t\t  <i class=\"fa fa-bell fa-fw\"></i>&nbsp; Wedding List</a-->
\t\t  ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 12
            echo "\t\t  <a class=\"list-group-item\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("goin", array("name" => "name", "id" => "surname")), "html", null, true);
            echo "\">
\t\t  \t<i class=\"fa fa-bars fa-fw\"></i>&nbsp; Go in!</a>
\t\t  ";
        }
        // line 15
        echo "\t\t  <!--a class=\"list-group-item\" href=\"/file.iso\"><i class=\"fa fa-cog fa-fw\"></i>&nbsp; Descarga</a-->
\t\t</div>
\t\t<a class=\"btn btn-danger\" href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("_logout");
        echo "\">
\t\t\t<i class=\"fa fa-sign-out fa-lg\"></i> log out!</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 17,  63 => 15,  56 => 12,  54 => 11,  49 => 9,  44 => 7,  39 => 4,  36 => 3,  11 => 1,);
    }
}
