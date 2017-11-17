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
        $__internal_d53908b9231bcaf7cbd043115f5094de6e2791e9c9f6c3102da9888b7404b9b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d53908b9231bcaf7cbd043115f5094de6e2791e9c9f6c3102da9888b7404b9b3->enter($__internal_d53908b9231bcaf7cbd043115f5094de6e2791e9c9f6c3102da9888b7404b9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d53908b9231bcaf7cbd043115f5094de6e2791e9c9f6c3102da9888b7404b9b3->leave($__internal_d53908b9231bcaf7cbd043115f5094de6e2791e9c9f6c3102da9888b7404b9b3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ce8cba632e773ce90b9e69d5dd0d6869942e488339c78e2c57d1f8c9223b3908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce8cba632e773ce90b9e69d5dd0d6869942e488339c78e2c57d1f8c9223b3908->enter($__internal_ce8cba632e773ce90b9e69d5dd0d6869942e488339c78e2c57d1f8c9223b3908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_ce8cba632e773ce90b9e69d5dd0d6869942e488339c78e2c57d1f8c9223b3908->leave($__internal_ce8cba632e773ce90b9e69d5dd0d6869942e488339c78e2c57d1f8c9223b3908_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9fd5f94a7e93cf438d26a0a6c15bd67a9e7a4fcf9e8ff1512f66234eecc684b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fd5f94a7e93cf438d26a0a6c15bd67a9e7a4fcf9e8ff1512f66234eecc684b5->enter($__internal_9fd5f94a7e93cf438d26a0a6c15bd67a9e7a4fcf9e8ff1512f66234eecc684b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_9fd5f94a7e93cf438d26a0a6c15bd67a9e7a4fcf9e8ff1512f66234eecc684b5->leave($__internal_9fd5f94a7e93cf438d26a0a6c15bd67a9e7a4fcf9e8ff1512f66234eecc684b5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e1820318b2c0c7b8e7c6bcdb9ef0a76ee18c9516c74d39bac29e35a2672a164 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e1820318b2c0c7b8e7c6bcdb9ef0a76ee18c9516c74d39bac29e35a2672a164->enter($__internal_5e1820318b2c0c7b8e7c6bcdb9ef0a76ee18c9516c74d39bac29e35a2672a164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5e1820318b2c0c7b8e7c6bcdb9ef0a76ee18c9516c74d39bac29e35a2672a164->leave($__internal_5e1820318b2c0c7b8e7c6bcdb9ef0a76ee18c9516c74d39bac29e35a2672a164_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_1e78f534ae2300c6311179f3212379623ca96397eb8e2630612834ce39f62987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e78f534ae2300c6311179f3212379623ca96397eb8e2630612834ce39f62987->enter($__internal_1e78f534ae2300c6311179f3212379623ca96397eb8e2630612834ce39f62987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_1e78f534ae2300c6311179f3212379623ca96397eb8e2630612834ce39f62987->leave($__internal_1e78f534ae2300c6311179f3212379623ca96397eb8e2630612834ce39f62987_prof);

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
