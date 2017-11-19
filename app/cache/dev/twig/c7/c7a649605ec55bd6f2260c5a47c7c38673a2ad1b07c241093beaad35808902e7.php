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
        $__internal_895ff05b7485082b71fd8184c09d8e21a87dd6dde386fa91bf4fa67166d61332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_895ff05b7485082b71fd8184c09d8e21a87dd6dde386fa91bf4fa67166d61332->enter($__internal_895ff05b7485082b71fd8184c09d8e21a87dd6dde386fa91bf4fa67166d61332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_895ff05b7485082b71fd8184c09d8e21a87dd6dde386fa91bf4fa67166d61332->leave($__internal_895ff05b7485082b71fd8184c09d8e21a87dd6dde386fa91bf4fa67166d61332_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_73e1db9421797d3fe6389cd8437056c7403151abe960910aa20fd2a294e85b60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e1db9421797d3fe6389cd8437056c7403151abe960910aa20fd2a294e85b60->enter($__internal_73e1db9421797d3fe6389cd8437056c7403151abe960910aa20fd2a294e85b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_73e1db9421797d3fe6389cd8437056c7403151abe960910aa20fd2a294e85b60->leave($__internal_73e1db9421797d3fe6389cd8437056c7403151abe960910aa20fd2a294e85b60_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab10105928a6955de2a7fe9def17918dc87db7d0f8075db1b8d337530b0d9b5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab10105928a6955de2a7fe9def17918dc87db7d0f8075db1b8d337530b0d9b5f->enter($__internal_ab10105928a6955de2a7fe9def17918dc87db7d0f8075db1b8d337530b0d9b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_ab10105928a6955de2a7fe9def17918dc87db7d0f8075db1b8d337530b0d9b5f->leave($__internal_ab10105928a6955de2a7fe9def17918dc87db7d0f8075db1b8d337530b0d9b5f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e99203d5aca2ceefa7f1c02e8ac6fb8011be48ceab272d436c21afe01fa3d74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e99203d5aca2ceefa7f1c02e8ac6fb8011be48ceab272d436c21afe01fa3d74->enter($__internal_7e99203d5aca2ceefa7f1c02e8ac6fb8011be48ceab272d436c21afe01fa3d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7e99203d5aca2ceefa7f1c02e8ac6fb8011be48ceab272d436c21afe01fa3d74->leave($__internal_7e99203d5aca2ceefa7f1c02e8ac6fb8011be48ceab272d436c21afe01fa3d74_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_56187faca13ddb12a4269beee1ff6e011a66e53e0f4fcc96380661844ba0944a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56187faca13ddb12a4269beee1ff6e011a66e53e0f4fcc96380661844ba0944a->enter($__internal_56187faca13ddb12a4269beee1ff6e011a66e53e0f4fcc96380661844ba0944a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_56187faca13ddb12a4269beee1ff6e011a66e53e0f4fcc96380661844ba0944a->leave($__internal_56187faca13ddb12a4269beee1ff6e011a66e53e0f4fcc96380661844ba0944a_prof);

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
