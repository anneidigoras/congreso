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
        $__internal_802719f1dca852537e14aea7f82372a1cf61df2a00dd234b17b5458e6f1dc615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_802719f1dca852537e14aea7f82372a1cf61df2a00dd234b17b5458e6f1dc615->enter($__internal_802719f1dca852537e14aea7f82372a1cf61df2a00dd234b17b5458e6f1dc615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_802719f1dca852537e14aea7f82372a1cf61df2a00dd234b17b5458e6f1dc615->leave($__internal_802719f1dca852537e14aea7f82372a1cf61df2a00dd234b17b5458e6f1dc615_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a23c851cbba2a68339cb79979cd5cfc705b6317543c03eb94ea898026257fa29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a23c851cbba2a68339cb79979cd5cfc705b6317543c03eb94ea898026257fa29->enter($__internal_a23c851cbba2a68339cb79979cd5cfc705b6317543c03eb94ea898026257fa29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_a23c851cbba2a68339cb79979cd5cfc705b6317543c03eb94ea898026257fa29->leave($__internal_a23c851cbba2a68339cb79979cd5cfc705b6317543c03eb94ea898026257fa29_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_aeef131bd029d8885248e059abaf23da30ffebf6380d2cf51979a809543fb5b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeef131bd029d8885248e059abaf23da30ffebf6380d2cf51979a809543fb5b2->enter($__internal_aeef131bd029d8885248e059abaf23da30ffebf6380d2cf51979a809543fb5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_aeef131bd029d8885248e059abaf23da30ffebf6380d2cf51979a809543fb5b2->leave($__internal_aeef131bd029d8885248e059abaf23da30ffebf6380d2cf51979a809543fb5b2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0130d8cfcd5b721dc2412976b7aee91f14dc3712059f13831b63c59808a37269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0130d8cfcd5b721dc2412976b7aee91f14dc3712059f13831b63c59808a37269->enter($__internal_0130d8cfcd5b721dc2412976b7aee91f14dc3712059f13831b63c59808a37269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0130d8cfcd5b721dc2412976b7aee91f14dc3712059f13831b63c59808a37269->leave($__internal_0130d8cfcd5b721dc2412976b7aee91f14dc3712059f13831b63c59808a37269_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_87fd17a908865d4e9fc53d7524f42d581a235636666c723949138b0661675b79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87fd17a908865d4e9fc53d7524f42d581a235636666c723949138b0661675b79->enter($__internal_87fd17a908865d4e9fc53d7524f42d581a235636666c723949138b0661675b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_87fd17a908865d4e9fc53d7524f42d581a235636666c723949138b0661675b79->leave($__internal_87fd17a908865d4e9fc53d7524f42d581a235636666c723949138b0661675b79_prof);

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
