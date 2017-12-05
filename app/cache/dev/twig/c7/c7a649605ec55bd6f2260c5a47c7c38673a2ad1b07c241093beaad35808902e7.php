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
        $__internal_79720e89cd884f762e3cf5b4081b174d56d10e0392b19d29a8e1b4da077216a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79720e89cd884f762e3cf5b4081b174d56d10e0392b19d29a8e1b4da077216a7->enter($__internal_79720e89cd884f762e3cf5b4081b174d56d10e0392b19d29a8e1b4da077216a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79720e89cd884f762e3cf5b4081b174d56d10e0392b19d29a8e1b4da077216a7->leave($__internal_79720e89cd884f762e3cf5b4081b174d56d10e0392b19d29a8e1b4da077216a7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f2dcf473df13262867873bed35222f7850d5204f0cf348e8e344ce5be025502b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2dcf473df13262867873bed35222f7850d5204f0cf348e8e344ce5be025502b->enter($__internal_f2dcf473df13262867873bed35222f7850d5204f0cf348e8e344ce5be025502b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_f2dcf473df13262867873bed35222f7850d5204f0cf348e8e344ce5be025502b->leave($__internal_f2dcf473df13262867873bed35222f7850d5204f0cf348e8e344ce5be025502b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1c16b6db0f88564f53ce3bac32257c7227c6351b90a855d9710aec8cf8456b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1c16b6db0f88564f53ce3bac32257c7227c6351b90a855d9710aec8cf8456b9->enter($__internal_b1c16b6db0f88564f53ce3bac32257c7227c6351b90a855d9710aec8cf8456b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_b1c16b6db0f88564f53ce3bac32257c7227c6351b90a855d9710aec8cf8456b9->leave($__internal_b1c16b6db0f88564f53ce3bac32257c7227c6351b90a855d9710aec8cf8456b9_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d4cdda99579265af5c8298caa04630088cd4ff2e2f51691898c770d97bbf1b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d4cdda99579265af5c8298caa04630088cd4ff2e2f51691898c770d97bbf1b7->enter($__internal_6d4cdda99579265af5c8298caa04630088cd4ff2e2f51691898c770d97bbf1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6d4cdda99579265af5c8298caa04630088cd4ff2e2f51691898c770d97bbf1b7->leave($__internal_6d4cdda99579265af5c8298caa04630088cd4ff2e2f51691898c770d97bbf1b7_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_9a3c9cd52da032b7b940b4c2be90ddf2ef577e743f588874cddee3d57a0f9006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a3c9cd52da032b7b940b4c2be90ddf2ef577e743f588874cddee3d57a0f9006->enter($__internal_9a3c9cd52da032b7b940b4c2be90ddf2ef577e743f588874cddee3d57a0f9006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_9a3c9cd52da032b7b940b4c2be90ddf2ef577e743f588874cddee3d57a0f9006->leave($__internal_9a3c9cd52da032b7b940b4c2be90ddf2ef577e743f588874cddee3d57a0f9006_prof);

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
