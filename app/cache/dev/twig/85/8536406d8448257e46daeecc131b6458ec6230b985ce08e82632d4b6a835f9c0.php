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
        $__internal_20a060ea23a7f70357897b43dc76238c82863cfcc3c56aace9d3d6626b8f6ad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20a060ea23a7f70357897b43dc76238c82863cfcc3c56aace9d3d6626b8f6ad2->enter($__internal_20a060ea23a7f70357897b43dc76238c82863cfcc3c56aace9d3d6626b8f6ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20a060ea23a7f70357897b43dc76238c82863cfcc3c56aace9d3d6626b8f6ad2->leave($__internal_20a060ea23a7f70357897b43dc76238c82863cfcc3c56aace9d3d6626b8f6ad2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aa5e166833185882198c1217ed4c35586970a82d14bbee1922a3cc4f53169bfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa5e166833185882198c1217ed4c35586970a82d14bbee1922a3cc4f53169bfd->enter($__internal_aa5e166833185882198c1217ed4c35586970a82d14bbee1922a3cc4f53169bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_aa5e166833185882198c1217ed4c35586970a82d14bbee1922a3cc4f53169bfd->leave($__internal_aa5e166833185882198c1217ed4c35586970a82d14bbee1922a3cc4f53169bfd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b872e9ba2012a89a70b6db36ed122b1c83219d13edc124f0bfa1ad2c5440546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b872e9ba2012a89a70b6db36ed122b1c83219d13edc124f0bfa1ad2c5440546->enter($__internal_0b872e9ba2012a89a70b6db36ed122b1c83219d13edc124f0bfa1ad2c5440546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_0b872e9ba2012a89a70b6db36ed122b1c83219d13edc124f0bfa1ad2c5440546->leave($__internal_0b872e9ba2012a89a70b6db36ed122b1c83219d13edc124f0bfa1ad2c5440546_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a1ec376269423c0ea48f835a601abde5db50db1fd3012169733bff28c412696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a1ec376269423c0ea48f835a601abde5db50db1fd3012169733bff28c412696->enter($__internal_6a1ec376269423c0ea48f835a601abde5db50db1fd3012169733bff28c412696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6a1ec376269423c0ea48f835a601abde5db50db1fd3012169733bff28c412696->leave($__internal_6a1ec376269423c0ea48f835a601abde5db50db1fd3012169733bff28c412696_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_14322d7989492e69aa5667896ccc7f06c3133c01c74846518747872d31a4c782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14322d7989492e69aa5667896ccc7f06c3133c01c74846518747872d31a4c782->enter($__internal_14322d7989492e69aa5667896ccc7f06c3133c01c74846518747872d31a4c782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_14322d7989492e69aa5667896ccc7f06c3133c01c74846518747872d31a4c782->leave($__internal_14322d7989492e69aa5667896ccc7f06c3133c01c74846518747872d31a4c782_prof);

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
