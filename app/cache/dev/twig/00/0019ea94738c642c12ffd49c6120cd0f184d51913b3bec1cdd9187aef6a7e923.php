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
        $__internal_35150e711f99fa6474e952cc968a88dea2c5624c4d035854769fb7c6cf4fbbcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35150e711f99fa6474e952cc968a88dea2c5624c4d035854769fb7c6cf4fbbcd->enter($__internal_35150e711f99fa6474e952cc968a88dea2c5624c4d035854769fb7c6cf4fbbcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Comment:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35150e711f99fa6474e952cc968a88dea2c5624c4d035854769fb7c6cf4fbbcd->leave($__internal_35150e711f99fa6474e952cc968a88dea2c5624c4d035854769fb7c6cf4fbbcd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7741483b26a1fb9c69ab16a8a0f5562582b836e15fcd84600df4d5627e020ee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7741483b26a1fb9c69ab16a8a0f5562582b836e15fcd84600df4d5627e020ee8->enter($__internal_7741483b26a1fb9c69ab16a8a0f5562582b836e15fcd84600df4d5627e020ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir comentario";
        
        $__internal_7741483b26a1fb9c69ab16a8a0f5562582b836e15fcd84600df4d5627e020ee8->leave($__internal_7741483b26a1fb9c69ab16a8a0f5562582b836e15fcd84600df4d5627e020ee8_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_9027c35aab3b82acd85f37e713571d43771cc664aacf4bedabfbe1a57e9ac0a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9027c35aab3b82acd85f37e713571d43771cc664aacf4bedabfbe1a57e9ac0a8->enter($__internal_9027c35aab3b82acd85f37e713571d43771cc664aacf4bedabfbe1a57e9ac0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Añadir un comentario al articulo \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "articulo", array()), "titulo", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->loadTemplate("CongresoCongresoBundle:Comment:form.html.twig", "CongresoCongresoBundle:Comment:create.html.twig", 9)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        
        $__internal_9027c35aab3b82acd85f37e713571d43771cc664aacf4bedabfbe1a57e9ac0a8->leave($__internal_9027c35aab3b82acd85f37e713571d43771cc664aacf4bedabfbe1a57e9ac0a8_prof);

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
