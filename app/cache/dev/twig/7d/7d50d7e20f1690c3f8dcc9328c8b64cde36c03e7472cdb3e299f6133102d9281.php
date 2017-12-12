<?php

/* @CongresoCongreso/Congreso/contactIng.html.twig */
class __TwigTemplate_9ed1bd6d0ea0adafb877bc348e2cfeeaa3de7c9286b660b7c354a24ed0bc1245 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layoutIng.html.twig", "@CongresoCongreso/Congreso/contactIng.html.twig", 2);
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
        $__internal_ecf72e8f7f5578217c188704f71557e02df519a333f2ace4abecb02f185e32b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf72e8f7f5578217c188704f71557e02df519a333f2ace4abecb02f185e32b7->enter($__internal_ecf72e8f7f5578217c188704f71557e02df519a333f2ace4abecb02f185e32b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Congreso/contactIng.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecf72e8f7f5578217c188704f71557e02df519a333f2ace4abecb02f185e32b7->leave($__internal_ecf72e8f7f5578217c188704f71557e02df519a333f2ace4abecb02f185e32b7_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_215a976eaf15d6e0027d541086e815f77c262747ef112540db7e9e885666c259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_215a976eaf15d6e0027d541086e815f77c262747ef112540db7e9e885666c259->enter($__internal_215a976eaf15d6e0027d541086e815f77c262747ef112540db7e9e885666c259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_215a976eaf15d6e0027d541086e815f77c262747ef112540db7e9e885666c259->leave($__internal_215a976eaf15d6e0027d541086e815f77c262747ef112540db7e9e885666c259_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b3d64e472d3dbf1620505ca45675281fcf977451ea861aa0b16bf2000f19750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b3d64e472d3dbf1620505ca45675281fcf977451ea861aa0b16bf2000f19750->enter($__internal_7b3d64e472d3dbf1620505ca45675281fcf977451ea861aa0b16bf2000f19750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_7b3d64e472d3dbf1620505ca45675281fcf977451ea861aa0b16bf2000f19750->leave($__internal_7b3d64e472d3dbf1620505ca45675281fcf977451ea861aa0b16bf2000f19750_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_4673eedc209766979af134ca578df4e56f6feac126cabc99fa95f75a3d3fc375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4673eedc209766979af134ca578df4e56f6feac126cabc99fa95f75a3d3fc375->enter($__internal_4673eedc209766979af134ca578df4e56f6feac126cabc99fa95f75a3d3fc375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <header>
        <h1>Contact with us</h1>
    </header>
    <p>You can find the repository of the page in the nect link:</p>
    <a href=\"https://github.com/anneidigoras/congreso\" target=\"_blank\">Scientific Congress(Repo)</a>
    <div class=\"separator\"></div>
    <p>More information about the collaborators:</p>

 ";
        
        $__internal_4673eedc209766979af134ca578df4e56f6feac126cabc99fa95f75a3d3fc375->leave($__internal_4673eedc209766979af134ca578df4e56f6feac126cabc99fa95f75a3d3fc375_prof);

    }

    // line 24
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_c2553d10c908e9830bd4ae60113a33094a8131fd2f09b959c1b8516810a8cb27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2553d10c908e9830bd4ae60113a33094a8131fd2f09b959c1b8516810a8cb27->enter($__internal_c2553d10c908e9830bd4ae60113a33094a8131fd2f09b959c1b8516810a8cb27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

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
        
        $__internal_c2553d10c908e9830bd4ae60113a33094a8131fd2f09b959c1b8516810a8cb27->leave($__internal_c2553d10c908e9830bd4ae60113a33094a8131fd2f09b959c1b8516810a8cb27_prof);

    }

    // line 54
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_2711926e3810ee3c609b2c1e23b5effc4b250e4288d95b2278233283234f053a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2711926e3810ee3c609b2c1e23b5effc4b250e4288d95b2278233283234f053a->enter($__internal_2711926e3810ee3c609b2c1e23b5effc4b250e4288d95b2278233283234f053a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 55
        echo "    <p class=\"continue\"><a href=\"/\">Back Home</a></p>
";
        
        $__internal_2711926e3810ee3c609b2c1e23b5effc4b250e4288d95b2278233283234f053a->leave($__internal_2711926e3810ee3c609b2c1e23b5effc4b250e4288d95b2278233283234f053a_prof);

    }

    public function getTemplateName()
    {
        return "@CongresoCongreso/Congreso/contactIng.html.twig";
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
", "@CongresoCongreso/Congreso/contactIng.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Congreso\\contactIng.html.twig");
    }
}
