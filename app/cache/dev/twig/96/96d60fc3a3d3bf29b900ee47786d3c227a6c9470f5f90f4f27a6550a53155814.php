<?php

/* CongresoCongresoBundle:Congreso:showIng.html.twig */
class __TwigTemplate_8c4234e2bbfbdc8535baa34040b1f078d5cfd6efb02cdb00d06bdfa505897849 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layoutIng.html.twig", "CongresoCongresoBundle:Congreso:showIng.html.twig", 2);
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
        return "CongresoCongresoBundle::layoutIng.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1987095f3b81c95eea40cb41e9a10477ef209f0e6d74cc640c28c5b4c8937386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1987095f3b81c95eea40cb41e9a10477ef209f0e6d74cc640c28c5b4c8937386->enter($__internal_1987095f3b81c95eea40cb41e9a10477ef209f0e6d74cc640c28c5b4c8937386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:showIng.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1987095f3b81c95eea40cb41e9a10477ef209f0e6d74cc640c28c5b4c8937386->leave($__internal_1987095f3b81c95eea40cb41e9a10477ef209f0e6d74cc640c28c5b4c8937386_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6efaa6b2de05f6d66580ab2a4dce40a7057f357311b07cc21f71db8aaaf6d613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6efaa6b2de05f6d66580ab2a4dce40a7057f357311b07cc21f71db8aaaf6d613->enter($__internal_6efaa6b2de05f6d66580ab2a4dce40a7057f357311b07cc21f71db8aaaf6d613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Selected article";
        
        $__internal_6efaa6b2de05f6d66580ab2a4dce40a7057f357311b07cc21f71db8aaaf6d613->leave($__internal_6efaa6b2de05f6d66580ab2a4dce40a7057f357311b07cc21f71db8aaaf6d613_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5daa9029566a9d5deea26dcdd2fd829c57abf907a2c43e7c13428709d770c59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5daa9029566a9d5deea26dcdd2fd829c57abf907a2c43e7c13428709d770c59->enter($__internal_c5daa9029566a9d5deea26dcdd2fd829c57abf907a2c43e7c13428709d770c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<h4>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "titulo", array()), "html", null, true);
        echo "</h4>

\t<div class=\"body\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "cuerpo", array()), "html", null, true);
        echo "</div>
\t<div class=\"separator\"></div>
\t<div class=\"date\">Publication date: ";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "publicacion", array()), "d-m-Y"), "html", null, true);
        echo "</div>
\t<div class=\"separator\"></div>
\t<section class=\"comments\" id=\"comments\">
\t\t<section class=\"previous-comments\">
\t\t\t<h3>Comentarios</h3>
\t\t\t";
        // line 15
        $this->loadTemplate("CongresoCongresoBundle:Comment:list.html.twig", "CongresoCongresoBundle:Congreso:showIng.html.twig", 15)->display(array_merge($context, array("comments" => ($context["comments"] ?? $this->getContext($context, "comments")))));
        // line 16
        echo "\t\t</section>
\t\t<h3>Añadir comentario</h3>
\t\t";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("CongresoCongresoBundle:Comment:new", array("articulo_id" => $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "id", array()))));
        echo "
    </section>
";
        
        $__internal_c5daa9029566a9d5deea26dcdd2fd829c57abf907a2c43e7c13428709d770c59->leave($__internal_c5daa9029566a9d5deea26dcdd2fd829c57abf907a2c43e7c13428709d770c59_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b91869b65a04cc85683f2d4a24b55a0f13e85da3a319684f1003847a2f487ea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b91869b65a04cc85683f2d4a24b55a0f13e85da3a319684f1003847a2f487ea7->enter($__internal_b91869b65a04cc85683f2d4a24b55a0f13e85da3a319684f1003847a2f487ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/congreso.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_b91869b65a04cc85683f2d4a24b55a0f13e85da3a319684f1003847a2f487ea7->leave($__internal_b91869b65a04cc85683f2d4a24b55a0f13e85da3a319684f1003847a2f487ea7_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_df5dcf73e9275d3df5434c26d330a3653a7ee12d4f386b4761e7498a48bbadce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df5dcf73e9275d3df5434c26d330a3653a7ee12d4f386b4761e7498a48bbadce->enter($__internal_df5dcf73e9275d3df5434c26d330a3653a7ee12d4f386b4761e7498a48bbadce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "<div class=\"tracks\">
";
        // line 29
        $this->loadTemplate("CongresoCongresoBundle:Track:list.html.twig", "CongresoCongresoBundle:Congreso:showIng.html.twig", 29)->display(array_merge($context, array("tracks" => ($context["tracks"] ?? $this->getContext($context, "tracks")))));
        // line 30
        echo "</div>
";
        
        $__internal_df5dcf73e9275d3df5434c26d330a3653a7ee12d4f386b4761e7498a48bbadce->leave($__internal_df5dcf73e9275d3df5434c26d330a3653a7ee12d4f386b4761e7498a48bbadce_prof);

    }

    // line 33
    public function block_linea($context, array $blocks = array())
    {
        $__internal_f3c52feb01869c93cd0068a7de4547e328eea7a6efd16813f65565ddca2d2451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3c52feb01869c93cd0068a7de4547e328eea7a6efd16813f65565ddca2d2451->enter($__internal_f3c52feb01869c93cd0068a7de4547e328eea7a6efd16813f65565ddca2d2451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        // line 34
        echo "<div class=\"separator\"></div>
";
        
        $__internal_f3c52feb01869c93cd0068a7de4547e328eea7a6efd16813f65565ddca2d2451->leave($__internal_f3c52feb01869c93cd0068a7de4547e328eea7a6efd16813f65565ddca2d2451_prof);

    }

    // line 37
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_f8f147d97b8cddf2d703d0cfa5c67cef41dbbcd26802f4686f33170080c0c9ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8f147d97b8cddf2d703d0cfa5c67cef41dbbcd26802f4686f33170080c0c9ef->enter($__internal_f8f147d97b8cddf2d703d0cfa5c67cef41dbbcd26802f4686f33170080c0c9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

        // line 38
        echo "<div class=\"cientificos\">
";
        // line 39
        $this->loadTemplate("CongresoCongresoBundle:Cientifico:list.html.twig", "CongresoCongresoBundle:Congreso:showIng.html.twig", 39)->display(array_merge($context, array("cientificos" => ($context["cientificos"] ?? $this->getContext($context, "cientificos")))));
        // line 40
        echo "</div>
<div class=\"separator\"></div>
<p class=\"continue\"><a href=\"/\">Volver a la Home</a></p>
<p class=\"continue\"><a href=\"/contact\">Contacto</a></p>
";
        
        $__internal_f8f147d97b8cddf2d703d0cfa5c67cef41dbbcd26802f4686f33170080c0c9ef->leave($__internal_f8f147d97b8cddf2d703d0cfa5c67cef41dbbcd26802f4686f33170080c0c9ef_prof);

    }

    public function getTemplateName()
    {
        return "CongresoCongresoBundle:Congreso:showIng.html.twig";
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
{% extends \"CongresoCongresoBundle::layoutIng.html.twig\" %}
{% block title %}Selected article{% endblock %}

{% block body %}
\t<h4>{{ articulo.titulo }}</h4>

\t<div class=\"body\">{{ articulo.cuerpo }}</div>
\t<div class=\"separator\"></div>
\t<div class=\"date\">Publication date: {{ articulo.publicacion |date('d-m-Y') }}</div>
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

", "CongresoCongresoBundle:Congreso:showIng.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Congreso/showIng.html.twig");
    }
}
