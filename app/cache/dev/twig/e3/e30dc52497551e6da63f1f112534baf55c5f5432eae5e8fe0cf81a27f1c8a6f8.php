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
        $__internal_0751799fea1a3a56480a4f478bbb71bccffc181b8db0bc3535c8fd284a0bbb0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0751799fea1a3a56480a4f478bbb71bccffc181b8db0bc3535c8fd284a0bbb0e->enter($__internal_0751799fea1a3a56480a4f478bbb71bccffc181b8db0bc3535c8fd284a0bbb0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0751799fea1a3a56480a4f478bbb71bccffc181b8db0bc3535c8fd284a0bbb0e->leave($__internal_0751799fea1a3a56480a4f478bbb71bccffc181b8db0bc3535c8fd284a0bbb0e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1dd3aa39ca0cbc7b0131444fafcefce8860bbbdd72bc667845139b860eaf958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1dd3aa39ca0cbc7b0131444fafcefce8860bbbdd72bc667845139b860eaf958->enter($__internal_d1dd3aa39ca0cbc7b0131444fafcefce8860bbbdd72bc667845139b860eaf958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "List of Articulos";
        
        $__internal_d1dd3aa39ca0cbc7b0131444fafcefce8860bbbdd72bc667845139b860eaf958->leave($__internal_d1dd3aa39ca0cbc7b0131444fafcefce8860bbbdd72bc667845139b860eaf958_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e2db84c7e799888eb22df1bc9557e061c9c0398267fd250e910a3beef0d3c04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e2db84c7e799888eb22df1bc9557e061c9c0398267fd250e910a3beef0d3c04->enter($__internal_6e2db84c7e799888eb22df1bc9557e061c9c0398267fd250e910a3beef0d3c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6e2db84c7e799888eb22df1bc9557e061c9c0398267fd250e910a3beef0d3c04->leave($__internal_6e2db84c7e799888eb22df1bc9557e061c9c0398267fd250e910a3beef0d3c04_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_801e589220eedbaa48a4075ce2ddec74f2c23f16f216330c2b236493e916c3ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_801e589220eedbaa48a4075ce2ddec74f2c23f16f216330c2b236493e916c3ce->enter($__internal_801e589220eedbaa48a4075ce2ddec74f2c23f16f216330c2b236493e916c3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/congreso.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_801e589220eedbaa48a4075ce2ddec74f2c23f16f216330c2b236493e916c3ce->leave($__internal_801e589220eedbaa48a4075ce2ddec74f2c23f16f216330c2b236493e916c3ce_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_c02c3d2f4754b22a4b611ba9661c4c185d43b95e438901e69cec5a16e3f61ccd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c02c3d2f4754b22a4b611ba9661c4c185d43b95e438901e69cec5a16e3f61ccd->enter($__internal_c02c3d2f4754b22a4b611ba9661c4c185d43b95e438901e69cec5a16e3f61ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "<div class=\"tracks\">
";
        // line 29
        $this->loadTemplate("CongresoCongresoBundle:Track:list.html.twig", "CongresoCongresoBundle:Congreso:show.html.twig", 29)->display(array_merge($context, array("tracks" => ($context["tracks"] ?? $this->getContext($context, "tracks")))));
        // line 30
        echo "</div>
";
        
        $__internal_c02c3d2f4754b22a4b611ba9661c4c185d43b95e438901e69cec5a16e3f61ccd->leave($__internal_c02c3d2f4754b22a4b611ba9661c4c185d43b95e438901e69cec5a16e3f61ccd_prof);

    }

    // line 33
    public function block_linea($context, array $blocks = array())
    {
        $__internal_a0716656b04d04ad025ae25d5f9a3e73749b9a9a66b81b6e180f07da8936273e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0716656b04d04ad025ae25d5f9a3e73749b9a9a66b81b6e180f07da8936273e->enter($__internal_a0716656b04d04ad025ae25d5f9a3e73749b9a9a66b81b6e180f07da8936273e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        // line 34
        echo "<div class=\"separator\"></div>
";
        
        $__internal_a0716656b04d04ad025ae25d5f9a3e73749b9a9a66b81b6e180f07da8936273e->leave($__internal_a0716656b04d04ad025ae25d5f9a3e73749b9a9a66b81b6e180f07da8936273e_prof);

    }

    // line 37
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_03e368b31ab66a1ce9e2585ffb48a42ce97c2b075841aa1c66bc19c69b33f905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03e368b31ab66a1ce9e2585ffb48a42ce97c2b075841aa1c66bc19c69b33f905->enter($__internal_03e368b31ab66a1ce9e2585ffb48a42ce97c2b075841aa1c66bc19c69b33f905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        // line 38
        echo "<div class=\"cientificos\">
";
        // line 39
        $this->loadTemplate("CongresoCongresoBundle:Cientifico:list.html.twig", "CongresoCongresoBundle:Congreso:show.html.twig", 39)->display(array_merge($context, array("cientificos" => ($context["cientificos"] ?? $this->getContext($context, "cientificos")))));
        // line 40
        echo "</div>
";
        
        $__internal_03e368b31ab66a1ce9e2585ffb48a42ce97c2b075841aa1c66bc19c69b33f905->leave($__internal_03e368b31ab66a1ce9e2585ffb48a42ce97c2b075841aa1c66bc19c69b33f905_prof);

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
{% endblock %}


", "CongresoCongresoBundle:Congreso:show.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Congreso/show.html.twig");
    }
}
