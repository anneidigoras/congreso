<?php

/* @SensioDistribution/Configurator/layout.html.twig */
class __TwigTemplate_6eb0441d2f8f3a515c5fb04276bb1016e18c84f2d1b3a5c6657f707419a34563 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "@SensioDistribution/Configurator/layout.html.twig", 1);
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
        $__internal_57352fff0ab867380dcdd03f57208f3ec181f90c47d59567fc4571141317238e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57352fff0ab867380dcdd03f57208f3ec181f90c47d59567fc4571141317238e->enter($__internal_57352fff0ab867380dcdd03f57208f3ec181f90c47d59567fc4571141317238e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57352fff0ab867380dcdd03f57208f3ec181f90c47d59567fc4571141317238e->leave($__internal_57352fff0ab867380dcdd03f57208f3ec181f90c47d59567fc4571141317238e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_72d7502fa244ba5efb02ff075e0eb277194a4d6f04f07e9414ad614d84fd3f7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72d7502fa244ba5efb02ff075e0eb277194a4d6f04f07e9414ad614d84fd3f7c->enter($__internal_72d7502fa244ba5efb02ff075e0eb277194a4d6f04f07e9414ad614d84fd3f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_72d7502fa244ba5efb02ff075e0eb277194a4d6f04f07e9414ad614d84fd3f7c->leave($__internal_72d7502fa244ba5efb02ff075e0eb277194a4d6f04f07e9414ad614d84fd3f7c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e84f814d3bd306aa23afb4380ea2b4de16ca0350dd5c1aa8bb4d63e2e6abb1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e84f814d3bd306aa23afb4380ea2b4de16ca0350dd5c1aa8bb4d63e2e6abb1e->enter($__internal_6e84f814d3bd306aa23afb4380ea2b4de16ca0350dd5c1aa8bb4d63e2e6abb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_6e84f814d3bd306aa23afb4380ea2b4de16ca0350dd5c1aa8bb4d63e2e6abb1e->leave($__internal_6e84f814d3bd306aa23afb4380ea2b4de16ca0350dd5c1aa8bb4d63e2e6abb1e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_31fe8cf7b5eac99effc32dd52b3457e03a78de9ca80cf39c4d86359cc809692a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31fe8cf7b5eac99effc32dd52b3457e03a78de9ca80cf39c4d86359cc809692a->enter($__internal_31fe8cf7b5eac99effc32dd52b3457e03a78de9ca80cf39c4d86359cc809692a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_31fe8cf7b5eac99effc32dd52b3457e03a78de9ca80cf39c4d86359cc809692a->leave($__internal_31fe8cf7b5eac99effc32dd52b3457e03a78de9ca80cf39c4d86359cc809692a_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_09bbd9545629a46246a393ffac6b3513ddb7d7bc857fa159d7c847139a7c77b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09bbd9545629a46246a393ffac6b3513ddb7d7bc857fa159d7c847139a7c77b6->enter($__internal_09bbd9545629a46246a393ffac6b3513ddb7d7bc857fa159d7c847139a7c77b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_09bbd9545629a46246a393ffac6b3513ddb7d7bc857fa159d7c847139a7c77b6->leave($__internal_09bbd9545629a46246a393ffac6b3513ddb7d7bc857fa159d7c847139a7c77b6_prof);

    }

    public function getTemplateName()
    {
        return "@SensioDistribution/Configurator/layout.html.twig";
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
", "@SensioDistribution/Configurator/layout.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle\\Resources\\views\\Configurator\\layout.html.twig");
    }
}
