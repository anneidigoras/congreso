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
        $__internal_5780c39223b1d72e6330ae2d169f6953de8ea25877bbc473da46a728bef69219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5780c39223b1d72e6330ae2d169f6953de8ea25877bbc473da46a728bef69219->enter($__internal_5780c39223b1d72e6330ae2d169f6953de8ea25877bbc473da46a728bef69219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5780c39223b1d72e6330ae2d169f6953de8ea25877bbc473da46a728bef69219->leave($__internal_5780c39223b1d72e6330ae2d169f6953de8ea25877bbc473da46a728bef69219_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_31ec1cac64e345089808999b08666d5da88e31b7a00058367f002a8ea37f7bac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31ec1cac64e345089808999b08666d5da88e31b7a00058367f002a8ea37f7bac->enter($__internal_31ec1cac64e345089808999b08666d5da88e31b7a00058367f002a8ea37f7bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_31ec1cac64e345089808999b08666d5da88e31b7a00058367f002a8ea37f7bac->leave($__internal_31ec1cac64e345089808999b08666d5da88e31b7a00058367f002a8ea37f7bac_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6979a3f8b7b3ae58939b4ffd09ab5cd16ba89582729eb388e5f37c8090c8d8c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6979a3f8b7b3ae58939b4ffd09ab5cd16ba89582729eb388e5f37c8090c8d8c9->enter($__internal_6979a3f8b7b3ae58939b4ffd09ab5cd16ba89582729eb388e5f37c8090c8d8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_6979a3f8b7b3ae58939b4ffd09ab5cd16ba89582729eb388e5f37c8090c8d8c9->leave($__internal_6979a3f8b7b3ae58939b4ffd09ab5cd16ba89582729eb388e5f37c8090c8d8c9_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6cbd7314020945fbe7e23709c9f51d353be32018810184e35ca292aa43421a90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cbd7314020945fbe7e23709c9f51d353be32018810184e35ca292aa43421a90->enter($__internal_6cbd7314020945fbe7e23709c9f51d353be32018810184e35ca292aa43421a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6cbd7314020945fbe7e23709c9f51d353be32018810184e35ca292aa43421a90->leave($__internal_6cbd7314020945fbe7e23709c9f51d353be32018810184e35ca292aa43421a90_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_f6bd50aca812b35ac728c0ed0d0c99e35ba1bbfc40b009dcd810a78bd4b641d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6bd50aca812b35ac728c0ed0d0c99e35ba1bbfc40b009dcd810a78bd4b641d0->enter($__internal_f6bd50aca812b35ac728c0ed0d0c99e35ba1bbfc40b009dcd810a78bd4b641d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_f6bd50aca812b35ac728c0ed0d0c99e35ba1bbfc40b009dcd810a78bd4b641d0->leave($__internal_f6bd50aca812b35ac728c0ed0d0c99e35ba1bbfc40b009dcd810a78bd4b641d0_prof);

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
