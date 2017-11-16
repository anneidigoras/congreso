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
        $__internal_0cd0a590e97c98f31f2736693c7fd34475619f62410bb2f622bc79fd91da7a89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cd0a590e97c98f31f2736693c7fd34475619f62410bb2f622bc79fd91da7a89->enter($__internal_0cd0a590e97c98f31f2736693c7fd34475619f62410bb2f622bc79fd91da7a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cd0a590e97c98f31f2736693c7fd34475619f62410bb2f622bc79fd91da7a89->leave($__internal_0cd0a590e97c98f31f2736693c7fd34475619f62410bb2f622bc79fd91da7a89_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0c4f1ae9bd1dbf8fb03b1ee15087e8da4cea89830e82dd4d1ab499578df85697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c4f1ae9bd1dbf8fb03b1ee15087e8da4cea89830e82dd4d1ab499578df85697->enter($__internal_0c4f1ae9bd1dbf8fb03b1ee15087e8da4cea89830e82dd4d1ab499578df85697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0c4f1ae9bd1dbf8fb03b1ee15087e8da4cea89830e82dd4d1ab499578df85697->leave($__internal_0c4f1ae9bd1dbf8fb03b1ee15087e8da4cea89830e82dd4d1ab499578df85697_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_99836f1c18f5f346f31c65c7b4f6bc4dc2a0245749ce92b371363f9f7db37fdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99836f1c18f5f346f31c65c7b4f6bc4dc2a0245749ce92b371363f9f7db37fdb->enter($__internal_99836f1c18f5f346f31c65c7b4f6bc4dc2a0245749ce92b371363f9f7db37fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_99836f1c18f5f346f31c65c7b4f6bc4dc2a0245749ce92b371363f9f7db37fdb->leave($__internal_99836f1c18f5f346f31c65c7b4f6bc4dc2a0245749ce92b371363f9f7db37fdb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_efddabc0a971b89066f3f0f8d7cc4ce4de3dd2c5fcd6aeba955efc5f399cf9b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efddabc0a971b89066f3f0f8d7cc4ce4de3dd2c5fcd6aeba955efc5f399cf9b0->enter($__internal_efddabc0a971b89066f3f0f8d7cc4ce4de3dd2c5fcd6aeba955efc5f399cf9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_efddabc0a971b89066f3f0f8d7cc4ce4de3dd2c5fcd6aeba955efc5f399cf9b0->leave($__internal_efddabc0a971b89066f3f0f8d7cc4ce4de3dd2c5fcd6aeba955efc5f399cf9b0_prof);

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
