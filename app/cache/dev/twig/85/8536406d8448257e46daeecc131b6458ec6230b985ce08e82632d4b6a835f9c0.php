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
        $__internal_0836fdfe98ddb85761955b30fa87489249037cf41839f133df7f6dedf2c0a0aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0836fdfe98ddb85761955b30fa87489249037cf41839f133df7f6dedf2c0a0aa->enter($__internal_0836fdfe98ddb85761955b30fa87489249037cf41839f133df7f6dedf2c0a0aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0836fdfe98ddb85761955b30fa87489249037cf41839f133df7f6dedf2c0a0aa->leave($__internal_0836fdfe98ddb85761955b30fa87489249037cf41839f133df7f6dedf2c0a0aa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ad4445dcca16b2ec5b2787473c4d4e1702eb8902ad0a09891d035bc4b0fa2a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad4445dcca16b2ec5b2787473c4d4e1702eb8902ad0a09891d035bc4b0fa2a1e->enter($__internal_ad4445dcca16b2ec5b2787473c4d4e1702eb8902ad0a09891d035bc4b0fa2a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_ad4445dcca16b2ec5b2787473c4d4e1702eb8902ad0a09891d035bc4b0fa2a1e->leave($__internal_ad4445dcca16b2ec5b2787473c4d4e1702eb8902ad0a09891d035bc4b0fa2a1e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b91aa791f7a60343aa445d272ec9dc8b7bd2f30cbcc9c9ec612a561a120ae01f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b91aa791f7a60343aa445d272ec9dc8b7bd2f30cbcc9c9ec612a561a120ae01f->enter($__internal_b91aa791f7a60343aa445d272ec9dc8b7bd2f30cbcc9c9ec612a561a120ae01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_b91aa791f7a60343aa445d272ec9dc8b7bd2f30cbcc9c9ec612a561a120ae01f->leave($__internal_b91aa791f7a60343aa445d272ec9dc8b7bd2f30cbcc9c9ec612a561a120ae01f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5732738d3c0322ee6c54f68be8625985b2994d3881f947c8cbc241fa444b1eeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5732738d3c0322ee6c54f68be8625985b2994d3881f947c8cbc241fa444b1eeb->enter($__internal_5732738d3c0322ee6c54f68be8625985b2994d3881f947c8cbc241fa444b1eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5732738d3c0322ee6c54f68be8625985b2994d3881f947c8cbc241fa444b1eeb->leave($__internal_5732738d3c0322ee6c54f68be8625985b2994d3881f947c8cbc241fa444b1eeb_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_9d10e926bd7c86513695f551ae8e1273cd6d95ba07c9ac61955ac64f894c25e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d10e926bd7c86513695f551ae8e1273cd6d95ba07c9ac61955ac64f894c25e4->enter($__internal_9d10e926bd7c86513695f551ae8e1273cd6d95ba07c9ac61955ac64f894c25e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_9d10e926bd7c86513695f551ae8e1273cd6d95ba07c9ac61955ac64f894c25e4->leave($__internal_9d10e926bd7c86513695f551ae8e1273cd6d95ba07c9ac61955ac64f894c25e4_prof);

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
