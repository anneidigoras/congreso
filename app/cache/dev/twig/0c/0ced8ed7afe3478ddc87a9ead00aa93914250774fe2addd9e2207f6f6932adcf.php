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
        $__internal_734a53c5a448f8c6d3297f61b2389ad0afcd0e6ce7313165183eb1c930206dbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_734a53c5a448f8c6d3297f61b2389ad0afcd0e6ce7313165183eb1c930206dbe->enter($__internal_734a53c5a448f8c6d3297f61b2389ad0afcd0e6ce7313165183eb1c930206dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_734a53c5a448f8c6d3297f61b2389ad0afcd0e6ce7313165183eb1c930206dbe->leave($__internal_734a53c5a448f8c6d3297f61b2389ad0afcd0e6ce7313165183eb1c930206dbe_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8057c033716a1fc9478cdc3574b0321a578bafc7b9e2eec23279bc6d103560a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8057c033716a1fc9478cdc3574b0321a578bafc7b9e2eec23279bc6d103560a5->enter($__internal_8057c033716a1fc9478cdc3574b0321a578bafc7b9e2eec23279bc6d103560a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8057c033716a1fc9478cdc3574b0321a578bafc7b9e2eec23279bc6d103560a5->leave($__internal_8057c033716a1fc9478cdc3574b0321a578bafc7b9e2eec23279bc6d103560a5_prof);

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
