<?php

/* @CongresoCongreso/Congreso/list.html.twig */
class __TwigTemplate_b1b80c6e2d5ebb7aa9cf88b3bd0de0898628152fadfc3c2fbceb8a05761438b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layout.html.twig", "@CongresoCongreso/Congreso/list.html.twig", 2);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
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
        $__internal_cf2081ddd22605151e2c20e8564b1ce5854222002b6ac9da58acd43acf4ed7f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf2081ddd22605151e2c20e8564b1ce5854222002b6ac9da58acd43acf4ed7f6->enter($__internal_cf2081ddd22605151e2c20e8564b1ce5854222002b6ac9da58acd43acf4ed7f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Congreso/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf2081ddd22605151e2c20e8564b1ce5854222002b6ac9da58acd43acf4ed7f6->leave($__internal_cf2081ddd22605151e2c20e8564b1ce5854222002b6ac9da58acd43acf4ed7f6_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ab4187c87147e74b1994ed743f6bbea85d49c49c9d6ef3f409733087cc20d30a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab4187c87147e74b1994ed743f6bbea85d49c49c9d6ef3f409733087cc20d30a->enter($__internal_ab4187c87147e74b1994ed743f6bbea85d49c49c9d6ef3f409733087cc20d30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery1.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.qtip-1.0.0-rc3.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script1.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script2.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_ab4187c87147e74b1994ed743f6bbea85d49c49c9d6ef3f409733087cc20d30a->leave($__internal_ab4187c87147e74b1994ed743f6bbea85d49c49c9d6ef3f409733087cc20d30a_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad5847754c3c0cacce8825d9fd058d1bdecf8a43ff998aba9e2e46c95dca2991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad5847754c3c0cacce8825d9fd058d1bdecf8a43ff998aba9e2e46c95dca2991->enter($__internal_ad5847754c3c0cacce8825d9fd058d1bdecf8a43ff998aba9e2e46c95dca2991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "Lista de Artículos
";
        
        $__internal_ad5847754c3c0cacce8825d9fd058d1bdecf8a43ff998aba9e2e46c95dca2991->leave($__internal_ad5847754c3c0cacce8825d9fd058d1bdecf8a43ff998aba9e2e46c95dca2991_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9105a7a2a6a907f6ebfd5434f1dd0a03b86048e31394e69d6dab923887944dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9105a7a2a6a907f6ebfd5434f1dd0a03b86048e31394e69d6dab923887944dc->enter($__internal_c9105a7a2a6a907f6ebfd5434f1dd0a03b86048e31394e69d6dab923887944dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "    <div id=\"lista-ocultar\">
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tracks"] ?? $this->getContext($context, "tracks")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
            // line 21
            echo "        <h1><a id=\"nombre-temas\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_track_arttrac", array("id" => $this->getAttribute($context["track"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "campo", array()), "html", null, true);
            echo "</a></h1>
        <div id=\"lista-ocultar1\">
        ";
            // line 23
            $context["i"] = 0;
            // line 24
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articulos"] ?? $this->getContext($context, "articulos")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["articulo"]) {
                // line 25
                echo "            ";
                if ((($this->getAttribute($context["track"], "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute($context["articulo"], "tracks", array()), 0, array(), "array"), "id", array())) && (($context["i"] ?? $this->getContext($context, "i")) < 2))) {
                    // line 26
                    echo "                ";
                    $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
                    // line 27
                    echo "                <article class=\"articulo\">
                <div class=\"separator\"></div>
                    ";
                    // line 29
                    if ((twig_date_format_filter($this->env, $this->getAttribute($context["articulo"], "publicacion", array()), "d") == "01")) {
                        // line 30
                        echo "                        1
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 31
$context["articulo"], "publicacion", array()), "d") == "02")) {
                        // line 32
                        echo "                        2
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 33
$context["articulo"], "publicacion", array()), "d") == "03")) {
                        // line 34
                        echo "                        3
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 35
$context["articulo"], "publicacion", array()), "d") == "04")) {
                        // line 36
                        echo "                        4
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 37
$context["articulo"], "publicacion", array()), "d") == "05")) {
                        // line 38
                        echo "                        5
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 39
$context["articulo"], "publicacion", array()), "d") == "06")) {
                        // line 40
                        echo "                        6
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 41
$context["articulo"], "publicacion", array()), "d") == "07")) {
                        // line 42
                        echo "                        7
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 43
$context["articulo"], "publicacion", array()), "d") == "08")) {
                        // line 44
                        echo "                        8
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 45
$context["articulo"], "publicacion", array()), "d") == "09")) {
                        // line 46
                        echo "                        9
                    ";
                    } else {
                        // line 48
                        echo "                        ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["articulo"], "publicacion", array()), "d"), "html", null, true);
                        echo "
                    ";
                    }
                    // line 50
                    echo "
                    de 

                    ";
                    // line 53
                    if ((twig_date_format_filter($this->env, $this->getAttribute($context["articulo"], "publicacion", array()), "m") == "01")) {
                        // line 54
                        echo "                        enero
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 55
$context["articulo"], "publicacion", array()), "m") == "02")) {
                        // line 56
                        echo "                        febrero
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 57
$context["articulo"], "publicacion", array()), "m") == "03")) {
                        // line 58
                        echo "                        marzo
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 59
$context["articulo"], "publicacion", array()), "m") == "04")) {
                        // line 60
                        echo "                        abril
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 61
$context["articulo"], "publicacion", array()), "m") == "05")) {
                        // line 62
                        echo "                        mayo
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 63
$context["articulo"], "publicacion", array()), "m") == "06")) {
                        // line 64
                        echo "                        junio
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 65
$context["articulo"], "publicacion", array()), "m") == "07")) {
                        // line 66
                        echo "                        julio
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 67
$context["articulo"], "publicacion", array()), "m") == "08")) {
                        // line 68
                        echo "                        agosto
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 69
$context["articulo"], "publicacion", array()), "m") == "09")) {
                        // line 70
                        echo "                        septiembre
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 71
$context["articulo"], "publicacion", array()), "m") == "10")) {
                        // line 72
                        echo "                        octubre
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 73
$context["articulo"], "publicacion", array()), "m") == "11")) {
                        // line 74
                        echo "                        noviembre
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 75
$context["articulo"], "publicacion", array()), "m") == "12")) {
                        // line 76
                        echo "                        diciembre
                    ";
                    }
                    // line 78
                    echo "                    
                     de ";
                    // line 79
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["articulo"], "publicacion", array()), "Y"), "html", null, true);
                    echo "</p>
                    <header>
                        <h2><a href=\"";
                    // line 81
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_show", array("id" => $this->getAttribute($context["articulo"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["articulo"], "titulo", array()), "html", null, true);
                    echo "</a></h2>
                    </header>

                    <div class=\"snippet\">
                        <p>";
                    // line 85
                    echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute($context["articulo"], "cuerpo", array()), 0, 400) . "..."), "html", null, true);
                    echo "</p>
                        <p class=\"continue\"><a href=\"";
                    // line 86
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_show", array("id" => $this->getAttribute($context["articulo"], "id", array()))), "html", null, true);
                    echo "\">Seguir leyendo...</a></p>
                    </div>

                    <footer class=\"meta\">
                        <p>Comentarios: ";
                    // line 90
                    echo twig_escape_filter($this->env, $this->getAttribute($context["articulo"], "numberofcomments", array()), "html", null, true);
                    echo "</p>
                    </footer>
                </article>
            ";
                }
                // line 94
                echo "        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 95
                echo "            <p>No hay entradas en este blog</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articulo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 100
            echo "        <p>aaaaa</p>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['track'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "    </div>
