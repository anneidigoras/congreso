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
        $__internal_d31a3c849329865727e8a807db08bbb959415cd5aa6bf84747598aa1fb5c07cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d31a3c849329865727e8a807db08bbb959415cd5aa6bf84747598aa1fb5c07cf->enter($__internal_d31a3c849329865727e8a807db08bbb959415cd5aa6bf84747598aa1fb5c07cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d31a3c849329865727e8a807db08bbb959415cd5aa6bf84747598aa1fb5c07cf->leave($__internal_d31a3c849329865727e8a807db08bbb959415cd5aa6bf84747598aa1fb5c07cf_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_aed912582ec2cbc13afd04758910c340188898a130320467e38d96641e5a1f30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aed912582ec2cbc13afd04758910c340188898a130320467e38d96641e5a1f30->enter($__internal_aed912582ec2cbc13afd04758910c340188898a130320467e38d96641e5a1f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_aed912582ec2cbc13afd04758910c340188898a130320467e38d96641e5a1f30->leave($__internal_aed912582ec2cbc13afd04758910c340188898a130320467e38d96641e5a1f30_prof);

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
