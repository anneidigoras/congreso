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
        $__internal_1b09666e8793733fa3020725bf4e7c8fd5f3df7452e5cc0802ae80412debe589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b09666e8793733fa3020725bf4e7c8fd5f3df7452e5cc0802ae80412debe589->enter($__internal_1b09666e8793733fa3020725bf4e7c8fd5f3df7452e5cc0802ae80412debe589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b09666e8793733fa3020725bf4e7c8fd5f3df7452e5cc0802ae80412debe589->leave($__internal_1b09666e8793733fa3020725bf4e7c8fd5f3df7452e5cc0802ae80412debe589_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c9041df24ee97defd94388fb132a053cfc7b7c03b359166f5fba6bc71a5fe6f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9041df24ee97defd94388fb132a053cfc7b7c03b359166f5fba6bc71a5fe6f8->enter($__internal_c9041df24ee97defd94388fb132a053cfc7b7c03b359166f5fba6bc71a5fe6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_c9041df24ee97defd94388fb132a053cfc7b7c03b359166f5fba6bc71a5fe6f8->leave($__internal_c9041df24ee97defd94388fb132a053cfc7b7c03b359166f5fba6bc71a5fe6f8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_01e155b8bd07831cc069fae6419eb98f1c76478efcab507733f3eeeceecdfc13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01e155b8bd07831cc069fae6419eb98f1c76478efcab507733f3eeeceecdfc13->enter($__internal_01e155b8bd07831cc069fae6419eb98f1c76478efcab507733f3eeeceecdfc13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_01e155b8bd07831cc069fae6419eb98f1c76478efcab507733f3eeeceecdfc13->leave($__internal_01e155b8bd07831cc069fae6419eb98f1c76478efcab507733f3eeeceecdfc13_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ee09a5a45a1c47e2aa92a4968530d9ac2aede59e5694c50e7f75acfc203e360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ee09a5a45a1c47e2aa92a4968530d9ac2aede59e5694c50e7f75acfc203e360->enter($__internal_4ee09a5a45a1c47e2aa92a4968530d9ac2aede59e5694c50e7f75acfc203e360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4ee09a5a45a1c47e2aa92a4968530d9ac2aede59e5694c50e7f75acfc203e360->leave($__internal_4ee09a5a45a1c47e2aa92a4968530d9ac2aede59e5694c50e7f75acfc203e360_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_7278953484514d29cddab83308b74f32ac605fc1a8a0918ac2ccc4f72109b277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7278953484514d29cddab83308b74f32ac605fc1a8a0918ac2ccc4f72109b277->enter($__internal_7278953484514d29cddab83308b74f32ac605fc1a8a0918ac2ccc4f72109b277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_7278953484514d29cddab83308b74f32ac605fc1a8a0918ac2ccc4f72109b277->leave($__internal_7278953484514d29cddab83308b74f32ac605fc1a8a0918ac2ccc4f72109b277_prof);

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
