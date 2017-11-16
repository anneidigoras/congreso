<?php

/* CongresoCongresoBundle:Congreso:show.html.twig */
class __TwigTemplate_c05eb13111fa5d5e98e16d3edbbfcb47ad6e019fdc13342d5866d786dd487efc extends Twig_Template
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
        $__internal_79522998495c9e6cfef6ef90d8ae407b18386af3c7d0fa7315bf56e11009660e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79522998495c9e6cfef6ef90d8ae407b18386af3c7d0fa7315bf56e11009660e->enter($__internal_79522998495c9e6cfef6ef90d8ae407b18386af3c7d0fa7315bf56e11009660e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79522998495c9e6cfef6ef90d8ae407b18386af3c7d0fa7315bf56e11009660e->leave($__internal_79522998495c9e6cfef6ef90d8ae407b18386af3c7d0fa7315bf56e11009660e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ad58c7aeae78c0587eba9ea9c9c2cf44a59a81a183aa8cd1d64e0544de209c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad58c7aeae78c0587eba9ea9c9c2cf44a59a81a183aa8cd1d64e0544de209c4->enter($__internal_2ad58c7aeae78c0587eba9ea9c9c2cf44a59a81a183aa8cd1d64e0544de209c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "List of Articulos";
        
        $__internal_2ad58c7aeae78c0587eba9ea9c9c2cf44a59a81a183aa8cd1d64e0544de209c4->leave($__internal_2ad58c7aeae78c0587eba9ea9c9c2cf44a59a81a183aa8cd1d64e0544de209c4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0ddd588aacd40931d43b6ec8495813ab690cf04527659692e05159a29213ba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0ddd588aacd40931d43b6ec8495813ab690cf04527659692e05159a29213ba1->enter($__internal_e0ddd588aacd40931d43b6ec8495813ab690cf04527659692e05159a29213ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("CongresoCongresoBundle:Comment:list.html.twig", "CongresoCongresoBundle:Congreso:show.html.twig", 13)->display(array_merge($context, array("comments" => ($context["comments"] ?? $this->getContext($context, "comments")))));
        // line 14
        echo "\t\t</section>
\t\t<h3>Añadir comentario</h3>
\t\t";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("CongresoCongresoBundle:Comment:new", array("articulo_id" => $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "id", array()))));
        echo "
    </section>
";
        
        $__internal_e0ddd588aacd40931d43b6ec8495813ab690cf04527659692e05159a29213ba1->leave($__internal_e0ddd588aacd40931d43b6ec8495813ab690cf04527659692e05159a29213ba1_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_40bb44a7d05e388f04e6ffd0947b3e4bbccd13d75d72160e0da3345d895fc386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40bb44a7d05e388f04e6ffd0947b3e4bbccd13d75d72160e0da3345d895fc386->enter($__internal_40bb44a7d05e388f04e6ffd0947b3e4bbccd13d75d72160e0da3345d895fc386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 21
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/congreso.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_40bb44a7d05e388f04e6ffd0947b3e4bbccd13d75d72160e0da3345d895fc386->leave($__internal_40bb44a7d05e388f04e6ffd0947b3e4bbccd13d75d72160e0da3345d895fc386_prof);

    }

    // line 25
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_5d3330994bc6563d43a5a5c138aa850ee53a61d4baa4d29ea533d8271f6ee57d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d3330994bc6563d43a5a5c138aa850ee53a61d4baa4d29ea533d8271f6ee57d->enter($__internal_5d3330994bc6563d43a5a5c138aa850ee53a61d4baa4d29ea533d8271f6ee57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 26
        echo "<div class=\"tracks\">
";
        // line 27
        $this->loadTemplate("CongresoCongresoBundle:Track:list.html.twig", "CongresoCongresoBundle:Congreso:show.html.twig", 27)->display(array_merge($context, array("tracks" => ($context["tracks"] ?? $this->getContext($context, "tracks")))));
        // line 28
        echo "</div>
";
        
        $__internal_5d3330994bc6563d43a5a5c138aa850ee53a61d4baa4d29ea533d8271f6ee57d->leave($__internal_5d3330994bc6563d43a5a5c138aa850ee53a61d4baa4d29ea533d8271f6ee57d_prof);

    }

    // line 31
    public function block_linea($context, array $blocks = array())
    {
        $__internal_eb6246fa2a0f441d24756ff412901530819bd75a8b07b424978225d51811cd15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb6246fa2a0f441d24756ff412901530819bd75a8b07b424978225d51811cd15->enter($__internal_eb6246fa2a0f441d24756ff412901530819bd75a8b07b424978225d51811cd15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        // line 32
        echo "<p>-----------------</p>
";
        
        $__internal_eb6246fa2a0f441d24756ff412901530819bd75a8b07b424978225d51811cd15->leave($__internal_eb6246fa2a0f441d24756ff412901530819bd75a8b07b424978225d51811cd15_prof);

    }

    // line 35
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_d038f3584ad661b0f7307b5baef114e2b7062c8489a994e2d4f1be11b5c83232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d038f3584ad661b0f7307b5baef114e2b7062c8489a994e2d4f1be11b5c83232->enter($__internal_d038f3584ad661b0f7307b5baef114e2b7062c8489a994e2d4f1be11b5c83232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        // line 36
        echo "<div class=\"cientificos\">
";
        // line 37
        $this->loadTemplate("CongresoCongresoBundle:Cientifico:list.html.twig", "CongresoCongresoBundle:Congreso:show.html.twig", 37)->display(array_merge($context, array("cientificos" => ($context["cientificos"] ?? $this->getContext($context, "cientificos")))));
        // line 38
        echo "</div>
";
        
        $__internal_d038f3584ad661b0f7307b5baef114e2b7062c8489a994e2d4f1be11b5c83232->leave($__internal_d038f3584ad661b0f7307b5baef114e2b7062c8489a994e2d4f1be11b5c83232_prof);

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


", "CongresoCongresoBundle:Congreso:show.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Congreso\\show.html.twig");
    }
}
