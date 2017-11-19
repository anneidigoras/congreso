<?php

/* CongresoCongresoBundle:Cientifico:artcen.html.twig */
class __TwigTemplate_73bd86276026728832f0e83f43a3cb97e9b5123b7036b05764b434d5ccf00c43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layout.html.twig", "CongresoCongresoBundle:Cientifico:artcen.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'sidebar1' => array($this, 'block_sidebar1'),
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
        echo "Artículos de ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? null), "nombre", array()), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articulos"] ?? null));
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
    }

    // line 78
    public function block_sidebar1($context, array $blocks = array())
    {
        // line 79
        echo "<div class=\"cientificos\">
<p>Estos son los artículos que ha escrito ";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? null), "nombre", array()), "html", null, true);
        echo ".</p>
<p>";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? null), "nombre", array()), "html", null, true);
        echo " es un respetado profesional en los siguientes campos: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? null), "especialidad", array()), "html", null, true);
        echo "</p>


<p>Nació el 
";
        // line 85
        if ((twig_date_format_filter($this->env, $this->getAttribute(($context["cientifico"] ?? null), "nacimiento", array()), "d") == "01")) {
            // line 86
            echo "    1
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 87
($context["cientifico"] ?? null), "nacimiento", array()), "d") == "02")) {
            // line 88
            echo "    2
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 89
($context["cientifico"] ?? null), "nacimiento", array()), "d") == "03")) {
            // line 90
            echo "    3
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 91
($context["cientifico"] ?? null), "nacimiento", array()), "d") == "04")) {
            // line 92
            echo "    4
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 93
($context["cientifico"] ?? null), "nacimiento", array()), "d") == "05")) {
            // line 94
            echo "    5
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 95
($context["cientifico"] ?? null), "nacimiento", array()), "d") == "06")) {
            // line 96
            echo "    6
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 97
($context["cientifico"] ?? null), "nacimiento", array()), "d") == "07")) {
            // line 98
            echo "    7
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 99
($context["cientifico"] ?? null), "nacimiento", array()), "d") == "08")) {
            // line 100
            echo "    8
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 101
($context["cientifico"] ?? null), "nacimiento", array()), "d") == "09")) {
            // line 102
            echo "    9
";
        } else {
            // line 104
            echo "    ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["cientifico"] ?? null), "nacimiento", array()), "d"), "html", null, true);
            echo "
";
        }
        // line 106
        echo "
 de 

";
        // line 109
        if ((twig_date_format_filter($this->env, $this->getAttribute(($context["cientifico"] ?? null), "nacimiento", array()), "m") == "01")) {
            // line 110
            echo "    enero
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 111
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "02")) {
            // line 112
            echo "    febrero
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 113
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "03")) {
            // line 114
            echo "    marzo
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 115
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "04")) {
            // line 116
            echo "    abril
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 117
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "05")) {
            // line 118
            echo "    mayo
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 119
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "06")) {
            // line 120
            echo "    junio
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 121
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "07")) {
            // line 122
            echo "    julio
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 123
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "08")) {
            // line 124
            echo "    agosto
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 125
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "09")) {
            // line 126
            echo "    septiembre
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 127
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "10")) {
            // line 128
            echo "    octubre
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 129
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "11")) {
            // line 130
            echo "    noviembre
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 131
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "12")) {
            // line 132
            echo "    diciembre
";
        }
        // line 134
        echo "
 de ";
        // line 135
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["cientifico"] ?? null), "nacimiento", array()), "Y"), "html", null, true);
        echo "</p>



<p> Si quiere más información sobre ";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? null), "nombre", array()), "html", null, true);
        echo ", pulse <a target=\"_blank\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? null), "info", array()), "html", null, true);
        echo "\">aquí</a>.</p>

</div>
<div class=\"separator\"></div>
<p class=\"continue\"><a href=\"/\">Volver a la Home</a></p>
<p class=\"continue\"><a href=\"/contact\">Contacto</a></p>
";
    }

    public function getTemplateName()
    {
        return "CongresoCongresoBundle:Cientifico:artcen.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 139,  354 => 135,  351 => 134,  347 => 132,  345 => 131,  342 => 130,  340 => 129,  337 => 128,  335 => 127,  332 => 126,  330 => 125,  327 => 124,  325 => 123,  322 => 122,  320 => 121,  317 => 120,  315 => 119,  312 => 118,  310 => 117,  307 => 116,  305 => 115,  302 => 114,  300 => 113,  297 => 112,  295 => 111,  292 => 110,  290 => 109,  285 => 106,  279 => 104,  275 => 102,  273 => 101,  270 => 100,  268 => 99,  265 => 98,  263 => 97,  260 => 96,  258 => 95,  255 => 94,  253 => 93,  250 => 92,  248 => 91,  245 => 90,  243 => 89,  240 => 88,  238 => 87,  235 => 86,  233 => 85,  224 => 81,  220 => 80,  217 => 79,  214 => 78,  205 => 74,  196 => 70,  189 => 66,  185 => 65,  176 => 61,  171 => 59,  168 => 58,  164 => 56,  162 => 55,  159 => 54,  157 => 53,  154 => 52,  152 => 51,  149 => 50,  147 => 49,  144 => 48,  142 => 47,  139 => 46,  137 => 45,  134 => 44,  132 => 43,  129 => 42,  127 => 41,  124 => 40,  122 => 39,  119 => 38,  117 => 37,  114 => 36,  112 => 35,  109 => 34,  107 => 33,  102 => 30,  96 => 28,  92 => 26,  90 => 25,  87 => 24,  85 => 23,  82 => 22,  80 => 21,  77 => 20,  75 => 19,  72 => 18,  70 => 17,  67 => 16,  65 => 15,  62 => 14,  60 => 13,  57 => 12,  55 => 11,  52 => 10,  50 => 9,  46 => 7,  40 => 6,  37 => 5,  30 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "CongresoCongresoBundle:Cientifico:artcen.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Cientifico/artcen.html.twig");
    }
}
