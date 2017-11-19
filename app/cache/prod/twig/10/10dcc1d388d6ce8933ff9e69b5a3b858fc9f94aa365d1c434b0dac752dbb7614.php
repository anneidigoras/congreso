<?php

/* CongresoCongresoBundle:Congreso:list.html.twig */
class __TwigTemplate_2eedc5407e2606cd2ee295d0ab1da9e25118a09f5851b5e7c10882abacce4e72 extends Twig_Template
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
    public function block_sidebar($context, array $blocks = array())
    {
        // line 79
        echo "    <p class=\"continue\"><a href=\"/contact\">Contacto</a></p>
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
        return array (  216 => 79,  213 => 78,  204 => 74,  195 => 70,  188 => 66,  184 => 65,  175 => 61,  170 => 59,  167 => 58,  163 => 56,  161 => 55,  158 => 54,  156 => 53,  153 => 52,  151 => 51,  148 => 50,  146 => 49,  143 => 48,  141 => 47,  138 => 46,  136 => 45,  133 => 44,  131 => 43,  128 => 42,  126 => 41,  123 => 40,  121 => 39,  118 => 38,  116 => 37,  113 => 36,  111 => 35,  108 => 34,  106 => 33,  101 => 30,  95 => 28,  91 => 26,  89 => 25,  86 => 24,  84 => 23,  81 => 22,  79 => 21,  76 => 20,  74 => 19,  71 => 18,  69 => 17,  66 => 16,  64 => 15,  61 => 14,  59 => 13,  56 => 12,  54 => 11,  51 => 10,  49 => 9,  45 => 7,  39 => 6,  36 => 5,  30 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "CongresoCongresoBundle:Congreso:list.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Congreso\\list.html.twig");
    }
}
