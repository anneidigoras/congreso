<?php

/* CongresoCongresoBundle:Track:list.html.twig */
class __TwigTemplate_ff5b382486d27e8570d10a177f88163337fdb585b41aaf1ccc1912308018f917 extends Twig_Template
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
        $__internal_09887162acb2a9817146236ae86691bf5606206930231979c8d12770579d2f76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09887162acb2a9817146236ae86691bf5606206930231979c8d12770579d2f76->enter($__internal_09887162acb2a9817146236ae86691bf5606206930231979c8d12770579d2f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Track:list.html.twig"));

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
    <p>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "campo", array()), "html", null, true);
            echo "</p>

";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 8
            echo "
    <p>No hay tracks para este articulo.</p>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['track'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_09887162acb2a9817146236ae86691bf5606206930231979c8d12770579d2f76->leave($__internal_09887162acb2a9817146236ae86691bf5606206930231979c8d12770579d2f76_prof);

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
        return array (  41 => 8,  33 => 5,  30 => 4,  25 => 3,  22 => 2,);
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

    <p>{{ track.campo }}</p>

{% else %}

    <p>No hay tracks para este articulo.</p>

{% endfor %}", "CongresoCongresoBundle:Track:list.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Track\\list.html.twig");
    }
}
