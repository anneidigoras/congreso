<?php

/* CongresoCongresoBundle::layout.html.twig */
class __TwigTemplate_61d0a5b31b14d111af14038fcfb1486fbc26887780ed42c22d5cb91f01869ac9 extends Twig_Template
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
        $__internal_f15f80913f0d8ebbe6d3470e06ba47a30e6567e62b2a46e824c608771bec7232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f15f80913f0d8ebbe6d3470e06ba47a30e6567e62b2a46e824c608771bec7232->enter($__internal_f15f80913f0d8ebbe6d3470e06ba47a30e6567e62b2a46e824c608771bec7232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f15f80913f0d8ebbe6d3470e06ba47a30e6567e62b2a46e824c608771bec7232->leave($__internal_f15f80913f0d8ebbe6d3470e06ba47a30e6567e62b2a46e824c608771bec7232_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_f3db2dcc04320939b45a71a842bc2c843ec79f9dc72cd60ef2051e23614508f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3db2dcc04320939b45a71a842bc2c843ec79f9dc72cd60ef2051e23614508f7->enter($__internal_f3db2dcc04320939b45a71a842bc2c843ec79f9dc72cd60ef2051e23614508f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "   
";
        
        $__internal_f3db2dcc04320939b45a71a842bc2c843ec79f9dc72cd60ef2051e23614508f7->leave($__internal_f3db2dcc04320939b45a71a842bc2c843ec79f9dc72cd60ef2051e23614508f7_prof);

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
   
{% endblock %}", "CongresoCongresoBundle::layout.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\layout.html.twig");
    }
}
