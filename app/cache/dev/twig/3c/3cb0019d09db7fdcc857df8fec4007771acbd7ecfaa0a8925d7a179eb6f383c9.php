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
        $__internal_d081a1dd036b93e5b7945c6902f4486a1abd145587519f4d311894581085ca19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d081a1dd036b93e5b7945c6902f4486a1abd145587519f4d311894581085ca19->enter($__internal_d081a1dd036b93e5b7945c6902f4486a1abd145587519f4d311894581085ca19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d081a1dd036b93e5b7945c6902f4486a1abd145587519f4d311894581085ca19->leave($__internal_d081a1dd036b93e5b7945c6902f4486a1abd145587519f4d311894581085ca19_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c08314c4c69ff10872ef0bfaef93213819d9281745de35fb89bba91cda7cc533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c08314c4c69ff10872ef0bfaef93213819d9281745de35fb89bba91cda7cc533->enter($__internal_c08314c4c69ff10872ef0bfaef93213819d9281745de35fb89bba91cda7cc533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Artículo seleccionado";
        
        $__internal_c08314c4c69ff10872ef0bfaef93213819d9281745de35fb89bba91cda7cc533->leave($__internal_c08314c4c69ff10872ef0bfaef93213819d9281745de35fb89bba91cda7cc533_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_96ca48116554797e9f3c434747717f54c12dca994440526767370de760eed7b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96ca48116554797e9f3c434747717f54c12dca994440526767370de760eed7b7->enter($__internal_96ca48116554797e9f3c434747717f54c12dca994440526767370de760eed7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "ParsearFecha", array()), "html", null, true);
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
        
        $__internal_96ca48116554797e9f3c434747717f54c12dca994440526767370de760eed7b7->leave($__internal_96ca48116554797e9f3c434747717f54c12dca994440526767370de760eed7b7_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_18d971ded204d85c993774e5a2ca6757ad80cbd5de772ef1533d7b920f2ad7a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18d971ded204d85c993774e5a2ca6757ad80cbd5de772ef1533d7b920f2ad7a1->enter($__internal_18d971ded204d85c993774e5a2ca6757ad80cbd5de772ef1533d7b920f2ad7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/congreso.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_18d971ded204d85c993774e5a2ca6757ad80cbd5de772ef1533d7b920f2ad7a1->leave($__internal_18d971ded204d85c993774e5a2ca6757ad80cbd5de772ef1533d7b920f2ad7a1_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_7eefba4b06a63f2b85480bd9150346d93abbc3e1b93b2a6a8b82afacfcc52a4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eefba4b06a63f2b85480bd9150346d93abbc3e1b93b2a6a8b82afacfcc52a4e->enter($__internal_7eefba4b06a63f2b85480bd9150346d93abbc3e1b93b2a6a8b82afacfcc52a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "<div class=\"tracks\">
";
        // line 29
        $this->loadTemplate("CongresoCongresoBundle:Track:list.html.twig", "CongresoCongresoBundle:Congreso:show.html.twig", 29)->display(array_merge($context, array("track" => ($context["track"] ?? $this->getContext($context, "track")))));
        // line 30
        echo "</div>
";
        
        $__internal_7eefba4b06a63f2b85480bd9150346d93abbc3e1b93b2a6a8b82afacfcc52a4e->leave($__internal_7eefba4b06a63f2b85480bd9150346d93abbc3e1b93b2a6a8b82afacfcc52a4e_prof);

    }

    // line 33
    public function block_linea($context, array $blocks = array())
    {
        $__internal_5dbf8abc7ced685132a60daf8a7e1bf383b20088ab237c1f1e0aaecf7b98320c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dbf8abc7ced685132a60daf8a7e1bf383b20088ab237c1f1e0aaecf7b98320c->enter($__internal_5dbf8abc7ced685132a60daf8a7e1bf383b20088ab237c1f1e0aaecf7b98320c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        // line 34
        echo "<div class=\"separator\"></div>
";
        
        $__internal_5dbf8abc7ced685132a60daf8a7e1bf383b20088ab237c1f1e0aaecf7b98320c->leave($__internal_5dbf8abc7ced685132a60daf8a7e1bf383b20088ab237c1f1e0aaecf7b98320c_prof);

    }

    // line 37
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_c41d3a204a4981666c650f2688a56f9a75a1de7871d8d5f3ffd209ff66690104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c41d3a204a4981666c650f2688a56f9a75a1de7871d8d5f3ffd209ff66690104->enter($__internal_c41d3a204a4981666c650f2688a56f9a75a1de7871d8d5f3ffd209ff66690104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        // line 38
        echo "<div class=\"cientificos\">
";
        // line 39
        $this->loadTemplate("CongresoCongresoBundle:Cientifico:list.html.twig", "CongresoCongresoBundle:Congreso:show.html.twig", 39)->display(array_merge($context, array("cientificos" => ($context["cientificos"] ?? $this->getContext($context, "cientificos")))));
        // line 40
        echo "</div>
";
        
        $__internal_c41d3a204a4981666c650f2688a56f9a75a1de7871d8d5f3ffd209ff66690104->leave($__internal_c41d3a204a4981666c650f2688a56f9a75a1de7871d8d5f3ffd209ff66690104_prof);

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
\t<div class=\"date\">Fecha de publicación: {{ articulo.ParsearFecha }}</div>
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
{% endblock %}

", "CongresoCongresoBundle:Congreso:show.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Congreso/show.html.twig");
    }
}
