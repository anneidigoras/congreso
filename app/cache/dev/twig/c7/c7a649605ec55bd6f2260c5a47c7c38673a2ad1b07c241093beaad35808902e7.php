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
        $__internal_777453270f2d77ef6a0565de7639c53e1c6ba773f51eabbfa3bbe0eaa0bcc59a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_777453270f2d77ef6a0565de7639c53e1c6ba773f51eabbfa3bbe0eaa0bcc59a->enter($__internal_777453270f2d77ef6a0565de7639c53e1c6ba773f51eabbfa3bbe0eaa0bcc59a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_777453270f2d77ef6a0565de7639c53e1c6ba773f51eabbfa3bbe0eaa0bcc59a->leave($__internal_777453270f2d77ef6a0565de7639c53e1c6ba773f51eabbfa3bbe0eaa0bcc59a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aa4dcf6727c26feb92d5c92cfb9a8bab4f8cee22413719b290ca48a937c82ef2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa4dcf6727c26feb92d5c92cfb9a8bab4f8cee22413719b290ca48a937c82ef2->enter($__internal_aa4dcf6727c26feb92d5c92cfb9a8bab4f8cee22413719b290ca48a937c82ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_aa4dcf6727c26feb92d5c92cfb9a8bab4f8cee22413719b290ca48a937c82ef2->leave($__internal_aa4dcf6727c26feb92d5c92cfb9a8bab4f8cee22413719b290ca48a937c82ef2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fac05eaab793ad3aab0f7e4c767e49ec97b6c926bc453ca355b9233d6d74a145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fac05eaab793ad3aab0f7e4c767e49ec97b6c926bc453ca355b9233d6d74a145->enter($__internal_fac05eaab793ad3aab0f7e4c767e49ec97b6c926bc453ca355b9233d6d74a145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_fac05eaab793ad3aab0f7e4c767e49ec97b6c926bc453ca355b9233d6d74a145->leave($__internal_fac05eaab793ad3aab0f7e4c767e49ec97b6c926bc453ca355b9233d6d74a145_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_27d347e0cb23b0cd6357940b7a839dcb572f06ae5c866f6417431c11713290f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27d347e0cb23b0cd6357940b7a839dcb572f06ae5c866f6417431c11713290f2->enter($__internal_27d347e0cb23b0cd6357940b7a839dcb572f06ae5c866f6417431c11713290f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_27d347e0cb23b0cd6357940b7a839dcb572f06ae5c866f6417431c11713290f2->leave($__internal_27d347e0cb23b0cd6357940b7a839dcb572f06ae5c866f6417431c11713290f2_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_00d5847af4c7dd1267a28a604c32d6ec8246df2498ee7e0aaec29e50e3b45287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00d5847af4c7dd1267a28a604c32d6ec8246df2498ee7e0aaec29e50e3b45287->enter($__internal_00d5847af4c7dd1267a28a604c32d6ec8246df2498ee7e0aaec29e50e3b45287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_00d5847af4c7dd1267a28a604c32d6ec8246df2498ee7e0aaec29e50e3b45287->leave($__internal_00d5847af4c7dd1267a28a604c32d6ec8246df2498ee7e0aaec29e50e3b45287_prof);

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
