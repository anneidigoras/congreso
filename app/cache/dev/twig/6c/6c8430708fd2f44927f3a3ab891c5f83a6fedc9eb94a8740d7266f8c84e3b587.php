<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_a82435d44d5712b0b8a57d0bb3ef5699e2369fd037fe0e8f85e1e168b5c3d6bf extends Twig_Template
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
        $__internal_c4aaf747b53e94e534d9897d08b736ae56348629dfdc23cf1c24fa3f55044f6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4aaf747b53e94e534d9897d08b736ae56348629dfdc23cf1c24fa3f55044f6e->enter($__internal_c4aaf747b53e94e534d9897d08b736ae56348629dfdc23cf1c24fa3f55044f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4aaf747b53e94e534d9897d08b736ae56348629dfdc23cf1c24fa3f55044f6e->leave($__internal_c4aaf747b53e94e534d9897d08b736ae56348629dfdc23cf1c24fa3f55044f6e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2b5e7fb77b83c2f14e00d68efba6e06f05106933b39fec8f732091ab496e3ba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b5e7fb77b83c2f14e00d68efba6e06f05106933b39fec8f732091ab496e3ba2->enter($__internal_2b5e7fb77b83c2f14e00d68efba6e06f05106933b39fec8f732091ab496e3ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_2b5e7fb77b83c2f14e00d68efba6e06f05106933b39fec8f732091ab496e3ba2->leave($__internal_2b5e7fb77b83c2f14e00d68efba6e06f05106933b39fec8f732091ab496e3ba2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_26d3c562a287e6d8ae0b66a0ece0c9c20e0af274db412f54448f18a3ff488d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26d3c562a287e6d8ae0b66a0ece0c9c20e0af274db412f54448f18a3ff488d1e->enter($__internal_26d3c562a287e6d8ae0b66a0ece0c9c20e0af274db412f54448f18a3ff488d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_26d3c562a287e6d8ae0b66a0ece0c9c20e0af274db412f54448f18a3ff488d1e->leave($__internal_26d3c562a287e6d8ae0b66a0ece0c9c20e0af274db412f54448f18a3ff488d1e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1b203a91449b01bda0e996cca8cccb7c31e4a2dcce7c618ad386062d4f11657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1b203a91449b01bda0e996cca8cccb7c31e4a2dcce7c618ad386062d4f11657->enter($__internal_d1b203a91449b01bda0e996cca8cccb7c31e4a2dcce7c618ad386062d4f11657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d1b203a91449b01bda0e996cca8cccb7c31e4a2dcce7c618ad386062d4f11657->leave($__internal_d1b203a91449b01bda0e996cca8cccb7c31e4a2dcce7c618ad386062d4f11657_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_d5e3b9133d8d8d530b755f17206191f00e2e3686ea5df86b7bf6a18a41009070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5e3b9133d8d8d530b755f17206191f00e2e3686ea5df86b7bf6a18a41009070->enter($__internal_d5e3b9133d8d8d530b755f17206191f00e2e3686ea5df86b7bf6a18a41009070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_d5e3b9133d8d8d530b755f17206191f00e2e3686ea5df86b7bf6a18a41009070->leave($__internal_d5e3b9133d8d8d530b755f17206191f00e2e3686ea5df86b7bf6a18a41009070_prof);

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
