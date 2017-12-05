<?php

/* @CongresoCongreso/Congreso/list.html.twig */
class __TwigTemplate_2de6597a2a054abc86c1366c1ec15eede14687cf0617eede32366157043879d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layout.html.twig", "@CongresoCongreso/Congreso/list.html.twig", 2);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Lista de Artículos";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tracks"] ?? null));
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
            $context['_seq'] = twig_ensure_traversable(($context["articulos"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["articulo"]) {
                // line 10
                echo "            ";
                if ((($this->getAttribute($context["track"], "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute($context["articulo"], "tracks", array()), 0, array(), "array"), "id", array())) && (($context["i"] ?? null) < 2))) {
                    // line 11
                    echo "                ";
                    $context["i"] = (($context["i"] ?? null) + 1);
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
    }

    // line 87
    public function block_sidebar($context, array $blocks = array())
    {
        // line 88
        echo "    <p class=\"continue\"><a href=\"/contact\">Contacto</a></p>
";
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
        return array (  252 => 88,  249 => 87,  240 => 83,  235 => 82,  228 => 80,  223 => 79,  216 => 75,  209 => 71,  205 => 70,  196 => 66,  191 => 64,  188 => 63,  184 => 61,  182 => 60,  179 => 59,  177 => 58,  174 => 57,  172 => 56,  169 => 55,  167 => 54,  164 => 53,  162 => 52,  159 => 51,  157 => 50,  154 => 49,  152 => 48,  149 => 47,  147 => 46,  144 => 45,  142 => 44,  139 => 43,  137 => 42,  134 => 41,  132 => 40,  129 => 39,  127 => 38,  122 => 35,  116 => 33,  112 => 31,  110 => 30,  107 => 29,  105 => 28,  102 => 27,  100 => 26,  97 => 25,  95 => 24,  92 => 23,  90 => 22,  87 => 21,  85 => 20,  82 => 19,  80 => 18,  77 => 17,  75 => 16,  72 => 15,  70 => 14,  66 => 12,  63 => 11,  60 => 10,  54 => 9,  52 => 8,  45 => 7,  39 => 6,  36 => 5,  30 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@CongresoCongreso/Congreso/list.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Congreso\\list.html.twig");
    }
}
