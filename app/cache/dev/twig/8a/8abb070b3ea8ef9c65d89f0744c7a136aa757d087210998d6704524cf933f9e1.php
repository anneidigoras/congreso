<?php

/* @CongresoCongreso/Comment/createIng.html.twig */
class __TwigTemplate_0c1df359df5bedf8fb9a50a85903913f2760a1f6ce643d2ffdef793b7b058337 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layoutIng.html.twig", "@CongresoCongreso/Comment/createIng.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CongresoCongresoBundle::layoutIng.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0882d87e466aa66199de4db5d517bd4ec605b4751314fb5cff37659b87a4ded6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0882d87e466aa66199de4db5d517bd4ec605b4751314fb5cff37659b87a4ded6->enter($__internal_0882d87e466aa66199de4db5d517bd4ec605b4751314fb5cff37659b87a4ded6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Comment/createIng.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0882d87e466aa66199de4db5d517bd4ec605b4751314fb5cff37659b87a4ded6->leave($__internal_0882d87e466aa66199de4db5d517bd4ec605b4751314fb5cff37659b87a4ded6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_993558148704b91f8cbb8e78e5c733deb0dc9be6cb3f92fdfb1db5a024bac327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_993558148704b91f8cbb8e78e5c733deb0dc9be6cb3f92fdfb1db5a024bac327->enter($__internal_993558148704b91f8cbb8e78e5c733deb0dc9be6cb3f92fdfb1db5a024bac327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Add comment";
        
        $__internal_993558148704b91f8cbb8e78e5c733deb0dc9be6cb3f92fdfb1db5a024bac327->leave($__internal_993558148704b91f8cbb8e78e5c733deb0dc9be6cb3f92fdfb1db5a024bac327_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4924a980e5e46e0deecbc6e0395e79f118824f04d274cc21498beb45dee62298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4924a980e5e46e0deecbc6e0395e79f118824f04d274cc21498beb45dee62298->enter($__internal_4924a980e5e46e0deecbc6e0395e79f118824f04d274cc21498beb45dee62298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Add a comment to the article \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "articulo", array()), "titulo", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->loadTemplate("CongresoCongresoBundle:Comment:form.html.twig", "@CongresoCongreso/Comment/createIng.html.twig", 9)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        
        $__internal_4924a980e5e46e0deecbc6e0395e79f118824f04d274cc21498beb45dee62298->leave($__internal_4924a980e5e46e0deecbc6e0395e79f118824f04d274cc21498beb45dee62298_prof);

    }

    public function getTemplateName()
    {
        return "@CongresoCongreso/Comment/createIng.html.twig";
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

{% extends 'CongresoCongresoBundle::layoutIng.html.twig' %}

{% block title %}Add comment{% endblock%}

{% block body %}
    <h1>Add a comment to the article \"{{ comment.articulo.titulo }}\"</h1>
    {% include 'CongresoCongresoBundle:Comment:form.html.twig' with { 'form': form } %}
{% endblock %}
", "@CongresoCongreso/Comment/createIng.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Comment\\createIng.html.twig");
    }
}