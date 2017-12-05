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
        $__internal_fc007368133cc8d4e0c083577bf5375a3b0286f64c8cb6d0f55646087f1fdec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc007368133cc8d4e0c083577bf5375a3b0286f64c8cb6d0f55646087f1fdec1->enter($__internal_fc007368133cc8d4e0c083577bf5375a3b0286f64c8cb6d0f55646087f1fdec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc007368133cc8d4e0c083577bf5375a3b0286f64c8cb6d0f55646087f1fdec1->leave($__internal_fc007368133cc8d4e0c083577bf5375a3b0286f64c8cb6d0f55646087f1fdec1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_444f10aaf9f04953fe9295d220dd4bc8e668aaecb0668cc7b3ce3adb5d8a6cb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_444f10aaf9f04953fe9295d220dd4bc8e668aaecb0668cc7b3ce3adb5d8a6cb0->enter($__internal_444f10aaf9f04953fe9295d220dd4bc8e668aaecb0668cc7b3ce3adb5d8a6cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_444f10aaf9f04953fe9295d220dd4bc8e668aaecb0668cc7b3ce3adb5d8a6cb0->leave($__internal_444f10aaf9f04953fe9295d220dd4bc8e668aaecb0668cc7b3ce3adb5d8a6cb0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f0cda03183f829bda9289c9c841559dc7d053fa16cd6c1c14a11bc5617f6baa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0cda03183f829bda9289c9c841559dc7d053fa16cd6c1c14a11bc5617f6baa8->enter($__internal_f0cda03183f829bda9289c9c841559dc7d053fa16cd6c1c14a11bc5617f6baa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f0cda03183f829bda9289c9c841559dc7d053fa16cd6c1c14a11bc5617f6baa8->leave($__internal_f0cda03183f829bda9289c9c841559dc7d053fa16cd6c1c14a11bc5617f6baa8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8574ac4391a455bc408131df216bf60b28590ba05e978f6d555fa32fdcd351ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8574ac4391a455bc408131df216bf60b28590ba05e978f6d555fa32fdcd351ee->enter($__internal_8574ac4391a455bc408131df216bf60b28590ba05e978f6d555fa32fdcd351ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8574ac4391a455bc408131df216bf60b28590ba05e978f6d555fa32fdcd351ee->leave($__internal_8574ac4391a455bc408131df216bf60b28590ba05e978f6d555fa32fdcd351ee_prof);

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