";
        
        $__internal_c9105a7a2a6a907f6ebfd5434f1dd0a03b86048e31394e69d6dab923887944dc->leave($__internal_c9105a7a2a6a907f6ebfd5434f1dd0a03b86048e31394e69d6dab923887944dc_prof);

    }

    // line 106
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_28ca4d4e2ef857219cc675ccd29873816fd9d95ad76e44922f51f098561267d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ca4d4e2ef857219cc675ccd29873816fd9d95ad76e44922f51f098561267d5->enter($__internal_28ca4d4e2ef857219cc675ccd29873816fd9d95ad76e44922f51f098561267d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 107
        echo "




    <ul>
        <li><a href=\"/contact\">Contacto</a></li>
    </ul>

    <div class=\"separator\"></div>
    <p>¿Quieres saber la fecha y hora actuales?</p>


    

    <button type=\"button\" id=\"boton-mostrar-ocultar\">Mostrar/Ocultar</button>

    <div id=\"mostrar-ocultar\" style=\"display: none;\">
        <p id=\"dia\">Jueves, 1 de enero de 1970</p>
        <p id=\"reloj\">00:00:00</p>
        <button type=\"button\" id=\"Actualizar\">Actualizar</button>
    </div>


    
";
        
        $__internal_28ca4d4e2ef857219cc675ccd29873816fd9d95ad76e44922f51f098561267d5->leave($__internal_28ca4d4e2ef857219cc675ccd29873816fd9d95ad76e44922f51f098561267d5_prof);

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
        return array (  317 => 107,  311 => 106,  303 => 103,  295 => 100,  288 => 97,  281 => 95,  276 => 94,  269 => 90,  262 => 86,  258 => 85,  249 => 81,  244 => 79,  241 => 78,  237 => 76,  235 => 75,  232 => 74,  230 => 73,  227 => 72,  225 => 71,  222 => 70,  220 => 69,  217 => 68,  215 => 67,  212 => 66,  210 => 65,  207 => 64,  205 => 63,  202 => 62,  200 => 61,  197 => 60,  195 => 59,  192 => 58,  190 => 57,  187 => 56,  185 => 55,  182 => 54,  180 => 53,  175 => 50,  169 => 48,  165 => 46,  163 => 45,  160 => 44,  158 => 43,  155 => 42,  153 => 41,  150 => 40,  148 => 39,  145 => 38,  143 => 37,  140 => 36,  138 => 35,  135 => 34,  133 => 33,  130 => 32,  128 => 31,  125 => 30,  123 => 29,  119 => 27,  116 => 26,  113 => 25,  107 => 24,  105 => 23,  97 => 21,  92 => 20,  89 => 19,  83 => 18,  75 => 15,  69 => 14,  60 => 10,  56 => 9,  52 => 8,  48 => 7,  43 => 6,  37 => 5,  11 => 2,);
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


{% block javascripts %}
            <script type=\"text/javascript\" src=\"{{ asset('js/jquery.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/jquery1.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/jquery.qtip-1.0.0-rc3.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/script1.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/script2.js') }}\"></script>
{% endblock %}


{% block title %}
Lista de Artículos
{% endblock %}

{% block body %}
    <div id=\"lista-ocultar\">
    {% for track in tracks %}
        <h1><a id=\"nombre-temas\" href=\"{{ path('congreso_track_arttrac', { 'id': track.id }) }}\">{{ track.campo }}</a></h1>
        <div id=\"lista-ocultar1\">
        {% set i = 0 %}
        {% for articulo in articulos %}
            {% if track.id==articulo.tracks[0].id and i<2 %}
                {% set i = i+1 %}
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
            {% endif %}
        {% else %}
            <p>No hay entradas en este blog</p>
        {% endfor %}

        </div>
    {% else %}
        <p>aaaaa</p>

    {% endfor %}
    </div>
{% endblock %}

{% block sidebar %}





    <ul>
        <li><a href=\"/contact\">Contacto</a></li>
    </ul>

    <div class=\"separator\"></div>
    <p>¿Quieres saber la fecha y hora actuales?</p>


    

    <button type=\"button\" id=\"boton-mostrar-ocultar\">Mostrar/Ocultar</button>

    <div id=\"mostrar-ocultar\" style=\"display: none;\">
        <p id=\"dia\">Jueves, 1 de enero de 1970</p>
        <p id=\"reloj\">00:00:00</p>
        <button type=\"button\" id=\"Actualizar\">Actualizar</button>
    </div>


    
{% endblock %}

", "@CongresoCongreso/Congreso/list.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Congreso\\list.html.twig");
    }
}
