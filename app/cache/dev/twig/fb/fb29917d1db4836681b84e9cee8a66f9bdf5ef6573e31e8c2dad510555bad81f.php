<?php

/* @EasyAdmin/default/field_datetimetz.html.twig */
class __TwigTemplate_06eac161e5d0fc175b7380f8422c4492d3ed0d51bc591ef600d93c47ad362cbe extends Twig_Template
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
        $__internal_6c7ebf6b412fd308677abf8ab5dbff791e01eaf9a34e34cc97895292d1482aab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c7ebf6b412fd308677abf8ab5dbff791e01eaf9a34e34cc97895292d1482aab->enter($__internal_6c7ebf6b412fd308677abf8ab5dbff791e01eaf9a34e34cc97895292d1482aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetimetz.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_6c7ebf6b412fd308677abf8ab5dbff791e01eaf9a34e34cc97895292d1482aab->leave($__internal_6c7ebf6b412fd308677abf8ab5dbff791e01eaf9a34e34cc97895292d1482aab_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_datetimetz.html.twig";
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
", "@EasyAdmin/default/field_datetimetz.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\field_datetimetz.html.twig");
    }
}
