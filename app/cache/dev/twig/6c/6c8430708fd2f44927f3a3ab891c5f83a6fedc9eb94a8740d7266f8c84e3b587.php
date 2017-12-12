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
        $__internal_3aa29067d4494fde499295139fdfc8b2236745677e0a14c030519057ffd0ef29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aa29067d4494fde499295139fdfc8b2236745677e0a14c030519057ffd0ef29->enter($__internal_3aa29067d4494fde499295139fdfc8b2236745677e0a14c030519057ffd0ef29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3aa29067d4494fde499295139fdfc8b2236745677e0a14c030519057ffd0ef29->leave($__internal_3aa29067d4494fde499295139fdfc8b2236745677e0a14c030519057ffd0ef29_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_51fc87aee211efd81140984596e402325ff6053dbdf4cbad1f088901245d8be7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51fc87aee211efd81140984596e402325ff6053dbdf4cbad1f088901245d8be7->enter($__internal_51fc87aee211efd81140984596e402325ff6053dbdf4cbad1f088901245d8be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_51fc87aee211efd81140984596e402325ff6053dbdf4cbad1f088901245d8be7->leave($__internal_51fc87aee211efd81140984596e402325ff6053dbdf4cbad1f088901245d8be7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_93dfb955c4d04058081901b0015a922e4d6f5744c0437b8bb29dc61d4047c005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93dfb955c4d04058081901b0015a922e4d6f5744c0437b8bb29dc61d4047c005->enter($__internal_93dfb955c4d04058081901b0015a922e4d6f5744c0437b8bb29dc61d4047c005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_93dfb955c4d04058081901b0015a922e4d6f5744c0437b8bb29dc61d4047c005->leave($__internal_93dfb955c4d04058081901b0015a922e4d6f5744c0437b8bb29dc61d4047c005_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_caf9450e4cc536e5a06630c8701588939929b38b3e38f8d83eeab504a2bdbbac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caf9450e4cc536e5a06630c8701588939929b38b3e38f8d83eeab504a2bdbbac->enter($__internal_caf9450e4cc536e5a06630c8701588939929b38b3e38f8d83eeab504a2bdbbac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_caf9450e4cc536e5a06630c8701588939929b38b3e38f8d83eeab504a2bdbbac->leave($__internal_caf9450e4cc536e5a06630c8701588939929b38b3e38f8d83eeab504a2bdbbac_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_892e1b7873eb5902f65a43ec4be6e8968dae58f1c9c18a60baf97d57708f372d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_892e1b7873eb5902f65a43ec4be6e8968dae58f1c9c18a60baf97d57708f372d->enter($__internal_892e1b7873eb5902f65a43ec4be6e8968dae58f1c9c18a60baf97d57708f372d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_892e1b7873eb5902f65a43ec4be6e8968dae58f1c9c18a60baf97d57708f372d->leave($__internal_892e1b7873eb5902f65a43ec4be6e8968dae58f1c9c18a60baf97d57708f372d_prof);

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
