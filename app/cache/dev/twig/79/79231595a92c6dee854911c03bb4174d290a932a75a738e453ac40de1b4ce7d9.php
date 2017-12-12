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
        $__internal_77a570911d3479727185582fc5630e0c12a257ea624f560cd5d3720ae2aa00c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77a570911d3479727185582fc5630e0c12a257ea624f560cd5d3720ae2aa00c8->enter($__internal_77a570911d3479727185582fc5630e0c12a257ea624f560cd5d3720ae2aa00c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle::layoutIng.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77a570911d3479727185582fc5630e0c12a257ea624f560cd5d3720ae2aa00c8->leave($__internal_77a570911d3479727185582fc5630e0c12a257ea624f560cd5d3720ae2aa00c8_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_494ba75b744239cf2fba74c00d45da5b217fe6c6c8074a566b2f3ce0679f2ac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_494ba75b744239cf2fba74c00d45da5b217fe6c6c8074a566b2f3ce0679f2ac1->enter($__internal_494ba75b744239cf2fba74c00d45da5b217fe6c6c8074a566b2f3ce0679f2ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "   
";
        
        $__internal_494ba75b744239cf2fba74c00d45da5b217fe6c6c8074a566b2f3ce0679f2ac1->leave($__internal_494ba75b744239cf2fba74c00d45da5b217fe6c6c8074a566b2f3ce0679f2ac1_prof);

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
