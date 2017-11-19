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
        $__internal_60af1cde7dbaac68192cb3a53d9af5dff927eb3ed0a2377f70cc508862427baf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60af1cde7dbaac68192cb3a53d9af5dff927eb3ed0a2377f70cc508862427baf->enter($__internal_60af1cde7dbaac68192cb3a53d9af5dff927eb3ed0a2377f70cc508862427baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60af1cde7dbaac68192cb3a53d9af5dff927eb3ed0a2377f70cc508862427baf->leave($__internal_60af1cde7dbaac68192cb3a53d9af5dff927eb3ed0a2377f70cc508862427baf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_db604e69102668f672abcbf1e186d3a3489fac314a27f145082974a92bedd55d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db604e69102668f672abcbf1e186d3a3489fac314a27f145082974a92bedd55d->enter($__internal_db604e69102668f672abcbf1e186d3a3489fac314a27f145082974a92bedd55d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_db604e69102668f672abcbf1e186d3a3489fac314a27f145082974a92bedd55d->leave($__internal_db604e69102668f672abcbf1e186d3a3489fac314a27f145082974a92bedd55d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f3679ca7dfbdd44c3ccdaaf74c53936a5b4397a4c02409883f90fea0b6115cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f3679ca7dfbdd44c3ccdaaf74c53936a5b4397a4c02409883f90fea0b6115cd->enter($__internal_6f3679ca7dfbdd44c3ccdaaf74c53936a5b4397a4c02409883f90fea0b6115cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_6f3679ca7dfbdd44c3ccdaaf74c53936a5b4397a4c02409883f90fea0b6115cd->leave($__internal_6f3679ca7dfbdd44c3ccdaaf74c53936a5b4397a4c02409883f90fea0b6115cd_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8caeaf7b80158a94ea6c9167c9fa1327ff8e74b76cc529010bd33e0d8915594e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8caeaf7b80158a94ea6c9167c9fa1327ff8e74b76cc529010bd33e0d8915594e->enter($__internal_8caeaf7b80158a94ea6c9167c9fa1327ff8e74b76cc529010bd33e0d8915594e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8caeaf7b80158a94ea6c9167c9fa1327ff8e74b76cc529010bd33e0d8915594e->leave($__internal_8caeaf7b80158a94ea6c9167c9fa1327ff8e74b76cc529010bd33e0d8915594e_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_66ee5fa0f8d80a9838dc8a473a0773a17e60b59f23027a2fb9c8249e2aa005a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66ee5fa0f8d80a9838dc8a473a0773a17e60b59f23027a2fb9c8249e2aa005a7->enter($__internal_66ee5fa0f8d80a9838dc8a473a0773a17e60b59f23027a2fb9c8249e2aa005a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_66ee5fa0f8d80a9838dc8a473a0773a17e60b59f23027a2fb9c8249e2aa005a7->leave($__internal_66ee5fa0f8d80a9838dc8a473a0773a17e60b59f23027a2fb9c8249e2aa005a7_prof);

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
