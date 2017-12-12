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
        $__internal_19f0288a886809773f2daedefc7c557718df04da3ba55c662bbd6cde4ed3904c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f0288a886809773f2daedefc7c557718df04da3ba55c662bbd6cde4ed3904c->enter($__internal_19f0288a886809773f2daedefc7c557718df04da3ba55c662bbd6cde4ed3904c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19f0288a886809773f2daedefc7c557718df04da3ba55c662bbd6cde4ed3904c->leave($__internal_19f0288a886809773f2daedefc7c557718df04da3ba55c662bbd6cde4ed3904c_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_1396c6b08270864bb2270a6e9a05611198b440fd6d668a6caa961a49e19d1528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1396c6b08270864bb2270a6e9a05611198b440fd6d668a6caa961a49e19d1528->enter($__internal_1396c6b08270864bb2270a6e9a05611198b440fd6d668a6caa961a49e19d1528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "   
";
        
        $__internal_1396c6b08270864bb2270a6e9a05611198b440fd6d668a6caa961a49e19d1528->leave($__internal_1396c6b08270864bb2270a6e9a05611198b440fd6d668a6caa961a49e19d1528_prof);

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
