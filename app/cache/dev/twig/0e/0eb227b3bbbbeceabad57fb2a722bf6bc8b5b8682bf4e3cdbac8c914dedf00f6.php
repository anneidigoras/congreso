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
        );
    }

    protected function doGetParent(array $context)
    {
        return "CongresoCongresoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d802e2a447dfca7d137fe28e981ffc8f14fe2534f102c46e7bd697d40bdcc289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d802e2a447dfca7d137fe28e981ffc8f14fe2534f102c46e7bd697d40bdcc289->enter($__internal_d802e2a447dfca7d137fe28e981ffc8f14fe2534f102c46e7bd697d40bdcc289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Congreso/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d802e2a447dfca7d137fe28e981ffc8f14fe2534f102c46e7bd697d40bdcc289->leave($__internal_d802e2a447dfca7d137fe28e981ffc8f14fe2534f102c46e7bd697d40bdcc289_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8011649fa3e9476e9491adcf931e72ec439212ddeaac54c9dba29e5e0bf5da80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8011649fa3e9476e9491adcf931e72ec439212ddeaac54c9dba29e5e0bf5da80->enter($__internal_8011649fa3e9476e9491adcf931e72ec439212ddeaac54c9dba29e5e0bf5da80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "List of Articulos";
        
        $__internal_8011649fa3e9476e9491adcf931e72ec439212ddeaac54c9dba29e5e0bf5da80->leave($__internal_8011649fa3e9476e9491adcf931e72ec439212ddeaac54c9dba29e5e0bf5da80_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f1b050aadcf144949c4afd21eee50c62a28904456cadf9480dbefd007aa4d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f1b050aadcf144949c4afd21eee50c62a28904456cadf9480dbefd007aa4d9a->enter($__internal_1f1b050aadcf144949c4afd21eee50c62a28904456cadf9480dbefd007aa4d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1f1b050aadcf144949c4afd21eee50c62a28904456cadf9480dbefd007aa4d9a->leave($__internal_1f1b050aadcf144949c4afd21eee50c62a28904456cadf9480dbefd007aa4d9a_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_83e204550caf64beefa3ff12f50dcdc9c97c639b9b04b307abd4930d613a3f9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83e204550caf64beefa3ff12f50dcdc9c97c639b9b04b307abd4930d613a3f9d->enter($__internal_83e204550caf64beefa3ff12f50dcdc9c97c639b9b04b307abd4930d613a3f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 21
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_83e204550caf64beefa3ff12f50dcdc9c97c639b9b04b307abd4930d613a3f9d->leave($__internal_83e204550caf64beefa3ff12f50dcdc9c97c639b9b04b307abd4930d613a3f9d_prof);

    }

    // line 25
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ed26fc013556c2a8345c9bd2c69464fa46f89c1ba3303ab8b4c25c964b4b0891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed26fc013556c2a8345c9bd2c69464fa46f89c1ba3303ab8b4c25c964b4b0891->enter($__internal_ed26fc013556c2a8345c9bd2c69464fa46f89c1ba3303ab8b4c25c964b4b0891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 26
        echo "
<div class=\"tracks\">

";
        // line 29
        $this->loadTemplate("CongresoCongresoBundle:Track:list.html.twig", "@CongresoCongreso/Congreso/show.html.twig", 29)->display(array_merge($context, array("tracks" => ($context["tracks"] ?? $this->getContext($context, "tracks")))));
        // line 30
        echo "
</div>

<div class=\"cientificos\">

";
        // line 35
        $this->loadTemplate("CongresoCongresoBundle:Cientifico:list.html.twig", "@CongresoCongreso/Congreso/show.html.twig", 35)->display(array_merge($context, array("cientificos" => ($context["cientificos"] ?? $this->getContext($context, "cientificos")))));
        // line 36
        echo "
</div>

";
        
        $__internal_ed26fc013556c2a8345c9bd2c69464fa46f89c1ba3303ab8b4c25c964b4b0891->leave($__internal_ed26fc013556c2a8345c9bd2c69464fa46f89c1ba3303ab8b4c25c964b4b0891_prof);

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
        return array (  129 => 36,  127 => 35,  120 => 30,  118 => 29,  113 => 26,  107 => 25,  98 => 22,  94 => 21,  88 => 20,  78 => 16,  74 => 14,  72 => 13,  65 => 9,  61 => 8,  55 => 6,  49 => 5,  37 => 3,  11 => 2,);
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
<link href=\"{{ asset('css/blog.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
{% endblock %}

{% block sidebar %}

<div class=\"tracks\">

{% include 'CongresoCongresoBundle:Track:list.html.twig' with { 'tracks': tracks } %}

</div>

<div class=\"cientificos\">

{% include 'CongresoCongresoBundle:Cientifico:list.html.twig' with { 'cientificos': cientificos } %}

</div>

{% endblock %}", "@CongresoCongreso/Congreso/show.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Congreso\\show.html.twig");
    }
}
