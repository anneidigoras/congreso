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
        $__internal_ce2c75d0a521571bf32c4e083ebe42745203efb9a548164f7f41376f2d4af50a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce2c75d0a521571bf32c4e083ebe42745203efb9a548164f7f41376f2d4af50a->enter($__internal_ce2c75d0a521571bf32c4e083ebe42745203efb9a548164f7f41376f2d4af50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce2c75d0a521571bf32c4e083ebe42745203efb9a548164f7f41376f2d4af50a->leave($__internal_ce2c75d0a521571bf32c4e083ebe42745203efb9a548164f7f41376f2d4af50a_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_44e70f5853bd01db2d8611e7a02e5b9df4122882e772445d20dea805d2c4ddf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e70f5853bd01db2d8611e7a02e5b9df4122882e772445d20dea805d2c4ddf7->enter($__internal_44e70f5853bd01db2d8611e7a02e5b9df4122882e772445d20dea805d2c4ddf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "   
";
        
        $__internal_44e70f5853bd01db2d8611e7a02e5b9df4122882e772445d20dea805d2c4ddf7->leave($__internal_44e70f5853bd01db2d8611e7a02e5b9df4122882e772445d20dea805d2c4ddf7_prof);

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
