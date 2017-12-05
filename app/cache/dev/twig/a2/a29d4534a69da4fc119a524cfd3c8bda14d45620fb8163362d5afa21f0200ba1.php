<?php

/* CongresoCongresoBundle:Congreso:list.html.twig */
class __TwigTemplate_9a9abb82a8a5479857aa6d906a4e0d21f90a9633f6c0d25ec840819c723e53d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layout.html.twig", "CongresoCongresoBundle:Congreso:list.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navigation' => array($this, 'block_navigation'),
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
        $__internal_9f277dff1b806098b0e0b69140df8e8fc81f869ea6e467df5e0cdfbc95eb6b11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f277dff1b806098b0e0b69140df8e8fc81f869ea6e467df5e0cdfbc95eb6b11->enter($__internal_9f277dff1b806098b0e0b69140df8e8fc81f869ea6e467df5e0cdfbc95eb6b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f277dff1b806098b0e0b69140df8e8fc81f869ea6e467df5e0cdfbc95eb6b11->leave($__internal_9f277dff1b806098b0e0b69140df8e8fc81f869ea6e467df5e0cdfbc95eb6b11_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_22f8fb98e9c00ff6d3a7092fbbde7f215b39bb98a3d2ec0fc642c60d7f336ace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22f8fb98e9c00ff6d3a7092fbbde7f215b39bb98a3d2ec0fc642c60d7f336ace->enter($__internal_22f8fb98e9c00ff6d3a7092fbbde7f215b39bb98a3d2ec0fc642c60d7f336ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Artículos";
        
        $__internal_22f8fb98e9c00ff6d3a7092fbbde7f215b39bb98a3d2ec0fc642c60d7f336ace->leave($__internal_22f8fb98e9c00ff6d3a7092fbbde7f215b39bb98a3d2ec0fc642c60d7f336ace_prof);

    }

    // line 5
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_96128695aa9fbf057e0baa5f8d12297f94a89cfaaffa227fa14c28fa7230a2b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96128695aa9fbf057e0baa5f8d12297f94a89cfaaffa227fa14c28fa7230a2b2->enter($__internal_96128695aa9fbf057e0baa5f8d12297f94a89cfaaffa227fa14c28fa7230a2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 6
        echo "    <nav>
        <ul class=\"navigation\">
            <li><a href=\"\">Entrar</a></li>
        </ul>
    </nav>
";
        
        $__internal_96128695aa9fbf057e0baa5f8d12297f94a89cfaaffa227fa14c28fa7230a2b2->leave($__internal_96128695aa9fbf057e0baa5f8d12297f94a89cfaaffa227fa14c28fa7230a2b2_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_7db219b704e3f6d3ee8ba460022eb396858f51e432a057b3097a077c8f52f5de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7db219b704e3f6d3ee8ba460022eb396858f51e432a057b3097a077c8f52f5de->enter($__internal_7db219b704e3f6d3ee8ba460022eb396858f51e432a057b3097a077c8f52f5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tracks"] ?? $this->getContext($context, "tracks")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
            // line 15
            echo "        <h1><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_track_arttrac", array("id" => $this->getAttribute($context["track"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "campo", array()), "html", null, true);
            echo "</a></h1>
        ";
            // line 16
            $context["i"] = 0;
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articulos"] ?? $this->getContext($context, "articulos")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["articulo"]) {
                // line 18
                echo "            ";
                if ((($this->getAttribute($context["track"], "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute($context["articulo"], "tracks", array()), 0, array(), "array"), "id", array())) && (($context["i"] ?? $this->getContext($context, "i")) < 2))) {
                    // line 19
                    echo "                ";
                    $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
                    // line 20
                    echo "                <article class=\"articulo\">
                <div class=\"separator\"></div>
                    ";
                    // line 22
                    if ((twig_date_format_filter($this->env, $this->getAttribute($context["articulo"], "publicacion", array()), "d") == "01")) {
                        // line 23
                        echo "                        1
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 24
$context["articulo"], "publicacion", array()), "d") == "02")) {
                        // line 25
                        echo "                        2
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 26
$context["articulo"], "publicacion", array()), "d") == "03")) {
                        // line 27
                        echo "                        3
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 28
$context["articulo"], "publicacion", array()), "d") == "04")) {
                        // line 29
                        echo "                        4
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 30
$context["articulo"], "publicacion", array()), "d") == "05")) {
                        // line 31
                        echo "                        5
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 32
$context["articulo"], "publicacion", array()), "d") == "06")) {
                        // line 33
                        echo "                        6
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 34
$context["articulo"], "publicacion", array()), "d") == "07")) {
                        // line 35
                        echo "                        7
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 36
$context["articulo"], "publicacion", array()), "d") == "08")) {
                        // line 37
                        echo "                        8
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 38
$context["articulo"], "publicacion", array()), "d") == "09")) {
                        // line 39
                        echo "                        9
                    ";
                    } else {
                        // line 41
                        echo "                        ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["articulo"], "publicacion", array()), "d"), "html", null, true);
                        echo "
                    ";
                    }
                    // line 43
                    echo "
                    de 

                    ";
                    // line 46
                    if ((twig_date_format_filter($this->env, $this->getAttribute($context["articulo"], "publicacion", array()), "m") == "01")) {
                        // line 47
                        echo "                        enero
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 48
$context["articulo"], "publicacion", array()), "m") == "02")) {
                        // line 49
                        echo "                        febrero
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 50
$context["articulo"], "publicacion", array()), "m") == "03")) {
                        // line 51
                        echo "                        marzo
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 52
$context["articulo"], "publicacion", array()), "m") == "04")) {
                        // line 53
                        echo "                        abril
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 54
$context["articulo"], "publicacion", array()), "m") == "05")) {
                        // line 55
                        echo "                        mayo
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 56
$context["articulo"], "publicacion", array()), "m") == "06")) {
                        // line 57
                        echo "                        junio
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 58
$context["articulo"], "publicacion", array()), "m") == "07")) {
                        // line 59
                        echo "                        julio
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 60
$context["articulo"], "publicacion", array()), "m") == "08")) {
                        // line 61
                        echo "                        agosto
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 62
$context["articulo"], "publicacion", array()), "m") == "09")) {
                        // line 63
                        echo "                        septiembre
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 64
$context["articulo"], "publicacion", array()), "m") == "10")) {
                        // line 65
                        echo "                        octubre
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 66
$context["articulo"], "publicacion", array()), "m") == "11")) {
                        // line 67
                        echo "                        noviembre
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 68
$context["articulo"], "publicacion", array()), "m") == "12")) {
                        // line 69
                        echo "                        diciembre
                    ";
                    }
                    // line 71
                    echo "                    
                     de ";
                    // line 72
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["articulo"], "publicacion", array()), "Y"), "html", null, true);
                    echo "</p>
                    <header>
                        <h2><a href=\"";
                    // line 74
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_show", array("id" => $this->getAttribute($context["articulo"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["articulo"], "titulo", array()), "html", null, true);
                    echo "</a></h2>
                    </header>

                    <div class=\"snippet\">
                        <p>";
                    // line 78
                    echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute($context["articulo"], "cuerpo", array()), 0, 400) . "..."), "html", null, true);
                    echo "</p>
                        <p class=\"continue\"><a href=\"";
                    // line 79
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_show", array("id" => $this->getAttribute($context["articulo"], "id", array()))), "html", null, true);
                    echo "\">Seguir leyendo...</a></p>
                    </div>

                    <footer class=\"meta\">
                        <p>Comentarios: ";
                    // line 83
                    echo twig_escape_filter($this->env, $this->getAttribute($context["articulo"], "numberofcomments", array()), "html", null, true);
                    echo "</p>
                    </footer>
                </article>
            ";
                }
                // line 87
                echo "        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 88
                echo "            <p>No hay entradas en este blog</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articulo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 91
            echo "        <p>aaaaa</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['track'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_7db219b704e3f6d3ee8ba460022eb396858f51e432a057b3097a077c8f52f5de->leave($__internal_7db219b704e3f6d3ee8ba460022eb396858f51e432a057b3097a077c8f52f5de_prof);

    }

    // line 95
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_3602551836a8b05cfa623dbea4f31ad7a6b269a489eda26f9039ce8da047975e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3602551836a8b05cfa623dbea4f31ad7a6b269a489eda26f9039ce8da047975e->enter($__internal_3602551836a8b05cfa623dbea4f31ad7a6b269a489eda26f9039ce8da047975e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 96
        echo "    <p class=\"continue\"><a href=\"/contact\">Contacto</a></p>
";
        
        $__internal_3602551836a8b05cfa623dbea4f31ad7a6b269a489eda26f9039ce8da047975e->leave($__internal_3602551836a8b05cfa623dbea4f31ad7a6b269a489eda26f9039ce8da047975e_prof);

    }

    public function getTemplateName()
    {
        return "CongresoCongresoBundle:Congreso:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 96,  286 => 95,  274 => 91,  269 => 90,  262 => 88,  257 => 87,  250 => 83,  243 => 79,  239 => 78,  230 => 74,  225 => 72,  222 => 71,  218 => 69,  216 => 68,  213 => 67,  211 => 66,  208 => 65,  206 => 64,  203 => 63,  201 => 62,  198 => 61,  196 => 60,  193 => 59,  191 => 58,  188 => 57,  186 => 56,  183 => 55,  181 => 54,  178 => 53,  176 => 52,  173 => 51,  171 => 50,  168 => 49,  166 => 48,  163 => 47,  161 => 46,  156 => 43,  150 => 41,  146 => 39,  144 => 38,  141 => 37,  139 => 36,  136 => 35,  134 => 34,  131 => 33,  129 => 32,  126 => 31,  124 => 30,  121 => 29,  119 => 28,  116 => 27,  114 => 26,  111 => 25,  109 => 24,  106 => 23,  104 => 22,  100 => 20,  97 => 19,  94 => 18,  88 => 17,  86 => 16,  79 => 15,  73 => 14,  67 => 13,  55 => 6,  49 => 5,  37 => 3,  11 => 2,);
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

{% block navigation %}
    <nav>
        <ul class=\"navigation\">
            <li><a href=\"\">Entrar</a></li>
        </ul>
    </nav>
{% endblock %}

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
    <p class=\"continue\"><a href=\"/contact\">Contacto</a></p>
{% endblock %}", "CongresoCongresoBundle:Congreso:list.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Congreso/list.html.twig");
    }
}
