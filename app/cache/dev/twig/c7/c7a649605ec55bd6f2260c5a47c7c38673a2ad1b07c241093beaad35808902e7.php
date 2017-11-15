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
        $__internal_0bbeba8709e49d7ccd6d3cf5bc40b3782d6ec0dff48dc36c3fbffe33c621ea0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bbeba8709e49d7ccd6d3cf5bc40b3782d6ec0dff48dc36c3fbffe33c621ea0d->enter($__internal_0bbeba8709e49d7ccd6d3cf5bc40b3782d6ec0dff48dc36c3fbffe33c621ea0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bbeba8709e49d7ccd6d3cf5bc40b3782d6ec0dff48dc36c3fbffe33c621ea0d->leave($__internal_0bbeba8709e49d7ccd6d3cf5bc40b3782d6ec0dff48dc36c3fbffe33c621ea0d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_76f0dab02dd12a218c7127b0ece9203d2bed614d9a8d7c1613990fa9d47f4619 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76f0dab02dd12a218c7127b0ece9203d2bed614d9a8d7c1613990fa9d47f4619->enter($__internal_76f0dab02dd12a218c7127b0ece9203d2bed614d9a8d7c1613990fa9d47f4619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_76f0dab02dd12a218c7127b0ece9203d2bed614d9a8d7c1613990fa9d47f4619->leave($__internal_76f0dab02dd12a218c7127b0ece9203d2bed614d9a8d7c1613990fa9d47f4619_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e296ebc7b39f25d999c42ed8a24cda57f21342125de872a2aa29daa6f679a679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e296ebc7b39f25d999c42ed8a24cda57f21342125de872a2aa29daa6f679a679->enter($__internal_e296ebc7b39f25d999c42ed8a24cda57f21342125de872a2aa29daa6f679a679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_e296ebc7b39f25d999c42ed8a24cda57f21342125de872a2aa29daa6f679a679->leave($__internal_e296ebc7b39f25d999c42ed8a24cda57f21342125de872a2aa29daa6f679a679_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e63ad2e44bec5c046d9867f1cff9e4d9349f9eb3ddd0c7ef24ef9aca2224630e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e63ad2e44bec5c046d9867f1cff9e4d9349f9eb3ddd0c7ef24ef9aca2224630e->enter($__internal_e63ad2e44bec5c046d9867f1cff9e4d9349f9eb3ddd0c7ef24ef9aca2224630e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e63ad2e44bec5c046d9867f1cff9e4d9349f9eb3ddd0c7ef24ef9aca2224630e->leave($__internal_e63ad2e44bec5c046d9867f1cff9e4d9349f9eb3ddd0c7ef24ef9aca2224630e_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_26644e08c8f26eaad59549680358cfdbd69a76e1f008d1a27f52a70f702f75c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26644e08c8f26eaad59549680358cfdbd69a76e1f008d1a27f52a70f702f75c4->enter($__internal_26644e08c8f26eaad59549680358cfdbd69a76e1f008d1a27f52a70f702f75c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_26644e08c8f26eaad59549680358cfdbd69a76e1f008d1a27f52a70f702f75c4->leave($__internal_26644e08c8f26eaad59549680358cfdbd69a76e1f008d1a27f52a70f702f75c4_prof);

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
