<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b6131bd90daccf5af172ed490836fefa13892b9078781615be9d963a3411b4b0 extends Twig_Template
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
        $__internal_933121ec78f4f8b583d29a2452befa45c44981edfaefb15a5acfdd50314f85ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_933121ec78f4f8b583d29a2452befa45c44981edfaefb15a5acfdd50314f85ab->enter($__internal_933121ec78f4f8b583d29a2452befa45c44981edfaefb15a5acfdd50314f85ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_933121ec78f4f8b583d29a2452befa45c44981edfaefb15a5acfdd50314f85ab->leave($__internal_933121ec78f4f8b583d29a2452befa45c44981edfaefb15a5acfdd50314f85ab_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a2ca128e545cb73c054e27727708327cc8cc314cc710f5a8336eecce8ed257a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2ca128e545cb73c054e27727708327cc8cc314cc710f5a8336eecce8ed257a7->enter($__internal_a2ca128e545cb73c054e27727708327cc8cc314cc710f5a8336eecce8ed257a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a2ca128e545cb73c054e27727708327cc8cc314cc710f5a8336eecce8ed257a7->leave($__internal_a2ca128e545cb73c054e27727708327cc8cc314cc710f5a8336eecce8ed257a7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_01433e43c4b182c6aa473ee54e98d7112359d671c770912681e37487db550f51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01433e43c4b182c6aa473ee54e98d7112359d671c770912681e37487db550f51->enter($__internal_01433e43c4b182c6aa473ee54e98d7112359d671c770912681e37487db550f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_01433e43c4b182c6aa473ee54e98d7112359d671c770912681e37487db550f51->leave($__internal_01433e43c4b182c6aa473ee54e98d7112359d671c770912681e37487db550f51_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_89efa36a676e46a02dad2ce45d0b187aebc83d78400c14065097adc0663a8e42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89efa36a676e46a02dad2ce45d0b187aebc83d78400c14065097adc0663a8e42->enter($__internal_89efa36a676e46a02dad2ce45d0b187aebc83d78400c14065097adc0663a8e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_89efa36a676e46a02dad2ce45d0b187aebc83d78400c14065097adc0663a8e42->leave($__internal_89efa36a676e46a02dad2ce45d0b187aebc83d78400c14065097adc0663a8e42_prof);

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
