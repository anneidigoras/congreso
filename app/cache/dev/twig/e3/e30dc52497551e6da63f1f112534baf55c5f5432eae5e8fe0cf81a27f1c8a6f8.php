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
        );
    }

    protected function doGetParent(array $context)
    {
        return "CongresoCongresoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8fdf85e579840a6edad9070058b0b03ef12c924676998f0bb2e7aed814900f01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fdf85e579840a6edad9070058b0b03ef12c924676998f0bb2e7aed814900f01->enter($__internal_8fdf85e579840a6edad9070058b0b03ef12c924676998f0bb2e7aed814900f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fdf85e579840a6edad9070058b0b03ef12c924676998f0bb2e7aed814900f01->leave($__internal_8fdf85e579840a6edad9070058b0b03ef12c924676998f0bb2e7aed814900f01_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f018cd129101e825487b6ca7e6b955403b78e9c670bd8f3c85b6e02ecf437b86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f018cd129101e825487b6ca7e6b955403b78e9c670bd8f3c85b6e02ecf437b86->enter($__internal_f018cd129101e825487b6ca7e6b955403b78e9c670bd8f3c85b6e02ecf437b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "List of Articulos";
        
        $__internal_f018cd129101e825487b6ca7e6b955403b78e9c670bd8f3c85b6e02ecf437b86->leave($__internal_f018cd129101e825487b6ca7e6b955403b78e9c670bd8f3c85b6e02ecf437b86_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5277fe626dd95bbd6e2961fe68b5b5c2bc2fa43ea43cc88ea72fd6883385419e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5277fe626dd95bbd6e2961fe68b5b5c2bc2fa43ea43cc88ea72fd6883385419e->enter($__internal_5277fe626dd95bbd6e2961fe68b5b5c2bc2fa43ea43cc88ea72fd6883385419e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5277fe626dd95bbd6e2961fe68b5b5c2bc2fa43ea43cc88ea72fd6883385419e->leave($__internal_5277fe626dd95bbd6e2961fe68b5b5c2bc2fa43ea43cc88ea72fd6883385419e_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_324671111c3a3957096bfa5550cb9b1db69f0edd2fbade7c07b9a027d3510ceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_324671111c3a3957096bfa5550cb9b1db69f0edd2fbade7c07b9a027d3510ceb->enter($__internal_324671111c3a3957096bfa5550cb9b1db69f0edd2fbade7c07b9a027d3510ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 21
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_324671111c3a3957096bfa5550cb9b1db69f0edd2fbade7c07b9a027d3510ceb->leave($__internal_324671111c3a3957096bfa5550cb9b1db69f0edd2fbade7c07b9a027d3510ceb_prof);

    }

    // line 25
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_98bb8eeb02ea84a8d721ec5829d2a95bc5aa06ef374a74ddafb0f4b593efb095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98bb8eeb02ea84a8d721ec5829d2a95bc5aa06ef374a74ddafb0f4b593efb095->enter($__internal_98bb8eeb02ea84a8d721ec5829d2a95bc5aa06ef374a74ddafb0f4b593efb095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 26
        echo "
<div class=\"tracks\">

";
        // line 29
        $this->loadTemplate("CongresoCongresoBundle:Track:list.html.twig", "CongresoCongresoBundle:Congreso:show.html.twig", 29)->display(array_merge($context, array("tracks" => ($context["tracks"] ?? $this->getContext($context, "tracks")))));
        // line 30
        echo "
</div>

<div class=\"cientificos\">

";
        // line 35
        $this->loadTemplate("CongresoCongresoBundle:Cientifico:list.html.twig", "CongresoCongresoBundle:Congreso:show.html.twig", 35)->display(array_merge($context, array("cientificos" => ($context["cientificos"] ?? $this->getContext($context, "cientificos")))));
        // line 36
        echo "
</div>

";
        
        $__internal_98bb8eeb02ea84a8d721ec5829d2a95bc5aa06ef374a74ddafb0f4b593efb095->leave($__internal_98bb8eeb02ea84a8d721ec5829d2a95bc5aa06ef374a74ddafb0f4b593efb095_prof);

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
        return array (  129 => 36,  127 => 35,  120 => 30,  118 => 29,  113 => 26,  107 => 25,  98 => 22,  94 => 21,  88 => 20,  78 => 16,  74 => 14,  72 => 13,  65 => 9,  61 => 8,  55 => 6,  49 => 5,  37 => 3,  11 => 2,);
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
<link href=\"{{ asset('css/blog.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
{% endblock %}

{% block sidebar %}

<div class=\"tracks\">

{% include 'CongresoCongresoBundle:Track:list.html.twig' with { 'tracks': tracks } %}

</div>

<div class=\"cientificos\">

{% include 'CongresoCongresoBundle:Cientifico:list.html.twig' with { 'cientificos': cientificos } %}

</div>

{% endblock %}", "CongresoCongresoBundle:Congreso:show.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Congreso/show.html.twig");
    }
}
