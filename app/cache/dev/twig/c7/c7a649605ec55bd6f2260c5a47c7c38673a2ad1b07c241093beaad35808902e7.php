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
        $__internal_0d1088c45ad8a477caee6622d5655bdbafbae7033f7806ad5383e73ef77e4218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d1088c45ad8a477caee6622d5655bdbafbae7033f7806ad5383e73ef77e4218->enter($__internal_0d1088c45ad8a477caee6622d5655bdbafbae7033f7806ad5383e73ef77e4218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d1088c45ad8a477caee6622d5655bdbafbae7033f7806ad5383e73ef77e4218->leave($__internal_0d1088c45ad8a477caee6622d5655bdbafbae7033f7806ad5383e73ef77e4218_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8ac8a432dea66b9980955d80c5d02e997d1f5d785933cf35424189c0c1f20585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac8a432dea66b9980955d80c5d02e997d1f5d785933cf35424189c0c1f20585->enter($__internal_8ac8a432dea66b9980955d80c5d02e997d1f5d785933cf35424189c0c1f20585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_8ac8a432dea66b9980955d80c5d02e997d1f5d785933cf35424189c0c1f20585->leave($__internal_8ac8a432dea66b9980955d80c5d02e997d1f5d785933cf35424189c0c1f20585_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9884a007f1c4d67f1b8cfd91f90919eda4f1eef205517d7c8672ea5ea369a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9884a007f1c4d67f1b8cfd91f90919eda4f1eef205517d7c8672ea5ea369a52->enter($__internal_a9884a007f1c4d67f1b8cfd91f90919eda4f1eef205517d7c8672ea5ea369a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_a9884a007f1c4d67f1b8cfd91f90919eda4f1eef205517d7c8672ea5ea369a52->leave($__internal_a9884a007f1c4d67f1b8cfd91f90919eda4f1eef205517d7c8672ea5ea369a52_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_809bb2243b0462fc7992e17ffcbe400e964587b448b3c18d2eb41e4e2327144a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_809bb2243b0462fc7992e17ffcbe400e964587b448b3c18d2eb41e4e2327144a->enter($__internal_809bb2243b0462fc7992e17ffcbe400e964587b448b3c18d2eb41e4e2327144a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_809bb2243b0462fc7992e17ffcbe400e964587b448b3c18d2eb41e4e2327144a->leave($__internal_809bb2243b0462fc7992e17ffcbe400e964587b448b3c18d2eb41e4e2327144a_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_2b5d21f8d9c9ace3bf581bac9c61c96816a360213157adcb28f1cadf701ac492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b5d21f8d9c9ace3bf581bac9c61c96816a360213157adcb28f1cadf701ac492->enter($__internal_2b5d21f8d9c9ace3bf581bac9c61c96816a360213157adcb28f1cadf701ac492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_2b5d21f8d9c9ace3bf581bac9c61c96816a360213157adcb28f1cadf701ac492->leave($__internal_2b5d21f8d9c9ace3bf581bac9c61c96816a360213157adcb28f1cadf701ac492_prof);

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
