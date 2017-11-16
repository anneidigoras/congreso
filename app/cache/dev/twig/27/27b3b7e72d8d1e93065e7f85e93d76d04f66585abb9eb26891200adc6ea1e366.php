<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_673ecf309ce9673f92ac8e50a4ee1698b0dd108b427c7dfc76237f117e1565cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3c6dff6505829444c9b63bb79f4c3e261ceae3fcd59392d9edf1e45dfd030d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c6dff6505829444c9b63bb79f4c3e261ceae3fcd59392d9edf1e45dfd030d5->enter($__internal_a3c6dff6505829444c9b63bb79f4c3e261ceae3fcd59392d9edf1e45dfd030d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a3c6dff6505829444c9b63bb79f4c3e261ceae3fcd59392d9edf1e45dfd030d5->leave($__internal_a3c6dff6505829444c9b63bb79f4c3e261ceae3fcd59392d9edf1e45dfd030d5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7c96abfa233ff3f7f8588bda86acefef4881a7bd83cc358d44d4800da93117e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c96abfa233ff3f7f8588bda86acefef4881a7bd83cc358d44d4800da93117e8->enter($__internal_7c96abfa233ff3f7f8588bda86acefef4881a7bd83cc358d44d4800da93117e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7c96abfa233ff3f7f8588bda86acefef4881a7bd83cc358d44d4800da93117e8->leave($__internal_7c96abfa233ff3f7f8588bda86acefef4881a7bd83cc358d44d4800da93117e8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
