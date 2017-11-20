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
        $__internal_345bdea055b92d5850b4bdfe3f4c9142495cfb50f918413f783b50f72ba571d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_345bdea055b92d5850b4bdfe3f4c9142495cfb50f918413f783b50f72ba571d3->enter($__internal_345bdea055b92d5850b4bdfe3f4c9142495cfb50f918413f783b50f72ba571d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_345bdea055b92d5850b4bdfe3f4c9142495cfb50f918413f783b50f72ba571d3->leave($__internal_345bdea055b92d5850b4bdfe3f4c9142495cfb50f918413f783b50f72ba571d3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_742a0fc6171a3eb5bb39a874dd979e1787ade85dacff3a6e28cba37303f75506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_742a0fc6171a3eb5bb39a874dd979e1787ade85dacff3a6e28cba37303f75506->enter($__internal_742a0fc6171a3eb5bb39a874dd979e1787ade85dacff3a6e28cba37303f75506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_742a0fc6171a3eb5bb39a874dd979e1787ade85dacff3a6e28cba37303f75506->leave($__internal_742a0fc6171a3eb5bb39a874dd979e1787ade85dacff3a6e28cba37303f75506_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d3c624d23f5b011b2482421fc50bbd47f208438df5639ec6e0367a4179b3ab43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3c624d23f5b011b2482421fc50bbd47f208438df5639ec6e0367a4179b3ab43->enter($__internal_d3c624d23f5b011b2482421fc50bbd47f208438df5639ec6e0367a4179b3ab43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d3c624d23f5b011b2482421fc50bbd47f208438df5639ec6e0367a4179b3ab43->leave($__internal_d3c624d23f5b011b2482421fc50bbd47f208438df5639ec6e0367a4179b3ab43_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6b3f3d2d4a8a88c53ff7ca0612bbeeef5ca425c674851dddc7045a5a00dcc7dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b3f3d2d4a8a88c53ff7ca0612bbeeef5ca425c674851dddc7045a5a00dcc7dc->enter($__internal_6b3f3d2d4a8a88c53ff7ca0612bbeeef5ca425c674851dddc7045a5a00dcc7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6b3f3d2d4a8a88c53ff7ca0612bbeeef5ca425c674851dddc7045a5a00dcc7dc->leave($__internal_6b3f3d2d4a8a88c53ff7ca0612bbeeef5ca425c674851dddc7045a5a00dcc7dc_prof);

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
