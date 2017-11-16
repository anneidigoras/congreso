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
        $__internal_d506c919a9f0a77024e124dbbbd250e73105712f2185aa0ae1c87f08b8a73598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d506c919a9f0a77024e124dbbbd250e73105712f2185aa0ae1c87f08b8a73598->enter($__internal_d506c919a9f0a77024e124dbbbd250e73105712f2185aa0ae1c87f08b8a73598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d506c919a9f0a77024e124dbbbd250e73105712f2185aa0ae1c87f08b8a73598->leave($__internal_d506c919a9f0a77024e124dbbbd250e73105712f2185aa0ae1c87f08b8a73598_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ae265a72163d3cbacbc4122ffc20ba0c3138fe67cab7100a2f58d8b8a271734c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae265a72163d3cbacbc4122ffc20ba0c3138fe67cab7100a2f58d8b8a271734c->enter($__internal_ae265a72163d3cbacbc4122ffc20ba0c3138fe67cab7100a2f58d8b8a271734c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ae265a72163d3cbacbc4122ffc20ba0c3138fe67cab7100a2f58d8b8a271734c->leave($__internal_ae265a72163d3cbacbc4122ffc20ba0c3138fe67cab7100a2f58d8b8a271734c_prof);

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
