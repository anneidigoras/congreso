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
        $__internal_c1f271b88fe0d05c265de5564c8cea73cf8620332cdea15eec506ac74812cf0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f271b88fe0d05c265de5564c8cea73cf8620332cdea15eec506ac74812cf0f->enter($__internal_c1f271b88fe0d05c265de5564c8cea73cf8620332cdea15eec506ac74812cf0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1f271b88fe0d05c265de5564c8cea73cf8620332cdea15eec506ac74812cf0f->leave($__internal_c1f271b88fe0d05c265de5564c8cea73cf8620332cdea15eec506ac74812cf0f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ddd3af62c6a39d4139a7116501bc0d6249ee23b2324ed11dd86956a85335e50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ddd3af62c6a39d4139a7116501bc0d6249ee23b2324ed11dd86956a85335e50->enter($__internal_8ddd3af62c6a39d4139a7116501bc0d6249ee23b2324ed11dd86956a85335e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "List of Articulos";
        
        $__internal_8ddd3af62c6a39d4139a7116501bc0d6249ee23b2324ed11dd86956a85335e50->leave($__internal_8ddd3af62c6a39d4139a7116501bc0d6249ee23b2324ed11dd86956a85335e50_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3d257d56efd38e250fd735d56876c8f858bd90d6ea2342a824f19724ff934ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3d257d56efd38e250fd735d56876c8f858bd90d6ea2342a824f19724ff934ec->enter($__internal_a3d257d56efd38e250fd735d56876c8f858bd90d6ea2342a824f19724ff934ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a3d257d56efd38e250fd735d56876c8f858bd90d6ea2342a824f19724ff934ec->leave($__internal_a3d257d56efd38e250fd735d56876c8f858bd90d6ea2342a824f19724ff934ec_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_82b64127f6edaa0b6d12db0a3f583132bd5efbc52d0d9ce245648e9116c37bab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82b64127f6edaa0b6d12db0a3f583132bd5efbc52d0d9ce245648e9116c37bab->enter($__internal_82b64127f6edaa0b6d12db0a3f583132bd5efbc52d0d9ce245648e9116c37bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/congreso.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_82b64127f6edaa0b6d12db0a3f583132bd5efbc52d0d9ce245648e9116c37bab->leave($__internal_82b64127f6edaa0b6d12db0a3f583132bd5efbc52d0d9ce245648e9116c37bab_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_7decff8426212404aa4082d3748402b8bebd0d6dbf5d4ae1791438ca2dba6dfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7decff8426212404aa4082d3748402b8bebd0d6dbf5d4ae1791438ca2dba6dfb->enter($__internal_7decff8426212404aa4082d3748402b8bebd0d6dbf5d4ae1791438ca2dba6dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "<div class=\"tracks\">
";
        // line 29
        $this->loadTemplate("CongresoCongresoBundle:Track:list.html.twig", "CongresoCongresoBundle:Congreso:show.html.twig", 29)->display(array_merge($context, array("tracks" => ($context["tracks"] ?? $this->getContext($context, "tracks")))));
        // line 30
        echo "</div>
";
        
        $__internal_7decff8426212404aa4082d3748402b8bebd0d6dbf5d4ae1791438ca2dba6dfb->leave($__internal_7decff8426212404aa4082d3748402b8bebd0d6dbf5d4ae1791438ca2dba6dfb_prof);

    }

    // line 33
    public function block_linea($context, array $blocks = array())
    {
        $__internal_bda5d74849a0d2ab9178df848d7707a8f1a29838b42cdfe654e0993b410e884e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bda5d74849a0d2ab9178df848d7707a8f1a29838b42cdfe654e0993b410e884e->enter($__internal_bda5d74849a0d2ab9178df848d7707a8f1a29838b42cdfe654e0993b410e884e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        // line 34
        echo "<div class=\"separator\"></div>
";
        
        $__internal_bda5d74849a0d2ab9178df848d7707a8f1a29838b42cdfe654e0993b410e884e->leave($__internal_bda5d74849a0d2ab9178df848d7707a8f1a29838b42cdfe654e0993b410e884e_prof);

    }

    // line 37
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_d7cb43fc3e851e9da14afbb91fe816185dd97c046f63c1bc47e34a3d8ad64aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7cb43fc3e851e9da14afbb91fe816185dd97c046f63c1bc47e34a3d8ad64aff->enter($__internal_d7cb43fc3e851e9da14afbb91fe816185dd97c046f63c1bc47e34a3d8ad64aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

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
        
        $__internal_d7cb43fc3e851e9da14afbb91fe816185dd97c046f63c1bc47e34a3d8ad64aff->leave($__internal_d7cb43fc3e851e9da14afbb91fe816185dd97c046f63c1bc47e34a3d8ad64aff_prof);

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
{% block title %}List of Articulos{% endblock %}

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
