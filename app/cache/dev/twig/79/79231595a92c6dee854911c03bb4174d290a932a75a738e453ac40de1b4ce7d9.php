<?php

/* CongresoCongresoBundle::layoutIng.html.twig */
class __TwigTemplate_0789bf0c41737e2055c4b75e693d8ea929f3c1c4bd2f86dced874f2b25a83634 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::baseIng.html.twig", "CongresoCongresoBundle::layoutIng.html.twig", 2);
        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseIng.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1dfd6f317118957b36b3445ed8a16e2d3073761d285729411e688830c05c6a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1dfd6f317118957b36b3445ed8a16e2d3073761d285729411e688830c05c6a6->enter($__internal_c1dfd6f317118957b36b3445ed8a16e2d3073761d285729411e688830c05c6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle::layoutIng.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1dfd6f317118957b36b3445ed8a16e2d3073761d285729411e688830c05c6a6->leave($__internal_c1dfd6f317118957b36b3445ed8a16e2d3073761d285729411e688830c05c6a6_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9d90fedb9d83f1efacd74fe1944897166f186c8d2ae0d9e2747f5230bca6b8b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d90fedb9d83f1efacd74fe1944897166f186c8d2ae0d9e2747f5230bca6b8b4->enter($__internal_9d90fedb9d83f1efacd74fe1944897166f186c8d2ae0d9e2747f5230bca6b8b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "   
";
        
        $__internal_9d90fedb9d83f1efacd74fe1944897166f186c8d2ae0d9e2747f5230bca6b8b4->leave($__internal_9d90fedb9d83f1efacd74fe1944897166f186c8d2ae0d9e2747f5230bca6b8b4_prof);

    }

    public function getTemplateName()
    {
        return "CongresoCongresoBundle::layoutIng.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Congreso/CongresoBundle/Resources/views/layout.html.twig #}
{% extends '::baseIng.html.twig' %}

{% block sidebar %}
   
{% endblock %}", "CongresoCongresoBundle::layoutIng.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/layoutIng.html.twig");
    }
}
