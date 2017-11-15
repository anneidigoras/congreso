<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5c13750a9193d6a6d88e33f1e18c96c5c8f11b0beae02a47a46260c6c6f2c4ad extends Twig_Template
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
        $__internal_d4657d3220bb4e27e90a81c09799a01d899da4425051fe81a9718db332ddd87a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4657d3220bb4e27e90a81c09799a01d899da4425051fe81a9718db332ddd87a->enter($__internal_d4657d3220bb4e27e90a81c09799a01d899da4425051fe81a9718db332ddd87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4657d3220bb4e27e90a81c09799a01d899da4425051fe81a9718db332ddd87a->leave($__internal_d4657d3220bb4e27e90a81c09799a01d899da4425051fe81a9718db332ddd87a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cd8ff6322fa2512a5dc4c8aff1063fda34c8084e3340042265cbf73dd236bc86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd8ff6322fa2512a5dc4c8aff1063fda34c8084e3340042265cbf73dd236bc86->enter($__internal_cd8ff6322fa2512a5dc4c8aff1063fda34c8084e3340042265cbf73dd236bc86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cd8ff6322fa2512a5dc4c8aff1063fda34c8084e3340042265cbf73dd236bc86->leave($__internal_cd8ff6322fa2512a5dc4c8aff1063fda34c8084e3340042265cbf73dd236bc86_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_20a12554f64afdc34be53efb9a8a974bee3c20025258ed4a58d7231aa9f4e984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20a12554f64afdc34be53efb9a8a974bee3c20025258ed4a58d7231aa9f4e984->enter($__internal_20a12554f64afdc34be53efb9a8a974bee3c20025258ed4a58d7231aa9f4e984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_20a12554f64afdc34be53efb9a8a974bee3c20025258ed4a58d7231aa9f4e984->leave($__internal_20a12554f64afdc34be53efb9a8a974bee3c20025258ed4a58d7231aa9f4e984_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c7928ef325dfe94a4444da3c3ccd435e2512bc0b701d9ca2866deb04f5641a33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7928ef325dfe94a4444da3c3ccd435e2512bc0b701d9ca2866deb04f5641a33->enter($__internal_c7928ef325dfe94a4444da3c3ccd435e2512bc0b701d9ca2866deb04f5641a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c7928ef325dfe94a4444da3c3ccd435e2512bc0b701d9ca2866deb04f5641a33->leave($__internal_c7928ef325dfe94a4444da3c3ccd435e2512bc0b701d9ca2866deb04f5641a33_prof);

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
