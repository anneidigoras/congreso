<?php

/* @CongresoCongreso/Cientifico/artcen.html.twig */
class __TwigTemplate_28510780432b778bac29661349792eb04fb2cdbf5f9f7cf03776e4423fd4b5d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layout.html.twig", "@CongresoCongreso/Cientifico/artcen.html.twig", 2);
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
           <p>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["articulo"], "ParsearFecha", array()), "html", null, true);
            echo "</p>
            <header>
                <h2><a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_show", array("id" => $this->getAttribute($context["articulo"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["articulo"], "titulo", array()), "html", null, true);
            echo "</a></h2>
            </header>

            <div class=\"snippet\">
                <p>";
            // line 15
            echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute($context["articulo"], "cuerpo", array()), 0, 400) . "..."), "html", null, true);
            echo "</p>
                <p class=\"continue\"><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_show", array("id" => $this->getAttribute($context["articulo"], "id", array()))), "html", null, true);
            echo "\">Seguir leyendo...</a></p>
            </div>

            <footer class=\"meta\">
                <p>Comentarios: ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["articulo"], "numberofcomments", array()), "html", null, true);
            echo "</p>
            </footer>
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 24
            echo "        <p>No hay entradas en este blog</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 28
    public function block_sidebar1($context, array $blocks = array())
    {
        // line 29
        echo "<div class=\"cientificos\">
<p>Estos son los artículos que ha escrito ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? null), "nombre", array()), "html", null, true);
        echo ".</p>
<p>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? null), "nombre", array()), "html", null, true);
        echo " es un respetado profesional en los siguientes campos: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? null), "especialidad", array()), "html", null, true);
        echo "</p>


<p>Nació el 
";
        // line 35
        if ((twig_date_format_filter($this->env, $this->getAttribute(($context["cientifico"] ?? null), "nacimiento", array()), "d") == "01")) {
            // line 36
            echo "    1
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 37
($context["cientifico"] ?? null), "nacimiento", array()), "d") == "02")) {
            // line 38
            echo "    2
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 39
($context["cientifico"] ?? null), "nacimiento", array()), "d") == "03")) {
            // line 40
            echo "    3
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 41
($context["cientifico"] ?? null), "nacimiento", array()), "d") == "04")) {
            // line 42
            echo "    4
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 43
($context["cientifico"] ?? null), "nacimiento", array()), "d") == "05")) {
            // line 44
            echo "    5
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 45
($context["cientifico"] ?? null), "nacimiento", array()), "d") == "06")) {
            // line 46
            echo "    6
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 47
($context["cientifico"] ?? null), "nacimiento", array()), "d") == "07")) {
            // line 48
            echo "    7
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 49
($context["cientifico"] ?? null), "nacimiento", array()), "d") == "08")) {
            // line 50
            echo "    8
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 51
($context["cientifico"] ?? null), "nacimiento", array()), "d") == "09")) {
            // line 52
            echo "    9
";
        } else {
            // line 54
            echo "    ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["cientifico"] ?? null), "nacimiento", array()), "d"), "html", null, true);
            echo "
";
        }
        // line 56
        echo "
 de 

";
        // line 59
        if ((twig_date_format_filter($this->env, $this->getAttribute(($context["cientifico"] ?? null), "nacimiento", array()), "m") == "01")) {
            // line 60
            echo "    enero
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 61
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "02")) {
            // line 62
            echo "    febrero
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 63
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "03")) {
            // line 64
            echo "    marzo
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 65
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "04")) {
            // line 66
            echo "    abril
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 67
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "05")) {
            // line 68
            echo "    mayo
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 69
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "06")) {
            // line 70
            echo "    junio
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 71
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "07")) {
            // line 72
            echo "    julio
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 73
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "08")) {
            // line 74
            echo "    agosto
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 75
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "09")) {
            // line 76
            echo "    septiembre
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 77
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "10")) {
            // line 78
            echo "    octubre
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 79
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "11")) {
            // line 80
            echo "    noviembre
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 81
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "12")) {
            // line 82
            echo "    diciembre
";
        }
        // line 84
        echo "
 de ";
        // line 85
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["cientifico"] ?? null), "nacimiento", array()), "Y"), "html", null, true);
        echo "</p>



<p> Si quiere más información sobre ";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? null), "nombre", array()), "html", null, true);
        echo ", pulse <a target=\"_blank\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? null), "info", array()), "html", null, true);
        echo "\">aquí</a>.</p>

</div>
";
    }

    public function getTemplateName()
    {
        return "@CongresoCongreso/Cientifico/artcen.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 89,  233 => 85,  230 => 84,  226 => 82,  224 => 81,  221 => 80,  219 => 79,  216 => 78,  214 => 77,  211 => 76,  209 => 75,  206 => 74,  204 => 73,  201 => 72,  199 => 71,  196 => 70,  194 => 69,  191 => 68,  189 => 67,  186 => 66,  184 => 65,  181 => 64,  179 => 63,  176 => 62,  174 => 61,  171 => 60,  169 => 59,  164 => 56,  158 => 54,  154 => 52,  152 => 51,  149 => 50,  147 => 49,  144 => 48,  142 => 47,  139 => 46,  137 => 45,  134 => 44,  132 => 43,  129 => 42,  127 => 41,  124 => 40,  122 => 39,  119 => 38,  117 => 37,  114 => 36,  112 => 35,  103 => 31,  99 => 30,  96 => 29,  93 => 28,  84 => 24,  75 => 20,  68 => 16,  64 => 15,  55 => 11,  50 => 9,  46 => 7,  40 => 6,  37 => 5,  30 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@CongresoCongreso/Cientifico/artcen.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Cientifico\\artcen.html.twig");
    }
}
