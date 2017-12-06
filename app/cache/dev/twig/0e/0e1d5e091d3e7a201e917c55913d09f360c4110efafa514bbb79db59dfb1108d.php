<?php

/* @CongresoCongreso/Congreso/show.html.twig */
class __TwigTemplate_a57b127db4d7d2f013c99edc443270c9b7687e918c23b5502b5c246419a951af extends Twig_Template
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
        $__internal_954d933ce0983f190f0cebf37a16f34927d0e3245f7dc440ee98c55df5439729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_954d933ce0983f190f0cebf37a16f34927d0e3245f7dc440ee98c55df5439729->enter($__internal_954d933ce0983f190f0cebf37a16f34927d0e3245f7dc440ee98c55df5439729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Congreso/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_954d933ce0983f190f0cebf37a16f34927d0e3245f7dc440ee98c55df5439729->leave($__internal_954d933ce0983f190f0cebf37a16f34927d0e3245f7dc440ee98c55df5439729_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_80c98268fe2e038dd8b00769548698247d42b65b6abd7843271a7712283cad23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80c98268fe2e038dd8b00769548698247d42b65b6abd7843271a7712283cad23->enter($__internal_80c98268fe2e038dd8b00769548698247d42b65b6abd7843271a7712283cad23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Artículo seleccionado";
        
        $__internal_80c98268fe2e038dd8b00769548698247d42b65b6abd7843271a7712283cad23->leave($__internal_80c98268fe2e038dd8b00769548698247d42b65b6abd7843271a7712283cad23_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_638f81f6a7e787e636aa7709678590515ed6628d84fd4d203caca12011a8c0be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_638f81f6a7e787e636aa7709678590515ed6628d84fd4d203caca12011a8c0be->enter($__internal_638f81f6a7e787e636aa7709678590515ed6628d84fd4d203caca12011a8c0be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_638f81f6a7e787e636aa7709678590515ed6628d84fd4d203caca12011a8c0be->leave($__internal_638f81f6a7e787e636aa7709678590515ed6628d84fd4d203caca12011a8c0be_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6c07145c2e1426e946ba15a07e9f3e3260322a101453ab80f872677d8c174d86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c07145c2e1426e946ba15a07e9f3e3260322a101453ab80f872677d8c174d86->enter($__internal_6c07145c2e1426e946ba15a07e9f3e3260322a101453ab80f872677d8c174d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/congreso.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_6c07145c2e1426e946ba15a07e9f3e3260322a101453ab80f872677d8c174d86->leave($__internal_6c07145c2e1426e946ba15a07e9f3e3260322a101453ab80f872677d8c174d86_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_6ea8ea5ddf3e1c55e40cc1158ed2287fa39d63c3170dea5142dadd77b9e4956d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ea8ea5ddf3e1c55e40cc1158ed2287fa39d63c3170dea5142dadd77b9e4956d->enter($__internal_6ea8ea5ddf3e1c55e40cc1158ed2287fa39d63c3170dea5142dadd77b9e4956d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "<div class=\"tracks\">
";
        // line 29
        $this->loadTemplate("CongresoCongresoBundle:Track:list.html.twig", "@CongresoCongreso/Congreso/show.html.twig", 29)->display(array_merge($context, array("tracks" => ($context["tracks"] ?? $this->getContext($context, "tracks")))));
        // line 30
        echo "</div>
";
        
        $__internal_6ea8ea5ddf3e1c55e40cc1158ed2287fa39d63c3170dea5142dadd77b9e4956d->leave($__internal_6ea8ea5ddf3e1c55e40cc1158ed2287fa39d63c3170dea5142dadd77b9e4956d_prof);

    }

    // line 33
    public function block_linea($context, array $blocks = array())
    {
        $__internal_1d92910fac2a1f26a3141b7d062e60e37e4aca4f55ad33921f23394eec2ca853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d92910fac2a1f26a3141b7d062e60e37e4aca4f55ad33921f23394eec2ca853->enter($__internal_1d92910fac2a1f26a3141b7d062e60e37e4aca4f55ad33921f23394eec2ca853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        // line 34
        echo "<div class=\"separator\"></div>
";
        
        $__internal_1d92910fac2a1f26a3141b7d062e60e37e4aca4f55ad33921f23394eec2ca853->leave($__internal_1d92910fac2a1f26a3141b7d062e60e37e4aca4f55ad33921f23394eec2ca853_prof);

    }

    // line 37
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_d77250801436dd62061c41fbfd8a5f1c6f680d449c4b6cacd0d6fd51a8559ca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d77250801436dd62061c41fbfd8a5f1c6f680d449c4b6cacd0d6fd51a8559ca9->enter($__internal_d77250801436dd62061c41fbfd8a5f1c6f680d449c4b6cacd0d6fd51a8559ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

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
        
        $__internal_d77250801436dd62061c41fbfd8a5f1c6f680d449c4b6cacd0d6fd51a8559ca9->leave($__internal_d77250801436dd62061c41fbfd8a5f1c6f680d449c4b6cacd0d6fd51a8559ca9_prof);

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
