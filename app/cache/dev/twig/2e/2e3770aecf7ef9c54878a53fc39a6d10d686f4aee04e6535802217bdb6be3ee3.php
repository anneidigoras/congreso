<?php

/* @CongresoCongreso/Cientifico/list.html.twig */
class __TwigTemplate_12dc20e40462c67380f38060b72d651c659a07d8db15443e4b5447015ef78eea extends Twig_Template
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
        $__internal_1763e33cd5d2924f9c4b3cb6961a29de929fe22bda693bf56c2dc80187552663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1763e33cd5d2924f9c4b3cb6961a29de929fe22bda693bf56c2dc80187552663->enter($__internal_1763e33cd5d2924f9c4b3cb6961a29de929fe22bda693bf56c2dc80187552663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Cientifico/list.html.twig"));

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
        
        $__internal_1763e33cd5d2924f9c4b3cb6961a29de929fe22bda693bf56c2dc80187552663->leave($__internal_1763e33cd5d2924f9c4b3cb6961a29de929fe22bda693bf56c2dc80187552663_prof);

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

{% endfor %}", "@CongresoCongreso/Cientifico/list.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Cientifico\\list.html.twig");
    }
}
