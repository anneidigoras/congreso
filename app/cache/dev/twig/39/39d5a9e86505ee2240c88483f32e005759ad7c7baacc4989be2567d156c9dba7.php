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
        $__internal_271304223ce266e7e773206bdd98cb04e80d0e96f5b95b9cb15e3cebcd86316f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_271304223ce266e7e773206bdd98cb04e80d0e96f5b95b9cb15e3cebcd86316f->enter($__internal_271304223ce266e7e773206bdd98cb04e80d0e96f5b95b9cb15e3cebcd86316f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Congreso:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_271304223ce266e7e773206bdd98cb04e80d0e96f5b95b9cb15e3cebcd86316f->leave($__internal_271304223ce266e7e773206bdd98cb04e80d0e96f5b95b9cb15e3cebcd86316f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_91cf09ced5b97795a652f4c6c10ebcb7b82db8bcb055150eb09c5cdeb87ffe8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91cf09ced5b97795a652f4c6c10ebcb7b82db8bcb055150eb09c5cdeb87ffe8a->enter($__internal_91cf09ced5b97795a652f4c6c10ebcb7b82db8bcb055150eb09c5cdeb87ffe8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_91cf09ced5b97795a652f4c6c10ebcb7b82db8bcb055150eb09c5cdeb87ffe8a->leave($__internal_91cf09ced5b97795a652f4c6c10ebcb7b82db8bcb055150eb09c5cdeb87ffe8a_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6e2a7c5dad14a380f84acde39f00f097646f851a280db58b0246af1aeba34b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6e2a7c5dad14a380f84acde39f00f097646f851a280db58b0246af1aeba34b7->enter($__internal_b6e2a7c5dad14a380f84acde39f00f097646f851a280db58b0246af1aeba34b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b6e2a7c5dad14a380f84acde39f00f097646f851a280db58b0246af1aeba34b7->leave($__internal_b6e2a7c5dad14a380f84acde39f00f097646f851a280db58b0246af1aeba34b7_prof);

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
