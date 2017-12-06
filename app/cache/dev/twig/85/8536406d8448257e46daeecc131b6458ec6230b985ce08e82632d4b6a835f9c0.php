<?php

/* @SensioDistribution/Configurator/layout.html.twig */
class __TwigTemplate_9c591f7752e12960e66c9d089d1fea62b11cd33c8cecf47955510b8299081b91 extends Twig_Template
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
        $__internal_d8e48181a817789900795a887fa1ed2b150dcc175d6df75d2eb2db3a1edcd659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8e48181a817789900795a887fa1ed2b150dcc175d6df75d2eb2db3a1edcd659->enter($__internal_d8e48181a817789900795a887fa1ed2b150dcc175d6df75d2eb2db3a1edcd659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8e48181a817789900795a887fa1ed2b150dcc175d6df75d2eb2db3a1edcd659->leave($__internal_d8e48181a817789900795a887fa1ed2b150dcc175d6df75d2eb2db3a1edcd659_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4aebcb8647837b49c22e436df38dd01b54c2bcf29a6c9b984d18532526bd3369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aebcb8647837b49c22e436df38dd01b54c2bcf29a6c9b984d18532526bd3369->enter($__internal_4aebcb8647837b49c22e436df38dd01b54c2bcf29a6c9b984d18532526bd3369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_4aebcb8647837b49c22e436df38dd01b54c2bcf29a6c9b984d18532526bd3369->leave($__internal_4aebcb8647837b49c22e436df38dd01b54c2bcf29a6c9b984d18532526bd3369_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_76a8dbecf8c0f0c80972cdec56e99879c70ebe64e544f8cf47e3be4f989894a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76a8dbecf8c0f0c80972cdec56e99879c70ebe64e544f8cf47e3be4f989894a9->enter($__internal_76a8dbecf8c0f0c80972cdec56e99879c70ebe64e544f8cf47e3be4f989894a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_76a8dbecf8c0f0c80972cdec56e99879c70ebe64e544f8cf47e3be4f989894a9->leave($__internal_76a8dbecf8c0f0c80972cdec56e99879c70ebe64e544f8cf47e3be4f989894a9_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0c61f57220a6617a88f14ef4ca326dfa97dbc5a5d76cee8b12012fa1fc15baf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0c61f57220a6617a88f14ef4ca326dfa97dbc5a5d76cee8b12012fa1fc15baf->enter($__internal_f0c61f57220a6617a88f14ef4ca326dfa97dbc5a5d76cee8b12012fa1fc15baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f0c61f57220a6617a88f14ef4ca326dfa97dbc5a5d76cee8b12012fa1fc15baf->leave($__internal_f0c61f57220a6617a88f14ef4ca326dfa97dbc5a5d76cee8b12012fa1fc15baf_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_0f358ee269b8754071fc49cd3bb7a03c5e1677dfbfe648fc4688f686b91330a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f358ee269b8754071fc49cd3bb7a03c5e1677dfbfe648fc4688f686b91330a0->enter($__internal_0f358ee269b8754071fc49cd3bb7a03c5e1677dfbfe648fc4688f686b91330a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_0f358ee269b8754071fc49cd3bb7a03c5e1677dfbfe648fc4688f686b91330a0->leave($__internal_0f358ee269b8754071fc49cd3bb7a03c5e1677dfbfe648fc4688f686b91330a0_prof);

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
