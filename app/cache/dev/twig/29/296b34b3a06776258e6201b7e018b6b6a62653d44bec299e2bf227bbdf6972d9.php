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
        $__internal_0c3ef1701ef949441840e8df6a8ffa5aa03404f830cce103f5a4ca771304c154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c3ef1701ef949441840e8df6a8ffa5aa03404f830cce103f5a4ca771304c154->enter($__internal_0c3ef1701ef949441840e8df6a8ffa5aa03404f830cce103f5a4ca771304c154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c3ef1701ef949441840e8df6a8ffa5aa03404f830cce103f5a4ca771304c154->leave($__internal_0c3ef1701ef949441840e8df6a8ffa5aa03404f830cce103f5a4ca771304c154_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_fc3f99f0b56bbe75af383e8211e938331e890641619a9c5d43c05ebb8175d28a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc3f99f0b56bbe75af383e8211e938331e890641619a9c5d43c05ebb8175d28a->enter($__internal_fc3f99f0b56bbe75af383e8211e938331e890641619a9c5d43c05ebb8175d28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "   
";
        
        $__internal_fc3f99f0b56bbe75af383e8211e938331e890641619a9c5d43c05ebb8175d28a->leave($__internal_fc3f99f0b56bbe75af383e8211e938331e890641619a9c5d43c05ebb8175d28a_prof);

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
