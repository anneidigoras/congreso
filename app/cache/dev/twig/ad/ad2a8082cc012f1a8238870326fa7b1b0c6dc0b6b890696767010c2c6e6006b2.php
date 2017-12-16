<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_d0bcd13e8a409df123603a641872fe21b43a8daa89343941be8c75e38d510d40 extends Twig_Template
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
        $__internal_ad9b8a15bc6ebf3ea5503103070c779fb9a37eae053a0f196cd1bbc31aa79fe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad9b8a15bc6ebf3ea5503103070c779fb9a37eae053a0f196cd1bbc31aa79fe0->enter($__internal_ad9b8a15bc6ebf3ea5503103070c779fb9a37eae053a0f196cd1bbc31aa79fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ad9b8a15bc6ebf3ea5503103070c779fb9a37eae053a0f196cd1bbc31aa79fe0->leave($__internal_ad9b8a15bc6ebf3ea5503103070c779fb9a37eae053a0f196cd1bbc31aa79fe0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6dc6f4d2a3f8a438c5f5266d4b2d1b473d8e91a7bc250af6f721d1c80fd9eb56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dc6f4d2a3f8a438c5f5266d4b2d1b473d8e91a7bc250af6f721d1c80fd9eb56->enter($__internal_6dc6f4d2a3f8a438c5f5266d4b2d1b473d8e91a7bc250af6f721d1c80fd9eb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6dc6f4d2a3f8a438c5f5266d4b2d1b473d8e91a7bc250af6f721d1c80fd9eb56->leave($__internal_6dc6f4d2a3f8a438c5f5266d4b2d1b473d8e91a7bc250af6f721d1c80fd9eb56_prof);

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
