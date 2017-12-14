<?php

/* @CongresoCongreso/Cientifico/list.html.twig */
class __TwigTemplate_31dc94678bea8550a35fc86514808c766814055b2da77d1b58c8a3dfcba091a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_910c763781fb5666b496d19f1fe75fe3b0a15ab4c767f3d192d28e50ddf9bd2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_910c763781fb5666b496d19f1fe75fe3b0a15ab4c767f3d192d28e50ddf9bd2d->enter($__internal_910c763781fb5666b496d19f1fe75fe3b0a15ab4c767f3d192d28e50ddf9bd2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Cientifico/list.html.twig"));

        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cientificos"] ?? $this->getContext($context, "cientificos")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cientifico"]) {
            // line 4
            echo "
    <p class=\"continue\"><a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_cientifico_artcen", array("id" => $this->getAttribute($context["cientifico"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cientifico"], "nombre", array()), "html", null, true);
            echo "</a></p>

";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 8
            echo "
    <p>No hay cientificos para este articulo.</p>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cientifico'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_910c763781fb5666b496d19f1fe75fe3b0a15ab4c767f3d192d28e50ddf9bd2d->leave($__internal_910c763781fb5666b496d19f1fe75fe3b0a15ab4c767f3d192d28e50ddf9bd2d_prof);

    }

    public function getTemplateName()
    {
        return "@CongresoCongreso/Cientifico/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  33 => 5,  30 => 4,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Congreso/CongresoBundle/Resources/views/Cientifico/list.html.twig #}

{% for cientifico in cientificos %}

    <p class=\"continue\"><a href=\"{{ path('congreso_cientifico_artcen', { 'id': cientifico.id }) }}\">{{ cientifico.nombre }}</a></p>

{% else %}

    <p>No hay cientificos para este articulo.</p>

{% endfor %}", "@CongresoCongreso/Cientifico/list.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Cientifico\\list.html.twig");
    }
}
