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
        $__internal_87f5737b393e332f2bbda04fcb1d7269a28ec571faff25a14f5180d48450db75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87f5737b393e332f2bbda04fcb1d7269a28ec571faff25a14f5180d48450db75->enter($__internal_87f5737b393e332f2bbda04fcb1d7269a28ec571faff25a14f5180d48450db75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_87f5737b393e332f2bbda04fcb1d7269a28ec571faff25a14f5180d48450db75->leave($__internal_87f5737b393e332f2bbda04fcb1d7269a28ec571faff25a14f5180d48450db75_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ef79fa959c0e6f7dc692449c69e50f153b46613dc630ca1c85b2a09f9a102959 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef79fa959c0e6f7dc692449c69e50f153b46613dc630ca1c85b2a09f9a102959->enter($__internal_ef79fa959c0e6f7dc692449c69e50f153b46613dc630ca1c85b2a09f9a102959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ef79fa959c0e6f7dc692449c69e50f153b46613dc630ca1c85b2a09f9a102959->leave($__internal_ef79fa959c0e6f7dc692449c69e50f153b46613dc630ca1c85b2a09f9a102959_prof);

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
