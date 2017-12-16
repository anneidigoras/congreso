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
        $__internal_861db4c09cf8d901e866068bf37688da5658b6ff6bf4ea7b8ff96a3dc34d9325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_861db4c09cf8d901e866068bf37688da5658b6ff6bf4ea7b8ff96a3dc34d9325->enter($__internal_861db4c09cf8d901e866068bf37688da5658b6ff6bf4ea7b8ff96a3dc34d9325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_861db4c09cf8d901e866068bf37688da5658b6ff6bf4ea7b8ff96a3dc34d9325->leave($__internal_861db4c09cf8d901e866068bf37688da5658b6ff6bf4ea7b8ff96a3dc34d9325_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3bb5e034280deee1496a9f4663f51f0511e9298a2b207082848c9b3726b43769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bb5e034280deee1496a9f4663f51f0511e9298a2b207082848c9b3726b43769->enter($__internal_3bb5e034280deee1496a9f4663f51f0511e9298a2b207082848c9b3726b43769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_3bb5e034280deee1496a9f4663f51f0511e9298a2b207082848c9b3726b43769->leave($__internal_3bb5e034280deee1496a9f4663f51f0511e9298a2b207082848c9b3726b43769_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_610e9fd75a53753ab8111a4bb4a16c7bce209d64e7cca8b54a1b0e0db7feb7e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_610e9fd75a53753ab8111a4bb4a16c7bce209d64e7cca8b54a1b0e0db7feb7e5->enter($__internal_610e9fd75a53753ab8111a4bb4a16c7bce209d64e7cca8b54a1b0e0db7feb7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_610e9fd75a53753ab8111a4bb4a16c7bce209d64e7cca8b54a1b0e0db7feb7e5->leave($__internal_610e9fd75a53753ab8111a4bb4a16c7bce209d64e7cca8b54a1b0e0db7feb7e5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_56a7ea0500853793b5a396e6353924cb56947c09b4f003380b37df9967240b8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56a7ea0500853793b5a396e6353924cb56947c09b4f003380b37df9967240b8a->enter($__internal_56a7ea0500853793b5a396e6353924cb56947c09b4f003380b37df9967240b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_56a7ea0500853793b5a396e6353924cb56947c09b4f003380b37df9967240b8a->leave($__internal_56a7ea0500853793b5a396e6353924cb56947c09b4f003380b37df9967240b8a_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_8eaa9590ba3d436dccf1c8cdac7f7ad56a028b34be51464ae9b6cb3e4b7b094f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eaa9590ba3d436dccf1c8cdac7f7ad56a028b34be51464ae9b6cb3e4b7b094f->enter($__internal_8eaa9590ba3d436dccf1c8cdac7f7ad56a028b34be51464ae9b6cb3e4b7b094f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_8eaa9590ba3d436dccf1c8cdac7f7ad56a028b34be51464ae9b6cb3e4b7b094f->leave($__internal_8eaa9590ba3d436dccf1c8cdac7f7ad56a028b34be51464ae9b6cb3e4b7b094f_prof);

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
