<?php

/* CongresoCongresoBundle:Congreso:contactIng.html.twig */
class __TwigTemplate_d174625a5517c011d11e8342b4d02064e7a5ae28ecd724099735248276032bce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layoutIng.html.twig", "CongresoCongresoBundle:Congreso:contactIng.html.twig", 2);
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
        return "CongresoCongresoBundle::layoutIng.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed6e76a9edc94916fb8fec50632e96c282d9dd5c4be4e4b004ef089087f32cc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed6e76a9edc94916fb8fec50632e96c282d9dd5c4be4e4b004ef089087f32cc3->enter($__internal_ed6e76a9edc94916fb8fec50632e96c282d9dd5c4be4e4b004ef089087f32cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:contactIng.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed6e76a9edc94916fb8fec50632e96c282d9dd5c4be4e4b004ef089087f32cc3->leave($__internal_ed6e76a9edc94916fb8fec50632e96c282d9dd5c4be4e4b004ef089087f32cc3_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2c1cf17c247190d2d09de31d91bd3dd475e4b9e9300164a6e860c0df8357b200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c1cf17c247190d2d09de31d91bd3dd475e4b9e9300164a6e860c0df8357b200->enter($__internal_2c1cf17c247190d2d09de31d91bd3dd475e4b9e9300164a6e860c0df8357b200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_2c1cf17c247190d2d09de31d91bd3dd475e4b9e9300164a6e860c0df8357b200->leave($__internal_2c1cf17c247190d2d09de31d91bd3dd475e4b9e9300164a6e860c0df8357b200_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_b30e93314ea4b2aad895e75352dcd242195500e37e98adb6a67355cef2bab599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b30e93314ea4b2aad895e75352dcd242195500e37e98adb6a67355cef2bab599->enter($__internal_b30e93314ea4b2aad895e75352dcd242195500e37e98adb6a67355cef2bab599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_b30e93314ea4b2aad895e75352dcd242195500e37e98adb6a67355cef2bab599->leave($__internal_b30e93314ea4b2aad895e75352dcd242195500e37e98adb6a67355cef2bab599_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_6bfbb8ded4bec9c8015072f6dbf06422db58cbef3ca8b6023cb41461a14a0840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bfbb8ded4bec9c8015072f6dbf06422db58cbef3ca8b6023cb41461a14a0840->enter($__internal_6bfbb8ded4bec9c8015072f6dbf06422db58cbef3ca8b6023cb41461a14a0840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <header>
        <h1>Contact with us</h1>
    </header>
    <p>You can find the repository of the page in the nect link:</p>
    <a href=\"https://github.com/anneidigoras/congreso\" target=\"_blank\">Scientific Congress(Repo)</a>
    <div class=\"separator\"></div>
    <p>More information about the collaborators:</p>

 ";
        
        $__internal_6bfbb8ded4bec9c8015072f6dbf06422db58cbef3ca8b6023cb41461a14a0840->leave($__internal_6bfbb8ded4bec9c8015072f6dbf06422db58cbef3ca8b6023cb41461a14a0840_prof);

    }

    // line 24
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_4522a1adc5d1df5d741e476adc57bbd48f93bab3c765f7b7810e6fe4ff467f78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4522a1adc5d1df5d741e476adc57bbd48f93bab3c765f7b7810e6fe4ff467f78->enter($__internal_4522a1adc5d1df5d741e476adc57bbd48f93bab3c765f7b7810e6fe4ff467f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

        // line 25
        echo "
\t<div class=\"tabla\">
\t<table id=\"tabla\">


\t\t\t
\t\t<theader>
\t\t\t<th name=\"Nombre\">Name</th><th name=\"Position\">Cargo</th><th name=\"Email\">Email</th><th name=\"LinkedIn\">LinkedIn</th>
\t\t</theader>
\t
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<td class=\"num\" id=\"Nombre\" >Beñat Galdós</td><td class=\"num\" id=\"Cargo\">Developer + Coordinator</td><td class=\"num\" id=\"Email\">benatgaldos@opendeusto.es</td><td class=\"num\" id=\"LinkedIn\" ><a href=\"https://www.linkedin.com/in/benatgaldos/\" target=\"_blank\">Referencia</a></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"num\" id=\"Nombre\" >Anne Idigoras</td><td class=\"num\" id=\"Cargo\">Developer</td><td class=\"num\" id=\"Email\">anneidigoras@opendeusto.es</td><td class=\"num\" id=\"LinkedIn\" ><a href=\"https://www.linkedin.com/in/anne-idigoras-pagola-772326a8/\" target=\"_blank\">Referencia</a></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"num\" id=\"Nombre\" >Imanol Echeverría</td><td class=\"num\" id=\"Cargo\">Developer</td><td class=\"num\" id=\"Email\">imanol.echeverria@opendeusto.es</td><td class=\"num\" id=\"LinkedIn\" ><a href=\"https://www.linkedin.com/in/imanol-echeverr%C3%ADa-franco-67617513b/\" target=\"_blank\">Referencia</a></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"num\" id=\"Nombre\" >Garikoitz Bereciartua</td><td class=\"num\" id=\"Cargo\">Developer</td><td class=\"num\" id=\"Email\">gari.bereciartua@opendeusto.es</td><td class=\"num\" id=\"LinkedIn\" ><a href=\"https://www.linkedin.com/in/garikoitz-bereciartua-ram%C3%B3n-a40322152/\" target=\"_blank\">Referencia</a></td>
\t\t\t</tr>
\t\t</tbody>
\t</table>
\t</div>

";
        
        $__internal_4522a1adc5d1df5d741e476adc57bbd48f93bab3c765f7b7810e6fe4ff467f78->leave($__internal_4522a1adc5d1df5d741e476adc57bbd48f93bab3c765f7b7810e6fe4ff467f78_prof);

    }

    // line 54
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9307388a3c0952ee30805b692b9e3ac82042e02108df93ccf635bb1fbac9c9fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9307388a3c0952ee30805b692b9e3ac82042e02108df93ccf635bb1fbac9c9fe->enter($__internal_9307388a3c0952ee30805b692b9e3ac82042e02108df93ccf635bb1fbac9c9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 55
        echo "    <p class=\"continue\"><a href=\"/\">Back Home</a></p>
";
        
        $__internal_9307388a3c0952ee30805b692b9e3ac82042e02108df93ccf635bb1fbac9c9fe->leave($__internal_9307388a3c0952ee30805b692b9e3ac82042e02108df93ccf635bb1fbac9c9fe_prof);

    }

    public function getTemplateName()
    {
        return "CongresoCongresoBundle:Congreso:contactIng.html.twig";
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
{% extends 'CongresoCongresoBundle::layoutIng.html.twig' %}

{% block javascripts %}
            <script type=\"text/javascript\" src=\"{{ asset('js/jquery.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/script.js') }}\"></script>
{% endblock %}


{% block title %}Contact{% endblock%}

{% block body %}
    <header>
        <h1>Contact with us</h1>
    </header>
    <p>You can find the repository of the page in the nect link:</p>
    <a href=\"https://github.com/anneidigoras/congreso\" target=\"_blank\">Scientific Congress(Repo)</a>
    <div class=\"separator\"></div>
    <p>More information about the collaborators:</p>

 {% endblock %}
 

{% block tabla %}

\t<div class=\"tabla\">
\t<table id=\"tabla\">


\t\t\t
\t\t<theader>
\t\t\t<th name=\"Nombre\">Name</th><th name=\"Position\">Cargo</th><th name=\"Email\">Email</th><th name=\"LinkedIn\">LinkedIn</th>
\t\t</theader>
\t
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<td class=\"num\" id=\"Nombre\" >Beñat Galdós</td><td class=\"num\" id=\"Cargo\">Developer + Coordinator</td><td class=\"num\" id=\"Email\">benatgaldos@opendeusto.es</td><td class=\"num\" id=\"LinkedIn\" ><a href=\"https://www.linkedin.com/in/benatgaldos/\" target=\"_blank\">Referencia</a></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"num\" id=\"Nombre\" >Anne Idigoras</td><td class=\"num\" id=\"Cargo\">Developer</td><td class=\"num\" id=\"Email\">anneidigoras@opendeusto.es</td><td class=\"num\" id=\"LinkedIn\" ><a href=\"https://www.linkedin.com/in/anne-idigoras-pagola-772326a8/\" target=\"_blank\">Referencia</a></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"num\" id=\"Nombre\" >Imanol Echeverría</td><td class=\"num\" id=\"Cargo\">Developer</td><td class=\"num\" id=\"Email\">imanol.echeverria@opendeusto.es</td><td class=\"num\" id=\"LinkedIn\" ><a href=\"https://www.linkedin.com/in/imanol-echeverr%C3%ADa-franco-67617513b/\" target=\"_blank\">Referencia</a></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"num\" id=\"Nombre\" >Garikoitz Bereciartua</td><td class=\"num\" id=\"Cargo\">Developer</td><td class=\"num\" id=\"Email\">gari.bereciartua@opendeusto.es</td><td class=\"num\" id=\"LinkedIn\" ><a href=\"https://www.linkedin.com/in/garikoitz-bereciartua-ram%C3%B3n-a40322152/\" target=\"_blank\">Referencia</a></td>
\t\t\t</tr>
\t\t</tbody>
\t</table>
\t</div>

{% endblock %}

{% block sidebar %}
    <p class=\"continue\"><a href=\"/\">Back Home</a></p>
{% endblock %}
", "CongresoCongresoBundle:Congreso:contactIng.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Congreso/contactIng.html.twig");
    }
}
