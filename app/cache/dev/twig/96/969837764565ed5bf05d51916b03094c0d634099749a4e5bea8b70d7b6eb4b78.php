<?php

/* @CongresoCongreso/Comment/create.html.twig */
class __TwigTemplate_6e0c64bed67450ccc469bd8c730796a33d7cc485f1a61bf552e7c4eed82c33ef extends Twig_Template
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
        $__internal_51a953bd5d7a96b5802e39ee7dcb634510d8cad3565fdaf963b60e5bcbb13736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51a953bd5d7a96b5802e39ee7dcb634510d8cad3565fdaf963b60e5bcbb13736->enter($__internal_51a953bd5d7a96b5802e39ee7dcb634510d8cad3565fdaf963b60e5bcbb13736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Comment/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51a953bd5d7a96b5802e39ee7dcb634510d8cad3565fdaf963b60e5bcbb13736->leave($__internal_51a953bd5d7a96b5802e39ee7dcb634510d8cad3565fdaf963b60e5bcbb13736_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_32b8628aed6acabd0cea8f9c139895bd195dcdf69476ef894bf22a50b2f12ac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b8628aed6acabd0cea8f9c139895bd195dcdf69476ef894bf22a50b2f12ac0->enter($__internal_32b8628aed6acabd0cea8f9c139895bd195dcdf69476ef894bf22a50b2f12ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir comentario";
        
        $__internal_32b8628aed6acabd0cea8f9c139895bd195dcdf69476ef894bf22a50b2f12ac0->leave($__internal_32b8628aed6acabd0cea8f9c139895bd195dcdf69476ef894bf22a50b2f12ac0_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_6240079eb2204c88894110753019808d89648169b8917455ddc953f4136904d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6240079eb2204c88894110753019808d89648169b8917455ddc953f4136904d0->enter($__internal_6240079eb2204c88894110753019808d89648169b8917455ddc953f4136904d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Añadir un comentario al articulo \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "articulo", array()), "titulo", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->loadTemplate("CongresoCongresoBundle:Comment:form.html.twig", "@CongresoCongreso/Comment/create.html.twig", 9)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        
        $__internal_6240079eb2204c88894110753019808d89648169b8917455ddc953f4136904d0->leave($__internal_6240079eb2204c88894110753019808d89648169b8917455ddc953f4136904d0_prof);

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
