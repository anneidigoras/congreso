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
        $__internal_d64b1ad80df71e34201059cc26850a3d00c9e8e12a6c78678bf76ddd8d5a78fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d64b1ad80df71e34201059cc26850a3d00c9e8e12a6c78678bf76ddd8d5a78fe->enter($__internal_d64b1ad80df71e34201059cc26850a3d00c9e8e12a6c78678bf76ddd8d5a78fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Comment:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d64b1ad80df71e34201059cc26850a3d00c9e8e12a6c78678bf76ddd8d5a78fe->leave($__internal_d64b1ad80df71e34201059cc26850a3d00c9e8e12a6c78678bf76ddd8d5a78fe_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5741859a784ecc6a94cf4a7163b4853a62e2e132659aed4153f8fa5e9d90d020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5741859a784ecc6a94cf4a7163b4853a62e2e132659aed4153f8fa5e9d90d020->enter($__internal_5741859a784ecc6a94cf4a7163b4853a62e2e132659aed4153f8fa5e9d90d020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir comentario";
        
        $__internal_5741859a784ecc6a94cf4a7163b4853a62e2e132659aed4153f8fa5e9d90d020->leave($__internal_5741859a784ecc6a94cf4a7163b4853a62e2e132659aed4153f8fa5e9d90d020_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_808742d14f476ad835d50b8f3bd47498ee79d28fbbdbed9f78b1c88f9da89f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_808742d14f476ad835d50b8f3bd47498ee79d28fbbdbed9f78b1c88f9da89f80->enter($__internal_808742d14f476ad835d50b8f3bd47498ee79d28fbbdbed9f78b1c88f9da89f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Añadir un comentario al articulo \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "articulo", array()), "titulo", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->loadTemplate("CongresoCongresoBundle:Comment:form.html.twig", "CongresoCongresoBundle:Comment:create.html.twig", 9)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        
        $__internal_808742d14f476ad835d50b8f3bd47498ee79d28fbbdbed9f78b1c88f9da89f80->leave($__internal_808742d14f476ad835d50b8f3bd47498ee79d28fbbdbed9f78b1c88f9da89f80_prof);

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
