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
        $__internal_ab7c6008289d93cc8ea84081642f48682c36827728737e5c1ba2ef652939dac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab7c6008289d93cc8ea84081642f48682c36827728737e5c1ba2ef652939dac5->enter($__internal_ab7c6008289d93cc8ea84081642f48682c36827728737e5c1ba2ef652939dac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab7c6008289d93cc8ea84081642f48682c36827728737e5c1ba2ef652939dac5->leave($__internal_ab7c6008289d93cc8ea84081642f48682c36827728737e5c1ba2ef652939dac5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7052baf1dcbbd995d23f892d4d7bfe22b186c87a6fcb14e8194f9a58ab6735ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7052baf1dcbbd995d23f892d4d7bfe22b186c87a6fcb14e8194f9a58ab6735ca->enter($__internal_7052baf1dcbbd995d23f892d4d7bfe22b186c87a6fcb14e8194f9a58ab6735ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_7052baf1dcbbd995d23f892d4d7bfe22b186c87a6fcb14e8194f9a58ab6735ca->leave($__internal_7052baf1dcbbd995d23f892d4d7bfe22b186c87a6fcb14e8194f9a58ab6735ca_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1ff1965c1b0884da244d15cf367eea94061919c2acfb4031a86a339a3539bcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1ff1965c1b0884da244d15cf367eea94061919c2acfb4031a86a339a3539bcf->enter($__internal_a1ff1965c1b0884da244d15cf367eea94061919c2acfb4031a86a339a3539bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_a1ff1965c1b0884da244d15cf367eea94061919c2acfb4031a86a339a3539bcf->leave($__internal_a1ff1965c1b0884da244d15cf367eea94061919c2acfb4031a86a339a3539bcf_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b1e3ba886c7d6bd27e991df523de41a1cbccf982d5dfd3627c774032aaa671f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b1e3ba886c7d6bd27e991df523de41a1cbccf982d5dfd3627c774032aaa671f->enter($__internal_9b1e3ba886c7d6bd27e991df523de41a1cbccf982d5dfd3627c774032aaa671f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9b1e3ba886c7d6bd27e991df523de41a1cbccf982d5dfd3627c774032aaa671f->leave($__internal_9b1e3ba886c7d6bd27e991df523de41a1cbccf982d5dfd3627c774032aaa671f_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_bab470a43765be7f7906c39393c55ab181b4a3ef80544197571e1eb6f1550fb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bab470a43765be7f7906c39393c55ab181b4a3ef80544197571e1eb6f1550fb3->enter($__internal_bab470a43765be7f7906c39393c55ab181b4a3ef80544197571e1eb6f1550fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_bab470a43765be7f7906c39393c55ab181b4a3ef80544197571e1eb6f1550fb3->leave($__internal_bab470a43765be7f7906c39393c55ab181b4a3ef80544197571e1eb6f1550fb3_prof);

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
