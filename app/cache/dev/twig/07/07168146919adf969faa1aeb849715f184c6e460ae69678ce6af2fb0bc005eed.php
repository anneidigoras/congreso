<?php

/* CongresoCongresoBundle::layout.html.twig */
class __TwigTemplate_61d879c2dc354457d85e0550f3811831798637a5b298d29174e7f76972d0deaf extends Twig_Template
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
        $__internal_2f5727e34be820d8d708124c98c05909fae07ba04239cc2444b16698abb4151a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f5727e34be820d8d708124c98c05909fae07ba04239cc2444b16698abb4151a->enter($__internal_2f5727e34be820d8d708124c98c05909fae07ba04239cc2444b16698abb4151a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f5727e34be820d8d708124c98c05909fae07ba04239cc2444b16698abb4151a->leave($__internal_2f5727e34be820d8d708124c98c05909fae07ba04239cc2444b16698abb4151a_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_66b130401f816daa420da827684dab90db6b7ddeadf9284215cae3b9f789068e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66b130401f816daa420da827684dab90db6b7ddeadf9284215cae3b9f789068e->enter($__internal_66b130401f816daa420da827684dab90db6b7ddeadf9284215cae3b9f789068e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "   
";
        
        $__internal_66b130401f816daa420da827684dab90db6b7ddeadf9284215cae3b9f789068e->leave($__internal_66b130401f816daa420da827684dab90db6b7ddeadf9284215cae3b9f789068e_prof);

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
   
{% endblock %}", "CongresoCongresoBundle::layout.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/layout.html.twig");
    }
}
