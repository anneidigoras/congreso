<?php

/* CongresoCongresoBundle:Congreso:show.html.twig */
class __TwigTemplate_a96937c89f43115c6621aebd4ad4d0b5934e47fd66b941307de51be46a23737f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layout.html.twig", "CongresoCongresoBundle:Congreso:show.html.twig", 2);
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
        $__internal_e64b17ae146eb3413fba897cb3e690dd03680a8718b6f1e4f42717f6f4145bb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e64b17ae146eb3413fba897cb3e690dd03680a8718b6f1e4f42717f6f4145bb6->enter($__internal_e64b17ae146eb3413fba897cb3e690dd03680a8718b6f1e4f42717f6f4145bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e64b17ae146eb3413fba897cb3e690dd03680a8718b6f1e4f42717f6f4145bb6->leave($__internal_e64b17ae146eb3413fba897cb3e690dd03680a8718b6f1e4f42717f6f4145bb6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6fea4951a0ba0daad95216a55ce5e0055f8dcc4976992d50304fe5887402d383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fea4951a0ba0daad95216a55ce5e0055f8dcc4976992d50304fe5887402d383->enter($__internal_6fea4951a0ba0daad95216a55ce5e0055f8dcc4976992d50304fe5887402d383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Artículo seleccionado";
        
        $__internal_6fea4951a0ba0daad95216a55ce5e0055f8dcc4976992d50304fe5887402d383->leave($__internal_6fea4951a0ba0daad95216a55ce5e0055f8dcc4976992d50304fe5887402d383_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_42ee8537a1703b3e2000bbecb079035e2a00f7be1a40cd1dc6a041b49819838e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42ee8537a1703b3e2000bbecb079035e2a00f7be1a40cd1dc6a041b49819838e->enter($__internal_42ee8537a1703b3e2000bbecb079035e2a00f7be1a40cd1dc6a041b49819838e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "ParsearFecha", array()), "html", null, true);
        echo "</div>
\t<div class=\"separator\"></div>
\t<section class=\"comments\" id=\"comments\">
\t\t<section class=\"previous-comments\">
\t\t\t<h3>Comentarios</h3>
\t\t\t";
        // line 15
        $this->loadTemplate("CongresoCongresoBundle:Comment:list.html.twig", "CongresoCongresoBundle:Congreso:show.html.twig", 15)->display(array_merge($context, array("comments" => ($context["comments"] ?? $this->getContext($context, "comments")))));
        // line 16
        echo "\t\t</section>
\t\t<h3>Añadir comentario</h3>
\t\t";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("CongresoCongresoBundle:Comment:new", array("articulo_id" => $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "id", array()))));
        echo "
    </section>
";
        
        $__internal_42ee8537a1703b3e2000bbecb079035e2a00f7be1a40cd1dc6a041b49819838e->leave($__internal_42ee8537a1703b3e2000bbecb079035e2a00f7be1a40cd1dc6a041b49819838e_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4f6a574de99bed2d17be31c3a50454954579e1ad0c3d0a7938d996586dbf53ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f6a574de99bed2d17be31c3a50454954579e1ad0c3d0a7938d996586dbf53ea->enter($__internal_4f6a574de99bed2d17be31c3a50454954579e1ad0c3d0a7938d996586dbf53ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/congreso.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_4f6a574de99bed2d17be31c3a50454954579e1ad0c3d0a7938d996586dbf53ea->leave($__internal_4f6a574de99bed2d17be31c3a50454954579e1ad0c3d0a7938d996586dbf53ea_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_a8440ec856ad08ba9d1cdacd32f2d428cf97080f9097ea845e50fd962a238d75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8440ec856ad08ba9d1cdacd32f2d428cf97080f9097ea845e50fd962a238d75->enter($__internal_a8440ec856ad08ba9d1cdacd32f2d428cf97080f9097ea845e50fd962a238d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "<div class=\"tracks\">
";
        // line 29
        $this->loadTemplate("CongresoCongresoBundle:Track:list.html.twig", "CongresoCongresoBundle:Congreso:show.html.twig", 29)->display(array_merge($context, array("track" => ($context["track"] ?? $this->getContext($context, "track")))));
        // line 30
        echo "</div>
";
        
        $__internal_a8440ec856ad08ba9d1cdacd32f2d428cf97080f9097ea845e50fd962a238d75->leave($__internal_a8440ec856ad08ba9d1cdacd32f2d428cf97080f9097ea845e50fd962a238d75_prof);

    }

    // line 33
    public function block_linea($context, array $blocks = array())
    {
        $__internal_3d688b24ae5050e897742a78effca1b2168602df04326d3e9ad8ea683027866e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d688b24ae5050e897742a78effca1b2168602df04326d3e9ad8ea683027866e->enter($__internal_3d688b24ae5050e897742a78effca1b2168602df04326d3e9ad8ea683027866e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        // line 34
        echo "<div class=\"separator\"></div>
";
        
        $__internal_3d688b24ae5050e897742a78effca1b2168602df04326d3e9ad8ea683027866e->leave($__internal_3d688b24ae5050e897742a78effca1b2168602df04326d3e9ad8ea683027866e_prof);

    }

    // line 37
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_ef971848a96638ff642500a2541df4cf02130843f239014a8197eb90a32f0f9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef971848a96638ff642500a2541df4cf02130843f239014a8197eb90a32f0f9c->enter($__internal_ef971848a96638ff642500a2541df4cf02130843f239014a8197eb90a32f0f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        // line 38
        echo "<div class=\"cientificos\">
";
        // line 39
        $this->loadTemplate("CongresoCongresoBundle:Cientifico:list.html.twig", "CongresoCongresoBundle:Congreso:show.html.twig", 39)->display(array_merge($context, array("cientificos" => ($context["cientificos"] ?? $this->getContext($context, "cientificos")))));
        // line 40
        echo "</div>
";
        
        $__internal_ef971848a96638ff642500a2541df4cf02130843f239014a8197eb90a32f0f9c->leave($__internal_ef971848a96638ff642500a2541df4cf02130843f239014a8197eb90a32f0f9c_prof);

    }

    public function getTemplateName()
    {
        return "CongresoCongresoBundle:Congreso:show.html.twig";
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
\t<div class=\"date\">Fecha de publicación: {{ articulo.ParsearFecha }}</div>
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
{% include 'CongresoCongresoBundle:Track:list.html.twig' with { 'track': track } %}
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

", "CongresoCongresoBundle:Congreso:show.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Congreso/show.html.twig");
    }
}
