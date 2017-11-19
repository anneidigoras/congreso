<?php

/* CongresoCongresoBundle:Congreso:show.html.twig */
class __TwigTemplate_3dff56d62effeac3120bbe5c361666a604ad6c1475d5617d11c560b21697d77d extends Twig_Template
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
        $__internal_ab811dda278fc4a99361439e092241286c8b817a2a4c39d4814654bf093557aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab811dda278fc4a99361439e092241286c8b817a2a4c39d4814654bf093557aa->enter($__internal_ab811dda278fc4a99361439e092241286c8b817a2a4c39d4814654bf093557aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab811dda278fc4a99361439e092241286c8b817a2a4c39d4814654bf093557aa->leave($__internal_ab811dda278fc4a99361439e092241286c8b817a2a4c39d4814654bf093557aa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6accd7b7b9b267181ae5be0dda20b81f27270ea2cf0e18904e87cdafeb2169c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6accd7b7b9b267181ae5be0dda20b81f27270ea2cf0e18904e87cdafeb2169c0->enter($__internal_6accd7b7b9b267181ae5be0dda20b81f27270ea2cf0e18904e87cdafeb2169c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "List of Articulos";
        
        $__internal_6accd7b7b9b267181ae5be0dda20b81f27270ea2cf0e18904e87cdafeb2169c0->leave($__internal_6accd7b7b9b267181ae5be0dda20b81f27270ea2cf0e18904e87cdafeb2169c0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d24996b2543a6fd80eb3f16612291c1400da9b3b5783690f7073878917b2af5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d24996b2543a6fd80eb3f16612291c1400da9b3b5783690f7073878917b2af5d->enter($__internal_d24996b2543a6fd80eb3f16612291c1400da9b3b5783690f7073878917b2af5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "titulo", array()), "html", null, true);
        echo "</h1>

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
        
        $__internal_d24996b2543a6fd80eb3f16612291c1400da9b3b5783690f7073878917b2af5d->leave($__internal_d24996b2543a6fd80eb3f16612291c1400da9b3b5783690f7073878917b2af5d_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c8922260da15c4efac50ce60e27746a3821de3513269b51882886f56902fbe24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8922260da15c4efac50ce60e27746a3821de3513269b51882886f56902fbe24->enter($__internal_c8922260da15c4efac50ce60e27746a3821de3513269b51882886f56902fbe24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/congreso.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_c8922260da15c4efac50ce60e27746a3821de3513269b51882886f56902fbe24->leave($__internal_c8922260da15c4efac50ce60e27746a3821de3513269b51882886f56902fbe24_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_5398826ca1ef1c51c76fc6ea076f28bf25a094013647f1d50ac31fe235b84369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5398826ca1ef1c51c76fc6ea076f28bf25a094013647f1d50ac31fe235b84369->enter($__internal_5398826ca1ef1c51c76fc6ea076f28bf25a094013647f1d50ac31fe235b84369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "<div class=\"tracks\">
";
        // line 29
        $this->loadTemplate("CongresoCongresoBundle:Track:list.html.twig", "CongresoCongresoBundle:Congreso:show.html.twig", 29)->display(array_merge($context, array("tracks" => ($context["tracks"] ?? $this->getContext($context, "tracks")))));
        // line 30
        echo "</div>
";
        
        $__internal_5398826ca1ef1c51c76fc6ea076f28bf25a094013647f1d50ac31fe235b84369->leave($__internal_5398826ca1ef1c51c76fc6ea076f28bf25a094013647f1d50ac31fe235b84369_prof);

    }

    // line 33
    public function block_linea($context, array $blocks = array())
    {
        $__internal_9396314aa2eab8213bc48f394c80262ebf3197dd09599e85edf9dc2d11240fad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9396314aa2eab8213bc48f394c80262ebf3197dd09599e85edf9dc2d11240fad->enter($__internal_9396314aa2eab8213bc48f394c80262ebf3197dd09599e85edf9dc2d11240fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        // line 34
        echo "<div class=\"separator\"></div>
";
        
        $__internal_9396314aa2eab8213bc48f394c80262ebf3197dd09599e85edf9dc2d11240fad->leave($__internal_9396314aa2eab8213bc48f394c80262ebf3197dd09599e85edf9dc2d11240fad_prof);

    }

    // line 37
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_849d048436926b196799dcc82f57e881e65d27a94642675b16c36862b66d89c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_849d048436926b196799dcc82f57e881e65d27a94642675b16c36862b66d89c8->enter($__internal_849d048436926b196799dcc82f57e881e65d27a94642675b16c36862b66d89c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        // line 38
        echo "<div class=\"cientificos\">
";
        // line 39
        $this->loadTemplate("CongresoCongresoBundle:Cientifico:list.html.twig", "CongresoCongresoBundle:Congreso:show.html.twig", 39)->display(array_merge($context, array("cientificos" => ($context["cientificos"] ?? $this->getContext($context, "cientificos")))));
        // line 40
        echo "</div>
";
        
        $__internal_849d048436926b196799dcc82f57e881e65d27a94642675b16c36862b66d89c8->leave($__internal_849d048436926b196799dcc82f57e881e65d27a94642675b16c36862b66d89c8_prof);

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
{% block title %}List of Articulos{% endblock %}

{% block body %}
\t<h1>{{ articulo.titulo }}</h1>

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
{% include 'CongresoCongresoBundle:Track:list.html.twig' with { 'tracks': tracks } %}
</div>
{% endblock %}

{% block linea %}
<div class=\"separator\"></div>
{% endblock %}

{% block sidebar1 %}
<div class=\"cientificos\">
{% include 'CongresoCongresoBundle:Cientifico:list.html.twig' with { 'cientificos': cientificos } %}
</div>
{% endblock %}


", "CongresoCongresoBundle:Congreso:show.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Congreso/show.html.twig");
    }
}
