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
        $__internal_22b59798150eb9c75750a15a1c91cfe24b3f52cd4b66b9901b5721d29865f461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22b59798150eb9c75750a15a1c91cfe24b3f52cd4b66b9901b5721d29865f461->enter($__internal_22b59798150eb9c75750a15a1c91cfe24b3f52cd4b66b9901b5721d29865f461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22b59798150eb9c75750a15a1c91cfe24b3f52cd4b66b9901b5721d29865f461->leave($__internal_22b59798150eb9c75750a15a1c91cfe24b3f52cd4b66b9901b5721d29865f461_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e11d70a599e5652b83ec01c7641550b33ae85925081730166a6fa79b8a9a1a0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e11d70a599e5652b83ec01c7641550b33ae85925081730166a6fa79b8a9a1a0a->enter($__internal_e11d70a599e5652b83ec01c7641550b33ae85925081730166a6fa79b8a9a1a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_e11d70a599e5652b83ec01c7641550b33ae85925081730166a6fa79b8a9a1a0a->leave($__internal_e11d70a599e5652b83ec01c7641550b33ae85925081730166a6fa79b8a9a1a0a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_70011cc7c44a9253f5c0017b0cee91ee45acdc3984af7db37b4802be7b1ae136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70011cc7c44a9253f5c0017b0cee91ee45acdc3984af7db37b4802be7b1ae136->enter($__internal_70011cc7c44a9253f5c0017b0cee91ee45acdc3984af7db37b4802be7b1ae136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_70011cc7c44a9253f5c0017b0cee91ee45acdc3984af7db37b4802be7b1ae136->leave($__internal_70011cc7c44a9253f5c0017b0cee91ee45acdc3984af7db37b4802be7b1ae136_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_576451374346d786b9ba4eda47e8e2846f212fb9a74ed0b4e2a72a1c5c7a5d91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_576451374346d786b9ba4eda47e8e2846f212fb9a74ed0b4e2a72a1c5c7a5d91->enter($__internal_576451374346d786b9ba4eda47e8e2846f212fb9a74ed0b4e2a72a1c5c7a5d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_576451374346d786b9ba4eda47e8e2846f212fb9a74ed0b4e2a72a1c5c7a5d91->leave($__internal_576451374346d786b9ba4eda47e8e2846f212fb9a74ed0b4e2a72a1c5c7a5d91_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_4b5c73dc664ea37f8adf2f514e3fd5cac0825724143a205ac58e6b42ae360d19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b5c73dc664ea37f8adf2f514e3fd5cac0825724143a205ac58e6b42ae360d19->enter($__internal_4b5c73dc664ea37f8adf2f514e3fd5cac0825724143a205ac58e6b42ae360d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_4b5c73dc664ea37f8adf2f514e3fd5cac0825724143a205ac58e6b42ae360d19->leave($__internal_4b5c73dc664ea37f8adf2f514e3fd5cac0825724143a205ac58e6b42ae360d19_prof);

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
