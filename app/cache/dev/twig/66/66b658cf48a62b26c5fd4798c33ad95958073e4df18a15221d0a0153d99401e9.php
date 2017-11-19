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
        $__internal_8e01126a5e39e84acb52fec37de5bccdba20c4e6151a3ae679320176d23df4c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e01126a5e39e84acb52fec37de5bccdba20c4e6151a3ae679320176d23df4c7->enter($__internal_8e01126a5e39e84acb52fec37de5bccdba20c4e6151a3ae679320176d23df4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Cientifico/artcen.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e01126a5e39e84acb52fec37de5bccdba20c4e6151a3ae679320176d23df4c7->leave($__internal_8e01126a5e39e84acb52fec37de5bccdba20c4e6151a3ae679320176d23df4c7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b07abc3bf7df0dca90c1b0ef2829e0e1e6edf7706657f673e9505b6c8b17203e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b07abc3bf7df0dca90c1b0ef2829e0e1e6edf7706657f673e9505b6c8b17203e->enter($__internal_b07abc3bf7df0dca90c1b0ef2829e0e1e6edf7706657f673e9505b6c8b17203e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Articulos de ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nombre", array()), "html", null, true);
        
        $__internal_b07abc3bf7df0dca90c1b0ef2829e0e1e6edf7706657f673e9505b6c8b17203e->leave($__internal_b07abc3bf7df0dca90c1b0ef2829e0e1e6edf7706657f673e9505b6c8b17203e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_57301a5432aeb5a6640deec4af3aa0b6628009e8bb97ca6b48ed71cfb32d7493 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57301a5432aeb5a6640deec4af3aa0b6628009e8bb97ca6b48ed71cfb32d7493->enter($__internal_57301a5432aeb5a6640deec4af3aa0b6628009e8bb97ca6b48ed71cfb32d7493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_57301a5432aeb5a6640deec4af3aa0b6628009e8bb97ca6b48ed71cfb32d7493->leave($__internal_57301a5432aeb5a6640deec4af3aa0b6628009e8bb97ca6b48ed71cfb32d7493_prof);

    }

    // line 27
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_9da09f559433ba8bb05157450ea6e5f9b09f184b22fe856c9becf6f201c0956e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9da09f559433ba8bb05157450ea6e5f9b09f184b22fe856c9becf6f201c0956e->enter($__internal_9da09f559433ba8bb05157450ea6e5f9b09f184b22fe856c9becf6f201c0956e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        // line 28
        echo "<div class=\"cientificos\">
<p>Estos son los artículos que ha escrito ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nombre", array()), "html", null, true);
        echo ".</p>
<p>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nombre", array()), "html", null, true);
        echo " es un respetado profesional en los siguientes campos: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? $this->getContext($context, "cientifico")), "especialidad", array()), "html", null, true);
        echo "</p>


<p>Nació el 
";
        // line 34
        if ((twig_date_format_filter($this->env, $this->getAttribute(($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "d") == "01")) {
            // line 35
            echo "    1
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 36
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "d") == "02")) {
            // line 37
            echo "    2
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 38
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "d") == "03")) {
            // line 39
            echo "    3
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 40
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "d") == "04")) {
            // line 41
            echo "    4
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 42
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "d") == "05")) {
            // line 43
            echo "    5
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 44
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "d") == "06")) {
            // line 45
            echo "    6
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 46
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "d") == "07")) {
            // line 47
            echo "    7
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 48
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "d") == "08")) {
            // line 49
            echo "    8
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 50
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "d") == "09")) {
            // line 51
            echo "    9
";
        } else {
            // line 53
            echo "    ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "d"), "html", null, true);
            echo "
";
        }
        // line 55
        echo "
 de 

";
        // line 58
        if ((twig_date_format_filter($this->env, $this->getAttribute(($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "m") == "01")) {
            // line 59
            echo "    enero
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 60
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "m") == "02")) {
            // line 61
            echo "    febrero
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 62
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "m") == "03")) {
            // line 63
            echo "    marzo
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 64
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "m") == "04")) {
            // line 65
            echo "    abril
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 66
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "m") == "05")) {
            // line 67
            echo "    mayo
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 68
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "m") == "06")) {
            // line 69
            echo "    junio
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 70
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "m") == "07")) {
            // line 71
            echo "    julio
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 72
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "m") == "08")) {
            // line 73
            echo "    agosto
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 74
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "m") == "09")) {
            // line 75
            echo "    septiembre
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 76
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "m") == "10")) {
            // line 77
            echo "    octubre
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 78
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "m") == "11")) {
            // line 79
            echo "    noviembre
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 80
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "m") == "12")) {
            // line 81
            echo "    diciembre
";
        }
        // line 83
        echo "
 de ";
        // line 84
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "Y"), "html", null, true);
        echo "</p>



