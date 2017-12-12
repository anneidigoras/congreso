<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_df58981b57036f7c17d503df2830623538fe972fd72628108287c6db3cddafb3 extends Twig_Template
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
        $__internal_36b7b72b34f658a8d3afa4a011126f2a07c0a28a96647299d31b4e3f503c7489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36b7b72b34f658a8d3afa4a011126f2a07c0a28a96647299d31b4e3f503c7489->enter($__internal_36b7b72b34f658a8d3afa4a011126f2a07c0a28a96647299d31b4e3f503c7489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_36b7b72b34f658a8d3afa4a011126f2a07c0a28a96647299d31b4e3f503c7489->leave($__internal_36b7b72b34f658a8d3afa4a011126f2a07c0a28a96647299d31b4e3f503c7489_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d5ffa3696ae50100fd933a061ca71a4d5109f738b2650b56f5ca08eade19b8ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5ffa3696ae50100fd933a061ca71a4d5109f738b2650b56f5ca08eade19b8ee->enter($__internal_d5ffa3696ae50100fd933a061ca71a4d5109f738b2650b56f5ca08eade19b8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d5ffa3696ae50100fd933a061ca71a4d5109f738b2650b56f5ca08eade19b8ee->leave($__internal_d5ffa3696ae50100fd933a061ca71a4d5109f738b2650b56f5ca08eade19b8ee_prof);

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
