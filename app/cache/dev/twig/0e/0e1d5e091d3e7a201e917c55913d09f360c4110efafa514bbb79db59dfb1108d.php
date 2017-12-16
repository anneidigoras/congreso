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
        $__internal_7f1818c7b963e499464b523582355aea822efbf2f301998e9fee20c6ff1a6b18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f1818c7b963e499464b523582355aea822efbf2f301998e9fee20c6ff1a6b18->enter($__internal_7f1818c7b963e499464b523582355aea822efbf2f301998e9fee20c6ff1a6b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Congreso/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f1818c7b963e499464b523582355aea822efbf2f301998e9fee20c6ff1a6b18->leave($__internal_7f1818c7b963e499464b523582355aea822efbf2f301998e9fee20c6ff1a6b18_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f7686a22d11a0270dce28b594cd7c25aafdbdbe4220630efd4e051a55ead3bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f7686a22d11a0270dce28b594cd7c25aafdbdbe4220630efd4e051a55ead3bc->enter($__internal_7f7686a22d11a0270dce28b594cd7c25aafdbdbe4220630efd4e051a55ead3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Artículo seleccionado";
        
        $__internal_7f7686a22d11a0270dce28b594cd7c25aafdbdbe4220630efd4e051a55ead3bc->leave($__internal_7f7686a22d11a0270dce28b594cd7c25aafdbdbe4220630efd4e051a55ead3bc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ad8b542b12f9fbfa228d0ec01278927c648436aba169db0e08926289e61b61a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ad8b542b12f9fbfa228d0ec01278927c648436aba169db0e08926289e61b61a->enter($__internal_6ad8b542b12f9fbfa228d0ec01278927c648436aba169db0e08926289e61b61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6ad8b542b12f9fbfa228d0ec01278927c648436aba169db0e08926289e61b61a->leave($__internal_6ad8b542b12f9fbfa228d0ec01278927c648436aba169db0e08926289e61b61a_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1fca2ac3c8c196f5ef16774cc354fbb5adcdd5bb36a4e9ef8982ad1b58bf7d66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fca2ac3c8c196f5ef16774cc354fbb5adcdd5bb36a4e9ef8982ad1b58bf7d66->enter($__internal_1fca2ac3c8c196f5ef16774cc354fbb5adcdd5bb36a4e9ef8982ad1b58bf7d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/congreso.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_1fca2ac3c8c196f5ef16774cc354fbb5adcdd5bb36a4e9ef8982ad1b58bf7d66->leave($__internal_1fca2ac3c8c196f5ef16774cc354fbb5adcdd5bb36a4e9ef8982ad1b58bf7d66_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_c77c2c5a44fc079b06d2d5e460970f9f02b8004eded0439ebef7c25a799547cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c77c2c5a44fc079b06d2d5e460970f9f02b8004eded0439ebef7c25a799547cc->enter($__internal_c77c2c5a44fc079b06d2d5e460970f9f02b8004eded0439ebef7c25a799547cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "<div class=\"tracks\">
";
        // line 29
        $this->loadTemplate("CongresoCongresoBundle:Track:list.html.twig", "@CongresoCongreso/Congreso/show.html.twig", 29)->display(array_merge($context, array("track" => ($context["track"] ?? $this->getContext($context, "track")))));
        // line 30
        echo "</div>
";
        
        $__internal_c77c2c5a44fc079b06d2d5e460970f9f02b8004eded0439ebef7c25a799547cc->leave($__internal_c77c2c5a44fc079b06d2d5e460970f9f02b8004eded0439ebef7c25a799547cc_prof);

    }

    // line 33
    public function block_linea($context, array $blocks = array())
    {
        $__internal_43ce1288a5aad2d804b47a7be1b806452c8beaea0c00b630de077552d9560f5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43ce1288a5aad2d804b47a7be1b806452c8beaea0c00b630de077552d9560f5b->enter($__internal_43ce1288a5aad2d804b47a7be1b806452c8beaea0c00b630de077552d9560f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        // line 34
        echo "<div class=\"separator\"></div>
";
        
        $__internal_43ce1288a5aad2d804b47a7be1b806452c8beaea0c00b630de077552d9560f5b->leave($__internal_43ce1288a5aad2d804b47a7be1b806452c8beaea0c00b630de077552d9560f5b_prof);

    }

    // line 37
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_f3b9b999b73dac784dc9872f748fa74bb06a8b21a5d37b368a2776f58e50acc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b9b999b73dac784dc9872f748fa74bb06a8b21a5d37b368a2776f58e50acc5->enter($__internal_f3b9b999b73dac784dc9872f748fa74bb06a8b21a5d37b368a2776f58e50acc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        // line 38
        echo "<div class=\"cientificos\">
";
        // line 39
        $this->loadTemplate("CongresoCongresoBundle:Cientifico:list.html.twig", "@CongresoCongreso/Congreso/show.html.twig", 39)->display(array_merge($context, array("cientificos" => ($context["cientificos"] ?? $this->getContext($context, "cientificos")))));
        // line 40
        echo "</div>
";
        
        $__internal_f3b9b999b73dac784dc9872f748fa74bb06a8b21a5d37b368a2776f58e50acc5->leave($__internal_f3b9b999b73dac784dc9872f748fa74bb06a8b21a5d37b368a2776f58e50acc5_prof);

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
