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
        $__internal_74fc88ec4c79c95dbf0b396c8f16e80989bdaf5f296b47d44723c61a01b18b63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74fc88ec4c79c95dbf0b396c8f16e80989bdaf5f296b47d44723c61a01b18b63->enter($__internal_74fc88ec4c79c95dbf0b396c8f16e80989bdaf5f296b47d44723c61a01b18b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74fc88ec4c79c95dbf0b396c8f16e80989bdaf5f296b47d44723c61a01b18b63->leave($__internal_74fc88ec4c79c95dbf0b396c8f16e80989bdaf5f296b47d44723c61a01b18b63_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2d3c6a6d75c152c6d7eb0c2bccf266d2ab458e04e13428acc47c4165eef0e336 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d3c6a6d75c152c6d7eb0c2bccf266d2ab458e04e13428acc47c4165eef0e336->enter($__internal_2d3c6a6d75c152c6d7eb0c2bccf266d2ab458e04e13428acc47c4165eef0e336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_2d3c6a6d75c152c6d7eb0c2bccf266d2ab458e04e13428acc47c4165eef0e336->leave($__internal_2d3c6a6d75c152c6d7eb0c2bccf266d2ab458e04e13428acc47c4165eef0e336_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_779999b3500e1d337378a8011ad167c87c2817dcfbf670f2d0f3dbb43d052605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_779999b3500e1d337378a8011ad167c87c2817dcfbf670f2d0f3dbb43d052605->enter($__internal_779999b3500e1d337378a8011ad167c87c2817dcfbf670f2d0f3dbb43d052605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_779999b3500e1d337378a8011ad167c87c2817dcfbf670f2d0f3dbb43d052605->leave($__internal_779999b3500e1d337378a8011ad167c87c2817dcfbf670f2d0f3dbb43d052605_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_08bb5b97c2f247f9cdbdb6510589abd82da54d340c3db6fd7af882b7b255bf24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08bb5b97c2f247f9cdbdb6510589abd82da54d340c3db6fd7af882b7b255bf24->enter($__internal_08bb5b97c2f247f9cdbdb6510589abd82da54d340c3db6fd7af882b7b255bf24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_08bb5b97c2f247f9cdbdb6510589abd82da54d340c3db6fd7af882b7b255bf24->leave($__internal_08bb5b97c2f247f9cdbdb6510589abd82da54d340c3db6fd7af882b7b255bf24_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_6b8d922e596195b8d21bf2469795b63d7276c4abb09a85148088cf0288aad610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b8d922e596195b8d21bf2469795b63d7276c4abb09a85148088cf0288aad610->enter($__internal_6b8d922e596195b8d21bf2469795b63d7276c4abb09a85148088cf0288aad610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6b8d922e596195b8d21bf2469795b63d7276c4abb09a85148088cf0288aad610->leave($__internal_6b8d922e596195b8d21bf2469795b63d7276c4abb09a85148088cf0288aad610_prof);

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
