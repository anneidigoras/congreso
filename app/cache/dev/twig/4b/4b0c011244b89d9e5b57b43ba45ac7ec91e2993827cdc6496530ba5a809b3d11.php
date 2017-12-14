<?php

/* @CongresoCongreso/Comment/create.html.twig */
class __TwigTemplate_ba509cc6a60452e14d781599d9bb3177d1f11366254d0e17c16aba129c0fb325 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layout.html.twig", "@CongresoCongreso/Comment/create.html.twig", 3);
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
        $__internal_fd8bf6611df080cbb2761584af14ba4e8ba5250eaab966744193e83c3bdf826a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd8bf6611df080cbb2761584af14ba4e8ba5250eaab966744193e83c3bdf826a->enter($__internal_fd8bf6611df080cbb2761584af14ba4e8ba5250eaab966744193e83c3bdf826a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Comment/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd8bf6611df080cbb2761584af14ba4e8ba5250eaab966744193e83c3bdf826a->leave($__internal_fd8bf6611df080cbb2761584af14ba4e8ba5250eaab966744193e83c3bdf826a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_986facd9ae15c9cdc44a523459bc7dbdad3fc835df1ff24491c0d4be51e5a647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_986facd9ae15c9cdc44a523459bc7dbdad3fc835df1ff24491c0d4be51e5a647->enter($__internal_986facd9ae15c9cdc44a523459bc7dbdad3fc835df1ff24491c0d4be51e5a647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir comentario";
        
        $__internal_986facd9ae15c9cdc44a523459bc7dbdad3fc835df1ff24491c0d4be51e5a647->leave($__internal_986facd9ae15c9cdc44a523459bc7dbdad3fc835df1ff24491c0d4be51e5a647_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7ebdf78e5a60d976baa0e4ee8720768bd8648f2a228e779e434f9f62dd38a29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7ebdf78e5a60d976baa0e4ee8720768bd8648f2a228e779e434f9f62dd38a29->enter($__internal_f7ebdf78e5a60d976baa0e4ee8720768bd8648f2a228e779e434f9f62dd38a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Añadir un comentario al articulo \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "articulo", array()), "titulo", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->loadTemplate("CongresoCongresoBundle:Comment:form.html.twig", "@CongresoCongreso/Comment/create.html.twig", 9)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        
        $__internal_f7ebdf78e5a60d976baa0e4ee8720768bd8648f2a228e779e434f9f62dd38a29->leave($__internal_f7ebdf78e5a60d976baa0e4ee8720768bd8648f2a228e779e434f9f62dd38a29_prof);

    }

    public function getTemplateName()
    {
        return "@CongresoCongreso/Comment/create.html.twig";
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
", "@CongresoCongreso/Comment/create.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Comment\\create.html.twig");
    }
}
