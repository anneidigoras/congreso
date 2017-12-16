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
        $__internal_579112aeb7ee880a3befd87298227f5e38104a07e16f34d7dbd064367402700f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_579112aeb7ee880a3befd87298227f5e38104a07e16f34d7dbd064367402700f->enter($__internal_579112aeb7ee880a3befd87298227f5e38104a07e16f34d7dbd064367402700f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_579112aeb7ee880a3befd87298227f5e38104a07e16f34d7dbd064367402700f->leave($__internal_579112aeb7ee880a3befd87298227f5e38104a07e16f34d7dbd064367402700f_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d6120df23803dcf4ac1f0bfec87d2c54ae36dc77deb1c1efabbd5194f0774b97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6120df23803dcf4ac1f0bfec87d2c54ae36dc77deb1c1efabbd5194f0774b97->enter($__internal_d6120df23803dcf4ac1f0bfec87d2c54ae36dc77deb1c1efabbd5194f0774b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_d6120df23803dcf4ac1f0bfec87d2c54ae36dc77deb1c1efabbd5194f0774b97->leave($__internal_d6120df23803dcf4ac1f0bfec87d2c54ae36dc77deb1c1efabbd5194f0774b97_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_a03bf3e52d35766bbb06f37c90f340f905a524eaef7531145ffd3d3ef2bcd201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a03bf3e52d35766bbb06f37c90f340f905a524eaef7531145ffd3d3ef2bcd201->enter($__internal_a03bf3e52d35766bbb06f37c90f340f905a524eaef7531145ffd3d3ef2bcd201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_a03bf3e52d35766bbb06f37c90f340f905a524eaef7531145ffd3d3ef2bcd201->leave($__internal_a03bf3e52d35766bbb06f37c90f340f905a524eaef7531145ffd3d3ef2bcd201_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd7a74264b918226147004246263b97dbd3a6280619a5105fc2224d2e78f3a5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd7a74264b918226147004246263b97dbd3a6280619a5105fc2224d2e78f3a5d->enter($__internal_cd7a74264b918226147004246263b97dbd3a6280619a5105fc2224d2e78f3a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cd7a74264b918226147004246263b97dbd3a6280619a5105fc2224d2e78f3a5d->leave($__internal_cd7a74264b918226147004246263b97dbd3a6280619a5105fc2224d2e78f3a5d_prof);

    }

    // line 24
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_884e6ecea5f51a1e14447c2071b0960bcb7038204e4efccdadbb1f2054ab8c0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_884e6ecea5f51a1e14447c2071b0960bcb7038204e4efccdadbb1f2054ab8c0b->enter($__internal_884e6ecea5f51a1e14447c2071b0960bcb7038204e4efccdadbb1f2054ab8c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

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
        
        $__internal_884e6ecea5f51a1e14447c2071b0960bcb7038204e4efccdadbb1f2054ab8c0b->leave($__internal_884e6ecea5f51a1e14447c2071b0960bcb7038204e4efccdadbb1f2054ab8c0b_prof);

    }

    // line 54
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_16f12c285736fc6b5336486a5d8bba0baeeae8e33c98378ade44428a1560039c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16f12c285736fc6b5336486a5d8bba0baeeae8e33c98378ade44428a1560039c->enter($__internal_16f12c285736fc6b5336486a5d8bba0baeeae8e33c98378ade44428a1560039c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_16f12c285736fc6b5336486a5d8bba0baeeae8e33c98378ade44428a1560039c->leave($__internal_16f12c285736fc6b5336486a5d8bba0baeeae8e33c98378ade44428a1560039c_prof);

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

", "CongresoCongresoBundle:Congreso:contact.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Congreso/contact.html.twig");
    }
}
