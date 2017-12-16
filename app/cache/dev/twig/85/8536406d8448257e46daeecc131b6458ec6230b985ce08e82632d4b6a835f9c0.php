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
        $__internal_139c448ff1c7c5bf9ab3b51391dad1626bd92661ea44fee289441a5788858d8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_139c448ff1c7c5bf9ab3b51391dad1626bd92661ea44fee289441a5788858d8b->enter($__internal_139c448ff1c7c5bf9ab3b51391dad1626bd92661ea44fee289441a5788858d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_139c448ff1c7c5bf9ab3b51391dad1626bd92661ea44fee289441a5788858d8b->leave($__internal_139c448ff1c7c5bf9ab3b51391dad1626bd92661ea44fee289441a5788858d8b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_496d8dc608357477c4854e1e2be0a01b4df237d4ffab2db1429b6504dd773d94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_496d8dc608357477c4854e1e2be0a01b4df237d4ffab2db1429b6504dd773d94->enter($__internal_496d8dc608357477c4854e1e2be0a01b4df237d4ffab2db1429b6504dd773d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_496d8dc608357477c4854e1e2be0a01b4df237d4ffab2db1429b6504dd773d94->leave($__internal_496d8dc608357477c4854e1e2be0a01b4df237d4ffab2db1429b6504dd773d94_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc50736786921c7b20c8894809b951490385b41c4e54f111562b72b9f0e30982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc50736786921c7b20c8894809b951490385b41c4e54f111562b72b9f0e30982->enter($__internal_cc50736786921c7b20c8894809b951490385b41c4e54f111562b72b9f0e30982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_cc50736786921c7b20c8894809b951490385b41c4e54f111562b72b9f0e30982->leave($__internal_cc50736786921c7b20c8894809b951490385b41c4e54f111562b72b9f0e30982_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5eb463b9af78d0ed171309d3bcc9ecc804a666a3b8e33d40ea85a955b20c52ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eb463b9af78d0ed171309d3bcc9ecc804a666a3b8e33d40ea85a955b20c52ac->enter($__internal_5eb463b9af78d0ed171309d3bcc9ecc804a666a3b8e33d40ea85a955b20c52ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5eb463b9af78d0ed171309d3bcc9ecc804a666a3b8e33d40ea85a955b20c52ac->leave($__internal_5eb463b9af78d0ed171309d3bcc9ecc804a666a3b8e33d40ea85a955b20c52ac_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_10999ae903e1a9648e539dd9ff8d90a0b738426350ed77c6b3d4de6c97bf3171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10999ae903e1a9648e539dd9ff8d90a0b738426350ed77c6b3d4de6c97bf3171->enter($__internal_10999ae903e1a9648e539dd9ff8d90a0b738426350ed77c6b3d4de6c97bf3171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_10999ae903e1a9648e539dd9ff8d90a0b738426350ed77c6b3d4de6c97bf3171->leave($__internal_10999ae903e1a9648e539dd9ff8d90a0b738426350ed77c6b3d4de6c97bf3171_prof);

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
