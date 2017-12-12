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
        $__internal_46b5f9e57835da146120dcc213f454651842a14778d641b3db02265c400095e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46b5f9e57835da146120dcc213f454651842a14778d641b3db02265c400095e4->enter($__internal_46b5f9e57835da146120dcc213f454651842a14778d641b3db02265c400095e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Comment/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46b5f9e57835da146120dcc213f454651842a14778d641b3db02265c400095e4->leave($__internal_46b5f9e57835da146120dcc213f454651842a14778d641b3db02265c400095e4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_93ee9c1de11e375191ea1406362157a0aca56cbc20ed5f7e7bdde860a2c516e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93ee9c1de11e375191ea1406362157a0aca56cbc20ed5f7e7bdde860a2c516e0->enter($__internal_93ee9c1de11e375191ea1406362157a0aca56cbc20ed5f7e7bdde860a2c516e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir comentario";
        
        $__internal_93ee9c1de11e375191ea1406362157a0aca56cbc20ed5f7e7bdde860a2c516e0->leave($__internal_93ee9c1de11e375191ea1406362157a0aca56cbc20ed5f7e7bdde860a2c516e0_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_fcc6520bf7e089c07842ac7341812a88d1e4ab8ae96b4db68af1c401b9afb43e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc6520bf7e089c07842ac7341812a88d1e4ab8ae96b4db68af1c401b9afb43e->enter($__internal_fcc6520bf7e089c07842ac7341812a88d1e4ab8ae96b4db68af1c401b9afb43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Añadir un comentario al articulo \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "articulo", array()), "titulo", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->loadTemplate("CongresoCongresoBundle:Comment:form.html.twig", "@CongresoCongreso/Comment/create.html.twig", 9)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        
        $__internal_fcc6520bf7e089c07842ac7341812a88d1e4ab8ae96b4db68af1c401b9afb43e->leave($__internal_fcc6520bf7e089c07842ac7341812a88d1e4ab8ae96b4db68af1c401b9afb43e_prof);

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
