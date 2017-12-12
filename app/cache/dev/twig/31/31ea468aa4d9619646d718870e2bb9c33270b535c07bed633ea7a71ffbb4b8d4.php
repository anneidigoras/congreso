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
        $__internal_db89f248bcd7550442050d8e12bcc6843da614b1a938d4b76018a049f697e414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db89f248bcd7550442050d8e12bcc6843da614b1a938d4b76018a049f697e414->enter($__internal_db89f248bcd7550442050d8e12bcc6843da614b1a938d4b76018a049f697e414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Congreso/showIng.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db89f248bcd7550442050d8e12bcc6843da614b1a938d4b76018a049f697e414->leave($__internal_db89f248bcd7550442050d8e12bcc6843da614b1a938d4b76018a049f697e414_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3639237641abd5e86358350c899dc84fddb79c08fba5068f28747ed402b0572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3639237641abd5e86358350c899dc84fddb79c08fba5068f28747ed402b0572->enter($__internal_c3639237641abd5e86358350c899dc84fddb79c08fba5068f28747ed402b0572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Selected article";
        
        $__internal_c3639237641abd5e86358350c899dc84fddb79c08fba5068f28747ed402b0572->leave($__internal_c3639237641abd5e86358350c899dc84fddb79c08fba5068f28747ed402b0572_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3a696e5be4272aa37ad67fac4cd2081f74e7d29fb4bfa9de60c4d5e3c4abb51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3a696e5be4272aa37ad67fac4cd2081f74e7d29fb4bfa9de60c4d5e3c4abb51->enter($__internal_b3a696e5be4272aa37ad67fac4cd2081f74e7d29fb4bfa9de60c4d5e3c4abb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b3a696e5be4272aa37ad67fac4cd2081f74e7d29fb4bfa9de60c4d5e3c4abb51->leave($__internal_b3a696e5be4272aa37ad67fac4cd2081f74e7d29fb4bfa9de60c4d5e3c4abb51_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b1f9a367fdabff085bc6fd8b71d8204fdad485036613bd0288682f1ffc9e147a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1f9a367fdabff085bc6fd8b71d8204fdad485036613bd0288682f1ffc9e147a->enter($__internal_b1f9a367fdabff085bc6fd8b71d8204fdad485036613bd0288682f1ffc9e147a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/congreso.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_b1f9a367fdabff085bc6fd8b71d8204fdad485036613bd0288682f1ffc9e147a->leave($__internal_b1f9a367fdabff085bc6fd8b71d8204fdad485036613bd0288682f1ffc9e147a_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ee189f45d86942ea39790ba63a427069a6fee21f40e9e7761489f5ba47e22c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee189f45d86942ea39790ba63a427069a6fee21f40e9e7761489f5ba47e22c45->enter($__internal_ee189f45d86942ea39790ba63a427069a6fee21f40e9e7761489f5ba47e22c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "<div class=\"tracks\">
";
        // line 29
        $this->loadTemplate("CongresoCongresoBundle:Track:list.html.twig", "@CongresoCongreso/Congreso/showIng.html.twig", 29)->display(array_merge($context, array("tracks" => ($context["tracks"] ?? $this->getContext($context, "tracks")))));
        // line 30
        echo "</div>
";
        
        $__internal_ee189f45d86942ea39790ba63a427069a6fee21f40e9e7761489f5ba47e22c45->leave($__internal_ee189f45d86942ea39790ba63a427069a6fee21f40e9e7761489f5ba47e22c45_prof);

    }

    // line 33
    public function block_linea($context, array $blocks = array())
    {
        $__internal_e8a3c008605a756d3832198de4ca029da3cb0b463ac70b03022423de95f65e9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8a3c008605a756d3832198de4ca029da3cb0b463ac70b03022423de95f65e9f->enter($__internal_e8a3c008605a756d3832198de4ca029da3cb0b463ac70b03022423de95f65e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        // line 34
        echo "<div class=\"separator\"></div>
";
        
        $__internal_e8a3c008605a756d3832198de4ca029da3cb0b463ac70b03022423de95f65e9f->leave($__internal_e8a3c008605a756d3832198de4ca029da3cb0b463ac70b03022423de95f65e9f_prof);

    }

    // line 37
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_fdffbf9e0f7c6cace3be3577a1b2180d9e00e54e0415e36854d947142f83f59f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdffbf9e0f7c6cace3be3577a1b2180d9e00e54e0415e36854d947142f83f59f->enter($__internal_fdffbf9e0f7c6cace3be3577a1b2180d9e00e54e0415e36854d947142f83f59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

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
        
        $__internal_fdffbf9e0f7c6cace3be3577a1b2180d9e00e54e0415e36854d947142f83f59f->leave($__internal_fdffbf9e0f7c6cace3be3577a1b2180d9e00e54e0415e36854d947142f83f59f_prof);

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
