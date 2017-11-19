<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_60fa8c80a06f1df51676d53232fb2e0e1a84533aae91da00463905873205bb1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50d3ae398be19dbdba78d7d580fe0ba40610d60da8fc38ae55eff72e18d51b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50d3ae398be19dbdba78d7d580fe0ba40610d60da8fc38ae55eff72e18d51b5e->enter($__internal_50d3ae398be19dbdba78d7d580fe0ba40610d60da8fc38ae55eff72e18d51b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50d3ae398be19dbdba78d7d580fe0ba40610d60da8fc38ae55eff72e18d51b5e->leave($__internal_50d3ae398be19dbdba78d7d580fe0ba40610d60da8fc38ae55eff72e18d51b5e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c23d29626e2686a327730e1e8b66c1eee9aeef0dfc80aa286244995ba14a7a2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c23d29626e2686a327730e1e8b66c1eee9aeef0dfc80aa286244995ba14a7a2a->enter($__internal_c23d29626e2686a327730e1e8b66c1eee9aeef0dfc80aa286244995ba14a7a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_c23d29626e2686a327730e1e8b66c1eee9aeef0dfc80aa286244995ba14a7a2a->leave($__internal_c23d29626e2686a327730e1e8b66c1eee9aeef0dfc80aa286244995ba14a7a2a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_42650fa73374738520e6b4ebe2131b966f5bc304340cdfb908dcd1e998b3f60b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42650fa73374738520e6b4ebe2131b966f5bc304340cdfb908dcd1e998b3f60b->enter($__internal_42650fa73374738520e6b4ebe2131b966f5bc304340cdfb908dcd1e998b3f60b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_42650fa73374738520e6b4ebe2131b966f5bc304340cdfb908dcd1e998b3f60b->leave($__internal_42650fa73374738520e6b4ebe2131b966f5bc304340cdfb908dcd1e998b3f60b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d797f5521f503e0c13b875357ec1498af357db529b32e49560c1a28aa1a0478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d797f5521f503e0c13b875357ec1498af357db529b32e49560c1a28aa1a0478->enter($__internal_1d797f5521f503e0c13b875357ec1498af357db529b32e49560c1a28aa1a0478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, ($context["version"] ?? $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_1d797f5521f503e0c13b875357ec1498af357db529b32e49560c1a28aa1a0478->leave($__internal_1d797f5521f503e0c13b875357ec1498af357db529b32e49560c1a28aa1a0478_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_846bf83fb67b77ea3d5ef017c9edba3e04addf1bcb0e9f646a98b1c64b212983 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_846bf83fb67b77ea3d5ef017c9edba3e04addf1bcb0e9f646a98b1c64b212983->enter($__internal_846bf83fb67b77ea3d5ef017c9edba3e04addf1bcb0e9f646a98b1c64b212983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_846bf83fb67b77ea3d5ef017c9edba3e04addf1bcb0e9f646a98b1c64b212983->leave($__internal_846bf83fb67b77ea3d5ef017c9edba3e04addf1bcb0e9f646a98b1c64b212983_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "SensioDistributionBundle::Configurator/layout.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
