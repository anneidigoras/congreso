<?php

/* @CongresoCongreso/Cientifico/artcenIng.html.twig */
class __TwigTemplate_6af71f3aafa54148cf9787c95dc6f5dd7be5113fb7548a0c1b6afcd6fb7d7093 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layoutIng.html.twig", "@CongresoCongreso/Cientifico/artcenIng.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'sidebar1' => array($this, 'block_sidebar1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CongresoCongresoBundle::layoutIng.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c389bba3b21fb4146bb2e1b3226f64aad4b32088ec91d8ee918afea069914c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c389bba3b21fb4146bb2e1b3226f64aad4b32088ec91d8ee918afea069914c3->enter($__internal_0c389bba3b21fb4146bb2e1b3226f64aad4b32088ec91d8ee918afea069914c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Cientifico/artcenIng.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c389bba3b21fb4146bb2e1b3226f64aad4b32088ec91d8ee918afea069914c3->leave($__internal_0c389bba3b21fb4146bb2e1b3226f64aad4b32088ec91d8ee918afea069914c3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f48b241074bcca5909f685bb8953fea37884614d75ed46c8bf445abe80958b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f48b241074bcca5909f685bb8953fea37884614d75ed46c8bf445abe80958b4->enter($__internal_4f48b241074bcca5909f685bb8953fea37884614d75ed46c8bf445abe80958b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Articles made by ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nombre", array()), "html", null, true);
        
        $__internal_4f48b241074bcca5909f685bb8953fea37884614d75ed46c8bf445abe80958b4->leave($__internal_4f48b241074bcca5909f685bb8953fea37884614d75ed46c8bf445abe80958b4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_869241bfd8beef51fe146692fcc7071134b14e07bc4e17afa002858e3db4e263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_869241bfd8beef51fe146692fcc7071134b14e07bc4e17afa002858e3db4e263->enter($__internal_869241bfd8beef51fe146692fcc7071134b14e07bc4e17afa002858e3db4e263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "\">Keep reading...</a></p>
            </div>

            <footer class=\"meta\">
                <p>Comments: ";
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
            echo "        <p>This blog is empty</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_869241bfd8beef51fe146692fcc7071134b14e07bc4e17afa002858e3db4e263->leave($__internal_869241bfd8beef51fe146692fcc7071134b14e07bc4e17afa002858e3db4e263_prof);

    }

    // line 78
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_28c5fe04608d14000cdedf383328ba9b8ade4012d02ae7b83ef523768121c488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28c5fe04608d14000cdedf383328ba9b8ade4012d02ae7b83ef523768121c488->enter($__internal_28c5fe04608d14000cdedf383328ba9b8ade4012d02ae7b83ef523768121c488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        // line 79
        echo "<div class=\"cientificos\">
<p>these are the articles written by ";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nombre", array()), "html", null, true);
        echo ".</p>
<p>";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nombre", array()), "html", null, true);
        echo " it is a respected professional in the areas of: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? $this->getContext($context, "cientifico")), "especialidad", array()), "html", null, true);
        echo "</p>


<p>Was born in 
";
        // line 85
        if ((twig_date_format_filter($this->env, $this->getAttribute(($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "d") == "01")) {
            // line 86
            echo "    1
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 87
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "d") == "02")) {
            // line 88
            echo "    2
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 89
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "d") == "03")) {
            // line 90
            echo "    3
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 91
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "d") == "04")) {
            // line 92
            echo "    4
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 93
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "d") == "05")) {
            // line 94
            echo "    5
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 95
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "d") == "06")) {
            // line 96
            echo "    6
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 97
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "d") == "07")) {
            // line 98
            echo "    7
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 99
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "d") == "08")) {
            // line 100
            echo "    8
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 101
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "d") == "09")) {
            // line 102
            echo "    9
";
        } else {
            // line 104
            echo "    ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "d"), "html", null, true);
            echo "
";
        }
        // line 106
        echo "
 de 

";
        // line 109
        if ((twig_date_format_filter($this->env, $this->getAttribute(($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "m") == "01")) {
            // line 110
            echo "    enero
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 111
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "m") == "02")) {
            // line 112
            echo "    febrero
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 113
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "m") == "03")) {
            // line 114
            echo "    marzo
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 115
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "m") == "04")) {
            // line 116
            echo "    abril
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 117
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "m") == "05")) {
            // line 118
            echo "    mayo
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 119
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "m") == "06")) {
            // line 120
            echo "    junio
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 121
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "m") == "07")) {
            // line 122
            echo "    julio
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 123
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "m") == "08")) {
            // line 124
            echo "    agosto
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 125
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "m") == "09")) {
            // line 126
            echo "    septiembre
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 127
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "m") == "10")) {
            // line 128
            echo "    octubre
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 129
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "m") == "11")) {
            // line 130
            echo "    noviembre
";
        } elseif ((twig_date_format_filter($this->env, $this->getAttribute(        // line 131
($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "m") == "12")) {
            // line 132
            echo "    diciembre
";
        }
        // line 134
        echo "
 de ";
        // line 135
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nacimiento", array()), "Y"), "html", null, true);
        echo "</p>



<p> If you want more information about ";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? $this->getContext($context, "cientifico")), "nombre", array()), "html", null, true);
        echo ", press <a target=\"_blank\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cientifico"] ?? $this->getContext($context, "cientifico")), "info", array()), "html", null, true);
        echo "\">aquí</a>.</p>

