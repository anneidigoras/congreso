<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_922862c747889c6597696f2ee555acf7a8085dc2f5bacb88b5279099bf01820a extends Twig_Template
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
        $__internal_03ad88a47add2c9c0d2be47fec88176ae931166dd0edfeb5c437652a14a01bf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03ad88a47add2c9c0d2be47fec88176ae931166dd0edfeb5c437652a14a01bf7->enter($__internal_03ad88a47add2c9c0d2be47fec88176ae931166dd0edfeb5c437652a14a01bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03ad88a47add2c9c0d2be47fec88176ae931166dd0edfeb5c437652a14a01bf7->leave($__internal_03ad88a47add2c9c0d2be47fec88176ae931166dd0edfeb5c437652a14a01bf7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1368c78424055e4d9d3597de116f4822cc45b74faaf67c36e11c4ca2c82df783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1368c78424055e4d9d3597de116f4822cc45b74faaf67c36e11c4ca2c82df783->enter($__internal_1368c78424055e4d9d3597de116f4822cc45b74faaf67c36e11c4ca2c82df783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1368c78424055e4d9d3597de116f4822cc45b74faaf67c36e11c4ca2c82df783->leave($__internal_1368c78424055e4d9d3597de116f4822cc45b74faaf67c36e11c4ca2c82df783_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b3928b00e43b4953b52fd5a8da2f245d7d7e0243b65c671efedea7ec51b8dcbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3928b00e43b4953b52fd5a8da2f245d7d7e0243b65c671efedea7ec51b8dcbc->enter($__internal_b3928b00e43b4953b52fd5a8da2f245d7d7e0243b65c671efedea7ec51b8dcbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b3928b00e43b4953b52fd5a8da2f245d7d7e0243b65c671efedea7ec51b8dcbc->leave($__internal_b3928b00e43b4953b52fd5a8da2f245d7d7e0243b65c671efedea7ec51b8dcbc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6a87a68d817e8c5854cedc90c1ba63a93efef3bba333dc936b4ff4be4702ee21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a87a68d817e8c5854cedc90c1ba63a93efef3bba333dc936b4ff4be4702ee21->enter($__internal_6a87a68d817e8c5854cedc90c1ba63a93efef3bba333dc936b4ff4be4702ee21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6a87a68d817e8c5854cedc90c1ba63a93efef3bba333dc936b4ff4be4702ee21->leave($__internal_6a87a68d817e8c5854cedc90c1ba63a93efef3bba333dc936b4ff4be4702ee21_prof);

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
