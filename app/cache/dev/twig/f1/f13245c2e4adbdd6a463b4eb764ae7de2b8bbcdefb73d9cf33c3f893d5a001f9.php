<?php

/* @EasyAdmin/default/field_integer.html.twig */
class __TwigTemplate_967e9f8a2a5080ac934016806caad342c8ef5e413a490850f6ab3179a86bd3e5 extends Twig_Template
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
        $__internal_dc47e5d90ce4cab8d9fabd8a7b3ffccc6dc81902f687b3fdc64ed10efcc3fbbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc47e5d90ce4cab8d9fabd8a7b3ffccc6dc81902f687b3fdc64ed10efcc3fbbc->enter($__internal_dc47e5d90ce4cab8d9fabd8a7b3ffccc6dc81902f687b3fdc64ed10efcc3fbbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_integer.html.twig"));

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
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_dc47e5d90ce4cab8d9fabd8a7b3ffccc6dc81902f687b3fdc64ed10efcc3fbbc->leave($__internal_dc47e5d90ce4cab8d9fabd8a7b3ffccc6dc81902f687b3fdc64ed10efcc3fbbc_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_integer.html.twig";
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
    {{ value|number_format }}
{% endif %}
", "@EasyAdmin/default/field_integer.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\field_integer.html.twig");
    }
}