</div>
<div class=\"separator\"></div>
<p class=\"continue\"><a href=\"/\">Back Hombre</a></p>
<p class=\"continue\"><a href=\"/contact\">Contact</a></p>
<p class=\"continue\"><a href=\"/contact\">Change language</a></p>
";
        
        $__internal_28c5fe04608d14000cdedf383328ba9b8ade4012d02ae7b83ef523768121c488->leave($__internal_28c5fe04608d14000cdedf383328ba9b8ade4012d02ae7b83ef523768121c488_prof);

    }

    public function getTemplateName()
    {
        return "@CongresoCongreso/Cientifico/artcenIng.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 139,  375 => 135,  372 => 134,  368 => 132,  366 => 131,  363 => 130,  361 => 129,  358 => 128,  356 => 127,  353 => 126,  351 => 125,  348 => 124,  346 => 123,  343 => 122,  341 => 121,  338 => 120,  336 => 119,  333 => 118,  331 => 117,  328 => 116,  326 => 115,  323 => 114,  321 => 113,  318 => 112,  316 => 111,  313 => 110,  311 => 109,  306 => 106,  300 => 104,  296 => 102,  294 => 101,  291 => 100,  289 => 99,  286 => 98,  284 => 97,  281 => 96,  279 => 95,  276 => 94,  274 => 93,  271 => 92,  269 => 91,  266 => 90,  264 => 89,  261 => 88,  259 => 87,  256 => 86,  254 => 85,  245 => 81,  241 => 80,  238 => 79,  232 => 78,  220 => 74,  211 => 70,  204 => 66,  200 => 65,  191 => 61,  186 => 59,  183 => 58,  179 => 56,  177 => 55,  174 => 54,  172 => 53,  169 => 52,  167 => 51,  164 => 50,  162 => 49,  159 => 48,  157 => 47,  154 => 46,  152 => 45,  149 => 44,  147 => 43,  144 => 42,  142 => 41,  139 => 40,  137 => 39,  134 => 38,  132 => 37,  129 => 36,  127 => 35,  124 => 34,  122 => 33,  117 => 30,  111 => 28,  107 => 26,  105 => 25,  102 => 24,  100 => 23,  97 => 22,  95 => 21,  92 => 20,  90 => 19,  87 => 18,  85 => 17,  82 => 16,  80 => 15,  77 => 14,  75 => 13,  72 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 7,  55 => 6,  49 => 5,  36 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Congreso/CongresoBundle/Resources/views/Cientifico/show.html.twig #}
{% extends \"CongresoCongresoBundle::layoutIng.html.twig\" %}
{% block title %}Articles made by {{ cientifico.nombre }}{% endblock %}

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
                <p class=\"continue\"><a href=\"{{ path('congreso_congreso_show', { 'id': articulo.id }) }}\">Keep reading...</a></p>
            </div>

            <footer class=\"meta\">
                <p>Comments: {{articulo.numberofcomments}}</p>
            </footer>
        </article>
    {% else %}
        <p>This blog is empty</p>
    {% endfor %}
{% endblock %}

{% block sidebar1 %}
<div class=\"cientificos\">
<p>these are the articles written by {{ cientifico.nombre }}.</p>
<p>{{ cientifico.nombre }} it is a respected professional in the areas of: {{ cientifico.especialidad }}</p>


<p>Was born in 
{% if cientifico.nacimiento|date('d') ==  \"01\" %}
    1
{% elseif cientifico.nacimiento|date('d') ==  \"02\" %}
    2
{% elseif cientifico.nacimiento|date('d') ==  \"03\" %}
    3
{% elseif cientifico.nacimiento|date('d') ==  \"04\" %}
    4
{% elseif cientifico.nacimiento|date('d') ==  \"05\" %}
    5
{% elseif cientifico.nacimiento|date('d') ==  \"06\" %}
    6
{% elseif cientifico.nacimiento|date('d') ==  \"07\" %}
    7
{% elseif cientifico.nacimiento|date('d') ==  \"08\" %}
    8
{% elseif cientifico.nacimiento|date('d') ==  \"09\" %}
    9
{% else %}
    {{ cientifico.nacimiento|date('d') }}
{% endif %}

 de 

{% if cientifico.nacimiento|date('m') ==  \"01\" %}
    enero
{% elseif cientifico.nacimiento|date('m') ==  \"02\" %}
    febrero
{% elseif cientifico.nacimiento|date('m') ==  \"03\" %}
    marzo
{% elseif cientifico.nacimiento|date('m') ==  \"04\" %}
    abril
{% elseif cientifico.nacimiento|date('m') ==  \"05\" %}
    mayo
{% elseif cientifico.nacimiento|date('m') ==  \"06\" %}
    junio
{% elseif cientifico.nacimiento|date('m') ==  \"07\" %}
    julio
{% elseif cientifico.nacimiento|date('m') ==  \"08\" %}
    agosto
{% elseif cientifico.nacimiento|date('m') ==  \"09\" %}
    septiembre
{% elseif cientifico.nacimiento|date('m') ==  \"10\" %}
    octubre
{% elseif cientifico.nacimiento|date('m') ==  \"11\" %}
    noviembre
{% elseif cientifico.nacimiento|date('m') ==  \"12\" %}
    diciembre
{% endif %}

 de {{ cientifico.nacimiento|date('Y') }}</p>



<p> If you want more information about {{ cientifico.nombre }}, press <a target=\"_blank\" href=\"{{ cientifico.info }}\">aquí</a>.</p>

</div>
<div class=\"separator\"></div>
<p class=\"continue\"><a href=\"/\">Back Hombre</a></p>
<p class=\"continue\"><a href=\"/contact\">Contact</a></p>
<p class=\"continue\"><a href=\"/contact\">Change language</a></p>
{% endblock %}

", "@CongresoCongreso/Cientifico/artcenIng.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Cientifico\\artcenIng.html.twig");
    }
}