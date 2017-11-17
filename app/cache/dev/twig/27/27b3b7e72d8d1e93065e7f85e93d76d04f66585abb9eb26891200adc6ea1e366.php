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
        $__internal_1378ae8c76a9f43d5ce771b141c1c839bc3a160f8cd9a09ed48ad60a154232f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1378ae8c76a9f43d5ce771b141c1c839bc3a160f8cd9a09ed48ad60a154232f2->enter($__internal_1378ae8c76a9f43d5ce771b141c1c839bc3a160f8cd9a09ed48ad60a154232f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1378ae8c76a9f43d5ce771b141c1c839bc3a160f8cd9a09ed48ad60a154232f2->leave($__internal_1378ae8c76a9f43d5ce771b141c1c839bc3a160f8cd9a09ed48ad60a154232f2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5cff974eea381054a3c2debe45bf9d22714dc6f530b24066890d0f9493dcad64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cff974eea381054a3c2debe45bf9d22714dc6f530b24066890d0f9493dcad64->enter($__internal_5cff974eea381054a3c2debe45bf9d22714dc6f530b24066890d0f9493dcad64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5cff974eea381054a3c2debe45bf9d22714dc6f530b24066890d0f9493dcad64->leave($__internal_5cff974eea381054a3c2debe45bf9d22714dc6f530b24066890d0f9493dcad64_prof);

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
