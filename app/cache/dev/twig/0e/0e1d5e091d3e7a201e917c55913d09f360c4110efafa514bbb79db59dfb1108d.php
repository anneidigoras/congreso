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
        $__internal_44e19c502a28625330e5c2fe5037297578a557250c0ba1e5026021fe98674f37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e19c502a28625330e5c2fe5037297578a557250c0ba1e5026021fe98674f37->enter($__internal_44e19c502a28625330e5c2fe5037297578a557250c0ba1e5026021fe98674f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Congreso/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44e19c502a28625330e5c2fe5037297578a557250c0ba1e5026021fe98674f37->leave($__internal_44e19c502a28625330e5c2fe5037297578a557250c0ba1e5026021fe98674f37_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f9c3947e450db89c23a97dc526ea2901e27d2cf72d3fd58994ed153081de56d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f9c3947e450db89c23a97dc526ea2901e27d2cf72d3fd58994ed153081de56d->enter($__internal_5f9c3947e450db89c23a97dc526ea2901e27d2cf72d3fd58994ed153081de56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Artículo seleccionado";
        
        $__internal_5f9c3947e450db89c23a97dc526ea2901e27d2cf72d3fd58994ed153081de56d->leave($__internal_5f9c3947e450db89c23a97dc526ea2901e27d2cf72d3fd58994ed153081de56d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_864c5c0df05051388faf0c619cdd4ffd9a8dcf96ff4e39f902c89c7df8039586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_864c5c0df05051388faf0c619cdd4ffd9a8dcf96ff4e39f902c89c7df8039586->enter($__internal_864c5c0df05051388faf0c619cdd4ffd9a8dcf96ff4e39f902c89c7df8039586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_864c5c0df05051388faf0c619cdd4ffd9a8dcf96ff4e39f902c89c7df8039586->leave($__internal_864c5c0df05051388faf0c619cdd4ffd9a8dcf96ff4e39f902c89c7df8039586_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cbad03ed9c8a5d15c1d5d448eb79b205730bd0a0b56a3fba71a45ba1a7fd6ddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbad03ed9c8a5d15c1d5d448eb79b205730bd0a0b56a3fba71a45ba1a7fd6ddf->enter($__internal_cbad03ed9c8a5d15c1d5d448eb79b205730bd0a0b56a3fba71a45ba1a7fd6ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/congreso.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_cbad03ed9c8a5d15c1d5d448eb79b205730bd0a0b56a3fba71a45ba1a7fd6ddf->leave($__internal_cbad03ed9c8a5d15c1d5d448eb79b205730bd0a0b56a3fba71a45ba1a7fd6ddf_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9699fbcb4683fc0ca3174f063364c0c9d5ef64dafd3d4b19b1f1bc7cf4000c82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9699fbcb4683fc0ca3174f063364c0c9d5ef64dafd3d4b19b1f1bc7cf4000c82->enter($__internal_9699fbcb4683fc0ca3174f063364c0c9d5ef64dafd3d4b19b1f1bc7cf4000c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "<div class=\"tracks\">
";
        // line 29
        $this->loadTemplate("CongresoCongresoBundle:Track:list.html.twig", "@CongresoCongreso/Congreso/show.html.twig", 29)->display(array_merge($context, array("track" => ($context["track"] ?? $this->getContext($context, "track")))));
        // line 30
        echo "</div>
";
        
        $__internal_9699fbcb4683fc0ca3174f063364c0c9d5ef64dafd3d4b19b1f1bc7cf4000c82->leave($__internal_9699fbcb4683fc0ca3174f063364c0c9d5ef64dafd3d4b19b1f1bc7cf4000c82_prof);

    }

    // line 33
    public function block_linea($context, array $blocks = array())
    {
        $__internal_45fb77b06a90b9ecca1312b61022e91d3f6f267f2afea9a25688beac6a16544b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45fb77b06a90b9ecca1312b61022e91d3f6f267f2afea9a25688beac6a16544b->enter($__internal_45fb77b06a90b9ecca1312b61022e91d3f6f267f2afea9a25688beac6a16544b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        // line 34
        echo "<div class=\"separator\"></div>
";
        
        $__internal_45fb77b06a90b9ecca1312b61022e91d3f6f267f2afea9a25688beac6a16544b->leave($__internal_45fb77b06a90b9ecca1312b61022e91d3f6f267f2afea9a25688beac6a16544b_prof);

    }

    // line 37
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_b84772c7dc4dd426fd35d0fc4e902e3375f07b234d0a41e44af9cc2f48cbcc09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b84772c7dc4dd426fd35d0fc4e902e3375f07b234d0a41e44af9cc2f48cbcc09->enter($__internal_b84772c7dc4dd426fd35d0fc4e902e3375f07b234d0a41e44af9cc2f48cbcc09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        // line 38
        echo "<div class=\"cientificos\">
";
        // line 39
        $this->loadTemplate("CongresoCongresoBundle:Cientifico:list.html.twig", "@CongresoCongreso/Congreso/show.html.twig", 39)->display(array_merge($context, array("cientificos" => ($context["cientificos"] ?? $this->getContext($context, "cientificos")))));
        // line 40
        echo "</div>
";
        
        $__internal_b84772c7dc4dd426fd35d0fc4e902e3375f07b234d0a41e44af9cc2f48cbcc09->leave($__internal_b84772c7dc4dd426fd35d0fc4e902e3375f07b234d0a41e44af9cc2f48cbcc09_prof);

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
