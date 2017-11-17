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
        );
    }

    protected function doGetParent(array $context)
    {
        return "CongresoCongresoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d325ec6fbc43fdbfa39dc1693546a53e462c4a653843c8de78f6e688c00d820e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d325ec6fbc43fdbfa39dc1693546a53e462c4a653843c8de78f6e688c00d820e->enter($__internal_d325ec6fbc43fdbfa39dc1693546a53e462c4a653843c8de78f6e688c00d820e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d325ec6fbc43fdbfa39dc1693546a53e462c4a653843c8de78f6e688c00d820e->leave($__internal_d325ec6fbc43fdbfa39dc1693546a53e462c4a653843c8de78f6e688c00d820e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_89cb4e9b5e89060df75e128884ef3b4ade10db2ed7c5b3366c529a42f213c831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89cb4e9b5e89060df75e128884ef3b4ade10db2ed7c5b3366c529a42f213c831->enter($__internal_89cb4e9b5e89060df75e128884ef3b4ade10db2ed7c5b3366c529a42f213c831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Artículos";
        
        $__internal_89cb4e9b5e89060df75e128884ef3b4ade10db2ed7c5b3366c529a42f213c831->leave($__internal_89cb4e9b5e89060df75e128884ef3b4ade10db2ed7c5b3366c529a42f213c831_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab23a6cc2de42d97dc2c6a712cfb1da5720af7a1d15a9df2a209edfc9b176952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab23a6cc2de42d97dc2c6a712cfb1da5720af7a1d15a9df2a209edfc9b176952->enter($__internal_ab23a6cc2de42d97dc2c6a712cfb1da5720af7a1d15a9df2a209edfc9b176952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <p>Comentarios: </p>
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
        
        $__internal_ab23a6cc2de42d97dc2c6a712cfb1da5720af7a1d15a9df2a209edfc9b176952->leave($__internal_ab23a6cc2de42d97dc2c6a712cfb1da5720af7a1d15a9df2a209edfc9b176952_prof);

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
        return array (  95 => 23,  82 => 15,  78 => 14,  69 => 10,  62 => 8,  59 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
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
                <p>Comentarios: </p>
            </footer>
        </article>
    {% else %}
        <p>No hay entradas en este blog</p>
    {% endfor %}
{% endblock %}", "CongresoCongresoBundle:Congreso:list.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Congreso/list.html.twig");
    }
}
