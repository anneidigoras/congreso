<?php

/* @CongresoCongreso/Congreso/show.html.twig */
class __TwigTemplate_a57b127db4d7d2f013c99edc443270c9b7687e918c23b5502b5c246419a951af extends Twig_Template
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
        $__internal_f2577c9da04726151e7b7736e267cb35ba412b18c98c49146d640551a3129ba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2577c9da04726151e7b7736e267cb35ba412b18c98c49146d640551a3129ba5->enter($__internal_f2577c9da04726151e7b7736e267cb35ba412b18c98c49146d640551a3129ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Congreso/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2577c9da04726151e7b7736e267cb35ba412b18c98c49146d640551a3129ba5->leave($__internal_f2577c9da04726151e7b7736e267cb35ba412b18c98c49146d640551a3129ba5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8319e5895ab17717da41e94f20a66f61fc7efb5b256a9b43654d607d4125d5f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8319e5895ab17717da41e94f20a66f61fc7efb5b256a9b43654d607d4125d5f1->enter($__internal_8319e5895ab17717da41e94f20a66f61fc7efb5b256a9b43654d607d4125d5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Artículo seleccionado";
        
        $__internal_8319e5895ab17717da41e94f20a66f61fc7efb5b256a9b43654d607d4125d5f1->leave($__internal_8319e5895ab17717da41e94f20a66f61fc7efb5b256a9b43654d607d4125d5f1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9b28b01b531b1092374eef1e37aa7feaf34f4e2939e4969b77996b196803e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b28b01b531b1092374eef1e37aa7feaf34f4e2939e4969b77996b196803e43->enter($__internal_a9b28b01b531b1092374eef1e37aa7feaf34f4e2939e4969b77996b196803e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a9b28b01b531b1092374eef1e37aa7feaf34f4e2939e4969b77996b196803e43->leave($__internal_a9b28b01b531b1092374eef1e37aa7feaf34f4e2939e4969b77996b196803e43_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3f5a0c49eb5fb5af621e5ddec8bac005b585b33ee73334f131e162c98cc675b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f5a0c49eb5fb5af621e5ddec8bac005b585b33ee73334f131e162c98cc675b9->enter($__internal_3f5a0c49eb5fb5af621e5ddec8bac005b585b33ee73334f131e162c98cc675b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/congreso.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_3f5a0c49eb5fb5af621e5ddec8bac005b585b33ee73334f131e162c98cc675b9->leave($__internal_3f5a0c49eb5fb5af621e5ddec8bac005b585b33ee73334f131e162c98cc675b9_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_184560d8c351652f1e1d56e84aa2c86ad074f5e6441078035d49427a5aa6e9e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_184560d8c351652f1e1d56e84aa2c86ad074f5e6441078035d49427a5aa6e9e0->enter($__internal_184560d8c351652f1e1d56e84aa2c86ad074f5e6441078035d49427a5aa6e9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "<div class=\"tracks\">
";
        // line 29
        $this->loadTemplate("CongresoCongresoBundle:Track:list.html.twig", "@CongresoCongreso/Congreso/show.html.twig", 29)->display(array_merge($context, array("tracks" => ($context["tracks"] ?? $this->getContext($context, "tracks")))));
        // line 30
        echo "</div>
";
        
        $__internal_184560d8c351652f1e1d56e84aa2c86ad074f5e6441078035d49427a5aa6e9e0->leave($__internal_184560d8c351652f1e1d56e84aa2c86ad074f5e6441078035d49427a5aa6e9e0_prof);

    }

    // line 33
    public function block_linea($context, array $blocks = array())
    {
        $__internal_7449c56064ead8059396484a1bf783f144fba2208200be6af3b2ab0162ef671e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7449c56064ead8059396484a1bf783f144fba2208200be6af3b2ab0162ef671e->enter($__internal_7449c56064ead8059396484a1bf783f144fba2208200be6af3b2ab0162ef671e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        // line 34
        echo "<div class=\"separator\"></div>
";
        
        $__internal_7449c56064ead8059396484a1bf783f144fba2208200be6af3b2ab0162ef671e->leave($__internal_7449c56064ead8059396484a1bf783f144fba2208200be6af3b2ab0162ef671e_prof);

    }

    // line 37
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_069f5524ed210959d4011d0fa8f6d1b5d766dfe2e4c27490cff993a08dbed1ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_069f5524ed210959d4011d0fa8f6d1b5d766dfe2e4c27490cff993a08dbed1ef->enter($__internal_069f5524ed210959d4011d0fa8f6d1b5d766dfe2e4c27490cff993a08dbed1ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

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
        
        $__internal_069f5524ed210959d4011d0fa8f6d1b5d766dfe2e4c27490cff993a08dbed1ef->leave($__internal_069f5524ed210959d4011d0fa8f6d1b5d766dfe2e4c27490cff993a08dbed1ef_prof);

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
