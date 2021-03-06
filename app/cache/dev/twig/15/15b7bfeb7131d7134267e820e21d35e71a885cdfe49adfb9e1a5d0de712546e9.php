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
            'javascripts' => array($this, 'block_javascripts'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'tabla' => array($this, 'block_tabla'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CongresoCongresoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cfb30b836e6cab48d947ee1c59ee9caf0dcafa1789052a70c595546cd03c1271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfb30b836e6cab48d947ee1c59ee9caf0dcafa1789052a70c595546cd03c1271->enter($__internal_cfb30b836e6cab48d947ee1c59ee9caf0dcafa1789052a70c595546cd03c1271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfb30b836e6cab48d947ee1c59ee9caf0dcafa1789052a70c595546cd03c1271->leave($__internal_cfb30b836e6cab48d947ee1c59ee9caf0dcafa1789052a70c595546cd03c1271_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_32301abfee17b306837e2184e903cfd3599047784b8f067295ebadadbc580009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32301abfee17b306837e2184e903cfd3599047784b8f067295ebadadbc580009->enter($__internal_32301abfee17b306837e2184e903cfd3599047784b8f067295ebadadbc580009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_32301abfee17b306837e2184e903cfd3599047784b8f067295ebadadbc580009->leave($__internal_32301abfee17b306837e2184e903cfd3599047784b8f067295ebadadbc580009_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f3dde8c34277eb9fea209e24827c7014e94f9aefa70e3b17be9443782fcd882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f3dde8c34277eb9fea209e24827c7014e94f9aefa70e3b17be9443782fcd882->enter($__internal_1f3dde8c34277eb9fea209e24827c7014e94f9aefa70e3b17be9443782fcd882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_1f3dde8c34277eb9fea209e24827c7014e94f9aefa70e3b17be9443782fcd882->leave($__internal_1f3dde8c34277eb9fea209e24827c7014e94f9aefa70e3b17be9443782fcd882_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_588b8ab8918d499bdd0d69e3f12ba9d8fd6e3d95994152da2c25628d9896cfcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_588b8ab8918d499bdd0d69e3f12ba9d8fd6e3d95994152da2c25628d9896cfcc->enter($__internal_588b8ab8918d499bdd0d69e3f12ba9d8fd6e3d95994152da2c25628d9896cfcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "\t<div class=\"container\">
\t    <header>
\t       ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("<h1>Contacta con nosotros</h1>", array(), "messages");
        // line 16
        echo "\t    </header>
\t    <p>A continuación puedes encontrar el repositorio para esta página de Congreso Científico subido a GitHub:</p>
\t    <a href=\"https://github.com/anneidigoras/congreso\" target=\"_blank\">Congreso Científico (Repo)</a>
\t    <div class=\"separator\"></div>
\t    <p>Información detallada de los colaboradores del proyecto:</p>
\t</div>
 ";
        
        $__internal_588b8ab8918d499bdd0d69e3f12ba9d8fd6e3d95994152da2c25628d9896cfcc->leave($__internal_588b8ab8918d499bdd0d69e3f12ba9d8fd6e3d95994152da2c25628d9896cfcc_prof);

    }

    // line 25
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_7abcfadbccde08d1f2e50e4ea9325298118c456b5206c9771415a85f91b8a5df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7abcfadbccde08d1f2e50e4ea9325298118c456b5206c9771415a85f91b8a5df->enter($__internal_7abcfadbccde08d1f2e50e4ea9325298118c456b5206c9771415a85f91b8a5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        // line 26
        echo "
\t<div class=\"container\">
\t<table id=\"tabla\">


\t\t\t
\t\t<theader>
\t\t\t<th name=\"Nombre\">Nombre</th><th name=\"Cargo\">Cargo</th><th name=\"Email\">Email</th><th name=\"LinkedIn\">LinkedIn</th>
\t\t</theader>
\t
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<td class=\"num\" id=\"Nombre\" >Beñat Galdós</td><td class=\"num\" id=\"Cargo\">Desarrollador + Coordinador</td><td class=\"num\" id=\"Email\">benatgaldos@opendeusto.es</td><td class=\"num\" id=\"LinkedIn\" ><a href=\"https://www.linkedin.com/in/benatgaldos/\" target=\"_blank\">Referencia</a></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"num\" id=\"Nombre\" >Anne Idigoras</td><td class=\"num\" id=\"Cargo\">Desarrolladora</td><td class=\"num\" id=\"Email\">anneidigoras@opendeusto.es</td><td class=\"num\" id=\"LinkedIn\" ><a href=\"https://www.linkedin.com/in/anne-idigoras-pagola-772326a8/\" target=\"_blank\">Referencia</a></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"num\" id=\"Nombre\" >Imanol Echeverría</td><td class=\"num\" id=\"Cargo\">Desarrollador</td><td class=\"num\" id=\"Email\">imanol.echeverria@opendeusto.es</td><td class=\"num\" id=\"LinkedIn\" ><a href=\"https://www.linkedin.com/in/imanol-echeverr%C3%ADa-franco-67617513b/\" target=\"_blank\">Referencia</a></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"num\" id=\"Nombre\" >Garikoitz Bereciartua</td><td class=\"num\" id=\"Cargo\">Desarrollador</td><td class=\"num\" id=\"Email\">gari.bereciartua@opendeusto.es</td><td class=\"num\" id=\"LinkedIn\" ><a href=\"https://www.linkedin.com/in/garikoitz-bereciartua-ram%C3%B3n-a40322152/\" target=\"_blank\">Referencia</a></td>
\t\t\t</tr>
\t\t</tbody>
\t</table>
\t</div>

";
        
        $__internal_7abcfadbccde08d1f2e50e4ea9325298118c456b5206c9771415a85f91b8a5df->leave($__internal_7abcfadbccde08d1f2e50e4ea9325298118c456b5206c9771415a85f91b8a5df_prof);

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
        return array (  100 => 26,  94 => 25,  81 => 16,  79 => 15,  75 => 13,  69 => 12,  57 => 10,  48 => 6,  43 => 5,  37 => 4,  11 => 2,);
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

{% block javascripts %}
            <script type=\"text/javascript\" src=\"{{ asset('js/jquery.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/script.js') }}\"></script>
{% endblock %}


{% block title %}Contacto{% endblock%}

{% block body %}
\t<div class=\"container\">
\t    <header>
\t       {% trans %} <h1>Contacta con nosotros</h1> {% endtrans %}
\t    </header>
\t    <p>A continuación puedes encontrar el repositorio para esta página de Congreso Científico subido a GitHub:</p>
\t    <a href=\"https://github.com/anneidigoras/congreso\" target=\"_blank\">Congreso Científico (Repo)</a>
\t    <div class=\"separator\"></div>
\t    <p>Información detallada de los colaboradores del proyecto:</p>
\t</div>
 {% endblock %}
 

{% block tabla %}

\t<div class=\"container\">
\t<table id=\"tabla\">


\t\t\t
\t\t<theader>
\t\t\t<th name=\"Nombre\">Nombre</th><th name=\"Cargo\">Cargo</th><th name=\"Email\">Email</th><th name=\"LinkedIn\">LinkedIn</th>
\t\t</theader>
\t
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<td class=\"num\" id=\"Nombre\" >Beñat Galdós</td><td class=\"num\" id=\"Cargo\">Desarrollador + Coordinador</td><td class=\"num\" id=\"Email\">benatgaldos@opendeusto.es</td><td class=\"num\" id=\"LinkedIn\" ><a href=\"https://www.linkedin.com/in/benatgaldos/\" target=\"_blank\">Referencia</a></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"num\" id=\"Nombre\" >Anne Idigoras</td><td class=\"num\" id=\"Cargo\">Desarrolladora</td><td class=\"num\" id=\"Email\">anneidigoras@opendeusto.es</td><td class=\"num\" id=\"LinkedIn\" ><a href=\"https://www.linkedin.com/in/anne-idigoras-pagola-772326a8/\" target=\"_blank\">Referencia</a></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"num\" id=\"Nombre\" >Imanol Echeverría</td><td class=\"num\" id=\"Cargo\">Desarrollador</td><td class=\"num\" id=\"Email\">imanol.echeverria@opendeusto.es</td><td class=\"num\" id=\"LinkedIn\" ><a href=\"https://www.linkedin.com/in/imanol-echeverr%C3%ADa-franco-67617513b/\" target=\"_blank\">Referencia</a></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"num\" id=\"Nombre\" >Garikoitz Bereciartua</td><td class=\"num\" id=\"Cargo\">Desarrollador</td><td class=\"num\" id=\"Email\">gari.bereciartua@opendeusto.es</td><td class=\"num\" id=\"LinkedIn\" ><a href=\"https://www.linkedin.com/in/garikoitz-bereciartua-ram%C3%B3n-a40322152/\" target=\"_blank\">Referencia</a></td>
\t\t\t</tr>
\t\t</tbody>
\t</table>
\t</div>

{% endblock %}
\t

", "CongresoCongresoBundle:Congreso:contact.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Congreso/contact.html.twig");
    }
}
