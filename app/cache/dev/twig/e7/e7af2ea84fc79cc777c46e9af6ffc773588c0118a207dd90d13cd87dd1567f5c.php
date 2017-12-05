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
        $__internal_e1ed8551b394b9370488d3e26303ffce3e22d2239bd16ed57faa228cb8de60f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1ed8551b394b9370488d3e26303ffce3e22d2239bd16ed57faa228cb8de60f6->enter($__internal_e1ed8551b394b9370488d3e26303ffce3e22d2239bd16ed57faa228cb8de60f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1ed8551b394b9370488d3e26303ffce3e22d2239bd16ed57faa228cb8de60f6->leave($__internal_e1ed8551b394b9370488d3e26303ffce3e22d2239bd16ed57faa228cb8de60f6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5b21bc7abb8c5d23b3c912a8d54d7bac24c7dc6fc0bd6f1eb6261dd8e8d461de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b21bc7abb8c5d23b3c912a8d54d7bac24c7dc6fc0bd6f1eb6261dd8e8d461de->enter($__internal_5b21bc7abb8c5d23b3c912a8d54d7bac24c7dc6fc0bd6f1eb6261dd8e8d461de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5b21bc7abb8c5d23b3c912a8d54d7bac24c7dc6fc0bd6f1eb6261dd8e8d461de->leave($__internal_5b21bc7abb8c5d23b3c912a8d54d7bac24c7dc6fc0bd6f1eb6261dd8e8d461de_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_97cc11a307af3d570101453479706545c8192fd2ef5b7729ecc5f02a1eb046a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97cc11a307af3d570101453479706545c8192fd2ef5b7729ecc5f02a1eb046a7->enter($__internal_97cc11a307af3d570101453479706545c8192fd2ef5b7729ecc5f02a1eb046a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_97cc11a307af3d570101453479706545c8192fd2ef5b7729ecc5f02a1eb046a7->leave($__internal_97cc11a307af3d570101453479706545c8192fd2ef5b7729ecc5f02a1eb046a7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f484a4c1a49ed48cdb2f750b315cfcde0158552efa9bc7e5cc7a553b9fb09ba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f484a4c1a49ed48cdb2f750b315cfcde0158552efa9bc7e5cc7a553b9fb09ba0->enter($__internal_f484a4c1a49ed48cdb2f750b315cfcde0158552efa9bc7e5cc7a553b9fb09ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f484a4c1a49ed48cdb2f750b315cfcde0158552efa9bc7e5cc7a553b9fb09ba0->leave($__internal_f484a4c1a49ed48cdb2f750b315cfcde0158552efa9bc7e5cc7a553b9fb09ba0_prof);

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
