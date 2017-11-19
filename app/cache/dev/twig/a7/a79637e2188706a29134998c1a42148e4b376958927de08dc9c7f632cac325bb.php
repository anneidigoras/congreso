<?php

/* CongresoCongresoBundle:Track:arttrac.html.twig */
class __TwigTemplate_12fa67bd3758cb3d058f4f5b71b704461ba12fa76a8299962ec6b68745090049 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layout.html.twig", "CongresoCongresoBundle:Track:arttrac.html.twig", 2);
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
        $__internal_2627c09bccb832c0596175b5feaf1e7749e229a943aa134db56d8a78903dcf6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2627c09bccb832c0596175b5feaf1e7749e229a943aa134db56d8a78903dcf6a->enter($__internal_2627c09bccb832c0596175b5feaf1e7749e229a943aa134db56d8a78903dcf6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Track:arttrac.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2627c09bccb832c0596175b5feaf1e7749e229a943aa134db56d8a78903dcf6a->leave($__internal_2627c09bccb832c0596175b5feaf1e7749e229a943aa134db56d8a78903dcf6a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3915df9e989aa568a1100cf27c351cda71760e4c807174286816f0a39dfd7a83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3915df9e989aa568a1100cf27c351cda71760e4c807174286816f0a39dfd7a83->enter($__internal_3915df9e989aa568a1100cf27c351cda71760e4c807174286816f0a39dfd7a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Articulos de ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["track"] ?? $this->getContext($context, "track")), "campo", array()), "html", null, true);
        
        $__internal_3915df9e989aa568a1100cf27c351cda71760e4c807174286816f0a39dfd7a83->leave($__internal_3915df9e989aa568a1100cf27c351cda71760e4c807174286816f0a39dfd7a83_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7eff3f8e016624ddf6b0d1d04164591447e2b77729c08df6b5a6bab90e79dcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7eff3f8e016624ddf6b0d1d04164591447e2b77729c08df6b5a6bab90e79dcc->enter($__internal_d7eff3f8e016624ddf6b0d1d04164591447e2b77729c08df6b5a6bab90e79dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articulos"] ?? $this->getContext($context, "articulos")));
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["articulo"], "cuerpo", array(0 => 200), "method"), "html", null, true);
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
        
        $__internal_d7eff3f8e016624ddf6b0d1d04164591447e2b77729c08df6b5a6bab90e79dcc->leave($__internal_d7eff3f8e016624ddf6b0d1d04164591447e2b77729c08df6b5a6bab90e79dcc_prof);

    }

    // line 77
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_769db981b9ae325352b66f0d75cfab97c80ad302de86c82206a1253ca35ff4b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_769db981b9ae325352b66f0d75cfab97c80ad302de86c82206a1253ca35ff4b0->enter($__internal_769db981b9ae325352b66f0d75cfab97c80ad302de86c82206a1253ca35ff4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 78
        echo "<p class=\"continue\"><a href=\"/\">Volver a la Home</a></p>
<p class=\"continue\"><a href=\"/contact\">Contacto</a></p>
";
        
        $__internal_769db981b9ae325352b66f0d75cfab97c80ad302de86c82206a1253ca35ff4b0->leave($__internal_769db981b9ae325352b66f0d75cfab97c80ad302de86c82206a1253ca35ff4b0_prof);

    }

    public function getTemplateName()
    {
        return "CongresoCongresoBundle:Track:arttrac.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 78,  231 => 77,  219 => 73,  210 => 69,  203 => 65,  199 => 64,  190 => 60,  185 => 58,  182 => 57,  178 => 55,  176 => 54,  173 => 53,  171 => 52,  168 => 51,  166 => 50,  163 => 49,  161 => 48,  158 => 47,  156 => 46,  153 => 45,  151 => 44,  148 => 43,  146 => 42,  143 => 41,  141 => 40,  138 => 39,  136 => 38,  133 => 37,  131 => 36,  128 => 35,  126 => 34,  123 => 33,  121 => 32,  116 => 29,  110 => 27,  106 => 25,  104 => 24,  101 => 23,  99 => 22,  96 => 21,  94 => 20,  91 => 19,  89 => 18,  86 => 17,  84 => 16,  81 => 15,  79 => 14,  76 => 13,  74 => 12,  71 => 11,  69 => 10,  66 => 9,  64 => 8,  61 => 7,  55 => 6,  49 => 5,  36 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Congreso/CongresoBundle/Resources/views/Track/arttrac.html.twig #}
{% extends \"CongresoCongresoBundle::layout.html.twig\" %}
{% block title %}Articulos de {{ track.campo }}{% endblock %}

{% block body %}
    {% for articulo in articulos %}
        <article class=\"articulo\">
            {% if articulo.publicacion|date('d') ==  \"01\" %}
                1
            {% elseif articulo.publicacion|date('d') ==  \"02\" %}
                2
            {% elseif articulo.publicacion|date('d') ==  \"03\" %}
                3
            {% elseif articulo.publicacion|date('d') ==  \"04\" %}
                4
            {% elseif articulo.publicacion|date('d') ==  \"05\" %}
                5
            {% elseif articulo.publicacion|date('d') ==  \"06\" %}
                6
            {% elseif articulo.publicacion|date('d') ==  \"07\" %}
                7
            {% elseif articulo.publicacion|date('d') ==  \"08\" %}
                8
            {% elseif articulo.publicacion|date('d') ==  \"09\" %}
                9
            {% else %}
                {{ articulo.publicacion|date('d') }}
            {% endif %}

            de 

            {% if articulo.publicacion|date('m') ==  \"01\" %}
                enero
            {% elseif articulo.publicacion|date('m') ==  \"02\" %}
                febrero
            {% elseif articulo.publicacion|date('m') ==  \"03\" %}
                marzo
            {% elseif articulo.publicacion|date('m') ==  \"04\" %}
                abril
            {% elseif articulo.publicacion|date('m') ==  \"05\" %}
                mayo
            {% elseif articulo.publicacion|date('m') ==  \"06\" %}
                junio
            {% elseif articulo.publicacion|date('m') ==  \"07\" %}
                julio
            {% elseif articulo.publicacion|date('m') ==  \"08\" %}
                agosto
            {% elseif articulo.publicacion|date('m') ==  \"09\" %}
                septiembre
            {% elseif articulo.publicacion|date('m') ==  \"10\" %}
                octubre
            {% elseif articulo.publicacion|date('m') ==  \"11\" %}
                noviembre
            {% elseif articulo.publicacion|date('m') ==  \"12\" %}
                diciembre
            {% endif %}
            
             de {{ articulo.publicacion|date('Y') }}</p>
            <header>
                <h2><a href=\"{{ path('congreso_congreso_show', { 'id': articulo.id }) }}\">{{ articulo.titulo }}</a></h2>
            </header>

            <div class=\"snippet\">
                <p>{{ articulo.cuerpo(200) }}</p>
                <p class=\"continue\"><a href=\"{{ path('congreso_congreso_show', { 'id': articulo.id }) }}\">Seguir leyendo...</a></p>
            </div>

            <footer class=\"meta\">
                <p>Comentarios: {{articulo.numberofcomments}}</p>
            </footer>
        </article>
    {% else %}
        <p>No hay entradas en este blog</p>
    {% endfor %}
{% endblock %}

{% block sidebar %}
<p class=\"continue\"><a href=\"/\">Volver a la Home</a></p>
<p class=\"continue\"><a href=\"/contact\">Contacto</a></p>
{% endblock %}

", "CongresoCongresoBundle:Track:arttrac.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Track/arttrac.html.twig");
    }
}
