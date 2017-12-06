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
        $__internal_3a78c91088b60118d50a038e81bf78903cf41a8079905cec4acc84ea2e94e58a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a78c91088b60118d50a038e81bf78903cf41a8079905cec4acc84ea2e94e58a->enter($__internal_3a78c91088b60118d50a038e81bf78903cf41a8079905cec4acc84ea2e94e58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Congreso/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a78c91088b60118d50a038e81bf78903cf41a8079905cec4acc84ea2e94e58a->leave($__internal_3a78c91088b60118d50a038e81bf78903cf41a8079905cec4acc84ea2e94e58a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0fc1564c01e4989d80f0bf8482be8c835c8fbbd9df8db43334ce91f22d0572ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fc1564c01e4989d80f0bf8482be8c835c8fbbd9df8db43334ce91f22d0572ef->enter($__internal_0fc1564c01e4989d80f0bf8482be8c835c8fbbd9df8db43334ce91f22d0572ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Artículo seleccionado";
        
        $__internal_0fc1564c01e4989d80f0bf8482be8c835c8fbbd9df8db43334ce91f22d0572ef->leave($__internal_0fc1564c01e4989d80f0bf8482be8c835c8fbbd9df8db43334ce91f22d0572ef_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d3741c5e8b2f8b7b2b74aa6c5eff74b19cb43b8e78afe9bbbc23eb5c20e25e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d3741c5e8b2f8b7b2b74aa6c5eff74b19cb43b8e78afe9bbbc23eb5c20e25e1->enter($__internal_2d3741c5e8b2f8b7b2b74aa6c5eff74b19cb43b8e78afe9bbbc23eb5c20e25e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2d3741c5e8b2f8b7b2b74aa6c5eff74b19cb43b8e78afe9bbbc23eb5c20e25e1->leave($__internal_2d3741c5e8b2f8b7b2b74aa6c5eff74b19cb43b8e78afe9bbbc23eb5c20e25e1_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_72934d259809e7b4bdca96617bcdec5f6485cb1dfc93a27bc0f332b6c96826c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72934d259809e7b4bdca96617bcdec5f6485cb1dfc93a27bc0f332b6c96826c2->enter($__internal_72934d259809e7b4bdca96617bcdec5f6485cb1dfc93a27bc0f332b6c96826c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/congreso.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_72934d259809e7b4bdca96617bcdec5f6485cb1dfc93a27bc0f332b6c96826c2->leave($__internal_72934d259809e7b4bdca96617bcdec5f6485cb1dfc93a27bc0f332b6c96826c2_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_6a9a840653de5837a5636daefac072467f3a843056036be06d6f17042597d6d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a9a840653de5837a5636daefac072467f3a843056036be06d6f17042597d6d9->enter($__internal_6a9a840653de5837a5636daefac072467f3a843056036be06d6f17042597d6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "<div class=\"tracks\">
";
        // line 29
        $this->loadTemplate("CongresoCongresoBundle:Track:list.html.twig", "@CongresoCongreso/Congreso/show.html.twig", 29)->display(array_merge($context, array("tracks" => ($context["tracks"] ?? $this->getContext($context, "tracks")))));
        // line 30
        echo "</div>
";
        
        $__internal_6a9a840653de5837a5636daefac072467f3a843056036be06d6f17042597d6d9->leave($__internal_6a9a840653de5837a5636daefac072467f3a843056036be06d6f17042597d6d9_prof);

    }

    // line 33
    public function block_linea($context, array $blocks = array())
    {
        $__internal_d2bcf63e062c98c8b44577f8705c889750598125a42fdde83804538323a5c66a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2bcf63e062c98c8b44577f8705c889750598125a42fdde83804538323a5c66a->enter($__internal_d2bcf63e062c98c8b44577f8705c889750598125a42fdde83804538323a5c66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        // line 34
        echo "<div class=\"separator\"></div>
";
        
        $__internal_d2bcf63e062c98c8b44577f8705c889750598125a42fdde83804538323a5c66a->leave($__internal_d2bcf63e062c98c8b44577f8705c889750598125a42fdde83804538323a5c66a_prof);

    }

    // line 37
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_e1ad9557ddd356ce7625e0972e679e84dd2cbdca367db58a91a633ff35df8bbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1ad9557ddd356ce7625e0972e679e84dd2cbdca367db58a91a633ff35df8bbf->enter($__internal_e1ad9557ddd356ce7625e0972e679e84dd2cbdca367db58a91a633ff35df8bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

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
        
        $__internal_e1ad9557ddd356ce7625e0972e679e84dd2cbdca367db58a91a633ff35df8bbf->leave($__internal_e1ad9557ddd356ce7625e0972e679e84dd2cbdca367db58a91a633ff35df8bbf_prof);

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
