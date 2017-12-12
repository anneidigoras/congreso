<?php

/* CongresoCongresoBundle:Congreso:show.html.twig */
class __TwigTemplate_ffec613441a28ecfd87f966aca42e7c2c55de46edd9df1282576b35436c70d90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layout.html.twig", "CongresoCongresoBundle:Congreso:show.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
            'linea' => array($this, 'block_linea'),
            'sidebar1' => array($this, 'block_sidebar1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CongresoCongresoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39e977c12deee5cc9c9f12feaf8b859ad0a8bcd8c97e6a807a83b75b97a98500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39e977c12deee5cc9c9f12feaf8b859ad0a8bcd8c97e6a807a83b75b97a98500->enter($__internal_39e977c12deee5cc9c9f12feaf8b859ad0a8bcd8c97e6a807a83b75b97a98500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39e977c12deee5cc9c9f12feaf8b859ad0a8bcd8c97e6a807a83b75b97a98500->leave($__internal_39e977c12deee5cc9c9f12feaf8b859ad0a8bcd8c97e6a807a83b75b97a98500_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_daa920c3ce0bbd66e1711a4bdc6fa9ce3b4a4176ae55ff9c2b7e4817a181c7a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa920c3ce0bbd66e1711a4bdc6fa9ce3b4a4176ae55ff9c2b7e4817a181c7a3->enter($__internal_daa920c3ce0bbd66e1711a4bdc6fa9ce3b4a4176ae55ff9c2b7e4817a181c7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Artículo seleccionado";
        
        $__internal_daa920c3ce0bbd66e1711a4bdc6fa9ce3b4a4176ae55ff9c2b7e4817a181c7a3->leave($__internal_daa920c3ce0bbd66e1711a4bdc6fa9ce3b4a4176ae55ff9c2b7e4817a181c7a3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ec15d0001ce18395e9f69a5a1258f8e0e8cefbdad755779f2777004a0421925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ec15d0001ce18395e9f69a5a1258f8e0e8cefbdad755779f2777004a0421925->enter($__internal_3ec15d0001ce18395e9f69a5a1258f8e0e8cefbdad755779f2777004a0421925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<h4>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "titulo", array()), "html", null, true);
        echo "</h4>

\t<div class=\"body\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "cuerpo", array()), "html", null, true);
        echo "</div>
\t<div class=\"separator\"></div>
\t<div class=\"date\">Fecha de publicación: ";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "publicacion", array()), "d-m-Y"), "html", null, true);
        echo "</div>
\t<div class=\"separator\"></div>
\t<section class=\"comments\" id=\"comments\">
\t\t<section class=\"previous-comments\">
\t\t\t<h3>Comentarios</h3>
\t\t\t";
        // line 15
        $this->loadTemplate("CongresoCongresoBundle:Comment:list.html.twig", "CongresoCongresoBundle:Congreso:show.html.twig", 15)->display(array_merge($context, array("comments" => ($context["comments"] ?? $this->getContext($context, "comments")))));
        // line 16
        echo "\t\t</section>
\t\t<h3>Añadir comentario</h3>
\t\t";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("CongresoCongresoBundle:Comment:new", array("articulo_id" => $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "id", array()))));
        echo "
    </section>
