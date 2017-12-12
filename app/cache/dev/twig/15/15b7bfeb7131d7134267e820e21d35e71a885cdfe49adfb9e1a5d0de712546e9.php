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
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CongresoCongresoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b70618a906bb0e3f917728e0fecc6123b8f072837553b2732d53be69b3ea2e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b70618a906bb0e3f917728e0fecc6123b8f072837553b2732d53be69b3ea2e3->enter($__internal_5b70618a906bb0e3f917728e0fecc6123b8f072837553b2732d53be69b3ea2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b70618a906bb0e3f917728e0fecc6123b8f072837553b2732d53be69b3ea2e3->leave($__internal_5b70618a906bb0e3f917728e0fecc6123b8f072837553b2732d53be69b3ea2e3_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4231f6aee4ca122d2f19e2f42ef9b8a39754102daa383bf590c4120e8f7801b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4231f6aee4ca122d2f19e2f42ef9b8a39754102daa383bf590c4120e8f7801b9->enter($__internal_4231f6aee4ca122d2f19e2f42ef9b8a39754102daa383bf590c4120e8f7801b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_4231f6aee4ca122d2f19e2f42ef9b8a39754102daa383bf590c4120e8f7801b9->leave($__internal_4231f6aee4ca122d2f19e2f42ef9b8a39754102daa383bf590c4120e8f7801b9_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_658aaebe16ae21ee7e5728202ae60eb24e1c0d4e472ba00070206d16ae16e58b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_658aaebe16ae21ee7e5728202ae60eb24e1c0d4e472ba00070206d16ae16e58b->enter($__internal_658aaebe16ae21ee7e5728202ae60eb24e1c0d4e472ba00070206d16ae16e58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_658aaebe16ae21ee7e5728202ae60eb24e1c0d4e472ba00070206d16ae16e58b->leave($__internal_658aaebe16ae21ee7e5728202ae60eb24e1c0d4e472ba00070206d16ae16e58b_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_0af13eb32325f26cf4d3022f241506cea603041f08bb0048a1de320aac828060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0af13eb32325f26cf4d3022f241506cea603041f08bb0048a1de320aac828060->enter($__internal_0af13eb32325f26cf4d3022f241506cea603041f08bb0048a1de320aac828060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <header>
        <h1>Contacta con nosotros</h1>
    </header>
    <p>A continuación puedes encontrar el repositorio para esta página de Congreso Científico subido a GitHub:</p>
    <a href=\"https://github.com/anneidigoras/congreso\" target=\"_blank\">Congreso Científico (Repo)</a>
    <div class=\"separator\"></div>
    <p>Información detallada de los colaboradores del proyecto:</p>

 ";
        
        $__internal_0af13eb32325f26cf4d3022f241506cea603041f08bb0048a1de320aac828060->leave($__internal_0af13eb32325f26cf4d3022f241506cea603041f08bb0048a1de320aac828060_prof);

    }

    // line 24
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_91d9f958d063254b0cba3d0ab8e8d240e1845d5b17b1f846e3a51b5c49ec17a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91d9f958d063254b0cba3d0ab8e8d240e1845d5b17b1f846e3a51b5c49ec17a3->enter($__internal_91d9f958d063254b0cba3d0ab8e8d240e1845d5b17b1f846e3a51b5c49ec17a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

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
        
        $__internal_91d9f958d063254b0cba3d0ab8e8d240e1845d5b17b1f846e3a51b5c49ec17a3->leave($__internal_91d9f958d063254b0cba3d0ab8e8d240e1845d5b17b1f846e3a51b5c49ec17a3_prof);

    }

    // line 54
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_f22c56800509d596d8012b1fba874f208ae69125300d5445b258c7b6dc43baff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f22c56800509d596d8012b1fba874f208ae69125300d5445b258c7b6dc43baff->enter($__internal_f22c56800509d596d8012b1fba874f208ae69125300d5445b258c7b6dc43baff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 55
        echo "    <p class=\"continue\"><a href=\"/\">Volver a la Home</a></p>
";
        
        $__internal_f22c56800509d596d8012b1fba874f208ae69125300d5445b258c7b6dc43baff->leave($__internal_f22c56800509d596d8012b1fba874f208ae69125300d5445b258c7b6dc43baff_prof);

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

", "CongresoCongresoBundle:Congreso:contact.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Congreso/contact.html.twig");
    }
}
