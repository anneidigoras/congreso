<?php

/* @SensioDistribution/Configurator/layout.html.twig */
class __TwigTemplate_9c591f7752e12960e66c9d089d1fea62b11cd33c8cecf47955510b8299081b91 extends Twig_Template
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
        $__internal_331e840969628d651f4f53597fe2b64b6d5946fd9395e7e2cb9ccf6912e4fdf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_331e840969628d651f4f53597fe2b64b6d5946fd9395e7e2cb9ccf6912e4fdf1->enter($__internal_331e840969628d651f4f53597fe2b64b6d5946fd9395e7e2cb9ccf6912e4fdf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_331e840969628d651f4f53597fe2b64b6d5946fd9395e7e2cb9ccf6912e4fdf1->leave($__internal_331e840969628d651f4f53597fe2b64b6d5946fd9395e7e2cb9ccf6912e4fdf1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8d3b326fbcefbac17262ebb65fff91bd7d8c299aa91d613153601090e55b5acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d3b326fbcefbac17262ebb65fff91bd7d8c299aa91d613153601090e55b5acb->enter($__internal_8d3b326fbcefbac17262ebb65fff91bd7d8c299aa91d613153601090e55b5acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_8d3b326fbcefbac17262ebb65fff91bd7d8c299aa91d613153601090e55b5acb->leave($__internal_8d3b326fbcefbac17262ebb65fff91bd7d8c299aa91d613153601090e55b5acb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa5f9fe96f9222a91350cc971502a6d227fdc73504fcd6ecfd621ba55f01e9a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa5f9fe96f9222a91350cc971502a6d227fdc73504fcd6ecfd621ba55f01e9a2->enter($__internal_fa5f9fe96f9222a91350cc971502a6d227fdc73504fcd6ecfd621ba55f01e9a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_fa5f9fe96f9222a91350cc971502a6d227fdc73504fcd6ecfd621ba55f01e9a2->leave($__internal_fa5f9fe96f9222a91350cc971502a6d227fdc73504fcd6ecfd621ba55f01e9a2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc64064493a884b78507d6d724236ece2839b6c04e5f32c540c2e1a9cd41a493 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc64064493a884b78507d6d724236ece2839b6c04e5f32c540c2e1a9cd41a493->enter($__internal_bc64064493a884b78507d6d724236ece2839b6c04e5f32c540c2e1a9cd41a493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bc64064493a884b78507d6d724236ece2839b6c04e5f32c540c2e1a9cd41a493->leave($__internal_bc64064493a884b78507d6d724236ece2839b6c04e5f32c540c2e1a9cd41a493_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_533b2f85ee371d6baa071f6e03d9745c3ce392cbdbd88c02a33bd6268f2274db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_533b2f85ee371d6baa071f6e03d9745c3ce392cbdbd88c02a33bd6268f2274db->enter($__internal_533b2f85ee371d6baa071f6e03d9745c3ce392cbdbd88c02a33bd6268f2274db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_533b2f85ee371d6baa071f6e03d9745c3ce392cbdbd88c02a33bd6268f2274db->leave($__internal_533b2f85ee371d6baa071f6e03d9745c3ce392cbdbd88c02a33bd6268f2274db_prof);

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
