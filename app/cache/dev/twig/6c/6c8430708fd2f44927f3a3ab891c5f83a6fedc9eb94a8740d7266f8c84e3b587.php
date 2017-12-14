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
        $__internal_e97f83ab5c757897031447652fd511f989239c938851c35c84e197a3b43ac53c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e97f83ab5c757897031447652fd511f989239c938851c35c84e197a3b43ac53c->enter($__internal_e97f83ab5c757897031447652fd511f989239c938851c35c84e197a3b43ac53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e97f83ab5c757897031447652fd511f989239c938851c35c84e197a3b43ac53c->leave($__internal_e97f83ab5c757897031447652fd511f989239c938851c35c84e197a3b43ac53c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6a59c460b49d1ef87212dd288056548b7ef6fa9863f0a6c703caf5ef3917f83f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a59c460b49d1ef87212dd288056548b7ef6fa9863f0a6c703caf5ef3917f83f->enter($__internal_6a59c460b49d1ef87212dd288056548b7ef6fa9863f0a6c703caf5ef3917f83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_6a59c460b49d1ef87212dd288056548b7ef6fa9863f0a6c703caf5ef3917f83f->leave($__internal_6a59c460b49d1ef87212dd288056548b7ef6fa9863f0a6c703caf5ef3917f83f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_db77177c921e7db7bd32d591f77aaf4f1077c52cf5e932c2ff64ea83ab18e969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db77177c921e7db7bd32d591f77aaf4f1077c52cf5e932c2ff64ea83ab18e969->enter($__internal_db77177c921e7db7bd32d591f77aaf4f1077c52cf5e932c2ff64ea83ab18e969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_db77177c921e7db7bd32d591f77aaf4f1077c52cf5e932c2ff64ea83ab18e969->leave($__internal_db77177c921e7db7bd32d591f77aaf4f1077c52cf5e932c2ff64ea83ab18e969_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_632c5de2fe1732405d8a8885b87633499456bfe40f0c3f8130231b1c5f179ca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_632c5de2fe1732405d8a8885b87633499456bfe40f0c3f8130231b1c5f179ca5->enter($__internal_632c5de2fe1732405d8a8885b87633499456bfe40f0c3f8130231b1c5f179ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_632c5de2fe1732405d8a8885b87633499456bfe40f0c3f8130231b1c5f179ca5->leave($__internal_632c5de2fe1732405d8a8885b87633499456bfe40f0c3f8130231b1c5f179ca5_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_4f35aca1ad3e76df173a3a1e1b1fa4144154868a95d0fd98898b807caabf9a24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f35aca1ad3e76df173a3a1e1b1fa4144154868a95d0fd98898b807caabf9a24->enter($__internal_4f35aca1ad3e76df173a3a1e1b1fa4144154868a95d0fd98898b807caabf9a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_4f35aca1ad3e76df173a3a1e1b1fa4144154868a95d0fd98898b807caabf9a24->leave($__internal_4f35aca1ad3e76df173a3a1e1b1fa4144154868a95d0fd98898b807caabf9a24_prof);

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
