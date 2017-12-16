<?php

/* CongresoCongresoBundle:Congreso:list.html.twig */
class __TwigTemplate_fd35766fe89e9b47dbbaefe4ac1828a0cee86aaaaae6ae690cbffddb9cd8164a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layout.html.twig", "CongresoCongresoBundle:Congreso:list.html.twig", 2);
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
        $__internal_61982f69635db1ee1143ba19a134c3ee0a4cbe8bb5be19a98fa305dcdae2f965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61982f69635db1ee1143ba19a134c3ee0a4cbe8bb5be19a98fa305dcdae2f965->enter($__internal_61982f69635db1ee1143ba19a134c3ee0a4cbe8bb5be19a98fa305dcdae2f965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61982f69635db1ee1143ba19a134c3ee0a4cbe8bb5be19a98fa305dcdae2f965->leave($__internal_61982f69635db1ee1143ba19a134c3ee0a4cbe8bb5be19a98fa305dcdae2f965_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_38516912fe6d68a0cfed06a714caeac2918c2a45332d3b5a65f7a73d1255b22e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38516912fe6d68a0cfed06a714caeac2918c2a45332d3b5a65f7a73d1255b22e->enter($__internal_38516912fe6d68a0cfed06a714caeac2918c2a45332d3b5a65f7a73d1255b22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_38516912fe6d68a0cfed06a714caeac2918c2a45332d3b5a65f7a73d1255b22e->leave($__internal_38516912fe6d68a0cfed06a714caeac2918c2a45332d3b5a65f7a73d1255b22e_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8a3baf4ff9b315898e41ba4e752fcddfdccb0a6ff7696d4a17f14542addf0f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a3baf4ff9b315898e41ba4e752fcddfdccb0a6ff7696d4a17f14542addf0f7->enter($__internal_c8a3baf4ff9b315898e41ba4e752fcddfdccb0a6ff7696d4a17f14542addf0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "Congreso Científico
";
        
        $__internal_c8a3baf4ff9b315898e41ba4e752fcddfdccb0a6ff7696d4a17f14542addf0f7->leave($__internal_c8a3baf4ff9b315898e41ba4e752fcddfdccb0a6ff7696d4a17f14542addf0f7_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9585fda8286220fd2857998ebaf850fa6ade76dddf4031b2a86dee4f0338af7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9585fda8286220fd2857998ebaf850fa6ade76dddf4031b2a86dee4f0338af7->enter($__internal_f9585fda8286220fd2857998ebaf850fa6ade76dddf4031b2a86dee4f0338af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "    <div id=\"lista-ocultar\">
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tracks"] ?? $this->getContext($context, "tracks")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
            // line 21
            echo "    <holi class=\"track\">
        <header>
            <h3><a id=\"nombre-temas\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_track_arttrac", array("id" => $this->getAttribute($context["track"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "campo", array()), "html", null, true);
            echo "</a></h3>            
        </header>
        <div id=\"lista-ocultar1\">
        ";
            // line 26
            $context["i"] = 0;
            // line 27
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articulos"] ?? $this->getContext($context, "articulos")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["articulo"]) {
                // line 28
                echo "            ";
                if ((($this->getAttribute($context["track"], "id", array()) == $this->getAttribute($this->getAttribute($context["articulo"], "track", array()), "id", array())) && (($context["i"] ?? $this->getContext($context, "i")) < 2))) {
                    // line 29
                    echo "                ";
                    $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
                    // line 30
                    echo "                <article class=\"articulo\">
                <div class=\"separator\"></div>
                    
                    <p>";
                    // line 33
                    echo twig_escape_filter($this->env, $this->getAttribute($context["articulo"], "ParsearFecha", array()), "html", null, true);
                    echo "</p>

                    <header>
                        <h2><a href=\"";
                    // line 36
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_show", array("id" => $this->getAttribute($context["articulo"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["articulo"], "titulo", array()), "html", null, true);
                    echo "</a></h2>
                    </header>

                    <div class=\"snippet\">
                        <p>";
                    // line 40
                    echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute($context["articulo"], "cuerpo", array()), 0, 400) . "..."), "html", null, true);
                    echo "</p>
                        <p class=\"continue\"><a href=\"";
                    // line 41
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_show", array("id" => $this->getAttribute($context["articulo"], "id", array()))), "html", null, true);
                    echo "\">Seguir leyendo...</a></p>
                    </div>

                    <footer class=\"meta\">
                        <p>Comentarios: ";
                    // line 45
                    echo twig_escape_filter($this->env, $this->getAttribute($context["articulo"], "numberofcomments", array()), "html", null, true);
                    echo "</p>
                    </footer>
                </article>
            ";
                }
                // line 49
                echo "        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 50
                echo "            <p>No hay entradas en este blog</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articulo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "
        </div>
    </holi>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 56
            echo "        <p>aaaaa</p>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['track'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "    </div>
";
        
        $__internal_f9585fda8286220fd2857998ebaf850fa6ade76dddf4031b2a86dee4f0338af7->leave($__internal_f9585fda8286220fd2857998ebaf850fa6ade76dddf4031b2a86dee4f0338af7_prof);

    }

    // line 62
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_7ef07a8b0c6998de29354e6a9293fcb67803741b8f3846d3bbf760fea1a31fb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ef07a8b0c6998de29354e6a9293fcb67803741b8f3846d3bbf760fea1a31fb4->enter($__internal_7ef07a8b0c6998de29354e6a9293fcb67803741b8f3846d3bbf760fea1a31fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 63
        echo "
    <p>¿Quieres saber la fecha y hora actuales?</p>    

    <button type=\"button\" id=\"boton-mostrar-ocultar\">Mostrar/Ocultar</button>

    <div id=\"mostrar-ocultar\" style=\"display: none;\">
        <p id=\"dia\">Jueves, 1 de enero de 1970</p>
        <p id=\"reloj\">00:00:00</p>
        <button type=\"button\" id=\"Actualizar\">Actualizar</button>
    </div>


    
";
        
        $__internal_7ef07a8b0c6998de29354e6a9293fcb67803741b8f3846d3bbf760fea1a31fb4->leave($__internal_7ef07a8b0c6998de29354e6a9293fcb67803741b8f3846d3bbf760fea1a31fb4_prof);

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
        return array (  203 => 63,  197 => 62,  189 => 59,  181 => 56,  173 => 52,  166 => 50,  161 => 49,  154 => 45,  147 => 41,  143 => 40,  134 => 36,  128 => 33,  123 => 30,  120 => 29,  117 => 28,  111 => 27,  109 => 26,  101 => 23,  97 => 21,  92 => 20,  89 => 19,  83 => 18,  75 => 15,  69 => 14,  60 => 10,  56 => 9,  52 => 8,  48 => 7,  43 => 6,  37 => 5,  11 => 2,);
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
Congreso Científico
{% endblock %}

{% block body %}
    <div id=\"lista-ocultar\">
    {% for track in tracks %}
    <holi class=\"track\">
        <header>
            <h3><a id=\"nombre-temas\" href=\"{{ path('congreso_track_arttrac', { 'id': track.id }) }}\">{{ track.campo }}</a></h3>            
        </header>
        <div id=\"lista-ocultar1\">
        {% set i = 0 %}
        {% for articulo in articulos %}
            {% if track.id==articulo.track.id and i<2 %}
                {% set i = i+1 %}
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
            {% endif %}
        {% else %}
            <p>No hay entradas en este blog</p>
        {% endfor %}

        </div>
    </holi>
    {% else %}
        <p>aaaaa</p>

    {% endfor %}
    </div>
{% endblock %}

{% block sidebar %}

    <p>¿Quieres saber la fecha y hora actuales?</p>    

    <button type=\"button\" id=\"boton-mostrar-ocultar\">Mostrar/Ocultar</button>

    <div id=\"mostrar-ocultar\" style=\"display: none;\">
        <p id=\"dia\">Jueves, 1 de enero de 1970</p>
        <p id=\"reloj\">00:00:00</p>
        <button type=\"button\" id=\"Actualizar\">Actualizar</button>
    </div>


    
{% endblock %}

", "CongresoCongresoBundle:Congreso:list.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Congreso\\list.html.twig");
    }
}
