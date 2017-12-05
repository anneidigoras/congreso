<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8c79dc4721822c3da769f6e883fd81b1d7f92d660e13d05deff15f545a258dab extends Twig_Template
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
        $__internal_21bb15b793d065877b23eea2d0aad51c1b2453bafb49182ddc22bf305d31d95b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21bb15b793d065877b23eea2d0aad51c1b2453bafb49182ddc22bf305d31d95b->enter($__internal_21bb15b793d065877b23eea2d0aad51c1b2453bafb49182ddc22bf305d31d95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21bb15b793d065877b23eea2d0aad51c1b2453bafb49182ddc22bf305d31d95b->leave($__internal_21bb15b793d065877b23eea2d0aad51c1b2453bafb49182ddc22bf305d31d95b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2b7f412dbfddbb34efb3bb87369a5bf5fac202c2d868eed871ce3aa893d3009a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b7f412dbfddbb34efb3bb87369a5bf5fac202c2d868eed871ce3aa893d3009a->enter($__internal_2b7f412dbfddbb34efb3bb87369a5bf5fac202c2d868eed871ce3aa893d3009a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2b7f412dbfddbb34efb3bb87369a5bf5fac202c2d868eed871ce3aa893d3009a->leave($__internal_2b7f412dbfddbb34efb3bb87369a5bf5fac202c2d868eed871ce3aa893d3009a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_17e7463b49ccce565155d9e5bebcd155bdcc527a7681e06fa27449671c3f5510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17e7463b49ccce565155d9e5bebcd155bdcc527a7681e06fa27449671c3f5510->enter($__internal_17e7463b49ccce565155d9e5bebcd155bdcc527a7681e06fa27449671c3f5510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_17e7463b49ccce565155d9e5bebcd155bdcc527a7681e06fa27449671c3f5510->leave($__internal_17e7463b49ccce565155d9e5bebcd155bdcc527a7681e06fa27449671c3f5510_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ad734b6c4ed2334222ade23574bb16771173fd9485776c2330ad868be4db4acc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad734b6c4ed2334222ade23574bb16771173fd9485776c2330ad868be4db4acc->enter($__internal_ad734b6c4ed2334222ade23574bb16771173fd9485776c2330ad868be4db4acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ad734b6c4ed2334222ade23574bb16771173fd9485776c2330ad868be4db4acc->leave($__internal_ad734b6c4ed2334222ade23574bb16771173fd9485776c2330ad868be4db4acc_prof);

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
