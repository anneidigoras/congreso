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
        $__internal_e4768c9cbb8d824249c383cdd8e44e6211147b8aedfe360ecdee142a2f32d8de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4768c9cbb8d824249c383cdd8e44e6211147b8aedfe360ecdee142a2f32d8de->enter($__internal_e4768c9cbb8d824249c383cdd8e44e6211147b8aedfe360ecdee142a2f32d8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4768c9cbb8d824249c383cdd8e44e6211147b8aedfe360ecdee142a2f32d8de->leave($__internal_e4768c9cbb8d824249c383cdd8e44e6211147b8aedfe360ecdee142a2f32d8de_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a261b02e2021a7c6f6b280a7415bd8ebbc9240e353768be6def83740446d596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a261b02e2021a7c6f6b280a7415bd8ebbc9240e353768be6def83740446d596->enter($__internal_7a261b02e2021a7c6f6b280a7415bd8ebbc9240e353768be6def83740446d596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Artículo seleccionado";
        
        $__internal_7a261b02e2021a7c6f6b280a7415bd8ebbc9240e353768be6def83740446d596->leave($__internal_7a261b02e2021a7c6f6b280a7415bd8ebbc9240e353768be6def83740446d596_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9e529167a79a5e0cd574bede73ef9e41686826d68e7e46df94a23f167fee575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9e529167a79a5e0cd574bede73ef9e41686826d68e7e46df94a23f167fee575->enter($__internal_f9e529167a79a5e0cd574bede73ef9e41686826d68e7e46df94a23f167fee575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f9e529167a79a5e0cd574bede73ef9e41686826d68e7e46df94a23f167fee575->leave($__internal_f9e529167a79a5e0cd574bede73ef9e41686826d68e7e46df94a23f167fee575_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e00f7e23ddd957db88ea4a13e5fd779878fb53ad3f3de88409c269a6e25be178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e00f7e23ddd957db88ea4a13e5fd779878fb53ad3f3de88409c269a6e25be178->enter($__internal_e00f7e23ddd957db88ea4a13e5fd779878fb53ad3f3de88409c269a6e25be178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/congreso.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_e00f7e23ddd957db88ea4a13e5fd779878fb53ad3f3de88409c269a6e25be178->leave($__internal_e00f7e23ddd957db88ea4a13e5fd779878fb53ad3f3de88409c269a6e25be178_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_dca2b99905177b0f5875f4b2ae44973b5e5234a518b065d77082391d98664b25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dca2b99905177b0f5875f4b2ae44973b5e5234a518b065d77082391d98664b25->enter($__internal_dca2b99905177b0f5875f4b2ae44973b5e5234a518b065d77082391d98664b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "<div class=\"tracks\">
";
        // line 29
        $this->loadTemplate("CongresoCongresoBundle:Track:list.html.twig", "CongresoCongresoBundle:Congreso:show.html.twig", 29)->display(array_merge($context, array("tracks" => ($context["tracks"] ?? $this->getContext($context, "tracks")))));
        // line 30
        echo "</div>
";
        
        $__internal_dca2b99905177b0f5875f4b2ae44973b5e5234a518b065d77082391d98664b25->leave($__internal_dca2b99905177b0f5875f4b2ae44973b5e5234a518b065d77082391d98664b25_prof);

    }

    // line 33
    public function block_linea($context, array $blocks = array())
    {
        $__internal_ffd762e411158c76e8e545f3fe5359d00b8e9f984bf64fff5c9515658cc20f88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffd762e411158c76e8e545f3fe5359d00b8e9f984bf64fff5c9515658cc20f88->enter($__internal_ffd762e411158c76e8e545f3fe5359d00b8e9f984bf64fff5c9515658cc20f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linea"));

        // line 34
        echo "<div class=\"separator\"></div>
";
        
        $__internal_ffd762e411158c76e8e545f3fe5359d00b8e9f984bf64fff5c9515658cc20f88->leave($__internal_ffd762e411158c76e8e545f3fe5359d00b8e9f984bf64fff5c9515658cc20f88_prof);

    }

    // line 37
    public function block_sidebar1($context, array $blocks = array())
    {
        $__internal_09a6215849f6601f9edd5d40ca68ea3957cba348c4be912148b1ed3ef62f63fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09a6215849f6601f9edd5d40ca68ea3957cba348c4be912148b1ed3ef62f63fb->enter($__internal_09a6215849f6601f9edd5d40ca68ea3957cba348c4be912148b1ed3ef62f63fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar1"));

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
        
        $__internal_09a6215849f6601f9edd5d40ca68ea3957cba348c4be912148b1ed3ef62f63fb->leave($__internal_09a6215849f6601f9edd5d40ca68ea3957cba348c4be912148b1ed3ef62f63fb_prof);

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
