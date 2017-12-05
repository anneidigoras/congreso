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
        $__internal_06f7852be3366f3657d489d520f5271e929d4eaa2940cee0021a6d294f792dd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06f7852be3366f3657d489d520f5271e929d4eaa2940cee0021a6d294f792dd7->enter($__internal_06f7852be3366f3657d489d520f5271e929d4eaa2940cee0021a6d294f792dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_06f7852be3366f3657d489d520f5271e929d4eaa2940cee0021a6d294f792dd7->leave($__internal_06f7852be3366f3657d489d520f5271e929d4eaa2940cee0021a6d294f792dd7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2230a3e91701ad7f813516935e22dc34255eb77227c93b96125cea2e4e2971b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2230a3e91701ad7f813516935e22dc34255eb77227c93b96125cea2e4e2971b4->enter($__internal_2230a3e91701ad7f813516935e22dc34255eb77227c93b96125cea2e4e2971b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2230a3e91701ad7f813516935e22dc34255eb77227c93b96125cea2e4e2971b4->leave($__internal_2230a3e91701ad7f813516935e22dc34255eb77227c93b96125cea2e4e2971b4_prof);

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
