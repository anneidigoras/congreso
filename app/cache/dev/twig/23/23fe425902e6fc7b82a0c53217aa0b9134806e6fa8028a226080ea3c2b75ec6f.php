<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_33930ef06cb19c6eb9d6a66179903609a09b918053a9b9e7c8271cc036f8b50a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89bbf08b01b3a2bd568466aeed4b8ca478ee816ee1c5e4b874e7f47d0c3b9746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89bbf08b01b3a2bd568466aeed4b8ca478ee816ee1c5e4b874e7f47d0c3b9746->enter($__internal_89bbf08b01b3a2bd568466aeed4b8ca478ee816ee1c5e4b874e7f47d0c3b9746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_89bbf08b01b3a2bd568466aeed4b8ca478ee816ee1c5e4b874e7f47d0c3b9746->leave($__internal_89bbf08b01b3a2bd568466aeed4b8ca478ee816ee1c5e4b874e7f47d0c3b9746_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
