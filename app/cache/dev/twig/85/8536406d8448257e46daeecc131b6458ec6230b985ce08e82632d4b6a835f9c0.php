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
        $__internal_a450162211694fc9a1a63c6a283f15b4f04f2f1bb9ea9514c09d9f213408115e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a450162211694fc9a1a63c6a283f15b4f04f2f1bb9ea9514c09d9f213408115e->enter($__internal_a450162211694fc9a1a63c6a283f15b4f04f2f1bb9ea9514c09d9f213408115e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a450162211694fc9a1a63c6a283f15b4f04f2f1bb9ea9514c09d9f213408115e->leave($__internal_a450162211694fc9a1a63c6a283f15b4f04f2f1bb9ea9514c09d9f213408115e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7337d0431de805d5293e1eaa56026f68d459e414d291a3647d2f2d407ad5c2a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7337d0431de805d5293e1eaa56026f68d459e414d291a3647d2f2d407ad5c2a6->enter($__internal_7337d0431de805d5293e1eaa56026f68d459e414d291a3647d2f2d407ad5c2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_7337d0431de805d5293e1eaa56026f68d459e414d291a3647d2f2d407ad5c2a6->leave($__internal_7337d0431de805d5293e1eaa56026f68d459e414d291a3647d2f2d407ad5c2a6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ba3cfc3553537bf79bbc5c804db60b1093a9137b7ac89272f489ea974d32b83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ba3cfc3553537bf79bbc5c804db60b1093a9137b7ac89272f489ea974d32b83->enter($__internal_9ba3cfc3553537bf79bbc5c804db60b1093a9137b7ac89272f489ea974d32b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_9ba3cfc3553537bf79bbc5c804db60b1093a9137b7ac89272f489ea974d32b83->leave($__internal_9ba3cfc3553537bf79bbc5c804db60b1093a9137b7ac89272f489ea974d32b83_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_64ff43e5b304bb2a734d89f780a63302feb8ff5f480c4522bedba694622025d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64ff43e5b304bb2a734d89f780a63302feb8ff5f480c4522bedba694622025d0->enter($__internal_64ff43e5b304bb2a734d89f780a63302feb8ff5f480c4522bedba694622025d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_64ff43e5b304bb2a734d89f780a63302feb8ff5f480c4522bedba694622025d0->leave($__internal_64ff43e5b304bb2a734d89f780a63302feb8ff5f480c4522bedba694622025d0_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_ca6d32eeae8886e0c678864008afa49b058406a159ee553ab4ae25729235f6df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca6d32eeae8886e0c678864008afa49b058406a159ee553ab4ae25729235f6df->enter($__internal_ca6d32eeae8886e0c678864008afa49b058406a159ee553ab4ae25729235f6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_ca6d32eeae8886e0c678864008afa49b058406a159ee553ab4ae25729235f6df->leave($__internal_ca6d32eeae8886e0c678864008afa49b058406a159ee553ab4ae25729235f6df_prof);

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
