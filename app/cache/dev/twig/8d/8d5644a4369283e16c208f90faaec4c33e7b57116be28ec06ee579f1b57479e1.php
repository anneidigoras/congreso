<?php

/* CongresoCongresoBundle:Cientifico:artcen.html.twig */
class __TwigTemplate_4f8142437c1ebd2febd868f84bd2f51ed6609035e2c82c490d96be3d35c64894 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layout.html.twig", "CongresoCongresoBundle:Cientifico:artcen.html.twig", 2);
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
        $__internal_69cbc8819c14ffa14f5c51ca3dfee9dee67f509787bbaf48ce91abcc695ed95e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69cbc8819c14ffa14f5c51ca3dfee9dee67f509787bbaf48ce91abcc695ed95e->enter($__internal_69cbc8819c14ffa14f5c51ca3dfee9dee67f509787bbaf48ce91abcc695ed95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Cientifico:artcen.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69cbc8819c14ffa14f5c51ca3dfee9dee67f509787bbaf48ce91abcc695ed95e->leave($__internal_69cbc8819c14ffa14f5c51ca3dfee9dee67f509787bbaf48ce91abcc695ed95e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_946a8e00627b9c83fc8badebc0594f39d4b9aeec83af97a031860cd7778110d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_946a8e00627b9c83fc8badebc0594f39d4b9aeec83af97a031860cd7778110d1->enter($__internal_946a8e00627b9c83fc8badebc0594f39d4b9aeec83af97a031860cd7778110d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Articulos de ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nombre", array()), "html", null, true);
        
        $__internal_946a8e00627b9c83fc8badebc0594f39d4b9aeec83af97a031860cd7778110d1->leave($__internal_946a8e00627b9c83fc8badebc0594f39d4b9aeec83af97a031860cd7778110d1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_945d6bfcd12d45401d7f97f1612a7c3f1a447989902f9dbc4f7b89af3c8e4f96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_945d6bfcd12d45401d7f97f1612a7c3f1a447989902f9dbc4f7b89af3c8e4f96->enter($__internal_945d6bfcd12d45401d7f97f1612a7c3f1a447989902f9dbc4f7b89af3c8e4f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_945d6bfcd12d45401d7f97f1612a7c3f1a447989902f9dbc4f7b89af3c8e4f96->leave($__internal_945d6bfcd12d45401d7f97f1612a7c3f1a447989902f9dbc4f7b89af3c8e4f96_prof);

    }

    // line 27
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_772f2dcc393014644d99a9122b115b1d594166097810ebd954ad5f47c73a80b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_772f2dcc393014644d99a9122b115b1d594166097810ebd954ad5f47c73a80b5->enter($__internal_772f2dcc393014644d99a9122b115b1d594166097810ebd954ad5f47c73a80b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

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
        
        $__internal_772f2dcc393014644d99a9122b115b1d594166097810ebd954ad5f47c73a80b5->leave($__internal_772f2dcc393014644d99a9122b115b1d594166097810ebd954ad5f47c73a80b5_prof);

    }

    public function getTemplateName()
    {
        return "CongresoCongresoBundle:Cientifico:artcen.html.twig";
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

", "CongresoCongresoBundle:Cientifico:artcen.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Cientifico/artcen.html.twig");
    }
}
