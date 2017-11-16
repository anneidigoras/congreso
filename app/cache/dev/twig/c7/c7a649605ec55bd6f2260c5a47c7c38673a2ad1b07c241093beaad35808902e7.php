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
        $__internal_b9f8c0581a46edab6642bcfdcf3d5a42e23729aaf1ba029ea3ed86d8b7afebaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9f8c0581a46edab6642bcfdcf3d5a42e23729aaf1ba029ea3ed86d8b7afebaa->enter($__internal_b9f8c0581a46edab6642bcfdcf3d5a42e23729aaf1ba029ea3ed86d8b7afebaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9f8c0581a46edab6642bcfdcf3d5a42e23729aaf1ba029ea3ed86d8b7afebaa->leave($__internal_b9f8c0581a46edab6642bcfdcf3d5a42e23729aaf1ba029ea3ed86d8b7afebaa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_de52aaf86468754991148de754614e734065ab2bc2cfe218022809114fc1455f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de52aaf86468754991148de754614e734065ab2bc2cfe218022809114fc1455f->enter($__internal_de52aaf86468754991148de754614e734065ab2bc2cfe218022809114fc1455f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_de52aaf86468754991148de754614e734065ab2bc2cfe218022809114fc1455f->leave($__internal_de52aaf86468754991148de754614e734065ab2bc2cfe218022809114fc1455f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7a8049c7f28a7ef4cb64c21c3e492c0629e462969eb793fec234b943f332e4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7a8049c7f28a7ef4cb64c21c3e492c0629e462969eb793fec234b943f332e4e->enter($__internal_e7a8049c7f28a7ef4cb64c21c3e492c0629e462969eb793fec234b943f332e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_e7a8049c7f28a7ef4cb64c21c3e492c0629e462969eb793fec234b943f332e4e->leave($__internal_e7a8049c7f28a7ef4cb64c21c3e492c0629e462969eb793fec234b943f332e4e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_af7b926b2b3c2316de3da468bfafff48bb9e97c537df81c82fd70cdada1cbf07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af7b926b2b3c2316de3da468bfafff48bb9e97c537df81c82fd70cdada1cbf07->enter($__internal_af7b926b2b3c2316de3da468bfafff48bb9e97c537df81c82fd70cdada1cbf07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_af7b926b2b3c2316de3da468bfafff48bb9e97c537df81c82fd70cdada1cbf07->leave($__internal_af7b926b2b3c2316de3da468bfafff48bb9e97c537df81c82fd70cdada1cbf07_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_2ddd5a323abf52feaf5a9d9c5ddd5d71f817c463faf55662e629fb795747f979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ddd5a323abf52feaf5a9d9c5ddd5d71f817c463faf55662e629fb795747f979->enter($__internal_2ddd5a323abf52feaf5a9d9c5ddd5d71f817c463faf55662e629fb795747f979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_2ddd5a323abf52feaf5a9d9c5ddd5d71f817c463faf55662e629fb795747f979->leave($__internal_2ddd5a323abf52feaf5a9d9c5ddd5d71f817c463faf55662e629fb795747f979_prof);

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
