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
        $__internal_4e54b5ff88c5f390125d13421cccea0bbcd8a81f6f53f8f5d5107db0846d9f81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e54b5ff88c5f390125d13421cccea0bbcd8a81f6f53f8f5d5107db0846d9f81->enter($__internal_4e54b5ff88c5f390125d13421cccea0bbcd8a81f6f53f8f5d5107db0846d9f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Congreso/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e54b5ff88c5f390125d13421cccea0bbcd8a81f6f53f8f5d5107db0846d9f81->leave($__internal_4e54b5ff88c5f390125d13421cccea0bbcd8a81f6f53f8f5d5107db0846d9f81_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8af74afe173fa0ab65e01e8868d43fb6676eb71158b5acf986a66ff91c4c0e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8af74afe173fa0ab65e01e8868d43fb6676eb71158b5acf986a66ff91c4c0e1->enter($__internal_e8af74afe173fa0ab65e01e8868d43fb6676eb71158b5acf986a66ff91c4c0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Artículo seleccionado";
        
        $__internal_e8af74afe173fa0ab65e01e8868d43fb6676eb71158b5acf986a66ff91c4c0e1->leave($__internal_e8af74afe173fa0ab65e01e8868d43fb6676eb71158b5acf986a66ff91c4c0e1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7cc438ff93ab7e09604db442e3beb5044418ac83fff1a1be2bc4ceb90f323d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cc438ff93ab7e09604db442e3beb5044418ac83fff1a1be2bc4ceb90f323d06->enter($__internal_7cc438ff93ab7e09604db442e3beb5044418ac83fff1a1be2bc4ceb90f323d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7cc438ff93ab7e09604db442e3beb5044418ac83fff1a1be2bc4ceb90f323d06->leave($__internal_7cc438ff93ab7e09604db442e3beb5044418ac83fff1a1be2bc4ceb90f323d06_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_71f987afae4627541139fb400c67baa947fdcbe01d831b2678245503a5cfb196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71f987afae4627541139fb400c67baa947fdcbe01d831b2678245503a5cfb196->enter($__internal_71f987afae4627541139fb400c67baa947fdcbe01d831b2678245503a5cfb196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/congreso.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_71f987afae4627541139fb400c67baa947fdcbe01d831b2678245503a5cfb196->leave($__internal_71f987afae4627541139fb400c67baa947fdcbe01d831b2678245503a5cfb196_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_95bf18de4d82de62e0f9ea0d8254ace380f5e4c37eb0df0c61bb382fa4d8191c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95bf18de4d82de62e0f9ea0d8254ace380f5e4c37eb0df0c61bb382fa4d8191c->enter($__internal_95bf18de4d82de62e0f9ea0d8254ace380f5e4c37eb0df0c61bb382fa4d8191c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "<div class=\"tracks\">
";
        // line 29
        $this->loadTemplate("CongresoCongresoBundle:Track:list.html.twig", "@CongresoCongreso/Congreso/show.html.twig", 29)->display(array_merge($context, array("track" => ($context["track"] ?? $this->getContext($context, "track")))));
        // line 30
        echo "</div>
";
        
        $__internal_95bf18de4d82de62e0f9ea0d8254ace380f5e4c37eb0df0c61bb382fa4d8191c->leave($__internal_95bf18de4d82de62e0f9ea0d8254ace380f5e4c37eb0df0c61bb382fa4d8191c_prof);

    }

    // line 33
    public function block_linea($context, array $blocks = array())
    {
        $__internal_3c1071f59325612ac9c5ea20657413f2adbc906ae5c3eb062198d9d124643d6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c1071f59325612ac9c5ea20657413f2adbc906ae5c3eb062198d9d124643d6b->enter($__internal_3c1071f59325612ac9c5ea20657413f2adbc906ae5c3eb062198d9d124643d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        // line 34
        echo "<div class=\"separator\"></div>
";
        
        $__internal_3c1071f59325612ac9c5ea20657413f2adbc906ae5c3eb062198d9d124643d6b->leave($__internal_3c1071f59325612ac9c5ea20657413f2adbc906ae5c3eb062198d9d124643d6b_prof);

    }

    // line 37
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_b39f6e57eec6efeda76318feb8ec61c1a065b4fdc2739935e881621264f3a8a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b39f6e57eec6efeda76318feb8ec61c1a065b4fdc2739935e881621264f3a8a6->enter($__internal_b39f6e57eec6efeda76318feb8ec61c1a065b4fdc2739935e881621264f3a8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        // line 38
        echo "<div class=\"cientificos\">
";
        // line 39
        $this->loadTemplate("CongresoCongresoBundle:Cientifico:list.html.twig", "@CongresoCongreso/Congreso/show.html.twig", 39)->display(array_merge($context, array("cientificos" => ($context["cientificos"] ?? $this->getContext($context, "cientificos")))));
        // line 40
        echo "</div>
";
        
        $__internal_b39f6e57eec6efeda76318feb8ec61c1a065b4fdc2739935e881621264f3a8a6->leave($__internal_b39f6e57eec6efeda76318feb8ec61c1a065b4fdc2739935e881621264f3a8a6_prof);

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

", "@CongresoCongreso/Congreso/show.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Congreso\\show.html.twig");
    }
}
