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
        echo "Articulos de ";
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
             ";
            // line 8
            if ((twig_date_format_filter($this->env, $this->getAttribute($context["articulo"], "publicacion", array()), "d") == "01")) {
                // line 9
                echo "                1
            ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 10
$context["articulo"], "publicacion", array()), "d") == "02")) {
                // line 11
                echo "                2
            ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 12
$context["articulo"], "publicacion", array()), "d") == "03")) {
                // line 13
                echo "                3
            ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 14
$context["articulo"], "publicacion", array()), "d") == "04")) {
                // line 15
                echo "                4
            ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 16
$context["articulo"], "publicacion", array()), "d") == "05")) {
                // line 17
                echo "                5
            ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 18
$context["articulo"], "publicacion", array()), "d") == "06")) {
                // line 19
                echo "                6
            ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 20
$context["articulo"], "publicacion", array()), "d") == "07")) {
                // line 21
                echo "                7
            ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 22
$context["articulo"], "publicacion", array()), "d") == "08")) {
                // line 23
                echo "                8
            ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 24
$context["articulo"], "publicacion", array()), "d") == "09")) {
                // line 25
                echo "                9
            ";
            } else {
                // line 27
                echo "                ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["articulo"], "publicacion", array()), "d"), "html", null, true);
                echo "
            ";
            }
            // line 29
            echo "
            de 

            ";
            // line 32
            if ((twig_date_format_filter($this->env, $this->getAttribute($context["articulo"], "publicacion", array()), "m") == "01")) {
                // line 33
                echo "                enero
            ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 34
$context["articulo"], "publicacion", array()), "m") == "02")) {
                // line 35
                echo "                febrero
            ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 36
$context["articulo"], "publicacion", array()), "m") == "03")) {
                // line 37
                echo "                marzo
            ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 38
$context["articulo"], "publicacion", array()), "m") == "04")) {
                // line 39
                echo "                abril
            ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 40
$context["articulo"], "publicacion", array()), "m") == "05")) {
                // line 41
                echo "                mayo
            ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 42
$context["articulo"], "publicacion", array()), "m") == "06")) {
                // line 43
                echo "                junio
            ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 44
$context["articulo"], "publicacion", array()), "m") == "07")) {
                // line 45
                echo "                julio
            ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 46
$context["articulo"], "publicacion", array()), "m") == "08")) {
                // line 47
                echo "                agosto
            ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 48
$context["articulo"], "publicacion", array()), "m") == "09")) {
                // line 49
                echo "                septiembre
            ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 50
$context["articulo"], "publicacion", array()), "m") == "10")) {
                // line 51
                echo "                octubre
            ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 52
$context["articulo"], "publicacion", array()), "m") == "11")) {
                // line 53
                echo "                noviembre
            ";
            } elseif ((twig_date_format_filter($this->env, $this->getAttribute(            // line 54
$context["articulo"], "publicacion", array()), "m") == "12")) {
                // line 55
                echo "                diciembre
            ";
            }
            // line 57
            echo "            
             de ";
            // line 58
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["articulo"], "publicacion", array()), "Y"), "html", null, true);
            echo "</p>
            <header>
                <h2><a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_show", array("id" => $this->getAttribute($context["articulo"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["articulo"], "titulo", array()), "html", null, true);
            echo "</a></h2>
            </header>

            <div class=\"snippet\">
                <p>";
            // line 64
            echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute($context["articulo"], "cuerpo", array()), 0, 400) . "..."), "html", null, true);
            echo "</p>
                <p class=\"continue\"><a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_show", array("id" => $this->getAttribute($context["articulo"], "id", array()))), "html", null, true);
            echo "\">Seguir leyendo...</a></p>
            </div>

            <footer class=\"meta\">
                <p>Comentarios: ";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["articulo"], "numberofcomments", array()), "html", null, true);
            echo "</p>
            </footer>
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 73
            echo "        <p>No hay entradas en este blog</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 77
    public function block_sidebar1($context, array $blocks = array())
    {
        // line 78
        echo "<div class=\"cientificos\">
<p>Estos son los artículos que ha escrito ";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? null), "nombre", array()), "html", null, true);
        echo ".</p>
<p>";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? null), "nombre", array()), "html", null, true);
        echo " es un respetado profesional en los siguientes campos: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? null), "especialidad", array()), "html", null, true);
        echo "</p>


<p>Nació el 
";
        // line 84
        if ((twig_date_format_filter($this->env, $this->getAttribute(($context["cientifico"] ?? null), "nacimiento", array()), "d") == "01")) {
            // line 85
            echo "    1
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 86
($context["cientifico"] ?? null), "nacimiento", array()), "d") == "02")) {
            // line 87
            echo "    2
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 88
($context["cientifico"] ?? null), "nacimiento", array()), "d") == "03")) {
            // line 89
            echo "    3
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 90
($context["cientifico"] ?? null), "nacimiento", array()), "d") == "04")) {
            // line 91
            echo "    4
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 92
($context["cientifico"] ?? null), "nacimiento", array()), "d") == "05")) {
            // line 93
            echo "    5
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 94
($context["cientifico"] ?? null), "nacimiento", array()), "d") == "06")) {
            // line 95
            echo "    6
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 96
($context["cientifico"] ?? null), "nacimiento", array()), "d") == "07")) {
            // line 97
            echo "    7
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 98
($context["cientifico"] ?? null), "nacimiento", array()), "d") == "08")) {
            // line 99
            echo "    8
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 100
($context["cientifico"] ?? null), "nacimiento", array()), "d") == "09")) {
            // line 101
            echo "    9
";
        } else {
            // line 103
            echo "    ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["cientifico"] ?? null), "nacimiento", array()), "d"), "html", null, true);
            echo "
";
        }
        // line 105
        echo "
 de 

