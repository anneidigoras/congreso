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
        $__internal_b2d53e5e45801874b4f7966db6a8c21d4f58dcb128b102e485b8b3a342421b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2d53e5e45801874b4f7966db6a8c21d4f58dcb128b102e485b8b3a342421b7d->enter($__internal_b2d53e5e45801874b4f7966db6a8c21d4f58dcb128b102e485b8b3a342421b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2d53e5e45801874b4f7966db6a8c21d4f58dcb128b102e485b8b3a342421b7d->leave($__internal_b2d53e5e45801874b4f7966db6a8c21d4f58dcb128b102e485b8b3a342421b7d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_421536495869802aaa6603afb21ca01173965ff27357cb0b14093c03142e2581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_421536495869802aaa6603afb21ca01173965ff27357cb0b14093c03142e2581->enter($__internal_421536495869802aaa6603afb21ca01173965ff27357cb0b14093c03142e2581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_421536495869802aaa6603afb21ca01173965ff27357cb0b14093c03142e2581->leave($__internal_421536495869802aaa6603afb21ca01173965ff27357cb0b14093c03142e2581_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9733a670629cbaa9f707d1ce0e279e01fe08cf27ad260d91c06f6631474b1635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9733a670629cbaa9f707d1ce0e279e01fe08cf27ad260d91c06f6631474b1635->enter($__internal_9733a670629cbaa9f707d1ce0e279e01fe08cf27ad260d91c06f6631474b1635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_9733a670629cbaa9f707d1ce0e279e01fe08cf27ad260d91c06f6631474b1635->leave($__internal_9733a670629cbaa9f707d1ce0e279e01fe08cf27ad260d91c06f6631474b1635_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_20b70992c45f3b075e14cb42e5542310aca2819ce7b4b46ce109f9e59bdd2364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20b70992c45f3b075e14cb42e5542310aca2819ce7b4b46ce109f9e59bdd2364->enter($__internal_20b70992c45f3b075e14cb42e5542310aca2819ce7b4b46ce109f9e59bdd2364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_20b70992c45f3b075e14cb42e5542310aca2819ce7b4b46ce109f9e59bdd2364->leave($__internal_20b70992c45f3b075e14cb42e5542310aca2819ce7b4b46ce109f9e59bdd2364_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_36e125993520ebe57efbf2baa02ef61f3536c6fc7cb3b9f7e711c04379006a62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36e125993520ebe57efbf2baa02ef61f3536c6fc7cb3b9f7e711c04379006a62->enter($__internal_36e125993520ebe57efbf2baa02ef61f3536c6fc7cb3b9f7e711c04379006a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_36e125993520ebe57efbf2baa02ef61f3536c6fc7cb3b9f7e711c04379006a62->leave($__internal_36e125993520ebe57efbf2baa02ef61f3536c6fc7cb3b9f7e711c04379006a62_prof);

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
