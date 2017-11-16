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
        $__internal_1c759fa74753d199ca93b2416981669b6b3153a35a27b2b02a76235cac1b4cd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c759fa74753d199ca93b2416981669b6b3153a35a27b2b02a76235cac1b4cd3->enter($__internal_1c759fa74753d199ca93b2416981669b6b3153a35a27b2b02a76235cac1b4cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c759fa74753d199ca93b2416981669b6b3153a35a27b2b02a76235cac1b4cd3->leave($__internal_1c759fa74753d199ca93b2416981669b6b3153a35a27b2b02a76235cac1b4cd3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0962c578da8d6614cbb035ca6c3dc5229f97c9cc05eb0e719e97f66a3fd9fd1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0962c578da8d6614cbb035ca6c3dc5229f97c9cc05eb0e719e97f66a3fd9fd1c->enter($__internal_0962c578da8d6614cbb035ca6c3dc5229f97c9cc05eb0e719e97f66a3fd9fd1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_0962c578da8d6614cbb035ca6c3dc5229f97c9cc05eb0e719e97f66a3fd9fd1c->leave($__internal_0962c578da8d6614cbb035ca6c3dc5229f97c9cc05eb0e719e97f66a3fd9fd1c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_36b9ca118c3f437bb9693c0b0ab18549ae276b876c8dc24758ece83118a1d438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36b9ca118c3f437bb9693c0b0ab18549ae276b876c8dc24758ece83118a1d438->enter($__internal_36b9ca118c3f437bb9693c0b0ab18549ae276b876c8dc24758ece83118a1d438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_36b9ca118c3f437bb9693c0b0ab18549ae276b876c8dc24758ece83118a1d438->leave($__internal_36b9ca118c3f437bb9693c0b0ab18549ae276b876c8dc24758ece83118a1d438_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_04f49f4cb6ac76e71c7b0fa143310ca7c733330ca657691a29952afea13e367c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04f49f4cb6ac76e71c7b0fa143310ca7c733330ca657691a29952afea13e367c->enter($__internal_04f49f4cb6ac76e71c7b0fa143310ca7c733330ca657691a29952afea13e367c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_04f49f4cb6ac76e71c7b0fa143310ca7c733330ca657691a29952afea13e367c->leave($__internal_04f49f4cb6ac76e71c7b0fa143310ca7c733330ca657691a29952afea13e367c_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_90da219c11638d8e9ccacd370363ff6f9e5b2aafdb7890238b9058335ea0f15c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90da219c11638d8e9ccacd370363ff6f9e5b2aafdb7890238b9058335ea0f15c->enter($__internal_90da219c11638d8e9ccacd370363ff6f9e5b2aafdb7890238b9058335ea0f15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_90da219c11638d8e9ccacd370363ff6f9e5b2aafdb7890238b9058335ea0f15c->leave($__internal_90da219c11638d8e9ccacd370363ff6f9e5b2aafdb7890238b9058335ea0f15c_prof);

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
