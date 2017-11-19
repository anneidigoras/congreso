<?php

/* @CongresoCongreso/Congreso/show.html.twig */
class __TwigTemplate_f891846c724c50c8122fb8eb3c18e92221ff7c32335b4cd283c82352770f18e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layout.html.twig", "@CongresoCongreso/Congreso/show.html.twig", 2);
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
        $__internal_f29f41bad9abc2eee128fc376c6a2f2756e95c5c8a68f47d2c8d44f807e5d664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f29f41bad9abc2eee128fc376c6a2f2756e95c5c8a68f47d2c8d44f807e5d664->enter($__internal_f29f41bad9abc2eee128fc376c6a2f2756e95c5c8a68f47d2c8d44f807e5d664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Congreso/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f29f41bad9abc2eee128fc376c6a2f2756e95c5c8a68f47d2c8d44f807e5d664->leave($__internal_f29f41bad9abc2eee128fc376c6a2f2756e95c5c8a68f47d2c8d44f807e5d664_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_49b7780bf45eec14e4d26fccd6a2464d3f1ddf658f89388bb71e8f22b00721e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49b7780bf45eec14e4d26fccd6a2464d3f1ddf658f89388bb71e8f22b00721e6->enter($__internal_49b7780bf45eec14e4d26fccd6a2464d3f1ddf658f89388bb71e8f22b00721e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "List of Articulos";
        
        $__internal_49b7780bf45eec14e4d26fccd6a2464d3f1ddf658f89388bb71e8f22b00721e6->leave($__internal_49b7780bf45eec14e4d26fccd6a2464d3f1ddf658f89388bb71e8f22b00721e6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f4f9d70602bcaa73e654cdfb99f4dac0feca74f39f5046844252887e75757ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f4f9d70602bcaa73e654cdfb99f4dac0feca74f39f5046844252887e75757ea->enter($__internal_3f4f9d70602bcaa73e654cdfb99f4dac0feca74f39f5046844252887e75757ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("CongresoCongresoBundle:Comment:list.html.twig", "@CongresoCongreso/Congreso/show.html.twig", 15)->display(array_merge($context, array("comments" => ($context["comments"] ?? $this->getContext($context, "comments")))));
        // line 16
        echo "\t\t</section>
\t\t<h3>Añadir comentario</h3>
\t\t";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("CongresoCongresoBundle:Comment:new", array("articulo_id" => $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "id", array()))));
        echo "
    </section>
";
        
        $__internal_3f4f9d70602bcaa73e654cdfb99f4dac0feca74f39f5046844252887e75757ea->leave($__internal_3f4f9d70602bcaa73e654cdfb99f4dac0feca74f39f5046844252887e75757ea_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e4396f372ad12295d20e8d60fb488cda5da4acfe6872c0386f08e6410c0ce361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4396f372ad12295d20e8d60fb488cda5da4acfe6872c0386f08e6410c0ce361->enter($__internal_e4396f372ad12295d20e8d60fb488cda5da4acfe6872c0386f08e6410c0ce361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/congreso.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_e4396f372ad12295d20e8d60fb488cda5da4acfe6872c0386f08e6410c0ce361->leave($__internal_e4396f372ad12295d20e8d60fb488cda5da4acfe6872c0386f08e6410c0ce361_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_6dda87f2c4940b5c8b24bd7ffbf3f9dba9f9190a5d3844c275c8c82f145d00a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dda87f2c4940b5c8b24bd7ffbf3f9dba9f9190a5d3844c275c8c82f145d00a6->enter($__internal_6dda87f2c4940b5c8b24bd7ffbf3f9dba9f9190a5d3844c275c8c82f145d00a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "<div class=\"tracks\">
";
        // line 29
        $this->loadTemplate("CongresoCongresoBundle:Track:list.html.twig", "@CongresoCongreso/Congreso/show.html.twig", 29)->display(array_merge($context, array("tracks" => ($context["tracks"] ?? $this->getContext($context, "tracks")))));
        // line 30
        echo "</div>
";
        
        $__internal_6dda87f2c4940b5c8b24bd7ffbf3f9dba9f9190a5d3844c275c8c82f145d00a6->leave($__internal_6dda87f2c4940b5c8b24bd7ffbf3f9dba9f9190a5d3844c275c8c82f145d00a6_prof);

    }

    // line 33
    public function block_linea($context, array $blocks = array())
    {
        $__internal_938736a8e2e7ad3d14127d186d858c16240d97ce44d3a6bc0f374050e8a43037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_938736a8e2e7ad3d14127d186d858c16240d97ce44d3a6bc0f374050e8a43037->enter($__internal_938736a8e2e7ad3d14127d186d858c16240d97ce44d3a6bc0f374050e8a43037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        // line 34
        echo "<div class=\"separator\"></div>
";
        
        $__internal_938736a8e2e7ad3d14127d186d858c16240d97ce44d3a6bc0f374050e8a43037->leave($__internal_938736a8e2e7ad3d14127d186d858c16240d97ce44d3a6bc0f374050e8a43037_prof);

    }

    // line 37
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_d13e8cce4cca6b64c149f247cfbbb0ef6561b8c684bd3189436824d6528d7ab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d13e8cce4cca6b64c149f247cfbbb0ef6561b8c684bd3189436824d6528d7ab3->enter($__internal_d13e8cce4cca6b64c149f247cfbbb0ef6561b8c684bd3189436824d6528d7ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        // line 38
        echo "<div class=\"cientificos\">
";
        // line 39
        $this->loadTemplate("CongresoCongresoBundle:Cientifico:list.html.twig", "@CongresoCongreso/Congreso/show.html.twig", 39)->display(array_merge($context, array("cientificos" => ($context["cientificos"] ?? $this->getContext($context, "cientificos")))));
        // line 40
        echo "</div>
<div class=\"separator\"></div>
<p class=\"continue\"><a href=\"/\">Volver a la Home</a></p>
<p class=\"continue\"><a href=\"/contact\">Contacto</a></p>
";
        
        $__internal_d13e8cce4cca6b64c149f247cfbbb0ef6561b8c684bd3189436824d6528d7ab3->leave($__internal_d13e8cce4cca6b64c149f247cfbbb0ef6561b8c684bd3189436824d6528d7ab3_prof);

    }

    public function getTemplateName()
    {
        return "@CongresoCongreso/Congreso/show.html.twig";
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
<div class=\"separator\"></div>
<p class=\"continue\"><a href=\"/\">Volver a la Home</a></p>
<p class=\"continue\"><a href=\"/contact\">Contacto</a></p>
{% endblock %}

", "@CongresoCongreso/Congreso/show.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Congreso\\show.html.twig");
    }
}
