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
        $__internal_9f5c948ce4ab6d2cff53d063491045ae16a72bdfc7d5b651cc3ab81202a16b81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f5c948ce4ab6d2cff53d063491045ae16a72bdfc7d5b651cc3ab81202a16b81->enter($__internal_9f5c948ce4ab6d2cff53d063491045ae16a72bdfc7d5b651cc3ab81202a16b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f5c948ce4ab6d2cff53d063491045ae16a72bdfc7d5b651cc3ab81202a16b81->leave($__internal_9f5c948ce4ab6d2cff53d063491045ae16a72bdfc7d5b651cc3ab81202a16b81_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0a96f7813794b70e4d1cc684b66d07498a847085a84f2185cafc7b031d545ebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a96f7813794b70e4d1cc684b66d07498a847085a84f2185cafc7b031d545ebe->enter($__internal_0a96f7813794b70e4d1cc684b66d07498a847085a84f2185cafc7b031d545ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0a96f7813794b70e4d1cc684b66d07498a847085a84f2185cafc7b031d545ebe->leave($__internal_0a96f7813794b70e4d1cc684b66d07498a847085a84f2185cafc7b031d545ebe_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5eae0be066f6cd6974d93b0281f1f4de22bd255e64db883fc9ed301333d69df9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eae0be066f6cd6974d93b0281f1f4de22bd255e64db883fc9ed301333d69df9->enter($__internal_5eae0be066f6cd6974d93b0281f1f4de22bd255e64db883fc9ed301333d69df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5eae0be066f6cd6974d93b0281f1f4de22bd255e64db883fc9ed301333d69df9->leave($__internal_5eae0be066f6cd6974d93b0281f1f4de22bd255e64db883fc9ed301333d69df9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ce59a6bfb4ddfffaef9817e0c239bedc3a6b6c0365814bf33a07ff2183eeaafc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce59a6bfb4ddfffaef9817e0c239bedc3a6b6c0365814bf33a07ff2183eeaafc->enter($__internal_ce59a6bfb4ddfffaef9817e0c239bedc3a6b6c0365814bf33a07ff2183eeaafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ce59a6bfb4ddfffaef9817e0c239bedc3a6b6c0365814bf33a07ff2183eeaafc->leave($__internal_ce59a6bfb4ddfffaef9817e0c239bedc3a6b6c0365814bf33a07ff2183eeaafc_prof);

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
