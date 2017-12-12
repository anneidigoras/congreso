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
        $__internal_35b795e6685597d9cb86215741849f1d73f889a9d3f31c16320c707d995ebf2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35b795e6685597d9cb86215741849f1d73f889a9d3f31c16320c707d995ebf2f->enter($__internal_35b795e6685597d9cb86215741849f1d73f889a9d3f31c16320c707d995ebf2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_35b795e6685597d9cb86215741849f1d73f889a9d3f31c16320c707d995ebf2f->leave($__internal_35b795e6685597d9cb86215741849f1d73f889a9d3f31c16320c707d995ebf2f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6b2ac106bf5712ae3c7db128914fd65105a2371df1fda42efc97281ac2dd59ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b2ac106bf5712ae3c7db128914fd65105a2371df1fda42efc97281ac2dd59ac->enter($__internal_6b2ac106bf5712ae3c7db128914fd65105a2371df1fda42efc97281ac2dd59ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6b2ac106bf5712ae3c7db128914fd65105a2371df1fda42efc97281ac2dd59ac->leave($__internal_6b2ac106bf5712ae3c7db128914fd65105a2371df1fda42efc97281ac2dd59ac_prof);

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
