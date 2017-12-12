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
        $__internal_3e126283f6dfa3967e013741dfa1b262fbf208c307a35514c560f0087b03fbc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e126283f6dfa3967e013741dfa1b262fbf208c307a35514c560f0087b03fbc8->enter($__internal_3e126283f6dfa3967e013741dfa1b262fbf208c307a35514c560f0087b03fbc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:showIng.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e126283f6dfa3967e013741dfa1b262fbf208c307a35514c560f0087b03fbc8->leave($__internal_3e126283f6dfa3967e013741dfa1b262fbf208c307a35514c560f0087b03fbc8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_69cb9a873494e86ec7c3b40c84af26f9ec4c28c28e52f857cac13216e31b75aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69cb9a873494e86ec7c3b40c84af26f9ec4c28c28e52f857cac13216e31b75aa->enter($__internal_69cb9a873494e86ec7c3b40c84af26f9ec4c28c28e52f857cac13216e31b75aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Selected article";
        
        $__internal_69cb9a873494e86ec7c3b40c84af26f9ec4c28c28e52f857cac13216e31b75aa->leave($__internal_69cb9a873494e86ec7c3b40c84af26f9ec4c28c28e52f857cac13216e31b75aa_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7855cb51be5dfcff0d636207fbb1a61946f2a45af3dc5f8963b1374e55e85a66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7855cb51be5dfcff0d636207fbb1a61946f2a45af3dc5f8963b1374e55e85a66->enter($__internal_7855cb51be5dfcff0d636207fbb1a61946f2a45af3dc5f8963b1374e55e85a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7855cb51be5dfcff0d636207fbb1a61946f2a45af3dc5f8963b1374e55e85a66->leave($__internal_7855cb51be5dfcff0d636207fbb1a61946f2a45af3dc5f8963b1374e55e85a66_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_32afbd7b4d173f161b5e88c488fbfbb3c548d4bec0561430b61ef08ff1298778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32afbd7b4d173f161b5e88c488fbfbb3c548d4bec0561430b61ef08ff1298778->enter($__internal_32afbd7b4d173f161b5e88c488fbfbb3c548d4bec0561430b61ef08ff1298778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/congreso.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_32afbd7b4d173f161b5e88c488fbfbb3c548d4bec0561430b61ef08ff1298778->leave($__internal_32afbd7b4d173f161b5e88c488fbfbb3c548d4bec0561430b61ef08ff1298778_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_90d719f7c63637d50e3c7f1b15105de7a490ac7bb5000350b92c0b7f31ea3c80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d719f7c63637d50e3c7f1b15105de7a490ac7bb5000350b92c0b7f31ea3c80->enter($__internal_90d719f7c63637d50e3c7f1b15105de7a490ac7bb5000350b92c0b7f31ea3c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "<div class=\"tracks\">
";
        // line 29
        $this->loadTemplate("CongresoCongresoBundle:Track:list.html.twig", "CongresoCongresoBundle:Congreso:showIng.html.twig", 29)->display(array_merge($context, array("tracks" => ($context["tracks"] ?? $this->getContext($context, "tracks")))));
        // line 30
        echo "</div>
";
        
        $__internal_90d719f7c63637d50e3c7f1b15105de7a490ac7bb5000350b92c0b7f31ea3c80->leave($__internal_90d719f7c63637d50e3c7f1b15105de7a490ac7bb5000350b92c0b7f31ea3c80_prof);

    }

    // line 33
    public function block_linea($context, array $blocks = array())
    {
        $__internal_d413ea78dc8cb1945f0d2f3b04105aa2fd576ac43d4fb095ca953197e0a8e6bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d413ea78dc8cb1945f0d2f3b04105aa2fd576ac43d4fb095ca953197e0a8e6bc->enter($__internal_d413ea78dc8cb1945f0d2f3b04105aa2fd576ac43d4fb095ca953197e0a8e6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        // line 34
        echo "<div class=\"separator\"></div>
";
        
        $__internal_d413ea78dc8cb1945f0d2f3b04105aa2fd576ac43d4fb095ca953197e0a8e6bc->leave($__internal_d413ea78dc8cb1945f0d2f3b04105aa2fd576ac43d4fb095ca953197e0a8e6bc_prof);

    }

    // line 37
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_8cb490a36d15e2368b7d2e5094a723ead2842752e509b4363e076df5dab2972a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cb490a36d15e2368b7d2e5094a723ead2842752e509b4363e076df5dab2972a->enter($__internal_8cb490a36d15e2368b7d2e5094a723ead2842752e509b4363e076df5dab2972a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

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
        
        $__internal_8cb490a36d15e2368b7d2e5094a723ead2842752e509b4363e076df5dab2972a->leave($__internal_8cb490a36d15e2368b7d2e5094a723ead2842752e509b4363e076df5dab2972a_prof);

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
