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
        $__internal_03c8bcdb88a06162db9d5e7f88be22bfe2dae7a010cc398827d1f044c62df0de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03c8bcdb88a06162db9d5e7f88be22bfe2dae7a010cc398827d1f044c62df0de->enter($__internal_03c8bcdb88a06162db9d5e7f88be22bfe2dae7a010cc398827d1f044c62df0de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03c8bcdb88a06162db9d5e7f88be22bfe2dae7a010cc398827d1f044c62df0de->leave($__internal_03c8bcdb88a06162db9d5e7f88be22bfe2dae7a010cc398827d1f044c62df0de_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1423beffd42c26a791bf7d922cc0d49d2f5a77bb80d03a3231ff6070209c956b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1423beffd42c26a791bf7d922cc0d49d2f5a77bb80d03a3231ff6070209c956b->enter($__internal_1423beffd42c26a791bf7d922cc0d49d2f5a77bb80d03a3231ff6070209c956b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1423beffd42c26a791bf7d922cc0d49d2f5a77bb80d03a3231ff6070209c956b->leave($__internal_1423beffd42c26a791bf7d922cc0d49d2f5a77bb80d03a3231ff6070209c956b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_df6650da5a671197b69cffe2cb119d2485293e4eeef3c8b0ab296d19389c5dc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df6650da5a671197b69cffe2cb119d2485293e4eeef3c8b0ab296d19389c5dc3->enter($__internal_df6650da5a671197b69cffe2cb119d2485293e4eeef3c8b0ab296d19389c5dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_df6650da5a671197b69cffe2cb119d2485293e4eeef3c8b0ab296d19389c5dc3->leave($__internal_df6650da5a671197b69cffe2cb119d2485293e4eeef3c8b0ab296d19389c5dc3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b7e5e8aeeebef98088537d84ed2efbeb9be397f3e9fd6f847492e7e76d927835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7e5e8aeeebef98088537d84ed2efbeb9be397f3e9fd6f847492e7e76d927835->enter($__internal_b7e5e8aeeebef98088537d84ed2efbeb9be397f3e9fd6f847492e7e76d927835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b7e5e8aeeebef98088537d84ed2efbeb9be397f3e9fd6f847492e7e76d927835->leave($__internal_b7e5e8aeeebef98088537d84ed2efbeb9be397f3e9fd6f847492e7e76d927835_prof);

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
