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
        );
    }

    protected function doGetParent(array $context)
    {
        return "CongresoCongresoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_494557142895f41b56cd45f9d4c7c9cfb22539232b52e5868426b8657ed892ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_494557142895f41b56cd45f9d4c7c9cfb22539232b52e5868426b8657ed892ea->enter($__internal_494557142895f41b56cd45f9d4c7c9cfb22539232b52e5868426b8657ed892ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Congreso/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_494557142895f41b56cd45f9d4c7c9cfb22539232b52e5868426b8657ed892ea->leave($__internal_494557142895f41b56cd45f9d4c7c9cfb22539232b52e5868426b8657ed892ea_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8d360610db1eb2d0283538489b90bbaadd1e85ad22b2ebbf2901294f6e8ba5fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d360610db1eb2d0283538489b90bbaadd1e85ad22b2ebbf2901294f6e8ba5fc->enter($__internal_8d360610db1eb2d0283538489b90bbaadd1e85ad22b2ebbf2901294f6e8ba5fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_8d360610db1eb2d0283538489b90bbaadd1e85ad22b2ebbf2901294f6e8ba5fc->leave($__internal_8d360610db1eb2d0283538489b90bbaadd1e85ad22b2ebbf2901294f6e8ba5fc_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1c68f214f8c00337be89baa6101ae8c673808131824d6ce11237225b5837679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1c68f214f8c00337be89baa6101ae8c673808131824d6ce11237225b5837679->enter($__internal_d1c68f214f8c00337be89baa6101ae8c673808131824d6ce11237225b5837679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_d1c68f214f8c00337be89baa6101ae8c673808131824d6ce11237225b5837679->leave($__internal_d1c68f214f8c00337be89baa6101ae8c673808131824d6ce11237225b5837679_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_c944f385e545c3944ae68c0eb29efeec37e2cba93a135b3a9f5ee215d1a96825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c944f385e545c3944ae68c0eb29efeec37e2cba93a135b3a9f5ee215d1a96825->enter($__internal_c944f385e545c3944ae68c0eb29efeec37e2cba93a135b3a9f5ee215d1a96825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c944f385e545c3944ae68c0eb29efeec37e2cba93a135b3a9f5ee215d1a96825->leave($__internal_c944f385e545c3944ae68c0eb29efeec37e2cba93a135b3a9f5ee215d1a96825_prof);

    }

    // line 25
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_055a82a83d43d1f213ced0614870688bcf8f277500d9be1e50b7c808beb37ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_055a82a83d43d1f213ced0614870688bcf8f277500d9be1e50b7c808beb37ea2->enter($__internal_055a82a83d43d1f213ced0614870688bcf8f277500d9be1e50b7c808beb37ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

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
        
        $__internal_055a82a83d43d1f213ced0614870688bcf8f277500d9be1e50b7c808beb37ea2->leave($__internal_055a82a83d43d1f213ced0614870688bcf8f277500d9be1e50b7c808beb37ea2_prof);

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

", "@CongresoCongreso/Congreso/contact.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Congreso\\contact.html.twig");
    }
}
