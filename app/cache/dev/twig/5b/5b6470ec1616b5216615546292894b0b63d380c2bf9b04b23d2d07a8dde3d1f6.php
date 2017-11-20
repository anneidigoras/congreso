<?php

/* @CongresoCongreso/Congreso/contact.html.twig */
class __TwigTemplate_8f42dded9e1188ad903f14387e382b27a36f78fb86c9056b0860f04646d076cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layout.html.twig", "@CongresoCongreso/Congreso/contact.html.twig", 2);
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
        $__internal_55442024f5bcd91e8fd3f565509badbe5d544cb1191a9922b3fa54142acb331c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55442024f5bcd91e8fd3f565509badbe5d544cb1191a9922b3fa54142acb331c->enter($__internal_55442024f5bcd91e8fd3f565509badbe5d544cb1191a9922b3fa54142acb331c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Congreso/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55442024f5bcd91e8fd3f565509badbe5d544cb1191a9922b3fa54142acb331c->leave($__internal_55442024f5bcd91e8fd3f565509badbe5d544cb1191a9922b3fa54142acb331c_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_40f300cde79c9544f5b7c6156914f75497de5ea55421224b3271d6ce9318da85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40f300cde79c9544f5b7c6156914f75497de5ea55421224b3271d6ce9318da85->enter($__internal_40f300cde79c9544f5b7c6156914f75497de5ea55421224b3271d6ce9318da85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_40f300cde79c9544f5b7c6156914f75497de5ea55421224b3271d6ce9318da85->leave($__internal_40f300cde79c9544f5b7c6156914f75497de5ea55421224b3271d6ce9318da85_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ffe46850318befe4b9081abdd4526af4b0f2bf1227bb8b43e9fc098283e4991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ffe46850318befe4b9081abdd4526af4b0f2bf1227bb8b43e9fc098283e4991->enter($__internal_8ffe46850318befe4b9081abdd4526af4b0f2bf1227bb8b43e9fc098283e4991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <h1>Contacta con nosotros</h1>
    </header>
    <p>A continuación puedes encontrar el repositorio para esta página de Congreso Científico subido a GitHub:</p>
    <a href=\"https://github.com/anneidigoras/congreso\" target=\"_blank\">Congreso Científico (Repo)</a>
    <div class=\"separator\"></div>
    <p>Puedes encontrarnos también en nuestras cuentas de LinkedIn o contactarnos por correo:</p>
\t<ul>
\t\t<li><a href=\"https://www.linkedin.com/in/anne-idigoras-pagola-772326a8/\" target=\"_blank\">Anne Idigoras</a> - anneidigoras@opendeusto.es</li>
\t\t<li><a href=\"https://www.linkedin.com/in/imanol-echeverr%C3%ADa-franco-67617513b/\" target=\"_blank\">Imanol Echeverría</a> - imanol.echeverria@opendeusto.es</li>
\t\t<li><a href=\"https://www.linkedin.com/in/garikoitz-bereciartua-ram%C3%B3n-a40322152/\" target=\"_blank\">Garikoitz Bereciartua</a> - gari.bereciartua@opendeusto.es</li>
\t\t<li><a href=\"https://www.linkedin.com/in/benatgaldos/\" target=\"_blank\">Beñat Galdós</a> - benatgaldos@opendeusto.es</li>
\t</ul>

\t<p class=\"continue\"><a href=\"/\">Volver a la Home</a></p>
";
        
        $__internal_8ffe46850318befe4b9081abdd4526af4b0f2bf1227bb8b43e9fc098283e4991->leave($__internal_8ffe46850318befe4b9081abdd4526af4b0f2bf1227bb8b43e9fc098283e4991_prof);

    }

    public function getTemplateName()
    {
        return "@CongresoCongreso/Congreso/contact.html.twig";
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

{% block title %}Contacto{% endblock%}

{% block body %}
    <header>
        <h1>Contacta con nosotros</h1>
    </header>
    <p>A continuación puedes encontrar el repositorio para esta página de Congreso Científico subido a GitHub:</p>
    <a href=\"https://github.com/anneidigoras/congreso\" target=\"_blank\">Congreso Científico (Repo)</a>
    <div class=\"separator\"></div>
    <p>Puedes encontrarnos también en nuestras cuentas de LinkedIn o contactarnos por correo:</p>
\t<ul>
\t\t<li><a href=\"https://www.linkedin.com/in/anne-idigoras-pagola-772326a8/\" target=\"_blank\">Anne Idigoras</a> - anneidigoras@opendeusto.es</li>
\t\t<li><a href=\"https://www.linkedin.com/in/imanol-echeverr%C3%ADa-franco-67617513b/\" target=\"_blank\">Imanol Echeverría</a> - imanol.echeverria@opendeusto.es</li>
\t\t<li><a href=\"https://www.linkedin.com/in/garikoitz-bereciartua-ram%C3%B3n-a40322152/\" target=\"_blank\">Garikoitz Bereciartua</a> - gari.bereciartua@opendeusto.es</li>
\t\t<li><a href=\"https://www.linkedin.com/in/benatgaldos/\" target=\"_blank\">Beñat Galdós</a> - benatgaldos@opendeusto.es</li>
\t</ul>

\t<p class=\"continue\"><a href=\"/\">Volver a la Home</a></p>
{% endblock %}
", "@CongresoCongreso/Congreso/contact.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Congreso\\contact.html.twig");
    }
}
