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
        $__internal_0270b8ad1c35f66523887eea27c510ad9a10468d506d49936a326ae5a0a9d5a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0270b8ad1c35f66523887eea27c510ad9a10468d506d49936a326ae5a0a9d5a0->enter($__internal_0270b8ad1c35f66523887eea27c510ad9a10468d506d49936a326ae5a0a9d5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0270b8ad1c35f66523887eea27c510ad9a10468d506d49936a326ae5a0a9d5a0->leave($__internal_0270b8ad1c35f66523887eea27c510ad9a10468d506d49936a326ae5a0a9d5a0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dffb6319f7d1feec12e4703d6efa55dc21571e39a0631cf68f62c08094eb4ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dffb6319f7d1feec12e4703d6efa55dc21571e39a0631cf68f62c08094eb4ea2->enter($__internal_dffb6319f7d1feec12e4703d6efa55dc21571e39a0631cf68f62c08094eb4ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dffb6319f7d1feec12e4703d6efa55dc21571e39a0631cf68f62c08094eb4ea2->leave($__internal_dffb6319f7d1feec12e4703d6efa55dc21571e39a0631cf68f62c08094eb4ea2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b24a9eef8c50d5a8758840217513aabc0a73cde15b41e20bc75ee5285f4122a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b24a9eef8c50d5a8758840217513aabc0a73cde15b41e20bc75ee5285f4122a6->enter($__internal_b24a9eef8c50d5a8758840217513aabc0a73cde15b41e20bc75ee5285f4122a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b24a9eef8c50d5a8758840217513aabc0a73cde15b41e20bc75ee5285f4122a6->leave($__internal_b24a9eef8c50d5a8758840217513aabc0a73cde15b41e20bc75ee5285f4122a6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5f4b7450ecc34891c3b01e042fedf44eb87ae537fc353ee33a6a9029b02c3297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f4b7450ecc34891c3b01e042fedf44eb87ae537fc353ee33a6a9029b02c3297->enter($__internal_5f4b7450ecc34891c3b01e042fedf44eb87ae537fc353ee33a6a9029b02c3297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5f4b7450ecc34891c3b01e042fedf44eb87ae537fc353ee33a6a9029b02c3297->leave($__internal_5f4b7450ecc34891c3b01e042fedf44eb87ae537fc353ee33a6a9029b02c3297_prof);

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
