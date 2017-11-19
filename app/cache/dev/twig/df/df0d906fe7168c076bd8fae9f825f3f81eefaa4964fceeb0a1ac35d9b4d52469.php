<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_62c1bcfd9d93daca2545583053af38daed66420e92c8e37ceda6f6b6a5ab76c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5e4c7811610d9a9213adac4393d38d593d191b22f6ba6fd52275b2631103397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5e4c7811610d9a9213adac4393d38d593d191b22f6ba6fd52275b2631103397->enter($__internal_c5e4c7811610d9a9213adac4393d38d593d191b22f6ba6fd52275b2631103397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c5e4c7811610d9a9213adac4393d38d593d191b22f6ba6fd52275b2631103397->leave($__internal_c5e4c7811610d9a9213adac4393d38d593d191b22f6ba6fd52275b2631103397_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_eed4fe8aebee3ca3babf96b3b6b0b5e996a6e2a933aa4e840b4c761d83339f6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eed4fe8aebee3ca3babf96b3b6b0b5e996a6e2a933aa4e840b4c761d83339f6e->enter($__internal_eed4fe8aebee3ca3babf96b3b6b0b5e996a6e2a933aa4e840b4c761d83339f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_eed4fe8aebee3ca3babf96b3b6b0b5e996a6e2a933aa4e840b4c761d83339f6e->leave($__internal_eed4fe8aebee3ca3babf96b3b6b0b5e996a6e2a933aa4e840b4c761d83339f6e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
