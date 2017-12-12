<?php

/* CongresoCongresoBundle:Comment:createIng.html.twig */
class __TwigTemplate_0612a519b6b6fcea869d9285e796dc966dff19c28ec61a00e6079e0eb7d190a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layoutIng.html.twig", "CongresoCongresoBundle:Comment:createIng.html.twig", 3);
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
        $__internal_33b946e505caad3b3eb1f6d76a9d5b778e084702072369b7041e7f1984904b9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33b946e505caad3b3eb1f6d76a9d5b778e084702072369b7041e7f1984904b9a->enter($__internal_33b946e505caad3b3eb1f6d76a9d5b778e084702072369b7041e7f1984904b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Comment:createIng.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33b946e505caad3b3eb1f6d76a9d5b778e084702072369b7041e7f1984904b9a->leave($__internal_33b946e505caad3b3eb1f6d76a9d5b778e084702072369b7041e7f1984904b9a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d525af8831af3d93fb3916d7f1862a2f1ba4d80d3d4f83415e39347ab84a61dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d525af8831af3d93fb3916d7f1862a2f1ba4d80d3d4f83415e39347ab84a61dc->enter($__internal_d525af8831af3d93fb3916d7f1862a2f1ba4d80d3d4f83415e39347ab84a61dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Add comment";
        
        $__internal_d525af8831af3d93fb3916d7f1862a2f1ba4d80d3d4f83415e39347ab84a61dc->leave($__internal_d525af8831af3d93fb3916d7f1862a2f1ba4d80d3d4f83415e39347ab84a61dc_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_dcc6228100d03aa15c9e443a3775903cd011d684ebe142509b0c90bdb08e61ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcc6228100d03aa15c9e443a3775903cd011d684ebe142509b0c90bdb08e61ae->enter($__internal_dcc6228100d03aa15c9e443a3775903cd011d684ebe142509b0c90bdb08e61ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Add a comment to the article \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "articulo", array()), "titulo", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->loadTemplate("CongresoCongresoBundle:Comment:form.html.twig", "CongresoCongresoBundle:Comment:createIng.html.twig", 9)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        
        $__internal_dcc6228100d03aa15c9e443a3775903cd011d684ebe142509b0c90bdb08e61ae->leave($__internal_dcc6228100d03aa15c9e443a3775903cd011d684ebe142509b0c90bdb08e61ae_prof);

    }

    public function getTemplateName()
    {
        return "CongresoCongresoBundle:Comment:createIng.html.twig";
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
", "CongresoCongresoBundle:Comment:createIng.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Comment/createIng.html.twig");
    }
}