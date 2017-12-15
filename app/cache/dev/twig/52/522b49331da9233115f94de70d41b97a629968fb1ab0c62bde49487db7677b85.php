<?php

/* @CongresoCongreso/Track/arttrac.html.twig */
class __TwigTemplate_a06856d25e705e51735093b28b6342aa0500df6719cacab611c9b00d5b60347a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layout.html.twig", "@CongresoCongreso/Track/arttrac.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CongresoCongresoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4e52d8edbb1218db6bacfbe1c287efd92eac2d1d33cd749e0523369d0dd4ee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4e52d8edbb1218db6bacfbe1c287efd92eac2d1d33cd749e0523369d0dd4ee9->enter($__internal_a4e52d8edbb1218db6bacfbe1c287efd92eac2d1d33cd749e0523369d0dd4ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Track/arttrac.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4e52d8edbb1218db6bacfbe1c287efd92eac2d1d33cd749e0523369d0dd4ee9->leave($__internal_a4e52d8edbb1218db6bacfbe1c287efd92eac2d1d33cd749e0523369d0dd4ee9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a177e926102800407e5ef77a6bcf9d19a3626ea38953af10d2c9e988814388da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a177e926102800407e5ef77a6bcf9d19a3626ea38953af10d2c9e988814388da->enter($__internal_a177e926102800407e5ef77a6bcf9d19a3626ea38953af10d2c9e988814388da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Artículos de ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["track"] ?? $this->getContext($context, "track")), "campo", array()), "html", null, true);
        
        $__internal_a177e926102800407e5ef77a6bcf9d19a3626ea38953af10d2c9e988814388da->leave($__internal_a177e926102800407e5ef77a6bcf9d19a3626ea38953af10d2c9e988814388da_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_05494f031237f4377574d154a9cbdd585fa5beef6f0c091bb3180f779854ca3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05494f031237f4377574d154a9cbdd585fa5beef6f0c091bb3180f779854ca3d->enter($__internal_05494f031237f4377574d154a9cbdd585fa5beef6f0c091bb3180f779854ca3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articulos"] ?? $this->getContext($context, "articulos")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["articulo"]) {
            // line 7
            echo "        <article class=\"articulo\">
        <div class=\"separator\"></div>
           
             <p>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["articulo"], "ParsearFecha", array()), "html", null, true);
            echo "</p>


            <header>
                <h2><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_show", array("id" => $this->getAttribute($context["articulo"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["articulo"], "titulo", array()), "html", null, true);
            echo "</a></h2>
            </header>

            <div class=\"snippet\">
                <p>";
            // line 18
            echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute($context["articulo"], "cuerpo", array()), 0, 400) . "..."), "html", null, true);
            echo "</p>
                <p class=\"continue\"><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_show", array("id" => $this->getAttribute($context["articulo"], "id", array()))), "html", null, true);
            echo "\">Seguir leyendo...</a></p>
            </div>

            <footer class=\"meta\">
                <p>Comentarios: ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["articulo"], "numberofcomments", array()), "html", null, true);
            echo "</p>
            </footer>
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 27
            echo "        <p>No hay entradas en este blog</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_05494f031237f4377574d154a9cbdd585fa5beef6f0c091bb3180f779854ca3d->leave($__internal_05494f031237f4377574d154a9cbdd585fa5beef6f0c091bb3180f779854ca3d_prof);

    }

    // line 31
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_8378c24b99a3dc5fdd134b7d3710f2e5af2c1b1610f6747d0aefe02ed78d5ce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8378c24b99a3dc5fdd134b7d3710f2e5af2c1b1610f6747d0aefe02ed78d5ce5->enter($__internal_8378c24b99a3dc5fdd134b7d3710f2e5af2c1b1610f6747d0aefe02ed78d5ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 32
        echo "<p>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["track"] ?? $this->getContext($context, "track")), "info", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_8378c24b99a3dc5fdd134b7d3710f2e5af2c1b1610f6747d0aefe02ed78d5ce5->leave($__internal_8378c24b99a3dc5fdd134b7d3710f2e5af2c1b1610f6747d0aefe02ed78d5ce5_prof);

    }

    public function getTemplateName()
    {
        return "@CongresoCongreso/Track/arttrac.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 32,  114 => 31,  102 => 27,  93 => 23,  86 => 19,  82 => 18,  73 => 14,  66 => 10,  61 => 7,  55 => 6,  49 => 5,  36 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Congreso/CongresoBundle/Resources/views/Track/arttrac.html.twig #}
{% extends \"CongresoCongresoBundle::layout.html.twig\" %}
{% block title %}Artículos de {{ track.campo }}{% endblock %}

{% block body %}
    {% for articulo in articulos %}
        <article class=\"articulo\">
        <div class=\"separator\"></div>
           
             <p>{{  articulo.ParsearFecha }}</p>


            <header>
                <h2><a href=\"{{ path('congreso_congreso_show', { 'id': articulo.id }) }}\">{{ articulo.titulo }}</a></h2>
            </header>

            <div class=\"snippet\">
                <p>{{ articulo.cuerpo|slice(0, 400) ~ '...' }}</p>
                <p class=\"continue\"><a href=\"{{ path('congreso_congreso_show', { 'id': articulo.id }) }}\">Seguir leyendo...</a></p>
            </div>

            <footer class=\"meta\">
                <p>Comentarios: {{articulo.numberofcomments}}</p>
            </footer>
        </article>
    {% else %}
        <p>No hay entradas en este blog</p>
    {% endfor %}
{% endblock %}

{% block sidebar %}
<p>{{ track.info }}</p>
{% endblock %}

", "@CongresoCongreso/Track/arttrac.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Track\\arttrac.html.twig");
    }
}
