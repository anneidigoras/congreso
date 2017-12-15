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
        $__internal_a27b72f2e73936a8246ce821a487d859d7f4a140ef7d2ac278dfc2cc6865541d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a27b72f2e73936a8246ce821a487d859d7f4a140ef7d2ac278dfc2cc6865541d->enter($__internal_a27b72f2e73936a8246ce821a487d859d7f4a140ef7d2ac278dfc2cc6865541d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a27b72f2e73936a8246ce821a487d859d7f4a140ef7d2ac278dfc2cc6865541d->leave($__internal_a27b72f2e73936a8246ce821a487d859d7f4a140ef7d2ac278dfc2cc6865541d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_12b4a57815605f118b679a9d8baf8d9d559d00c66f33235901e49c3b24220e4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12b4a57815605f118b679a9d8baf8d9d559d00c66f33235901e49c3b24220e4a->enter($__internal_12b4a57815605f118b679a9d8baf8d9d559d00c66f33235901e49c3b24220e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_12b4a57815605f118b679a9d8baf8d9d559d00c66f33235901e49c3b24220e4a->leave($__internal_12b4a57815605f118b679a9d8baf8d9d559d00c66f33235901e49c3b24220e4a_prof);

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
