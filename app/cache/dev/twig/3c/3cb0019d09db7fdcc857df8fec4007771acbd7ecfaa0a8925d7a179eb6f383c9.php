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
        $__internal_0959cb3f4f332d4c80c95547118d1a18b67883e47dba0fe4a42b7fef979f87f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0959cb3f4f332d4c80c95547118d1a18b67883e47dba0fe4a42b7fef979f87f7->enter($__internal_0959cb3f4f332d4c80c95547118d1a18b67883e47dba0fe4a42b7fef979f87f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0959cb3f4f332d4c80c95547118d1a18b67883e47dba0fe4a42b7fef979f87f7->leave($__internal_0959cb3f4f332d4c80c95547118d1a18b67883e47dba0fe4a42b7fef979f87f7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9f3b3326d987b057dc5e449a625d795abfd191d0c7e74c4a00f7d66d51e0a6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9f3b3326d987b057dc5e449a625d795abfd191d0c7e74c4a00f7d66d51e0a6d->enter($__internal_f9f3b3326d987b057dc5e449a625d795abfd191d0c7e74c4a00f7d66d51e0a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Artículo seleccionado";
        
        $__internal_f9f3b3326d987b057dc5e449a625d795abfd191d0c7e74c4a00f7d66d51e0a6d->leave($__internal_f9f3b3326d987b057dc5e449a625d795abfd191d0c7e74c4a00f7d66d51e0a6d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_995b65d7eebbe1bd0e8a65202f114a9594a6edb3ee488c618afcb894f3d639aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_995b65d7eebbe1bd0e8a65202f114a9594a6edb3ee488c618afcb894f3d639aa->enter($__internal_995b65d7eebbe1bd0e8a65202f114a9594a6edb3ee488c618afcb894f3d639aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_995b65d7eebbe1bd0e8a65202f114a9594a6edb3ee488c618afcb894f3d639aa->leave($__internal_995b65d7eebbe1bd0e8a65202f114a9594a6edb3ee488c618afcb894f3d639aa_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7f47af32ae96e31e68f102a359073d435a32022cabd75b32a55955bf175afffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f47af32ae96e31e68f102a359073d435a32022cabd75b32a55955bf175afffc->enter($__internal_7f47af32ae96e31e68f102a359073d435a32022cabd75b32a55955bf175afffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/congreso.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_7f47af32ae96e31e68f102a359073d435a32022cabd75b32a55955bf175afffc->leave($__internal_7f47af32ae96e31e68f102a359073d435a32022cabd75b32a55955bf175afffc_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_dc9d1df2ca26c59b259312bfc8a9ca9fe738bcddb963b761ab9275d6e1f379b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc9d1df2ca26c59b259312bfc8a9ca9fe738bcddb963b761ab9275d6e1f379b1->enter($__internal_dc9d1df2ca26c59b259312bfc8a9ca9fe738bcddb963b761ab9275d6e1f379b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "<div class=\"tracks\">
";
        // line 29
        $this->loadTemplate("CongresoCongresoBundle:Track:list.html.twig", "CongresoCongresoBundle:Congreso:show.html.twig", 29)->display(array_merge($context, array("tracks" => ($context["tracks"] ?? $this->getContext($context, "tracks")))));
        // line 30
        echo "</div>
";
        
        $__internal_dc9d1df2ca26c59b259312bfc8a9ca9fe738bcddb963b761ab9275d6e1f379b1->leave($__internal_dc9d1df2ca26c59b259312bfc8a9ca9fe738bcddb963b761ab9275d6e1f379b1_prof);

    }

    // line 33
    public function block_linea($context, array $blocks = array())
    {
        $__internal_81fe173d2cf2820613688514603c2eea3a9f929e5ce06f6d682cc8a6fd69c8af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81fe173d2cf2820613688514603c2eea3a9f929e5ce06f6d682cc8a6fd69c8af->enter($__internal_81fe173d2cf2820613688514603c2eea3a9f929e5ce06f6d682cc8a6fd69c8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        // line 34
        echo "<div class=\"separator\"></div>
";
        
        $__internal_81fe173d2cf2820613688514603c2eea3a9f929e5ce06f6d682cc8a6fd69c8af->leave($__internal_81fe173d2cf2820613688514603c2eea3a9f929e5ce06f6d682cc8a6fd69c8af_prof);

    }

    // line 37
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_0ec44a5426ca6ed8a9b38a4a162a01ce7b9c61f78ddbcc95363dd9dd3262a5c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ec44a5426ca6ed8a9b38a4a162a01ce7b9c61f78ddbcc95363dd9dd3262a5c7->enter($__internal_0ec44a5426ca6ed8a9b38a4a162a01ce7b9c61f78ddbcc95363dd9dd3262a5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

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
        
        $__internal_0ec44a5426ca6ed8a9b38a4a162a01ce7b9c61f78ddbcc95363dd9dd3262a5c7->leave($__internal_0ec44a5426ca6ed8a9b38a4a162a01ce7b9c61f78ddbcc95363dd9dd3262a5c7_prof);

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
