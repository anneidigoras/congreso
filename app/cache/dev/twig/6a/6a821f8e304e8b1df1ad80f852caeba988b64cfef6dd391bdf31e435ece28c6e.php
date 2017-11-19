<?php

/* :default:layout.html.twig */
class __TwigTemplate_b68422589f8a02d627620d8c8951c1d77bd376aed4d8872967ef9999e330393a extends Twig_Template
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
        $__internal_127e2d91a9f8ba5351f8eefb7984470eaa9dc45187d79af7f67e2214708dbc8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_127e2d91a9f8ba5351f8eefb7984470eaa9dc45187d79af7f67e2214708dbc8b->enter($__internal_127e2d91a9f8ba5351f8eefb7984470eaa9dc45187d79af7f67e2214708dbc8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:layout.html.twig"));

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
        
        $__internal_127e2d91a9f8ba5351f8eefb7984470eaa9dc45187d79af7f67e2214708dbc8b->leave($__internal_127e2d91a9f8ba5351f8eefb7984470eaa9dc45187d79af7f67e2214708dbc8b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a76911668542fe3ac3f5eddf3f85d77ddbb10fac4fad3526c430e73b8f7037eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a76911668542fe3ac3f5eddf3f85d77ddbb10fac4fad3526c430e73b8f7037eb->enter($__internal_a76911668542fe3ac3f5eddf3f85d77ddbb10fac4fad3526c430e73b8f7037eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_a76911668542fe3ac3f5eddf3f85d77ddbb10fac4fad3526c430e73b8f7037eb->leave($__internal_a76911668542fe3ac3f5eddf3f85d77ddbb10fac4fad3526c430e73b8f7037eb_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_488b5f1bb16372e069f0ed69a74b149d78c2c69583ed238b24b3b74fba4599fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_488b5f1bb16372e069f0ed69a74b149d78c2c69583ed238b24b3b74fba4599fb->enter($__internal_488b5f1bb16372e069f0ed69a74b149d78c2c69583ed238b24b3b74fba4599fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_488b5f1bb16372e069f0ed69a74b149d78c2c69583ed238b24b3b74fba4599fb->leave($__internal_488b5f1bb16372e069f0ed69a74b149d78c2c69583ed238b24b3b74fba4599fb_prof);

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
