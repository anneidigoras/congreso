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
        $__internal_c117d061b5e8cd65c69c29709fddebfb73d53543bfbfb9af31363decc0219829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c117d061b5e8cd65c69c29709fddebfb73d53543bfbfb9af31363decc0219829->enter($__internal_c117d061b5e8cd65c69c29709fddebfb73d53543bfbfb9af31363decc0219829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Comment/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c117d061b5e8cd65c69c29709fddebfb73d53543bfbfb9af31363decc0219829->leave($__internal_c117d061b5e8cd65c69c29709fddebfb73d53543bfbfb9af31363decc0219829_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_743008e6601c6b8d75e06127b641cae9a18c5e479856a218be00a06b6c63f400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_743008e6601c6b8d75e06127b641cae9a18c5e479856a218be00a06b6c63f400->enter($__internal_743008e6601c6b8d75e06127b641cae9a18c5e479856a218be00a06b6c63f400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir comentario";
        
        $__internal_743008e6601c6b8d75e06127b641cae9a18c5e479856a218be00a06b6c63f400->leave($__internal_743008e6601c6b8d75e06127b641cae9a18c5e479856a218be00a06b6c63f400_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_dff53f1db961d2796c2b2d61599421836d4b60ce282a88ebfbc13311a4aaadfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dff53f1db961d2796c2b2d61599421836d4b60ce282a88ebfbc13311a4aaadfe->enter($__internal_dff53f1db961d2796c2b2d61599421836d4b60ce282a88ebfbc13311a4aaadfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Añadir un comentario al articulo \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "articulo", array()), "titulo", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->loadTemplate("CongresoCongresoBundle:Comment:form.html.twig", "@CongresoCongreso/Comment/create.html.twig", 9)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        
        $__internal_dff53f1db961d2796c2b2d61599421836d4b60ce282a88ebfbc13311a4aaadfe->leave($__internal_dff53f1db961d2796c2b2d61599421836d4b60ce282a88ebfbc13311a4aaadfe_prof);

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
