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
        $__internal_16b1c5f22369964da1a696ea16a52fd5c943f6cd214dfd704dc9d6e0647dfa1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16b1c5f22369964da1a696ea16a52fd5c943f6cd214dfd704dc9d6e0647dfa1b->enter($__internal_16b1c5f22369964da1a696ea16a52fd5c943f6cd214dfd704dc9d6e0647dfa1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Congreso/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16b1c5f22369964da1a696ea16a52fd5c943f6cd214dfd704dc9d6e0647dfa1b->leave($__internal_16b1c5f22369964da1a696ea16a52fd5c943f6cd214dfd704dc9d6e0647dfa1b_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1165182fe8d5aaba9007b98d5866f157bb4ba1f041f468112fcf166ff445b787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1165182fe8d5aaba9007b98d5866f157bb4ba1f041f468112fcf166ff445b787->enter($__internal_1165182fe8d5aaba9007b98d5866f157bb4ba1f041f468112fcf166ff445b787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery1.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.qtip-1.0.0-rc3.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script1.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_1165182fe8d5aaba9007b98d5866f157bb4ba1f041f468112fcf166ff445b787->leave($__internal_1165182fe8d5aaba9007b98d5866f157bb4ba1f041f468112fcf166ff445b787_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7edb76ab1fca693935f349f1244b51e8a661cebc24d2c58933a119345323040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7edb76ab1fca693935f349f1244b51e8a661cebc24d2c58933a119345323040->enter($__internal_b7edb76ab1fca693935f349f1244b51e8a661cebc24d2c58933a119345323040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Artículos";
        
        $__internal_b7edb76ab1fca693935f349f1244b51e8a661cebc24d2c58933a119345323040->leave($__internal_b7edb76ab1fca693935f349f1244b51e8a661cebc24d2c58933a119345323040_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d7db01322ef736fd03dfbeebb3e6606f558a4c77fca2a4ab74cad6ebeb00d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d7db01322ef736fd03dfbeebb3e6606f558a4c77fca2a4ab74cad6ebeb00d1e->enter($__internal_6d7db01322ef736fd03dfbeebb3e6606f558a4c77fca2a4ab74cad6ebeb00d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tracks"] ?? $this->getContext($context, "tracks")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
            // line 16
            echo "        <h1><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_track_arttrac", array("id" => $this->getAttribute($context["track"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "campo", array()), "html", null, true);
            echo "</a></h1>
        ";
            // line 17
            $context["i"] = 0;
            // line 18
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articulos"] ?? $this->getContext($context, "articulos")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["articulo"]) {
                // line 19
                echo "            ";
                if ((($this->getAttribute($context["track"], "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute($context["articulo"], "tracks", array()), 0, array(), "array"), "id", array())) && (($context["i"] ?? $this->getContext($context, "i")) < 2))) {
                    // line 20
                    echo "                ";
                    $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
                    // line 21
                    echo "                <article class=\"articulo\">
                <div class=\"separator\"></div>
                    ";
                    // line 23
                    if ((twig_date_format_filter($this->env, $this->getAttribute($context["articulo"], "publicacion", array()), "d") == "01")) {
                        // line 24
                        echo "                        1
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 25
$context["articulo"], "publicacion", array()), "d") == "02")) {
                        // line 26
                        echo "                        2
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 27
$context["articulo"], "publicacion", array()), "d") == "03")) {
                        // line 28
                        echo "                        3
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 29
$context["articulo"], "publicacion", array()), "d") == "04")) {
                        // line 30
                        echo "                        4
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 31
$context["articulo"], "publicacion", array()), "d") == "05")) {
                        // line 32
                        echo "                        5
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 33
$context["articulo"], "publicacion", array()), "d") == "06")) {
                        // line 34
                        echo "                        6
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 35
$context["articulo"], "publicacion", array()), "d") == "07")) {
                        // line 36
                        echo "                        7
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 37
$context["articulo"], "publicacion", array()), "d") == "08")) {
                        // line 38
                        echo "                        8
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 39
$context["articulo"], "publicacion", array()), "d") == "09")) {
                        // line 40
                        echo "                        9
                    ";
                    } else {
                        // line 42
                        echo "                        ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["articulo"], "publicacion", array()), "d"), "html", null, true);
                        echo "
                    ";
                    }
                    // line 44
                    echo "
                    de 

                    ";
                    // line 47
                    if ((twig_date_format_filter($this->env, $this->getAttribute($context["articulo"], "publicacion", array()), "m") == "01")) {
                        // line 48
                        echo "                        enero
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 49
$context["articulo"], "publicacion", array()), "m") == "02")) {
                        // line 50
                        echo "                        febrero
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 51
$context["articulo"], "publicacion", array()), "m") == "03")) {
                        // line 52
                        echo "                        marzo
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 53
$context["articulo"], "publicacion", array()), "m") == "04")) {
                        // line 54
                        echo "                        abril
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 55
$context["articulo"], "publicacion", array()), "m") == "05")) {
                        // line 56
                        echo "                        mayo
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 57
$context["articulo"], "publicacion", array()), "m") == "06")) {
                        // line 58
                        echo "                        junio
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 59
$context["articulo"], "publicacion", array()), "m") == "07")) {
                        // line 60
                        echo "                        julio
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 61
$context["articulo"], "publicacion", array()), "m") == "08")) {
                        // line 62
                        echo "                        agosto
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 63
$context["articulo"], "publicacion", array()), "m") == "09")) {
                        // line 64
                        echo "                        septiembre
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 65
$context["articulo"], "publicacion", array()), "m") == "10")) {
                        // line 66
                        echo "                        octubre
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 67
$context["articulo"], "publicacion", array()), "m") == "11")) {
                        // line 68
                        echo "                        noviembre
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 69
$context["articulo"], "publicacion", array()), "m") == "12")) {
                        // line 70
                        echo "                        diciembre
                    ";
                    }
                    // line 72
                    echo "                    
                     de ";
                    // line 73
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["articulo"], "publicacion", array()), "Y"), "html", null, true);
                    echo "</p>
                    <header>
                        <h2><a href=\"";
                    // line 75
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_show", array("id" => $this->getAttribute($context["articulo"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["articulo"], "titulo", array()), "html", null, true);
                    echo "</a></h2>
                    </header>

                    <div class=\"snippet\">
                        <p>";
                    // line 79
                    echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute($context["articulo"], "cuerpo", array()), 0, 400) . "..."), "html", null, true);
                    echo "</p>
                        <p class=\"continue\"><a href=\"";
                    // line 80
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_show", array("id" => $this->getAttribute($context["articulo"], "id", array()))), "html", null, true);
                    echo "\">Seguir leyendo...</a></p>
                    </div>

                    <footer class=\"meta\">
                        <p>Comentarios: ";
                    // line 84
                    echo twig_escape_filter($this->env, $this->getAttribute($context["articulo"], "numberofcomments", array()), "html", null, true);
                    echo "</p>
                    </footer>
                </article>
            ";
                }
                // line 88
                echo "        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 89
                echo "            <p>No hay entradas en este blog</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articulo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 92
            echo "        <p>aaaaa</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['track'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6d7db01322ef736fd03dfbeebb3e6606f558a4c77fca2a4ab74cad6ebeb00d1e->leave($__internal_6d7db01322ef736fd03dfbeebb3e6606f558a4c77fca2a4ab74cad6ebeb00d1e_prof);

    }

    // line 96
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e8edf239aa845a7670eb8e7d1afaffa54eb6cac0991e2fe10da17f1b3ace6c5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8edf239aa845a7670eb8e7d1afaffa54eb6cac0991e2fe10da17f1b3ace6c5d->enter($__internal_e8edf239aa845a7670eb8e7d1afaffa54eb6cac0991e2fe10da17f1b3ace6c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 97
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
        
        $__internal_e8edf239aa845a7670eb8e7d1afaffa54eb6cac0991e2fe10da17f1b3ace6c5d->leave($__internal_e8edf239aa845a7670eb8e7d1afaffa54eb6cac0991e2fe10da17f1b3ace6c5d_prof);

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
        return array (  298 => 97,  292 => 96,  280 => 92,  275 => 91,  268 => 89,  263 => 88,  256 => 84,  249 => 80,  245 => 79,  236 => 75,  231 => 73,  228 => 72,  224 => 70,  222 => 69,  219 => 68,  217 => 67,  214 => 66,  212 => 65,  209 => 64,  207 => 63,  204 => 62,  202 => 61,  199 => 60,  197 => 59,  194 => 58,  192 => 57,  189 => 56,  187 => 55,  184 => 54,  182 => 53,  179 => 52,  177 => 51,  174 => 50,  172 => 49,  169 => 48,  167 => 47,  162 => 44,  156 => 42,  152 => 40,  150 => 39,  147 => 38,  145 => 37,  142 => 36,  140 => 35,  137 => 34,  135 => 33,  132 => 32,  130 => 31,  127 => 30,  125 => 29,  122 => 28,  120 => 27,  117 => 26,  115 => 25,  112 => 24,  110 => 23,  106 => 21,  103 => 20,  100 => 19,  94 => 18,  92 => 17,  85 => 16,  79 => 15,  73 => 14,  61 => 12,  52 => 8,  48 => 7,  43 => 6,  37 => 5,  11 => 2,);
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
            <script type=\"text/javascript\" src=\"{{ asset('js/jquery1.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/jquery.qtip-1.0.0-rc3.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/script1.js') }}\"></script>
{% endblock %}


{% block title %}Lista de Artículos{% endblock %}

{% block body %}
    {% for track in tracks %}
        <h1><a href=\"{{ path('congreso_track_arttrac', { 'id': track.id }) }}\">{{ track.campo }}</a></h1>
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
    {% else %}
        <p>aaaaa</p>
    {% endfor %}
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
