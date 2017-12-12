<?php

/* @CongresoCongreso/Congreso/showIng.html.twig */
class __TwigTemplate_9d45b2cb207af5a52d276b3f6bcf5ab5689e27faa3f163bf79c789545b77efdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layoutIng.html.twig", "@CongresoCongreso/Congreso/showIng.html.twig", 2);
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
        $__internal_1f57e1c8a8fd914ec1dd07917b7e9bd481c23762d0efb4dae7050702f10488cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f57e1c8a8fd914ec1dd07917b7e9bd481c23762d0efb4dae7050702f10488cc->enter($__internal_1f57e1c8a8fd914ec1dd07917b7e9bd481c23762d0efb4dae7050702f10488cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Congreso/showIng.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f57e1c8a8fd914ec1dd07917b7e9bd481c23762d0efb4dae7050702f10488cc->leave($__internal_1f57e1c8a8fd914ec1dd07917b7e9bd481c23762d0efb4dae7050702f10488cc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_34a59fdc162feaebce104c9686c0572bafdb366ad4ffd68d161e2c7cef61b094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34a59fdc162feaebce104c9686c0572bafdb366ad4ffd68d161e2c7cef61b094->enter($__internal_34a59fdc162feaebce104c9686c0572bafdb366ad4ffd68d161e2c7cef61b094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Selected article";
        
        $__internal_34a59fdc162feaebce104c9686c0572bafdb366ad4ffd68d161e2c7cef61b094->leave($__internal_34a59fdc162feaebce104c9686c0572bafdb366ad4ffd68d161e2c7cef61b094_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8146067a3a6d3719273ca872348b8bf103338912898e5c3ef1d05668206a0c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8146067a3a6d3719273ca872348b8bf103338912898e5c3ef1d05668206a0c3->enter($__internal_d8146067a3a6d3719273ca872348b8bf103338912898e5c3ef1d05668206a0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("CongresoCongresoBundle:Comment:list.html.twig", "@CongresoCongreso/Congreso/showIng.html.twig", 15)->display(array_merge($context, array("comments" => ($context["comments"] ?? $this->getContext($context, "comments")))));
        // line 16
        echo "\t\t</section>
\t\t<h3>Añadir comentario</h3>
\t\t";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("CongresoCongresoBundle:Comment:new", array("articulo_id" => $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "id", array()))));
        echo "
    </section>
";
        
        $__internal_d8146067a3a6d3719273ca872348b8bf103338912898e5c3ef1d05668206a0c3->leave($__internal_d8146067a3a6d3719273ca872348b8bf103338912898e5c3ef1d05668206a0c3_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ed5c43c41681bcc4106d8da47e5ed26e9ccb40a7aaa4995e0e82d3ed57a19d85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed5c43c41681bcc4106d8da47e5ed26e9ccb40a7aaa4995e0e82d3ed57a19d85->enter($__internal_ed5c43c41681bcc4106d8da47e5ed26e9ccb40a7aaa4995e0e82d3ed57a19d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/congreso.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_ed5c43c41681bcc4106d8da47e5ed26e9ccb40a7aaa4995e0e82d3ed57a19d85->leave($__internal_ed5c43c41681bcc4106d8da47e5ed26e9ccb40a7aaa4995e0e82d3ed57a19d85_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_36f240977e6c5a7708c0ed6b8c67eaf373c4425a50c99ecc706d2240f2c3c937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36f240977e6c5a7708c0ed6b8c67eaf373c4425a50c99ecc706d2240f2c3c937->enter($__internal_36f240977e6c5a7708c0ed6b8c67eaf373c4425a50c99ecc706d2240f2c3c937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "<div class=\"tracks\">
";
        // line 29
        $this->loadTemplate("CongresoCongresoBundle:Track:list.html.twig", "@CongresoCongreso/Congreso/showIng.html.twig", 29)->display(array_merge($context, array("tracks" => ($context["tracks"] ?? $this->getContext($context, "tracks")))));
        // line 30
        echo "</div>
";
        
        $__internal_36f240977e6c5a7708c0ed6b8c67eaf373c4425a50c99ecc706d2240f2c3c937->leave($__internal_36f240977e6c5a7708c0ed6b8c67eaf373c4425a50c99ecc706d2240f2c3c937_prof);

    }

    // line 33
    public function block_linea($context, array $blocks = array())
    {
        $__internal_06bf648e1bad8f40cca63c1030e69c59013b65eaa5ddc272d4d2870f677df2a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06bf648e1bad8f40cca63c1030e69c59013b65eaa5ddc272d4d2870f677df2a6->enter($__internal_06bf648e1bad8f40cca63c1030e69c59013b65eaa5ddc272d4d2870f677df2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        // line 34
        echo "<div class=\"separator\"></div>
";
        
        $__internal_06bf648e1bad8f40cca63c1030e69c59013b65eaa5ddc272d4d2870f677df2a6->leave($__internal_06bf648e1bad8f40cca63c1030e69c59013b65eaa5ddc272d4d2870f677df2a6_prof);

    }

    // line 37
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_ec3c0f3b4ed1a18ac312cdaf160b0cffe16d56d79dc5646f899a0b157b61b526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec3c0f3b4ed1a18ac312cdaf160b0cffe16d56d79dc5646f899a0b157b61b526->enter($__internal_ec3c0f3b4ed1a18ac312cdaf160b0cffe16d56d79dc5646f899a0b157b61b526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        // line 38
        echo "<div class=\"cientificos\">
";
        // line 39
        $this->loadTemplate("CongresoCongresoBundle:Cientifico:list.html.twig", "@CongresoCongreso/Congreso/showIng.html.twig", 39)->display(array_merge($context, array("cientificos" => ($context["cientificos"] ?? $this->getContext($context, "cientificos")))));
        // line 40
        echo "</div>
<div class=\"separator\"></div>
<p class=\"continue\"><a href=\"/\">Volver a la Home</a></p>
<p class=\"continue\"><a href=\"/contact\">Contacto</a></p>
";
        
        $__internal_ec3c0f3b4ed1a18ac312cdaf160b0cffe16d56d79dc5646f899a0b157b61b526->leave($__internal_ec3c0f3b4ed1a18ac312cdaf160b0cffe16d56d79dc5646f899a0b157b61b526_prof);

    }

    public function getTemplateName()
    {
        return "@CongresoCongreso/Congreso/showIng.html.twig";
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

", "@CongresoCongreso/Congreso/showIng.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Congreso\\showIng.html.twig");
    }
}
