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
        $__internal_ff62eb300dbbe7077e0d9e5095545341f44c800fbf1d30872539aa175d75657b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff62eb300dbbe7077e0d9e5095545341f44c800fbf1d30872539aa175d75657b->enter($__internal_ff62eb300dbbe7077e0d9e5095545341f44c800fbf1d30872539aa175d75657b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:layout.html.twig"));

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
        
        $__internal_ff62eb300dbbe7077e0d9e5095545341f44c800fbf1d30872539aa175d75657b->leave($__internal_ff62eb300dbbe7077e0d9e5095545341f44c800fbf1d30872539aa175d75657b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a92c267c54e2983c3f88f4e712ebb69760705aee8568232d54c807a9fc70304e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a92c267c54e2983c3f88f4e712ebb69760705aee8568232d54c807a9fc70304e->enter($__internal_a92c267c54e2983c3f88f4e712ebb69760705aee8568232d54c807a9fc70304e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_a92c267c54e2983c3f88f4e712ebb69760705aee8568232d54c807a9fc70304e->leave($__internal_a92c267c54e2983c3f88f4e712ebb69760705aee8568232d54c807a9fc70304e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fd425dd2534e006d88f7c0d892b2d1e155869c899bad327087bc7f17f5d418c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fd425dd2534e006d88f7c0d892b2d1e155869c899bad327087bc7f17f5d418c->enter($__internal_6fd425dd2534e006d88f7c0d892b2d1e155869c899bad327087bc7f17f5d418c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6fd425dd2534e006d88f7c0d892b2d1e155869c899bad327087bc7f17f5d418c->leave($__internal_6fd425dd2534e006d88f7c0d892b2d1e155869c899bad327087bc7f17f5d418c_prof);

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
