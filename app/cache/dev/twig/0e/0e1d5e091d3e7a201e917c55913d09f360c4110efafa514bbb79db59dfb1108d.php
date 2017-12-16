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
        $__internal_d305088335233e00203b6261e1fb9bda5859c2bbecb6bec747f3f740a893b52c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d305088335233e00203b6261e1fb9bda5859c2bbecb6bec747f3f740a893b52c->enter($__internal_d305088335233e00203b6261e1fb9bda5859c2bbecb6bec747f3f740a893b52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Congreso/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d305088335233e00203b6261e1fb9bda5859c2bbecb6bec747f3f740a893b52c->leave($__internal_d305088335233e00203b6261e1fb9bda5859c2bbecb6bec747f3f740a893b52c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fbdfecf42c6c9c1d2d27c0f91c48727e52943eba34648b05e4e0d6b82e2ed3e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbdfecf42c6c9c1d2d27c0f91c48727e52943eba34648b05e4e0d6b82e2ed3e6->enter($__internal_fbdfecf42c6c9c1d2d27c0f91c48727e52943eba34648b05e4e0d6b82e2ed3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Artículo seleccionado";
        
        $__internal_fbdfecf42c6c9c1d2d27c0f91c48727e52943eba34648b05e4e0d6b82e2ed3e6->leave($__internal_fbdfecf42c6c9c1d2d27c0f91c48727e52943eba34648b05e4e0d6b82e2ed3e6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9dac927ef1edffe5b7466ca45b7588cddb4163c9964308e3c02863ffcf19dbee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dac927ef1edffe5b7466ca45b7588cddb4163c9964308e3c02863ffcf19dbee->enter($__internal_9dac927ef1edffe5b7466ca45b7588cddb4163c9964308e3c02863ffcf19dbee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9dac927ef1edffe5b7466ca45b7588cddb4163c9964308e3c02863ffcf19dbee->leave($__internal_9dac927ef1edffe5b7466ca45b7588cddb4163c9964308e3c02863ffcf19dbee_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f06cc2a34a7df66a16364164595f6bc26f329e582bf30e412f79d2e92b16a503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f06cc2a34a7df66a16364164595f6bc26f329e582bf30e412f79d2e92b16a503->enter($__internal_f06cc2a34a7df66a16364164595f6bc26f329e582bf30e412f79d2e92b16a503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/congreso.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_f06cc2a34a7df66a16364164595f6bc26f329e582bf30e412f79d2e92b16a503->leave($__internal_f06cc2a34a7df66a16364164595f6bc26f329e582bf30e412f79d2e92b16a503_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_32f0e989808b506f882b3c46122f26fb97731a9bb4446e0ccedaf675a1ffd236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32f0e989808b506f882b3c46122f26fb97731a9bb4446e0ccedaf675a1ffd236->enter($__internal_32f0e989808b506f882b3c46122f26fb97731a9bb4446e0ccedaf675a1ffd236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "<div class=\"tracks\">
";
        // line 29
        $this->loadTemplate("CongresoCongresoBundle:Track:list.html.twig", "@CongresoCongreso/Congreso/show.html.twig", 29)->display(array_merge($context, array("track" => ($context["track"] ?? $this->getContext($context, "track")))));
        // line 30
        echo "</div>
";
        
        $__internal_32f0e989808b506f882b3c46122f26fb97731a9bb4446e0ccedaf675a1ffd236->leave($__internal_32f0e989808b506f882b3c46122f26fb97731a9bb4446e0ccedaf675a1ffd236_prof);

    }

    // line 33
    public function block_linea($context, array $blocks = array())
    {
        $__internal_07752296c9c8be5f3365633ae4d966fc9d5350d3160a56b8e026475fb967f2eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07752296c9c8be5f3365633ae4d966fc9d5350d3160a56b8e026475fb967f2eb->enter($__internal_07752296c9c8be5f3365633ae4d966fc9d5350d3160a56b8e026475fb967f2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        // line 34
        echo "<div class=\"separator\"></div>
";
        
        $__internal_07752296c9c8be5f3365633ae4d966fc9d5350d3160a56b8e026475fb967f2eb->leave($__internal_07752296c9c8be5f3365633ae4d966fc9d5350d3160a56b8e026475fb967f2eb_prof);

    }

    // line 37
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_7995c76e1870f4f0af3daae43b95587e5127ef3b456ea644652408c99776d752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7995c76e1870f4f0af3daae43b95587e5127ef3b456ea644652408c99776d752->enter($__internal_7995c76e1870f4f0af3daae43b95587e5127ef3b456ea644652408c99776d752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        // line 38
        echo "<div class=\"cientificos\">
";
        // line 39
        $this->loadTemplate("CongresoCongresoBundle:Cientifico:list.html.twig", "@CongresoCongreso/Congreso/show.html.twig", 39)->display(array_merge($context, array("cientificos" => ($context["cientificos"] ?? $this->getContext($context, "cientificos")))));
        // line 40
        echo "</div>
";
        
        $__internal_7995c76e1870f4f0af3daae43b95587e5127ef3b456ea644652408c99776d752->leave($__internal_7995c76e1870f4f0af3daae43b95587e5127ef3b456ea644652408c99776d752_prof);

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

", "@CongresoCongreso/Congreso/show.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Congreso\\show.html.twig");
    }
}
