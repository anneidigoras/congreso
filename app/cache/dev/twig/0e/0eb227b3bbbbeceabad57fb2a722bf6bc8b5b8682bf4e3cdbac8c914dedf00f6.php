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
        $__internal_56ddef70dd4277032cc8b36ebced7966ac6ae220cffa906f23721e54fef2b33c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ddef70dd4277032cc8b36ebced7966ac6ae220cffa906f23721e54fef2b33c->enter($__internal_56ddef70dd4277032cc8b36ebced7966ac6ae220cffa906f23721e54fef2b33c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Congreso/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56ddef70dd4277032cc8b36ebced7966ac6ae220cffa906f23721e54fef2b33c->leave($__internal_56ddef70dd4277032cc8b36ebced7966ac6ae220cffa906f23721e54fef2b33c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_67ffe6c48e5514233949d780db213076bd4258d0d3085f98951418a7192e7905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67ffe6c48e5514233949d780db213076bd4258d0d3085f98951418a7192e7905->enter($__internal_67ffe6c48e5514233949d780db213076bd4258d0d3085f98951418a7192e7905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Artículo seleccionado";
        
        $__internal_67ffe6c48e5514233949d780db213076bd4258d0d3085f98951418a7192e7905->leave($__internal_67ffe6c48e5514233949d780db213076bd4258d0d3085f98951418a7192e7905_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1c1858b3177b0b0c15206f950c296799c1621ec8d7d81b0823156824bc200fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1c1858b3177b0b0c15206f950c296799c1621ec8d7d81b0823156824bc200fb->enter($__internal_e1c1858b3177b0b0c15206f950c296799c1621ec8d7d81b0823156824bc200fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<h4>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "titulo", array()), "html", null, true);
        echo "</h4>

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
        
        $__internal_e1c1858b3177b0b0c15206f950c296799c1621ec8d7d81b0823156824bc200fb->leave($__internal_e1c1858b3177b0b0c15206f950c296799c1621ec8d7d81b0823156824bc200fb_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4d55186010aad232f9d14cfabde3899f16527e6ae93c9134c4e28d270514db5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d55186010aad232f9d14cfabde3899f16527e6ae93c9134c4e28d270514db5a->enter($__internal_4d55186010aad232f9d14cfabde3899f16527e6ae93c9134c4e28d270514db5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/congreso.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_4d55186010aad232f9d14cfabde3899f16527e6ae93c9134c4e28d270514db5a->leave($__internal_4d55186010aad232f9d14cfabde3899f16527e6ae93c9134c4e28d270514db5a_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_819c07a6c496dac836c52fabb643375d4366c8653f19a63892de28cc67cc3cc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_819c07a6c496dac836c52fabb643375d4366c8653f19a63892de28cc67cc3cc1->enter($__internal_819c07a6c496dac836c52fabb643375d4366c8653f19a63892de28cc67cc3cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "<div class=\"tracks\">
";
        // line 29
        $this->loadTemplate("CongresoCongresoBundle:Track:list.html.twig", "@CongresoCongreso/Congreso/show.html.twig", 29)->display(array_merge($context, array("tracks" => ($context["tracks"] ?? $this->getContext($context, "tracks")))));
        // line 30
        echo "</div>
";
        
        $__internal_819c07a6c496dac836c52fabb643375d4366c8653f19a63892de28cc67cc3cc1->leave($__internal_819c07a6c496dac836c52fabb643375d4366c8653f19a63892de28cc67cc3cc1_prof);

    }

    // line 33
    public function block_linea($context, array $blocks = array())
    {
        $__internal_2939582bc28fc373bcb2e01994cf253ba2d8dc28919c84113c976e9513631ae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2939582bc28fc373bcb2e01994cf253ba2d8dc28919c84113c976e9513631ae3->enter($__internal_2939582bc28fc373bcb2e01994cf253ba2d8dc28919c84113c976e9513631ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        // line 34
        echo "<div class=\"separator\"></div>
";
        
        $__internal_2939582bc28fc373bcb2e01994cf253ba2d8dc28919c84113c976e9513631ae3->leave($__internal_2939582bc28fc373bcb2e01994cf253ba2d8dc28919c84113c976e9513631ae3_prof);

    }

    // line 37
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_ff654bee50f1c194d55460eb8d4e0442333c1f580e256ef4e5c61aad07306d80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff654bee50f1c194d55460eb8d4e0442333c1f580e256ef4e5c61aad07306d80->enter($__internal_ff654bee50f1c194d55460eb8d4e0442333c1f580e256ef4e5c61aad07306d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        // line 38
        echo "<div class=\"cientificos\">
";
        // line 39
        $this->loadTemplate("CongresoCongresoBundle:Cientifico:list.html.twig", "@CongresoCongreso/Congreso/show.html.twig", 39)->display(array_merge($context, array("cientificos" => ($context["cientificos"] ?? $this->getContext($context, "cientificos")))));
        // line 40
        echo "</div>
<div class=\"separator\"></div>
<p class=\"continue\"><a href=\"/\">Volver a la Home</a></p>
<p class=\"continue\"><a href=\"/contact\">Contacto</a></p>
";
        
        $__internal_ff654bee50f1c194d55460eb8d4e0442333c1f580e256ef4e5c61aad07306d80->leave($__internal_ff654bee50f1c194d55460eb8d4e0442333c1f580e256ef4e5c61aad07306d80_prof);

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
{% block title %}Artículo seleccionado{% endblock %}

{% block body %}
\t<h4>{{ articulo.titulo }}</h4>

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
<div class=\"separator\"></div>
<p class=\"continue\"><a href=\"/\">Volver a la Home</a></p>
<p class=\"continue\"><a href=\"/contact\">Contacto</a></p>
{% endblock %}

", "@CongresoCongreso/Congreso/show.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Congreso\\show.html.twig");
    }
}
