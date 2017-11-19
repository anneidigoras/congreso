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
        $__internal_8ea33a512f9d73ba472d8d05f55b06ce9be61e771365046e12362b05754aa84a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ea33a512f9d73ba472d8d05f55b06ce9be61e771365046e12362b05754aa84a->enter($__internal_8ea33a512f9d73ba472d8d05f55b06ce9be61e771365046e12362b05754aa84a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ea33a512f9d73ba472d8d05f55b06ce9be61e771365046e12362b05754aa84a->leave($__internal_8ea33a512f9d73ba472d8d05f55b06ce9be61e771365046e12362b05754aa84a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2f3fc10941e54f731c8b2e32ea126dfee085769c622a8e63bfd7c35f26de8a8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f3fc10941e54f731c8b2e32ea126dfee085769c622a8e63bfd7c35f26de8a8b->enter($__internal_2f3fc10941e54f731c8b2e32ea126dfee085769c622a8e63bfd7c35f26de8a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_2f3fc10941e54f731c8b2e32ea126dfee085769c622a8e63bfd7c35f26de8a8b->leave($__internal_2f3fc10941e54f731c8b2e32ea126dfee085769c622a8e63bfd7c35f26de8a8b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b06912200ca3019ca742776389a28ed1f04784e28858d10c8e7761e3bdd17717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b06912200ca3019ca742776389a28ed1f04784e28858d10c8e7761e3bdd17717->enter($__internal_b06912200ca3019ca742776389a28ed1f04784e28858d10c8e7761e3bdd17717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_b06912200ca3019ca742776389a28ed1f04784e28858d10c8e7761e3bdd17717->leave($__internal_b06912200ca3019ca742776389a28ed1f04784e28858d10c8e7761e3bdd17717_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7ee5fd7095ed82728d209376a785ba057e19f49353a67ea86f69a2f1c8109e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7ee5fd7095ed82728d209376a785ba057e19f49353a67ea86f69a2f1c8109e1->enter($__internal_d7ee5fd7095ed82728d209376a785ba057e19f49353a67ea86f69a2f1c8109e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d7ee5fd7095ed82728d209376a785ba057e19f49353a67ea86f69a2f1c8109e1->leave($__internal_d7ee5fd7095ed82728d209376a785ba057e19f49353a67ea86f69a2f1c8109e1_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_056f79c3006c91b89971d526df0b2879004211fc21242e2de8ac5b43ca2e0576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_056f79c3006c91b89971d526df0b2879004211fc21242e2de8ac5b43ca2e0576->enter($__internal_056f79c3006c91b89971d526df0b2879004211fc21242e2de8ac5b43ca2e0576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_056f79c3006c91b89971d526df0b2879004211fc21242e2de8ac5b43ca2e0576->leave($__internal_056f79c3006c91b89971d526df0b2879004211fc21242e2de8ac5b43ca2e0576_prof);

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
