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
        $__internal_f8e380435db4bdbe600e30e1d3a40044756a489a00457815cf6fead13e0d240d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8e380435db4bdbe600e30e1d3a40044756a489a00457815cf6fead13e0d240d->enter($__internal_f8e380435db4bdbe600e30e1d3a40044756a489a00457815cf6fead13e0d240d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Comment:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8e380435db4bdbe600e30e1d3a40044756a489a00457815cf6fead13e0d240d->leave($__internal_f8e380435db4bdbe600e30e1d3a40044756a489a00457815cf6fead13e0d240d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e34963af6e4bb39c91ac0362f24ed5c33e9fd15be165668b8cda800d99724b79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e34963af6e4bb39c91ac0362f24ed5c33e9fd15be165668b8cda800d99724b79->enter($__internal_e34963af6e4bb39c91ac0362f24ed5c33e9fd15be165668b8cda800d99724b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir comentario";
        
        $__internal_e34963af6e4bb39c91ac0362f24ed5c33e9fd15be165668b8cda800d99724b79->leave($__internal_e34963af6e4bb39c91ac0362f24ed5c33e9fd15be165668b8cda800d99724b79_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec5feba36abbf761a9384bb5fdb059c927233b17c7475ba337a8aa40d5c4d17a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec5feba36abbf761a9384bb5fdb059c927233b17c7475ba337a8aa40d5c4d17a->enter($__internal_ec5feba36abbf761a9384bb5fdb059c927233b17c7475ba337a8aa40d5c4d17a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Añadir un comentario al articulo \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "articulo", array()), "titulo", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->loadTemplate("CongresoCongresoBundle:Comment:form.html.twig", "CongresoCongresoBundle:Comment:create.html.twig", 9)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        
        $__internal_ec5feba36abbf761a9384bb5fdb059c927233b17c7475ba337a8aa40d5c4d17a->leave($__internal_ec5feba36abbf761a9384bb5fdb059c927233b17c7475ba337a8aa40d5c4d17a_prof);

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
