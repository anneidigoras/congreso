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
        $__internal_93ba2d480101ea3d8ab32cd892e8893038539b590e1e0d650c688e9ea3a4677a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93ba2d480101ea3d8ab32cd892e8893038539b590e1e0d650c688e9ea3a4677a->enter($__internal_93ba2d480101ea3d8ab32cd892e8893038539b590e1e0d650c688e9ea3a4677a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Comment:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93ba2d480101ea3d8ab32cd892e8893038539b590e1e0d650c688e9ea3a4677a->leave($__internal_93ba2d480101ea3d8ab32cd892e8893038539b590e1e0d650c688e9ea3a4677a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5110dca5549aac64a8e73e240c36593ea5041462bb78e2a6c1334b35cb9f6725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5110dca5549aac64a8e73e240c36593ea5041462bb78e2a6c1334b35cb9f6725->enter($__internal_5110dca5549aac64a8e73e240c36593ea5041462bb78e2a6c1334b35cb9f6725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir comentario";
        
        $__internal_5110dca5549aac64a8e73e240c36593ea5041462bb78e2a6c1334b35cb9f6725->leave($__internal_5110dca5549aac64a8e73e240c36593ea5041462bb78e2a6c1334b35cb9f6725_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c49b3abc4aaa500fb18f845bfbc669f6c5c0a4e5a8ebc60f32781619da41fd4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c49b3abc4aaa500fb18f845bfbc669f6c5c0a4e5a8ebc60f32781619da41fd4f->enter($__internal_c49b3abc4aaa500fb18f845bfbc669f6c5c0a4e5a8ebc60f32781619da41fd4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Añadir un comentario al articulo \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "articulo", array()), "titulo", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->loadTemplate("CongresoCongresoBundle:Comment:form.html.twig", "CongresoCongresoBundle:Comment:create.html.twig", 9)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        
        $__internal_c49b3abc4aaa500fb18f845bfbc669f6c5c0a4e5a8ebc60f32781619da41fd4f->leave($__internal_c49b3abc4aaa500fb18f845bfbc669f6c5c0a4e5a8ebc60f32781619da41fd4f_prof);

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
