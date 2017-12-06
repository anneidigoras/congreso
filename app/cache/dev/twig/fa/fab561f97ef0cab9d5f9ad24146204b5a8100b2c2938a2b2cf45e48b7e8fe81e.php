<?php

/* @CongresoCongreso/Congreso/contact.html.twig */
class __TwigTemplate_e57d3c5cbfced808b2cb0d3f03fdfd28da3cd9f1c74af02cafc897061f5d83a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layout.html.twig", "@CongresoCongreso/Congreso/contact.html.twig", 2);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'tabla' => array($this, 'block_tabla'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CongresoCongresoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_275a3a761a648c05c3fd41276b824164f73542c5e596274e77e36909a2d52068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_275a3a761a648c05c3fd41276b824164f73542c5e596274e77e36909a2d52068->enter($__internal_275a3a761a648c05c3fd41276b824164f73542c5e596274e77e36909a2d52068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Congreso/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_275a3a761a648c05c3fd41276b824164f73542c5e596274e77e36909a2d52068->leave($__internal_275a3a761a648c05c3fd41276b824164f73542c5e596274e77e36909a2d52068_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f42ea650924c32178f31c79d5d76234da56827434ea647b21a8bbcfc53693ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f42ea650924c32178f31c79d5d76234da56827434ea647b21a8bbcfc53693ae4->enter($__internal_f42ea650924c32178f31c79d5d76234da56827434ea647b21a8bbcfc53693ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_f42ea650924c32178f31c79d5d76234da56827434ea647b21a8bbcfc53693ae4->leave($__internal_f42ea650924c32178f31c79d5d76234da56827434ea647b21a8bbcfc53693ae4_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_4cbf1776700ad5048aedd258a7a925246c77e0b5f850214cb5069be28a74978d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cbf1776700ad5048aedd258a7a925246c77e0b5f850214cb5069be28a74978d->enter($__internal_4cbf1776700ad5048aedd258a7a925246c77e0b5f850214cb5069be28a74978d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_4cbf1776700ad5048aedd258a7a925246c77e0b5f850214cb5069be28a74978d->leave($__internal_4cbf1776700ad5048aedd258a7a925246c77e0b5f850214cb5069be28a74978d_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_57b5c86f3bced97172aced9404a911e97653b5659589cc35972da84e926335f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57b5c86f3bced97172aced9404a911e97653b5659589cc35972da84e926335f1->enter($__internal_57b5c86f3bced97172aced9404a911e97653b5659589cc35972da84e926335f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <header>
        <h1>Contacta con nosotros</h1>
    </header>
    <p>A continuación puedes encontrar el repositorio para esta página de Congreso Científico subido a GitHub:</p>
    <a href=\"https://github.com/anneidigoras/congreso\" target=\"_blank\">Congreso Científico (Repo)</a>
    <div class=\"separator\"></div>
    <p>Información detallada de los colaboradores del proyecto:</p>

 ";
        
        $__internal_57b5c86f3bced97172aced9404a911e97653b5659589cc35972da84e926335f1->leave($__internal_57b5c86f3bced97172aced9404a911e97653b5659589cc35972da84e926335f1_prof);

    }

    // line 24
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_0612a319748761e9259f5a4e13c907c36465488765a6988fce6601f2269b3643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0612a319748761e9259f5a4e13c907c36465488765a6988fce6601f2269b3643->enter($__internal_0612a319748761e9259f5a4e13c907c36465488765a6988fce6601f2269b3643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        // line 25
        echo "
\t<div class=\"tabla\">
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
        
        $__internal_0612a319748761e9259f5a4e13c907c36465488765a6988fce6601f2269b3643->leave($__internal_0612a319748761e9259f5a4e13c907c36465488765a6988fce6601f2269b3643_prof);

    }

    // line 54
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_654b17e9296c0ccbefc0393f557bc0487d448cbfcb90426bb168959b11a40e70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_654b17e9296c0ccbefc0393f557bc0487d448cbfcb90426bb168959b11a40e70->enter($__internal_654b17e9296c0ccbefc0393f557bc0487d448cbfcb90426bb168959b11a40e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 55
        echo "    <p class=\"continue\"><a href=\"/\">Volver a la Home</a></p>
";
        
        $__internal_654b17e9296c0ccbefc0393f557bc0487d448cbfcb90426bb168959b11a40e70->leave($__internal_654b17e9296c0ccbefc0393f557bc0487d448cbfcb90426bb168959b11a40e70_prof);

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
        return array (  137 => 55,  131 => 54,  97 => 25,  91 => 24,  76 => 13,  70 => 12,  58 => 10,  49 => 6,  44 => 5,  38 => 4,  11 => 2,);
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
    <header>
        <h1>Contacta con nosotros</h1>
    </header>
    <p>A continuación puedes encontrar el repositorio para esta página de Congreso Científico subido a GitHub:</p>
    <a href=\"https://github.com/anneidigoras/congreso\" target=\"_blank\">Congreso Científico (Repo)</a>
    <div class=\"separator\"></div>
    <p>Información detallada de los colaboradores del proyecto:</p>

 {% endblock %}
 

{% block tabla %}

\t<div class=\"tabla\">
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

{% block sidebar %}
    <p class=\"continue\"><a href=\"/\">Volver a la Home</a></p>
{% endblock %}

\t

", "@CongresoCongreso/Congreso/contact.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Congreso\\contact.html.twig");
    }
}
