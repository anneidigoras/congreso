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
        $__internal_665fce548da86c2c0805d34eb2f3759159b1f64ba1f809282e81116ef4e10d69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_665fce548da86c2c0805d34eb2f3759159b1f64ba1f809282e81116ef4e10d69->enter($__internal_665fce548da86c2c0805d34eb2f3759159b1f64ba1f809282e81116ef4e10d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Comment:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_665fce548da86c2c0805d34eb2f3759159b1f64ba1f809282e81116ef4e10d69->leave($__internal_665fce548da86c2c0805d34eb2f3759159b1f64ba1f809282e81116ef4e10d69_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_22e3d7e17d95bbe63773b1f40f117cd19032e1663d754d0f88bcc29bc6d5f3d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22e3d7e17d95bbe63773b1f40f117cd19032e1663d754d0f88bcc29bc6d5f3d9->enter($__internal_22e3d7e17d95bbe63773b1f40f117cd19032e1663d754d0f88bcc29bc6d5f3d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir comentario";
        
        $__internal_22e3d7e17d95bbe63773b1f40f117cd19032e1663d754d0f88bcc29bc6d5f3d9->leave($__internal_22e3d7e17d95bbe63773b1f40f117cd19032e1663d754d0f88bcc29bc6d5f3d9_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d362b4bfe229b618c81c00895cad7ce507d1164f2c3336eddbf9bfebd2e48777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d362b4bfe229b618c81c00895cad7ce507d1164f2c3336eddbf9bfebd2e48777->enter($__internal_d362b4bfe229b618c81c00895cad7ce507d1164f2c3336eddbf9bfebd2e48777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Añadir un comentario al articulo \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "articulo", array()), "titulo", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->loadTemplate("CongresoCongresoBundle:Comment:form.html.twig", "CongresoCongresoBundle:Comment:create.html.twig", 9)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        
        $__internal_d362b4bfe229b618c81c00895cad7ce507d1164f2c3336eddbf9bfebd2e48777->leave($__internal_d362b4bfe229b618c81c00895cad7ce507d1164f2c3336eddbf9bfebd2e48777_prof);

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
