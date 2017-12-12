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
        $__internal_2ad639a8bc80e2e779c7d2755a0fc004587e86068a77338f9895bc1c64b5e0a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad639a8bc80e2e779c7d2755a0fc004587e86068a77338f9895bc1c64b5e0a8->enter($__internal_2ad639a8bc80e2e779c7d2755a0fc004587e86068a77338f9895bc1c64b5e0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/layoutIng.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ad639a8bc80e2e779c7d2755a0fc004587e86068a77338f9895bc1c64b5e0a8->leave($__internal_2ad639a8bc80e2e779c7d2755a0fc004587e86068a77338f9895bc1c64b5e0a8_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_a7ad69df6a28e643b865398e89decaac1b341dbab83ae93a71e4f2d4f5954f8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ad69df6a28e643b865398e89decaac1b341dbab83ae93a71e4f2d4f5954f8a->enter($__internal_a7ad69df6a28e643b865398e89decaac1b341dbab83ae93a71e4f2d4f5954f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "   
";
        
        $__internal_a7ad69df6a28e643b865398e89decaac1b341dbab83ae93a71e4f2d4f5954f8a->leave($__internal_a7ad69df6a28e643b865398e89decaac1b341dbab83ae93a71e4f2d4f5954f8a_prof);

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
