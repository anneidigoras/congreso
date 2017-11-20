<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_60fa8c80a06f1df51676d53232fb2e0e1a84533aae91da00463905873205bb1d extends Twig_Template
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
        $__internal_39ca3f57028ed4bd2045deb9afb18411bca1abdd5ce9e281052262689c789925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39ca3f57028ed4bd2045deb9afb18411bca1abdd5ce9e281052262689c789925->enter($__internal_39ca3f57028ed4bd2045deb9afb18411bca1abdd5ce9e281052262689c789925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39ca3f57028ed4bd2045deb9afb18411bca1abdd5ce9e281052262689c789925->leave($__internal_39ca3f57028ed4bd2045deb9afb18411bca1abdd5ce9e281052262689c789925_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cd142ed9a07109a4382460eba63bd30ef3cb0edc4c9b104ca956a1f9b3549680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd142ed9a07109a4382460eba63bd30ef3cb0edc4c9b104ca956a1f9b3549680->enter($__internal_cd142ed9a07109a4382460eba63bd30ef3cb0edc4c9b104ca956a1f9b3549680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_cd142ed9a07109a4382460eba63bd30ef3cb0edc4c9b104ca956a1f9b3549680->leave($__internal_cd142ed9a07109a4382460eba63bd30ef3cb0edc4c9b104ca956a1f9b3549680_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9bfb2e0e84b6c9adb6ddc21afc71c8763c17c0c1b0bcb0ca9b2a5fd0a0cbe14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9bfb2e0e84b6c9adb6ddc21afc71c8763c17c0c1b0bcb0ca9b2a5fd0a0cbe14->enter($__internal_c9bfb2e0e84b6c9adb6ddc21afc71c8763c17c0c1b0bcb0ca9b2a5fd0a0cbe14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_c9bfb2e0e84b6c9adb6ddc21afc71c8763c17c0c1b0bcb0ca9b2a5fd0a0cbe14->leave($__internal_c9bfb2e0e84b6c9adb6ddc21afc71c8763c17c0c1b0bcb0ca9b2a5fd0a0cbe14_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5280c86ce8a14c7bc40a4a440b4d7f75046dffe722985c35b2cd526da1978c62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5280c86ce8a14c7bc40a4a440b4d7f75046dffe722985c35b2cd526da1978c62->enter($__internal_5280c86ce8a14c7bc40a4a440b4d7f75046dffe722985c35b2cd526da1978c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5280c86ce8a14c7bc40a4a440b4d7f75046dffe722985c35b2cd526da1978c62->leave($__internal_5280c86ce8a14c7bc40a4a440b4d7f75046dffe722985c35b2cd526da1978c62_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_81e9f22e24e0b126ecfb04f66813a19243b9d9d3101c07aa2717d9ddbe21c59b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81e9f22e24e0b126ecfb04f66813a19243b9d9d3101c07aa2717d9ddbe21c59b->enter($__internal_81e9f22e24e0b126ecfb04f66813a19243b9d9d3101c07aa2717d9ddbe21c59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_81e9f22e24e0b126ecfb04f66813a19243b9d9d3101c07aa2717d9ddbe21c59b->leave($__internal_81e9f22e24e0b126ecfb04f66813a19243b9d9d3101c07aa2717d9ddbe21c59b_prof);

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
