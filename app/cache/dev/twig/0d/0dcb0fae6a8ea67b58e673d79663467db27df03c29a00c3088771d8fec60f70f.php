<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_d02573ad3e1931d251f7b5eb8a85540b2b7bce5f05c854983ca14b6afaa602c8 extends Twig_Template
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
        $__internal_0ac87ad23cfce2eaa7179e1d061095bf6d9a7e6a4b387cb75343bb36fd241c68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ac87ad23cfce2eaa7179e1d061095bf6d9a7e6a4b387cb75343bb36fd241c68->enter($__internal_0ac87ad23cfce2eaa7179e1d061095bf6d9a7e6a4b387cb75343bb36fd241c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ac87ad23cfce2eaa7179e1d061095bf6d9a7e6a4b387cb75343bb36fd241c68->leave($__internal_0ac87ad23cfce2eaa7179e1d061095bf6d9a7e6a4b387cb75343bb36fd241c68_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e7c11be3253dc3ed84e1998e5914f0d1562ba04a7e038a9f9e04262def9a8d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7c11be3253dc3ed84e1998e5914f0d1562ba04a7e038a9f9e04262def9a8d03->enter($__internal_e7c11be3253dc3ed84e1998e5914f0d1562ba04a7e038a9f9e04262def9a8d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e7c11be3253dc3ed84e1998e5914f0d1562ba04a7e038a9f9e04262def9a8d03->leave($__internal_e7c11be3253dc3ed84e1998e5914f0d1562ba04a7e038a9f9e04262def9a8d03_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_03bde11507aef0679e8385b68ab8bfcc3c8d53a61acd17b43f6a31d8a2e399cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03bde11507aef0679e8385b68ab8bfcc3c8d53a61acd17b43f6a31d8a2e399cf->enter($__internal_03bde11507aef0679e8385b68ab8bfcc3c8d53a61acd17b43f6a31d8a2e399cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_03bde11507aef0679e8385b68ab8bfcc3c8d53a61acd17b43f6a31d8a2e399cf->leave($__internal_03bde11507aef0679e8385b68ab8bfcc3c8d53a61acd17b43f6a31d8a2e399cf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d3eb614d2ee988d9e18ed9f480a1ba3083d99895d15bf6c7045a64b2aa014b9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3eb614d2ee988d9e18ed9f480a1ba3083d99895d15bf6c7045a64b2aa014b9e->enter($__internal_d3eb614d2ee988d9e18ed9f480a1ba3083d99895d15bf6c7045a64b2aa014b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d3eb614d2ee988d9e18ed9f480a1ba3083d99895d15bf6c7045a64b2aa014b9e->leave($__internal_d3eb614d2ee988d9e18ed9f480a1ba3083d99895d15bf6c7045a64b2aa014b9e_prof);

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
