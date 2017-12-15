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
        $__internal_8549465d2b00bf737a4c17db754fff0282fb1d6a76b10a54502609def0297782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8549465d2b00bf737a4c17db754fff0282fb1d6a76b10a54502609def0297782->enter($__internal_8549465d2b00bf737a4c17db754fff0282fb1d6a76b10a54502609def0297782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8549465d2b00bf737a4c17db754fff0282fb1d6a76b10a54502609def0297782->leave($__internal_8549465d2b00bf737a4c17db754fff0282fb1d6a76b10a54502609def0297782_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_b06b29b1578c3e3ac2884f39832ae1f41873091ac8de29f8adda979b2463f036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b06b29b1578c3e3ac2884f39832ae1f41873091ac8de29f8adda979b2463f036->enter($__internal_b06b29b1578c3e3ac2884f39832ae1f41873091ac8de29f8adda979b2463f036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "   
";
        
        $__internal_b06b29b1578c3e3ac2884f39832ae1f41873091ac8de29f8adda979b2463f036->leave($__internal_b06b29b1578c3e3ac2884f39832ae1f41873091ac8de29f8adda979b2463f036_prof);

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
