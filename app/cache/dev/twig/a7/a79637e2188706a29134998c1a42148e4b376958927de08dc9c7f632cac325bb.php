<?php

/* CongresoCongresoBundle:Track:arttrac.html.twig */
class __TwigTemplate_12fa67bd3758cb3d058f4f5b71b704461ba12fa76a8299962ec6b68745090049 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layout.html.twig", "CongresoCongresoBundle:Track:arttrac.html.twig", 2);
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
        $__internal_54e3b7435e847ad5cf526c18a88514874f310ce045f70e2e68b7dd854726f819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54e3b7435e847ad5cf526c18a88514874f310ce045f70e2e68b7dd854726f819->enter($__internal_54e3b7435e847ad5cf526c18a88514874f310ce045f70e2e68b7dd854726f819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Track:arttrac.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54e3b7435e847ad5cf526c18a88514874f310ce045f70e2e68b7dd854726f819->leave($__internal_54e3b7435e847ad5cf526c18a88514874f310ce045f70e2e68b7dd854726f819_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d9082d74982de63036cbb3354aafd8811ae7fa5476e267a0610c270b16ee852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d9082d74982de63036cbb3354aafd8811ae7fa5476e267a0610c270b16ee852->enter($__internal_0d9082d74982de63036cbb3354aafd8811ae7fa5476e267a0610c270b16ee852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Articulos de ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["track"] ?? $this->getContext($context, "track")), "campo", array()), "html", null, true);
        
        $__internal_0d9082d74982de63036cbb3354aafd8811ae7fa5476e267a0610c270b16ee852->leave($__internal_0d9082d74982de63036cbb3354aafd8811ae7fa5476e267a0610c270b16ee852_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c453301c191fc98e5df6a5cdbadda87dd0b059f6b4c391f12cc630c22a510070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c453301c191fc98e5df6a5cdbadda87dd0b059f6b4c391f12cc630c22a510070->enter($__internal_c453301c191fc98e5df6a5cdbadda87dd0b059f6b4c391f12cc630c22a510070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_escape_filter($this->env, $this->getAttribute($context["articulo"], "cuerpo", array(0 => 200), "method"), "html", null, true);
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
        
        $__internal_c453301c191fc98e5df6a5cdbadda87dd0b059f6b4c391f12cc630c22a510070->leave($__internal_c453301c191fc98e5df6a5cdbadda87dd0b059f6b4c391f12cc630c22a510070_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_c74fe55c54040c89a50b36efd240222f22279990884d0534fd3974e21c3351ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c74fe55c54040c89a50b36efd240222f22279990884d0534fd3974e21c3351ec->enter($__internal_c74fe55c54040c89a50b36efd240222f22279990884d0534fd3974e21c3351ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "<p class=\"continue\"><a href=\"/\">Volver a la Home</a></p>
<p class=\"continue\"><a href=\"/contact\">Contacto</a></p>
";
        
        $__internal_c74fe55c54040c89a50b36efd240222f22279990884d0534fd3974e21c3351ec->leave($__internal_c74fe55c54040c89a50b36efd240222f22279990884d0534fd3974e21c3351ec_prof);

    }

    public function getTemplateName()
    {
        return "CongresoCongresoBundle:Track:arttrac.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 28,  112 => 27,  100 => 23,  91 => 19,  84 => 15,  80 => 14,  71 => 10,  64 => 8,  61 => 7,  55 => 6,  49 => 5,  36 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Congreso/CongresoBundle/Resources/views/Track/arttrac.html.twig #}
{% extends \"CongresoCongresoBundle::layout.html.twig\" %}
{% block title %}Articulos de {{ track.campo }}{% endblock %}

{% block body %}
    {% for articulo in articulos %}
        <article class=\"articulo\">
            <div class=\"date\"><time datetime=\"{{ articulo.publicacion|date('c') }}\">{{ articulo.publicacion|date('l, F j, Y') }}</time></div>
            <header>
                <h2><a href=\"{{ path('congreso_congreso_show', { 'id': articulo.id }) }}\">{{ articulo.titulo }}</a></h2>
            </header>

            <div class=\"snippet\">
                <p>{{ articulo.cuerpo(200) }}</p>
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
<p class=\"continue\"><a href=\"/\">Volver a la Home</a></p>
<p class=\"continue\"><a href=\"/contact\">Contacto</a></p>
{% endblock %}

", "CongresoCongresoBundle:Track:arttrac.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Track/arttrac.html.twig");
    }
}
