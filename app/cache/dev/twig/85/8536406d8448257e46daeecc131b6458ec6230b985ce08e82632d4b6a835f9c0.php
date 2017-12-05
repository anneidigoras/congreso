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
        $__internal_72e3035836d76189282b374aadad71ff574fcf0fe0083cc954a35f6f2b7b7a2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72e3035836d76189282b374aadad71ff574fcf0fe0083cc954a35f6f2b7b7a2d->enter($__internal_72e3035836d76189282b374aadad71ff574fcf0fe0083cc954a35f6f2b7b7a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72e3035836d76189282b374aadad71ff574fcf0fe0083cc954a35f6f2b7b7a2d->leave($__internal_72e3035836d76189282b374aadad71ff574fcf0fe0083cc954a35f6f2b7b7a2d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2ac27fb558f1c0ed8d86752e348923aab0799f2bb041c80749d79e15c89e25c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ac27fb558f1c0ed8d86752e348923aab0799f2bb041c80749d79e15c89e25c9->enter($__internal_2ac27fb558f1c0ed8d86752e348923aab0799f2bb041c80749d79e15c89e25c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_2ac27fb558f1c0ed8d86752e348923aab0799f2bb041c80749d79e15c89e25c9->leave($__internal_2ac27fb558f1c0ed8d86752e348923aab0799f2bb041c80749d79e15c89e25c9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_55f65340f316d7ab7102c41714790204f2179edfcfb27167516953fbc1f6932d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55f65340f316d7ab7102c41714790204f2179edfcfb27167516953fbc1f6932d->enter($__internal_55f65340f316d7ab7102c41714790204f2179edfcfb27167516953fbc1f6932d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_55f65340f316d7ab7102c41714790204f2179edfcfb27167516953fbc1f6932d->leave($__internal_55f65340f316d7ab7102c41714790204f2179edfcfb27167516953fbc1f6932d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_11e0acb69a9a802676245a1e9e66a0a090d6456c5a30199213cbf338b8f97c68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11e0acb69a9a802676245a1e9e66a0a090d6456c5a30199213cbf338b8f97c68->enter($__internal_11e0acb69a9a802676245a1e9e66a0a090d6456c5a30199213cbf338b8f97c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_11e0acb69a9a802676245a1e9e66a0a090d6456c5a30199213cbf338b8f97c68->leave($__internal_11e0acb69a9a802676245a1e9e66a0a090d6456c5a30199213cbf338b8f97c68_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_994c9c2a0fe4e28d075ab592d50ad476429dc67902067d6575586d68e35942e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_994c9c2a0fe4e28d075ab592d50ad476429dc67902067d6575586d68e35942e4->enter($__internal_994c9c2a0fe4e28d075ab592d50ad476429dc67902067d6575586d68e35942e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_994c9c2a0fe4e28d075ab592d50ad476429dc67902067d6575586d68e35942e4->leave($__internal_994c9c2a0fe4e28d075ab592d50ad476429dc67902067d6575586d68e35942e4_prof);

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
