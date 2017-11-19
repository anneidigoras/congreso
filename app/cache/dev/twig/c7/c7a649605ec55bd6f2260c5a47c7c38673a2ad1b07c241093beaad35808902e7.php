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
        $__internal_08b7aae677059ade523e2aeb46f1c302c2fca72456661188f64123056655c4d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08b7aae677059ade523e2aeb46f1c302c2fca72456661188f64123056655c4d6->enter($__internal_08b7aae677059ade523e2aeb46f1c302c2fca72456661188f64123056655c4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08b7aae677059ade523e2aeb46f1c302c2fca72456661188f64123056655c4d6->leave($__internal_08b7aae677059ade523e2aeb46f1c302c2fca72456661188f64123056655c4d6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7a312ac9ac85cefd87038f401421bab01eefaa6ae8910bcd1c78dd1ae6bf627b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a312ac9ac85cefd87038f401421bab01eefaa6ae8910bcd1c78dd1ae6bf627b->enter($__internal_7a312ac9ac85cefd87038f401421bab01eefaa6ae8910bcd1c78dd1ae6bf627b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_7a312ac9ac85cefd87038f401421bab01eefaa6ae8910bcd1c78dd1ae6bf627b->leave($__internal_7a312ac9ac85cefd87038f401421bab01eefaa6ae8910bcd1c78dd1ae6bf627b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c92ab12e1982f34c7d56401a217bdf14142efbba8ad962545b3ac7bd412562b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c92ab12e1982f34c7d56401a217bdf14142efbba8ad962545b3ac7bd412562b->enter($__internal_6c92ab12e1982f34c7d56401a217bdf14142efbba8ad962545b3ac7bd412562b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_6c92ab12e1982f34c7d56401a217bdf14142efbba8ad962545b3ac7bd412562b->leave($__internal_6c92ab12e1982f34c7d56401a217bdf14142efbba8ad962545b3ac7bd412562b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb0339c27303ea7990d33d8080b0f3602909966df682791a6a7d8382486c856d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb0339c27303ea7990d33d8080b0f3602909966df682791a6a7d8382486c856d->enter($__internal_fb0339c27303ea7990d33d8080b0f3602909966df682791a6a7d8382486c856d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fb0339c27303ea7990d33d8080b0f3602909966df682791a6a7d8382486c856d->leave($__internal_fb0339c27303ea7990d33d8080b0f3602909966df682791a6a7d8382486c856d_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_ee92e9f49979f1ab669efc5221de22ebe3108365977530eb41675a9951b5db10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee92e9f49979f1ab669efc5221de22ebe3108365977530eb41675a9951b5db10->enter($__internal_ee92e9f49979f1ab669efc5221de22ebe3108365977530eb41675a9951b5db10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_ee92e9f49979f1ab669efc5221de22ebe3108365977530eb41675a9951b5db10->leave($__internal_ee92e9f49979f1ab669efc5221de22ebe3108365977530eb41675a9951b5db10_prof);

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
