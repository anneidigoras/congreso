<?php

/* CongresoCongresoBundle::layout.html.twig */
class __TwigTemplate_169b16cc00541b35e6384337ce25d71734df96dfa65f92cec158e4e65976fad9 extends Twig_Template
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
        $__internal_f9a92c0c57b164e3000b470959a64c362a4cc2e113dc8418621bac492d3afd0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a92c0c57b164e3000b470959a64c362a4cc2e113dc8418621bac492d3afd0a->enter($__internal_f9a92c0c57b164e3000b470959a64c362a4cc2e113dc8418621bac492d3afd0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9a92c0c57b164e3000b470959a64c362a4cc2e113dc8418621bac492d3afd0a->leave($__internal_f9a92c0c57b164e3000b470959a64c362a4cc2e113dc8418621bac492d3afd0a_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_283538065c51a2fde2a261af0408b51bf2ce533c5f15e9d9e1dc8be6e10f281f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_283538065c51a2fde2a261af0408b51bf2ce533c5f15e9d9e1dc8be6e10f281f->enter($__internal_283538065c51a2fde2a261af0408b51bf2ce533c5f15e9d9e1dc8be6e10f281f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "   
";
        
        $__internal_283538065c51a2fde2a261af0408b51bf2ce533c5f15e9d9e1dc8be6e10f281f->leave($__internal_283538065c51a2fde2a261af0408b51bf2ce533c5f15e9d9e1dc8be6e10f281f_prof);

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