<p> Si quiere más información sobre ";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nombre", array()), "html", null, true);
        echo ", pulse <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? $this->getContext($context, "cientifico")), "info", array()), "html", null, true);
        echo "\">aquí</a>.</p>
</div>
";
        
        $__internal_9da09f559433ba8bb05157450ea6e5f9b09f184b22fe856c9becf6f201c0956e->leave($__internal_9da09f559433ba8bb05157450ea6e5f9b09f184b22fe856c9becf6f201c0956e_prof);

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
        return array (  259 => 88,  252 => 84,  249 => 83,  245 => 81,  243 => 80,  240 => 79,  238 => 78,  235 => 77,  233 => 76,  230 => 75,  228 => 74,  225 => 73,  223 => 72,  220 => 71,  218 => 70,  215 => 69,  213 => 68,  210 => 67,  208 => 66,  205 => 65,  203 => 64,  200 => 63,  198 => 62,  195 => 61,  193 => 60,  190 => 59,  188 => 58,  183 => 55,  177 => 53,  173 => 51,  171 => 50,  168 => 49,  166 => 48,  163 => 47,  161 => 46,  158 => 45,  156 => 44,  153 => 43,  151 => 42,  148 => 41,  146 => 40,  143 => 39,  141 => 38,  138 => 37,  136 => 36,  133 => 35,  131 => 34,  122 => 30,  118 => 29,  115 => 28,  109 => 27,  97 => 23,  84 => 15,  80 => 14,  71 => 10,  64 => 8,  61 => 7,  55 => 6,  49 => 5,  36 => 3,  11 => 2,);
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
                <p>{{ articulo.cuerpo|slice(0, 400) ~ '...' }}</p>
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
<p>Estos son los artículos que ha escrito {{ cientifico.nombre }}.</p>
<p>{{ cientifico.nombre }} es un respetado profesional en los siguientes campos: {{ cientifico.especialidad }}</p>


<p>Nació el 
{% if cientifico.nacimiento|date('d') ==  \"01\" %}
    1
{% elseif cientifico.nacimiento|date('d') ==  \"02\" %}
    2
{% elseif cientifico.nacimiento|date('d') ==  \"03\" %}
    3
{% elseif cientifico.nacimiento|date('d') ==  \"04\" %}
    4
{% elseif cientifico.nacimiento|date('d') ==  \"05\" %}
    5
{% elseif cientifico.nacimiento|date('d') ==  \"06\" %}
    6
{% elseif cientifico.nacimiento|date('d') ==  \"07\" %}
    7
{% elseif cientifico.nacimiento|date('d') ==  \"08\" %}
    8
{% elseif cientifico.nacimiento|date('d') ==  \"09\" %}
    9
{% else %}
    {{ cientifico.nacimiento|date('d') }}
{% endif %}

 de 

{% if cientifico.nacimiento|date('m') ==  \"01\" %}
    enero
{% elseif cientifico.nacimiento|date('m') ==  \"02\" %}
    febrero
{% elseif cientifico.nacimiento|date('m') ==  \"03\" %}
    marzo
{% elseif cientifico.nacimiento|date('m') ==  \"04\" %}
    abril
{% elseif cientifico.nacimiento|date('m') ==  \"05\" %}
    mayo
{% elseif cientifico.nacimiento|date('m') ==  \"06\" %}
    junio
{% elseif cientifico.nacimiento|date('m') ==  \"07\" %}
    julio
{% elseif cientifico.nacimiento|date('m') ==  \"08\" %}
    agosto
{% elseif cientifico.nacimiento|date('m') ==  \"09\" %}
    septiembre
{% elseif cientifico.nacimiento|date('m') ==  \"10\" %}
    octubre
{% elseif cientifico.nacimiento|date('m') ==  \"11\" %}
    noviembre
{% elseif cientifico.nacimiento|date('m') ==  \"12\" %}
    diciembre
{% endif %}

 de {{ cientifico.nacimiento|date('Y') }}</p>



<p> Si quiere más información sobre {{ cientifico.nombre }}, pulse <a href=\"{{ cientifico.info }}\">aquí</a>.</p>
</div>
{% endblock %}

", "@CongresoCongreso/Cientifico/artcen.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Cientifico\\artcen.html.twig");
    }
}
