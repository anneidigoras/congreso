<?php

/* CongresoCongresoBundle:Congreso:contact.html.twig */
class __TwigTemplate_1934f1bb2468413af60f97c5be85ae6978786f218313a8872d082f149d1ac63b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layout.html.twig", "CongresoCongresoBundle:Congreso:contact.html.twig", 2);
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
        $__internal_cf321b2e69054006d6aef2ca94f0d4cabd1b6fcfb46ae9e2617ab9b85de47549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf321b2e69054006d6aef2ca94f0d4cabd1b6fcfb46ae9e2617ab9b85de47549->enter($__internal_cf321b2e69054006d6aef2ca94f0d4cabd1b6fcfb46ae9e2617ab9b85de47549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf321b2e69054006d6aef2ca94f0d4cabd1b6fcfb46ae9e2617ab9b85de47549->leave($__internal_cf321b2e69054006d6aef2ca94f0d4cabd1b6fcfb46ae9e2617ab9b85de47549_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ac4fad7bedb3f4dbf34872cdf0fc4cd538c99c935a2a155ebb02f5db1df6d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ac4fad7bedb3f4dbf34872cdf0fc4cd538c99c935a2a155ebb02f5db1df6d1e->enter($__internal_7ac4fad7bedb3f4dbf34872cdf0fc4cd538c99c935a2a155ebb02f5db1df6d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_7ac4fad7bedb3f4dbf34872cdf0fc4cd538c99c935a2a155ebb02f5db1df6d1e->leave($__internal_7ac4fad7bedb3f4dbf34872cdf0fc4cd538c99c935a2a155ebb02f5db1df6d1e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbde27905c0600de18dda2380b7e65488c1d50c207f62081dd350afe4fa7f626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbde27905c0600de18dda2380b7e65488c1d50c207f62081dd350afe4fa7f626->enter($__internal_cbde27905c0600de18dda2380b7e65488c1d50c207f62081dd350afe4fa7f626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <h1>Contacta conmigo</h1>
    </header>

    <p>Puedes encontrarme en las siguientes redes sociales:</p>
\t<ul>
\t\t<li><a href=\"https://twitter.com/claorden\" target=\"_blank\">Twitter</a></li>
\t\t<li><a href=\"https://www.linkedin.com/in/claorden\" target=\"_blank\">LinkedIn</a></li>
\t</ul>
";
        
        $__internal_cbde27905c0600de18dda2380b7e65488c1d50c207f62081dd350afe4fa7f626->leave($__internal_cbde27905c0600de18dda2380b7e65488c1d50c207f62081dd350afe4fa7f626_prof);

    }

    public function getTemplateName()
    {
        return "CongresoCongresoBundle:Congreso:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Congreso/CongresoBundle/Resources/views/Congreso/contact.html.twig #}
{% extends 'CongresoCongresoBundle::layout.html.twig' %}

{% block title %}Contact{% endblock%}

{% block body %}
    <header>
        <h1>Contacta conmigo</h1>
    </header>

    <p>Puedes encontrarme en las siguientes redes sociales:</p>
\t<ul>
\t\t<li><a href=\"https://twitter.com/claorden\" target=\"_blank\">Twitter</a></li>
\t\t<li><a href=\"https://www.linkedin.com/in/claorden\" target=\"_blank\">LinkedIn</a></li>
\t</ul>
{% endblock %}
", "CongresoCongresoBundle:Congreso:contact.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Congreso/contact.html.twig");
    }
}