";
        
        $__internal_3ec15d0001ce18395e9f69a5a1258f8e0e8cefbdad755779f2777004a0421925->leave($__internal_3ec15d0001ce18395e9f69a5a1258f8e0e8cefbdad755779f2777004a0421925_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ff29154a101e257ee81bb161bf92d3e874387251eaec7fd563fb5a358624e350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff29154a101e257ee81bb161bf92d3e874387251eaec7fd563fb5a358624e350->enter($__internal_ff29154a101e257ee81bb161bf92d3e874387251eaec7fd563fb5a358624e350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/congreso.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_ff29154a101e257ee81bb161bf92d3e874387251eaec7fd563fb5a358624e350->leave($__internal_ff29154a101e257ee81bb161bf92d3e874387251eaec7fd563fb5a358624e350_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_780ca044a6f8acbe229019f8e9d5e9e2e60cf91b0838b2f25cfc79b40a4551cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_780ca044a6f8acbe229019f8e9d5e9e2e60cf91b0838b2f25cfc79b40a4551cd->enter($__internal_780ca044a6f8acbe229019f8e9d5e9e2e60cf91b0838b2f25cfc79b40a4551cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "<div class=\"tracks\">
";
        // line 29
        $this->loadTemplate("CongresoCongresoBundle:Track:list.html.twig", "CongresoCongresoBundle:Congreso:show.html.twig", 29)->display(array_merge($context, array("track" => ($context["track"] ?? $this->getContext($context, "track")))));
        // line 30
        echo "</div>
";
        
        $__internal_780ca044a6f8acbe229019f8e9d5e9e2e60cf91b0838b2f25cfc79b40a4551cd->leave($__internal_780ca044a6f8acbe229019f8e9d5e9e2e60cf91b0838b2f25cfc79b40a4551cd_prof);

    }

    // line 33
    public function block_linea($context, array $blocks = array())
    {
        $__internal_f399a5ddabad2b4d5d4c94cc2c15bbfcb721c9347b416c38c163edfb53ac3650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f399a5ddabad2b4d5d4c94cc2c15bbfcb721c9347b416c38c163edfb53ac3650->enter($__internal_f399a5ddabad2b4d5d4c94cc2c15bbfcb721c9347b416c38c163edfb53ac3650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        // line 34
        echo "<div class=\"separator\"></div>
";
        
        $__internal_f399a5ddabad2b4d5d4c94cc2c15bbfcb721c9347b416c38c163edfb53ac3650->leave($__internal_f399a5ddabad2b4d5d4c94cc2c15bbfcb721c9347b416c38c163edfb53ac3650_prof);

    }

    // line 37
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_73034ad2205b6aede2b704b4877e372580dfecb0482e6a8083b8e8dbd90b91ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73034ad2205b6aede2b704b4877e372580dfecb0482e6a8083b8e8dbd90b91ef->enter($__internal_73034ad2205b6aede2b704b4877e372580dfecb0482e6a8083b8e8dbd90b91ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        // line 38
        echo "<div class=\"cientificos\">
";
        // line 39
        $this->loadTemplate("CongresoCongresoBundle:Cientifico:list.html.twig", "CongresoCongresoBundle:Congreso:show.html.twig", 39)->display(array_merge($context, array("cientificos" => ($context["cientificos"] ?? $this->getContext($context, "cientificos")))));
        // line 40
        echo "</div>
<div class=\"separator\"></div>
<p class=\"continue\"><a href=\"/\">Volver a la Home</a></p>
<p class=\"continue\"><a href=\"/contact\">Contacto</a></p>
";
        
        $__internal_73034ad2205b6aede2b704b4877e372580dfecb0482e6a8083b8e8dbd90b91ef->leave($__internal_73034ad2205b6aede2b704b4877e372580dfecb0482e6a8083b8e8dbd90b91ef_prof);

    }

    public function getTemplateName()
    {
        return "CongresoCongresoBundle:Congreso:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 40,  153 => 39,  150 => 38,  144 => 37,  136 => 34,  130 => 33,  122 => 30,  120 => 29,  117 => 28,  111 => 27,  102 => 24,  98 => 23,  92 => 22,  82 => 18,  78 => 16,  76 => 15,  68 => 10,  63 => 8,  57 => 6,  51 => 5,  39 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Congreso/CongresoBundle/Resources/views/Congreso/show.html.twig #}
{% extends \"CongresoCongresoBundle::layout.html.twig\" %}
{% block title %}Artículo seleccionado{% endblock %}

{% block body %}
\t<h4>{{ articulo.titulo }}</h4>

\t<div class=\"body\">{{ articulo.cuerpo }}</div>
\t<div class=\"separator\"></div>
\t<div class=\"date\">Fecha de publicación: {{ articulo.publicacion |date('d-m-Y') }}</div>
\t<div class=\"separator\"></div>
\t<section class=\"comments\" id=\"comments\">
\t\t<section class=\"previous-comments\">
\t\t\t<h3>Comentarios</h3>
\t\t\t{% include 'CongresoCongresoBundle:Comment:list.html.twig' with { 'comments': comments } %}
\t\t</section>
\t\t<h3>Añadir comentario</h3>
\t\t{{ render(controller( 'CongresoCongresoBundle:Comment:new', { 'articulo_id': articulo.id } )) }}
    </section>
{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link href=\"{{ asset('css/congreso.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
{% endblock %}

{% block sidebar %}
<div class=\"tracks\">
{% include 'CongresoCongresoBundle:Track:list.html.twig' with { 'track': track } %}
</div>
{% endblock %}

{% block linea %}
<div class=\"separator\"></div>
{% endblock %}

{% block sidebar1 %}
<div class=\"cientificos\">
{% include 'CongresoCongresoBundle:Cientifico:list.html.twig' with { 'cientificos': cientificos } %}
</div>
<div class=\"separator\"></div>
<p class=\"continue\"><a href=\"/\">Volver a la Home</a></p>
<p class=\"continue\"><a href=\"/contact\">Contacto</a></p>
{% endblock %}

", "CongresoCongresoBundle:Congreso:show.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Congreso\\show.html.twig");
    }
}
