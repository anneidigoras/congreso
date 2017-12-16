<?php

/* CongresoCongresoBundle:Congreso:showAjax.html.twig */
class __TwigTemplate_63af8dc845f0e7858788bb380d29817dfb0a4f1e95fbe66b6628e3ae622cd35d extends Twig_Template
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
        $__internal_49f87f9a81af5c96f9993694fcc28a04dc55f46d8c2e67a27d137a39fef9efce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49f87f9a81af5c96f9993694fcc28a04dc55f46d8c2e67a27d137a39fef9efce->enter($__internal_49f87f9a81af5c96f9993694fcc28a04dc55f46d8c2e67a27d137a39fef9efce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:showAjax.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["track"] ?? $this->getContext($context, "track")), "info", array()), "html", null, true);
        
        $__internal_49f87f9a81af5c96f9993694fcc28a04dc55f46d8c2e67a27d137a39fef9efce->leave($__internal_49f87f9a81af5c96f9993694fcc28a04dc55f46d8c2e67a27d137a39fef9efce_prof);

    }

    public function getTemplateName()
    {
        return "CongresoCongresoBundle:Congreso:showAjax.html.twig";
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
        return new Twig_Source("{# src/Congreso/CongresoBundle/Resources/views/Congreso/showAjax.html.twig #}
{{ track.info }}", "CongresoCongresoBundle:Congreso:showAjax.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Congreso/showAjax.html.twig");
    }
}
