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
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        echo "Lista de Artículos";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tracks"] ?? null));
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
            $context['_seq'] = twig_ensure_traversable(($context["articulos"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["articulo"]) {
                // line 19
                echo "            ";
                if ((($this->getAttribute($context["track"], "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute($context["articulo"], "tracks", array()), 0, array(), "array"), "id", array())) && (($context["i"] ?? null) < 2))) {
                    // line 20
                    echo "                ";
                    $context["i"] = (($context["i"] ?? null) + 1);
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
    }

    // line 96
    public function block_sidebar($context, array $blocks = array())
    {
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
        return array (  271 => 97,  268 => 96,  259 => 92,  254 => 91,  247 => 89,  242 => 88,  235 => 84,  228 => 80,  224 => 79,  215 => 75,  210 => 73,  207 => 72,  203 => 70,  201 => 69,  198 => 68,  196 => 67,  193 => 66,  191 => 65,  188 => 64,  186 => 63,  183 => 62,  181 => 61,  178 => 60,  176 => 59,  173 => 58,  171 => 57,  168 => 56,  166 => 55,  163 => 54,  161 => 53,  158 => 52,  156 => 51,  153 => 50,  151 => 49,  148 => 48,  146 => 47,  141 => 44,  135 => 42,  131 => 40,  129 => 39,  126 => 38,  124 => 37,  121 => 36,  119 => 35,  116 => 34,  114 => 33,  111 => 32,  109 => 31,  106 => 30,  104 => 29,  101 => 28,  99 => 27,  96 => 26,  94 => 25,  91 => 24,  89 => 23,  85 => 21,  82 => 20,  79 => 19,  73 => 18,  71 => 17,  64 => 16,  58 => 15,  55 => 14,  49 => 12,  43 => 8,  39 => 7,  34 => 6,  31 => 5,  11 => 2,);
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
