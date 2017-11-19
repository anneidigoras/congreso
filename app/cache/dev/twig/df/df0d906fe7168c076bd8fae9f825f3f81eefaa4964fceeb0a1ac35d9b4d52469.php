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
        $__internal_7e30cb4197333b4b59bd5614717e3da1d58521a9cd690f187cf7ef4cd5983acd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e30cb4197333b4b59bd5614717e3da1d58521a9cd690f187cf7ef4cd5983acd->enter($__internal_7e30cb4197333b4b59bd5614717e3da1d58521a9cd690f187cf7ef4cd5983acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7e30cb4197333b4b59bd5614717e3da1d58521a9cd690f187cf7ef4cd5983acd->leave($__internal_7e30cb4197333b4b59bd5614717e3da1d58521a9cd690f187cf7ef4cd5983acd_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_69162d8276d94c11ffa3d30e705cba29ce4e1f57f5b1202b689767c3118a5c14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69162d8276d94c11ffa3d30e705cba29ce4e1f57f5b1202b689767c3118a5c14->enter($__internal_69162d8276d94c11ffa3d30e705cba29ce4e1f57f5b1202b689767c3118a5c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_69162d8276d94c11ffa3d30e705cba29ce4e1f57f5b1202b689767c3118a5c14->leave($__internal_69162d8276d94c11ffa3d30e705cba29ce4e1f57f5b1202b689767c3118a5c14_prof);

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
