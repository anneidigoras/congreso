<?php

/* @EasyAdmin/default/field_id.html.twig */
class __TwigTemplate_bdad9b8dae748fa8b6b85405c027defc9b6b0fddb54a65e1eaff2675043951ff extends Twig_Template
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
        $__internal_528a24496c936821ffa9542a139445c94e0c9ad8bb90e97f9414261d643e7bd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_528a24496c936821ffa9542a139445c94e0c9ad8bb90e97f9414261d643e7bd6->enter($__internal_528a24496c936821ffa9542a139445c94e0c9ad8bb90e97f9414261d643e7bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_528a24496c936821ffa9542a139445c94e0c9ad8bb90e97f9414261d643e7bd6->leave($__internal_528a24496c936821ffa9542a139445c94e0c9ad8bb90e97f9414261d643e7bd6_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# this field template is used to avoid formatting the special ID attribute as a number #}
{{ value }}
", "@EasyAdmin/default/field_id.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\field_id.html.twig");
    }
}
