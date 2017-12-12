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
        $__internal_48b8fc37699edf99b93409c15601ea0686820e459aab865dac91985c71daef23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48b8fc37699edf99b93409c15601ea0686820e459aab865dac91985c71daef23->enter($__internal_48b8fc37699edf99b93409c15601ea0686820e459aab865dac91985c71daef23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Comment/createIng.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48b8fc37699edf99b93409c15601ea0686820e459aab865dac91985c71daef23->leave($__internal_48b8fc37699edf99b93409c15601ea0686820e459aab865dac91985c71daef23_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a725d3437dda2dc04fdbf6d08383a5541432176fa1c4be7bd51909183f36aecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a725d3437dda2dc04fdbf6d08383a5541432176fa1c4be7bd51909183f36aecb->enter($__internal_a725d3437dda2dc04fdbf6d08383a5541432176fa1c4be7bd51909183f36aecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Add comment";
        
        $__internal_a725d3437dda2dc04fdbf6d08383a5541432176fa1c4be7bd51909183f36aecb->leave($__internal_a725d3437dda2dc04fdbf6d08383a5541432176fa1c4be7bd51909183f36aecb_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c36de270776ed51b6c63be280e15f5269b9dbcbdbc47b1fc017097377a3acb29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c36de270776ed51b6c63be280e15f5269b9dbcbdbc47b1fc017097377a3acb29->enter($__internal_c36de270776ed51b6c63be280e15f5269b9dbcbdbc47b1fc017097377a3acb29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Add a comment to the article \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "articulo", array()), "titulo", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->loadTemplate("CongresoCongresoBundle:Comment:form.html.twig", "@CongresoCongreso/Comment/createIng.html.twig", 9)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        
        $__internal_c36de270776ed51b6c63be280e15f5269b9dbcbdbc47b1fc017097377a3acb29->leave($__internal_c36de270776ed51b6c63be280e15f5269b9dbcbdbc47b1fc017097377a3acb29_prof);

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
