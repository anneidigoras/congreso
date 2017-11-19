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
        $__internal_4a94115c8062d99f2746f175a91a5f842be5b002430bf4b1f7bc742317b14036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a94115c8062d99f2746f175a91a5f842be5b002430bf4b1f7bc742317b14036->enter($__internal_4a94115c8062d99f2746f175a91a5f842be5b002430bf4b1f7bc742317b14036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a94115c8062d99f2746f175a91a5f842be5b002430bf4b1f7bc742317b14036->leave($__internal_4a94115c8062d99f2746f175a91a5f842be5b002430bf4b1f7bc742317b14036_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3183caf802e03dcf6e06ef1fa58853143d659b4e461c574f50eea51ac4734a93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3183caf802e03dcf6e06ef1fa58853143d659b4e461c574f50eea51ac4734a93->enter($__internal_3183caf802e03dcf6e06ef1fa58853143d659b4e461c574f50eea51ac4734a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "List of Articulos";
        
        $__internal_3183caf802e03dcf6e06ef1fa58853143d659b4e461c574f50eea51ac4734a93->leave($__internal_3183caf802e03dcf6e06ef1fa58853143d659b4e461c574f50eea51ac4734a93_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_90c278d6535d9e4948995aa9c7150acc73451409e82c3549bc3d6ab35d851583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90c278d6535d9e4948995aa9c7150acc73451409e82c3549bc3d6ab35d851583->enter($__internal_90c278d6535d9e4948995aa9c7150acc73451409e82c3549bc3d6ab35d851583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_90c278d6535d9e4948995aa9c7150acc73451409e82c3549bc3d6ab35d851583->leave($__internal_90c278d6535d9e4948995aa9c7150acc73451409e82c3549bc3d6ab35d851583_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a0a9f34e8450a4c929caf64e26a4f7d00f6367bfd110892f1eb4c157c94ade3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0a9f34e8450a4c929caf64e26a4f7d00f6367bfd110892f1eb4c157c94ade3a->enter($__internal_a0a9f34e8450a4c929caf64e26a4f7d00f6367bfd110892f1eb4c157c94ade3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 21
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/congreso.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_a0a9f34e8450a4c929caf64e26a4f7d00f6367bfd110892f1eb4c157c94ade3a->leave($__internal_a0a9f34e8450a4c929caf64e26a4f7d00f6367bfd110892f1eb4c157c94ade3a_prof);

    }

    // line 25
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_0ba40310261b82a2f2c095cbe38b0e20a74a9828cc82ca5fc6df6572383bbcb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ba40310261b82a2f2c095cbe38b0e20a74a9828cc82ca5fc6df6572383bbcb3->enter($__internal_0ba40310261b82a2f2c095cbe38b0e20a74a9828cc82ca5fc6df6572383bbcb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 26
        echo "<div class=\"tracks\">
";
        // line 27
        $this->loadTemplate("CongresoCongresoBundle:Track:list.html.twig", "CongresoCongresoBundle:Congreso:show.html.twig", 27)->display(array_merge($context, array("tracks" => ($context["tracks"] ?? $this->getContext($context, "tracks")))));
        // line 28
        echo "</div>
";
        
        $__internal_0ba40310261b82a2f2c095cbe38b0e20a74a9828cc82ca5fc6df6572383bbcb3->leave($__internal_0ba40310261b82a2f2c095cbe38b0e20a74a9828cc82ca5fc6df6572383bbcb3_prof);

    }

    // line 31
    public function block_linea($context, array $blocks = array())
    {
        $__internal_1970c225e224961031cce2cd3f4289b02b20cc65b64303d73ed79a35c712e1a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1970c225e224961031cce2cd3f4289b02b20cc65b64303d73ed79a35c712e1a1->enter($__internal_1970c225e224961031cce2cd3f4289b02b20cc65b64303d73ed79a35c712e1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        // line 32
        echo "<p>-----------------</p>
";
        
        $__internal_1970c225e224961031cce2cd3f4289b02b20cc65b64303d73ed79a35c712e1a1->leave($__internal_1970c225e224961031cce2cd3f4289b02b20cc65b64303d73ed79a35c712e1a1_prof);

    }

    // line 35
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_e6eb4585e6aca478b94bbca7c4ecbe46e6594ddd95ce2d008e123a0614489206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6eb4585e6aca478b94bbca7c4ecbe46e6594ddd95ce2d008e123a0614489206->enter($__internal_e6eb4585e6aca478b94bbca7c4ecbe46e6594ddd95ce2d008e123a0614489206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        // line 36
        echo "<div class=\"cientificos\">
";
        // line 37
        $this->loadTemplate("CongresoCongresoBundle:Cientifico:list.html.twig", "CongresoCongresoBundle:Congreso:show.html.twig", 37)->display(array_merge($context, array("cientificos" => ($context["cientificos"] ?? $this->getContext($context, "cientificos")))));
        // line 38
        echo "</div>
";
        
        $__internal_e6eb4585e6aca478b94bbca7c4ecbe46e6594ddd95ce2d008e123a0614489206->leave($__internal_e6eb4585e6aca478b94bbca7c4ecbe46e6594ddd95ce2d008e123a0614489206_prof);

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


", "CongresoCongresoBundle:Congreso:show.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Congreso/show.html.twig");
    }
}
