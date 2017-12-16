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
        $__internal_3518994debc371106afedf778619d22a86766aca454997c76675a4dd604b1196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3518994debc371106afedf778619d22a86766aca454997c76675a4dd604b1196->enter($__internal_3518994debc371106afedf778619d22a86766aca454997c76675a4dd604b1196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3518994debc371106afedf778619d22a86766aca454997c76675a4dd604b1196->leave($__internal_3518994debc371106afedf778619d22a86766aca454997c76675a4dd604b1196_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d5b102b2156c6de94fb6592fd803480fe2b8f8266e6379c3d86ff8a188216605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5b102b2156c6de94fb6592fd803480fe2b8f8266e6379c3d86ff8a188216605->enter($__internal_d5b102b2156c6de94fb6592fd803480fe2b8f8266e6379c3d86ff8a188216605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_d5b102b2156c6de94fb6592fd803480fe2b8f8266e6379c3d86ff8a188216605->leave($__internal_d5b102b2156c6de94fb6592fd803480fe2b8f8266e6379c3d86ff8a188216605_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c836b11e7fe4eddf97559da6ba99755be2921f0839e84a180150142d20b5a42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c836b11e7fe4eddf97559da6ba99755be2921f0839e84a180150142d20b5a42->enter($__internal_0c836b11e7fe4eddf97559da6ba99755be2921f0839e84a180150142d20b5a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "Congreso Científico
";
        
        $__internal_0c836b11e7fe4eddf97559da6ba99755be2921f0839e84a180150142d20b5a42->leave($__internal_0c836b11e7fe4eddf97559da6ba99755be2921f0839e84a180150142d20b5a42_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfc779bfb46b5658292bb2d8685e7f7a806ea21142716392ae333b93458cadee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfc779bfb46b5658292bb2d8685e7f7a806ea21142716392ae333b93458cadee->enter($__internal_dfc779bfb46b5658292bb2d8685e7f7a806ea21142716392ae333b93458cadee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dfc779bfb46b5658292bb2d8685e7f7a806ea21142716392ae333b93458cadee->leave($__internal_dfc779bfb46b5658292bb2d8685e7f7a806ea21142716392ae333b93458cadee_prof);

    }

    // line 62
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_323ebf33b062f7ed1243657c5325e201bd0d060ce9660cff55fcc60935737b02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_323ebf33b062f7ed1243657c5325e201bd0d060ce9660cff55fcc60935737b02->enter($__internal_323ebf33b062f7ed1243657c5325e201bd0d060ce9660cff55fcc60935737b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

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
        
        $__internal_323ebf33b062f7ed1243657c5325e201bd0d060ce9660cff55fcc60935737b02->leave($__internal_323ebf33b062f7ed1243657c5325e201bd0d060ce9660cff55fcc60935737b02_prof);

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

", "CongresoCongresoBundle:Congreso:list.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Congreso/list.html.twig");
    }
}
