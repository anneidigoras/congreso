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
        $__internal_d107c3e3ddd9d7b93c7f68ac7352fcb2724196494e2ca94667ee4dd1cfff441d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d107c3e3ddd9d7b93c7f68ac7352fcb2724196494e2ca94667ee4dd1cfff441d->enter($__internal_d107c3e3ddd9d7b93c7f68ac7352fcb2724196494e2ca94667ee4dd1cfff441d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_d107c3e3ddd9d7b93c7f68ac7352fcb2724196494e2ca94667ee4dd1cfff441d->leave($__internal_d107c3e3ddd9d7b93c7f68ac7352fcb2724196494e2ca94667ee4dd1cfff441d_prof);

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
