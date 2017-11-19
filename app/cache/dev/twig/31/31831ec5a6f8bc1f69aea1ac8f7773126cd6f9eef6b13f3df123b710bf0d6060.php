<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_5da315c818ef38d16496fe2340bdc50433ed195bd8cd60980c13c6c43c062fcc extends Twig_Template
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
        $__internal_7178ba67c8c668243ea46b2ecff99bcf4a6185da5c9ca4a90ecdf1a54df8c5f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7178ba67c8c668243ea46b2ecff99bcf4a6185da5c9ca4a90ecdf1a54df8c5f2->enter($__internal_7178ba67c8c668243ea46b2ecff99bcf4a6185da5c9ca4a90ecdf1a54df8c5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_7178ba67c8c668243ea46b2ecff99bcf4a6185da5c9ca4a90ecdf1a54df8c5f2->leave($__internal_7178ba67c8c668243ea46b2ecff99bcf4a6185da5c9ca4a90ecdf1a54df8c5f2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
