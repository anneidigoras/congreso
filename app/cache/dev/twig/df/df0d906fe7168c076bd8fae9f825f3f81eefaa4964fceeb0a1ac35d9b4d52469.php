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
        $__internal_a4a05af834da302f9852de9d442888f1ef5bd8c61e85cec89e92576b8cdea0fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a05af834da302f9852de9d442888f1ef5bd8c61e85cec89e92576b8cdea0fb->enter($__internal_a4a05af834da302f9852de9d442888f1ef5bd8c61e85cec89e92576b8cdea0fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a4a05af834da302f9852de9d442888f1ef5bd8c61e85cec89e92576b8cdea0fb->leave($__internal_a4a05af834da302f9852de9d442888f1ef5bd8c61e85cec89e92576b8cdea0fb_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5a0e2e40cf1e97e28ddbb462b7e3df575a2252b88d13f7e1a36969eee79c729c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a0e2e40cf1e97e28ddbb462b7e3df575a2252b88d13f7e1a36969eee79c729c->enter($__internal_5a0e2e40cf1e97e28ddbb462b7e3df575a2252b88d13f7e1a36969eee79c729c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5a0e2e40cf1e97e28ddbb462b7e3df575a2252b88d13f7e1a36969eee79c729c->leave($__internal_5a0e2e40cf1e97e28ddbb462b7e3df575a2252b88d13f7e1a36969eee79c729c_prof);

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
