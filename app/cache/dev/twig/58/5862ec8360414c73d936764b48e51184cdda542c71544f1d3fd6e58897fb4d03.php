<?php

/* @CongresoCongreso/layoutIng.html.twig */
class __TwigTemplate_80a8803da01266776974a5e5b1b6ae9c27f9abed0054993d13b20b9f7711843f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::baseIng.html.twig", "@CongresoCongreso/layoutIng.html.twig", 2);
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
        $__internal_a70b4930ccc7dd228623e34f72c359b3c46e8ca05b7850a3a9322195325a7423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a70b4930ccc7dd228623e34f72c359b3c46e8ca05b7850a3a9322195325a7423->enter($__internal_a70b4930ccc7dd228623e34f72c359b3c46e8ca05b7850a3a9322195325a7423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/layoutIng.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a70b4930ccc7dd228623e34f72c359b3c46e8ca05b7850a3a9322195325a7423->leave($__internal_a70b4930ccc7dd228623e34f72c359b3c46e8ca05b7850a3a9322195325a7423_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_5541534f0d9e151c18217a13c300acd61e13bde5952da78ee1771e77e61ecefb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5541534f0d9e151c18217a13c300acd61e13bde5952da78ee1771e77e61ecefb->enter($__internal_5541534f0d9e151c18217a13c300acd61e13bde5952da78ee1771e77e61ecefb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "   
";
        
        $__internal_5541534f0d9e151c18217a13c300acd61e13bde5952da78ee1771e77e61ecefb->leave($__internal_5541534f0d9e151c18217a13c300acd61e13bde5952da78ee1771e77e61ecefb_prof);

    }

    public function getTemplateName()
    {
        return "@CongresoCongreso/layoutIng.html.twig";
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
   
{% endblock %}", "@CongresoCongreso/layoutIng.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\layoutIng.html.twig");
    }
}
