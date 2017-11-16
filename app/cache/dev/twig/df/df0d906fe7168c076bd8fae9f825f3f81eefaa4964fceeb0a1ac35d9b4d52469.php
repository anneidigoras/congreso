<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_62c1bcfd9d93daca2545583053af38daed66420e92c8e37ceda6f6b6a5ab76c0 extends Twig_Template
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
        $__internal_584309fb9d0be4dbb316efba0369c4689564d0a6ad89c2067b00b242cc71a9ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_584309fb9d0be4dbb316efba0369c4689564d0a6ad89c2067b00b242cc71a9ea->enter($__internal_584309fb9d0be4dbb316efba0369c4689564d0a6ad89c2067b00b242cc71a9ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_584309fb9d0be4dbb316efba0369c4689564d0a6ad89c2067b00b242cc71a9ea->leave($__internal_584309fb9d0be4dbb316efba0369c4689564d0a6ad89c2067b00b242cc71a9ea_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4b3b840d633b1e7904727aa8ce11f1d146960ada3b8e1ca75512c367a9adf0df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b3b840d633b1e7904727aa8ce11f1d146960ada3b8e1ca75512c367a9adf0df->enter($__internal_4b3b840d633b1e7904727aa8ce11f1d146960ada3b8e1ca75512c367a9adf0df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4b3b840d633b1e7904727aa8ce11f1d146960ada3b8e1ca75512c367a9adf0df->leave($__internal_4b3b840d633b1e7904727aa8ce11f1d146960ada3b8e1ca75512c367a9adf0df_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
