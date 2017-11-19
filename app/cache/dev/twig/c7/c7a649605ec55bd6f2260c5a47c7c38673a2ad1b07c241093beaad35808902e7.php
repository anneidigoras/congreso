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
        $__internal_77e633bad98ada3614dd99c0f5711bc0e0bb60078d1100ffb52a3881c31a4352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77e633bad98ada3614dd99c0f5711bc0e0bb60078d1100ffb52a3881c31a4352->enter($__internal_77e633bad98ada3614dd99c0f5711bc0e0bb60078d1100ffb52a3881c31a4352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77e633bad98ada3614dd99c0f5711bc0e0bb60078d1100ffb52a3881c31a4352->leave($__internal_77e633bad98ada3614dd99c0f5711bc0e0bb60078d1100ffb52a3881c31a4352_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7bd3b9e1e1162b1fbdda5ff9d64cdb993b3c9b3a52a4f089b019aae825b58427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bd3b9e1e1162b1fbdda5ff9d64cdb993b3c9b3a52a4f089b019aae825b58427->enter($__internal_7bd3b9e1e1162b1fbdda5ff9d64cdb993b3c9b3a52a4f089b019aae825b58427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_7bd3b9e1e1162b1fbdda5ff9d64cdb993b3c9b3a52a4f089b019aae825b58427->leave($__internal_7bd3b9e1e1162b1fbdda5ff9d64cdb993b3c9b3a52a4f089b019aae825b58427_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_15c9253e6a0b438d2c7a8d89ec8bf12fff65c545e86942c0f27a9745fb5b719d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15c9253e6a0b438d2c7a8d89ec8bf12fff65c545e86942c0f27a9745fb5b719d->enter($__internal_15c9253e6a0b438d2c7a8d89ec8bf12fff65c545e86942c0f27a9745fb5b719d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_15c9253e6a0b438d2c7a8d89ec8bf12fff65c545e86942c0f27a9745fb5b719d->leave($__internal_15c9253e6a0b438d2c7a8d89ec8bf12fff65c545e86942c0f27a9745fb5b719d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3132fe1c1caba3e9f0a0d9ed74fea898fd3e38fada4107822be39dd977b1e2e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3132fe1c1caba3e9f0a0d9ed74fea898fd3e38fada4107822be39dd977b1e2e5->enter($__internal_3132fe1c1caba3e9f0a0d9ed74fea898fd3e38fada4107822be39dd977b1e2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3132fe1c1caba3e9f0a0d9ed74fea898fd3e38fada4107822be39dd977b1e2e5->leave($__internal_3132fe1c1caba3e9f0a0d9ed74fea898fd3e38fada4107822be39dd977b1e2e5_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_686fdc3ad7a7a1ace3598ee7b0146c411ed565974cf7b375cb815aad8e6eb0fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_686fdc3ad7a7a1ace3598ee7b0146c411ed565974cf7b375cb815aad8e6eb0fb->enter($__internal_686fdc3ad7a7a1ace3598ee7b0146c411ed565974cf7b375cb815aad8e6eb0fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_686fdc3ad7a7a1ace3598ee7b0146c411ed565974cf7b375cb815aad8e6eb0fb->leave($__internal_686fdc3ad7a7a1ace3598ee7b0146c411ed565974cf7b375cb815aad8e6eb0fb_prof);

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
