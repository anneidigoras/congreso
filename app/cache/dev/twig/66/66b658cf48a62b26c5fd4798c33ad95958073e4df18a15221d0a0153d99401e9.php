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
        $__internal_f3c5f6f58ee6620b2ce8324a87a29320a70d8365e9fd1d1c7a34f04ed5234c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3c5f6f58ee6620b2ce8324a87a29320a70d8365e9fd1d1c7a34f04ed5234c92->enter($__internal_f3c5f6f58ee6620b2ce8324a87a29320a70d8365e9fd1d1c7a34f04ed5234c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Cientifico/artcen.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3c5f6f58ee6620b2ce8324a87a29320a70d8365e9fd1d1c7a34f04ed5234c92->leave($__internal_f3c5f6f58ee6620b2ce8324a87a29320a70d8365e9fd1d1c7a34f04ed5234c92_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c752558d21c61b71ed0c6b19e6885c3b260263c01b4256b5beb485acab33441b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c752558d21c61b71ed0c6b19e6885c3b260263c01b4256b5beb485acab33441b->enter($__internal_c752558d21c61b71ed0c6b19e6885c3b260263c01b4256b5beb485acab33441b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Articulos de ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nombre", array()), "html", null, true);
        
        $__internal_c752558d21c61b71ed0c6b19e6885c3b260263c01b4256b5beb485acab33441b->leave($__internal_c752558d21c61b71ed0c6b19e6885c3b260263c01b4256b5beb485acab33441b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_263962fd4ac2bb0dd64fcf97562540723d41df9c9c782b3f7c5e5341870479a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_263962fd4ac2bb0dd64fcf97562540723d41df9c9c782b3f7c5e5341870479a9->enter($__internal_263962fd4ac2bb0dd64fcf97562540723d41df9c9c782b3f7c5e5341870479a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_263962fd4ac2bb0dd64fcf97562540723d41df9c9c782b3f7c5e5341870479a9->leave($__internal_263962fd4ac2bb0dd64fcf97562540723d41df9c9c782b3f7c5e5341870479a9_prof);

    }

    // line 27
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_1a6757ce03121e517be10f81220b9e2c0445616ff37e1b8c12ac1a23c1845e03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a6757ce03121e517be10f81220b9e2c0445616ff37e1b8c12ac1a23c1845e03->enter($__internal_1a6757ce03121e517be10f81220b9e2c0445616ff37e1b8c12ac1a23c1845e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

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
        echo ", pulse <a target=\"_blank\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? $this->getContext($context, "cientifico")), "info", array()), "html", null, true);
        echo "\">aquí</a>.</p>

</div>
<div class=\"separator\"></div>
<p class=\"continue\"><a href=\"/\">Volver a la Home</a></p>
<p class=\"continue\"><a href=\"/contact\">Contacto</a></p>
";
        
        $__internal_1a6757ce03121e517be10f81220b9e2c0445616ff37e1b8c12ac1a23c1845e03->leave($__internal_1a6757ce03121e517be10f81220b9e2c0445616ff37e1b8c12ac1a23c1845e03_prof);

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
        return array (  262 => 88,  255 => 84,  252 => 83,  248 => 81,  246 => 80,  243 => 79,  241 => 78,  238 => 77,  236 => 76,  233 => 75,  231 => 74,  228 => 73,  226 => 72,  223 => 71,  221 => 70,  218 => 69,  216 => 68,  213 => 67,  211 => 66,  208 => 65,  206 => 64,  203 => 63,  201 => 62,  198 => 61,  196 => 60,  193 => 59,  191 => 58,  186 => 55,  180 => 53,  176 => 51,  174 => 50,  171 => 49,  169 => 48,  166 => 47,  164 => 46,  161 => 45,  159 => 44,  156 => 43,  154 => 42,  151 => 41,  149 => 40,  146 => 39,  144 => 38,  141 => 37,  139 => 36,  136 => 35,  134 => 34,  125 => 30,  121 => 29,  118 => 28,  112 => 27,  100 => 23,  91 => 19,  84 => 15,  80 => 14,  71 => 10,  64 => 8,  61 => 7,  55 => 6,  49 => 5,  36 => 3,  11 => 2,);
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
                <p>Comentarios: {{articulo.numberofcomments}}</p>
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



<p> Si quiere más información sobre {{ cientifico.nombre }}, pulse <a target=\"_blank\" href=\"{{ cientifico.info }}\">aquí</a>.</p>

</div>
<div class=\"separator\"></div>
<p class=\"continue\"><a href=\"/\">Volver a la Home</a></p>
<p class=\"continue\"><a href=\"/contact\">Contacto</a></p>
{% endblock %}

", "@CongresoCongreso/Cientifico/artcen.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Cientifico\\artcen.html.twig");
    }
}
