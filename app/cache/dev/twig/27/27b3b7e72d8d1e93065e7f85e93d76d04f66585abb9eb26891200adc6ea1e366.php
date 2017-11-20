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
        $__internal_02f643490440d90d4107c36b68098b716d9ac65ad6cbf529d96a3fb99bad20db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02f643490440d90d4107c36b68098b716d9ac65ad6cbf529d96a3fb99bad20db->enter($__internal_02f643490440d90d4107c36b68098b716d9ac65ad6cbf529d96a3fb99bad20db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_02f643490440d90d4107c36b68098b716d9ac65ad6cbf529d96a3fb99bad20db->leave($__internal_02f643490440d90d4107c36b68098b716d9ac65ad6cbf529d96a3fb99bad20db_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_055c4c299d381846ee52ceb5d12e8b751fafada44ca47c5e6f92bb02fa9ebf8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_055c4c299d381846ee52ceb5d12e8b751fafada44ca47c5e6f92bb02fa9ebf8b->enter($__internal_055c4c299d381846ee52ceb5d12e8b751fafada44ca47c5e6f92bb02fa9ebf8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_055c4c299d381846ee52ceb5d12e8b751fafada44ca47c5e6f92bb02fa9ebf8b->leave($__internal_055c4c299d381846ee52ceb5d12e8b751fafada44ca47c5e6f92bb02fa9ebf8b_prof);

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
