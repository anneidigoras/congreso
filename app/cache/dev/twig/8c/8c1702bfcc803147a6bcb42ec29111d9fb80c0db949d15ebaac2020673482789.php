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
        $__internal_b7771f97ba5bc0d416bd9c25946988aeac928373c0b7765570a3ae1e7bb5849c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7771f97ba5bc0d416bd9c25946988aeac928373c0b7765570a3ae1e7bb5849c->enter($__internal_b7771f97ba5bc0d416bd9c25946988aeac928373c0b7765570a3ae1e7bb5849c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7771f97ba5bc0d416bd9c25946988aeac928373c0b7765570a3ae1e7bb5849c->leave($__internal_b7771f97ba5bc0d416bd9c25946988aeac928373c0b7765570a3ae1e7bb5849c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2f079a9bc1cba203eb58850be448edd3963eb9f4416334a5769273f11d293ac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f079a9bc1cba203eb58850be448edd3963eb9f4416334a5769273f11d293ac3->enter($__internal_2f079a9bc1cba203eb58850be448edd3963eb9f4416334a5769273f11d293ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2f079a9bc1cba203eb58850be448edd3963eb9f4416334a5769273f11d293ac3->leave($__internal_2f079a9bc1cba203eb58850be448edd3963eb9f4416334a5769273f11d293ac3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_97c11a083712252e0541100a2b603a0281c7549d4cb212c21205568a049c8529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97c11a083712252e0541100a2b603a0281c7549d4cb212c21205568a049c8529->enter($__internal_97c11a083712252e0541100a2b603a0281c7549d4cb212c21205568a049c8529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_97c11a083712252e0541100a2b603a0281c7549d4cb212c21205568a049c8529->leave($__internal_97c11a083712252e0541100a2b603a0281c7549d4cb212c21205568a049c8529_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_278dbfc3f9bda819d3286e83587f7115c99bb3b07c7dd2f79af8e21e65c53aa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_278dbfc3f9bda819d3286e83587f7115c99bb3b07c7dd2f79af8e21e65c53aa5->enter($__internal_278dbfc3f9bda819d3286e83587f7115c99bb3b07c7dd2f79af8e21e65c53aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_278dbfc3f9bda819d3286e83587f7115c99bb3b07c7dd2f79af8e21e65c53aa5->leave($__internal_278dbfc3f9bda819d3286e83587f7115c99bb3b07c7dd2f79af8e21e65c53aa5_prof);

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
