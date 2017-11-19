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
        $__internal_4455aa647ec7cff5b56935c2aa9a81101048da0771e73d5e49579291dc605e2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4455aa647ec7cff5b56935c2aa9a81101048da0771e73d5e49579291dc605e2c->enter($__internal_4455aa647ec7cff5b56935c2aa9a81101048da0771e73d5e49579291dc605e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4455aa647ec7cff5b56935c2aa9a81101048da0771e73d5e49579291dc605e2c->leave($__internal_4455aa647ec7cff5b56935c2aa9a81101048da0771e73d5e49579291dc605e2c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_71e34c0cd22a205559672ee9fde440a469d1d328442f70e92d4581ca22d19e48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71e34c0cd22a205559672ee9fde440a469d1d328442f70e92d4581ca22d19e48->enter($__internal_71e34c0cd22a205559672ee9fde440a469d1d328442f70e92d4581ca22d19e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_71e34c0cd22a205559672ee9fde440a469d1d328442f70e92d4581ca22d19e48->leave($__internal_71e34c0cd22a205559672ee9fde440a469d1d328442f70e92d4581ca22d19e48_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0855e9a0806f131c32e77b908449b6a69f506218fb080d8e838db04b845a0eda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0855e9a0806f131c32e77b908449b6a69f506218fb080d8e838db04b845a0eda->enter($__internal_0855e9a0806f131c32e77b908449b6a69f506218fb080d8e838db04b845a0eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0855e9a0806f131c32e77b908449b6a69f506218fb080d8e838db04b845a0eda->leave($__internal_0855e9a0806f131c32e77b908449b6a69f506218fb080d8e838db04b845a0eda_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a25343c0d7bf961e390606744693672794cb35ca964390ac246c5d59dd7e9517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a25343c0d7bf961e390606744693672794cb35ca964390ac246c5d59dd7e9517->enter($__internal_a25343c0d7bf961e390606744693672794cb35ca964390ac246c5d59dd7e9517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a25343c0d7bf961e390606744693672794cb35ca964390ac246c5d59dd7e9517->leave($__internal_a25343c0d7bf961e390606744693672794cb35ca964390ac246c5d59dd7e9517_prof);

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
