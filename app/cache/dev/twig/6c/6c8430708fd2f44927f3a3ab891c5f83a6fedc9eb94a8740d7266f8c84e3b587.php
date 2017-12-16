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
        $__internal_95555abd0085c545225a4c92a739f172bc67b8fdad2a44c038b017962b2f8b5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95555abd0085c545225a4c92a739f172bc67b8fdad2a44c038b017962b2f8b5a->enter($__internal_95555abd0085c545225a4c92a739f172bc67b8fdad2a44c038b017962b2f8b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95555abd0085c545225a4c92a739f172bc67b8fdad2a44c038b017962b2f8b5a->leave($__internal_95555abd0085c545225a4c92a739f172bc67b8fdad2a44c038b017962b2f8b5a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_41926c8bcd7bcbaf14264a9e1491b85dcf996781f20fe99b7a3f3347705c545c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41926c8bcd7bcbaf14264a9e1491b85dcf996781f20fe99b7a3f3347705c545c->enter($__internal_41926c8bcd7bcbaf14264a9e1491b85dcf996781f20fe99b7a3f3347705c545c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_41926c8bcd7bcbaf14264a9e1491b85dcf996781f20fe99b7a3f3347705c545c->leave($__internal_41926c8bcd7bcbaf14264a9e1491b85dcf996781f20fe99b7a3f3347705c545c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_287024e9ac38b1017e78a6a8a714e4ed44a961c43b8695cd2423851fe455a66c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_287024e9ac38b1017e78a6a8a714e4ed44a961c43b8695cd2423851fe455a66c->enter($__internal_287024e9ac38b1017e78a6a8a714e4ed44a961c43b8695cd2423851fe455a66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_287024e9ac38b1017e78a6a8a714e4ed44a961c43b8695cd2423851fe455a66c->leave($__internal_287024e9ac38b1017e78a6a8a714e4ed44a961c43b8695cd2423851fe455a66c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6201f1c37866a6bde1bc8b595a5132269c59409f390831ed91259471ba39c6cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6201f1c37866a6bde1bc8b595a5132269c59409f390831ed91259471ba39c6cd->enter($__internal_6201f1c37866a6bde1bc8b595a5132269c59409f390831ed91259471ba39c6cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6201f1c37866a6bde1bc8b595a5132269c59409f390831ed91259471ba39c6cd->leave($__internal_6201f1c37866a6bde1bc8b595a5132269c59409f390831ed91259471ba39c6cd_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_0ad00ae794e61fe76f9d42ddc23c3f1e87241306baf9e0def0661e0e29f66da9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ad00ae794e61fe76f9d42ddc23c3f1e87241306baf9e0def0661e0e29f66da9->enter($__internal_0ad00ae794e61fe76f9d42ddc23c3f1e87241306baf9e0def0661e0e29f66da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_0ad00ae794e61fe76f9d42ddc23c3f1e87241306baf9e0def0661e0e29f66da9->leave($__internal_0ad00ae794e61fe76f9d42ddc23c3f1e87241306baf9e0def0661e0e29f66da9_prof);

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
