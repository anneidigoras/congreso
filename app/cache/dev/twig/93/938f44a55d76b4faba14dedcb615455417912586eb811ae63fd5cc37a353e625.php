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
        $__internal_5839b404c615218b199483e459a819237cde3d192eebbfbcf11a1d49b1d8245b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5839b404c615218b199483e459a819237cde3d192eebbfbcf11a1d49b1d8245b->enter($__internal_5839b404c615218b199483e459a819237cde3d192eebbfbcf11a1d49b1d8245b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5839b404c615218b199483e459a819237cde3d192eebbfbcf11a1d49b1d8245b->leave($__internal_5839b404c615218b199483e459a819237cde3d192eebbfbcf11a1d49b1d8245b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b7567c155840254d4d1c2eb58a7c01dc1742d0b2a4fa0ee7f9ee00c1ee01b630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7567c155840254d4d1c2eb58a7c01dc1742d0b2a4fa0ee7f9ee00c1ee01b630->enter($__internal_b7567c155840254d4d1c2eb58a7c01dc1742d0b2a4fa0ee7f9ee00c1ee01b630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_b7567c155840254d4d1c2eb58a7c01dc1742d0b2a4fa0ee7f9ee00c1ee01b630->leave($__internal_b7567c155840254d4d1c2eb58a7c01dc1742d0b2a4fa0ee7f9ee00c1ee01b630_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb06fe1e50749ada256862332e08b53b8da5e068a0699ef730239bf5ff67ff97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb06fe1e50749ada256862332e08b53b8da5e068a0699ef730239bf5ff67ff97->enter($__internal_eb06fe1e50749ada256862332e08b53b8da5e068a0699ef730239bf5ff67ff97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_eb06fe1e50749ada256862332e08b53b8da5e068a0699ef730239bf5ff67ff97->leave($__internal_eb06fe1e50749ada256862332e08b53b8da5e068a0699ef730239bf5ff67ff97_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1867393db6c35fd25ad4fec89bac40d740a96267b4355f8a934ab4c660b22ddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1867393db6c35fd25ad4fec89bac40d740a96267b4355f8a934ab4c660b22ddd->enter($__internal_1867393db6c35fd25ad4fec89bac40d740a96267b4355f8a934ab4c660b22ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1867393db6c35fd25ad4fec89bac40d740a96267b4355f8a934ab4c660b22ddd->leave($__internal_1867393db6c35fd25ad4fec89bac40d740a96267b4355f8a934ab4c660b22ddd_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_d365211547d0b915d0931fa4d91cd8cfe85033aabe0a9cb0fd92d9af1d475d3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d365211547d0b915d0931fa4d91cd8cfe85033aabe0a9cb0fd92d9af1d475d3e->enter($__internal_d365211547d0b915d0931fa4d91cd8cfe85033aabe0a9cb0fd92d9af1d475d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_d365211547d0b915d0931fa4d91cd8cfe85033aabe0a9cb0fd92d9af1d475d3e->leave($__internal_d365211547d0b915d0931fa4d91cd8cfe85033aabe0a9cb0fd92d9af1d475d3e_prof);

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
