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
        $__internal_d180e4a18125838654557a8655baeda85ab99cb0a6461a896032cb615397bc51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d180e4a18125838654557a8655baeda85ab99cb0a6461a896032cb615397bc51->enter($__internal_d180e4a18125838654557a8655baeda85ab99cb0a6461a896032cb615397bc51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Comment/createIng.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d180e4a18125838654557a8655baeda85ab99cb0a6461a896032cb615397bc51->leave($__internal_d180e4a18125838654557a8655baeda85ab99cb0a6461a896032cb615397bc51_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c3efccd9dccfe2ce94f3f00d3f4ca412e1151f07fd7a096b314ff8e9890c7c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c3efccd9dccfe2ce94f3f00d3f4ca412e1151f07fd7a096b314ff8e9890c7c9->enter($__internal_7c3efccd9dccfe2ce94f3f00d3f4ca412e1151f07fd7a096b314ff8e9890c7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Add comment";
        
        $__internal_7c3efccd9dccfe2ce94f3f00d3f4ca412e1151f07fd7a096b314ff8e9890c7c9->leave($__internal_7c3efccd9dccfe2ce94f3f00d3f4ca412e1151f07fd7a096b314ff8e9890c7c9_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3e9fcfdb69b3963daeab05eae023538fb812eb43596bb336518baf3cb6ddb6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e9fcfdb69b3963daeab05eae023538fb812eb43596bb336518baf3cb6ddb6f->enter($__internal_d3e9fcfdb69b3963daeab05eae023538fb812eb43596bb336518baf3cb6ddb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Add a comment to the article \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "articulo", array()), "titulo", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->loadTemplate("CongresoCongresoBundle:Comment:form.html.twig", "@CongresoCongreso/Comment/createIng.html.twig", 9)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        
        $__internal_d3e9fcfdb69b3963daeab05eae023538fb812eb43596bb336518baf3cb6ddb6f->leave($__internal_d3e9fcfdb69b3963daeab05eae023538fb812eb43596bb336518baf3cb6ddb6f_prof);

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
