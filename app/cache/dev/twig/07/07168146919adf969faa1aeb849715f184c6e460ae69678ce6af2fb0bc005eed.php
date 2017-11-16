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
        $__internal_d08ce7781260a8c6fd5bde29246ada890b20ec4b581b3afa3a686bae6ca3acf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d08ce7781260a8c6fd5bde29246ada890b20ec4b581b3afa3a686bae6ca3acf5->enter($__internal_d08ce7781260a8c6fd5bde29246ada890b20ec4b581b3afa3a686bae6ca3acf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d08ce7781260a8c6fd5bde29246ada890b20ec4b581b3afa3a686bae6ca3acf5->leave($__internal_d08ce7781260a8c6fd5bde29246ada890b20ec4b581b3afa3a686bae6ca3acf5_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e8ef610f07d3c1c79bcfcb600e8d1b604233bc17033ed974d5dd62fca0669c21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8ef610f07d3c1c79bcfcb600e8d1b604233bc17033ed974d5dd62fca0669c21->enter($__internal_e8ef610f07d3c1c79bcfcb600e8d1b604233bc17033ed974d5dd62fca0669c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "   
";
        
        $__internal_e8ef610f07d3c1c79bcfcb600e8d1b604233bc17033ed974d5dd62fca0669c21->leave($__internal_e8ef610f07d3c1c79bcfcb600e8d1b604233bc17033ed974d5dd62fca0669c21_prof);

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
