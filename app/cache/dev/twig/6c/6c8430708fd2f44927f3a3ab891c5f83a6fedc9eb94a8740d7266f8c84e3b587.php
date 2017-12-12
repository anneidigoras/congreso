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
        $__internal_5f956fbbc46788352f1960ab68230d819c4cce38beb34aec9e50ddcb00018767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f956fbbc46788352f1960ab68230d819c4cce38beb34aec9e50ddcb00018767->enter($__internal_5f956fbbc46788352f1960ab68230d819c4cce38beb34aec9e50ddcb00018767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f956fbbc46788352f1960ab68230d819c4cce38beb34aec9e50ddcb00018767->leave($__internal_5f956fbbc46788352f1960ab68230d819c4cce38beb34aec9e50ddcb00018767_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d3aa39f95f2170876a69de231e8d0bd6a7cefa05ef7b717d773e6136ff079bbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3aa39f95f2170876a69de231e8d0bd6a7cefa05ef7b717d773e6136ff079bbc->enter($__internal_d3aa39f95f2170876a69de231e8d0bd6a7cefa05ef7b717d773e6136ff079bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_d3aa39f95f2170876a69de231e8d0bd6a7cefa05ef7b717d773e6136ff079bbc->leave($__internal_d3aa39f95f2170876a69de231e8d0bd6a7cefa05ef7b717d773e6136ff079bbc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_468f72dcfd90d800c05807ee0d9359a40c7e029e58c40170b93c91d3457406a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_468f72dcfd90d800c05807ee0d9359a40c7e029e58c40170b93c91d3457406a1->enter($__internal_468f72dcfd90d800c05807ee0d9359a40c7e029e58c40170b93c91d3457406a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_468f72dcfd90d800c05807ee0d9359a40c7e029e58c40170b93c91d3457406a1->leave($__internal_468f72dcfd90d800c05807ee0d9359a40c7e029e58c40170b93c91d3457406a1_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3fed3a1d322d50bc8df64fff5d8aab45553cd4b19a7e69491ed68518297bc59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3fed3a1d322d50bc8df64fff5d8aab45553cd4b19a7e69491ed68518297bc59->enter($__internal_e3fed3a1d322d50bc8df64fff5d8aab45553cd4b19a7e69491ed68518297bc59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e3fed3a1d322d50bc8df64fff5d8aab45553cd4b19a7e69491ed68518297bc59->leave($__internal_e3fed3a1d322d50bc8df64fff5d8aab45553cd4b19a7e69491ed68518297bc59_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_40e691f2c69a83bf54a51e98590bff181643daa2875a034468909100396da1dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40e691f2c69a83bf54a51e98590bff181643daa2875a034468909100396da1dd->enter($__internal_40e691f2c69a83bf54a51e98590bff181643daa2875a034468909100396da1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_40e691f2c69a83bf54a51e98590bff181643daa2875a034468909100396da1dd->leave($__internal_40e691f2c69a83bf54a51e98590bff181643daa2875a034468909100396da1dd_prof);

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
