<?php

/* CongresoCongresoBundle::layout.html.twig */
class __TwigTemplate_61d879c2dc354457d85e0550f3811831798637a5b298d29174e7f76972d0deaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "CongresoCongresoBundle::layout.html.twig", 2);
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
        $__internal_0fa15fc41b047209421764172696911cbf4b32b88bb35164e4e23ecc8089e9fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fa15fc41b047209421764172696911cbf4b32b88bb35164e4e23ecc8089e9fc->enter($__internal_0fa15fc41b047209421764172696911cbf4b32b88bb35164e4e23ecc8089e9fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fa15fc41b047209421764172696911cbf4b32b88bb35164e4e23ecc8089e9fc->leave($__internal_0fa15fc41b047209421764172696911cbf4b32b88bb35164e4e23ecc8089e9fc_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_28bf5d13f7f3267f821fa2921fc9014e004e56198ef0307f2f92b5eec04b5c0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28bf5d13f7f3267f821fa2921fc9014e004e56198ef0307f2f92b5eec04b5c0b->enter($__internal_28bf5d13f7f3267f821fa2921fc9014e004e56198ef0307f2f92b5eec04b5c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "   
";
        
        $__internal_28bf5d13f7f3267f821fa2921fc9014e004e56198ef0307f2f92b5eec04b5c0b->leave($__internal_28bf5d13f7f3267f821fa2921fc9014e004e56198ef0307f2f92b5eec04b5c0b_prof);

    }

    public function getTemplateName()
    {
        return "CongresoCongresoBundle::layout.html.twig";
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
   
{% endblock %}", "CongresoCongresoBundle::layout.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/layout.html.twig");
    }
}
