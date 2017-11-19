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
        $__internal_abe44a8b91392f2e23666383c964e5a1eb75626156b8f6c1aa18e9826dbbc0b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abe44a8b91392f2e23666383c964e5a1eb75626156b8f6c1aa18e9826dbbc0b4->enter($__internal_abe44a8b91392f2e23666383c964e5a1eb75626156b8f6c1aa18e9826dbbc0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abe44a8b91392f2e23666383c964e5a1eb75626156b8f6c1aa18e9826dbbc0b4->leave($__internal_abe44a8b91392f2e23666383c964e5a1eb75626156b8f6c1aa18e9826dbbc0b4_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_25a120e005c2b28b1eedc6631dddc72ffdc5a4785f80ab5dad49dcc67ea982bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a120e005c2b28b1eedc6631dddc72ffdc5a4785f80ab5dad49dcc67ea982bf->enter($__internal_25a120e005c2b28b1eedc6631dddc72ffdc5a4785f80ab5dad49dcc67ea982bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_25a120e005c2b28b1eedc6631dddc72ffdc5a4785f80ab5dad49dcc67ea982bf->leave($__internal_25a120e005c2b28b1eedc6631dddc72ffdc5a4785f80ab5dad49dcc67ea982bf_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_24ba479c041f3b583fb8e6f1cd094ce6c7aeaade6c1ddd3c1a89d5f717e2f05a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24ba479c041f3b583fb8e6f1cd094ce6c7aeaade6c1ddd3c1a89d5f717e2f05a->enter($__internal_24ba479c041f3b583fb8e6f1cd094ce6c7aeaade6c1ddd3c1a89d5f717e2f05a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_24ba479c041f3b583fb8e6f1cd094ce6c7aeaade6c1ddd3c1a89d5f717e2f05a->leave($__internal_24ba479c041f3b583fb8e6f1cd094ce6c7aeaade6c1ddd3c1a89d5f717e2f05a_prof);

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
