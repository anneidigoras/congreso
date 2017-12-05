<?php

/* CongresoCongresoBundle:Congreso:contact.html.twig */
class __TwigTemplate_c1ffc03ca959fab14d108a7cb0d99e7a920459aaab67279e6fb1731f7bcf4343 extends Twig_Template
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
        $__internal_e5a43d662a8e32dad399a85b927630ef78407e44635f604e9873241791fb9937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5a43d662a8e32dad399a85b927630ef78407e44635f604e9873241791fb9937->enter($__internal_e5a43d662a8e32dad399a85b927630ef78407e44635f604e9873241791fb9937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5a43d662a8e32dad399a85b927630ef78407e44635f604e9873241791fb9937->leave($__internal_e5a43d662a8e32dad399a85b927630ef78407e44635f604e9873241791fb9937_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c7e1521ccd79677f99ca25680d1059b4939687b6e3fd7fdec2a4e30385f2897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c7e1521ccd79677f99ca25680d1059b4939687b6e3fd7fdec2a4e30385f2897->enter($__internal_8c7e1521ccd79677f99ca25680d1059b4939687b6e3fd7fdec2a4e30385f2897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_8c7e1521ccd79677f99ca25680d1059b4939687b6e3fd7fdec2a4e30385f2897->leave($__internal_8c7e1521ccd79677f99ca25680d1059b4939687b6e3fd7fdec2a4e30385f2897_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4ed697c7df7cdced393def18fb224753f748c9c8f7a33a665fa46653a6d4916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ed697c7df7cdced393def18fb224753f748c9c8f7a33a665fa46653a6d4916->enter($__internal_c4ed697c7df7cdced393def18fb224753f748c9c8f7a33a665fa46653a6d4916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c4ed697c7df7cdced393def18fb224753f748c9c8f7a33a665fa46653a6d4916->leave($__internal_c4ed697c7df7cdced393def18fb224753f748c9c8f7a33a665fa46653a6d4916_prof);

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
", "CongresoCongresoBundle:Congreso:contact.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Congreso/contact.html.twig");
    }
}
