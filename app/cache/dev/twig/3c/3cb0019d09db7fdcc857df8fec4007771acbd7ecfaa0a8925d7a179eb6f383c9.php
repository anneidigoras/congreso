<?php

/* CongresoCongresoBundle:Congreso:show.html.twig */
class __TwigTemplate_a96937c89f43115c6621aebd4ad4d0b5934e47fd66b941307de51be46a23737f extends Twig_Template
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
        $__internal_10f5f246b46f4a6fe3ea859ada635b771f5cbd3ae6ebbee09a572db2388c5df4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10f5f246b46f4a6fe3ea859ada635b771f5cbd3ae6ebbee09a572db2388c5df4->enter($__internal_10f5f246b46f4a6fe3ea859ada635b771f5cbd3ae6ebbee09a572db2388c5df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10f5f246b46f4a6fe3ea859ada635b771f5cbd3ae6ebbee09a572db2388c5df4->leave($__internal_10f5f246b46f4a6fe3ea859ada635b771f5cbd3ae6ebbee09a572db2388c5df4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_254e3a8f24eebc967b77504b1aa5b5cb4b42407fab59bc484c56f71b5d45b68a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_254e3a8f24eebc967b77504b1aa5b5cb4b42407fab59bc484c56f71b5d45b68a->enter($__internal_254e3a8f24eebc967b77504b1aa5b5cb4b42407fab59bc484c56f71b5d45b68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Artículo seleccionado";
        
        $__internal_254e3a8f24eebc967b77504b1aa5b5cb4b42407fab59bc484c56f71b5d45b68a->leave($__internal_254e3a8f24eebc967b77504b1aa5b5cb4b42407fab59bc484c56f71b5d45b68a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c80e3fb07833831e36eb969d202af8e8d7e84b119cb3cbf69352e4c41655e82a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c80e3fb07833831e36eb969d202af8e8d7e84b119cb3cbf69352e4c41655e82a->enter($__internal_c80e3fb07833831e36eb969d202af8e8d7e84b119cb3cbf69352e4c41655e82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c80e3fb07833831e36eb969d202af8e8d7e84b119cb3cbf69352e4c41655e82a->leave($__internal_c80e3fb07833831e36eb969d202af8e8d7e84b119cb3cbf69352e4c41655e82a_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_989a1653970a3ac979fc149a1824586c5f959dbc002a2530e36ce17613d6cfab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_989a1653970a3ac979fc149a1824586c5f959dbc002a2530e36ce17613d6cfab->enter($__internal_989a1653970a3ac979fc149a1824586c5f959dbc002a2530e36ce17613d6cfab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/congreso.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_989a1653970a3ac979fc149a1824586c5f959dbc002a2530e36ce17613d6cfab->leave($__internal_989a1653970a3ac979fc149a1824586c5f959dbc002a2530e36ce17613d6cfab_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_3f4bcb320227f16113c957b4f7a3a209f83151e3cf89e138d3a0fd68a7b91a4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f4bcb320227f16113c957b4f7a3a209f83151e3cf89e138d3a0fd68a7b91a4f->enter($__internal_3f4bcb320227f16113c957b4f7a3a209f83151e3cf89e138d3a0fd68a7b91a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "<div class=\"tracks\">
";
        // line 29
        $this->loadTemplate("CongresoCongresoBundle:Track:list.html.twig", "CongresoCongresoBundle:Congreso:show.html.twig", 29)->display(array_merge($context, array("tracks" => ($context["tracks"] ?? $this->getContext($context, "tracks")))));
        // line 30
        echo "</div>
";
        
        $__internal_3f4bcb320227f16113c957b4f7a3a209f83151e3cf89e138d3a0fd68a7b91a4f->leave($__internal_3f4bcb320227f16113c957b4f7a3a209f83151e3cf89e138d3a0fd68a7b91a4f_prof);

    }

    // line 33
    public function block_linea($context, array $blocks = array())
    {
        $__internal_60c86f32d6874b0564574cc43e4c7b4dea62633075d7595a02ce7f934e6a2ff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c86f32d6874b0564574cc43e4c7b4dea62633075d7595a02ce7f934e6a2ff3->enter($__internal_60c86f32d6874b0564574cc43e4c7b4dea62633075d7595a02ce7f934e6a2ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        // line 34
        echo "<div class=\"separator\"></div>
";
        
        $__internal_60c86f32d6874b0564574cc43e4c7b4dea62633075d7595a02ce7f934e6a2ff3->leave($__internal_60c86f32d6874b0564574cc43e4c7b4dea62633075d7595a02ce7f934e6a2ff3_prof);

    }

    // line 37
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_bd34a03e16e675c0e4b72eb3b5354e9a51d552d42c506e62554dc597df394fa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd34a03e16e675c0e4b72eb3b5354e9a51d552d42c506e62554dc597df394fa5->enter($__internal_bd34a03e16e675c0e4b72eb3b5354e9a51d552d42c506e62554dc597df394fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

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
        
        $__internal_bd34a03e16e675c0e4b72eb3b5354e9a51d552d42c506e62554dc597df394fa5->leave($__internal_bd34a03e16e675c0e4b72eb3b5354e9a51d552d42c506e62554dc597df394fa5_prof);

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

", "CongresoCongresoBundle:Congreso:show.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Congreso/show.html.twig");
    }
}
