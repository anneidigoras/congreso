<?php

/* CongresoCongresoBundle::layout.html.twig */
class __TwigTemplate_f4ac9998e278eacb9fd76807743edd9a406aaa41acd8a8867fa7db91b33f4883 extends Twig_Template
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
        $__internal_65da3686a2b12249f931db64f15c44644c2dde182bcf0ba744e017ed2dc8e1cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65da3686a2b12249f931db64f15c44644c2dde182bcf0ba744e017ed2dc8e1cd->enter($__internal_65da3686a2b12249f931db64f15c44644c2dde182bcf0ba744e017ed2dc8e1cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65da3686a2b12249f931db64f15c44644c2dde182bcf0ba744e017ed2dc8e1cd->leave($__internal_65da3686a2b12249f931db64f15c44644c2dde182bcf0ba744e017ed2dc8e1cd_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_64ec4bbc3bc32678f0e8ac46b5c08404437b66a776cdca9fcc85130c4a6626d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64ec4bbc3bc32678f0e8ac46b5c08404437b66a776cdca9fcc85130c4a6626d0->enter($__internal_64ec4bbc3bc32678f0e8ac46b5c08404437b66a776cdca9fcc85130c4a6626d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "   
";
        
        $__internal_64ec4bbc3bc32678f0e8ac46b5c08404437b66a776cdca9fcc85130c4a6626d0->leave($__internal_64ec4bbc3bc32678f0e8ac46b5c08404437b66a776cdca9fcc85130c4a6626d0_prof);

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
