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
        $__internal_7a5dd03baea0afd1523efb67ccfae82ddfaecd7ffc1896b18bf4e455051b26b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a5dd03baea0afd1523efb67ccfae82ddfaecd7ffc1896b18bf4e455051b26b5->enter($__internal_7a5dd03baea0afd1523efb67ccfae82ddfaecd7ffc1896b18bf4e455051b26b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Track:arttrac.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a5dd03baea0afd1523efb67ccfae82ddfaecd7ffc1896b18bf4e455051b26b5->leave($__internal_7a5dd03baea0afd1523efb67ccfae82ddfaecd7ffc1896b18bf4e455051b26b5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_35cc706827ce7f34d14ca45010cf4a44c413fc7be9b4beab05cd20a862ef4adc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35cc706827ce7f34d14ca45010cf4a44c413fc7be9b4beab05cd20a862ef4adc->enter($__internal_35cc706827ce7f34d14ca45010cf4a44c413fc7be9b4beab05cd20a862ef4adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Artículos de ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["track"] ?? $this->getContext($context, "track")), "campo", array()), "html", null, true);
        
        $__internal_35cc706827ce7f34d14ca45010cf4a44c413fc7be9b4beab05cd20a862ef4adc->leave($__internal_35cc706827ce7f34d14ca45010cf4a44c413fc7be9b4beab05cd20a862ef4adc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b74c516c2c92977b23f63dda1066716d00f2a16012c888e8262001aa7e46c9ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b74c516c2c92977b23f63dda1066716d00f2a16012c888e8262001aa7e46c9ce->enter($__internal_b74c516c2c92977b23f63dda1066716d00f2a16012c888e8262001aa7e46c9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articulos"] ?? $this->getContext($context, "articulos")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["articulo"]) {
            // line 7
            echo "        <article class=\"articulo\">
        <div class=\"separator\"></div>
            ";
            // line 9
            if ((twig_date_format_filter($this->env, $this->getAttribute($context["articulo"], "publicacion", array()), "d") == "01")) {
                // line 10
                echo "                1
            ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 11
$context["articulo"], "publicacion", array()), "d") == "02")) {
                // line 12
                echo "                2
            ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 13
$context["articulo"], "publicacion", array()), "d") == "03")) {
                // line 14
                echo "                3
            ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 15
$context["articulo"], "publicacion", array()), "d") == "04")) {
                // line 16
                echo "                4
            ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 17
$context["articulo"], "publicacion", array()), "d") == "05")) {
                // line 18
                echo "                5
            ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 19
$context["articulo"], "publicacion", array()), "d") == "06")) {
                // line 20
                echo "                6
            ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 21
$context["articulo"], "publicacion", array()), "d") == "07")) {
                // line 22
                echo "                7
            ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 23
$context["articulo"], "publicacion", array()), "d") == "08")) {
                // line 24
                echo "                8
            ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 25
$context["articulo"], "publicacion", array()), "d") == "09")) {
                // line 26
                echo "                9
            ";
            } else {
                // line 28
                echo "                ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["articulo"], "publicacion", array()), "d"), "html", null, true);
                echo "
            ";
            }
            // line 30
            echo "
            de 

            ";
            // line 33
            if ((twig_date_format_filter($this->env, $this->getAttribute($context["articulo"], "publicacion", array()), "m") == "01")) {
                // line 34
                echo "                enero
            ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 35
$context["articulo"], "publicacion", array()), "m") == "02")) {
                // line 36
                echo "                febrero
            ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 37
$context["articulo"], "publicacion", array()), "m") == "03")) {
                // line 38
                echo "                marzo
            ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 39
$context["articulo"], "publicacion", array()), "m") == "04")) {
                // line 40
                echo "                abril
            ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 41
$context["articulo"], "publicacion", array()), "m") == "05")) {
                // line 42
                echo "                mayo
            ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 43
$context["articulo"], "publicacion", array()), "m") == "06")) {
                // line 44
                echo "                junio
            ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 45
$context["articulo"], "publicacion", array()), "m") == "07")) {
                // line 46
                echo "                julio
            ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 47
$context["articulo"], "publicacion", array()), "m") == "08")) {
                // line 48
                echo "                agosto
            ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 49
$context["articulo"], "publicacion", array()), "m") == "09")) {
                // line 50
                echo "                septiembre
            ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 51
$context["articulo"], "publicacion", array()), "m") == "10")) {
                // line 52
                echo "                octubre
            ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 53
$context["articulo"], "publicacion", array()), "m") == "11")) {
                // line 54
                echo "                noviembre
            ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 55
$context["articulo"], "publicacion", array()), "m") == "12")) {
                // line 56
                echo "                diciembre
            ";
            }
            // line 58
            echo "            
             de ";
            // line 59
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["articulo"], "publicacion", array()), "Y"), "html", null, true);
            echo "</p>
            <header>
                <h2><a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_show", array("id" => $this->getAttribute($context["articulo"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["articulo"], "titulo", array()), "html", null, true);
            echo "</a></h2>
            </header>

            <div class=\"snippet\">
                <p>";
            // line 65
            echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute($context["articulo"], "cuerpo", array()), 0, 400) . "..."), "html", null, true);
            echo "</p>
                <p class=\"continue\"><a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_show", array("id" => $this->getAttribute($context["articulo"], "id", array()))), "html", null, true);
            echo "\">Seguir leyendo...</a></p>
            </div>

            <footer class=\"meta\">
                <p>Comentarios: ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["articulo"], "numberofcomments", array()), "html", null, true);
            echo "</p>
            </footer>
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 74
            echo "        <p>No hay entradas en este blog</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b74c516c2c92977b23f63dda1066716d00f2a16012c888e8262001aa7e46c9ce->leave($__internal_b74c516c2c92977b23f63dda1066716d00f2a16012c888e8262001aa7e46c9ce_prof);

    }

    // line 78
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_8e56a43beafc50c134faad953b29b87d3dff73fd43bcd943b4467dda541c2333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e56a43beafc50c134faad953b29b87d3dff73fd43bcd943b4467dda541c2333->enter($__internal_8e56a43beafc50c134faad953b29b87d3dff73fd43bcd943b4467dda541c2333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 79
        echo "<p>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["track"] ?? $this->getContext($context, "track")), "info", array()), "html", null, true);
        echo "</p>
<p class=\"continue\"><a href=\"/\">Volver a la Home</a></p>
<p class=\"continue\"><a href=\"/contact\">Contacto</a></p>
";
        
        $__internal_8e56a43beafc50c134faad953b29b87d3dff73fd43bcd943b4467dda541c2333->leave($__internal_8e56a43beafc50c134faad953b29b87d3dff73fd43bcd943b4467dda541c2333_prof);

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
        return array (  238 => 79,  232 => 78,  220 => 74,  211 => 70,  204 => 66,  200 => 65,  191 => 61,  186 => 59,  183 => 58,  179 => 56,  177 => 55,  174 => 54,  172 => 53,  169 => 52,  167 => 51,  164 => 50,  162 => 49,  159 => 48,  157 => 47,  154 => 46,  152 => 45,  149 => 44,  147 => 43,  144 => 42,  142 => 41,  139 => 40,  137 => 39,  134 => 38,  132 => 37,  129 => 36,  127 => 35,  124 => 34,  122 => 33,  117 => 30,  111 => 28,  107 => 26,  105 => 25,  102 => 24,  100 => 23,  97 => 22,  95 => 21,  92 => 20,  90 => 19,  87 => 18,  85 => 17,  82 => 16,  80 => 15,  77 => 14,  75 => 13,  72 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 7,  55 => 6,  49 => 5,  36 => 3,  11 => 2,);
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
            {% if articulo.publicacion|date('d') ==  \"01\" %}
                1
            {% elseif articulo.publicacion|date('d') ==  \"02\" %}
                2
            {% elseif articulo.publicacion|date('d') ==  \"03\" %}
                3
            {% elseif articulo.publicacion|date('d') ==  \"04\" %}
                4
            {% elseif articulo.publicacion|date('d') ==  \"05\" %}
                5
            {% elseif articulo.publicacion|date('d') ==  \"06\" %}
                6
            {% elseif articulo.publicacion|date('d') ==  \"07\" %}
                7
            {% elseif articulo.publicacion|date('d') ==  \"08\" %}
                8
            {% elseif articulo.publicacion|date('d') ==  \"09\" %}
                9
            {% else %}
                {{ articulo.publicacion|date('d') }}
            {% endif %}

            de 

            {% if articulo.publicacion|date('m') ==  \"01\" %}
                enero
            {% elseif articulo.publicacion|date('m') ==  \"02\" %}
                febrero
            {% elseif articulo.publicacion|date('m') ==  \"03\" %}
                marzo
            {% elseif articulo.publicacion|date('m') ==  \"04\" %}
                abril
            {% elseif articulo.publicacion|date('m') ==  \"05\" %}
                mayo
            {% elseif articulo.publicacion|date('m') ==  \"06\" %}
                junio
            {% elseif articulo.publicacion|date('m') ==  \"07\" %}
                julio
            {% elseif articulo.publicacion|date('m') ==  \"08\" %}
                agosto
            {% elseif articulo.publicacion|date('m') ==  \"09\" %}
                septiembre
            {% elseif articulo.publicacion|date('m') ==  \"10\" %}
                octubre
            {% elseif articulo.publicacion|date('m') ==  \"11\" %}
                noviembre
            {% elseif articulo.publicacion|date('m') ==  \"12\" %}
                diciembre
            {% endif %}
            
             de {{ articulo.publicacion|date('Y') }}</p>
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
<p class=\"continue\"><a href=\"/\">Volver a la Home</a></p>
<p class=\"continue\"><a href=\"/contact\">Contacto</a></p>
{% endblock %}

", "CongresoCongresoBundle:Track:arttrac.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Track/arttrac.html.twig");
    }
}
