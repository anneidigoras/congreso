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
        $__internal_85238267f073fd1b854b742c8eb476440ee65d2ce4478b367d44f2cd787ecb6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85238267f073fd1b854b742c8eb476440ee65d2ce4478b367d44f2cd787ecb6b->enter($__internal_85238267f073fd1b854b742c8eb476440ee65d2ce4478b367d44f2cd787ecb6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85238267f073fd1b854b742c8eb476440ee65d2ce4478b367d44f2cd787ecb6b->leave($__internal_85238267f073fd1b854b742c8eb476440ee65d2ce4478b367d44f2cd787ecb6b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6b6c4352f069d18ce3cbdcc70222b9d451ea5be6ebc6d85ebdf3c2929d6b2b8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b6c4352f069d18ce3cbdcc70222b9d451ea5be6ebc6d85ebdf3c2929d6b2b8c->enter($__internal_6b6c4352f069d18ce3cbdcc70222b9d451ea5be6ebc6d85ebdf3c2929d6b2b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_6b6c4352f069d18ce3cbdcc70222b9d451ea5be6ebc6d85ebdf3c2929d6b2b8c->leave($__internal_6b6c4352f069d18ce3cbdcc70222b9d451ea5be6ebc6d85ebdf3c2929d6b2b8c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d475b70f20e453b5c0df9086f314e827842c80b878a4453dc0e660edd2154dea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d475b70f20e453b5c0df9086f314e827842c80b878a4453dc0e660edd2154dea->enter($__internal_d475b70f20e453b5c0df9086f314e827842c80b878a4453dc0e660edd2154dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_d475b70f20e453b5c0df9086f314e827842c80b878a4453dc0e660edd2154dea->leave($__internal_d475b70f20e453b5c0df9086f314e827842c80b878a4453dc0e660edd2154dea_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca04a7904f8ae03f0bbcebbd7887eb88fbdc7ff4bb6812ff65ea485f812bee81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca04a7904f8ae03f0bbcebbd7887eb88fbdc7ff4bb6812ff65ea485f812bee81->enter($__internal_ca04a7904f8ae03f0bbcebbd7887eb88fbdc7ff4bb6812ff65ea485f812bee81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ca04a7904f8ae03f0bbcebbd7887eb88fbdc7ff4bb6812ff65ea485f812bee81->leave($__internal_ca04a7904f8ae03f0bbcebbd7887eb88fbdc7ff4bb6812ff65ea485f812bee81_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_b87a19385c82ff353dedb1b6a64ae7ed1137ebdc1fe4d397b034d1a449bb1a49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b87a19385c82ff353dedb1b6a64ae7ed1137ebdc1fe4d397b034d1a449bb1a49->enter($__internal_b87a19385c82ff353dedb1b6a64ae7ed1137ebdc1fe4d397b034d1a449bb1a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_b87a19385c82ff353dedb1b6a64ae7ed1137ebdc1fe4d397b034d1a449bb1a49->leave($__internal_b87a19385c82ff353dedb1b6a64ae7ed1137ebdc1fe4d397b034d1a449bb1a49_prof);

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
