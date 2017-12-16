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
        $__internal_176f11de80a6a21f8ddae1c28394147d44391ace77d05a6367a6e7570b0a142b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_176f11de80a6a21f8ddae1c28394147d44391ace77d05a6367a6e7570b0a142b->enter($__internal_176f11de80a6a21f8ddae1c28394147d44391ace77d05a6367a6e7570b0a142b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_176f11de80a6a21f8ddae1c28394147d44391ace77d05a6367a6e7570b0a142b->leave($__internal_176f11de80a6a21f8ddae1c28394147d44391ace77d05a6367a6e7570b0a142b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4fdf9e15e07f394f660bb6c7463b79f23cc86f982a6815bcc9df5eee009663a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fdf9e15e07f394f660bb6c7463b79f23cc86f982a6815bcc9df5eee009663a5->enter($__internal_4fdf9e15e07f394f660bb6c7463b79f23cc86f982a6815bcc9df5eee009663a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4fdf9e15e07f394f660bb6c7463b79f23cc86f982a6815bcc9df5eee009663a5->leave($__internal_4fdf9e15e07f394f660bb6c7463b79f23cc86f982a6815bcc9df5eee009663a5_prof);

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
