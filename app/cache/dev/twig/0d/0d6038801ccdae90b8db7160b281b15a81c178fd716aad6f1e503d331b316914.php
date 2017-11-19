<?php

/* CongresoCongresoBundle:Comment:create.html.twig */
class __TwigTemplate_39bd6b1aa12bd9f5fa0b7b49ec06503de12b677bb6876555de2b2ef02a9e5240 extends Twig_Template
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
        $__internal_208498ad5b94551cc0d77c8228eeb3426f541cd36977a0e9f36aadf49ef6532a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_208498ad5b94551cc0d77c8228eeb3426f541cd36977a0e9f36aadf49ef6532a->enter($__internal_208498ad5b94551cc0d77c8228eeb3426f541cd36977a0e9f36aadf49ef6532a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Comment:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_208498ad5b94551cc0d77c8228eeb3426f541cd36977a0e9f36aadf49ef6532a->leave($__internal_208498ad5b94551cc0d77c8228eeb3426f541cd36977a0e9f36aadf49ef6532a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb43b2671e219ce4994b7f5ea46409a956715bed5ee00f98309a67480e6d0e02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb43b2671e219ce4994b7f5ea46409a956715bed5ee00f98309a67480e6d0e02->enter($__internal_cb43b2671e219ce4994b7f5ea46409a956715bed5ee00f98309a67480e6d0e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir comentario";
        
        $__internal_cb43b2671e219ce4994b7f5ea46409a956715bed5ee00f98309a67480e6d0e02->leave($__internal_cb43b2671e219ce4994b7f5ea46409a956715bed5ee00f98309a67480e6d0e02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b095099ab985fdd51ba164da3fcfc1ed3b9ef6e822b19a7783de3249d7dcb70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b095099ab985fdd51ba164da3fcfc1ed3b9ef6e822b19a7783de3249d7dcb70->enter($__internal_9b095099ab985fdd51ba164da3fcfc1ed3b9ef6e822b19a7783de3249d7dcb70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Añadir un comentario al articulo \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "articulo", array()), "titulo", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->loadTemplate("CongresoCongresoBundle:Comment:form.html.twig", "CongresoCongresoBundle:Comment:create.html.twig", 9)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        
        $__internal_9b095099ab985fdd51ba164da3fcfc1ed3b9ef6e822b19a7783de3249d7dcb70->leave($__internal_9b095099ab985fdd51ba164da3fcfc1ed3b9ef6e822b19a7783de3249d7dcb70_prof);

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
