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
        $__internal_d1afa405d06dcc3ff8dbe4884af7d6ae16773f1b2e5e5d252e7fb1ff3574f269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1afa405d06dcc3ff8dbe4884af7d6ae16773f1b2e5e5d252e7fb1ff3574f269->enter($__internal_d1afa405d06dcc3ff8dbe4884af7d6ae16773f1b2e5e5d252e7fb1ff3574f269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d1afa405d06dcc3ff8dbe4884af7d6ae16773f1b2e5e5d252e7fb1ff3574f269->leave($__internal_d1afa405d06dcc3ff8dbe4884af7d6ae16773f1b2e5e5d252e7fb1ff3574f269_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_379f0084e7e62bc6b6fad57d0a3c4ead19b2964536c7cc4e501421982ee8f7e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_379f0084e7e62bc6b6fad57d0a3c4ead19b2964536c7cc4e501421982ee8f7e1->enter($__internal_379f0084e7e62bc6b6fad57d0a3c4ead19b2964536c7cc4e501421982ee8f7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_379f0084e7e62bc6b6fad57d0a3c4ead19b2964536c7cc4e501421982ee8f7e1->leave($__internal_379f0084e7e62bc6b6fad57d0a3c4ead19b2964536c7cc4e501421982ee8f7e1_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\ingweb_congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
