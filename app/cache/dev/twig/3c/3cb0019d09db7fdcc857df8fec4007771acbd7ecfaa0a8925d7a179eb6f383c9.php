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
        $__internal_fb229146bd93c8158a52595947784025a3322299bb26f6fccf0cfa162f99e20e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb229146bd93c8158a52595947784025a3322299bb26f6fccf0cfa162f99e20e->enter($__internal_fb229146bd93c8158a52595947784025a3322299bb26f6fccf0cfa162f99e20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb229146bd93c8158a52595947784025a3322299bb26f6fccf0cfa162f99e20e->leave($__internal_fb229146bd93c8158a52595947784025a3322299bb26f6fccf0cfa162f99e20e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b6a0a4eb24a6a8648b577f40cbb11cb02e888072c8cf8272eb45b17ba2602fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b6a0a4eb24a6a8648b577f40cbb11cb02e888072c8cf8272eb45b17ba2602fe->enter($__internal_9b6a0a4eb24a6a8648b577f40cbb11cb02e888072c8cf8272eb45b17ba2602fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Artículo seleccionado";
        
        $__internal_9b6a0a4eb24a6a8648b577f40cbb11cb02e888072c8cf8272eb45b17ba2602fe->leave($__internal_9b6a0a4eb24a6a8648b577f40cbb11cb02e888072c8cf8272eb45b17ba2602fe_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f33da280a94e94535780dc88dcaabebdb0e84903ec8401ead10257d33d4a137e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f33da280a94e94535780dc88dcaabebdb0e84903ec8401ead10257d33d4a137e->enter($__internal_f33da280a94e94535780dc88dcaabebdb0e84903ec8401ead10257d33d4a137e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f33da280a94e94535780dc88dcaabebdb0e84903ec8401ead10257d33d4a137e->leave($__internal_f33da280a94e94535780dc88dcaabebdb0e84903ec8401ead10257d33d4a137e_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fc2a9dfcd640e81e73648b5dd7fa4dc3a9a068a8bb0cb342303999ad753604a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc2a9dfcd640e81e73648b5dd7fa4dc3a9a068a8bb0cb342303999ad753604a2->enter($__internal_fc2a9dfcd640e81e73648b5dd7fa4dc3a9a068a8bb0cb342303999ad753604a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/congreso.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_fc2a9dfcd640e81e73648b5dd7fa4dc3a9a068a8bb0cb342303999ad753604a2->leave($__internal_fc2a9dfcd640e81e73648b5dd7fa4dc3a9a068a8bb0cb342303999ad753604a2_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_63fd0268e52e8c979e8b216be43f66de2406e27f1fc637f2afb85d3d6cca85a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63fd0268e52e8c979e8b216be43f66de2406e27f1fc637f2afb85d3d6cca85a1->enter($__internal_63fd0268e52e8c979e8b216be43f66de2406e27f1fc637f2afb85d3d6cca85a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "<div class=\"tracks\">
";
        // line 29
        $this->loadTemplate("CongresoCongresoBundle:Track:list.html.twig", "CongresoCongresoBundle:Congreso:show.html.twig", 29)->display(array_merge($context, array("track" => ($context["track"] ?? $this->getContext($context, "track")))));
        // line 30
        echo "</div>
";
        
        $__internal_63fd0268e52e8c979e8b216be43f66de2406e27f1fc637f2afb85d3d6cca85a1->leave($__internal_63fd0268e52e8c979e8b216be43f66de2406e27f1fc637f2afb85d3d6cca85a1_prof);

    }

    // line 33
    public function block_linea($context, array $blocks = array())
    {
        $__internal_283b453a2afd8319d1a43e9580fa8f1e1e3b9a830120e2a152ce7b7cca883ed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_283b453a2afd8319d1a43e9580fa8f1e1e3b9a830120e2a152ce7b7cca883ed2->enter($__internal_283b453a2afd8319d1a43e9580fa8f1e1e3b9a830120e2a152ce7b7cca883ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        // line 34
        echo "<div class=\"separator\"></div>
";
        
        $__internal_283b453a2afd8319d1a43e9580fa8f1e1e3b9a830120e2a152ce7b7cca883ed2->leave($__internal_283b453a2afd8319d1a43e9580fa8f1e1e3b9a830120e2a152ce7b7cca883ed2_prof);

    }

    // line 37
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_1852fd12487158365ff07ebfaef8ce991f80eda785314f8dc9f90d2a7881d531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1852fd12487158365ff07ebfaef8ce991f80eda785314f8dc9f90d2a7881d531->enter($__internal_1852fd12487158365ff07ebfaef8ce991f80eda785314f8dc9f90d2a7881d531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

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
        
        $__internal_1852fd12487158365ff07ebfaef8ce991f80eda785314f8dc9f90d2a7881d531->leave($__internal_1852fd12487158365ff07ebfaef8ce991f80eda785314f8dc9f90d2a7881d531_prof);

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

", "CongresoCongresoBundle:Congreso:show.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Congreso/show.html.twig");
    }
}
