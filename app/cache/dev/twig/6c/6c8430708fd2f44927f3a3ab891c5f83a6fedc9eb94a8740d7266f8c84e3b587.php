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
        $__internal_d3b3d9347166b256efa7c1296e55d922835796f7079d0498796648f4e953c31a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b3d9347166b256efa7c1296e55d922835796f7079d0498796648f4e953c31a->enter($__internal_d3b3d9347166b256efa7c1296e55d922835796f7079d0498796648f4e953c31a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3b3d9347166b256efa7c1296e55d922835796f7079d0498796648f4e953c31a->leave($__internal_d3b3d9347166b256efa7c1296e55d922835796f7079d0498796648f4e953c31a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f3057a3386341b80b9b181efa17e252ec5101fefb3968de8bac81e243b94f020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3057a3386341b80b9b181efa17e252ec5101fefb3968de8bac81e243b94f020->enter($__internal_f3057a3386341b80b9b181efa17e252ec5101fefb3968de8bac81e243b94f020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_f3057a3386341b80b9b181efa17e252ec5101fefb3968de8bac81e243b94f020->leave($__internal_f3057a3386341b80b9b181efa17e252ec5101fefb3968de8bac81e243b94f020_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3fd2762b4c0a44ed4bd92ebbe2a4e48e4144e89c9d82313f9f206c7bd0480835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fd2762b4c0a44ed4bd92ebbe2a4e48e4144e89c9d82313f9f206c7bd0480835->enter($__internal_3fd2762b4c0a44ed4bd92ebbe2a4e48e4144e89c9d82313f9f206c7bd0480835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_3fd2762b4c0a44ed4bd92ebbe2a4e48e4144e89c9d82313f9f206c7bd0480835->leave($__internal_3fd2762b4c0a44ed4bd92ebbe2a4e48e4144e89c9d82313f9f206c7bd0480835_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c9636f5e73939b5f3507e7594c00f27937ae8e04602dc67eb21774476233f39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c9636f5e73939b5f3507e7594c00f27937ae8e04602dc67eb21774476233f39->enter($__internal_4c9636f5e73939b5f3507e7594c00f27937ae8e04602dc67eb21774476233f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4c9636f5e73939b5f3507e7594c00f27937ae8e04602dc67eb21774476233f39->leave($__internal_4c9636f5e73939b5f3507e7594c00f27937ae8e04602dc67eb21774476233f39_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_61e26ad4b1b8b871189aa0de5822113d60553f49de1909ff4587237bd2e71575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61e26ad4b1b8b871189aa0de5822113d60553f49de1909ff4587237bd2e71575->enter($__internal_61e26ad4b1b8b871189aa0de5822113d60553f49de1909ff4587237bd2e71575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_61e26ad4b1b8b871189aa0de5822113d60553f49de1909ff4587237bd2e71575->leave($__internal_61e26ad4b1b8b871189aa0de5822113d60553f49de1909ff4587237bd2e71575_prof);

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
