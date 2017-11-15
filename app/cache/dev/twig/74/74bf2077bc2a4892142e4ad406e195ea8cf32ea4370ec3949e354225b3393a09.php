<?php

/* CongresoCongresoBundle:Cientifico:list.html.twig */
class __TwigTemplate_f5304efa9890567bf551625ca6cf4486a52c38fc2f5dc250a090ab1cdafb62be extends Twig_Template
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
        $__internal_97298c833122bbdb05909f3a82ff7e968d1d654c88b240be7e0fd30edbedc2f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97298c833122bbdb05909f3a82ff7e968d1d654c88b240be7e0fd30edbedc2f7->enter($__internal_97298c833122bbdb05909f3a82ff7e968d1d654c88b240be7e0fd30edbedc2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Cientifico:list.html.twig"));

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
    <p>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute(($context["tag"] ?? $this->getContext($context, "tag")), "nombre", array()), "html", null, true);
            echo "</p>

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
        
        $__internal_97298c833122bbdb05909f3a82ff7e968d1d654c88b240be7e0fd30edbedc2f7->leave($__internal_97298c833122bbdb05909f3a82ff7e968d1d654c88b240be7e0fd30edbedc2f7_prof);

    }

    public function getTemplateName()
    {
        return "CongresoCongresoBundle:Cientifico:list.html.twig";
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
        return new Twig_Source("{# src/Congreso/CongresoBundle/Resources/views/Cientifico/list.html.twig #}

{% for cientifico in cientificos %}

    <p>{{ tag.nombre }}</p>

{% else %}

    <p>No hay cientificos para este articulo.</p>

{% endfor %}", "CongresoCongresoBundle:Cientifico:list.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Cientifico/list.html.twig");
    }
}
