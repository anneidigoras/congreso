<?php

/* @CongresoCongreso/Congreso/contact.html.twig */
class __TwigTemplate_8f42dded9e1188ad903f14387e382b27a36f78fb86c9056b0860f04646d076cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layout.html.twig", "@CongresoCongreso/Congreso/contact.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CongresoCongresoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2d9ddcf12f0a25bd63cff04545e04826fdbb9a7616c564c61c491ad238ad6ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2d9ddcf12f0a25bd63cff04545e04826fdbb9a7616c564c61c491ad238ad6ee->enter($__internal_f2d9ddcf12f0a25bd63cff04545e04826fdbb9a7616c564c61c491ad238ad6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Congreso/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2d9ddcf12f0a25bd63cff04545e04826fdbb9a7616c564c61c491ad238ad6ee->leave($__internal_f2d9ddcf12f0a25bd63cff04545e04826fdbb9a7616c564c61c491ad238ad6ee_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_d3f513e024b2765c0138d40e38832a374cad4334323ae6dfb19737c3735f16a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3f513e024b2765c0138d40e38832a374cad4334323ae6dfb19737c3735f16a9->enter($__internal_d3f513e024b2765c0138d40e38832a374cad4334323ae6dfb19737c3735f16a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_d3f513e024b2765c0138d40e38832a374cad4334323ae6dfb19737c3735f16a9->leave($__internal_d3f513e024b2765c0138d40e38832a374cad4334323ae6dfb19737c3735f16a9_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_904621e2263c112939fcf5dfbd3172bbcfc6444c7288bc904efe2053e98462dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_904621e2263c112939fcf5dfbd3172bbcfc6444c7288bc904efe2053e98462dc->enter($__internal_904621e2263c112939fcf5dfbd3172bbcfc6444c7288bc904efe2053e98462dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <h1>Contacta conmigo</h1>
    </header>

    <p>Puedes encontrarme en las siguientes redes sociales:</p>
\t<ul>
\t\t<li><a href=\"https://twitter.com/claorden\" target=\"_blank\">Twitter</a></li>
\t\t<li><a href=\"https://www.linkedin.com/in/claorden\" target=\"_blank\">LinkedIn</a></li>
\t</ul>
";
        
        $__internal_904621e2263c112939fcf5dfbd3172bbcfc6444c7288bc904efe2053e98462dc->leave($__internal_904621e2263c112939fcf5dfbd3172bbcfc6444c7288bc904efe2053e98462dc_prof);

    }

    public function getTemplateName()
    {
        return "@CongresoCongreso/Congreso/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Congreso/CongresoBundle/Resources/views/Congreso/contact.html.twig #}
{% extends 'CongresoCongresoBundle::layout.html.twig' %}

{% block title %}Contact{% endblock%}

{% block body %}
    <header>
        <h1>Contacta conmigo</h1>
    </header>

    <p>Puedes encontrarme en las siguientes redes sociales:</p>
\t<ul>
\t\t<li><a href=\"https://twitter.com/claorden\" target=\"_blank\">Twitter</a></li>
\t\t<li><a href=\"https://www.linkedin.com/in/claorden\" target=\"_blank\">LinkedIn</a></li>
\t</ul>
{% endblock %}
", "@CongresoCongreso/Congreso/contact.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\Congreso\\contact.html.twig");
    }
}
