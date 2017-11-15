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
        $__internal_3fa397b03742afde8582bed089da31677c1f4134f098c8967e1e11073bf826eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fa397b03742afde8582bed089da31677c1f4134f098c8967e1e11073bf826eb->enter($__internal_3fa397b03742afde8582bed089da31677c1f4134f098c8967e1e11073bf826eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fa397b03742afde8582bed089da31677c1f4134f098c8967e1e11073bf826eb->leave($__internal_3fa397b03742afde8582bed089da31677c1f4134f098c8967e1e11073bf826eb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_502f20782fa3e389a8e8511ae7d682860bec7086e820ab7335b0cbd8c4fe2bad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_502f20782fa3e389a8e8511ae7d682860bec7086e820ab7335b0cbd8c4fe2bad->enter($__internal_502f20782fa3e389a8e8511ae7d682860bec7086e820ab7335b0cbd8c4fe2bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_502f20782fa3e389a8e8511ae7d682860bec7086e820ab7335b0cbd8c4fe2bad->leave($__internal_502f20782fa3e389a8e8511ae7d682860bec7086e820ab7335b0cbd8c4fe2bad_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc98b5c990b392e03422f6daf83f8c99548be7a54add65fb9e8ee13960f8d45e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc98b5c990b392e03422f6daf83f8c99548be7a54add65fb9e8ee13960f8d45e->enter($__internal_cc98b5c990b392e03422f6daf83f8c99548be7a54add65fb9e8ee13960f8d45e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_cc98b5c990b392e03422f6daf83f8c99548be7a54add65fb9e8ee13960f8d45e->leave($__internal_cc98b5c990b392e03422f6daf83f8c99548be7a54add65fb9e8ee13960f8d45e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_233eeff9b84d23f01c62bd263af52dc3f36b048d9650383c69cfd4fe7d523a93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_233eeff9b84d23f01c62bd263af52dc3f36b048d9650383c69cfd4fe7d523a93->enter($__internal_233eeff9b84d23f01c62bd263af52dc3f36b048d9650383c69cfd4fe7d523a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_233eeff9b84d23f01c62bd263af52dc3f36b048d9650383c69cfd4fe7d523a93->leave($__internal_233eeff9b84d23f01c62bd263af52dc3f36b048d9650383c69cfd4fe7d523a93_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_ce830b5d2978026be3c105946221fd25c80b21f8d450a4a9b2d13f533a10a77d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce830b5d2978026be3c105946221fd25c80b21f8d450a4a9b2d13f533a10a77d->enter($__internal_ce830b5d2978026be3c105946221fd25c80b21f8d450a4a9b2d13f533a10a77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_ce830b5d2978026be3c105946221fd25c80b21f8d450a4a9b2d13f533a10a77d->leave($__internal_ce830b5d2978026be3c105946221fd25c80b21f8d450a4a9b2d13f533a10a77d_prof);

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
