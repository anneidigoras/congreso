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
        $__internal_9aedd0aa2cd2dc8c3afc4bb6f87157d5bd09214e0a1eb572c241a69c4ae3c2fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aedd0aa2cd2dc8c3afc4bb6f87157d5bd09214e0a1eb572c241a69c4ae3c2fa->enter($__internal_9aedd0aa2cd2dc8c3afc4bb6f87157d5bd09214e0a1eb572c241a69c4ae3c2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9aedd0aa2cd2dc8c3afc4bb6f87157d5bd09214e0a1eb572c241a69c4ae3c2fa->leave($__internal_9aedd0aa2cd2dc8c3afc4bb6f87157d5bd09214e0a1eb572c241a69c4ae3c2fa_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e2ef41ed6c3758e9cfb628e27b1decead8f87539212613b68ea778a892888584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2ef41ed6c3758e9cfb628e27b1decead8f87539212613b68ea778a892888584->enter($__internal_e2ef41ed6c3758e9cfb628e27b1decead8f87539212613b68ea778a892888584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e2ef41ed6c3758e9cfb628e27b1decead8f87539212613b68ea778a892888584->leave($__internal_e2ef41ed6c3758e9cfb628e27b1decead8f87539212613b68ea778a892888584_prof);

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
