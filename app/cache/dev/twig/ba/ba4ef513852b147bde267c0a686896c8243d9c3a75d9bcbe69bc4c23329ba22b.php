<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_7874052c15dae4075e16a4a56c85c17c3e7784573d6b5760baf4552d0e949973 extends Twig_Template
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
        $__internal_098bc6ab48a327d7c68f7c97c7ffc40ecf19b7aa1072705c66aab5e04d689d8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_098bc6ab48a327d7c68f7c97c7ffc40ecf19b7aa1072705c66aab5e04d689d8b->enter($__internal_098bc6ab48a327d7c68f7c97c7ffc40ecf19b7aa1072705c66aab5e04d689d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_098bc6ab48a327d7c68f7c97c7ffc40ecf19b7aa1072705c66aab5e04d689d8b->leave($__internal_098bc6ab48a327d7c68f7c97c7ffc40ecf19b7aa1072705c66aab5e04d689d8b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
