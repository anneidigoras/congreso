<?php

/* @CongresoCongreso/Congreso/list.html.twig */
class __TwigTemplate_dc0b62bb32a8557d19e855e4aeb9a56666b578f903747d3571849b7d41cac9d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layout.html.twig", "@CongresoCongreso/Congreso/list.html.twig", 2);
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
        $__internal_0f4962f7f414ca905b7b18f989b621be7e9138aefeeb16bd7dfc1728387ed64e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f4962f7f414ca905b7b18f989b621be7e9138aefeeb16bd7dfc1728387ed64e->enter($__internal_0f4962f7f414ca905b7b18f989b621be7e9138aefeeb16bd7dfc1728387ed64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Congreso/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f4962f7f414ca905b7b18f989b621be7e9138aefeeb16bd7dfc1728387ed64e->leave($__internal_0f4962f7f414ca905b7b18f989b621be7e9138aefeeb16bd7dfc1728387ed64e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e046fb881ddc950bde516a920b998c4bb16c4054c5fc8ea5bb44ed925dcd0f12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e046fb881ddc950bde516a920b998c4bb16c4054c5fc8ea5bb44ed925dcd0f12->enter($__internal_e046fb881ddc950bde516a920b998c4bb16c4054c5fc8ea5bb44ed925dcd0f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Artículos";
        
        $__internal_e046fb881ddc950bde516a920b998c4bb16c4054c5fc8ea5bb44ed925dcd0f12->leave($__internal_e046fb881ddc950bde516a920b998c4bb16c4054c5fc8ea5bb44ed925dcd0f12_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e5b596eb39e1948b0765f4b06daf485d984dd85c21bfed2a4523f6e0cd20008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e5b596eb39e1948b0765f4b06daf485d984dd85c21bfed2a4523f6e0cd20008->enter($__internal_8e5b596eb39e1948b0765f4b06daf485d984dd85c21bfed2a4523f6e0cd20008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute($context["articulo"], "cuerpo", array()), 0, 400) . "..."), "html", null, true);
            echo "</p>
                <p class=\"continue\"><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_show", array("id" => $this->getAttribute($context["articulo"], "id", array()))), "html", null, true);
            echo "\">Seguir leyendo...</a></p>
            </div>

            <footer class=\"meta\">
                <p>Comentarios: ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["articulo"], "numberofcomments", array()), "html", null, true);
            echo "</p>
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
        
        $__internal_8e5b596eb39e1948b0765f4b06daf485d984dd85c21bfed2a4523f6e0cd20008->leave($__internal_8e5b596eb39e1948b0765f4b06daf485d984dd85c21bfed2a4523f6e0cd20008_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_c74d316e3be030790e1d4f2a9a5a4fd0943e66912355d792e4adbcee93d65987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c74d316e3be030790e1d4f2a9a5a4fd0943e66912355d792e4adbcee93d65987->enter($__internal_c74d316e3be030790e1d4f2a9a5a4fd0943e66912355d792e4adbcee93d65987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "    <p class=\"continue\"><a href=\"/contact\">Contacto</a></p>
";
        
        $__internal_c74d316e3be030790e1d4f2a9a5a4fd0943e66912355d792e4adbcee93d65987->leave($__internal_c74d316e3be030790e1d4f2a9a5a4fd0943e66912355d792e4adbcee93d65987_prof);

    }

    public function getTemplateName()
    {
        return "@CongresoCongreso/Congreso/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 28,  111 => 27,  99 => 23,  90 => 19,  83 => 15,  79 => 14,  70 => 10,  63 => 8,  60 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Congreso/CongresoBundle/Resources/views/Congreso/list.html.twig #}
{% extends \"CongresoCongresoBundle::layout.html.twig\" %}
{% block title %}Lista de Artículos{% endblock %}

{% block body %}
    {% for articulo in articulos %}
        <article class=\"articulo\">
            <div class=\"date\"><time datetime=\"{{ articulo.publicacion|date('c') }}\">{{ articulo.publicacion|date('l, F j, Y') }}</time></div>
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
    <p class=\"continue\"><a href=\"/contact\">Contacto</a></p>
{% endblock %}", "@CongresoCongreso/Congreso/list.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Congreso\\list.html.twig");
    }
}
