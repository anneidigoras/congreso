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
        $__internal_a3461b5ee93b3c95e30fa96216bb62adca491459b70aff099654072e4bc925e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3461b5ee93b3c95e30fa96216bb62adca491459b70aff099654072e4bc925e7->enter($__internal_a3461b5ee93b3c95e30fa96216bb62adca491459b70aff099654072e4bc925e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3461b5ee93b3c95e30fa96216bb62adca491459b70aff099654072e4bc925e7->leave($__internal_a3461b5ee93b3c95e30fa96216bb62adca491459b70aff099654072e4bc925e7_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_7084aa8781ee1ab8149e1aa757933cedcbf03c54bb03f965ad65ea57fbd7d9fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7084aa8781ee1ab8149e1aa757933cedcbf03c54bb03f965ad65ea57fbd7d9fb->enter($__internal_7084aa8781ee1ab8149e1aa757933cedcbf03c54bb03f965ad65ea57fbd7d9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "   
";
        
        $__internal_7084aa8781ee1ab8149e1aa757933cedcbf03c54bb03f965ad65ea57fbd7d9fb->leave($__internal_7084aa8781ee1ab8149e1aa757933cedcbf03c54bb03f965ad65ea57fbd7d9fb_prof);

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
