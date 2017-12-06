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
        $__internal_3512e6c0c40778ba0dda47941624b9be21f84c572938929a62dd3faf2476bf5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3512e6c0c40778ba0dda47941624b9be21f84c572938929a62dd3faf2476bf5e->enter($__internal_3512e6c0c40778ba0dda47941624b9be21f84c572938929a62dd3faf2476bf5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3512e6c0c40778ba0dda47941624b9be21f84c572938929a62dd3faf2476bf5e->leave($__internal_3512e6c0c40778ba0dda47941624b9be21f84c572938929a62dd3faf2476bf5e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_230099e56372679ef181241ed86dadebec36b53a89589065d9651105adc0846b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_230099e56372679ef181241ed86dadebec36b53a89589065d9651105adc0846b->enter($__internal_230099e56372679ef181241ed86dadebec36b53a89589065d9651105adc0846b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_230099e56372679ef181241ed86dadebec36b53a89589065d9651105adc0846b->leave($__internal_230099e56372679ef181241ed86dadebec36b53a89589065d9651105adc0846b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_31eec83345a434a4125498ff0d272bc25711caccda00d15ffcea1f4acea43e0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31eec83345a434a4125498ff0d272bc25711caccda00d15ffcea1f4acea43e0b->enter($__internal_31eec83345a434a4125498ff0d272bc25711caccda00d15ffcea1f4acea43e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_31eec83345a434a4125498ff0d272bc25711caccda00d15ffcea1f4acea43e0b->leave($__internal_31eec83345a434a4125498ff0d272bc25711caccda00d15ffcea1f4acea43e0b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eeb1dc1dba9b9773f3d45ffb18890e49f67b00fd0b48a89218d4a1ec3ddcc204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeb1dc1dba9b9773f3d45ffb18890e49f67b00fd0b48a89218d4a1ec3ddcc204->enter($__internal_eeb1dc1dba9b9773f3d45ffb18890e49f67b00fd0b48a89218d4a1ec3ddcc204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_eeb1dc1dba9b9773f3d45ffb18890e49f67b00fd0b48a89218d4a1ec3ddcc204->leave($__internal_eeb1dc1dba9b9773f3d45ffb18890e49f67b00fd0b48a89218d4a1ec3ddcc204_prof);

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
