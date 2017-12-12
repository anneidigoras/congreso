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
        $__internal_e4d0708d0491edb74a3985809a7f6d3c2bf88fb37297f59833fa771281c27c73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4d0708d0491edb74a3985809a7f6d3c2bf88fb37297f59833fa771281c27c73->enter($__internal_e4d0708d0491edb74a3985809a7f6d3c2bf88fb37297f59833fa771281c27c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4d0708d0491edb74a3985809a7f6d3c2bf88fb37297f59833fa771281c27c73->leave($__internal_e4d0708d0491edb74a3985809a7f6d3c2bf88fb37297f59833fa771281c27c73_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1822a2d87a79d727f8369e4597a0a3694c60abf4c60bec5a2f7f628fc227e647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1822a2d87a79d727f8369e4597a0a3694c60abf4c60bec5a2f7f628fc227e647->enter($__internal_1822a2d87a79d727f8369e4597a0a3694c60abf4c60bec5a2f7f628fc227e647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1822a2d87a79d727f8369e4597a0a3694c60abf4c60bec5a2f7f628fc227e647->leave($__internal_1822a2d87a79d727f8369e4597a0a3694c60abf4c60bec5a2f7f628fc227e647_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_25a7968766abac2385a9bf6971f26776c95068c98c5f072ed7fcbb57ae507289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a7968766abac2385a9bf6971f26776c95068c98c5f072ed7fcbb57ae507289->enter($__internal_25a7968766abac2385a9bf6971f26776c95068c98c5f072ed7fcbb57ae507289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_25a7968766abac2385a9bf6971f26776c95068c98c5f072ed7fcbb57ae507289->leave($__internal_25a7968766abac2385a9bf6971f26776c95068c98c5f072ed7fcbb57ae507289_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e0e65250d69f5cbe9b2a5ac2eef5768658c009c85cd45eaa8fe0beeb94154f75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e65250d69f5cbe9b2a5ac2eef5768658c009c85cd45eaa8fe0beeb94154f75->enter($__internal_e0e65250d69f5cbe9b2a5ac2eef5768658c009c85cd45eaa8fe0beeb94154f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e0e65250d69f5cbe9b2a5ac2eef5768658c009c85cd45eaa8fe0beeb94154f75->leave($__internal_e0e65250d69f5cbe9b2a5ac2eef5768658c009c85cd45eaa8fe0beeb94154f75_prof);

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
