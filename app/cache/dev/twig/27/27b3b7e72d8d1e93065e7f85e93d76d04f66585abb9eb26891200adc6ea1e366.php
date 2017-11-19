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
        $__internal_bf08441b972211116dcb6ae5eb90e52786bdc9baad9d09e6913736b0c1867996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf08441b972211116dcb6ae5eb90e52786bdc9baad9d09e6913736b0c1867996->enter($__internal_bf08441b972211116dcb6ae5eb90e52786bdc9baad9d09e6913736b0c1867996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_bf08441b972211116dcb6ae5eb90e52786bdc9baad9d09e6913736b0c1867996->leave($__internal_bf08441b972211116dcb6ae5eb90e52786bdc9baad9d09e6913736b0c1867996_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_dbd8bfe1ba481cf3a10aa02623db13dde80753d0f248e27fcb8a159fcffe9134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd8bfe1ba481cf3a10aa02623db13dde80753d0f248e27fcb8a159fcffe9134->enter($__internal_dbd8bfe1ba481cf3a10aa02623db13dde80753d0f248e27fcb8a159fcffe9134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_dbd8bfe1ba481cf3a10aa02623db13dde80753d0f248e27fcb8a159fcffe9134->leave($__internal_dbd8bfe1ba481cf3a10aa02623db13dde80753d0f248e27fcb8a159fcffe9134_prof);

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
