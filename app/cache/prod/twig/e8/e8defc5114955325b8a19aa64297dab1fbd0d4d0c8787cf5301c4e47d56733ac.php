<?php

/* @CongresoCongreso/Cientifico/artcen.html.twig */
class __TwigTemplate_e7f40e68635f917427f799e9615bf1dbb39801aa053809c54c4b28bf26ad4a29 extends Twig_Template
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
            <div class=\"date\"><time datetime=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["articulo"], "publicacion", array()), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["articulo"], "publicacion", array()), "l, F j, Y"), "html", null, true);
            echo "</time></div>
            <header>
                <h2><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_show", array("id" => $this->getAttribute($context["articulo"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["articulo"], "titulo", array()), "html", null, true);
            echo "</a></h2>
            </header>

            <div class=\"snippet\">
                <p>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["articulo"], "cuerpo", array(0 => 200), "method"), "html", null, true);
            echo "</p>
                <p class=\"continue\"><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_show", array("id" => $this->getAttribute($context["articulo"], "id", array()))), "html", null, true);
            echo "\">Seguir leyendo...</a></p>
            </div>

            <footer class=\"meta\">
                <p>Comentarios: </p>
            </footer>
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "        <p>No hay entradas en este blog</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 27
    public function block_sidebar1($context, array $blocks = array())
    {
        // line 28
        echo "<div class=\"cientificos\">
<p>Estos son los artículos que ha escrito ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? null), "nombre", array()), "html", null, true);
        echo ".</p>
<p>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? null), "nombre", array()), "html", null, true);
        echo " es un respetado profesional en los siguientes campos: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? null), "especialidad", array()), "html", null, true);
        echo "</p>


<p>Nació el 
";
        // line 34
        if ((twig_date_format_filter($this->env, $this->getAttribute(($context["cientifico"] ?? null), "nacimiento", array()), "d") == "01")) {
            // line 35
            echo "    1
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 36
($context["cientifico"] ?? null), "nacimiento", array()), "d") == "02")) {
            // line 37
            echo "    2
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 38
($context["cientifico"] ?? null), "nacimiento", array()), "d") == "03")) {
            // line 39
            echo "    3
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 40
($context["cientifico"] ?? null), "nacimiento", array()), "d") == "04")) {
            // line 41
            echo "    4
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 42
($context["cientifico"] ?? null), "nacimiento", array()), "d") == "05")) {
            // line 43
            echo "    5
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 44
($context["cientifico"] ?? null), "nacimiento", array()), "d") == "06")) {
            // line 45
            echo "    6
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 46
($context["cientifico"] ?? null), "nacimiento", array()), "d") == "07")) {
            // line 47
            echo "    7
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 48
($context["cientifico"] ?? null), "nacimiento", array()), "d") == "08")) {
            // line 49
            echo "    8
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 50
($context["cientifico"] ?? null), "nacimiento", array()), "d") == "09")) {
            // line 51
            echo "    9
";
        } else {
            // line 53
            echo "    ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["cientifico"] ?? null), "nacimiento", array()), "d"), "html", null, true);
            echo "
";
        }
        // line 55
        echo "
 de 

";
        // line 58
        if ((twig_date_format_filter($this->env, $this->getAttribute(($context["cientifico"] ?? null), "nacimiento", array()), "m") == "01")) {
            // line 59
            echo "    enero
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 60
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "02")) {
            // line 61
            echo "    febrero
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 62
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "03")) {
            // line 63
            echo "    marzo
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 64
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "04")) {
            // line 65
            echo "    abril
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 66
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "05")) {
            // line 67
            echo "    mayo
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 68
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "06")) {
            // line 69
            echo "    junio
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 70
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "07")) {
            // line 71
            echo "    julio
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 72
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "08")) {
            // line 73
            echo "    agosto
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 74
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "09")) {
            // line 75
            echo "    septiembre
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 76
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "10")) {
            // line 77
            echo "    octubre
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 78
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "11")) {
            // line 79
            echo "    noviembre
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 80
($context["cientifico"] ?? null), "nacimiento", array()), "m") == "12")) {
            // line 81
            echo "    diciembre
";
        }
        // line 83
        echo "
 de ";
        // line 84
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["cientifico"] ?? null), "nacimiento", array()), "Y"), "html", null, true);
        echo "</p>



<p> Si quiere más información sobre ";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? null), "nombre", array()), "html", null, true);
        echo ", pulse <a href=\"";
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
        return array (  238 => 88,  231 => 84,  228 => 83,  224 => 81,  222 => 80,  219 => 79,  217 => 78,  214 => 77,  212 => 76,  209 => 75,  207 => 74,  204 => 73,  202 => 72,  199 => 71,  197 => 70,  194 => 69,  192 => 68,  189 => 67,  187 => 66,  184 => 65,  182 => 64,  179 => 63,  177 => 62,  174 => 61,  172 => 60,  169 => 59,  167 => 58,  162 => 55,  156 => 53,  152 => 51,  150 => 50,  147 => 49,  145 => 48,  142 => 47,  140 => 46,  137 => 45,  135 => 44,  132 => 43,  130 => 42,  127 => 41,  125 => 40,  122 => 39,  120 => 38,  117 => 37,  115 => 36,  112 => 35,  110 => 34,  101 => 30,  97 => 29,  94 => 28,  91 => 27,  82 => 23,  69 => 15,  65 => 14,  56 => 10,  49 => 8,  46 => 7,  40 => 6,  37 => 5,  30 => 3,  11 => 2,);
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
