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
        $__internal_5449fcfbe384a1b050335ea3803cb522cbe16878f23d08ab986611f79a58ac5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5449fcfbe384a1b050335ea3803cb522cbe16878f23d08ab986611f79a58ac5d->enter($__internal_5449fcfbe384a1b050335ea3803cb522cbe16878f23d08ab986611f79a58ac5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5449fcfbe384a1b050335ea3803cb522cbe16878f23d08ab986611f79a58ac5d->leave($__internal_5449fcfbe384a1b050335ea3803cb522cbe16878f23d08ab986611f79a58ac5d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f537c2e651ab1d397a35c4192d06ceb1b32443a94ecd3258f95034ab5c697dec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f537c2e651ab1d397a35c4192d06ceb1b32443a94ecd3258f95034ab5c697dec->enter($__internal_f537c2e651ab1d397a35c4192d06ceb1b32443a94ecd3258f95034ab5c697dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_f537c2e651ab1d397a35c4192d06ceb1b32443a94ecd3258f95034ab5c697dec->leave($__internal_f537c2e651ab1d397a35c4192d06ceb1b32443a94ecd3258f95034ab5c697dec_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_58405d24a78ce9d72db1cd24be867d01fd109767a6b5ec3e08bb6ebd1b2aa0f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58405d24a78ce9d72db1cd24be867d01fd109767a6b5ec3e08bb6ebd1b2aa0f0->enter($__internal_58405d24a78ce9d72db1cd24be867d01fd109767a6b5ec3e08bb6ebd1b2aa0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_58405d24a78ce9d72db1cd24be867d01fd109767a6b5ec3e08bb6ebd1b2aa0f0->leave($__internal_58405d24a78ce9d72db1cd24be867d01fd109767a6b5ec3e08bb6ebd1b2aa0f0_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a5b6cca9a2fc84988dfa31072a2f2d6bac22582c68796f8306eb9bfc1adae03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a5b6cca9a2fc84988dfa31072a2f2d6bac22582c68796f8306eb9bfc1adae03->enter($__internal_9a5b6cca9a2fc84988dfa31072a2f2d6bac22582c68796f8306eb9bfc1adae03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9a5b6cca9a2fc84988dfa31072a2f2d6bac22582c68796f8306eb9bfc1adae03->leave($__internal_9a5b6cca9a2fc84988dfa31072a2f2d6bac22582c68796f8306eb9bfc1adae03_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_0ff5d04189d01a66fcef40aeb2b9af753da896f0f08302f9bede6daf3eef2e56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ff5d04189d01a66fcef40aeb2b9af753da896f0f08302f9bede6daf3eef2e56->enter($__internal_0ff5d04189d01a66fcef40aeb2b9af753da896f0f08302f9bede6daf3eef2e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_0ff5d04189d01a66fcef40aeb2b9af753da896f0f08302f9bede6daf3eef2e56->leave($__internal_0ff5d04189d01a66fcef40aeb2b9af753da896f0f08302f9bede6daf3eef2e56_prof);

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
