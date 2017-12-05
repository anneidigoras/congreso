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
        $__internal_4c28f20e76f61db364890c8c97f235d7bebe1e4c088e9ea3918279f47b4b601e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c28f20e76f61db364890c8c97f235d7bebe1e4c088e9ea3918279f47b4b601e->enter($__internal_4c28f20e76f61db364890c8c97f235d7bebe1e4c088e9ea3918279f47b4b601e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c28f20e76f61db364890c8c97f235d7bebe1e4c088e9ea3918279f47b4b601e->leave($__internal_4c28f20e76f61db364890c8c97f235d7bebe1e4c088e9ea3918279f47b4b601e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1628b06529caa2bc8a95d71ca2be87b3a6de5a09a75d7cfc264ee12636bae753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1628b06529caa2bc8a95d71ca2be87b3a6de5a09a75d7cfc264ee12636bae753->enter($__internal_1628b06529caa2bc8a95d71ca2be87b3a6de5a09a75d7cfc264ee12636bae753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_1628b06529caa2bc8a95d71ca2be87b3a6de5a09a75d7cfc264ee12636bae753->leave($__internal_1628b06529caa2bc8a95d71ca2be87b3a6de5a09a75d7cfc264ee12636bae753_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1fe10e3549c37a35ccff429d3d86adbbd86976873a5ff9863cacfd8e28f88531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fe10e3549c37a35ccff429d3d86adbbd86976873a5ff9863cacfd8e28f88531->enter($__internal_1fe10e3549c37a35ccff429d3d86adbbd86976873a5ff9863cacfd8e28f88531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_1fe10e3549c37a35ccff429d3d86adbbd86976873a5ff9863cacfd8e28f88531->leave($__internal_1fe10e3549c37a35ccff429d3d86adbbd86976873a5ff9863cacfd8e28f88531_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf7659be598bc4e9eb4a3cb2c23030cd004245dd4ebc61a667b59a8424af903c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf7659be598bc4e9eb4a3cb2c23030cd004245dd4ebc61a667b59a8424af903c->enter($__internal_cf7659be598bc4e9eb4a3cb2c23030cd004245dd4ebc61a667b59a8424af903c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cf7659be598bc4e9eb4a3cb2c23030cd004245dd4ebc61a667b59a8424af903c->leave($__internal_cf7659be598bc4e9eb4a3cb2c23030cd004245dd4ebc61a667b59a8424af903c_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_ab39c82a22e5af80c7e4abf591ac25e7b7f0c9cb04eddef116c332d8f8878411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab39c82a22e5af80c7e4abf591ac25e7b7f0c9cb04eddef116c332d8f8878411->enter($__internal_ab39c82a22e5af80c7e4abf591ac25e7b7f0c9cb04eddef116c332d8f8878411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_ab39c82a22e5af80c7e4abf591ac25e7b7f0c9cb04eddef116c332d8f8878411->leave($__internal_ab39c82a22e5af80c7e4abf591ac25e7b7f0c9cb04eddef116c332d8f8878411_prof);

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
