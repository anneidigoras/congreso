<?php

/* CongresoCongresoBundle:Congreso:show.html.twig */
class __TwigTemplate_c05eb13111fa5d5e98e16d3edbbfcb47ad6e019fdc13342d5866d786dd487efc extends Twig_Template
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
        $__internal_0b7d41840e467519357b8397845a740a295c110fc0e461c95580883923d2a66e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b7d41840e467519357b8397845a740a295c110fc0e461c95580883923d2a66e->enter($__internal_0b7d41840e467519357b8397845a740a295c110fc0e461c95580883923d2a66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b7d41840e467519357b8397845a740a295c110fc0e461c95580883923d2a66e->leave($__internal_0b7d41840e467519357b8397845a740a295c110fc0e461c95580883923d2a66e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8171a04255b9725c0b5a97b5d78d25a5f62b33017e11cd999b1f6c80db372ccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8171a04255b9725c0b5a97b5d78d25a5f62b33017e11cd999b1f6c80db372ccf->enter($__internal_8171a04255b9725c0b5a97b5d78d25a5f62b33017e11cd999b1f6c80db372ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "List of Articulos";
        
        $__internal_8171a04255b9725c0b5a97b5d78d25a5f62b33017e11cd999b1f6c80db372ccf->leave($__internal_8171a04255b9725c0b5a97b5d78d25a5f62b33017e11cd999b1f6c80db372ccf_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4daf67357d15c9627c9d8076f667ea625ddd48a5a331f525d941d80a7472055b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4daf67357d15c9627c9d8076f667ea625ddd48a5a331f525d941d80a7472055b->enter($__internal_4daf67357d15c9627c9d8076f667ea625ddd48a5a331f525d941d80a7472055b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("CongresoCongresoBundle:Comment:list.html.twig", "CongresoCongresoBundle:Congreso:show.html.twig", 13)->display(array_merge($context, array("comments" => ($context["comments"] ?? $this->getContext($context, "comments")))));
        // line 14
        echo "\t\t</section>
\t\t<h3>Añadir comentario</h3>
\t\t";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("CongresoCongresoBundle:Comment:new", array("articulo_id" => $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "id", array()))));
        echo "
    </section>
";
        
        $__internal_4daf67357d15c9627c9d8076f667ea625ddd48a5a331f525d941d80a7472055b->leave($__internal_4daf67357d15c9627c9d8076f667ea625ddd48a5a331f525d941d80a7472055b_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_28fede80849c162e29570d9be83807b2347a254ed90dd62d9fb58207e80e72ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28fede80849c162e29570d9be83807b2347a254ed90dd62d9fb58207e80e72ba->enter($__internal_28fede80849c162e29570d9be83807b2347a254ed90dd62d9fb58207e80e72ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 21
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/congreso.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_28fede80849c162e29570d9be83807b2347a254ed90dd62d9fb58207e80e72ba->leave($__internal_28fede80849c162e29570d9be83807b2347a254ed90dd62d9fb58207e80e72ba_prof);

    }

    // line 25
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_110638a5cfeab79d1fa8bc20fdd63100c00f8cae5c0de2396424966150acc06c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_110638a5cfeab79d1fa8bc20fdd63100c00f8cae5c0de2396424966150acc06c->enter($__internal_110638a5cfeab79d1fa8bc20fdd63100c00f8cae5c0de2396424966150acc06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 26
        echo "<div class=\"tracks\">
";
        // line 27
        $this->loadTemplate("CongresoCongresoBundle:Track:list.html.twig", "CongresoCongresoBundle:Congreso:show.html.twig", 27)->display(array_merge($context, array("tracks" => ($context["tracks"] ?? $this->getContext($context, "tracks")))));
        // line 28
        echo "</div>
";
        
        $__internal_110638a5cfeab79d1fa8bc20fdd63100c00f8cae5c0de2396424966150acc06c->leave($__internal_110638a5cfeab79d1fa8bc20fdd63100c00f8cae5c0de2396424966150acc06c_prof);

    }

    // line 31
    public function block_linea($context, array $blocks = array())
    {
        $__internal_711e235a8054e027efa9c186bf1f8e7dffe0e15c87c33c2937b2d19b13ad638d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_711e235a8054e027efa9c186bf1f8e7dffe0e15c87c33c2937b2d19b13ad638d->enter($__internal_711e235a8054e027efa9c186bf1f8e7dffe0e15c87c33c2937b2d19b13ad638d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        // line 32
        echo "<p>-----------------</p>
";
        
        $__internal_711e235a8054e027efa9c186bf1f8e7dffe0e15c87c33c2937b2d19b13ad638d->leave($__internal_711e235a8054e027efa9c186bf1f8e7dffe0e15c87c33c2937b2d19b13ad638d_prof);

    }

    // line 35
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_108efe94b76ebd44343c307035fe0683011e83ebc1678860e292bd73b8b1c397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_108efe94b76ebd44343c307035fe0683011e83ebc1678860e292bd73b8b1c397->enter($__internal_108efe94b76ebd44343c307035fe0683011e83ebc1678860e292bd73b8b1c397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        // line 36
        echo "<div class=\"cientificos\">
";
        // line 37
        $this->loadTemplate("CongresoCongresoBundle:Cientifico:list.html.twig", "CongresoCongresoBundle:Congreso:show.html.twig", 37)->display(array_merge($context, array("cientificos" => ($context["cientificos"] ?? $this->getContext($context, "cientificos")))));
        // line 38
        echo "</div>
";
        
        $__internal_108efe94b76ebd44343c307035fe0683011e83ebc1678860e292bd73b8b1c397->leave($__internal_108efe94b76ebd44343c307035fe0683011e83ebc1678860e292bd73b8b1c397_prof);

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


", "CongresoCongresoBundle:Congreso:show.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Congreso\\show.html.twig");
    }
}
