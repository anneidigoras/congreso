<?php

/* CongresoCongresoBundle::layout.html.twig */
class __TwigTemplate_f4ac9998e278eacb9fd76807743edd9a406aaa41acd8a8867fa7db91b33f4883 extends Twig_Template
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
        $__internal_1bdc663751fddf82524cab656d5a7e04b5e367b16f1725146c5f0d501f443257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bdc663751fddf82524cab656d5a7e04b5e367b16f1725146c5f0d501f443257->enter($__internal_1bdc663751fddf82524cab656d5a7e04b5e367b16f1725146c5f0d501f443257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bdc663751fddf82524cab656d5a7e04b5e367b16f1725146c5f0d501f443257->leave($__internal_1bdc663751fddf82524cab656d5a7e04b5e367b16f1725146c5f0d501f443257_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_fb525b7f88ed391aab1e29800e5cf5f831da88cf88e1de09d688298903877b86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb525b7f88ed391aab1e29800e5cf5f831da88cf88e1de09d688298903877b86->enter($__internal_fb525b7f88ed391aab1e29800e5cf5f831da88cf88e1de09d688298903877b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "   
";
        
        $__internal_fb525b7f88ed391aab1e29800e5cf5f831da88cf88e1de09d688298903877b86->leave($__internal_fb525b7f88ed391aab1e29800e5cf5f831da88cf88e1de09d688298903877b86_prof);

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
