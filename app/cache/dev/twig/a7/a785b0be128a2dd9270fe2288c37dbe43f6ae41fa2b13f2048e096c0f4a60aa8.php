<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e4d70fa4b26812d0270b58d85759914e4f58f09509c07ef3d8768d1fff4610e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_2b1a03613a33c32aada0f38cd50c4cbf00fd990700b5b29de3e6121e83349f25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b1a03613a33c32aada0f38cd50c4cbf00fd990700b5b29de3e6121e83349f25->enter($__internal_2b1a03613a33c32aada0f38cd50c4cbf00fd990700b5b29de3e6121e83349f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b1a03613a33c32aada0f38cd50c4cbf00fd990700b5b29de3e6121e83349f25->leave($__internal_2b1a03613a33c32aada0f38cd50c4cbf00fd990700b5b29de3e6121e83349f25_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_95304ef5fda7b51633eb519351e3ba8c8d868a79575d86028b4451cb8a233970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95304ef5fda7b51633eb519351e3ba8c8d868a79575d86028b4451cb8a233970->enter($__internal_95304ef5fda7b51633eb519351e3ba8c8d868a79575d86028b4451cb8a233970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_95304ef5fda7b51633eb519351e3ba8c8d868a79575d86028b4451cb8a233970->leave($__internal_95304ef5fda7b51633eb519351e3ba8c8d868a79575d86028b4451cb8a233970_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_78554b7cafe527a00abb80a09de90f0d947a71ec4c9973e0047d1a4cc65b0500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78554b7cafe527a00abb80a09de90f0d947a71ec4c9973e0047d1a4cc65b0500->enter($__internal_78554b7cafe527a00abb80a09de90f0d947a71ec4c9973e0047d1a4cc65b0500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_78554b7cafe527a00abb80a09de90f0d947a71ec4c9973e0047d1a4cc65b0500->leave($__internal_78554b7cafe527a00abb80a09de90f0d947a71ec4c9973e0047d1a4cc65b0500_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1ad134b0275465270baa1555e75c7dc81461d5b3a6d510bbbf6c6eb016cedda5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ad134b0275465270baa1555e75c7dc81461d5b3a6d510bbbf6c6eb016cedda5->enter($__internal_1ad134b0275465270baa1555e75c7dc81461d5b3a6d510bbbf6c6eb016cedda5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1ad134b0275465270baa1555e75c7dc81461d5b3a6d510bbbf6c6eb016cedda5->leave($__internal_1ad134b0275465270baa1555e75c7dc81461d5b3a6d510bbbf6c6eb016cedda5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
