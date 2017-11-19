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
        $__internal_e72935d3de9da215e7f87dcc80881e6699dc8379802d078ebd6f30ea6a227759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e72935d3de9da215e7f87dcc80881e6699dc8379802d078ebd6f30ea6a227759->enter($__internal_e72935d3de9da215e7f87dcc80881e6699dc8379802d078ebd6f30ea6a227759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Comment:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e72935d3de9da215e7f87dcc80881e6699dc8379802d078ebd6f30ea6a227759->leave($__internal_e72935d3de9da215e7f87dcc80881e6699dc8379802d078ebd6f30ea6a227759_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d4e022a9af8bc03c09a3e5a7a674ed60d8070f9ff30ab098a7929825658fe98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d4e022a9af8bc03c09a3e5a7a674ed60d8070f9ff30ab098a7929825658fe98->enter($__internal_1d4e022a9af8bc03c09a3e5a7a674ed60d8070f9ff30ab098a7929825658fe98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir comentario";
        
        $__internal_1d4e022a9af8bc03c09a3e5a7a674ed60d8070f9ff30ab098a7929825658fe98->leave($__internal_1d4e022a9af8bc03c09a3e5a7a674ed60d8070f9ff30ab098a7929825658fe98_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_377d6089484fd3c38dd0ac820d335165ffb197bba95523267f5ab775b3ecfe4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_377d6089484fd3c38dd0ac820d335165ffb197bba95523267f5ab775b3ecfe4c->enter($__internal_377d6089484fd3c38dd0ac820d335165ffb197bba95523267f5ab775b3ecfe4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Añadir un comentario al articulo \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "articulo", array()), "titulo", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->loadTemplate("CongresoCongresoBundle:Comment:form.html.twig", "CongresoCongresoBundle:Comment:create.html.twig", 9)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        
        $__internal_377d6089484fd3c38dd0ac820d335165ffb197bba95523267f5ab775b3ecfe4c->leave($__internal_377d6089484fd3c38dd0ac820d335165ffb197bba95523267f5ab775b3ecfe4c_prof);

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
