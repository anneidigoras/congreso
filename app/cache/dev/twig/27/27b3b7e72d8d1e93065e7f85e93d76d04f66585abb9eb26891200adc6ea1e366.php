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
        $__internal_98750f5eacb2a147a80b7873c82628ca681379f5f7ea9ae3ced2aee59029dc9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98750f5eacb2a147a80b7873c82628ca681379f5f7ea9ae3ced2aee59029dc9c->enter($__internal_98750f5eacb2a147a80b7873c82628ca681379f5f7ea9ae3ced2aee59029dc9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_98750f5eacb2a147a80b7873c82628ca681379f5f7ea9ae3ced2aee59029dc9c->leave($__internal_98750f5eacb2a147a80b7873c82628ca681379f5f7ea9ae3ced2aee59029dc9c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4f86b109cf2a81d40f7cfe08c5ee2add903cd189eb31ef06d4db1d16a9846551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f86b109cf2a81d40f7cfe08c5ee2add903cd189eb31ef06d4db1d16a9846551->enter($__internal_4f86b109cf2a81d40f7cfe08c5ee2add903cd189eb31ef06d4db1d16a9846551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4f86b109cf2a81d40f7cfe08c5ee2add903cd189eb31ef06d4db1d16a9846551->leave($__internal_4f86b109cf2a81d40f7cfe08c5ee2add903cd189eb31ef06d4db1d16a9846551_prof);

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
