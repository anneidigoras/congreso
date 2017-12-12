<?php

/* @CongresoCongreso/layout.html.twig */
class __TwigTemplate_a9e9417e3a7330177e91fefe72b29750df49c7fe8878423e541e1a356e5d2d1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "@CongresoCongreso/layout.html.twig", 2);
        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9bdcec9aac72a06bf60107759b0d22e1f1a75ff5155f244befadaad1a368033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9bdcec9aac72a06bf60107759b0d22e1f1a75ff5155f244befadaad1a368033->enter($__internal_d9bdcec9aac72a06bf60107759b0d22e1f1a75ff5155f244befadaad1a368033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9bdcec9aac72a06bf60107759b0d22e1f1a75ff5155f244befadaad1a368033->leave($__internal_d9bdcec9aac72a06bf60107759b0d22e1f1a75ff5155f244befadaad1a368033_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_23207335967782b2260e5c08083e65ac769b9aeefbd3cfa20e1c7c3330b96570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23207335967782b2260e5c08083e65ac769b9aeefbd3cfa20e1c7c3330b96570->enter($__internal_23207335967782b2260e5c08083e65ac769b9aeefbd3cfa20e1c7c3330b96570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "   
";
        
        $__internal_23207335967782b2260e5c08083e65ac769b9aeefbd3cfa20e1c7c3330b96570->leave($__internal_23207335967782b2260e5c08083e65ac769b9aeefbd3cfa20e1c7c3330b96570_prof);

    }

    public function getTemplateName()
    {
        return "@CongresoCongreso/layout.html.twig";
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
{% extends '::base.html.twig' %}

{% block sidebar %}
   
{% endblock %}", "@CongresoCongreso/layout.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\layout.html.twig");
    }
}
