<?php

/* @CongresoCongreso/Cientifico/artcen.html.twig */
class __TwigTemplate_f4a1e78c6cd0c2bbafbe37543406b355a47974c4e371fbd6b1f6d9a644386454 extends Twig_Template
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
        $__internal_a7518602208cb4ffa586ed5355d863a4398664aa08bbcaca760a4a773976667d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7518602208cb4ffa586ed5355d863a4398664aa08bbcaca760a4a773976667d->enter($__internal_a7518602208cb4ffa586ed5355d863a4398664aa08bbcaca760a4a773976667d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Cientifico/artcen.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7518602208cb4ffa586ed5355d863a4398664aa08bbcaca760a4a773976667d->leave($__internal_a7518602208cb4ffa586ed5355d863a4398664aa08bbcaca760a4a773976667d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f8795d6dab6d7ec9bae4effa23d1b660a0447c877003be7f6d93ec0dc43a025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f8795d6dab6d7ec9bae4effa23d1b660a0447c877003be7f6d93ec0dc43a025->enter($__internal_1f8795d6dab6d7ec9bae4effa23d1b660a0447c877003be7f6d93ec0dc43a025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Artículos de ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nombre", array()), "html", null, true);
        
        $__internal_1f8795d6dab6d7ec9bae4effa23d1b660a0447c877003be7f6d93ec0dc43a025->leave($__internal_1f8795d6dab6d7ec9bae4effa23d1b660a0447c877003be7f6d93ec0dc43a025_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_066cae68b60274ebc458e2a429ad2590d57381c307d581b73372cf7accb1e3f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_066cae68b60274ebc458e2a429ad2590d57381c307d581b73372cf7accb1e3f9->enter($__internal_066cae68b60274ebc458e2a429ad2590d57381c307d581b73372cf7accb1e3f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["articulo"], "ParsearFecha", array()), "html", null, true);
            echo "</p>
            <header>
                <h2><a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_show", array("id" => $this->getAttribute($context["articulo"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["articulo"], "titulo", array()), "html", null, true);
            echo "</a></h2>
            </header>

            <div class=\"snippet\">
                <p>";
            // line 15
            echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute($context["articulo"], "cuerpo", array()), 0, 400) . "..."), "html", null, true);
            echo "</p>
                <p class=\"continue\"><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_show", array("id" => $this->getAttribute($context["articulo"], "id", array()))), "html", null, true);
            echo "\">Seguir leyendo...</a></p>
            </div>

            <footer class=\"meta\">
                <p>Comentarios: ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["articulo"], "numberofcomments", array()), "html", null, true);
            echo "</p>
            </footer>
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 24
            echo "        <p>No hay entradas en este blog</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_066cae68b60274ebc458e2a429ad2590d57381c307d581b73372cf7accb1e3f9->leave($__internal_066cae68b60274ebc458e2a429ad2590d57381c307d581b73372cf7accb1e3f9_prof);

    }

    // line 28
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_2d3153853526b6e2aeb64dc025217ace41ad545a4cd173c16b171b11447c0e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d3153853526b6e2aeb64dc025217ace41ad545a4cd173c16b171b11447c0e1d->enter($__internal_2d3153853526b6e2aeb64dc025217ace41ad545a4cd173c16b171b11447c0e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        // line 29
        echo "<div class=\"cientificos\">
<p>Estos son los artículos que ha escrito ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nombre", array()), "html", null, true);
        echo ".</p>
<p>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nombre", array()), "html", null, true);
        echo " es un respetado profesional en los siguientes campos: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? $this->getContext($context, "cientifico")), "especialidad", array()), "html", null, true);
        echo "</p>


<p>Nació el 
";
        // line 35
        if ((twig_date_format_filter($this->env, $this->getAttribute(($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "d") == "01")) {
            // line 36
            echo "    1
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 37
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "d") == "02")) {
            // line 38
            echo "    2
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 39
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "d") == "03")) {
            // line 40
            echo "    3
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 41
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "d") == "04")) {
            // line 42
            echo "    4
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 43
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "d") == "05")) {
            // line 44
            echo "    5
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 45
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "d") == "06")) {
            // line 46
            echo "    6
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 47
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "d") == "07")) {
            // line 48
            echo "    7
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 49
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "d") == "08")) {
            // line 50
            echo "    8
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 51
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "d") == "09")) {
            // line 52
            echo "    9
";
        } else {
            // line 54
            echo "    ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "d"), "html", null, true);
            echo "
";
        }
        // line 56
        echo "
 de 

";
        // line 59
        if ((twig_date_format_filter($this->env, $this->getAttribute(($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "m") == "01")) {
            // line 60
            echo "    enero
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 61
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "m") == "02")) {
            // line 62
            echo "    febrero
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 63
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "m") == "03")) {
            // line 64
            echo "    marzo
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 65
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "m") == "04")) {
            // line 66
            echo "    abril
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 67
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "m") == "05")) {
            // line 68
            echo "    mayo
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 69
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "m") == "06")) {
            // line 70
            echo "    junio
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 71
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "m") == "07")) {
            // line 72
            echo "    julio
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 73
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "m") == "08")) {
            // line 74
            echo "    agosto
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 75
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "m") == "09")) {
            // line 76
            echo "    septiembre
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 77
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "m") == "10")) {
            // line 78
            echo "    octubre
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 79
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "m") == "11")) {
            // line 80
            echo "    noviembre
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 81
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "m") == "12")) {
            // line 82
            echo "    diciembre
";
        }
        // line 84
        echo "
 de ";
        // line 85
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "Y"), "html", null, true);
        echo "</p>



<p> Si quiere más información sobre ";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nombre", array()), "html", null, true);
        echo ", pulse <a target=\"_blank\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? $this->getContext($context, "cientifico")), "info", array()), "html", null, true);
        echo "\">aquí</a>.</p>

</div>
";
        
        $__internal_2d3153853526b6e2aeb64dc025217ace41ad545a4cd173c16b171b11447c0e1d->leave($__internal_2d3153853526b6e2aeb64dc025217ace41ad545a4cd173c16b171b11447c0e1d_prof);

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
        return array (  261 => 89,  254 => 85,  251 => 84,  247 => 82,  245 => 81,  242 => 80,  240 => 79,  237 => 78,  235 => 77,  232 => 76,  230 => 75,  227 => 74,  225 => 73,  222 => 72,  220 => 71,  217 => 70,  215 => 69,  212 => 68,  210 => 67,  207 => 66,  205 => 65,  202 => 64,  200 => 63,  197 => 62,  195 => 61,  192 => 60,  190 => 59,  185 => 56,  179 => 54,  175 => 52,  173 => 51,  170 => 50,  168 => 49,  165 => 48,  163 => 47,  160 => 46,  158 => 45,  155 => 44,  153 => 43,  150 => 42,  148 => 41,  145 => 40,  143 => 39,  140 => 38,  138 => 37,  135 => 36,  133 => 35,  124 => 31,  120 => 30,  117 => 29,  111 => 28,  99 => 24,  90 => 20,  83 => 16,  79 => 15,  70 => 11,  65 => 9,  61 => 7,  55 => 6,  49 => 5,  36 => 3,  11 => 2,);
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
{% block title %}Artículos de {{ cientifico.nombre }}{% endblock %}

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
{% endblock %}

", "@CongresoCongreso/Cientifico/artcen.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Cientifico\\artcen.html.twig");
    }
}
