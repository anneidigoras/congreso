<?php

/* CongresoCongresoBundle:Congreso:contact.html.twig */
class __TwigTemplate_1934f1bb2468413af60f97c5be85ae6978786f218313a8872d082f149d1ac63b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layout.html.twig", "CongresoCongresoBundle:Congreso:contact.html.twig", 2);
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
        $__internal_4aa9b8a9575dfbfda5500ce6e2cfa68ce4d03ad3affcfec69f934c37b2439629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aa9b8a9575dfbfda5500ce6e2cfa68ce4d03ad3affcfec69f934c37b2439629->enter($__internal_4aa9b8a9575dfbfda5500ce6e2cfa68ce4d03ad3affcfec69f934c37b2439629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4aa9b8a9575dfbfda5500ce6e2cfa68ce4d03ad3affcfec69f934c37b2439629->leave($__internal_4aa9b8a9575dfbfda5500ce6e2cfa68ce4d03ad3affcfec69f934c37b2439629_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_e579855b39ab3176f6bc1de70d4b87d81e6a44059d7cce14f2822b7843f90b02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e579855b39ab3176f6bc1de70d4b87d81e6a44059d7cce14f2822b7843f90b02->enter($__internal_e579855b39ab3176f6bc1de70d4b87d81e6a44059d7cce14f2822b7843f90b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_e579855b39ab3176f6bc1de70d4b87d81e6a44059d7cce14f2822b7843f90b02->leave($__internal_e579855b39ab3176f6bc1de70d4b87d81e6a44059d7cce14f2822b7843f90b02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee7562d0f0b96753a13aef0ea5c9777c29bbc61b10eb50e1ad20958134c53d2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee7562d0f0b96753a13aef0ea5c9777c29bbc61b10eb50e1ad20958134c53d2c->enter($__internal_ee7562d0f0b96753a13aef0ea5c9777c29bbc61b10eb50e1ad20958134c53d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ee7562d0f0b96753a13aef0ea5c9777c29bbc61b10eb50e1ad20958134c53d2c->leave($__internal_ee7562d0f0b96753a13aef0ea5c9777c29bbc61b10eb50e1ad20958134c53d2c_prof);

    }

    public function getTemplateName()
    {
        return "CongresoCongresoBundle:Congreso:contact.html.twig";
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
", "CongresoCongresoBundle:Congreso:contact.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Congreso/contact.html.twig");
    }
}
