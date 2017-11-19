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
        $__internal_0f8084db53759619c883179089160b9649bdc93651bcc76d3613670e1a272f93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f8084db53759619c883179089160b9649bdc93651bcc76d3613670e1a272f93->enter($__internal_0f8084db53759619c883179089160b9649bdc93651bcc76d3613670e1a272f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0f8084db53759619c883179089160b9649bdc93651bcc76d3613670e1a272f93->leave($__internal_0f8084db53759619c883179089160b9649bdc93651bcc76d3613670e1a272f93_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_65b3d94e7a3d08fd0992cc1f4d237a038740827ae6c431eb4dbbf48da486cc77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65b3d94e7a3d08fd0992cc1f4d237a038740827ae6c431eb4dbbf48da486cc77->enter($__internal_65b3d94e7a3d08fd0992cc1f4d237a038740827ae6c431eb4dbbf48da486cc77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_65b3d94e7a3d08fd0992cc1f4d237a038740827ae6c431eb4dbbf48da486cc77->leave($__internal_65b3d94e7a3d08fd0992cc1f4d237a038740827ae6c431eb4dbbf48da486cc77_prof);

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
