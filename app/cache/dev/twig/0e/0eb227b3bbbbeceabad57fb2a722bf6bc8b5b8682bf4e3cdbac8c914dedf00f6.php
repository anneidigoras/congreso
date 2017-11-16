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
        $__internal_968977947e428318239501a05bb0c6052ff326077d31115728c830be8c1f773b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_968977947e428318239501a05bb0c6052ff326077d31115728c830be8c1f773b->enter($__internal_968977947e428318239501a05bb0c6052ff326077d31115728c830be8c1f773b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Congreso/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_968977947e428318239501a05bb0c6052ff326077d31115728c830be8c1f773b->leave($__internal_968977947e428318239501a05bb0c6052ff326077d31115728c830be8c1f773b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d622a38b2b11c9de3d6489600a3920a6c6ed055addfa149ba6953d48163b572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d622a38b2b11c9de3d6489600a3920a6c6ed055addfa149ba6953d48163b572->enter($__internal_4d622a38b2b11c9de3d6489600a3920a6c6ed055addfa149ba6953d48163b572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "List of Articulos";
        
        $__internal_4d622a38b2b11c9de3d6489600a3920a6c6ed055addfa149ba6953d48163b572->leave($__internal_4d622a38b2b11c9de3d6489600a3920a6c6ed055addfa149ba6953d48163b572_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e8ce226cac5e5e940af8d3aaec69a822dc1b89b1c4759f39ca4b3205675611d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e8ce226cac5e5e940af8d3aaec69a822dc1b89b1c4759f39ca4b3205675611d->enter($__internal_9e8ce226cac5e5e940af8d3aaec69a822dc1b89b1c4759f39ca4b3205675611d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "titulo", array()), "html", null, true);
        echo "</h1>

\t<div class=\"body\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "cuerpo", array()), "html", null, true);
        echo "</div>
\t<div class=\"date\">";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "publicacion", array()), "d-m-Y"), "html", null, true);
        echo "</div>
\t<section class=\"comments\" id=\"comments\">
\t\t<section class=\"previous-comments\">
\t\t\t<h3>Comentarios</h3>
\t\t\t";
        // line 13
        $this->loadTemplate("CongresoCongresoBundle:Comment:list.html.twig", "@CongresoCongreso/Congreso/show.html.twig", 13)->display(array_merge($context, array("comments" => ($context["comments"] ?? $this->getContext($context, "comments")))));
        // line 14
        echo "\t\t</section>
\t\t<h3>Añadir comentario</h3>
\t\t";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("CongresoCongresoBundle:Comment:new", array("articulo_id" => $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "id", array()))));
        echo "
    </section>
";
        
        $__internal_9e8ce226cac5e5e940af8d3aaec69a822dc1b89b1c4759f39ca4b3205675611d->leave($__internal_9e8ce226cac5e5e940af8d3aaec69a822dc1b89b1c4759f39ca4b3205675611d_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2c09448f4930cabb3608f40998f2c26415f552ec2ab79299bc389771ea452d6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c09448f4930cabb3608f40998f2c26415f552ec2ab79299bc389771ea452d6c->enter($__internal_2c09448f4930cabb3608f40998f2c26415f552ec2ab79299bc389771ea452d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 21
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/congreso.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_2c09448f4930cabb3608f40998f2c26415f552ec2ab79299bc389771ea452d6c->leave($__internal_2c09448f4930cabb3608f40998f2c26415f552ec2ab79299bc389771ea452d6c_prof);

    }

    // line 25
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e3b5355b6f82f9f5a893dfe15c1e5abc645b3636718875beba9bcfc160a06a4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3b5355b6f82f9f5a893dfe15c1e5abc645b3636718875beba9bcfc160a06a4b->enter($__internal_e3b5355b6f82f9f5a893dfe15c1e5abc645b3636718875beba9bcfc160a06a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 26
        echo "<div class=\"tracks\">
";
        // line 27
        $this->loadTemplate("CongresoCongresoBundle:Track:list.html.twig", "@CongresoCongreso/Congreso/show.html.twig", 27)->display(array_merge($context, array("tracks" => ($context["tracks"] ?? $this->getContext($context, "tracks")))));
        // line 28
        echo "</div>
";
        
        $__internal_e3b5355b6f82f9f5a893dfe15c1e5abc645b3636718875beba9bcfc160a06a4b->leave($__internal_e3b5355b6f82f9f5a893dfe15c1e5abc645b3636718875beba9bcfc160a06a4b_prof);

    }

    // line 31
    public function block_linea($context, array $blocks = array())
    {
        $__internal_6c96ac0fa2478b53dc0f1a2fc64e302aec8f562cb3b974ed4d428a6eb9128b72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c96ac0fa2478b53dc0f1a2fc64e302aec8f562cb3b974ed4d428a6eb9128b72->enter($__internal_6c96ac0fa2478b53dc0f1a2fc64e302aec8f562cb3b974ed4d428a6eb9128b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        // line 32
        echo "<p>-----------------</p>
";
        
        $__internal_6c96ac0fa2478b53dc0f1a2fc64e302aec8f562cb3b974ed4d428a6eb9128b72->leave($__internal_6c96ac0fa2478b53dc0f1a2fc64e302aec8f562cb3b974ed4d428a6eb9128b72_prof);

    }

    // line 35
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_a78f8bb5d0efdf00b98c9bc9c7ca990b7832687e05dbd306905fc1405c91dd5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a78f8bb5d0efdf00b98c9bc9c7ca990b7832687e05dbd306905fc1405c91dd5f->enter($__internal_a78f8bb5d0efdf00b98c9bc9c7ca990b7832687e05dbd306905fc1405c91dd5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        // line 36
        echo "<div class=\"cientificos\">
";
        // line 37
        $this->loadTemplate("CongresoCongresoBundle:Cientifico:list.html.twig", "@CongresoCongreso/Congreso/show.html.twig", 37)->display(array_merge($context, array("cientificos" => ($context["cientificos"] ?? $this->getContext($context, "cientificos")))));
        // line 38
        echo "</div>
";
        
        $__internal_a78f8bb5d0efdf00b98c9bc9c7ca990b7832687e05dbd306905fc1405c91dd5f->leave($__internal_a78f8bb5d0efdf00b98c9bc9c7ca990b7832687e05dbd306905fc1405c91dd5f_prof);

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
        return array (  153 => 38,  151 => 37,  148 => 36,  142 => 35,  134 => 32,  128 => 31,  120 => 28,  118 => 27,  115 => 26,  109 => 25,  100 => 22,  96 => 21,  90 => 20,  80 => 16,  76 => 14,  74 => 13,  67 => 9,  63 => 8,  57 => 6,  51 => 5,  39 => 3,  11 => 2,);
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
\t<div class=\"date\">{{ articulo.publicacion |date('d-m-Y') }}</div>
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
<p>-----------------</p>
{% endblock %}

{% block sidebar1 %}
<div class=\"cientificos\">
{% include 'CongresoCongresoBundle:Cientifico:list.html.twig' with { 'cientificos': cientificos } %}
</div>
{% endblock %}


", "@CongresoCongreso/Congreso/show.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Congreso\\show.html.twig");
    }
}
