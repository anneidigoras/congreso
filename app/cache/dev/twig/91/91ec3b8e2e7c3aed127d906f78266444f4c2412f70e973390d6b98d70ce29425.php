<?php

/* CongresoCongresoBundle::layout.html.twig */
class __TwigTemplate_f4ac9998e278eacb9fd76807743edd9a406aaa41acd8a8867fa7db91b33f4883 extends Twig_Template
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
        $__internal_00884d03a8476e082f932ca04f18bf4f31519c1ebd36a3850de6a460ce8f3d97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00884d03a8476e082f932ca04f18bf4f31519c1ebd36a3850de6a460ce8f3d97->enter($__internal_00884d03a8476e082f932ca04f18bf4f31519c1ebd36a3850de6a460ce8f3d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00884d03a8476e082f932ca04f18bf4f31519c1ebd36a3850de6a460ce8f3d97->leave($__internal_00884d03a8476e082f932ca04f18bf4f31519c1ebd36a3850de6a460ce8f3d97_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_2d42327e24e846d995d653354ae3930a23d0131988da69e93619719743e154b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d42327e24e846d995d653354ae3930a23d0131988da69e93619719743e154b2->enter($__internal_2d42327e24e846d995d653354ae3930a23d0131988da69e93619719743e154b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "   
";
        
        $__internal_2d42327e24e846d995d653354ae3930a23d0131988da69e93619719743e154b2->leave($__internal_2d42327e24e846d995d653354ae3930a23d0131988da69e93619719743e154b2_prof);

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
