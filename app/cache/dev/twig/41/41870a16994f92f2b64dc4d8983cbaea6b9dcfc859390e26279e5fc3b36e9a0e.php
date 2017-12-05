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
        $__internal_4a9fbc90601ecaea0b3423dfce608baf6ceb0ecd96e543d7b16ff931a1cfc0eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a9fbc90601ecaea0b3423dfce608baf6ceb0ecd96e543d7b16ff931a1cfc0eb->enter($__internal_4a9fbc90601ecaea0b3423dfce608baf6ceb0ecd96e543d7b16ff931a1cfc0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a9fbc90601ecaea0b3423dfce608baf6ceb0ecd96e543d7b16ff931a1cfc0eb->leave($__internal_4a9fbc90601ecaea0b3423dfce608baf6ceb0ecd96e543d7b16ff931a1cfc0eb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1b9648da98879cd0a5650d948e1498b56b2fa89e564a69ad2ebbeb9639879dcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b9648da98879cd0a5650d948e1498b56b2fa89e564a69ad2ebbeb9639879dcf->enter($__internal_1b9648da98879cd0a5650d948e1498b56b2fa89e564a69ad2ebbeb9639879dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1b9648da98879cd0a5650d948e1498b56b2fa89e564a69ad2ebbeb9639879dcf->leave($__internal_1b9648da98879cd0a5650d948e1498b56b2fa89e564a69ad2ebbeb9639879dcf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a8eecb933dad712508fe2702938c3eb109204ea8b41c9bb9f60da6aff17e62b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a8eecb933dad712508fe2702938c3eb109204ea8b41c9bb9f60da6aff17e62b->enter($__internal_8a8eecb933dad712508fe2702938c3eb109204ea8b41c9bb9f60da6aff17e62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8a8eecb933dad712508fe2702938c3eb109204ea8b41c9bb9f60da6aff17e62b->leave($__internal_8a8eecb933dad712508fe2702938c3eb109204ea8b41c9bb9f60da6aff17e62b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_db1d883a5e7592075a962716149364358aee140900d906d69c37cb455a5710b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db1d883a5e7592075a962716149364358aee140900d906d69c37cb455a5710b2->enter($__internal_db1d883a5e7592075a962716149364358aee140900d906d69c37cb455a5710b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_db1d883a5e7592075a962716149364358aee140900d906d69c37cb455a5710b2->leave($__internal_db1d883a5e7592075a962716149364358aee140900d906d69c37cb455a5710b2_prof);

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
