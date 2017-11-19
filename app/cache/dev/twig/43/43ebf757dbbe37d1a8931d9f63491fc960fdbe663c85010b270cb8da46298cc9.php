<?php

/* CongresoCongresoBundle:Congreso:list.html.twig */
class __TwigTemplate_74d8776bc67347e494d134869ab8190d29df881ea7dc208d45a743167c6df076 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layout.html.twig", "CongresoCongresoBundle:Congreso:list.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CongresoCongresoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34b309d1f52b73998d2bd86297dbf870bb933f4cd13972df4d60eece43b5b8cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34b309d1f52b73998d2bd86297dbf870bb933f4cd13972df4d60eece43b5b8cc->enter($__internal_34b309d1f52b73998d2bd86297dbf870bb933f4cd13972df4d60eece43b5b8cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34b309d1f52b73998d2bd86297dbf870bb933f4cd13972df4d60eece43b5b8cc->leave($__internal_34b309d1f52b73998d2bd86297dbf870bb933f4cd13972df4d60eece43b5b8cc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3afaa1d221cc18adf47eb001b2d1ddf598ca4ec45e82a54e7a0a1abfad0a0bc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3afaa1d221cc18adf47eb001b2d1ddf598ca4ec45e82a54e7a0a1abfad0a0bc9->enter($__internal_3afaa1d221cc18adf47eb001b2d1ddf598ca4ec45e82a54e7a0a1abfad0a0bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Artículos";
        
        $__internal_3afaa1d221cc18adf47eb001b2d1ddf598ca4ec45e82a54e7a0a1abfad0a0bc9->leave($__internal_3afaa1d221cc18adf47eb001b2d1ddf598ca4ec45e82a54e7a0a1abfad0a0bc9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_00035849ca60ab9451d6781804ce8b1844ea75e820e82457ec8be2857eda9287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00035849ca60ab9451d6781804ce8b1844ea75e820e82457ec8be2857eda9287->enter($__internal_00035849ca60ab9451d6781804ce8b1844ea75e820e82457ec8be2857eda9287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articulos"] ?? $this->getContext($context, "articulos")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["articulo"]) {
            // line 7
            echo "        <article class=\"articulo\">
            <div class=\"date\"><time datetime=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["articulo"], "publicacion", array()), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["articulo"], "publicacion", array()), "l, F j, Y"), "html", null, true);
            echo "</time></div>
            <header>
                <h2><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_show", array("id" => $this->getAttribute($context["articulo"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["articulo"], "titulo", array()), "html", null, true);
            echo "</a></h2>
            </header>

            <div class=\"snippet\">
                <p>";
            // line 14
            echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute($context["articulo"], "cuerpo", array()), 0, 400) . "..."), "html", null, true);
            echo "</p>
                <p class=\"continue\"><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_congreso_show", array("id" => $this->getAttribute($context["articulo"], "id", array()))), "html", null, true);
            echo "\">Seguir leyendo...</a></p>
            </div>

            <footer class=\"meta\">
                <p>Comentarios: ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["articulo"], "numberofcomments", array()), "html", null, true);
            echo "</p>
            </footer>
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "        <p>No hay entradas en este blog</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_00035849ca60ab9451d6781804ce8b1844ea75e820e82457ec8be2857eda9287->leave($__internal_00035849ca60ab9451d6781804ce8b1844ea75e820e82457ec8be2857eda9287_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_7c4eeb22732f72ae6d154ce9d1a0d2cda3bb2aa81663b67e149a21fd68d36f44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c4eeb22732f72ae6d154ce9d1a0d2cda3bb2aa81663b67e149a21fd68d36f44->enter($__internal_7c4eeb22732f72ae6d154ce9d1a0d2cda3bb2aa81663b67e149a21fd68d36f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "    <p class=\"continue\"><a href=\"/contact\">Contacto</a></p>
";
        
        $__internal_7c4eeb22732f72ae6d154ce9d1a0d2cda3bb2aa81663b67e149a21fd68d36f44->leave($__internal_7c4eeb22732f72ae6d154ce9d1a0d2cda3bb2aa81663b67e149a21fd68d36f44_prof);

    }

    public function getTemplateName()
    {
        return "CongresoCongresoBundle:Congreso:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 28,  111 => 27,  99 => 23,  90 => 19,  83 => 15,  79 => 14,  70 => 10,  63 => 8,  60 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Congreso/CongresoBundle/Resources/views/Congreso/list.html.twig #}
{% extends \"CongresoCongresoBundle::layout.html.twig\" %}
{% block title %}Lista de Artículos{% endblock %}

{% block body %}
    {% for articulo in articulos %}
        <article class=\"articulo\">
            <div class=\"date\"><time datetime=\"{{ articulo.publicacion|date('c') }}\">{{ articulo.publicacion|date('l, F j, Y') }}</time></div>
            <header>
                <h2><a href=\"{{ path('congreso_congreso_show', { 'id': articulo.id }) }}\">{{ articulo.titulo }}</a></h2>
            </header>

            <div class=\"snippet\">
                <p>{{ articulo.cuerpo|slice(0, 400) ~ '...' }}</p>
                <p class=\"continue\"><a href=\"{{ path('congreso_congreso_show', { 'id': articulo.id }) }}\">Seguir leyendo...</a></p>
            </div>

            <footer class=\"meta\">
                <p>Comentarios: {{articulo.numberofcomments}}</p>
            </footer>
        </article>
    {% else %}
        <p>No hay entradas en este blog</p>
    {% endfor %}
{% endblock %}

{% block sidebar %}
    <p class=\"continue\"><a href=\"/contact\">Contacto</a></p>
{% endblock %}", "CongresoCongresoBundle:Congreso:list.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Congreso/list.html.twig");
    }
}
