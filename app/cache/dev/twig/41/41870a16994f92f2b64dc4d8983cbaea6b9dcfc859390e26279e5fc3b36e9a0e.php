<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_edd653923438e67d6eaa61d5840b114fd8b3e8b30fe59da261433bc94772d5be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_e90e6260084818a2678615e329f71f101f4acd8b6be56273b3a5d8f5d522cb18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e90e6260084818a2678615e329f71f101f4acd8b6be56273b3a5d8f5d522cb18->enter($__internal_e90e6260084818a2678615e329f71f101f4acd8b6be56273b3a5d8f5d522cb18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e90e6260084818a2678615e329f71f101f4acd8b6be56273b3a5d8f5d522cb18->leave($__internal_e90e6260084818a2678615e329f71f101f4acd8b6be56273b3a5d8f5d522cb18_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_33508cfed0afbfed68b677af126c15a105d1d1915329478da62f28b12ce179fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33508cfed0afbfed68b677af126c15a105d1d1915329478da62f28b12ce179fe->enter($__internal_33508cfed0afbfed68b677af126c15a105d1d1915329478da62f28b12ce179fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_33508cfed0afbfed68b677af126c15a105d1d1915329478da62f28b12ce179fe->leave($__internal_33508cfed0afbfed68b677af126c15a105d1d1915329478da62f28b12ce179fe_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_42f3a58dfccfa863c1ef853a3a8cfe3ae26fd2b058673c78c5340de438efd2e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42f3a58dfccfa863c1ef853a3a8cfe3ae26fd2b058673c78c5340de438efd2e8->enter($__internal_42f3a58dfccfa863c1ef853a3a8cfe3ae26fd2b058673c78c5340de438efd2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_42f3a58dfccfa863c1ef853a3a8cfe3ae26fd2b058673c78c5340de438efd2e8->leave($__internal_42f3a58dfccfa863c1ef853a3a8cfe3ae26fd2b058673c78c5340de438efd2e8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6b63e926be355cbc42afdb3dd5161b90af20346d967c38ff04968541c7aa9a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6b63e926be355cbc42afdb3dd5161b90af20346d967c38ff04968541c7aa9a7->enter($__internal_d6b63e926be355cbc42afdb3dd5161b90af20346d967c38ff04968541c7aa9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d6b63e926be355cbc42afdb3dd5161b90af20346d967c38ff04968541c7aa9a7->leave($__internal_d6b63e926be355cbc42afdb3dd5161b90af20346d967c38ff04968541c7aa9a7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
