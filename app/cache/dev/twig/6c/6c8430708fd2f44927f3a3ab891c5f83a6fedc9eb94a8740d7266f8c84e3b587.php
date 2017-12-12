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
        $__internal_a8247f90a23005e8abe7f11dae71cc001c85450cc37ae61c31e62927b02806e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8247f90a23005e8abe7f11dae71cc001c85450cc37ae61c31e62927b02806e2->enter($__internal_a8247f90a23005e8abe7f11dae71cc001c85450cc37ae61c31e62927b02806e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8247f90a23005e8abe7f11dae71cc001c85450cc37ae61c31e62927b02806e2->leave($__internal_a8247f90a23005e8abe7f11dae71cc001c85450cc37ae61c31e62927b02806e2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dd8f9dc01c06ce2ed2c271f8c477571eea92f8d70e3ca1d8e7a341f7e9e9f0f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd8f9dc01c06ce2ed2c271f8c477571eea92f8d70e3ca1d8e7a341f7e9e9f0f9->enter($__internal_dd8f9dc01c06ce2ed2c271f8c477571eea92f8d70e3ca1d8e7a341f7e9e9f0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_dd8f9dc01c06ce2ed2c271f8c477571eea92f8d70e3ca1d8e7a341f7e9e9f0f9->leave($__internal_dd8f9dc01c06ce2ed2c271f8c477571eea92f8d70e3ca1d8e7a341f7e9e9f0f9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c291824e3e2d5d4d15209206e00aee7909a5973d52df64afbaa265ae41569fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c291824e3e2d5d4d15209206e00aee7909a5973d52df64afbaa265ae41569fb7->enter($__internal_c291824e3e2d5d4d15209206e00aee7909a5973d52df64afbaa265ae41569fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_c291824e3e2d5d4d15209206e00aee7909a5973d52df64afbaa265ae41569fb7->leave($__internal_c291824e3e2d5d4d15209206e00aee7909a5973d52df64afbaa265ae41569fb7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed18aa380968a9193ebeaf757fe76bb261815edc74a86dabbfef5e72a8e9aa54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed18aa380968a9193ebeaf757fe76bb261815edc74a86dabbfef5e72a8e9aa54->enter($__internal_ed18aa380968a9193ebeaf757fe76bb261815edc74a86dabbfef5e72a8e9aa54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ed18aa380968a9193ebeaf757fe76bb261815edc74a86dabbfef5e72a8e9aa54->leave($__internal_ed18aa380968a9193ebeaf757fe76bb261815edc74a86dabbfef5e72a8e9aa54_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_4f8cc0653dd79ede2977c8dabc9a2807e61f533efe39d8b3e637310f6ef02515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f8cc0653dd79ede2977c8dabc9a2807e61f533efe39d8b3e637310f6ef02515->enter($__internal_4f8cc0653dd79ede2977c8dabc9a2807e61f533efe39d8b3e637310f6ef02515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_4f8cc0653dd79ede2977c8dabc9a2807e61f533efe39d8b3e637310f6ef02515->leave($__internal_4f8cc0653dd79ede2977c8dabc9a2807e61f533efe39d8b3e637310f6ef02515_prof);

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
