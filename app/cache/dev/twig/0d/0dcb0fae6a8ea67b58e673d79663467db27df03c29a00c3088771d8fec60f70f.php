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
        $__internal_ae59c3a6e4045a35bb59505eba26859ade49cef7f523a20441d83abd517e0f1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae59c3a6e4045a35bb59505eba26859ade49cef7f523a20441d83abd517e0f1b->enter($__internal_ae59c3a6e4045a35bb59505eba26859ade49cef7f523a20441d83abd517e0f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae59c3a6e4045a35bb59505eba26859ade49cef7f523a20441d83abd517e0f1b->leave($__internal_ae59c3a6e4045a35bb59505eba26859ade49cef7f523a20441d83abd517e0f1b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_12e1b0852f217e8fbe7f269592d352b355108d17c93789f239f970f34efa9b57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12e1b0852f217e8fbe7f269592d352b355108d17c93789f239f970f34efa9b57->enter($__internal_12e1b0852f217e8fbe7f269592d352b355108d17c93789f239f970f34efa9b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_12e1b0852f217e8fbe7f269592d352b355108d17c93789f239f970f34efa9b57->leave($__internal_12e1b0852f217e8fbe7f269592d352b355108d17c93789f239f970f34efa9b57_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6e92218cf1724d72692dbb86daa5cba5516debe0d4674df15e19ac385fb33ca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e92218cf1724d72692dbb86daa5cba5516debe0d4674df15e19ac385fb33ca9->enter($__internal_6e92218cf1724d72692dbb86daa5cba5516debe0d4674df15e19ac385fb33ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6e92218cf1724d72692dbb86daa5cba5516debe0d4674df15e19ac385fb33ca9->leave($__internal_6e92218cf1724d72692dbb86daa5cba5516debe0d4674df15e19ac385fb33ca9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_055be249747bf83b79d938586bd3f9d55e79e4ed2d42936f2ca4c3ef4ee22335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_055be249747bf83b79d938586bd3f9d55e79e4ed2d42936f2ca4c3ef4ee22335->enter($__internal_055be249747bf83b79d938586bd3f9d55e79e4ed2d42936f2ca4c3ef4ee22335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_055be249747bf83b79d938586bd3f9d55e79e4ed2d42936f2ca4c3ef4ee22335->leave($__internal_055be249747bf83b79d938586bd3f9d55e79e4ed2d42936f2ca4c3ef4ee22335_prof);

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
