<?php

/* @CongresoCongreso/Congreso/show.html.twig */
class __TwigTemplate_f891846c724c50c8122fb8eb3c18e92221ff7c32335b4cd283c82352770f18e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layout.html.twig", "@CongresoCongreso/Congreso/show.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
            'linea' => array($this, 'block_linea'),
            'sidebar1' => array($this, 'block_sidebar1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CongresoCongresoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30952cffa65a79af1611e88a23f43edf6877262a28416adbb976017d57d79330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30952cffa65a79af1611e88a23f43edf6877262a28416adbb976017d57d79330->enter($__internal_30952cffa65a79af1611e88a23f43edf6877262a28416adbb976017d57d79330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Congreso/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30952cffa65a79af1611e88a23f43edf6877262a28416adbb976017d57d79330->leave($__internal_30952cffa65a79af1611e88a23f43edf6877262a28416adbb976017d57d79330_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d6581b4b3a446da0b661e13df3eb108100099ecf67c4025d1848549748a0801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d6581b4b3a446da0b661e13df3eb108100099ecf67c4025d1848549748a0801->enter($__internal_1d6581b4b3a446da0b661e13df3eb108100099ecf67c4025d1848549748a0801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "List of Articulos";
        
        $__internal_1d6581b4b3a446da0b661e13df3eb108100099ecf67c4025d1848549748a0801->leave($__internal_1d6581b4b3a446da0b661e13df3eb108100099ecf67c4025d1848549748a0801_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8a9ae9dc94020d5424b99872a2e4de251813134584341de7aa8bf5ab369fb3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8a9ae9dc94020d5424b99872a2e4de251813134584341de7aa8bf5ab369fb3c->enter($__internal_e8a9ae9dc94020d5424b99872a2e4de251813134584341de7aa8bf5ab369fb3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "titulo", array()), "html", null, true);
        echo "</h1>

\t<div class=\"body\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "cuerpo", array()), "html", null, true);
        echo "</div>
\t<div class=\"separator\"></div>
\t<div class=\"date\">Fecha de publicación: ";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "publicacion", array()), "d-m-Y"), "html", null, true);
        echo "</div>
\t<div class=\"separator\"></div>
\t<section class=\"comments\" id=\"comments\">
\t\t<section class=\"previous-comments\">
\t\t\t<h3>Comentarios</h3>
\t\t\t";
        // line 15
        $this->loadTemplate("CongresoCongresoBundle:Comment:list.html.twig", "@CongresoCongreso/Congreso/show.html.twig", 15)->display(array_merge($context, array("comments" => ($context["comments"] ?? $this->getContext($context, "comments")))));
        // line 16
        echo "\t\t</section>
\t\t<h3>Añadir comentario</h3>
\t\t";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("CongresoCongresoBundle:Comment:new", array("articulo_id" => $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "id", array()))));
        echo "
    </section>
