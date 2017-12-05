<?php

/* CongresoCongresoBundle:Comment:create.html.twig */
class __TwigTemplate_0f1542c30636ac50118252ee835129763769a9284a217b255fd46ac5103c59c1 extends Twig_Template
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
        $__internal_a407e0ced5988325ff437d165f4082b13504ee9604102bcc963cb10212d63342 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a407e0ced5988325ff437d165f4082b13504ee9604102bcc963cb10212d63342->enter($__internal_a407e0ced5988325ff437d165f4082b13504ee9604102bcc963cb10212d63342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Comment:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a407e0ced5988325ff437d165f4082b13504ee9604102bcc963cb10212d63342->leave($__internal_a407e0ced5988325ff437d165f4082b13504ee9604102bcc963cb10212d63342_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_95573379b7374e04be54762e57d94141616ed650b05b42bd5af4c6e9c59720d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95573379b7374e04be54762e57d94141616ed650b05b42bd5af4c6e9c59720d8->enter($__internal_95573379b7374e04be54762e57d94141616ed650b05b42bd5af4c6e9c59720d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir comentario";
        
        $__internal_95573379b7374e04be54762e57d94141616ed650b05b42bd5af4c6e9c59720d8->leave($__internal_95573379b7374e04be54762e57d94141616ed650b05b42bd5af4c6e9c59720d8_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d77392c69364d1e67ada80e3aa6bd886847aaa1f7bce249468480d4b10c8d00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d77392c69364d1e67ada80e3aa6bd886847aaa1f7bce249468480d4b10c8d00->enter($__internal_1d77392c69364d1e67ada80e3aa6bd886847aaa1f7bce249468480d4b10c8d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Añadir un comentario al articulo \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "articulo", array()), "titulo", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->loadTemplate("CongresoCongresoBundle:Comment:form.html.twig", "CongresoCongresoBundle:Comment:create.html.twig", 9)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        
        $__internal_1d77392c69364d1e67ada80e3aa6bd886847aaa1f7bce249468480d4b10c8d00->leave($__internal_1d77392c69364d1e67ada80e3aa6bd886847aaa1f7bce249468480d4b10c8d00_prof);

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
