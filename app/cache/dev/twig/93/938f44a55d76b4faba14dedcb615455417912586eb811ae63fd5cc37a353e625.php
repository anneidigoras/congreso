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
        $__internal_9558dea533c7dab1bd70a9c282c8ee3ac4f336298c1c70f7689c491fcb332097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9558dea533c7dab1bd70a9c282c8ee3ac4f336298c1c70f7689c491fcb332097->enter($__internal_9558dea533c7dab1bd70a9c282c8ee3ac4f336298c1c70f7689c491fcb332097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9558dea533c7dab1bd70a9c282c8ee3ac4f336298c1c70f7689c491fcb332097->leave($__internal_9558dea533c7dab1bd70a9c282c8ee3ac4f336298c1c70f7689c491fcb332097_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_20b908d9e5d3d8da4a24446859afc93bd9d517fe6532383a4c6a996a3148f01e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20b908d9e5d3d8da4a24446859afc93bd9d517fe6532383a4c6a996a3148f01e->enter($__internal_20b908d9e5d3d8da4a24446859afc93bd9d517fe6532383a4c6a996a3148f01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_20b908d9e5d3d8da4a24446859afc93bd9d517fe6532383a4c6a996a3148f01e->leave($__internal_20b908d9e5d3d8da4a24446859afc93bd9d517fe6532383a4c6a996a3148f01e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f20ca96f2449d51866ac3e8f3819e777d06161a9935f5cc67d5989b66155efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f20ca96f2449d51866ac3e8f3819e777d06161a9935f5cc67d5989b66155efd->enter($__internal_1f20ca96f2449d51866ac3e8f3819e777d06161a9935f5cc67d5989b66155efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_1f20ca96f2449d51866ac3e8f3819e777d06161a9935f5cc67d5989b66155efd->leave($__internal_1f20ca96f2449d51866ac3e8f3819e777d06161a9935f5cc67d5989b66155efd_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_748f23a42939cc45f1f5a2389731931f40110f6d35c8f7fc15c50988baf6ffe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_748f23a42939cc45f1f5a2389731931f40110f6d35c8f7fc15c50988baf6ffe8->enter($__internal_748f23a42939cc45f1f5a2389731931f40110f6d35c8f7fc15c50988baf6ffe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_748f23a42939cc45f1f5a2389731931f40110f6d35c8f7fc15c50988baf6ffe8->leave($__internal_748f23a42939cc45f1f5a2389731931f40110f6d35c8f7fc15c50988baf6ffe8_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_eb69493e74bcacd3501d8ae8e26dc6faf78780d583e61b5fed4962b043a8e461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb69493e74bcacd3501d8ae8e26dc6faf78780d583e61b5fed4962b043a8e461->enter($__internal_eb69493e74bcacd3501d8ae8e26dc6faf78780d583e61b5fed4962b043a8e461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_eb69493e74bcacd3501d8ae8e26dc6faf78780d583e61b5fed4962b043a8e461->leave($__internal_eb69493e74bcacd3501d8ae8e26dc6faf78780d583e61b5fed4962b043a8e461_prof);

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
