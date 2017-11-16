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
        $__internal_3c8f21b6e9bb0d70566a81240ac608a7842187df5941ac42d4ca2fdde8eddbb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c8f21b6e9bb0d70566a81240ac608a7842187df5941ac42d4ca2fdde8eddbb2->enter($__internal_3c8f21b6e9bb0d70566a81240ac608a7842187df5941ac42d4ca2fdde8eddbb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Congreso/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c8f21b6e9bb0d70566a81240ac608a7842187df5941ac42d4ca2fdde8eddbb2->leave($__internal_3c8f21b6e9bb0d70566a81240ac608a7842187df5941ac42d4ca2fdde8eddbb2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f79b81265788facdf57f1ef87dc600055999b18f4ac0f5d93248030170773a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f79b81265788facdf57f1ef87dc600055999b18f4ac0f5d93248030170773a1->enter($__internal_1f79b81265788facdf57f1ef87dc600055999b18f4ac0f5d93248030170773a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "List of Articulos";
        
        $__internal_1f79b81265788facdf57f1ef87dc600055999b18f4ac0f5d93248030170773a1->leave($__internal_1f79b81265788facdf57f1ef87dc600055999b18f4ac0f5d93248030170773a1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9eee4712815df82178147582bf0330e4acc47e6b14bafa5dff78fa98aee57618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eee4712815df82178147582bf0330e4acc47e6b14bafa5dff78fa98aee57618->enter($__internal_9eee4712815df82178147582bf0330e4acc47e6b14bafa5dff78fa98aee57618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "titulo", array()), "html", null, true);
        echo "</h1>

\t<div class=\"body\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "cuerpo", array()), "html", null, true);
        echo "</div>
\t<div class=\"date\">";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "publicacion", array()), "d-m-Y"), "html", null, true);
        echo "</div>
\t<section class=\"comments\" id=\"comments\">
\t\t<section class=\"previous-comments\">
\t\t\t<h3>Comentarios</h3>
\t\t\t";
        // line 13
        $this->loadTemplate("CongresoCongresoBundle:Comment:list.html.twig", "@CongresoCongreso/Congreso/show.html.twig", 13)->display(array_merge($context, array("comments" => ($context["comments"] ?? $this->getContext($context, "comments")))));
        // line 14
        echo "\t\t</section>
\t\t<h3>Añadir comentario</h3>
\t\t";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("CongresoCongresoBundle:Comment:new", array("articulo_id" => $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "id", array()))));
        echo "
    </section>
";
        
        $__internal_9eee4712815df82178147582bf0330e4acc47e6b14bafa5dff78fa98aee57618->leave($__internal_9eee4712815df82178147582bf0330e4acc47e6b14bafa5dff78fa98aee57618_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_983e4629a675ca772e69879f4d4d84a4db658e0c8201bc982da9d0d566178663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_983e4629a675ca772e69879f4d4d84a4db658e0c8201bc982da9d0d566178663->enter($__internal_983e4629a675ca772e69879f4d4d84a4db658e0c8201bc982da9d0d566178663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 21
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/congreso.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_983e4629a675ca772e69879f4d4d84a4db658e0c8201bc982da9d0d566178663->leave($__internal_983e4629a675ca772e69879f4d4d84a4db658e0c8201bc982da9d0d566178663_prof);

    }

    // line 25
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_b2a753271ebda2820167ee2005acef3ad9af268ca02855559bbb6876678feba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2a753271ebda2820167ee2005acef3ad9af268ca02855559bbb6876678feba8->enter($__internal_b2a753271ebda2820167ee2005acef3ad9af268ca02855559bbb6876678feba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 26
        echo "<div class=\"tracks\">
";
        // line 27
        $this->loadTemplate("CongresoCongresoBundle:Track:list.html.twig", "@CongresoCongreso/Congreso/show.html.twig", 27)->display(array_merge($context, array("tracks" => ($context["tracks"] ?? $this->getContext($context, "tracks")))));
        // line 28
        echo "</div>
";
        
        $__internal_b2a753271ebda2820167ee2005acef3ad9af268ca02855559bbb6876678feba8->leave($__internal_b2a753271ebda2820167ee2005acef3ad9af268ca02855559bbb6876678feba8_prof);

    }

    // line 31
    public function block_linea($context, array $blocks = array())
    {
        $__internal_a024d73bad3bc18417324090bba52798bd0396a50ec8aedcd4386dffedf8aea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a024d73bad3bc18417324090bba52798bd0396a50ec8aedcd4386dffedf8aea0->enter($__internal_a024d73bad3bc18417324090bba52798bd0396a50ec8aedcd4386dffedf8aea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        // line 32
        echo "<p>-----------------</p>
";
        
        $__internal_a024d73bad3bc18417324090bba52798bd0396a50ec8aedcd4386dffedf8aea0->leave($__internal_a024d73bad3bc18417324090bba52798bd0396a50ec8aedcd4386dffedf8aea0_prof);

    }

    // line 35
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_e9ee9ba43f5df63162ec9d497b2e7aa61393a034c951b7b924ac9c1f748623dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9ee9ba43f5df63162ec9d497b2e7aa61393a034c951b7b924ac9c1f748623dc->enter($__internal_e9ee9ba43f5df63162ec9d497b2e7aa61393a034c951b7b924ac9c1f748623dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        // line 36
        echo "<div class=\"cientificos\">
";
        // line 37
        $this->loadTemplate("CongresoCongresoBundle:Cientifico:list.html.twig", "@CongresoCongreso/Congreso/show.html.twig", 37)->display(array_merge($context, array("cientificos" => ($context["cientificos"] ?? $this->getContext($context, "cientificos")))));
        // line 38
        echo "</div>
";
        
        $__internal_e9ee9ba43f5df63162ec9d497b2e7aa61393a034c951b7b924ac9c1f748623dc->leave($__internal_e9ee9ba43f5df63162ec9d497b2e7aa61393a034c951b7b924ac9c1f748623dc_prof);

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
        return array (  153 => 38,  151 => 37,  148 => 36,  142 => 35,  134 => 32,  128 => 31,  120 => 28,  118 => 27,  115 => 26,  109 => 25,  100 => 22,  96 => 21,  90 => 20,  80 => 16,  76 => 14,  74 => 13,  67 => 9,  63 => 8,  57 => 6,  51 => 5,  39 => 3,  11 => 2,);
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
\t<div class=\"date\">{{ articulo.publicacion |date('d-m-Y') }}</div>
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
<p>-----------------</p>
{% endblock %}

{% block sidebar1 %}
<div class=\"cientificos\">
{% include 'CongresoCongresoBundle:Cientifico:list.html.twig' with { 'cientificos': cientificos } %}
</div>
{% endblock %}


", "@CongresoCongreso/Congreso/show.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Congreso\\show.html.twig");
    }
}
