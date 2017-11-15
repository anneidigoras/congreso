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
        $__internal_f30f1842cec4c8e7d50b5ada5b860af2cdb30bb385b49b870dc500b2ebd4f942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f30f1842cec4c8e7d50b5ada5b860af2cdb30bb385b49b870dc500b2ebd4f942->enter($__internal_f30f1842cec4c8e7d50b5ada5b860af2cdb30bb385b49b870dc500b2ebd4f942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f30f1842cec4c8e7d50b5ada5b860af2cdb30bb385b49b870dc500b2ebd4f942->leave($__internal_f30f1842cec4c8e7d50b5ada5b860af2cdb30bb385b49b870dc500b2ebd4f942_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9c73e6bac306f39faa8fca0725505763c81147927ffef6a90698eb16fb1d3c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c73e6bac306f39faa8fca0725505763c81147927ffef6a90698eb16fb1d3c8c->enter($__internal_9c73e6bac306f39faa8fca0725505763c81147927ffef6a90698eb16fb1d3c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9c73e6bac306f39faa8fca0725505763c81147927ffef6a90698eb16fb1d3c8c->leave($__internal_9c73e6bac306f39faa8fca0725505763c81147927ffef6a90698eb16fb1d3c8c_prof);

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
