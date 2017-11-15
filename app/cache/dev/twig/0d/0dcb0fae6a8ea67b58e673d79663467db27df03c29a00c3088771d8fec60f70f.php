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
        $__internal_374ef6d1a2b6062feb6430975ffd713d11f1fff9b214ea6b92ad1a84ee2d3991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_374ef6d1a2b6062feb6430975ffd713d11f1fff9b214ea6b92ad1a84ee2d3991->enter($__internal_374ef6d1a2b6062feb6430975ffd713d11f1fff9b214ea6b92ad1a84ee2d3991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_374ef6d1a2b6062feb6430975ffd713d11f1fff9b214ea6b92ad1a84ee2d3991->leave($__internal_374ef6d1a2b6062feb6430975ffd713d11f1fff9b214ea6b92ad1a84ee2d3991_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_06b9f204005f2c133bea6a424b978fcee076ce0574b7849a1484a6673749ab18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06b9f204005f2c133bea6a424b978fcee076ce0574b7849a1484a6673749ab18->enter($__internal_06b9f204005f2c133bea6a424b978fcee076ce0574b7849a1484a6673749ab18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_06b9f204005f2c133bea6a424b978fcee076ce0574b7849a1484a6673749ab18->leave($__internal_06b9f204005f2c133bea6a424b978fcee076ce0574b7849a1484a6673749ab18_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a9627df53805c1896554ebc7c0247fbec6cff881289f82f843c9e4f413f18e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9627df53805c1896554ebc7c0247fbec6cff881289f82f843c9e4f413f18e30->enter($__internal_a9627df53805c1896554ebc7c0247fbec6cff881289f82f843c9e4f413f18e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a9627df53805c1896554ebc7c0247fbec6cff881289f82f843c9e4f413f18e30->leave($__internal_a9627df53805c1896554ebc7c0247fbec6cff881289f82f843c9e4f413f18e30_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2891c21fbafd37697cc7502ae297ce9995bd538326808c620362023cef1b4307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2891c21fbafd37697cc7502ae297ce9995bd538326808c620362023cef1b4307->enter($__internal_2891c21fbafd37697cc7502ae297ce9995bd538326808c620362023cef1b4307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2891c21fbafd37697cc7502ae297ce9995bd538326808c620362023cef1b4307->leave($__internal_2891c21fbafd37697cc7502ae297ce9995bd538326808c620362023cef1b4307_prof);

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