";
        // line 108
        if ((twig_date_format_filter($this->env, $this->getAttribute(($context["cientifico"] ?? null), "nacimiento", array()), "m") == "01")) {
            // line 109
            echo "    enero
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 110
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "02")) {
            // line 111
            echo "    febrero
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 112
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "03")) {
            // line 113
            echo "    marzo
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 114
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "04")) {
            // line 115
            echo "    abril
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 116
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "05")) {
            // line 117
            echo "    mayo
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 118
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "06")) {
            // line 119
            echo "    junio
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 120
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "07")) {
            // line 121
            echo "    julio
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 122
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "08")) {
            // line 123
            echo "    agosto
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 124
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "09")) {
            // line 125
            echo "    septiembre
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 126
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "10")) {
            // line 127
            echo "    octubre
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 128
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "11")) {
            // line 129
            echo "    noviembre
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 130
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "12")) {
            // line 131
            echo "    diciembre
";
        }
        // line 133
        echo "
 de ";
        // line 134
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["cientifico"] ?? null), "nacimiento", array()), "Y"), "html", null, true);
        echo "</p>



<p> Si quiere más información sobre ";
        // line 138
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
        return array (  360 => 138,  353 => 134,  350 => 133,  346 => 131,  344 => 130,  341 => 129,  339 => 128,  336 => 127,  334 => 126,  331 => 125,  329 => 124,  326 => 123,  324 => 122,  321 => 121,  319 => 120,  316 => 119,  314 => 118,  311 => 117,  309 => 116,  306 => 115,  304 => 114,  301 => 113,  299 => 112,  296 => 111,  294 => 110,  291 => 109,  289 => 108,  284 => 105,  278 => 103,  274 => 101,  272 => 100,  269 => 99,  267 => 98,  264 => 97,  262 => 96,  259 => 95,  257 => 94,  254 => 93,  252 => 92,  249 => 91,  247 => 90,  244 => 89,  242 => 88,  239 => 87,  237 => 86,  234 => 85,  232 => 84,  223 => 80,  219 => 79,  216 => 78,  213 => 77,  204 => 73,  195 => 69,  188 => 65,  184 => 64,  175 => 60,  170 => 58,  167 => 57,  163 => 55,  161 => 54,  158 => 53,  156 => 52,  153 => 51,  151 => 50,  148 => 49,  146 => 48,  143 => 47,  141 => 46,  138 => 45,  136 => 44,  133 => 43,  131 => 42,  128 => 41,  126 => 40,  123 => 39,  121 => 38,  118 => 37,  116 => 36,  113 => 35,  111 => 34,  108 => 33,  106 => 32,  101 => 29,  95 => 27,  91 => 25,  89 => 24,  86 => 23,  84 => 22,  81 => 21,  79 => 20,  76 => 19,  74 => 18,  71 => 17,  69 => 16,  66 => 15,  64 => 14,  61 => 13,  59 => 12,  56 => 11,  54 => 10,  51 => 9,  49 => 8,  46 => 7,  40 => 6,  37 => 5,  30 => 3,  11 => 2,);
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
