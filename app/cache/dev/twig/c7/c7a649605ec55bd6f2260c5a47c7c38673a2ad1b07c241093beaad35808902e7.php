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
        $__internal_e5548dcba07cc695e05776d97d462c8243be579fbfa075a97b2232acc2308e5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5548dcba07cc695e05776d97d462c8243be579fbfa075a97b2232acc2308e5b->enter($__internal_e5548dcba07cc695e05776d97d462c8243be579fbfa075a97b2232acc2308e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5548dcba07cc695e05776d97d462c8243be579fbfa075a97b2232acc2308e5b->leave($__internal_e5548dcba07cc695e05776d97d462c8243be579fbfa075a97b2232acc2308e5b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cff64b86ac8f93ae41c253671464c74f2699dfa84a0a686a22a0849cbc622151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cff64b86ac8f93ae41c253671464c74f2699dfa84a0a686a22a0849cbc622151->enter($__internal_cff64b86ac8f93ae41c253671464c74f2699dfa84a0a686a22a0849cbc622151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_cff64b86ac8f93ae41c253671464c74f2699dfa84a0a686a22a0849cbc622151->leave($__internal_cff64b86ac8f93ae41c253671464c74f2699dfa84a0a686a22a0849cbc622151_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b8f86cb8b1b36bca932114ff3b967604bacc0e3a5e075f02376116991875eeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b8f86cb8b1b36bca932114ff3b967604bacc0e3a5e075f02376116991875eeb->enter($__internal_2b8f86cb8b1b36bca932114ff3b967604bacc0e3a5e075f02376116991875eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_2b8f86cb8b1b36bca932114ff3b967604bacc0e3a5e075f02376116991875eeb->leave($__internal_2b8f86cb8b1b36bca932114ff3b967604bacc0e3a5e075f02376116991875eeb_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1de9ed9da30416e19cf032980a64fe9c7ab134d809af09c9597e16bb88c0f551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1de9ed9da30416e19cf032980a64fe9c7ab134d809af09c9597e16bb88c0f551->enter($__internal_1de9ed9da30416e19cf032980a64fe9c7ab134d809af09c9597e16bb88c0f551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1de9ed9da30416e19cf032980a64fe9c7ab134d809af09c9597e16bb88c0f551->leave($__internal_1de9ed9da30416e19cf032980a64fe9c7ab134d809af09c9597e16bb88c0f551_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_ebd5ca85cb21536a289302d1838d094ce2a5cef35ce303c90e0907932e013138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebd5ca85cb21536a289302d1838d094ce2a5cef35ce303c90e0907932e013138->enter($__internal_ebd5ca85cb21536a289302d1838d094ce2a5cef35ce303c90e0907932e013138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_ebd5ca85cb21536a289302d1838d094ce2a5cef35ce303c90e0907932e013138->leave($__internal_ebd5ca85cb21536a289302d1838d094ce2a5cef35ce303c90e0907932e013138_prof);

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
