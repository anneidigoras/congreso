<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_18d6667e8874c348cd76f6c7d9f2ff0b4daf99d663d4ba13edf04ba359c575bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cbbe1ce084d31f327a95d1c3c3c55e169e503d6d4743cf059b3d51bc2988cdf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbbe1ce084d31f327a95d1c3c3c55e169e503d6d4743cf059b3d51bc2988cdf7->enter($__internal_cbbe1ce084d31f327a95d1c3c3c55e169e503d6d4743cf059b3d51bc2988cdf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbbe1ce084d31f327a95d1c3c3c55e169e503d6d4743cf059b3d51bc2988cdf7->leave($__internal_cbbe1ce084d31f327a95d1c3c3c55e169e503d6d4743cf059b3d51bc2988cdf7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d587cc50fb604e3884d52aa198f32cec4c641e4ed4f97928f6980e19e4bc86a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d587cc50fb604e3884d52aa198f32cec4c641e4ed4f97928f6980e19e4bc86a1->enter($__internal_d587cc50fb604e3884d52aa198f32cec4c641e4ed4f97928f6980e19e4bc86a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d587cc50fb604e3884d52aa198f32cec4c641e4ed4f97928f6980e19e4bc86a1->leave($__internal_d587cc50fb604e3884d52aa198f32cec4c641e4ed4f97928f6980e19e4bc86a1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_110eb37d73ace117340f1dc14b6a0de7ddedfc3558a3371e37bdc812fbf17c62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_110eb37d73ace117340f1dc14b6a0de7ddedfc3558a3371e37bdc812fbf17c62->enter($__internal_110eb37d73ace117340f1dc14b6a0de7ddedfc3558a3371e37bdc812fbf17c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_110eb37d73ace117340f1dc14b6a0de7ddedfc3558a3371e37bdc812fbf17c62->leave($__internal_110eb37d73ace117340f1dc14b6a0de7ddedfc3558a3371e37bdc812fbf17c62_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_66f561085d93bdc60e0b55d2650cdc70a555d3c6d1e794f2aa3d9b8d5afe11f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66f561085d93bdc60e0b55d2650cdc70a555d3c6d1e794f2aa3d9b8d5afe11f8->enter($__internal_66f561085d93bdc60e0b55d2650cdc70a555d3c6d1e794f2aa3d9b8d5afe11f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_66f561085d93bdc60e0b55d2650cdc70a555d3c6d1e794f2aa3d9b8d5afe11f8->leave($__internal_66f561085d93bdc60e0b55d2650cdc70a555d3c6d1e794f2aa3d9b8d5afe11f8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
