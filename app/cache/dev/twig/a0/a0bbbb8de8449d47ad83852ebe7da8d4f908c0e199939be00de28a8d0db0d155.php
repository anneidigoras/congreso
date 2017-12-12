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
        $__internal_90b26314b3b4853d094a6ee6a5c954dfef154888b2a67c739a5c809b925451aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b26314b3b4853d094a6ee6a5c954dfef154888b2a67c739a5c809b925451aa->enter($__internal_90b26314b3b4853d094a6ee6a5c954dfef154888b2a67c739a5c809b925451aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:contactIng.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90b26314b3b4853d094a6ee6a5c954dfef154888b2a67c739a5c809b925451aa->leave($__internal_90b26314b3b4853d094a6ee6a5c954dfef154888b2a67c739a5c809b925451aa_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6001050184b27eb5ce380c001dc47711856f22db086b5a29a7a295913e9cf50f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6001050184b27eb5ce380c001dc47711856f22db086b5a29a7a295913e9cf50f->enter($__internal_6001050184b27eb5ce380c001dc47711856f22db086b5a29a7a295913e9cf50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6001050184b27eb5ce380c001dc47711856f22db086b5a29a7a295913e9cf50f->leave($__internal_6001050184b27eb5ce380c001dc47711856f22db086b5a29a7a295913e9cf50f_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_9796c5300623969272770e88e1c408c5fae433f31375e500547e0fc3808a17c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9796c5300623969272770e88e1c408c5fae433f31375e500547e0fc3808a17c7->enter($__internal_9796c5300623969272770e88e1c408c5fae433f31375e500547e0fc3808a17c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_9796c5300623969272770e88e1c408c5fae433f31375e500547e0fc3808a17c7->leave($__internal_9796c5300623969272770e88e1c408c5fae433f31375e500547e0fc3808a17c7_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_594ff560f87c36fd04acdd9e7c27e7b325126c6c17837d39f07f0a83919829dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_594ff560f87c36fd04acdd9e7c27e7b325126c6c17837d39f07f0a83919829dd->enter($__internal_594ff560f87c36fd04acdd9e7c27e7b325126c6c17837d39f07f0a83919829dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <header>
        <h1>Contact with us</h1>
    </header>
    <p>You can find the repository of the page in the nect link:</p>
    <a href=\"https://github.com/anneidigoras/congreso\" target=\"_blank\">Scientific Congress(Repo)</a>
    <div class=\"separator\"></div>
    <p>More information about the collaborators:</p>

 ";
        
        $__internal_594ff560f87c36fd04acdd9e7c27e7b325126c6c17837d39f07f0a83919829dd->leave($__internal_594ff560f87c36fd04acdd9e7c27e7b325126c6c17837d39f07f0a83919829dd_prof);

    }

    // line 24
    public function block_tabla($context, array $blocks = array())
    {
        $__internal_4562270bd241092ea4c8ffa03aeca7cfc0ad96f221dee0546e5a4fc47da38a3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4562270bd241092ea4c8ffa03aeca7cfc0ad96f221dee0546e5a4fc47da38a3e->enter($__internal_4562270bd241092ea4c8ffa03aeca7cfc0ad96f221dee0546e5a4fc47da38a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabla"));

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
        
        $__internal_4562270bd241092ea4c8ffa03aeca7cfc0ad96f221dee0546e5a4fc47da38a3e->leave($__internal_4562270bd241092ea4c8ffa03aeca7cfc0ad96f221dee0546e5a4fc47da38a3e_prof);

    }

    // line 54
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_4bc7666fe0d9f836a719be667ea4aa3722a20d5161ed62bbab9d814169a4eeff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bc7666fe0d9f836a719be667ea4aa3722a20d5161ed62bbab9d814169a4eeff->enter($__internal_4bc7666fe0d9f836a719be667ea4aa3722a20d5161ed62bbab9d814169a4eeff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 55
        echo "    <p class=\"continue\"><a href=\"/\">Back Home</a></p>
";
        
        $__internal_4bc7666fe0d9f836a719be667ea4aa3722a20d5161ed62bbab9d814169a4eeff->leave($__internal_4bc7666fe0d9f836a719be667ea4aa3722a20d5161ed62bbab9d814169a4eeff_prof);

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
