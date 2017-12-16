<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b6131bd90daccf5af172ed490836fefa13892b9078781615be9d963a3411b4b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_0664854d3e60578f55532122cdf88649d4a6d9dd60c525a8b044658c0f7057a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0664854d3e60578f55532122cdf88649d4a6d9dd60c525a8b044658c0f7057a1->enter($__internal_0664854d3e60578f55532122cdf88649d4a6d9dd60c525a8b044658c0f7057a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0664854d3e60578f55532122cdf88649d4a6d9dd60c525a8b044658c0f7057a1->leave($__internal_0664854d3e60578f55532122cdf88649d4a6d9dd60c525a8b044658c0f7057a1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b7e4035a67f640e1291c9d19ab0c551d8756875089dbf575600031b074935432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7e4035a67f640e1291c9d19ab0c551d8756875089dbf575600031b074935432->enter($__internal_b7e4035a67f640e1291c9d19ab0c551d8756875089dbf575600031b074935432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b7e4035a67f640e1291c9d19ab0c551d8756875089dbf575600031b074935432->leave($__internal_b7e4035a67f640e1291c9d19ab0c551d8756875089dbf575600031b074935432_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8ddcb62cf54d6a08f05c04f751e545d25e90ec4f645bc0fa0d2fcd0a38708919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ddcb62cf54d6a08f05c04f751e545d25e90ec4f645bc0fa0d2fcd0a38708919->enter($__internal_8ddcb62cf54d6a08f05c04f751e545d25e90ec4f645bc0fa0d2fcd0a38708919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8ddcb62cf54d6a08f05c04f751e545d25e90ec4f645bc0fa0d2fcd0a38708919->leave($__internal_8ddcb62cf54d6a08f05c04f751e545d25e90ec4f645bc0fa0d2fcd0a38708919_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ee819938c085e855ac6441b9286540abf191b0b3ecc0f271498f71027dc10c21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee819938c085e855ac6441b9286540abf191b0b3ecc0f271498f71027dc10c21->enter($__internal_ee819938c085e855ac6441b9286540abf191b0b3ecc0f271498f71027dc10c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ee819938c085e855ac6441b9286540abf191b0b3ecc0f271498f71027dc10c21->leave($__internal_ee819938c085e855ac6441b9286540abf191b0b3ecc0f271498f71027dc10c21_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
