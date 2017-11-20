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
        $__internal_c59aa58da1cdbb3c1824c9b295c3758961eb2c34375092d3bc1e4b9835b6544e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c59aa58da1cdbb3c1824c9b295c3758961eb2c34375092d3bc1e4b9835b6544e->enter($__internal_c59aa58da1cdbb3c1824c9b295c3758961eb2c34375092d3bc1e4b9835b6544e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c59aa58da1cdbb3c1824c9b295c3758961eb2c34375092d3bc1e4b9835b6544e->leave($__internal_c59aa58da1cdbb3c1824c9b295c3758961eb2c34375092d3bc1e4b9835b6544e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e97bf6065eeb450e605436c82fc4ecb1f27e9e5efc7c2a49d27e14ea6b1aec82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e97bf6065eeb450e605436c82fc4ecb1f27e9e5efc7c2a49d27e14ea6b1aec82->enter($__internal_e97bf6065eeb450e605436c82fc4ecb1f27e9e5efc7c2a49d27e14ea6b1aec82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_e97bf6065eeb450e605436c82fc4ecb1f27e9e5efc7c2a49d27e14ea6b1aec82->leave($__internal_e97bf6065eeb450e605436c82fc4ecb1f27e9e5efc7c2a49d27e14ea6b1aec82_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd2ef38fe686826682a23f8689913cf1fd4ffb45f08aac54d8c4ce5d8f60102c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd2ef38fe686826682a23f8689913cf1fd4ffb45f08aac54d8c4ce5d8f60102c->enter($__internal_fd2ef38fe686826682a23f8689913cf1fd4ffb45f08aac54d8c4ce5d8f60102c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_fd2ef38fe686826682a23f8689913cf1fd4ffb45f08aac54d8c4ce5d8f60102c->leave($__internal_fd2ef38fe686826682a23f8689913cf1fd4ffb45f08aac54d8c4ce5d8f60102c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ae15fa38a22a9a5b175465eee7aa8b24929c8a170480d648fd93f1a0eda52b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ae15fa38a22a9a5b175465eee7aa8b24929c8a170480d648fd93f1a0eda52b7->enter($__internal_8ae15fa38a22a9a5b175465eee7aa8b24929c8a170480d648fd93f1a0eda52b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8ae15fa38a22a9a5b175465eee7aa8b24929c8a170480d648fd93f1a0eda52b7->leave($__internal_8ae15fa38a22a9a5b175465eee7aa8b24929c8a170480d648fd93f1a0eda52b7_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_ebc103ca8d70b81f1fa91f855d8c2f4346a93b764b9fc3893a79cef8d61bf863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebc103ca8d70b81f1fa91f855d8c2f4346a93b764b9fc3893a79cef8d61bf863->enter($__internal_ebc103ca8d70b81f1fa91f855d8c2f4346a93b764b9fc3893a79cef8d61bf863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_ebc103ca8d70b81f1fa91f855d8c2f4346a93b764b9fc3893a79cef8d61bf863->leave($__internal_ebc103ca8d70b81f1fa91f855d8c2f4346a93b764b9fc3893a79cef8d61bf863_prof);

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
