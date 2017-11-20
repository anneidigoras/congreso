<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_bcd68bcfce815450f95b685f94438cd4d130ccd92c8a95e77deedaef1d28e101 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6103ecb6bc17095c5a75341601b2151d880389669fa4c1acb47d9b88d69c3943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6103ecb6bc17095c5a75341601b2151d880389669fa4c1acb47d9b88d69c3943->enter($__internal_6103ecb6bc17095c5a75341601b2151d880389669fa4c1acb47d9b88d69c3943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6103ecb6bc17095c5a75341601b2151d880389669fa4c1acb47d9b88d69c3943->leave($__internal_6103ecb6bc17095c5a75341601b2151d880389669fa4c1acb47d9b88d69c3943_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7ca45d9665c96fa4aebd5d987ce6e6dee0f0e3b7a2b8d28986e6f1c99c169082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ca45d9665c96fa4aebd5d987ce6e6dee0f0e3b7a2b8d28986e6f1c99c169082->enter($__internal_7ca45d9665c96fa4aebd5d987ce6e6dee0f0e3b7a2b8d28986e6f1c99c169082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7ca45d9665c96fa4aebd5d987ce6e6dee0f0e3b7a2b8d28986e6f1c99c169082->leave($__internal_7ca45d9665c96fa4aebd5d987ce6e6dee0f0e3b7a2b8d28986e6f1c99c169082_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed994f7db04d39f631b1e1e1b453087b775f96452104c5d8e4fb733869d0dfcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed994f7db04d39f631b1e1e1b453087b775f96452104c5d8e4fb733869d0dfcc->enter($__internal_ed994f7db04d39f631b1e1e1b453087b775f96452104c5d8e4fb733869d0dfcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ed994f7db04d39f631b1e1e1b453087b775f96452104c5d8e4fb733869d0dfcc->leave($__internal_ed994f7db04d39f631b1e1e1b453087b775f96452104c5d8e4fb733869d0dfcc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_394328c1f4a8fff21603f6ae5e49d725723ba80fb5d047ca08956c04fd32bf0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_394328c1f4a8fff21603f6ae5e49d725723ba80fb5d047ca08956c04fd32bf0b->enter($__internal_394328c1f4a8fff21603f6ae5e49d725723ba80fb5d047ca08956c04fd32bf0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_394328c1f4a8fff21603f6ae5e49d725723ba80fb5d047ca08956c04fd32bf0b->leave($__internal_394328c1f4a8fff21603f6ae5e49d725723ba80fb5d047ca08956c04fd32bf0b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
