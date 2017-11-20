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
        $__internal_d09b4ed5b0d7a9156e6d60fca59d10d1604c027d21dc1e15836e51275937b498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d09b4ed5b0d7a9156e6d60fca59d10d1604c027d21dc1e15836e51275937b498->enter($__internal_d09b4ed5b0d7a9156e6d60fca59d10d1604c027d21dc1e15836e51275937b498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d09b4ed5b0d7a9156e6d60fca59d10d1604c027d21dc1e15836e51275937b498->leave($__internal_d09b4ed5b0d7a9156e6d60fca59d10d1604c027d21dc1e15836e51275937b498_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_76b82c903a927e7a275bfb018e250b369ade2a621c38082d692be250782033fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76b82c903a927e7a275bfb018e250b369ade2a621c38082d692be250782033fb->enter($__internal_76b82c903a927e7a275bfb018e250b369ade2a621c38082d692be250782033fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_76b82c903a927e7a275bfb018e250b369ade2a621c38082d692be250782033fb->leave($__internal_76b82c903a927e7a275bfb018e250b369ade2a621c38082d692be250782033fb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b6b6554f3e70e95bed10224478d33b230a3db972f3ec10d3c875ff934108bd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b6b6554f3e70e95bed10224478d33b230a3db972f3ec10d3c875ff934108bd1->enter($__internal_9b6b6554f3e70e95bed10224478d33b230a3db972f3ec10d3c875ff934108bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_9b6b6554f3e70e95bed10224478d33b230a3db972f3ec10d3c875ff934108bd1->leave($__internal_9b6b6554f3e70e95bed10224478d33b230a3db972f3ec10d3c875ff934108bd1_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5296b70d9506cf0c25866c06a26e4f95822c7fb6b069bcdc81cc6ab4199abb0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5296b70d9506cf0c25866c06a26e4f95822c7fb6b069bcdc81cc6ab4199abb0f->enter($__internal_5296b70d9506cf0c25866c06a26e4f95822c7fb6b069bcdc81cc6ab4199abb0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5296b70d9506cf0c25866c06a26e4f95822c7fb6b069bcdc81cc6ab4199abb0f->leave($__internal_5296b70d9506cf0c25866c06a26e4f95822c7fb6b069bcdc81cc6ab4199abb0f_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_bd530ca826b2ca36fc68b89c701be12f10f915cdaf62c65eddafab9ae56f326a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd530ca826b2ca36fc68b89c701be12f10f915cdaf62c65eddafab9ae56f326a->enter($__internal_bd530ca826b2ca36fc68b89c701be12f10f915cdaf62c65eddafab9ae56f326a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_bd530ca826b2ca36fc68b89c701be12f10f915cdaf62c65eddafab9ae56f326a->leave($__internal_bd530ca826b2ca36fc68b89c701be12f10f915cdaf62c65eddafab9ae56f326a_prof);

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
