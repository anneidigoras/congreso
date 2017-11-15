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
        $__internal_1ecdd514c1d6e638db0718014f8acf36194f8789383ed998b228a6c98a030b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ecdd514c1d6e638db0718014f8acf36194f8789383ed998b228a6c98a030b30->enter($__internal_1ecdd514c1d6e638db0718014f8acf36194f8789383ed998b228a6c98a030b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Comment:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ecdd514c1d6e638db0718014f8acf36194f8789383ed998b228a6c98a030b30->leave($__internal_1ecdd514c1d6e638db0718014f8acf36194f8789383ed998b228a6c98a030b30_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f816504da3de7589972a538713990492170c3f8b367b2bde99d6ab4371f4589a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f816504da3de7589972a538713990492170c3f8b367b2bde99d6ab4371f4589a->enter($__internal_f816504da3de7589972a538713990492170c3f8b367b2bde99d6ab4371f4589a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir comentario";
        
        $__internal_f816504da3de7589972a538713990492170c3f8b367b2bde99d6ab4371f4589a->leave($__internal_f816504da3de7589972a538713990492170c3f8b367b2bde99d6ab4371f4589a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e3e0ecbb12754b4de67c079125483cf5f094c010c1e87019e27898b796d967b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e3e0ecbb12754b4de67c079125483cf5f094c010c1e87019e27898b796d967b->enter($__internal_5e3e0ecbb12754b4de67c079125483cf5f094c010c1e87019e27898b796d967b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Añadir un comentario al articulo \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "articulo", array()), "titulo", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->loadTemplate("CongresoCongresoBundle:Comment:form.html.twig", "CongresoCongresoBundle:Comment:create.html.twig", 9)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        
        $__internal_5e3e0ecbb12754b4de67c079125483cf5f094c010c1e87019e27898b796d967b->leave($__internal_5e3e0ecbb12754b4de67c079125483cf5f094c010c1e87019e27898b796d967b_prof);

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
