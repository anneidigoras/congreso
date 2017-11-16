<?php

/* @CongresoCongreso/Cientifico/artcen.html.twig */
class __TwigTemplate_505210305f6e41949f32a3d8da7b9d23eeb2201e736e046a49176533d197d43d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layout.html.twig", "@CongresoCongreso/Cientifico/artcen.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'sidebar1' => array($this, 'block_sidebar1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CongresoCongresoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_344d88becc1e0df1a9975d0cc472bc9b2792827438a76c3059a49182528184d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_344d88becc1e0df1a9975d0cc472bc9b2792827438a76c3059a49182528184d7->enter($__internal_344d88becc1e0df1a9975d0cc472bc9b2792827438a76c3059a49182528184d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Cientifico/artcen.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_344d88becc1e0df1a9975d0cc472bc9b2792827438a76c3059a49182528184d7->leave($__internal_344d88becc1e0df1a9975d0cc472bc9b2792827438a76c3059a49182528184d7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e151eddb1b9b1ea5f916539a1a11fc882ca4a30dde438a2ccd723466064de3fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e151eddb1b9b1ea5f916539a1a11fc882ca4a30dde438a2ccd723466064de3fe->enter($__internal_e151eddb1b9b1ea5f916539a1a11fc882ca4a30dde438a2ccd723466064de3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Articulos de ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nombre", array()), "html", null, true);
        
        $__internal_e151eddb1b9b1ea5f916539a1a11fc882ca4a30dde438a2ccd723466064de3fe->leave($__internal_e151eddb1b9b1ea5f916539a1a11fc882ca4a30dde438a2ccd723466064de3fe_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_079a5a9ed77a09418294b029720a77ad6c8fb5052324c9a116fc5f56563b91d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_079a5a9ed77a09418294b029720a77ad6c8fb5052324c9a116fc5f56563b91d6->enter($__internal_079a5a9ed77a09418294b029720a77ad6c8fb5052324c9a116fc5f56563b91d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articulos"] ?? $this->getContext($context, "articulos")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["articulo"]) {
            // line 7
            echo "        <article class=\"articulo\">
            <div class=\"date\"><time datetime=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["articulo"], "publicacion", array()), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["articulo"], "publicacion", array()), "l, F j, Y"), "html", null, true);
            echo "</time></div>
            <header>
                <h2><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_show", array("id" => $this->getAttribute($context["articulo"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["articulo"], "titulo", array()), "html", null, true);
            echo "</a></h2>
            </header>

            <div class=\"snippet\">
                <p>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["articulo"], "cuerpo", array(0 => 200), "method"), "html", null, true);
            echo "</p>
                <p class=\"continue\"><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_show", array("id" => $this->getAttribute($context["articulo"], "id", array()))), "html", null, true);
            echo "\">Seguir leyendo...</a></p>
            </div>

            <footer class=\"meta\">
                <p>Comentarios: </p>
            </footer>
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "        <p>No hay entradas en este blog</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_079a5a9ed77a09418294b029720a77ad6c8fb5052324c9a116fc5f56563b91d6->leave($__internal_079a5a9ed77a09418294b029720a77ad6c8fb5052324c9a116fc5f56563b91d6_prof);

    }

    // line 27
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_66e0a8cc137f0a2f02c1620ba27717581b2daa39305a29fa83678d2c950dd88f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e0a8cc137f0a2f02c1620ba27717581b2daa39305a29fa83678d2c950dd88f->enter($__internal_66e0a8cc137f0a2f02c1620ba27717581b2daa39305a29fa83678d2c950dd88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        // line 28
        echo "<div class=\"cientificos\">
<p>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nombre", array()), "html", null, true);
        echo "</p>
<p>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? $this->getContext($context, "cientifico")), "especialidad", array()), "html", null, true);
        echo "</p>
<div class=\"date\"><time datetime=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "c"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "l, F j, Y"), "html", null, true);
        echo "</time></div>
</div>
";
        
        $__internal_66e0a8cc137f0a2f02c1620ba27717581b2daa39305a29fa83678d2c950dd88f->leave($__internal_66e0a8cc137f0a2f02c1620ba27717581b2daa39305a29fa83678d2c950dd88f_prof);

    }

    public function getTemplateName()
    {
        return "@CongresoCongreso/Cientifico/artcen.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 31,  122 => 30,  118 => 29,  115 => 28,  109 => 27,  97 => 23,  84 => 15,  80 => 14,  71 => 10,  64 => 8,  61 => 7,  55 => 6,  49 => 5,  36 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Congreso/CongresoBundle/Resources/views/Cientifico/show.html.twig #}
{% extends \"CongresoCongresoBundle::layout.html.twig\" %}
{% block title %}Articulos de {{ cientifico.nombre }}{% endblock %}

{% block body %}
    {% for articulo in articulos %}
        <article class=\"articulo\">
            <div class=\"date\"><time datetime=\"{{ articulo.publicacion|date('c') }}\">{{ articulo.publicacion|date('l, F j, Y') }}</time></div>
            <header>
                <h2><a href=\"{{ path('congreso_congreso_show', { 'id': articulo.id }) }}\">{{ articulo.titulo }}</a></h2>
            </header>

            <div class=\"snippet\">
                <p>{{ articulo.cuerpo(200) }}</p>
                <p class=\"continue\"><a href=\"{{ path('congreso_congreso_show', { 'id': articulo.id }) }}\">Seguir leyendo...</a></p>
            </div>

            <footer class=\"meta\">
                <p>Comentarios: </p>
            </footer>
        </article>
    {% else %}
        <p>No hay entradas en este blog</p>
    {% endfor %}
{% endblock %}

{% block sidebar1 %}
<div class=\"cientificos\">
<p>{{ cientifico.nombre }}</p>
<p>{{ cientifico.especialidad }}</p>
<div class=\"date\"><time datetime=\"{{ cientifico.nacimiento|date('c') }}\">{{ cientifico.nacimiento|date('l, F j, Y') }}</time></div>
</div>
{% endblock %}

", "@CongresoCongreso/Cientifico/artcen.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Cientifico\\artcen.html.twig");
    }
}
