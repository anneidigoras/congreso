<?php

/* @CongresoCongreso/Track/list.html.twig */
class __TwigTemplate_ecb3f623001d09b8dd41be42cdb411a56417a727706e747d30f323f3316fad0e extends Twig_Template
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
        $__internal_f17289d94f936ee77e00ad77e92eeae549a2e3d2e9c1d1d6d1e798f5b088f7ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f17289d94f936ee77e00ad77e92eeae549a2e3d2e9c1d1d6d1e798f5b088f7ad->enter($__internal_f17289d94f936ee77e00ad77e92eeae549a2e3d2e9c1d1d6d1e798f5b088f7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Track/list.html.twig"));

        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tracks"] ?? $this->getContext($context, "tracks")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
            // line 4
            echo "
    <p class=\"continue\"><a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_track_arttrac", array("id" => $this->getAttribute($context["track"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "campo", array()), "html", null, true);
            echo "</a></p>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 7
            echo "
    <p>No hay tracks para este articulo.</p>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['track'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f17289d94f936ee77e00ad77e92eeae549a2e3d2e9c1d1d6d1e798f5b088f7ad->leave($__internal_f17289d94f936ee77e00ad77e92eeae549a2e3d2e9c1d1d6d1e798f5b088f7ad_prof);

    }

    public function getTemplateName()
    {
        return "@CongresoCongreso/Track/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  33 => 5,  30 => 4,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Congreso/CongresoBundle/Resources/views/Track/list.html.twig #}

{% for track in tracks %}

    <p class=\"continue\"><a href=\"{{ path('congreso_track_arttrac', { 'id': track.id }) }}\">{{ track.campo }}</a></p>
{% else %}

    <p>No hay tracks para este articulo.</p>

{% endfor %}", "@CongresoCongreso/Track/list.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Track\\list.html.twig");
    }
}
