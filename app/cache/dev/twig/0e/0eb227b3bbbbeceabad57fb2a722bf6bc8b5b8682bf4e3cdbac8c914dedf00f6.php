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
        $__internal_f3b368fe718df5bc80dc1bdfcc28288df0f6fab0bb60f26b49ca711186f1b5e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b368fe718df5bc80dc1bdfcc28288df0f6fab0bb60f26b49ca711186f1b5e5->enter($__internal_f3b368fe718df5bc80dc1bdfcc28288df0f6fab0bb60f26b49ca711186f1b5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Congreso/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3b368fe718df5bc80dc1bdfcc28288df0f6fab0bb60f26b49ca711186f1b5e5->leave($__internal_f3b368fe718df5bc80dc1bdfcc28288df0f6fab0bb60f26b49ca711186f1b5e5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e21e3cdc603322b71ea62983d62741a42a426ea880985800adb1f02ba7d4189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e21e3cdc603322b71ea62983d62741a42a426ea880985800adb1f02ba7d4189->enter($__internal_7e21e3cdc603322b71ea62983d62741a42a426ea880985800adb1f02ba7d4189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Artículo seleccionado";
        
        $__internal_7e21e3cdc603322b71ea62983d62741a42a426ea880985800adb1f02ba7d4189->leave($__internal_7e21e3cdc603322b71ea62983d62741a42a426ea880985800adb1f02ba7d4189_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e8aee5ea16c4ee7928b8f9c20c5486fbfeceb5de1ee0d71bd93cdb588e6a588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e8aee5ea16c4ee7928b8f9c20c5486fbfeceb5de1ee0d71bd93cdb588e6a588->enter($__internal_2e8aee5ea16c4ee7928b8f9c20c5486fbfeceb5de1ee0d71bd93cdb588e6a588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2e8aee5ea16c4ee7928b8f9c20c5486fbfeceb5de1ee0d71bd93cdb588e6a588->leave($__internal_2e8aee5ea16c4ee7928b8f9c20c5486fbfeceb5de1ee0d71bd93cdb588e6a588_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6765de8ecfb8ab08c29868752b0db1f14fdd84ba38a2ac8dc31bf5d7f011acd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6765de8ecfb8ab08c29868752b0db1f14fdd84ba38a2ac8dc31bf5d7f011acd3->enter($__internal_6765de8ecfb8ab08c29868752b0db1f14fdd84ba38a2ac8dc31bf5d7f011acd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/congreso.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_6765de8ecfb8ab08c29868752b0db1f14fdd84ba38a2ac8dc31bf5d7f011acd3->leave($__internal_6765de8ecfb8ab08c29868752b0db1f14fdd84ba38a2ac8dc31bf5d7f011acd3_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_088a85dbcc536c56eb57eb96b8bf38c2403dcf66926d75ad399a0e239a1c0808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_088a85dbcc536c56eb57eb96b8bf38c2403dcf66926d75ad399a0e239a1c0808->enter($__internal_088a85dbcc536c56eb57eb96b8bf38c2403dcf66926d75ad399a0e239a1c0808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "<div class=\"tracks\">
";
        // line 29
        $this->loadTemplate("CongresoCongresoBundle:Track:list.html.twig", "@CongresoCongreso/Congreso/show.html.twig", 29)->display(array_merge($context, array("tracks" => ($context["tracks"] ?? $this->getContext($context, "tracks")))));
        // line 30
        echo "</div>
";
        
        $__internal_088a85dbcc536c56eb57eb96b8bf38c2403dcf66926d75ad399a0e239a1c0808->leave($__internal_088a85dbcc536c56eb57eb96b8bf38c2403dcf66926d75ad399a0e239a1c0808_prof);

    }

    // line 33
    public function block_linea($context, array $blocks = array())
    {
        $__internal_9e4633c7840ef2b42a451b771a4cdcb0ec99f257bc8c698c59dc9928aff0bf26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e4633c7840ef2b42a451b771a4cdcb0ec99f257bc8c698c59dc9928aff0bf26->enter($__internal_9e4633c7840ef2b42a451b771a4cdcb0ec99f257bc8c698c59dc9928aff0bf26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        // line 34
        echo "<div class=\"separator\"></div>
";
        
        $__internal_9e4633c7840ef2b42a451b771a4cdcb0ec99f257bc8c698c59dc9928aff0bf26->leave($__internal_9e4633c7840ef2b42a451b771a4cdcb0ec99f257bc8c698c59dc9928aff0bf26_prof);

    }

    // line 37
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_26f161c5da0f6d711caf21dded5d880607351e65eba4b2fbe1969b730c8e1d56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f161c5da0f6d711caf21dded5d880607351e65eba4b2fbe1969b730c8e1d56->enter($__internal_26f161c5da0f6d711caf21dded5d880607351e65eba4b2fbe1969b730c8e1d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

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
        
        $__internal_26f161c5da0f6d711caf21dded5d880607351e65eba4b2fbe1969b730c8e1d56->leave($__internal_26f161c5da0f6d711caf21dded5d880607351e65eba4b2fbe1969b730c8e1d56_prof);

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

", "@CongresoCongreso/Congreso/show.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Congreso\\show.html.twig");
    }
}
