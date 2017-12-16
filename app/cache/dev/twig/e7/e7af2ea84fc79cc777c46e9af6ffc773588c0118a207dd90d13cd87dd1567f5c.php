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
        $__internal_aec1ba1d4b432291472a26349d258fd6659c013b00e6831ce744c0be7e435934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aec1ba1d4b432291472a26349d258fd6659c013b00e6831ce744c0be7e435934->enter($__internal_aec1ba1d4b432291472a26349d258fd6659c013b00e6831ce744c0be7e435934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aec1ba1d4b432291472a26349d258fd6659c013b00e6831ce744c0be7e435934->leave($__internal_aec1ba1d4b432291472a26349d258fd6659c013b00e6831ce744c0be7e435934_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5d6b0d461a7a415ed5c79a98aafde0ecd08159cc8505fbabf4647cfe2538e0ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d6b0d461a7a415ed5c79a98aafde0ecd08159cc8505fbabf4647cfe2538e0ff->enter($__internal_5d6b0d461a7a415ed5c79a98aafde0ecd08159cc8505fbabf4647cfe2538e0ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5d6b0d461a7a415ed5c79a98aafde0ecd08159cc8505fbabf4647cfe2538e0ff->leave($__internal_5d6b0d461a7a415ed5c79a98aafde0ecd08159cc8505fbabf4647cfe2538e0ff_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7bb8333e885db4472f18e1cc8ccdf11fb6c412238e7053ea8d3e15027ea73cc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bb8333e885db4472f18e1cc8ccdf11fb6c412238e7053ea8d3e15027ea73cc8->enter($__internal_7bb8333e885db4472f18e1cc8ccdf11fb6c412238e7053ea8d3e15027ea73cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7bb8333e885db4472f18e1cc8ccdf11fb6c412238e7053ea8d3e15027ea73cc8->leave($__internal_7bb8333e885db4472f18e1cc8ccdf11fb6c412238e7053ea8d3e15027ea73cc8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0d609bfc24e6f60a4b6858f4f988a96a733f787a95a3d03888ccff4c984f44cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d609bfc24e6f60a4b6858f4f988a96a733f787a95a3d03888ccff4c984f44cb->enter($__internal_0d609bfc24e6f60a4b6858f4f988a96a733f787a95a3d03888ccff4c984f44cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0d609bfc24e6f60a4b6858f4f988a96a733f787a95a3d03888ccff4c984f44cb->leave($__internal_0d609bfc24e6f60a4b6858f4f988a96a733f787a95a3d03888ccff4c984f44cb_prof);

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
