<?php

/* @EasyAdmin/default/field_float.html.twig */
class __TwigTemplate_5824fa3a76891349791c2772874a9174660e2230d8bc82090e09dabec298b502 extends Twig_Template
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
        $__internal_6cf6fa8c707f44a0e2c18088644df23da6f0883317e636a33e7f2715cf50a3c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cf6fa8c707f44a0e2c18088644df23da6f0883317e636a33e7f2715cf50a3c7->enter($__internal_6cf6fa8c707f44a0e2c18088644df23da6f0883317e636a33e7f2715cf50a3c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_float.html.twig"));

        // line 1
        if ($this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf($this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array()), ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), 2), "html", null, true);
            echo "
";
        }
        
        $__internal_6cf6fa8c707f44a0e2c18088644df23da6f0883317e636a33e7f2715cf50a3c7->leave($__internal_6cf6fa8c707f44a0e2c18088644df23da6f0883317e636a33e7f2715cf50a3c7_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_float.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if field_options.format %}
    {{ field_options.format|format(value) }}
{% else %}
    {{ value|number_format(2) }}
{% endif %}
", "@EasyAdmin/default/field_float.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\field_float.html.twig");
    }
}
