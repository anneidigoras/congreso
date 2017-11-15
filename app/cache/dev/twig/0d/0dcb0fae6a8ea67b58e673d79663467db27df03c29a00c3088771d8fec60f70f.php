<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_d02573ad3e1931d251f7b5eb8a85540b2b7bce5f05c854983ca14b6afaa602c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_397bd4af6e23d137cfc284c70d96237ece1f76e9abb167b488904a94edf8f631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_397bd4af6e23d137cfc284c70d96237ece1f76e9abb167b488904a94edf8f631->enter($__internal_397bd4af6e23d137cfc284c70d96237ece1f76e9abb167b488904a94edf8f631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_397bd4af6e23d137cfc284c70d96237ece1f76e9abb167b488904a94edf8f631->leave($__internal_397bd4af6e23d137cfc284c70d96237ece1f76e9abb167b488904a94edf8f631_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_19ff4e5452db6c8bda090896609b93b4229d7632360c68821ef44ea5a66825a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19ff4e5452db6c8bda090896609b93b4229d7632360c68821ef44ea5a66825a8->enter($__internal_19ff4e5452db6c8bda090896609b93b4229d7632360c68821ef44ea5a66825a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_19ff4e5452db6c8bda090896609b93b4229d7632360c68821ef44ea5a66825a8->leave($__internal_19ff4e5452db6c8bda090896609b93b4229d7632360c68821ef44ea5a66825a8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_062a70900688c3c505f918cc184eed27a8592d8ec48dea4e5c151b9f7c0c60da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_062a70900688c3c505f918cc184eed27a8592d8ec48dea4e5c151b9f7c0c60da->enter($__internal_062a70900688c3c505f918cc184eed27a8592d8ec48dea4e5c151b9f7c0c60da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_062a70900688c3c505f918cc184eed27a8592d8ec48dea4e5c151b9f7c0c60da->leave($__internal_062a70900688c3c505f918cc184eed27a8592d8ec48dea4e5c151b9f7c0c60da_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e01164b4fef9185779cf4fad2dc3de14013a907006e82d7c7601fc9faa886b55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e01164b4fef9185779cf4fad2dc3de14013a907006e82d7c7601fc9faa886b55->enter($__internal_e01164b4fef9185779cf4fad2dc3de14013a907006e82d7c7601fc9faa886b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e01164b4fef9185779cf4fad2dc3de14013a907006e82d7c7601fc9faa886b55->leave($__internal_e01164b4fef9185779cf4fad2dc3de14013a907006e82d7c7601fc9faa886b55_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
