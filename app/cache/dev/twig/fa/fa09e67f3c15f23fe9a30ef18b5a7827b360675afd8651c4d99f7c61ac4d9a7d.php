<?php

/* :default:layout.html.twig */
class __TwigTemplate_2ce468a970c60ac4087e72a9447fa5bc9792429fbbe194dde39b5c0da8477368 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74caa6158111c0f296d7ff97c8147010dcedf3ed0717ecb88fd1494003b4cd6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74caa6158111c0f296d7ff97c8147010dcedf3ed0717ecb88fd1494003b4cd6a->enter($__internal_74caa6158111c0f296d7ff97c8147010dcedf3ed0717ecb88fd1494003b4cd6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:layout.html.twig"));

        // line 2
        echo "<!doctype html>
<html>
\t<head>
\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t</head>
\t<body>
\t\t";
        // line 8
        $this->displayBlock('body', $context, $blocks);
        // line 9
        echo "\t</body>
</html>
";
        
        $__internal_74caa6158111c0f296d7ff97c8147010dcedf3ed0717ecb88fd1494003b4cd6a->leave($__internal_74caa6158111c0f296d7ff97c8147010dcedf3ed0717ecb88fd1494003b4cd6a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4c32fb02b3376842d3c00e263ab6a5d12f879a36898c2ce1e4f00267822f1af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4c32fb02b3376842d3c00e263ab6a5d12f879a36898c2ce1e4f00267822f1af->enter($__internal_b4c32fb02b3376842d3c00e263ab6a5d12f879a36898c2ce1e4f00267822f1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_b4c32fb02b3376842d3c00e263ab6a5d12f879a36898c2ce1e4f00267822f1af->leave($__internal_b4c32fb02b3376842d3c00e263ab6a5d12f879a36898c2ce1e4f00267822f1af_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_bddee240b417b2dee345f721372ac03ac742c64babd65bf98807f3c8d81ac455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bddee240b417b2dee345f721372ac03ac742c64babd65bf98807f3c8d81ac455->enter($__internal_bddee240b417b2dee345f721372ac03ac742c64babd65bf98807f3c8d81ac455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bddee240b417b2dee345f721372ac03ac742c64babd65bf98807f3c8d81ac455->leave($__internal_bddee240b417b2dee345f721372ac03ac742c64babd65bf98807f3c8d81ac455_prof);

    }

    public function getTemplateName()
    {
        return ":default:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  58 => 8,  46 => 5,  37 => 9,  35 => 8,  29 => 5,  24 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/layout.html.twig #}
<!doctype html>
<html>
\t<head>
\t\t<title>{% block title %}Default title{% endblock %}</title>
\t</head>
\t<body>
\t\t{% block body %}{% endblock %}
\t</body>
</html>
", ":default:layout.html.twig", "C:\\xampp\\htdocs\\congreso\\app/Resources\\views/default/layout.html.twig");
    }
}
