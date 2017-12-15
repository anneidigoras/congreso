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
        $__internal_967f0a2cb18a36074d4dfdfa6d958e1cf35d1602c96d4c0789be57387fa04a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_967f0a2cb18a36074d4dfdfa6d958e1cf35d1602c96d4c0789be57387fa04a68->enter($__internal_967f0a2cb18a36074d4dfdfa6d958e1cf35d1602c96d4c0789be57387fa04a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Congreso/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_967f0a2cb18a36074d4dfdfa6d958e1cf35d1602c96d4c0789be57387fa04a68->leave($__internal_967f0a2cb18a36074d4dfdfa6d958e1cf35d1602c96d4c0789be57387fa04a68_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8cf643fa3868edf0915e471ccd55863d91c9dda160b509cbed0d9759edc8782c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cf643fa3868edf0915e471ccd55863d91c9dda160b509cbed0d9759edc8782c->enter($__internal_8cf643fa3868edf0915e471ccd55863d91c9dda160b509cbed0d9759edc8782c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_8cf643fa3868edf0915e471ccd55863d91c9dda160b509cbed0d9759edc8782c->leave($__internal_8cf643fa3868edf0915e471ccd55863d91c9dda160b509cbed0d9759edc8782c_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_57f71ee3192f97754bd13060af9c3d843a120aeb6a54c64caccda5bd3f42c149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57f71ee3192f97754bd13060af9c3d843a120aeb6a54c64caccda5bd3f42c149->enter($__internal_57f71ee3192f97754bd13060af9c3d843a120aeb6a54c64caccda5bd3f42c149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_57f71ee3192f97754bd13060af9c3d843a120aeb6a54c64caccda5bd3f42c149->leave($__internal_57f71ee3192f97754bd13060af9c3d843a120aeb6a54c64caccda5bd3f42c149_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_3799f6c7113076f12ea314b097bf54b2e3ce542c6c7b8d52af10635418446e34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3799f6c7113076f12ea314b097bf54b2e3ce542c6c7b8d52af10635418446e34->enter($__internal_3799f6c7113076f12ea314b097bf54b2e3ce542c6c7b8d52af10635418446e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <header>
       ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("<h1>Contacta con nosotros</h1>", array(), "messages");
        // line 15
        echo "    </header>
    <p>A continuación puedes encontrar el repositorio para esta página de Congreso Científico subido a GitHub:</p>
    <a href=\"https://github.com/anneidigoras/congreso\" target=\"_blank\">Congreso Científico (Repo)</a>
    <div class=\"separator\"></div>
    <p>Información detallada de los colaboradores del proyecto:</p>

 ";
        
        $__internal_3799f6c7113076f12ea314b097bf54b2e3ce542c6c7b8d52af10635418446e34->leave($__internal_3799f6c7113076f12ea314b097bf54b2e3ce542c6c7b8d52af10635418446e34_prof);

    }

    // line 24
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_94b0404b3bef8e6bbd5171a3e18f94dd27c783efeb2278dcd23ea361989d855d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94b0404b3bef8e6bbd5171a3e18f94dd27c783efeb2278dcd23ea361989d855d->enter($__internal_94b0404b3bef8e6bbd5171a3e18f94dd27c783efeb2278dcd23ea361989d855d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

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
        
        $__internal_94b0404b3bef8e6bbd5171a3e18f94dd27c783efeb2278dcd23ea361989d855d->leave($__internal_94b0404b3bef8e6bbd5171a3e18f94dd27c783efeb2278dcd23ea361989d855d_prof);

    }

    // line 54
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_3d51d5e8d79ffb608ea37583336e1bd13dc6a373a34bdbe4c8d44e75276289f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d51d5e8d79ffb608ea37583336e1bd13dc6a373a34bdbe4c8d44e75276289f7->enter($__internal_3d51d5e8d79ffb608ea37583336e1bd13dc6a373a34bdbe4c8d44e75276289f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_3d51d5e8d79ffb608ea37583336e1bd13dc6a373a34bdbe4c8d44e75276289f7->leave($__internal_3d51d5e8d79ffb608ea37583336e1bd13dc6a373a34bdbe4c8d44e75276289f7_prof);

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
        return array (  134 => 54,  100 => 25,  94 => 24,  81 => 15,  79 => 14,  76 => 13,  70 => 12,  58 => 10,  49 => 6,  44 => 5,  38 => 4,  11 => 2,);
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
       {% trans %} <h1>Contacta con nosotros</h1> {% endtrans %}
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
{% endblock %}

\t

", "@CongresoCongreso/Congreso/contact.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Congreso\\contact.html.twig");
    }
}
