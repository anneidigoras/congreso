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
        $__internal_21e2994bfdeed75c24d0acf874e3fd915a735a0f9222762a159ce5fb0c22dcad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21e2994bfdeed75c24d0acf874e3fd915a735a0f9222762a159ce5fb0c22dcad->enter($__internal_21e2994bfdeed75c24d0acf874e3fd915a735a0f9222762a159ce5fb0c22dcad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21e2994bfdeed75c24d0acf874e3fd915a735a0f9222762a159ce5fb0c22dcad->leave($__internal_21e2994bfdeed75c24d0acf874e3fd915a735a0f9222762a159ce5fb0c22dcad_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e11d061cb0c463140559baa15d6b627a53624e9df7dedc2d6b1f6708b4686254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e11d061cb0c463140559baa15d6b627a53624e9df7dedc2d6b1f6708b4686254->enter($__internal_e11d061cb0c463140559baa15d6b627a53624e9df7dedc2d6b1f6708b4686254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "   
";
        
        $__internal_e11d061cb0c463140559baa15d6b627a53624e9df7dedc2d6b1f6708b4686254->leave($__internal_e11d061cb0c463140559baa15d6b627a53624e9df7dedc2d6b1f6708b4686254_prof);

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
