<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_bcd68bcfce815450f95b685f94438cd4d130ccd92c8a95e77deedaef1d28e101 extends Twig_Template
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
        $__internal_1fd64aed89b89d198d65904605cbfd43e9c928b5657d2d87f0fefe6592021eb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fd64aed89b89d198d65904605cbfd43e9c928b5657d2d87f0fefe6592021eb0->enter($__internal_1fd64aed89b89d198d65904605cbfd43e9c928b5657d2d87f0fefe6592021eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fd64aed89b89d198d65904605cbfd43e9c928b5657d2d87f0fefe6592021eb0->leave($__internal_1fd64aed89b89d198d65904605cbfd43e9c928b5657d2d87f0fefe6592021eb0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_822291255176a7bb023496773f61919d9c684cd5f3c30ba8f0b654510a6cbb7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_822291255176a7bb023496773f61919d9c684cd5f3c30ba8f0b654510a6cbb7e->enter($__internal_822291255176a7bb023496773f61919d9c684cd5f3c30ba8f0b654510a6cbb7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_822291255176a7bb023496773f61919d9c684cd5f3c30ba8f0b654510a6cbb7e->leave($__internal_822291255176a7bb023496773f61919d9c684cd5f3c30ba8f0b654510a6cbb7e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3a6ab783ec39ce4bb3f515a61f833c4e02a866d388c5e86aa6cfd8e2930efaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3a6ab783ec39ce4bb3f515a61f833c4e02a866d388c5e86aa6cfd8e2930efaf->enter($__internal_e3a6ab783ec39ce4bb3f515a61f833c4e02a866d388c5e86aa6cfd8e2930efaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e3a6ab783ec39ce4bb3f515a61f833c4e02a866d388c5e86aa6cfd8e2930efaf->leave($__internal_e3a6ab783ec39ce4bb3f515a61f833c4e02a866d388c5e86aa6cfd8e2930efaf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1e21dcee1998e919a0680a4752dab97921cd8569b2174876857a26bb5bf9fab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1e21dcee1998e919a0680a4752dab97921cd8569b2174876857a26bb5bf9fab->enter($__internal_e1e21dcee1998e919a0680a4752dab97921cd8569b2174876857a26bb5bf9fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e1e21dcee1998e919a0680a4752dab97921cd8569b2174876857a26bb5bf9fab->leave($__internal_e1e21dcee1998e919a0680a4752dab97921cd8569b2174876857a26bb5bf9fab_prof);

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
