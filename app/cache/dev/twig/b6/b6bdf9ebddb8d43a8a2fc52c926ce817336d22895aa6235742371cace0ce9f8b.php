<?php

/* CongresoCongresoBundle:Track:arttrac.html.twig */
class __TwigTemplate_c50e8f8c94eddadcf6febd6e7f2e6dbd866a1e5f22be6764dd476a83e1be62fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layout.html.twig", "CongresoCongresoBundle:Track:arttrac.html.twig", 2);
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
        $__internal_0122ba3081adb4b4e01af00cfe645029ba983c4179398b64868384ea4955f5d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0122ba3081adb4b4e01af00cfe645029ba983c4179398b64868384ea4955f5d8->enter($__internal_0122ba3081adb4b4e01af00cfe645029ba983c4179398b64868384ea4955f5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Track:arttrac.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0122ba3081adb4b4e01af00cfe645029ba983c4179398b64868384ea4955f5d8->leave($__internal_0122ba3081adb4b4e01af00cfe645029ba983c4179398b64868384ea4955f5d8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd4fb527f1bbaa9354de337044908820e9194c4f8a683a246236f101ef4eeded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd4fb527f1bbaa9354de337044908820e9194c4f8a683a246236f101ef4eeded->enter($__internal_bd4fb527f1bbaa9354de337044908820e9194c4f8a683a246236f101ef4eeded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Artículos de ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["track"] ?? $this->getContext($context, "track")), "campo", array()), "html", null, true);
        
        $__internal_bd4fb527f1bbaa9354de337044908820e9194c4f8a683a246236f101ef4eeded->leave($__internal_bd4fb527f1bbaa9354de337044908820e9194c4f8a683a246236f101ef4eeded_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_48475803a35b7d238b1e78aea7acbcbca9f01a76ac912fb4ea3a0ea9e880b176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48475803a35b7d238b1e78aea7acbcbca9f01a76ac912fb4ea3a0ea9e880b176->enter($__internal_48475803a35b7d238b1e78aea7acbcbca9f01a76ac912fb4ea3a0ea9e880b176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_48475803a35b7d238b1e78aea7acbcbca9f01a76ac912fb4ea3a0ea9e880b176->leave($__internal_48475803a35b7d238b1e78aea7acbcbca9f01a76ac912fb4ea3a0ea9e880b176_prof);

    }

    // line 31
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_65ba77b111aa783e15cba1a0fad9f05bf08b98358d3a501f77caec46c0da85d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65ba77b111aa783e15cba1a0fad9f05bf08b98358d3a501f77caec46c0da85d7->enter($__internal_65ba77b111aa783e15cba1a0fad9f05bf08b98358d3a501f77caec46c0da85d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 32
        echo "<p>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["track"] ?? $this->getContext($context, "track")), "info", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_65ba77b111aa783e15cba1a0fad9f05bf08b98358d3a501f77caec46c0da85d7->leave($__internal_65ba77b111aa783e15cba1a0fad9f05bf08b98358d3a501f77caec46c0da85d7_prof);

    }

    public function getTemplateName()
    {
        return "CongresoCongresoBundle:Track:arttrac.html.twig";
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

", "CongresoCongresoBundle:Track:arttrac.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Track/arttrac.html.twig");
    }
}
