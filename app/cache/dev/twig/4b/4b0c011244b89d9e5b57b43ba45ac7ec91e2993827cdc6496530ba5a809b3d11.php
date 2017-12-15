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
        $__internal_2ee96586890ab582ce4ca1c8b70f8dd42442988a26d8a0bc00e549a46bc6bf62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ee96586890ab582ce4ca1c8b70f8dd42442988a26d8a0bc00e549a46bc6bf62->enter($__internal_2ee96586890ab582ce4ca1c8b70f8dd42442988a26d8a0bc00e549a46bc6bf62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Comment/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ee96586890ab582ce4ca1c8b70f8dd42442988a26d8a0bc00e549a46bc6bf62->leave($__internal_2ee96586890ab582ce4ca1c8b70f8dd42442988a26d8a0bc00e549a46bc6bf62_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_44a754e45557ac13e2da718ae4c1d3dfb37c350563dfbb75d55933dd2ffe4a38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a754e45557ac13e2da718ae4c1d3dfb37c350563dfbb75d55933dd2ffe4a38->enter($__internal_44a754e45557ac13e2da718ae4c1d3dfb37c350563dfbb75d55933dd2ffe4a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir comentario";
        
        $__internal_44a754e45557ac13e2da718ae4c1d3dfb37c350563dfbb75d55933dd2ffe4a38->leave($__internal_44a754e45557ac13e2da718ae4c1d3dfb37c350563dfbb75d55933dd2ffe4a38_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_69a0ba47c5d5d44027cc0a9127dd4e7d7f1b8d5925b4aafa004a398511dc1a95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69a0ba47c5d5d44027cc0a9127dd4e7d7f1b8d5925b4aafa004a398511dc1a95->enter($__internal_69a0ba47c5d5d44027cc0a9127dd4e7d7f1b8d5925b4aafa004a398511dc1a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Añadir un comentario al articulo \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "articulo", array()), "titulo", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->loadTemplate("CongresoCongresoBundle:Comment:form.html.twig", "@CongresoCongreso/Comment/create.html.twig", 9)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        
        $__internal_69a0ba47c5d5d44027cc0a9127dd4e7d7f1b8d5925b4aafa004a398511dc1a95->leave($__internal_69a0ba47c5d5d44027cc0a9127dd4e7d7f1b8d5925b4aafa004a398511dc1a95_prof);

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
