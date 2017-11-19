<?php

/* CongresoCongresoBundle::layout.html.twig */
class __TwigTemplate_61d879c2dc354457d85e0550f3811831798637a5b298d29174e7f76972d0deaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "CongresoCongresoBundle::layout.html.twig", 2);
        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57e777081528cf2e1e9894b733886837fe40937919fd26e2030014089c5bb479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57e777081528cf2e1e9894b733886837fe40937919fd26e2030014089c5bb479->enter($__internal_57e777081528cf2e1e9894b733886837fe40937919fd26e2030014089c5bb479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57e777081528cf2e1e9894b733886837fe40937919fd26e2030014089c5bb479->leave($__internal_57e777081528cf2e1e9894b733886837fe40937919fd26e2030014089c5bb479_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_43c52d74895059779d6794cdc383a88d89ec844d99da85f9cf073d219454fafa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43c52d74895059779d6794cdc383a88d89ec844d99da85f9cf073d219454fafa->enter($__internal_43c52d74895059779d6794cdc383a88d89ec844d99da85f9cf073d219454fafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "   
";
        
        $__internal_43c52d74895059779d6794cdc383a88d89ec844d99da85f9cf073d219454fafa->leave($__internal_43c52d74895059779d6794cdc383a88d89ec844d99da85f9cf073d219454fafa_prof);

    }

    public function getTemplateName()
    {
        return "CongresoCongresoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Congreso/CongresoBundle/Resources/views/layout.html.twig #}
{% extends '::base.html.twig' %}

{% block sidebar %}
   
{% endblock %}", "CongresoCongresoBundle::layout.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/layout.html.twig");
    }
}
