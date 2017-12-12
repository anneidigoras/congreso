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
        $__internal_16c5689e17cfc8cd2e388ab401c12c4e11b56d2d682fc2e7bc991a931bff250f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16c5689e17cfc8cd2e388ab401c12c4e11b56d2d682fc2e7bc991a931bff250f->enter($__internal_16c5689e17cfc8cd2e388ab401c12c4e11b56d2d682fc2e7bc991a931bff250f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:contactIng.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16c5689e17cfc8cd2e388ab401c12c4e11b56d2d682fc2e7bc991a931bff250f->leave($__internal_16c5689e17cfc8cd2e388ab401c12c4e11b56d2d682fc2e7bc991a931bff250f_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_64edbc3e6d6bc5ad414f64041dc49fab74f2d400c616679e53cdbb6647c16d9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64edbc3e6d6bc5ad414f64041dc49fab74f2d400c616679e53cdbb6647c16d9e->enter($__internal_64edbc3e6d6bc5ad414f64041dc49fab74f2d400c616679e53cdbb6647c16d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_64edbc3e6d6bc5ad414f64041dc49fab74f2d400c616679e53cdbb6647c16d9e->leave($__internal_64edbc3e6d6bc5ad414f64041dc49fab74f2d400c616679e53cdbb6647c16d9e_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_146a6a384fe7dbffa5858abbac904657eb65e5a934705095c90cca36c070ca47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_146a6a384fe7dbffa5858abbac904657eb65e5a934705095c90cca36c070ca47->enter($__internal_146a6a384fe7dbffa5858abbac904657eb65e5a934705095c90cca36c070ca47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_146a6a384fe7dbffa5858abbac904657eb65e5a934705095c90cca36c070ca47->leave($__internal_146a6a384fe7dbffa5858abbac904657eb65e5a934705095c90cca36c070ca47_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3592511dccaf29b3fcccc411d28acf1560610fd16315236bf107d3fc6aa7aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3592511dccaf29b3fcccc411d28acf1560610fd16315236bf107d3fc6aa7aac->enter($__internal_f3592511dccaf29b3fcccc411d28acf1560610fd16315236bf107d3fc6aa7aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <header>
        <h1>Contact with us</h1>
    </header>
    <p>You can find the repository of the page in the nect link:</p>
    <a href=\"https://github.com/anneidigoras/congreso\" target=\"_blank\">Scientific Congress(Repo)</a>
    <div class=\"separator\"></div>
    <p>More information about the collaborators:</p>

 ";
        
        $__internal_f3592511dccaf29b3fcccc411d28acf1560610fd16315236bf107d3fc6aa7aac->leave($__internal_f3592511dccaf29b3fcccc411d28acf1560610fd16315236bf107d3fc6aa7aac_prof);

    }

    // line 24
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_3c0ce69703b30c74d3d893bdbd7360d403bbbee1f4d3432242fb4857dbe3a3d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c0ce69703b30c74d3d893bdbd7360d403bbbee1f4d3432242fb4857dbe3a3d6->enter($__internal_3c0ce69703b30c74d3d893bdbd7360d403bbbee1f4d3432242fb4857dbe3a3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

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
        
        $__internal_3c0ce69703b30c74d3d893bdbd7360d403bbbee1f4d3432242fb4857dbe3a3d6->leave($__internal_3c0ce69703b30c74d3d893bdbd7360d403bbbee1f4d3432242fb4857dbe3a3d6_prof);

    }

    // line 54
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_fadca4140a83d9d722211b35dc5a918cba95d298e63b382799326465e5a9c592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fadca4140a83d9d722211b35dc5a918cba95d298e63b382799326465e5a9c592->enter($__internal_fadca4140a83d9d722211b35dc5a918cba95d298e63b382799326465e5a9c592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 55
        echo "    <p class=\"continue\"><a href=\"/\">Back Home</a></p>
";
        
        $__internal_fadca4140a83d9d722211b35dc5a918cba95d298e63b382799326465e5a9c592->leave($__internal_fadca4140a83d9d722211b35dc5a918cba95d298e63b382799326465e5a9c592_prof);

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
