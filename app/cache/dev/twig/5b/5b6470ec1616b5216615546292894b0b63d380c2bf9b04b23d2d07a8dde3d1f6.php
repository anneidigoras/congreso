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
        $__internal_3ca6eb44ecfa95b1f102158d98369418afd6d26be93756dff719080751bf9493 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ca6eb44ecfa95b1f102158d98369418afd6d26be93756dff719080751bf9493->enter($__internal_3ca6eb44ecfa95b1f102158d98369418afd6d26be93756dff719080751bf9493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/Congreso/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ca6eb44ecfa95b1f102158d98369418afd6d26be93756dff719080751bf9493->leave($__internal_3ca6eb44ecfa95b1f102158d98369418afd6d26be93756dff719080751bf9493_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d83e0a463fab79dc2a7959a106500a30b53fd2c60b0a959259ed850b82f2221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d83e0a463fab79dc2a7959a106500a30b53fd2c60b0a959259ed850b82f2221->enter($__internal_9d83e0a463fab79dc2a7959a106500a30b53fd2c60b0a959259ed850b82f2221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_9d83e0a463fab79dc2a7959a106500a30b53fd2c60b0a959259ed850b82f2221->leave($__internal_9d83e0a463fab79dc2a7959a106500a30b53fd2c60b0a959259ed850b82f2221_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_090a35d516b271ad500d98818155e4585c0552e72162c6e5a9bdf286c47b95dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_090a35d516b271ad500d98818155e4585c0552e72162c6e5a9bdf286c47b95dc->enter($__internal_090a35d516b271ad500d98818155e4585c0552e72162c6e5a9bdf286c47b95dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_090a35d516b271ad500d98818155e4585c0552e72162c6e5a9bdf286c47b95dc->leave($__internal_090a35d516b271ad500d98818155e4585c0552e72162c6e5a9bdf286c47b95dc_prof);

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
