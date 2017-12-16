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
        $__internal_5894adf359daa9770ee6610e62e56692e9452becc89bb958cf38fc7afb200a89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5894adf359daa9770ee6610e62e56692e9452becc89bb958cf38fc7afb200a89->enter($__internal_5894adf359daa9770ee6610e62e56692e9452becc89bb958cf38fc7afb200a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5894adf359daa9770ee6610e62e56692e9452becc89bb958cf38fc7afb200a89->leave($__internal_5894adf359daa9770ee6610e62e56692e9452becc89bb958cf38fc7afb200a89_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_00e1c81d16be7247c926d3ec388aa9cf06403b8032e4e7d890a367ea70360be7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00e1c81d16be7247c926d3ec388aa9cf06403b8032e4e7d890a367ea70360be7->enter($__internal_00e1c81d16be7247c926d3ec388aa9cf06403b8032e4e7d890a367ea70360be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_00e1c81d16be7247c926d3ec388aa9cf06403b8032e4e7d890a367ea70360be7->leave($__internal_00e1c81d16be7247c926d3ec388aa9cf06403b8032e4e7d890a367ea70360be7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0c17523cd96792098f383485cbf967c37d76045ecd34d0010a0b54cc04507c63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c17523cd96792098f383485cbf967c37d76045ecd34d0010a0b54cc04507c63->enter($__internal_0c17523cd96792098f383485cbf967c37d76045ecd34d0010a0b54cc04507c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0c17523cd96792098f383485cbf967c37d76045ecd34d0010a0b54cc04507c63->leave($__internal_0c17523cd96792098f383485cbf967c37d76045ecd34d0010a0b54cc04507c63_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9c3d4c0cbad36d692bf4864b0069b705ce1cd17f10a187d14ebb6cb26ce01b25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c3d4c0cbad36d692bf4864b0069b705ce1cd17f10a187d14ebb6cb26ce01b25->enter($__internal_9c3d4c0cbad36d692bf4864b0069b705ce1cd17f10a187d14ebb6cb26ce01b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9c3d4c0cbad36d692bf4864b0069b705ce1cd17f10a187d14ebb6cb26ce01b25->leave($__internal_9c3d4c0cbad36d692bf4864b0069b705ce1cd17f10a187d14ebb6cb26ce01b25_prof);

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
