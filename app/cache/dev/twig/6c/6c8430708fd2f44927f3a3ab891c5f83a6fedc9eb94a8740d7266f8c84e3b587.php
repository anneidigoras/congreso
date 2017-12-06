<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_a82435d44d5712b0b8a57d0bb3ef5699e2369fd037fe0e8f85e1e168b5c3d6bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_461f17c23354c03d6d178c35f66c67605aa0a9f202f7677fd3aef8934c352e12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_461f17c23354c03d6d178c35f66c67605aa0a9f202f7677fd3aef8934c352e12->enter($__internal_461f17c23354c03d6d178c35f66c67605aa0a9f202f7677fd3aef8934c352e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_461f17c23354c03d6d178c35f66c67605aa0a9f202f7677fd3aef8934c352e12->leave($__internal_461f17c23354c03d6d178c35f66c67605aa0a9f202f7677fd3aef8934c352e12_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2a09e53de126e80269085d43a69c896068a220bd19599d713017ff68009fb5bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a09e53de126e80269085d43a69c896068a220bd19599d713017ff68009fb5bc->enter($__internal_2a09e53de126e80269085d43a69c896068a220bd19599d713017ff68009fb5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_2a09e53de126e80269085d43a69c896068a220bd19599d713017ff68009fb5bc->leave($__internal_2a09e53de126e80269085d43a69c896068a220bd19599d713017ff68009fb5bc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f7aa83e9086bbc0ec727b097ef84d76d13f3798b0ecc71f40f0cba0cdcd8220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f7aa83e9086bbc0ec727b097ef84d76d13f3798b0ecc71f40f0cba0cdcd8220->enter($__internal_3f7aa83e9086bbc0ec727b097ef84d76d13f3798b0ecc71f40f0cba0cdcd8220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_3f7aa83e9086bbc0ec727b097ef84d76d13f3798b0ecc71f40f0cba0cdcd8220->leave($__internal_3f7aa83e9086bbc0ec727b097ef84d76d13f3798b0ecc71f40f0cba0cdcd8220_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_feee6bd46b90f07db0dba6a4bb30664f1dee445cf3bc86fb36c5924ed4dfb9f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feee6bd46b90f07db0dba6a4bb30664f1dee445cf3bc86fb36c5924ed4dfb9f6->enter($__internal_feee6bd46b90f07db0dba6a4bb30664f1dee445cf3bc86fb36c5924ed4dfb9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, ($context["version"] ?? $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_feee6bd46b90f07db0dba6a4bb30664f1dee445cf3bc86fb36c5924ed4dfb9f6->leave($__internal_feee6bd46b90f07db0dba6a4bb30664f1dee445cf3bc86fb36c5924ed4dfb9f6_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_3f9f6e589b288ce6d19ead1515e315bfb373643d8571f526e7de93e33f6a6048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f9f6e589b288ce6d19ead1515e315bfb373643d8571f526e7de93e33f6a6048->enter($__internal_3f9f6e589b288ce6d19ead1515e315bfb373643d8571f526e7de93e33f6a6048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_3f9f6e589b288ce6d19ead1515e315bfb373643d8571f526e7de93e33f6a6048->leave($__internal_3f9f6e589b288ce6d19ead1515e315bfb373643d8571f526e7de93e33f6a6048_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "SensioDistributionBundle::Configurator/layout.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
