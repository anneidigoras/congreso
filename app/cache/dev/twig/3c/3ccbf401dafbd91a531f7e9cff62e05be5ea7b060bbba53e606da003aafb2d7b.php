<?php

/* @EasyAdmin/default/field_time.html.twig */
class __TwigTemplate_a06613b26c187de1f38b802d5214620786a555ed7e61fc094d3f7351f740cad6 extends Twig_Template
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
        $__internal_e0e77e0cbd9512ff496bd2027b137f27c9da9804f09b23c1d9c8d8f1ba67526d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e77e0cbd9512ff496bd2027b137f27c9da9804f09b23c1d9c8d8f1ba67526d->enter($__internal_e0e77e0cbd9512ff496bd2027b137f27c9da9804f09b23c1d9c8d8f1ba67526d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_time.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_e0e77e0cbd9512ff496bd2027b137f27c9da9804f09b23c1d9c8d8f1ba67526d->leave($__internal_e0e77e0cbd9512ff496bd2027b137f27c9da9804f09b23c1d9c8d8f1ba67526d_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ value|date(field_options.format) }}
", "@EasyAdmin/default/field_time.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\field_time.html.twig");
    }
}
