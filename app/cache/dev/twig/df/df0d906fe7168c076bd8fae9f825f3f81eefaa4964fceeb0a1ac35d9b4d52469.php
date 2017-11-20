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
        $__internal_7b4556d2f32c7c521bd7687fdb2888f3e783502ab2ff3f214c83d9a5963241ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b4556d2f32c7c521bd7687fdb2888f3e783502ab2ff3f214c83d9a5963241ce->enter($__internal_7b4556d2f32c7c521bd7687fdb2888f3e783502ab2ff3f214c83d9a5963241ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7b4556d2f32c7c521bd7687fdb2888f3e783502ab2ff3f214c83d9a5963241ce->leave($__internal_7b4556d2f32c7c521bd7687fdb2888f3e783502ab2ff3f214c83d9a5963241ce_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5a2556eb33839572d6c42c8416ca3906d4b90777cff4baf954a98c9b505d6de4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a2556eb33839572d6c42c8416ca3906d4b90777cff4baf954a98c9b505d6de4->enter($__internal_5a2556eb33839572d6c42c8416ca3906d4b90777cff4baf954a98c9b505d6de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5a2556eb33839572d6c42c8416ca3906d4b90777cff4baf954a98c9b505d6de4->leave($__internal_5a2556eb33839572d6c42c8416ca3906d4b90777cff4baf954a98c9b505d6de4_prof);

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
