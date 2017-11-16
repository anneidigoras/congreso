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
        $__internal_11a7006fe794f1b004afc200ad22dffff6432ee3f041c701147104c8f3cc5242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11a7006fe794f1b004afc200ad22dffff6432ee3f041c701147104c8f3cc5242->enter($__internal_11a7006fe794f1b004afc200ad22dffff6432ee3f041c701147104c8f3cc5242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_11a7006fe794f1b004afc200ad22dffff6432ee3f041c701147104c8f3cc5242->leave($__internal_11a7006fe794f1b004afc200ad22dffff6432ee3f041c701147104c8f3cc5242_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_33cd8181d9e7225cb8cc0ff62628bff59ba11f2c2ab7903669e63810e4addb2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33cd8181d9e7225cb8cc0ff62628bff59ba11f2c2ab7903669e63810e4addb2e->enter($__internal_33cd8181d9e7225cb8cc0ff62628bff59ba11f2c2ab7903669e63810e4addb2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_33cd8181d9e7225cb8cc0ff62628bff59ba11f2c2ab7903669e63810e4addb2e->leave($__internal_33cd8181d9e7225cb8cc0ff62628bff59ba11f2c2ab7903669e63810e4addb2e_prof);

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
