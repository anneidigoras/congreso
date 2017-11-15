<?php

/* CongresoCongresoBundle:Comment:create.html.twig */
class __TwigTemplate_39bd6b1aa12bd9f5fa0b7b49ec06503de12b677bb6876555de2b2ef02a9e5240 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layout.html.twig", "CongresoCongresoBundle:Comment:create.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CongresoCongresoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6987357cb6c8e41ab7f9d51a878a5fa893060921930b2d31c46ffebae1655ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6987357cb6c8e41ab7f9d51a878a5fa893060921930b2d31c46ffebae1655ac->enter($__internal_f6987357cb6c8e41ab7f9d51a878a5fa893060921930b2d31c46ffebae1655ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Comment:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6987357cb6c8e41ab7f9d51a878a5fa893060921930b2d31c46ffebae1655ac->leave($__internal_f6987357cb6c8e41ab7f9d51a878a5fa893060921930b2d31c46ffebae1655ac_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eab2b2d9a1a6ac3eb93b7e6fdc1144346205247afcf1ce8234c79eda63cce368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eab2b2d9a1a6ac3eb93b7e6fdc1144346205247afcf1ce8234c79eda63cce368->enter($__internal_eab2b2d9a1a6ac3eb93b7e6fdc1144346205247afcf1ce8234c79eda63cce368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir comentario";
        
        $__internal_eab2b2d9a1a6ac3eb93b7e6fdc1144346205247afcf1ce8234c79eda63cce368->leave($__internal_eab2b2d9a1a6ac3eb93b7e6fdc1144346205247afcf1ce8234c79eda63cce368_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_724242227da9b8d92751e312a6f0aec22e7e52a93c57b16d60809eb614fa8519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_724242227da9b8d92751e312a6f0aec22e7e52a93c57b16d60809eb614fa8519->enter($__internal_724242227da9b8d92751e312a6f0aec22e7e52a93c57b16d60809eb614fa8519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Añadir un comentario al articulo \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "articulo", array()), "titulo", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->loadTemplate("CongresoCongresoBundle:Comment:form.html.twig", "CongresoCongresoBundle:Comment:create.html.twig", 9)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        
        $__internal_724242227da9b8d92751e312a6f0aec22e7e52a93c57b16d60809eb614fa8519->leave($__internal_724242227da9b8d92751e312a6f0aec22e7e52a93c57b16d60809eb614fa8519_prof);

    }

    public function getTemplateName()
    {
        return "CongresoCongresoBundle:Comment:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  53 => 8,  47 => 7,  35 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Congreso/CongresoBundle/Resources/views/Comment/create.html.twig #}

{% extends 'CongresoCongresoBundle::layout.html.twig' %}

{% block title %}Añadir comentario{% endblock%}

{% block body %}
    <h1>Añadir un comentario al articulo \"{{ comment.articulo.titulo }}\"</h1>
    {% include 'CongresoCongresoBundle:Comment:form.html.twig' with { 'form': form } %}
{% endblock %}
", "CongresoCongresoBundle:Comment:create.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Comment/create.html.twig");
    }
}
