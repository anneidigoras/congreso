<?php

/* @SensioDistribution/Configurator/layout.html.twig */
class __TwigTemplate_6eb0441d2f8f3a515c5fb04276bb1016e18c84f2d1b3a5c6657f707419a34563 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "@SensioDistribution/Configurator/layout.html.twig", 1);
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
        $__internal_6d4caa8ccbb12945a8534666fbcf22e4c4e4a524daad8ff10ea76ff0b44872be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d4caa8ccbb12945a8534666fbcf22e4c4e4a524daad8ff10ea76ff0b44872be->enter($__internal_6d4caa8ccbb12945a8534666fbcf22e4c4e4a524daad8ff10ea76ff0b44872be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d4caa8ccbb12945a8534666fbcf22e4c4e4a524daad8ff10ea76ff0b44872be->leave($__internal_6d4caa8ccbb12945a8534666fbcf22e4c4e4a524daad8ff10ea76ff0b44872be_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_18ff28bb9532d50cd8ae64c1af4ecca3842e953a0df87f23a298f9a486bc3175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18ff28bb9532d50cd8ae64c1af4ecca3842e953a0df87f23a298f9a486bc3175->enter($__internal_18ff28bb9532d50cd8ae64c1af4ecca3842e953a0df87f23a298f9a486bc3175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_18ff28bb9532d50cd8ae64c1af4ecca3842e953a0df87f23a298f9a486bc3175->leave($__internal_18ff28bb9532d50cd8ae64c1af4ecca3842e953a0df87f23a298f9a486bc3175_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5d5cc29814281029613cf5234105f4feea88ef15a8713004011293031af620d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5d5cc29814281029613cf5234105f4feea88ef15a8713004011293031af620d->enter($__internal_c5d5cc29814281029613cf5234105f4feea88ef15a8713004011293031af620d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_c5d5cc29814281029613cf5234105f4feea88ef15a8713004011293031af620d->leave($__internal_c5d5cc29814281029613cf5234105f4feea88ef15a8713004011293031af620d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_64cd7974b54271f94f9f60b52851fa79c18016069e2c7bda923f4c35446c8adf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64cd7974b54271f94f9f60b52851fa79c18016069e2c7bda923f4c35446c8adf->enter($__internal_64cd7974b54271f94f9f60b52851fa79c18016069e2c7bda923f4c35446c8adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_64cd7974b54271f94f9f60b52851fa79c18016069e2c7bda923f4c35446c8adf->leave($__internal_64cd7974b54271f94f9f60b52851fa79c18016069e2c7bda923f4c35446c8adf_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_47a9aafc1d61488eeaf9839b9887da21fd822ae5dd3e0fa7b212eb5cfc781dc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47a9aafc1d61488eeaf9839b9887da21fd822ae5dd3e0fa7b212eb5cfc781dc5->enter($__internal_47a9aafc1d61488eeaf9839b9887da21fd822ae5dd3e0fa7b212eb5cfc781dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_47a9aafc1d61488eeaf9839b9887da21fd822ae5dd3e0fa7b212eb5cfc781dc5->leave($__internal_47a9aafc1d61488eeaf9839b9887da21fd822ae5dd3e0fa7b212eb5cfc781dc5_prof);

    }

    public function getTemplateName()
    {
        return "@SensioDistribution/Configurator/layout.html.twig";
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
", "@SensioDistribution/Configurator/layout.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle\\Resources\\views\\Configurator\\layout.html.twig");
    }
}
