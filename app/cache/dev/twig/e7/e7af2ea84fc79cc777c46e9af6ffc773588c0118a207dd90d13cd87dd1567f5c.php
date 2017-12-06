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
        $__internal_f81f82b29096463b2e7f4044cb7403cd7075e6106242f264d315a7dc93261964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f81f82b29096463b2e7f4044cb7403cd7075e6106242f264d315a7dc93261964->enter($__internal_f81f82b29096463b2e7f4044cb7403cd7075e6106242f264d315a7dc93261964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f81f82b29096463b2e7f4044cb7403cd7075e6106242f264d315a7dc93261964->leave($__internal_f81f82b29096463b2e7f4044cb7403cd7075e6106242f264d315a7dc93261964_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_758a348c7614d13b82aa584b8b113a080fd761649fb3ea41369385184c720c17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_758a348c7614d13b82aa584b8b113a080fd761649fb3ea41369385184c720c17->enter($__internal_758a348c7614d13b82aa584b8b113a080fd761649fb3ea41369385184c720c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_758a348c7614d13b82aa584b8b113a080fd761649fb3ea41369385184c720c17->leave($__internal_758a348c7614d13b82aa584b8b113a080fd761649fb3ea41369385184c720c17_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d6a0ad3306b6cd280d608709c86bfa9f5def0e953eaf2f65d584c37ee768a23c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6a0ad3306b6cd280d608709c86bfa9f5def0e953eaf2f65d584c37ee768a23c->enter($__internal_d6a0ad3306b6cd280d608709c86bfa9f5def0e953eaf2f65d584c37ee768a23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d6a0ad3306b6cd280d608709c86bfa9f5def0e953eaf2f65d584c37ee768a23c->leave($__internal_d6a0ad3306b6cd280d608709c86bfa9f5def0e953eaf2f65d584c37ee768a23c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_432e441b921a898b281f49a0fe3780cc4668fa0293459ef84c5604047a584e47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_432e441b921a898b281f49a0fe3780cc4668fa0293459ef84c5604047a584e47->enter($__internal_432e441b921a898b281f49a0fe3780cc4668fa0293459ef84c5604047a584e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_432e441b921a898b281f49a0fe3780cc4668fa0293459ef84c5604047a584e47->leave($__internal_432e441b921a898b281f49a0fe3780cc4668fa0293459ef84c5604047a584e47_prof);

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
