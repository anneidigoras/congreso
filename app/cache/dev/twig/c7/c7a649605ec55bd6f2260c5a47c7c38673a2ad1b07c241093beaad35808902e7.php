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
        $__internal_9bf74bf3b6057cfe971cc83e59151cd15e9d483d5e6c34bc0837bf58424dc674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bf74bf3b6057cfe971cc83e59151cd15e9d483d5e6c34bc0837bf58424dc674->enter($__internal_9bf74bf3b6057cfe971cc83e59151cd15e9d483d5e6c34bc0837bf58424dc674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bf74bf3b6057cfe971cc83e59151cd15e9d483d5e6c34bc0837bf58424dc674->leave($__internal_9bf74bf3b6057cfe971cc83e59151cd15e9d483d5e6c34bc0837bf58424dc674_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5d76a5117a5b49b6931d9efb76bcada1ae31e68e609a6cfbe1bb9c757723717d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d76a5117a5b49b6931d9efb76bcada1ae31e68e609a6cfbe1bb9c757723717d->enter($__internal_5d76a5117a5b49b6931d9efb76bcada1ae31e68e609a6cfbe1bb9c757723717d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_5d76a5117a5b49b6931d9efb76bcada1ae31e68e609a6cfbe1bb9c757723717d->leave($__internal_5d76a5117a5b49b6931d9efb76bcada1ae31e68e609a6cfbe1bb9c757723717d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_35241e3126e8efb7a91abeb8687e9c2a1e479222372355287cc56daca885e330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35241e3126e8efb7a91abeb8687e9c2a1e479222372355287cc56daca885e330->enter($__internal_35241e3126e8efb7a91abeb8687e9c2a1e479222372355287cc56daca885e330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_35241e3126e8efb7a91abeb8687e9c2a1e479222372355287cc56daca885e330->leave($__internal_35241e3126e8efb7a91abeb8687e9c2a1e479222372355287cc56daca885e330_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f5e9926f00f2c9e05b22938de7dcecd919e6c6fa802e1870732157ff3090ade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f5e9926f00f2c9e05b22938de7dcecd919e6c6fa802e1870732157ff3090ade->enter($__internal_0f5e9926f00f2c9e05b22938de7dcecd919e6c6fa802e1870732157ff3090ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0f5e9926f00f2c9e05b22938de7dcecd919e6c6fa802e1870732157ff3090ade->leave($__internal_0f5e9926f00f2c9e05b22938de7dcecd919e6c6fa802e1870732157ff3090ade_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_16dae9af89020dd0957ee5e4f88e65d93981a8e5909ac85f8946c5e335c00367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16dae9af89020dd0957ee5e4f88e65d93981a8e5909ac85f8946c5e335c00367->enter($__internal_16dae9af89020dd0957ee5e4f88e65d93981a8e5909ac85f8946c5e335c00367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_16dae9af89020dd0957ee5e4f88e65d93981a8e5909ac85f8946c5e335c00367->leave($__internal_16dae9af89020dd0957ee5e4f88e65d93981a8e5909ac85f8946c5e335c00367_prof);

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
