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
        $__internal_30396d30f8c69b86244360fb6c46e7529482c9dbb9a1919e7b7b447ecaf02114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30396d30f8c69b86244360fb6c46e7529482c9dbb9a1919e7b7b447ecaf02114->enter($__internal_30396d30f8c69b86244360fb6c46e7529482c9dbb9a1919e7b7b447ecaf02114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:layout.html.twig"));

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
        
        $__internal_30396d30f8c69b86244360fb6c46e7529482c9dbb9a1919e7b7b447ecaf02114->leave($__internal_30396d30f8c69b86244360fb6c46e7529482c9dbb9a1919e7b7b447ecaf02114_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c1a2ee4ab0ffde867aa9cc95fd2cd8ff030e3a8738fe996b8e8d5c22ab1780f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c1a2ee4ab0ffde867aa9cc95fd2cd8ff030e3a8738fe996b8e8d5c22ab1780f->enter($__internal_7c1a2ee4ab0ffde867aa9cc95fd2cd8ff030e3a8738fe996b8e8d5c22ab1780f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_7c1a2ee4ab0ffde867aa9cc95fd2cd8ff030e3a8738fe996b8e8d5c22ab1780f->leave($__internal_7c1a2ee4ab0ffde867aa9cc95fd2cd8ff030e3a8738fe996b8e8d5c22ab1780f_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_19394fd5fee8b76c41d46d962302ac8461749a01417420f514ffea079013a910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19394fd5fee8b76c41d46d962302ac8461749a01417420f514ffea079013a910->enter($__internal_19394fd5fee8b76c41d46d962302ac8461749a01417420f514ffea079013a910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_19394fd5fee8b76c41d46d962302ac8461749a01417420f514ffea079013a910->leave($__internal_19394fd5fee8b76c41d46d962302ac8461749a01417420f514ffea079013a910_prof);

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
