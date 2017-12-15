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
        $__internal_43473e2a6735873c7835a2b2609291dd357efe7484a00cea6aca9fd64057dd4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43473e2a6735873c7835a2b2609291dd357efe7484a00cea6aca9fd64057dd4d->enter($__internal_43473e2a6735873c7835a2b2609291dd357efe7484a00cea6aca9fd64057dd4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_43473e2a6735873c7835a2b2609291dd357efe7484a00cea6aca9fd64057dd4d->leave($__internal_43473e2a6735873c7835a2b2609291dd357efe7484a00cea6aca9fd64057dd4d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_94df674a2a3f53fe027eb07b7251b8bfb9340bb978d807d17078875379a955a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94df674a2a3f53fe027eb07b7251b8bfb9340bb978d807d17078875379a955a1->enter($__internal_94df674a2a3f53fe027eb07b7251b8bfb9340bb978d807d17078875379a955a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_94df674a2a3f53fe027eb07b7251b8bfb9340bb978d807d17078875379a955a1->leave($__internal_94df674a2a3f53fe027eb07b7251b8bfb9340bb978d807d17078875379a955a1_prof);

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
