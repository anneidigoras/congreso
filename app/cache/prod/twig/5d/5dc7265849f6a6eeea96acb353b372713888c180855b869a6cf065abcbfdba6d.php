<?php

/* CongresoCongresoBundle:Congreso:list.html.twig */
class __TwigTemplate_1db91c8e52a91dd599a604327002b83b726eb7433d868228afcc0f9a7bf8c107 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
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
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        // line 15
        echo "Lista de Artículos
";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "    <div id=\"lista-ocultar\">
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tracks"] ?? null));
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
            $context['_seq'] = twig_ensure_traversable(($context["articulos"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["articulo"]) {
                // line 25
                echo "            ";
                if ((($this->getAttribute($context["track"], "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute($context["articulo"], "tracks", array()), 0, array(), "array"), "id", array())) && (($context["i"] ?? null) < 2))) {
                    // line 26
                    echo "                ";
                    $context["i"] = (($context["i"] ?? null) + 1);
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
    }

    // line 106
    public function block_sidebar($context, array $blocks = array())
    {
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
        return array (  290 => 107,  287 => 106,  282 => 103,  274 => 100,  267 => 97,  260 => 95,  255 => 94,  248 => 90,  241 => 86,  237 => 85,  228 => 81,  223 => 79,  220 => 78,  216 => 76,  214 => 75,  211 => 74,  209 => 73,  206 => 72,  204 => 71,  201 => 70,  199 => 69,  196 => 68,  194 => 67,  191 => 66,  189 => 65,  186 => 64,  184 => 63,  181 => 62,  179 => 61,  176 => 60,  174 => 59,  171 => 58,  169 => 57,  166 => 56,  164 => 55,  161 => 54,  159 => 53,  154 => 50,  148 => 48,  144 => 46,  142 => 45,  139 => 44,  137 => 43,  134 => 42,  132 => 41,  129 => 40,  127 => 39,  124 => 38,  122 => 37,  119 => 36,  117 => 35,  114 => 34,  112 => 33,  109 => 32,  107 => 31,  104 => 30,  102 => 29,  98 => 27,  95 => 26,  92 => 25,  86 => 24,  84 => 23,  76 => 21,  71 => 20,  68 => 19,  65 => 18,  60 => 15,  57 => 14,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  34 => 6,  31 => 5,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "CongresoCongresoBundle:Congreso:list.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Congreso/list.html.twig");
    }
}
