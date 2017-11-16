<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_60fa8c80a06f1df51676d53232fb2e0e1a84533aae91da00463905873205bb1d extends Twig_Template
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
        $__internal_b2690202114a06e8a5c2fed5499466ec87583e849cb0edb8d3992b9f9b7bb9a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2690202114a06e8a5c2fed5499466ec87583e849cb0edb8d3992b9f9b7bb9a8->enter($__internal_b2690202114a06e8a5c2fed5499466ec87583e849cb0edb8d3992b9f9b7bb9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2690202114a06e8a5c2fed5499466ec87583e849cb0edb8d3992b9f9b7bb9a8->leave($__internal_b2690202114a06e8a5c2fed5499466ec87583e849cb0edb8d3992b9f9b7bb9a8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cd270fa73088579ee3f9e705ee643fce0ceb3d86eb3358b453bad00b17b40984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd270fa73088579ee3f9e705ee643fce0ceb3d86eb3358b453bad00b17b40984->enter($__internal_cd270fa73088579ee3f9e705ee643fce0ceb3d86eb3358b453bad00b17b40984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_cd270fa73088579ee3f9e705ee643fce0ceb3d86eb3358b453bad00b17b40984->leave($__internal_cd270fa73088579ee3f9e705ee643fce0ceb3d86eb3358b453bad00b17b40984_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a03cf28b10b431ad47bd462308abd02711a0e1c354b763034c59b958aa7c59eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a03cf28b10b431ad47bd462308abd02711a0e1c354b763034c59b958aa7c59eb->enter($__internal_a03cf28b10b431ad47bd462308abd02711a0e1c354b763034c59b958aa7c59eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_a03cf28b10b431ad47bd462308abd02711a0e1c354b763034c59b958aa7c59eb->leave($__internal_a03cf28b10b431ad47bd462308abd02711a0e1c354b763034c59b958aa7c59eb_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_83c5ef6564e6ebd33ac964b7a42450fb5704885b702d3d74a824029321e7e8be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83c5ef6564e6ebd33ac964b7a42450fb5704885b702d3d74a824029321e7e8be->enter($__internal_83c5ef6564e6ebd33ac964b7a42450fb5704885b702d3d74a824029321e7e8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_83c5ef6564e6ebd33ac964b7a42450fb5704885b702d3d74a824029321e7e8be->leave($__internal_83c5ef6564e6ebd33ac964b7a42450fb5704885b702d3d74a824029321e7e8be_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_43624978360b49c184dbbfa2a58ef169263f9b4463b427f7c4368c068feb2472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43624978360b49c184dbbfa2a58ef169263f9b4463b427f7c4368c068feb2472->enter($__internal_43624978360b49c184dbbfa2a58ef169263f9b4463b427f7c4368c068feb2472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_43624978360b49c184dbbfa2a58ef169263f9b4463b427f7c4368c068feb2472->leave($__internal_43624978360b49c184dbbfa2a58ef169263f9b4463b427f7c4368c068feb2472_prof);

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
