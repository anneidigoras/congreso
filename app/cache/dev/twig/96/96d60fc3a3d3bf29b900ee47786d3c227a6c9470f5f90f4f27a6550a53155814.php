<?php

/* CongresoCongresoBundle:Congreso:showIng.html.twig */
class __TwigTemplate_8c4234e2bbfbdc8535baa34040b1f078d5cfd6efb02cdb00d06bdfa505897849 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layoutIng.html.twig", "CongresoCongresoBundle:Congreso:showIng.html.twig", 2);
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
        return "CongresoCongresoBundle::layoutIng.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_202bf85490a075c31501eda8e6ddf5b203c95662ba987c03714610ac957a1672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_202bf85490a075c31501eda8e6ddf5b203c95662ba987c03714610ac957a1672->enter($__internal_202bf85490a075c31501eda8e6ddf5b203c95662ba987c03714610ac957a1672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:showIng.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_202bf85490a075c31501eda8e6ddf5b203c95662ba987c03714610ac957a1672->leave($__internal_202bf85490a075c31501eda8e6ddf5b203c95662ba987c03714610ac957a1672_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_be55b5644618759d626318084adefcf4f9df5ac4283901e77a4fdc8fe07d5557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be55b5644618759d626318084adefcf4f9df5ac4283901e77a4fdc8fe07d5557->enter($__internal_be55b5644618759d626318084adefcf4f9df5ac4283901e77a4fdc8fe07d5557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Selected article";
        
        $__internal_be55b5644618759d626318084adefcf4f9df5ac4283901e77a4fdc8fe07d5557->leave($__internal_be55b5644618759d626318084adefcf4f9df5ac4283901e77a4fdc8fe07d5557_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_644bda89b4c5a63c36643505e50b2ff2b5572fe1eb699c865d5fb71c3045dfbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_644bda89b4c5a63c36643505e50b2ff2b5572fe1eb699c865d5fb71c3045dfbf->enter($__internal_644bda89b4c5a63c36643505e50b2ff2b5572fe1eb699c865d5fb71c3045dfbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<h4>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "titulo", array()), "html", null, true);
        echo "</h4>

\t<div class=\"body\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "cuerpo", array()), "html", null, true);
        echo "</div>
\t<div class=\"separator\"></div>
\t<div class=\"date\">Publication date: ";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "publicacion", array()), "d-m-Y"), "html", null, true);
        echo "</div>
\t<div class=\"separator\"></div>
\t<section class=\"comments\" id=\"comments\">
\t\t<section class=\"previous-comments\">
\t\t\t<h3>Comentarios</h3>
\t\t\t";
        // line 15
        $this->loadTemplate("CongresoCongresoBundle:Comment:list.html.twig", "CongresoCongresoBundle:Congreso:showIng.html.twig", 15)->display(array_merge($context, array("comments" => ($context["comments"] ?? $this->getContext($context, "comments")))));
        // line 16
        echo "\t\t</section>
\t\t<h3>Añadir comentario</h3>
\t\t";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("CongresoCongresoBundle:Comment:new", array("articulo_id" => $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "id", array()))));
        echo "
    </section>
";
        
        $__internal_644bda89b4c5a63c36643505e50b2ff2b5572fe1eb699c865d5fb71c3045dfbf->leave($__internal_644bda89b4c5a63c36643505e50b2ff2b5572fe1eb699c865d5fb71c3045dfbf_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9e890fa8318291665f9cba12a807a370fe4d0435dc5f7b869ab1d5a4e9222cc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e890fa8318291665f9cba12a807a370fe4d0435dc5f7b869ab1d5a4e9222cc5->enter($__internal_9e890fa8318291665f9cba12a807a370fe4d0435dc5f7b869ab1d5a4e9222cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/congreso.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_9e890fa8318291665f9cba12a807a370fe4d0435dc5f7b869ab1d5a4e9222cc5->leave($__internal_9e890fa8318291665f9cba12a807a370fe4d0435dc5f7b869ab1d5a4e9222cc5_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_a0fcff0804223f57640f9bac6f0534196b063be893fe843b88b030644c77025b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0fcff0804223f57640f9bac6f0534196b063be893fe843b88b030644c77025b->enter($__internal_a0fcff0804223f57640f9bac6f0534196b063be893fe843b88b030644c77025b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "<div class=\"tracks\">
";
        // line 29
        $this->loadTemplate("CongresoCongresoBundle:Track:list.html.twig", "CongresoCongresoBundle:Congreso:showIng.html.twig", 29)->display(array_merge($context, array("tracks" => ($context["tracks"] ?? $this->getContext($context, "tracks")))));
        // line 30
        echo "</div>
";
        
        $__internal_a0fcff0804223f57640f9bac6f0534196b063be893fe843b88b030644c77025b->leave($__internal_a0fcff0804223f57640f9bac6f0534196b063be893fe843b88b030644c77025b_prof);

    }

    // line 33
    public function block_linea($context, array $blocks = array())
    {
        $__internal_1cdd167cb724c7c4c9b26ece6a7d359fc7386496f78c39d4114fd951cedf842c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cdd167cb724c7c4c9b26ece6a7d359fc7386496f78c39d4114fd951cedf842c->enter($__internal_1cdd167cb724c7c4c9b26ece6a7d359fc7386496f78c39d4114fd951cedf842c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        // line 34
        echo "<div class=\"separator\"></div>
";
        
        $__internal_1cdd167cb724c7c4c9b26ece6a7d359fc7386496f78c39d4114fd951cedf842c->leave($__internal_1cdd167cb724c7c4c9b26ece6a7d359fc7386496f78c39d4114fd951cedf842c_prof);

    }

    // line 37
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_55197f8e3ce0f8959ec1918c9915a65245bf72e00a81dad9d3f80bf9a1a93789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55197f8e3ce0f8959ec1918c9915a65245bf72e00a81dad9d3f80bf9a1a93789->enter($__internal_55197f8e3ce0f8959ec1918c9915a65245bf72e00a81dad9d3f80bf9a1a93789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        // line 38
        echo "<div class=\"cientificos\">
";
        // line 39
        $this->loadTemplate("CongresoCongresoBundle:Cientifico:list.html.twig", "CongresoCongresoBundle:Congreso:showIng.html.twig", 39)->display(array_merge($context, array("cientificos" => ($context["cientificos"] ?? $this->getContext($context, "cientificos")))));
        // line 40
        echo "</div>
<div class=\"separator\"></div>
<p class=\"continue\"><a href=\"/\">Volver a la Home</a></p>
<p class=\"continue\"><a href=\"/contact\">Contacto</a></p>
";
        
        $__internal_55197f8e3ce0f8959ec1918c9915a65245bf72e00a81dad9d3f80bf9a1a93789->leave($__internal_55197f8e3ce0f8959ec1918c9915a65245bf72e00a81dad9d3f80bf9a1a93789_prof);

    }

    public function getTemplateName()
    {
        return "CongresoCongresoBundle:Congreso:showIng.html.twig";
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
{% extends \"CongresoCongresoBundle::layoutIng.html.twig\" %}
{% block title %}Selected article{% endblock %}

{% block body %}
\t<h4>{{ articulo.titulo }}</h4>

\t<div class=\"body\">{{ articulo.cuerpo }}</div>
\t<div class=\"separator\"></div>
\t<div class=\"date\">Publication date: {{ articulo.publicacion |date('d-m-Y') }}</div>
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

", "CongresoCongresoBundle:Congreso:showIng.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Congreso/showIng.html.twig");
    }
}
