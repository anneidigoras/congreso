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
        $__internal_91a4f3c8d3512084ce72c8e75c0d2637bbe46e9d50c919c4b8d29e8e9b0970df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91a4f3c8d3512084ce72c8e75c0d2637bbe46e9d50c919c4b8d29e8e9b0970df->enter($__internal_91a4f3c8d3512084ce72c8e75c0d2637bbe46e9d50c919c4b8d29e8e9b0970df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91a4f3c8d3512084ce72c8e75c0d2637bbe46e9d50c919c4b8d29e8e9b0970df->leave($__internal_91a4f3c8d3512084ce72c8e75c0d2637bbe46e9d50c919c4b8d29e8e9b0970df_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_61071827224c43c845bf5feaafeaaceedf57442fec1db68c261596b6ade704be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61071827224c43c845bf5feaafeaaceedf57442fec1db68c261596b6ade704be->enter($__internal_61071827224c43c845bf5feaafeaaceedf57442fec1db68c261596b6ade704be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_61071827224c43c845bf5feaafeaaceedf57442fec1db68c261596b6ade704be->leave($__internal_61071827224c43c845bf5feaafeaaceedf57442fec1db68c261596b6ade704be_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9be81f4bf3984ba0162f9e0d086fefebbc3620294f9d9c28bd944aac2a5f7842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9be81f4bf3984ba0162f9e0d086fefebbc3620294f9d9c28bd944aac2a5f7842->enter($__internal_9be81f4bf3984ba0162f9e0d086fefebbc3620294f9d9c28bd944aac2a5f7842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_9be81f4bf3984ba0162f9e0d086fefebbc3620294f9d9c28bd944aac2a5f7842->leave($__internal_9be81f4bf3984ba0162f9e0d086fefebbc3620294f9d9c28bd944aac2a5f7842_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6272e97c7abcbf9bc0fb6802bc19d77b38c03324ccb9ad265d427f9baac06af6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6272e97c7abcbf9bc0fb6802bc19d77b38c03324ccb9ad265d427f9baac06af6->enter($__internal_6272e97c7abcbf9bc0fb6802bc19d77b38c03324ccb9ad265d427f9baac06af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6272e97c7abcbf9bc0fb6802bc19d77b38c03324ccb9ad265d427f9baac06af6->leave($__internal_6272e97c7abcbf9bc0fb6802bc19d77b38c03324ccb9ad265d427f9baac06af6_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_b88d1a421e355eed8e5afa80a60e9768ba9fe582be5e82559166bc17ccd880d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b88d1a421e355eed8e5afa80a60e9768ba9fe582be5e82559166bc17ccd880d2->enter($__internal_b88d1a421e355eed8e5afa80a60e9768ba9fe582be5e82559166bc17ccd880d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_b88d1a421e355eed8e5afa80a60e9768ba9fe582be5e82559166bc17ccd880d2->leave($__internal_b88d1a421e355eed8e5afa80a60e9768ba9fe582be5e82559166bc17ccd880d2_prof);

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
