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
        $__internal_781ffabe07c1c1f554d245fd57fcfd6729cd20e2d4be5804cba2331b9d05acc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_781ffabe07c1c1f554d245fd57fcfd6729cd20e2d4be5804cba2331b9d05acc0->enter($__internal_781ffabe07c1c1f554d245fd57fcfd6729cd20e2d4be5804cba2331b9d05acc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_781ffabe07c1c1f554d245fd57fcfd6729cd20e2d4be5804cba2331b9d05acc0->leave($__internal_781ffabe07c1c1f554d245fd57fcfd6729cd20e2d4be5804cba2331b9d05acc0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d513e243ce7b192504b9aa6850308c27b935d9e6a59da0de206c82a92e537138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d513e243ce7b192504b9aa6850308c27b935d9e6a59da0de206c82a92e537138->enter($__internal_d513e243ce7b192504b9aa6850308c27b935d9e6a59da0de206c82a92e537138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d513e243ce7b192504b9aa6850308c27b935d9e6a59da0de206c82a92e537138->leave($__internal_d513e243ce7b192504b9aa6850308c27b935d9e6a59da0de206c82a92e537138_prof);

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
