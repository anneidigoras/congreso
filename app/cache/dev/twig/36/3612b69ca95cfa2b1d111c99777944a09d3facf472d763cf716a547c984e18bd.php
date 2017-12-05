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
        $__internal_448f4a7bb086dba0f9f3d63f56e9e290105b34c4bb35ace8bf7b53cddb5e22e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_448f4a7bb086dba0f9f3d63f56e9e290105b34c4bb35ace8bf7b53cddb5e22e3->enter($__internal_448f4a7bb086dba0f9f3d63f56e9e290105b34c4bb35ace8bf7b53cddb5e22e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_448f4a7bb086dba0f9f3d63f56e9e290105b34c4bb35ace8bf7b53cddb5e22e3->leave($__internal_448f4a7bb086dba0f9f3d63f56e9e290105b34c4bb35ace8bf7b53cddb5e22e3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dd73723f237a388d0bfe96b4e6ac9a298c476764e9bad3263e03b0a4deffe9aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd73723f237a388d0bfe96b4e6ac9a298c476764e9bad3263e03b0a4deffe9aa->enter($__internal_dd73723f237a388d0bfe96b4e6ac9a298c476764e9bad3263e03b0a4deffe9aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dd73723f237a388d0bfe96b4e6ac9a298c476764e9bad3263e03b0a4deffe9aa->leave($__internal_dd73723f237a388d0bfe96b4e6ac9a298c476764e9bad3263e03b0a4deffe9aa_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ce1471660fde61f66db1a31e8d07ad5f5e43e22a1ead9d44ceba4efa43ac5703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce1471660fde61f66db1a31e8d07ad5f5e43e22a1ead9d44ceba4efa43ac5703->enter($__internal_ce1471660fde61f66db1a31e8d07ad5f5e43e22a1ead9d44ceba4efa43ac5703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ce1471660fde61f66db1a31e8d07ad5f5e43e22a1ead9d44ceba4efa43ac5703->leave($__internal_ce1471660fde61f66db1a31e8d07ad5f5e43e22a1ead9d44ceba4efa43ac5703_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_51a602222b49bc2d0262edcb76620fee940258c4da8c93504f8a367b32b90c01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51a602222b49bc2d0262edcb76620fee940258c4da8c93504f8a367b32b90c01->enter($__internal_51a602222b49bc2d0262edcb76620fee940258c4da8c93504f8a367b32b90c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_51a602222b49bc2d0262edcb76620fee940258c4da8c93504f8a367b32b90c01->leave($__internal_51a602222b49bc2d0262edcb76620fee940258c4da8c93504f8a367b32b90c01_prof);

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
