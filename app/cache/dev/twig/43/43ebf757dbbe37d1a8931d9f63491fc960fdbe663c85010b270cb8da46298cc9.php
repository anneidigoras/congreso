<?php

/* CongresoCongresoBundle:Congreso:list.html.twig */
class __TwigTemplate_74d8776bc67347e494d134869ab8190d29df881ea7dc208d45a743167c6df076 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layout.html.twig", "CongresoCongresoBundle:Congreso:list.html.twig", 2);
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
        $__internal_d7cab2a9dbaf241153e30db965718110cbcb90fcf591f8b3cca5146e7ed31586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7cab2a9dbaf241153e30db965718110cbcb90fcf591f8b3cca5146e7ed31586->enter($__internal_d7cab2a9dbaf241153e30db965718110cbcb90fcf591f8b3cca5146e7ed31586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7cab2a9dbaf241153e30db965718110cbcb90fcf591f8b3cca5146e7ed31586->leave($__internal_d7cab2a9dbaf241153e30db965718110cbcb90fcf591f8b3cca5146e7ed31586_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3ddafdc8d4e3456c8fd2210c2f41efb748cf197602ce589bebe984d566c4279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ddafdc8d4e3456c8fd2210c2f41efb748cf197602ce589bebe984d566c4279->enter($__internal_a3ddafdc8d4e3456c8fd2210c2f41efb748cf197602ce589bebe984d566c4279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Artículos";
        
        $__internal_a3ddafdc8d4e3456c8fd2210c2f41efb748cf197602ce589bebe984d566c4279->leave($__internal_a3ddafdc8d4e3456c8fd2210c2f41efb748cf197602ce589bebe984d566c4279_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc7917137c425b6411c143241ff9ae1033a53a4d142c3c2a986c125fd3af0b0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc7917137c425b6411c143241ff9ae1033a53a4d142c3c2a986c125fd3af0b0a->enter($__internal_bc7917137c425b6411c143241ff9ae1033a53a4d142c3c2a986c125fd3af0b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tracks"] ?? $this->getContext($context, "tracks")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
            // line 7
            echo "        <h1><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_track_arttrac", array("id" => $this->getAttribute($context["track"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "campo", array()), "html", null, true);
            echo "</a></h1>
        ";
            // line 8
            $context["i"] = 0;
            // line 9
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articulos"] ?? $this->getContext($context, "articulos")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["articulo"]) {
                // line 10
                echo "            ";
                if ((($this->getAttribute($context["track"], "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute($context["articulo"], "tracks", array()), 0, array(), "array"), "id", array())) && (($context["i"] ?? $this->getContext($context, "i")) < 2))) {
                    // line 11
                    echo "                ";
                    $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
                    // line 12
                    echo "                <article class=\"articulo\">
                <div class=\"separator\"></div>
                    ";
                    // line 14
                    if ((twig_date_format_filter($this->env, $this->getAttribute($context["articulo"], "publicacion", array()), "d") == "01")) {
                        // line 15
                        echo "                        1
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 16
$context["articulo"], "publicacion", array()), "d") == "02")) {
                        // line 17
                        echo "                        2
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 18
$context["articulo"], "publicacion", array()), "d") == "03")) {
                        // line 19
                        echo "                        3
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 20
$context["articulo"], "publicacion", array()), "d") == "04")) {
                        // line 21
                        echo "                        4
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 22
$context["articulo"], "publicacion", array()), "d") == "05")) {
                        // line 23
                        echo "                        5
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 24
$context["articulo"], "publicacion", array()), "d") == "06")) {
                        // line 25
                        echo "                        6
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 26
$context["articulo"], "publicacion", array()), "d") == "07")) {
                        // line 27
                        echo "                        7
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 28
$context["articulo"], "publicacion", array()), "d") == "08")) {
                        // line 29
                        echo "                        8
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 30
$context["articulo"], "publicacion", array()), "d") == "09")) {
                        // line 31
                        echo "                        9
                    ";
                    } else {
                        // line 33
                        echo "                        ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["articulo"], "publicacion", array()), "d"), "html", null, true);
                        echo "
                    ";
                    }
                    // line 35
                    echo "
                    de 

                    ";
                    // line 38
                    if ((twig_date_format_filter($this->env, $this->getAttribute($context["articulo"], "publicacion", array()), "m") == "01")) {
                        // line 39
                        echo "                        enero
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 40
$context["articulo"], "publicacion", array()), "m") == "02")) {
                        // line 41
                        echo "                        febrero
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 42
$context["articulo"], "publicacion", array()), "m") == "03")) {
                        // line 43
                        echo "                        marzo
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 44
$context["articulo"], "publicacion", array()), "m") == "04")) {
                        // line 45
                        echo "                        abril
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 46
$context["articulo"], "publicacion", array()), "m") == "05")) {
                        // line 47
                        echo "                        mayo
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 48
$context["articulo"], "publicacion", array()), "m") == "06")) {
                        // line 49
                        echo "                        junio
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 50
$context["articulo"], "publicacion", array()), "m") == "07")) {
                        // line 51
                        echo "                        julio
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 52
$context["articulo"], "publicacion", array()), "m") == "08")) {
                        // line 53
                        echo "                        agosto
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 54
$context["articulo"], "publicacion", array()), "m") == "09")) {
                        // line 55
                        echo "                        septiembre
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 56
$context["articulo"], "publicacion", array()), "m") == "10")) {
                        // line 57
                        echo "                        octubre
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 58
$context["articulo"], "publicacion", array()), "m") == "11")) {
                        // line 59
                        echo "                        noviembre
                    ";
                    } elseif ((twig_date_format_filter($this->env, $this->getAttribute(                    // line 60
$context["articulo"], "publicacion", array()), "m") == "12")) {
                        // line 61
                        echo "                        diciembre
                    ";
                    }
                    // line 63
                    echo "                    
                     de ";
                    // line 64
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["articulo"], "publicacion", array()), "Y"), "html", null, true);
                    echo "</p>
                    <header>
                        <h2><a href=\"";
                    // line 66
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_show", array("id" => $this->getAttribute($context["articulo"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["articulo"], "titulo", array()), "html", null, true);
                    echo "</a></h2>
                    </header>

                    <div class=\"snippet\">
                        <p>";
                    // line 70
                    echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute($context["articulo"], "cuerpo", array()), 0, 400) . "..."), "html", null, true);
                    echo "</p>
                        <p class=\"continue\"><a href=\"";
                    // line 71
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_show", array("id" => $this->getAttribute($context["articulo"], "id", array()))), "html", null, true);
                    echo "\">Seguir leyendo...</a></p>
                    </div>

                    <footer class=\"meta\">
                        <p>Comentarios: ";
                    // line 75
                    echo twig_escape_filter($this->env, $this->getAttribute($context["articulo"], "numberofcomments", array()), "html", null, true);
                    echo "</p>
                    </footer>
                </article>
            ";
                }
                // line 79
                echo "        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 80
                echo "            <p>No hay entradas en este blog</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articulo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 83
            echo "        <p>aaaaa</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['track'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_bc7917137c425b6411c143241ff9ae1033a53a4d142c3c2a986c125fd3af0b0a->leave($__internal_bc7917137c425b6411c143241ff9ae1033a53a4d142c3c2a986c125fd3af0b0a_prof);

    }

    // line 87
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_f818d1d487a86d5918fba4395bc3b928c90381d0132b4bff4465267dbe73eeb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f818d1d487a86d5918fba4395bc3b928c90381d0132b4bff4465267dbe73eeb3->enter($__internal_f818d1d487a86d5918fba4395bc3b928c90381d0132b4bff4465267dbe73eeb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 88
        echo "    <p class=\"continue\"><a href=\"/contact\">Contacto</a></p>
";
        
        $__internal_f818d1d487a86d5918fba4395bc3b928c90381d0132b4bff4465267dbe73eeb3->leave($__internal_f818d1d487a86d5918fba4395bc3b928c90381d0132b4bff4465267dbe73eeb3_prof);

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
        return array (  273 => 88,  267 => 87,  255 => 83,  250 => 82,  243 => 80,  238 => 79,  231 => 75,  224 => 71,  220 => 70,  211 => 66,  206 => 64,  203 => 63,  199 => 61,  197 => 60,  194 => 59,  192 => 58,  189 => 57,  187 => 56,  184 => 55,  182 => 54,  179 => 53,  177 => 52,  174 => 51,  172 => 50,  169 => 49,  167 => 48,  164 => 47,  162 => 46,  159 => 45,  157 => 44,  154 => 43,  152 => 42,  149 => 41,  147 => 40,  144 => 39,  142 => 38,  137 => 35,  131 => 33,  127 => 31,  125 => 30,  122 => 29,  120 => 28,  117 => 27,  115 => 26,  112 => 25,  110 => 24,  107 => 23,  105 => 22,  102 => 21,  100 => 20,  97 => 19,  95 => 18,  92 => 17,  90 => 16,  87 => 15,  85 => 14,  81 => 12,  78 => 11,  75 => 10,  69 => 9,  67 => 8,  60 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 2,);
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