";
        
        $__internal_e8a9ae9dc94020d5424b99872a2e4de251813134584341de7aa8bf5ab369fb3c->leave($__internal_e8a9ae9dc94020d5424b99872a2e4de251813134584341de7aa8bf5ab369fb3c_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3d90a00f4b6cc349d41a64938318c47366ed7a397bdff4569e893d15f2156c23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d90a00f4b6cc349d41a64938318c47366ed7a397bdff4569e893d15f2156c23->enter($__internal_3d90a00f4b6cc349d41a64938318c47366ed7a397bdff4569e893d15f2156c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/congreso.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_3d90a00f4b6cc349d41a64938318c47366ed7a397bdff4569e893d15f2156c23->leave($__internal_3d90a00f4b6cc349d41a64938318c47366ed7a397bdff4569e893d15f2156c23_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_0bec7c263e8269afca43ab55538e5c29824264ff66c3e58e55b68c69b96eb3bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bec7c263e8269afca43ab55538e5c29824264ff66c3e58e55b68c69b96eb3bb->enter($__internal_0bec7c263e8269afca43ab55538e5c29824264ff66c3e58e55b68c69b96eb3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "<div class=\"tracks\">
";
        // line 29
        $this->loadTemplate("CongresoCongresoBundle:Track:list.html.twig", "@CongresoCongreso/Congreso/show.html.twig", 29)->display(array_merge($context, array("tracks" => ($context["tracks"] ?? $this->getContext($context, "tracks")))));
        // line 30
        echo "</div>
";
        
        $__internal_0bec7c263e8269afca43ab55538e5c29824264ff66c3e58e55b68c69b96eb3bb->leave($__internal_0bec7c263e8269afca43ab55538e5c29824264ff66c3e58e55b68c69b96eb3bb_prof);

    }

    // line 33
    public function block_linea($context, array $blocks = array())
    {
        $__internal_196c0777bc3d83c75fae2c7443669600a13547a5a16f3823bc36d28084c50bd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_196c0777bc3d83c75fae2c7443669600a13547a5a16f3823bc36d28084c50bd4->enter($__internal_196c0777bc3d83c75fae2c7443669600a13547a5a16f3823bc36d28084c50bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        // line 34
        echo "<div class=\"separator\"></div>
";
        
        $__internal_196c0777bc3d83c75fae2c7443669600a13547a5a16f3823bc36d28084c50bd4->leave($__internal_196c0777bc3d83c75fae2c7443669600a13547a5a16f3823bc36d28084c50bd4_prof);

    }

    // line 37
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_523990ac2faa0c165c86eb5ba758f1f8d3a7a1eedf6a7ad3d1d4ceb757a94bc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_523990ac2faa0c165c86eb5ba758f1f8d3a7a1eedf6a7ad3d1d4ceb757a94bc6->enter($__internal_523990ac2faa0c165c86eb5ba758f1f8d3a7a1eedf6a7ad3d1d4ceb757a94bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        // line 38
        echo "<div class=\"cientificos\">
";
        // line 39
        $this->loadTemplate("CongresoCongresoBundle:Cientifico:list.html.twig", "@CongresoCongreso/Congreso/show.html.twig", 39)->display(array_merge($context, array("cientificos" => ($context["cientificos"] ?? $this->getContext($context, "cientificos")))));
        // line 40
        echo "</div>
";
        
        $__internal_523990ac2faa0c165c86eb5ba758f1f8d3a7a1eedf6a7ad3d1d4ceb757a94bc6->leave($__internal_523990ac2faa0c165c86eb5ba758f1f8d3a7a1eedf6a7ad3d1d4ceb757a94bc6_prof);

    }

    public function getTemplateName()
    {
        return "@CongresoCongreso/Congreso/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 40,  153 => 39,  150 => 38,  144 => 37,  136 => 34,  130 => 33,  122 => 30,  120 => 29,  117 => 28,  111 => 27,  102 => 24,  98 => 23,  92 => 22,  82 => 18,  78 => 16,  76 => 15,  68 => 10,  63 => 8,  57 => 6,  51 => 5,  39 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Congreso/CongresoBundle/Resources/views/Congreso/show.html.twig #}
{% extends \"CongresoCongresoBundle::layout.html.twig\" %}
{% block title %}List of Articulos{% endblock %}

{% block body %}
\t<h1>{{ articulo.titulo }}</h1>

\t<div class=\"body\">{{ articulo.cuerpo }}</div>
\t<div class=\"separator\"></div>
\t<div class=\"date\">Fecha de publicación: {{ articulo.publicacion |date('d-m-Y') }}</div>
\t<div class=\"separator\"></div>
\t<section class=\"comments\" id=\"comments\">
\t\t<section class=\"previous-comments\">
\t\t\t<h3>Comentarios</h3>
\t\t\t{% include 'CongresoCongresoBundle:Comment:list.html.twig' with { 'comments': comments } %}
\t\t</section>
\t\t<h3>Añadir comentario</h3>
\t\t{{ render(controller( 'CongresoCongresoBundle:Comment:new', { 'articulo_id': articulo.id } )) }}
    </section>
{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link href=\"{{ asset('css/congreso.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
{% endblock %}

{% block sidebar %}
<div class=\"tracks\">
{% include 'CongresoCongresoBundle:Track:list.html.twig' with { 'tracks': tracks } %}
</div>
{% endblock %}

{% block linea %}
<div class=\"separator\"></div>
{% endblock %}

{% block sidebar1 %}
<div class=\"cientificos\">
{% include 'CongresoCongresoBundle:Cientifico:list.html.twig' with { 'cientificos': cientificos } %}
</div>
{% endblock %}


", "@CongresoCongreso/Congreso/show.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Congreso\\show.html.twig");
    }
}
