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
        $__internal_788b0df00759d8c389d05490f61ac8e00dbf29c221f39d34f93eb2b6bc576541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_788b0df00759d8c389d05490f61ac8e00dbf29c221f39d34f93eb2b6bc576541->enter($__internal_788b0df00759d8c389d05490f61ac8e00dbf29c221f39d34f93eb2b6bc576541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Comment:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_788b0df00759d8c389d05490f61ac8e00dbf29c221f39d34f93eb2b6bc576541->leave($__internal_788b0df00759d8c389d05490f61ac8e00dbf29c221f39d34f93eb2b6bc576541_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_61d294aa5f05bccf17306b80e63a4e9da408a39607b8ab8dc15e4f47c7416f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61d294aa5f05bccf17306b80e63a4e9da408a39607b8ab8dc15e4f47c7416f5d->enter($__internal_61d294aa5f05bccf17306b80e63a4e9da408a39607b8ab8dc15e4f47c7416f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir comentario";
        
        $__internal_61d294aa5f05bccf17306b80e63a4e9da408a39607b8ab8dc15e4f47c7416f5d->leave($__internal_61d294aa5f05bccf17306b80e63a4e9da408a39607b8ab8dc15e4f47c7416f5d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa4c71edbe5f9d19544e56df2c126c5b33a5e6c7711a640f5953e5c108bd4411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa4c71edbe5f9d19544e56df2c126c5b33a5e6c7711a640f5953e5c108bd4411->enter($__internal_fa4c71edbe5f9d19544e56df2c126c5b33a5e6c7711a640f5953e5c108bd4411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Añadir un comentario al articulo \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "articulo", array()), "titulo", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->loadTemplate("CongresoCongresoBundle:Comment:form.html.twig", "CongresoCongresoBundle:Comment:create.html.twig", 9)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        
        $__internal_fa4c71edbe5f9d19544e56df2c126c5b33a5e6c7711a640f5953e5c108bd4411->leave($__internal_fa4c71edbe5f9d19544e56df2c126c5b33a5e6c7711a640f5953e5c108bd4411_prof);

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
