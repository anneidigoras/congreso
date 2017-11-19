<?php

/* CongresoCongresoBundle:Congreso:list.html.twig */
class __TwigTemplate_74d8776bc67347e494d134869ab8190d29df881ea7dc208d45a743167c6df076 extends Twig_Template
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
        $__internal_1f15245b8d0a9e3dfed2f0b9d44ef8c083bb684a91d3ecc025888268f6f77708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f15245b8d0a9e3dfed2f0b9d44ef8c083bb684a91d3ecc025888268f6f77708->enter($__internal_1f15245b8d0a9e3dfed2f0b9d44ef8c083bb684a91d3ecc025888268f6f77708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f15245b8d0a9e3dfed2f0b9d44ef8c083bb684a91d3ecc025888268f6f77708->leave($__internal_1f15245b8d0a9e3dfed2f0b9d44ef8c083bb684a91d3ecc025888268f6f77708_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2df1ee983b685adf75fe2dcc2089bf8cee717cb012eab3d0120d425dde560d27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2df1ee983b685adf75fe2dcc2089bf8cee717cb012eab3d0120d425dde560d27->enter($__internal_2df1ee983b685adf75fe2dcc2089bf8cee717cb012eab3d0120d425dde560d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Artículos";
        
        $__internal_2df1ee983b685adf75fe2dcc2089bf8cee717cb012eab3d0120d425dde560d27->leave($__internal_2df1ee983b685adf75fe2dcc2089bf8cee717cb012eab3d0120d425dde560d27_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea4c956e496418ab8300ff150704b7db255cdf8d8e5d3c15d16600512f899ad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea4c956e496418ab8300ff150704b7db255cdf8d8e5d3c15d16600512f899ad7->enter($__internal_ea4c956e496418ab8300ff150704b7db255cdf8d8e5d3c15d16600512f899ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articulos"] ?? $this->getContext($context, "articulos")));
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
        
        $__internal_ea4c956e496418ab8300ff150704b7db255cdf8d8e5d3c15d16600512f899ad7->leave($__internal_ea4c956e496418ab8300ff150704b7db255cdf8d8e5d3c15d16600512f899ad7_prof);

    }

    // line 78
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_14bab6bb4de187161daa5e4dcf6aa7e0651ea0e26e1bb3f035e0cc898247e392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14bab6bb4de187161daa5e4dcf6aa7e0651ea0e26e1bb3f035e0cc898247e392->enter($__internal_14bab6bb4de187161daa5e4dcf6aa7e0651ea0e26e1bb3f035e0cc898247e392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 79
        echo "    <p class=\"continue\"><a href=\"/contact\">Contacto</a></p>
";
        
        $__internal_14bab6bb4de187161daa5e4dcf6aa7e0651ea0e26e1bb3f035e0cc898247e392->leave($__internal_14bab6bb4de187161daa5e4dcf6aa7e0651ea0e26e1bb3f035e0cc898247e392_prof);

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
        return array (  237 => 79,  231 => 78,  219 => 74,  210 => 70,  203 => 66,  199 => 65,  190 => 61,  185 => 59,  182 => 58,  178 => 56,  176 => 55,  173 => 54,  171 => 53,  168 => 52,  166 => 51,  163 => 50,  161 => 49,  158 => 48,  156 => 47,  153 => 46,  151 => 45,  148 => 44,  146 => 43,  143 => 42,  141 => 41,  138 => 40,  136 => 39,  133 => 38,  131 => 37,  128 => 36,  126 => 35,  123 => 34,  121 => 33,  116 => 30,  110 => 28,  106 => 26,  104 => 25,  101 => 24,  99 => 23,  96 => 22,  94 => 21,  91 => 20,  89 => 19,  86 => 18,  84 => 17,  81 => 16,  79 => 15,  76 => 14,  74 => 13,  71 => 12,  69 => 11,  66 => 10,  64 => 9,  60 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 2,);
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
{% block title %}Lista de Artículos{% endblock %}

{% block body %}
    {% for articulo in articulos %}
        <article class=\"articulo\">
        <div class=\"separator\"></div>
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
                <p>{{ articulo.cuerpo|slice(0, 400) ~ '...' }}</p>
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
    <p class=\"continue\"><a href=\"/contact\">Contacto</a></p>
{% endblock %}", "CongresoCongresoBundle:Congreso:list.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Congreso/list.html.twig");
    }
}
