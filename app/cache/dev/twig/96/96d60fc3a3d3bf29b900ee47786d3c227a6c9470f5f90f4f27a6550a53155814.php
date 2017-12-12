<?php

/* CongresoCongresoBundle:Congreso:showIng.html.twig */
class __TwigTemplate_8c4234e2bbfbdc8535baa34040b1f078d5cfd6efb02cdb00d06bdfa505897849 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layoutIng.html.twig", "CongresoCongresoBundle:Congreso:showIng.html.twig", 2);
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
        return "CongresoCongresoBundle::layoutIng.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7316e6077f1924a735779ff08052906cf1ec2b742644740d0e9b0236a8c28989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7316e6077f1924a735779ff08052906cf1ec2b742644740d0e9b0236a8c28989->enter($__internal_7316e6077f1924a735779ff08052906cf1ec2b742644740d0e9b0236a8c28989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:showIng.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7316e6077f1924a735779ff08052906cf1ec2b742644740d0e9b0236a8c28989->leave($__internal_7316e6077f1924a735779ff08052906cf1ec2b742644740d0e9b0236a8c28989_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5334d926d664f5ecacc7215bff1baa14428aa2e2ca56ac4154644bc1a27fa628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5334d926d664f5ecacc7215bff1baa14428aa2e2ca56ac4154644bc1a27fa628->enter($__internal_5334d926d664f5ecacc7215bff1baa14428aa2e2ca56ac4154644bc1a27fa628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Selected article";
        
        $__internal_5334d926d664f5ecacc7215bff1baa14428aa2e2ca56ac4154644bc1a27fa628->leave($__internal_5334d926d664f5ecacc7215bff1baa14428aa2e2ca56ac4154644bc1a27fa628_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4500b7ea42f19acb304a429b0070f752fd238393d84084f83b08be010fdc112c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4500b7ea42f19acb304a429b0070f752fd238393d84084f83b08be010fdc112c->enter($__internal_4500b7ea42f19acb304a429b0070f752fd238393d84084f83b08be010fdc112c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<h4>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "titulo", array()), "html", null, true);
        echo "</h4>

\t<div class=\"body\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "cuerpo", array()), "html", null, true);
        echo "</div>
\t<div class=\"separator\"></div>
\t<div class=\"date\">Publication date: ";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "publicacion", array()), "d-m-Y"), "html", null, true);
        echo "</div>
\t<div class=\"separator\"></div>
\t<section class=\"comments\" id=\"comments\">
\t\t<section class=\"previous-comments\">
\t\t\t<h3>Comentarios</h3>
\t\t\t";
        // line 15
        $this->loadTemplate("CongresoCongresoBundle:Comment:list.html.twig", "CongresoCongresoBundle:Congreso:showIng.html.twig", 15)->display(array_merge($context, array("comments" => ($context["comments"] ?? $this->getContext($context, "comments")))));
        // line 16
        echo "\t\t</section>
\t\t<h3>Añadir comentario</h3>
\t\t";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("CongresoCongresoBundle:Comment:new", array("articulo_id" => $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "id", array()))));
        echo "
    </section>
";
        
        $__internal_4500b7ea42f19acb304a429b0070f752fd238393d84084f83b08be010fdc112c->leave($__internal_4500b7ea42f19acb304a429b0070f752fd238393d84084f83b08be010fdc112c_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ac2fe0234aef412c6fa89d173713970f726d3450e3bbc3622fc91102b640b35c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac2fe0234aef412c6fa89d173713970f726d3450e3bbc3622fc91102b640b35c->enter($__internal_ac2fe0234aef412c6fa89d173713970f726d3450e3bbc3622fc91102b640b35c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/congreso.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_ac2fe0234aef412c6fa89d173713970f726d3450e3bbc3622fc91102b640b35c->leave($__internal_ac2fe0234aef412c6fa89d173713970f726d3450e3bbc3622fc91102b640b35c_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_2121cd4945009d410079efb984550f509cf88293f805556312af9e14c45b951c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2121cd4945009d410079efb984550f509cf88293f805556312af9e14c45b951c->enter($__internal_2121cd4945009d410079efb984550f509cf88293f805556312af9e14c45b951c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "<div class=\"tracks\">
";
        // line 29
        $this->loadTemplate("CongresoCongresoBundle:Track:list.html.twig", "CongresoCongresoBundle:Congreso:showIng.html.twig", 29)->display(array_merge($context, array("tracks" => ($context["tracks"] ?? $this->getContext($context, "tracks")))));
        // line 30
        echo "</div>
";
        
        $__internal_2121cd4945009d410079efb984550f509cf88293f805556312af9e14c45b951c->leave($__internal_2121cd4945009d410079efb984550f509cf88293f805556312af9e14c45b951c_prof);

    }

    // line 33
    public function block_linea($context, array $blocks = array())
    {
        $__internal_7ca603ef9b4caa00a8ccc3c95a62c49e76b556f9163dd5b8d31a1b9b5fd17924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ca603ef9b4caa00a8ccc3c95a62c49e76b556f9163dd5b8d31a1b9b5fd17924->enter($__internal_7ca603ef9b4caa00a8ccc3c95a62c49e76b556f9163dd5b8d31a1b9b5fd17924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        // line 34
        echo "<div class=\"separator\"></div>
";
        
        $__internal_7ca603ef9b4caa00a8ccc3c95a62c49e76b556f9163dd5b8d31a1b9b5fd17924->leave($__internal_7ca603ef9b4caa00a8ccc3c95a62c49e76b556f9163dd5b8d31a1b9b5fd17924_prof);

    }

    // line 37
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_678aa8542f3317d533c7be0f517f6fcf4208e0e3889f8b339eccf5a3367166e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_678aa8542f3317d533c7be0f517f6fcf4208e0e3889f8b339eccf5a3367166e1->enter($__internal_678aa8542f3317d533c7be0f517f6fcf4208e0e3889f8b339eccf5a3367166e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        // line 38
        echo "<div class=\"cientificos\">
";
        // line 39
        $this->loadTemplate("CongresoCongresoBundle:Cientifico:list.html.twig", "CongresoCongresoBundle:Congreso:showIng.html.twig", 39)->display(array_merge($context, array("cientificos" => ($context["cientificos"] ?? $this->getContext($context, "cientificos")))));
        // line 40
        echo "</div>
<div class=\"separator\"></div>
<p class=\"continue\"><a href=\"/\">Volver a la Home</a></p>
<p class=\"continue\"><a href=\"/contact\">Contacto</a></p>
";
        
        $__internal_678aa8542f3317d533c7be0f517f6fcf4208e0e3889f8b339eccf5a3367166e1->leave($__internal_678aa8542f3317d533c7be0f517f6fcf4208e0e3889f8b339eccf5a3367166e1_prof);

    }

    public function getTemplateName()
    {
        return "CongresoCongresoBundle:Congreso:showIng.html.twig";
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
{% extends \"CongresoCongresoBundle::layoutIng.html.twig\" %}
{% block title %}Selected article{% endblock %}

{% block body %}
\t<h4>{{ articulo.titulo }}</h4>

\t<div class=\"body\">{{ articulo.cuerpo }}</div>
\t<div class=\"separator\"></div>
\t<div class=\"date\">Publication date: {{ articulo.publicacion |date('d-m-Y') }}</div>
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
<div class=\"separator\"></div>
<p class=\"continue\"><a href=\"/\">Volver a la Home</a></p>
<p class=\"continue\"><a href=\"/contact\">Contacto</a></p>
{% endblock %}

", "CongresoCongresoBundle:Congreso:showIng.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Congreso/showIng.html.twig");
    }
}
