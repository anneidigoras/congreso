<?php

/* CongresoCongresoBundle:Congreso:show.html.twig */
class __TwigTemplate_3dff56d62effeac3120bbe5c361666a604ad6c1475d5617d11c560b21697d77d extends Twig_Template
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
        $__internal_b163f81b93389eb2689a9991b3bdf511c8aa4dd29e33cd2072ae4d3dc2150c5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b163f81b93389eb2689a9991b3bdf511c8aa4dd29e33cd2072ae4d3dc2150c5f->enter($__internal_b163f81b93389eb2689a9991b3bdf511c8aa4dd29e33cd2072ae4d3dc2150c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b163f81b93389eb2689a9991b3bdf511c8aa4dd29e33cd2072ae4d3dc2150c5f->leave($__internal_b163f81b93389eb2689a9991b3bdf511c8aa4dd29e33cd2072ae4d3dc2150c5f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d515717e31208309f9cbed0d4559286ea30833b5aa99b4c82394b0d1fddba061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d515717e31208309f9cbed0d4559286ea30833b5aa99b4c82394b0d1fddba061->enter($__internal_d515717e31208309f9cbed0d4559286ea30833b5aa99b4c82394b0d1fddba061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Artículo seleccionado";
        
        $__internal_d515717e31208309f9cbed0d4559286ea30833b5aa99b4c82394b0d1fddba061->leave($__internal_d515717e31208309f9cbed0d4559286ea30833b5aa99b4c82394b0d1fddba061_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_af82413dd49d3cc6c7f22d8743f33afb005387ee1fd1d5f75222149db841e297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af82413dd49d3cc6c7f22d8743f33afb005387ee1fd1d5f75222149db841e297->enter($__internal_af82413dd49d3cc6c7f22d8743f33afb005387ee1fd1d5f75222149db841e297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_af82413dd49d3cc6c7f22d8743f33afb005387ee1fd1d5f75222149db841e297->leave($__internal_af82413dd49d3cc6c7f22d8743f33afb005387ee1fd1d5f75222149db841e297_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_42d395d0252c1d17854f6e38b865878ed3446c3abee897a7e58963bc8c5334f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42d395d0252c1d17854f6e38b865878ed3446c3abee897a7e58963bc8c5334f9->enter($__internal_42d395d0252c1d17854f6e38b865878ed3446c3abee897a7e58963bc8c5334f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/congreso.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_42d395d0252c1d17854f6e38b865878ed3446c3abee897a7e58963bc8c5334f9->leave($__internal_42d395d0252c1d17854f6e38b865878ed3446c3abee897a7e58963bc8c5334f9_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_a3854c45e88d2a0a1a9ac470ddba1b26c4a4bbfee052380f1e5ffb4474b55f0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3854c45e88d2a0a1a9ac470ddba1b26c4a4bbfee052380f1e5ffb4474b55f0a->enter($__internal_a3854c45e88d2a0a1a9ac470ddba1b26c4a4bbfee052380f1e5ffb4474b55f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "<div class=\"tracks\">
";
        // line 29
        $this->loadTemplate("CongresoCongresoBundle:Track:list.html.twig", "CongresoCongresoBundle:Congreso:show.html.twig", 29)->display(array_merge($context, array("tracks" => ($context["tracks"] ?? $this->getContext($context, "tracks")))));
        // line 30
        echo "</div>
";
        
        $__internal_a3854c45e88d2a0a1a9ac470ddba1b26c4a4bbfee052380f1e5ffb4474b55f0a->leave($__internal_a3854c45e88d2a0a1a9ac470ddba1b26c4a4bbfee052380f1e5ffb4474b55f0a_prof);

    }

    // line 33
    public function block_linea($context, array $blocks = array())
    {
        $__internal_3744f07eb5fb2884609ce8ce21e6bd9c6e9b6cca9706d173272b0855865c84ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3744f07eb5fb2884609ce8ce21e6bd9c6e9b6cca9706d173272b0855865c84ff->enter($__internal_3744f07eb5fb2884609ce8ce21e6bd9c6e9b6cca9706d173272b0855865c84ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        // line 34
        echo "<div class=\"separator\"></div>
";
        
        $__internal_3744f07eb5fb2884609ce8ce21e6bd9c6e9b6cca9706d173272b0855865c84ff->leave($__internal_3744f07eb5fb2884609ce8ce21e6bd9c6e9b6cca9706d173272b0855865c84ff_prof);

    }

    // line 37
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_29017546f6c83274fbee97b4b84376d2df426ce24d91f2bc6bcc4ec2a11564fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29017546f6c83274fbee97b4b84376d2df426ce24d91f2bc6bcc4ec2a11564fe->enter($__internal_29017546f6c83274fbee97b4b84376d2df426ce24d91f2bc6bcc4ec2a11564fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        // line 38
        echo "<div class=\"cientificos\">
";
        // line 39
        $this->loadTemplate("CongresoCongresoBundle:Cientifico:list.html.twig", "CongresoCongresoBundle:Congreso:show.html.twig", 39)->display(array_merge($context, array("cientificos" => ($context["cientificos"] ?? $this->getContext($context, "cientificos")))));
        // line 40
        echo "</div>
<div class=\"separator\"></div>
<p class=\"continue\"><a href=\"/\">Volver a la Home</a></p>
<p class=\"continue\"><a href=\"/contact\">Contacto</a></p>
";
        
        $__internal_29017546f6c83274fbee97b4b84376d2df426ce24d91f2bc6bcc4ec2a11564fe->leave($__internal_29017546f6c83274fbee97b4b84376d2df426ce24d91f2bc6bcc4ec2a11564fe_prof);

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
<div class=\"separator\"></div>
<p class=\"continue\"><a href=\"/\">Volver a la Home</a></p>
<p class=\"continue\"><a href=\"/contact\">Contacto</a></p>
{% endblock %}

", "CongresoCongresoBundle:Congreso:show.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Congreso/show.html.twig");
    }
}
