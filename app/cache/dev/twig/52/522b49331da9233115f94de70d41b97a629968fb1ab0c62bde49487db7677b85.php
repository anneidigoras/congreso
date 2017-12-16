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
        $__internal_3c52db74b2a4c5c99917053ccb0c5101c745aba013bc847b5138014cb2f14c2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c52db74b2a4c5c99917053ccb0c5101c745aba013bc847b5138014cb2f14c2a->enter($__internal_3c52db74b2a4c5c99917053ccb0c5101c745aba013bc847b5138014cb2f14c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Track/arttrac.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c52db74b2a4c5c99917053ccb0c5101c745aba013bc847b5138014cb2f14c2a->leave($__internal_3c52db74b2a4c5c99917053ccb0c5101c745aba013bc847b5138014cb2f14c2a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_91fac9ebc09a988ee779ad9cb4ab3cdabdfe73b158ef1b1544a13fd53e876930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91fac9ebc09a988ee779ad9cb4ab3cdabdfe73b158ef1b1544a13fd53e876930->enter($__internal_91fac9ebc09a988ee779ad9cb4ab3cdabdfe73b158ef1b1544a13fd53e876930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Artículos de ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["track"] ?? $this->getContext($context, "track")), "campo", array()), "html", null, true);
        
        $__internal_91fac9ebc09a988ee779ad9cb4ab3cdabdfe73b158ef1b1544a13fd53e876930->leave($__internal_91fac9ebc09a988ee779ad9cb4ab3cdabdfe73b158ef1b1544a13fd53e876930_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_772c34979106848904caa19c49fec83a3652ef364a8e2b9498c5ae0819fd855a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_772c34979106848904caa19c49fec83a3652ef364a8e2b9498c5ae0819fd855a->enter($__internal_772c34979106848904caa19c49fec83a3652ef364a8e2b9498c5ae0819fd855a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_772c34979106848904caa19c49fec83a3652ef364a8e2b9498c5ae0819fd855a->leave($__internal_772c34979106848904caa19c49fec83a3652ef364a8e2b9498c5ae0819fd855a_prof);

    }

    // line 31
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_439f6ff5824f92f640a0f8309e71b09e62c9eee7cc6209c921171432f1f09dc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_439f6ff5824f92f640a0f8309e71b09e62c9eee7cc6209c921171432f1f09dc4->enter($__internal_439f6ff5824f92f640a0f8309e71b09e62c9eee7cc6209c921171432f1f09dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 32
        echo "<p>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["track"] ?? $this->getContext($context, "track")), "info", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_439f6ff5824f92f640a0f8309e71b09e62c9eee7cc6209c921171432f1f09dc4->leave($__internal_439f6ff5824f92f640a0f8309e71b09e62c9eee7cc6209c921171432f1f09dc4_prof);

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
