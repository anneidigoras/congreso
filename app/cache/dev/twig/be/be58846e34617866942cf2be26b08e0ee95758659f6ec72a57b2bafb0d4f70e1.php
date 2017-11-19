<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_509df7f7522dbfefae5698a3a5054d6e8cabebd9a5ed39fe452a814ce7bb2921 extends Twig_Template
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
        $__internal_2fe6099ddc5a6f2029af82820bd8beb196b1d67456b300561cde0b88e04c47c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fe6099ddc5a6f2029af82820bd8beb196b1d67456b300561cde0b88e04c47c3->enter($__internal_2fe6099ddc5a6f2029af82820bd8beb196b1d67456b300561cde0b88e04c47c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_2fe6099ddc5a6f2029af82820bd8beb196b1d67456b300561cde0b88e04c47c3->leave($__internal_2fe6099ddc5a6f2029af82820bd8beb196b1d67456b300561cde0b88e04c47c3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
