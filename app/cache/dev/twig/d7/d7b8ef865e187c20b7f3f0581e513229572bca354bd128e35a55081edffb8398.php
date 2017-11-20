<?php

/* @CongresoCongreso/layout.html.twig */
class __TwigTemplate_4e877c02292a15b22564915b91474889d0b9c6fac0d4cec026d44da17e7891df extends Twig_Template
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
        $__internal_05981e9b7edc491e3cf64e9018b8e936a8b848935b666ca7b10772eceaa53d62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05981e9b7edc491e3cf64e9018b8e936a8b848935b666ca7b10772eceaa53d62->enter($__internal_05981e9b7edc491e3cf64e9018b8e936a8b848935b666ca7b10772eceaa53d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05981e9b7edc491e3cf64e9018b8e936a8b848935b666ca7b10772eceaa53d62->leave($__internal_05981e9b7edc491e3cf64e9018b8e936a8b848935b666ca7b10772eceaa53d62_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_1f73595dcc25f8f32ae4c22ffb719474502322244121b8190d9e77eebc06ee7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f73595dcc25f8f32ae4c22ffb719474502322244121b8190d9e77eebc06ee7f->enter($__internal_1f73595dcc25f8f32ae4c22ffb719474502322244121b8190d9e77eebc06ee7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "   
";
        
        $__internal_1f73595dcc25f8f32ae4c22ffb719474502322244121b8190d9e77eebc06ee7f->leave($__internal_1f73595dcc25f8f32ae4c22ffb719474502322244121b8190d9e77eebc06ee7f_prof);

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
