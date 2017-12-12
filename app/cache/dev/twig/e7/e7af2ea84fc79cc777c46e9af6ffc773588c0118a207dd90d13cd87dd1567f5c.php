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
        $__internal_ba146ae72441d6f2cc03185da3fda17a4cf5fb9b9c8859e9669c9f727c992d6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba146ae72441d6f2cc03185da3fda17a4cf5fb9b9c8859e9669c9f727c992d6f->enter($__internal_ba146ae72441d6f2cc03185da3fda17a4cf5fb9b9c8859e9669c9f727c992d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba146ae72441d6f2cc03185da3fda17a4cf5fb9b9c8859e9669c9f727c992d6f->leave($__internal_ba146ae72441d6f2cc03185da3fda17a4cf5fb9b9c8859e9669c9f727c992d6f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_331c947a0f943ca68b0355f2ff39a93b2033a75b279e0b655a1f9f7133baf3e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_331c947a0f943ca68b0355f2ff39a93b2033a75b279e0b655a1f9f7133baf3e7->enter($__internal_331c947a0f943ca68b0355f2ff39a93b2033a75b279e0b655a1f9f7133baf3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_331c947a0f943ca68b0355f2ff39a93b2033a75b279e0b655a1f9f7133baf3e7->leave($__internal_331c947a0f943ca68b0355f2ff39a93b2033a75b279e0b655a1f9f7133baf3e7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8793f653fd32727781447a0140b7b24dde49a420a334ea1503122360ae92e2c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8793f653fd32727781447a0140b7b24dde49a420a334ea1503122360ae92e2c6->enter($__internal_8793f653fd32727781447a0140b7b24dde49a420a334ea1503122360ae92e2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8793f653fd32727781447a0140b7b24dde49a420a334ea1503122360ae92e2c6->leave($__internal_8793f653fd32727781447a0140b7b24dde49a420a334ea1503122360ae92e2c6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_345375400a2a90edf63df933b5ee24a8b3d72e844f56b9b29a72c1757e469e6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_345375400a2a90edf63df933b5ee24a8b3d72e844f56b9b29a72c1757e469e6f->enter($__internal_345375400a2a90edf63df933b5ee24a8b3d72e844f56b9b29a72c1757e469e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_345375400a2a90edf63df933b5ee24a8b3d72e844f56b9b29a72c1757e469e6f->leave($__internal_345375400a2a90edf63df933b5ee24a8b3d72e844f56b9b29a72c1757e469e6f_prof);

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
