<?php

/* CongresoCongresoBundle:Track:list.html.twig */
class __TwigTemplate_053761990ce9fec8e26fd4f87a3702388eb09949c2062eeb6b6ac5a20ce6171f extends Twig_Template
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
        $__internal_4b79cb3116e7981426d9595a4bab9f563ca0fe70a904e694a938f16a684ca0c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b79cb3116e7981426d9595a4bab9f563ca0fe70a904e694a938f16a684ca0c6->enter($__internal_4b79cb3116e7981426d9595a4bab9f563ca0fe70a904e694a938f16a684ca0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Track:list.html.twig"));

        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tracks"] ?? $this->getContext($context, "tracks")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
            // line 4
            echo "    <p class=\"continue\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("congreso_track_arttrac", array("id" => $this->getAttribute($context["track"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "campo", array()), "html", null, true);
            echo "</a></p>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 6
            echo "    <p>No hay tracks para este articulo.</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['track'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_4b79cb3116e7981426d9595a4bab9f563ca0fe70a904e694a938f16a684ca0c6->leave($__internal_4b79cb3116e7981426d9595a4bab9f563ca0fe70a904e694a938f16a684ca0c6_prof);

    }

    public function getTemplateName()
    {
        return "CongresoCongresoBundle:Track:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  30 => 4,  25 => 3,  22 => 2,);
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
{% endfor %}", "CongresoCongresoBundle:Track:list.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Track/list.html.twig");
    }
}
