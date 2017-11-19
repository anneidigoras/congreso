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
        $__internal_357dd2db8a059d50be0fc0c50c0c75f8d80458e718d4ddd209ee7b502e9fc8f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_357dd2db8a059d50be0fc0c50c0c75f8d80458e718d4ddd209ee7b502e9fc8f6->enter($__internal_357dd2db8a059d50be0fc0c50c0c75f8d80458e718d4ddd209ee7b502e9fc8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_357dd2db8a059d50be0fc0c50c0c75f8d80458e718d4ddd209ee7b502e9fc8f6->leave($__internal_357dd2db8a059d50be0fc0c50c0c75f8d80458e718d4ddd209ee7b502e9fc8f6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_669a231c074839795cf71cc8bcd74388582b8519f31a2c1d6740a595b9c8492b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_669a231c074839795cf71cc8bcd74388582b8519f31a2c1d6740a595b9c8492b->enter($__internal_669a231c074839795cf71cc8bcd74388582b8519f31a2c1d6740a595b9c8492b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_669a231c074839795cf71cc8bcd74388582b8519f31a2c1d6740a595b9c8492b->leave($__internal_669a231c074839795cf71cc8bcd74388582b8519f31a2c1d6740a595b9c8492b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_718fac3d293aa958f7dfad5d3b32a10cd690cd57f60056dbf3b44594565667b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_718fac3d293aa958f7dfad5d3b32a10cd690cd57f60056dbf3b44594565667b0->enter($__internal_718fac3d293aa958f7dfad5d3b32a10cd690cd57f60056dbf3b44594565667b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_718fac3d293aa958f7dfad5d3b32a10cd690cd57f60056dbf3b44594565667b0->leave($__internal_718fac3d293aa958f7dfad5d3b32a10cd690cd57f60056dbf3b44594565667b0_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_399a40789615bc5754ea3aa79aef82645a903b44f258a52c31062adac7016d5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_399a40789615bc5754ea3aa79aef82645a903b44f258a52c31062adac7016d5e->enter($__internal_399a40789615bc5754ea3aa79aef82645a903b44f258a52c31062adac7016d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_399a40789615bc5754ea3aa79aef82645a903b44f258a52c31062adac7016d5e->leave($__internal_399a40789615bc5754ea3aa79aef82645a903b44f258a52c31062adac7016d5e_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_53732adf644a6063796728753cc95d77d1a22acdda52aa0eb6f4a1b8fb73838e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53732adf644a6063796728753cc95d77d1a22acdda52aa0eb6f4a1b8fb73838e->enter($__internal_53732adf644a6063796728753cc95d77d1a22acdda52aa0eb6f4a1b8fb73838e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_53732adf644a6063796728753cc95d77d1a22acdda52aa0eb6f4a1b8fb73838e->leave($__internal_53732adf644a6063796728753cc95d77d1a22acdda52aa0eb6f4a1b8fb73838e_prof);

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
