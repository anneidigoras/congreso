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
        $__internal_3062ed9731f43b82924ea14f8cd8fbdc8525b5e2c51fa0e3663b6c23b608e033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3062ed9731f43b82924ea14f8cd8fbdc8525b5e2c51fa0e3663b6c23b608e033->enter($__internal_3062ed9731f43b82924ea14f8cd8fbdc8525b5e2c51fa0e3663b6c23b608e033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3062ed9731f43b82924ea14f8cd8fbdc8525b5e2c51fa0e3663b6c23b608e033->leave($__internal_3062ed9731f43b82924ea14f8cd8fbdc8525b5e2c51fa0e3663b6c23b608e033_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_975b0171ca9ada40f9110543092f28260b34c9af04435c30abf6a9416a51cd0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_975b0171ca9ada40f9110543092f28260b34c9af04435c30abf6a9416a51cd0f->enter($__internal_975b0171ca9ada40f9110543092f28260b34c9af04435c30abf6a9416a51cd0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_975b0171ca9ada40f9110543092f28260b34c9af04435c30abf6a9416a51cd0f->leave($__internal_975b0171ca9ada40f9110543092f28260b34c9af04435c30abf6a9416a51cd0f_prof);

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
