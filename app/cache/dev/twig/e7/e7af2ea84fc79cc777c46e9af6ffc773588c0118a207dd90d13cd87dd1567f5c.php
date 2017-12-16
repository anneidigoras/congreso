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
        $__internal_7973ed22d66321a5fbb9f152357a40dc209ff25ed4e803f0ffdfb7590d3a44e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7973ed22d66321a5fbb9f152357a40dc209ff25ed4e803f0ffdfb7590d3a44e9->enter($__internal_7973ed22d66321a5fbb9f152357a40dc209ff25ed4e803f0ffdfb7590d3a44e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7973ed22d66321a5fbb9f152357a40dc209ff25ed4e803f0ffdfb7590d3a44e9->leave($__internal_7973ed22d66321a5fbb9f152357a40dc209ff25ed4e803f0ffdfb7590d3a44e9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_906aabf6f1f1e98bfcca76f2f6b43aa527ba956e4231dffb4a78741f22fd6d97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_906aabf6f1f1e98bfcca76f2f6b43aa527ba956e4231dffb4a78741f22fd6d97->enter($__internal_906aabf6f1f1e98bfcca76f2f6b43aa527ba956e4231dffb4a78741f22fd6d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_906aabf6f1f1e98bfcca76f2f6b43aa527ba956e4231dffb4a78741f22fd6d97->leave($__internal_906aabf6f1f1e98bfcca76f2f6b43aa527ba956e4231dffb4a78741f22fd6d97_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fd90c48f9ba30254cf368aabea6e55622cf3a3c9f8baae5be0486ee73476fa37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd90c48f9ba30254cf368aabea6e55622cf3a3c9f8baae5be0486ee73476fa37->enter($__internal_fd90c48f9ba30254cf368aabea6e55622cf3a3c9f8baae5be0486ee73476fa37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fd90c48f9ba30254cf368aabea6e55622cf3a3c9f8baae5be0486ee73476fa37->leave($__internal_fd90c48f9ba30254cf368aabea6e55622cf3a3c9f8baae5be0486ee73476fa37_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_89b8e2424cb03e1325964a08751a74ac397756446433122ac7662bf75646f11e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89b8e2424cb03e1325964a08751a74ac397756446433122ac7662bf75646f11e->enter($__internal_89b8e2424cb03e1325964a08751a74ac397756446433122ac7662bf75646f11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_89b8e2424cb03e1325964a08751a74ac397756446433122ac7662bf75646f11e->leave($__internal_89b8e2424cb03e1325964a08751a74ac397756446433122ac7662bf75646f11e_prof);

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
