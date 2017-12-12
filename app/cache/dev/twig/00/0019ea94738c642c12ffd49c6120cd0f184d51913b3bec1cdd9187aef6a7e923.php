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
        $__internal_60a91cf5ab3533ae19be29ace2c8754b265637b66dc36f229d55bd6063fe23a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60a91cf5ab3533ae19be29ace2c8754b265637b66dc36f229d55bd6063fe23a9->enter($__internal_60a91cf5ab3533ae19be29ace2c8754b265637b66dc36f229d55bd6063fe23a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Comment:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60a91cf5ab3533ae19be29ace2c8754b265637b66dc36f229d55bd6063fe23a9->leave($__internal_60a91cf5ab3533ae19be29ace2c8754b265637b66dc36f229d55bd6063fe23a9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_281c99eea6cdce92da05a55c51dfded344318842fb3608175a2e98a6673031f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_281c99eea6cdce92da05a55c51dfded344318842fb3608175a2e98a6673031f3->enter($__internal_281c99eea6cdce92da05a55c51dfded344318842fb3608175a2e98a6673031f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir comentario";
        
        $__internal_281c99eea6cdce92da05a55c51dfded344318842fb3608175a2e98a6673031f3->leave($__internal_281c99eea6cdce92da05a55c51dfded344318842fb3608175a2e98a6673031f3_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf64d89e36659906ed302f281102f2c63295d513a85b7c1df6d8f0ff76f40041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf64d89e36659906ed302f281102f2c63295d513a85b7c1df6d8f0ff76f40041->enter($__internal_bf64d89e36659906ed302f281102f2c63295d513a85b7c1df6d8f0ff76f40041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Añadir un comentario al articulo \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "articulo", array()), "titulo", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->loadTemplate("CongresoCongresoBundle:Comment:form.html.twig", "CongresoCongresoBundle:Comment:create.html.twig", 9)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        
        $__internal_bf64d89e36659906ed302f281102f2c63295d513a85b7c1df6d8f0ff76f40041->leave($__internal_bf64d89e36659906ed302f281102f2c63295d513a85b7c1df6d8f0ff76f40041_prof);

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
