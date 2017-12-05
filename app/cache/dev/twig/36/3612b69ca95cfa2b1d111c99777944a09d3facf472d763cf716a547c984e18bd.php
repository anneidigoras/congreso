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
        $__internal_e29951b53b7fe5ebf2bce3bbe71ba08cab13be640f79ae80cfe1edddcd97773d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e29951b53b7fe5ebf2bce3bbe71ba08cab13be640f79ae80cfe1edddcd97773d->enter($__internal_e29951b53b7fe5ebf2bce3bbe71ba08cab13be640f79ae80cfe1edddcd97773d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e29951b53b7fe5ebf2bce3bbe71ba08cab13be640f79ae80cfe1edddcd97773d->leave($__internal_e29951b53b7fe5ebf2bce3bbe71ba08cab13be640f79ae80cfe1edddcd97773d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c03efc9a11937484d1ea2231fe8d8df57f184f6b974137dbc362931f99d6f1b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c03efc9a11937484d1ea2231fe8d8df57f184f6b974137dbc362931f99d6f1b5->enter($__internal_c03efc9a11937484d1ea2231fe8d8df57f184f6b974137dbc362931f99d6f1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c03efc9a11937484d1ea2231fe8d8df57f184f6b974137dbc362931f99d6f1b5->leave($__internal_c03efc9a11937484d1ea2231fe8d8df57f184f6b974137dbc362931f99d6f1b5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2740ce0c52044eb978dc7d103530c70f8e3d74b2a03334634ad6dfd256998f79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2740ce0c52044eb978dc7d103530c70f8e3d74b2a03334634ad6dfd256998f79->enter($__internal_2740ce0c52044eb978dc7d103530c70f8e3d74b2a03334634ad6dfd256998f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2740ce0c52044eb978dc7d103530c70f8e3d74b2a03334634ad6dfd256998f79->leave($__internal_2740ce0c52044eb978dc7d103530c70f8e3d74b2a03334634ad6dfd256998f79_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d6daa4e0c8e4a7425f21501ceae76c4122ee1f73d4bde822084af8606dcf65b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6daa4e0c8e4a7425f21501ceae76c4122ee1f73d4bde822084af8606dcf65b4->enter($__internal_d6daa4e0c8e4a7425f21501ceae76c4122ee1f73d4bde822084af8606dcf65b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d6daa4e0c8e4a7425f21501ceae76c4122ee1f73d4bde822084af8606dcf65b4->leave($__internal_d6daa4e0c8e4a7425f21501ceae76c4122ee1f73d4bde822084af8606dcf65b4_prof);

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
