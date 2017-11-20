<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c3e78761fe2570c702bbd8a607479b014bd2d8ab2cf2bedc98a9d055b8d3e588 extends Twig_Template
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
        $__internal_b8053f155c3ed739ae9d6f3e87a47c573df8a4a8ab6a0a48e4426b315c5b419c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8053f155c3ed739ae9d6f3e87a47c573df8a4a8ab6a0a48e4426b315c5b419c->enter($__internal_b8053f155c3ed739ae9d6f3e87a47c573df8a4a8ab6a0a48e4426b315c5b419c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8053f155c3ed739ae9d6f3e87a47c573df8a4a8ab6a0a48e4426b315c5b419c->leave($__internal_b8053f155c3ed739ae9d6f3e87a47c573df8a4a8ab6a0a48e4426b315c5b419c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d3854f99c390f0ed155e25b4aa42d4b74a174651e13de0698484f937f9f297b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3854f99c390f0ed155e25b4aa42d4b74a174651e13de0698484f937f9f297b9->enter($__internal_d3854f99c390f0ed155e25b4aa42d4b74a174651e13de0698484f937f9f297b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d3854f99c390f0ed155e25b4aa42d4b74a174651e13de0698484f937f9f297b9->leave($__internal_d3854f99c390f0ed155e25b4aa42d4b74a174651e13de0698484f937f9f297b9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d0ebf395b47a09c5b8e29745d9a704766f4899f551e4ef1f1223692bcfe0c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d0ebf395b47a09c5b8e29745d9a704766f4899f551e4ef1f1223692bcfe0c30->enter($__internal_5d0ebf395b47a09c5b8e29745d9a704766f4899f551e4ef1f1223692bcfe0c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5d0ebf395b47a09c5b8e29745d9a704766f4899f551e4ef1f1223692bcfe0c30->leave($__internal_5d0ebf395b47a09c5b8e29745d9a704766f4899f551e4ef1f1223692bcfe0c30_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0f0920a9650ca2b515663eb5e899fd3b15fe68976edc34cf2ba4b95030223db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0f0920a9650ca2b515663eb5e899fd3b15fe68976edc34cf2ba4b95030223db->enter($__internal_e0f0920a9650ca2b515663eb5e899fd3b15fe68976edc34cf2ba4b95030223db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e0f0920a9650ca2b515663eb5e899fd3b15fe68976edc34cf2ba4b95030223db->leave($__internal_e0f0920a9650ca2b515663eb5e899fd3b15fe68976edc34cf2ba4b95030223db_prof);

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
