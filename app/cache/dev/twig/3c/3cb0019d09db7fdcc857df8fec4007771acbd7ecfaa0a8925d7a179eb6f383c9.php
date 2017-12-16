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
        $__internal_a09cce3366f8d249a9fdaf60354b6878fd09f456efef90b8c3226ff3283bd122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a09cce3366f8d249a9fdaf60354b6878fd09f456efef90b8c3226ff3283bd122->enter($__internal_a09cce3366f8d249a9fdaf60354b6878fd09f456efef90b8c3226ff3283bd122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a09cce3366f8d249a9fdaf60354b6878fd09f456efef90b8c3226ff3283bd122->leave($__internal_a09cce3366f8d249a9fdaf60354b6878fd09f456efef90b8c3226ff3283bd122_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9467fba03fcd1740bb052a5b086ab697972bcecaa9297e441cfbeab14443e354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9467fba03fcd1740bb052a5b086ab697972bcecaa9297e441cfbeab14443e354->enter($__internal_9467fba03fcd1740bb052a5b086ab697972bcecaa9297e441cfbeab14443e354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Artículo seleccionado";
        
        $__internal_9467fba03fcd1740bb052a5b086ab697972bcecaa9297e441cfbeab14443e354->leave($__internal_9467fba03fcd1740bb052a5b086ab697972bcecaa9297e441cfbeab14443e354_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6dc6f220925d939a57ae162472304beb81838bb613b34f5c5557e82b2e96001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6dc6f220925d939a57ae162472304beb81838bb613b34f5c5557e82b2e96001->enter($__internal_c6dc6f220925d939a57ae162472304beb81838bb613b34f5c5557e82b2e96001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c6dc6f220925d939a57ae162472304beb81838bb613b34f5c5557e82b2e96001->leave($__internal_c6dc6f220925d939a57ae162472304beb81838bb613b34f5c5557e82b2e96001_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_80acfb64d86ea7deff589961dc3bc6b0c130d2ec20c0cd19e6df66a5fc5bb11c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80acfb64d86ea7deff589961dc3bc6b0c130d2ec20c0cd19e6df66a5fc5bb11c->enter($__internal_80acfb64d86ea7deff589961dc3bc6b0c130d2ec20c0cd19e6df66a5fc5bb11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/congreso.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_80acfb64d86ea7deff589961dc3bc6b0c130d2ec20c0cd19e6df66a5fc5bb11c->leave($__internal_80acfb64d86ea7deff589961dc3bc6b0c130d2ec20c0cd19e6df66a5fc5bb11c_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_65548437e40d0dc48d9540e6dfff65d23a10873f726f12d9c57993ab5a79521c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65548437e40d0dc48d9540e6dfff65d23a10873f726f12d9c57993ab5a79521c->enter($__internal_65548437e40d0dc48d9540e6dfff65d23a10873f726f12d9c57993ab5a79521c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "<div class=\"tracks\">
";
        // line 29
        $this->loadTemplate("CongresoCongresoBundle:Track:list.html.twig", "CongresoCongresoBundle:Congreso:show.html.twig", 29)->display(array_merge($context, array("track" => ($context["track"] ?? $this->getContext($context, "track")))));
        // line 30
        echo "</div>
";
        
        $__internal_65548437e40d0dc48d9540e6dfff65d23a10873f726f12d9c57993ab5a79521c->leave($__internal_65548437e40d0dc48d9540e6dfff65d23a10873f726f12d9c57993ab5a79521c_prof);

    }

    // line 33
    public function block_linea($context, array $blocks = array())
    {
        $__internal_e0d4a619e8456733d798a4acdbd44b11abff017a5214115e0e218e84224a2adb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0d4a619e8456733d798a4acdbd44b11abff017a5214115e0e218e84224a2adb->enter($__internal_e0d4a619e8456733d798a4acdbd44b11abff017a5214115e0e218e84224a2adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        // line 34
        echo "<div class=\"separator\"></div>
";
        
        $__internal_e0d4a619e8456733d798a4acdbd44b11abff017a5214115e0e218e84224a2adb->leave($__internal_e0d4a619e8456733d798a4acdbd44b11abff017a5214115e0e218e84224a2adb_prof);

    }

    // line 37
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_813c5cb9e3f903c928dc2f69c53b282e96dfb22cd898840b0e1c51e221bc6bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_813c5cb9e3f903c928dc2f69c53b282e96dfb22cd898840b0e1c51e221bc6bc2->enter($__internal_813c5cb9e3f903c928dc2f69c53b282e96dfb22cd898840b0e1c51e221bc6bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        // line 38
        echo "<div class=\"cientificos\">
";
        // line 39
        $this->loadTemplate("CongresoCongresoBundle:Cientifico:list.html.twig", "CongresoCongresoBundle:Congreso:show.html.twig", 39)->display(array_merge($context, array("cientificos" => ($context["cientificos"] ?? $this->getContext($context, "cientificos")))));
        // line 40
        echo "</div>
";
        
        $__internal_813c5cb9e3f903c928dc2f69c53b282e96dfb22cd898840b0e1c51e221bc6bc2->leave($__internal_813c5cb9e3f903c928dc2f69c53b282e96dfb22cd898840b0e1c51e221bc6bc2_prof);

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

", "CongresoCongresoBundle:Congreso:show.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Congreso/show.html.twig");
    }
}
