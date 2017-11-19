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
        $__internal_23e227e133323ab409400673745db7ac61d500d88f4f740c0ff55f40f8995cfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23e227e133323ab409400673745db7ac61d500d88f4f740c0ff55f40f8995cfb->enter($__internal_23e227e133323ab409400673745db7ac61d500d88f4f740c0ff55f40f8995cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23e227e133323ab409400673745db7ac61d500d88f4f740c0ff55f40f8995cfb->leave($__internal_23e227e133323ab409400673745db7ac61d500d88f4f740c0ff55f40f8995cfb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5af92dc12a4ad34f5cc6296e13503c18874a99281600c409ce1a678f0ef97426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5af92dc12a4ad34f5cc6296e13503c18874a99281600c409ce1a678f0ef97426->enter($__internal_5af92dc12a4ad34f5cc6296e13503c18874a99281600c409ce1a678f0ef97426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_5af92dc12a4ad34f5cc6296e13503c18874a99281600c409ce1a678f0ef97426->leave($__internal_5af92dc12a4ad34f5cc6296e13503c18874a99281600c409ce1a678f0ef97426_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_46a90a6bee85ebc51dcebc54786c6f1a9b93696c446630d6ea52e8d51fd2536b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46a90a6bee85ebc51dcebc54786c6f1a9b93696c446630d6ea52e8d51fd2536b->enter($__internal_46a90a6bee85ebc51dcebc54786c6f1a9b93696c446630d6ea52e8d51fd2536b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_46a90a6bee85ebc51dcebc54786c6f1a9b93696c446630d6ea52e8d51fd2536b->leave($__internal_46a90a6bee85ebc51dcebc54786c6f1a9b93696c446630d6ea52e8d51fd2536b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8833fb510c328f346cea0731944c48de192bb04f50a436d83dfaac41a3fb1b9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8833fb510c328f346cea0731944c48de192bb04f50a436d83dfaac41a3fb1b9d->enter($__internal_8833fb510c328f346cea0731944c48de192bb04f50a436d83dfaac41a3fb1b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8833fb510c328f346cea0731944c48de192bb04f50a436d83dfaac41a3fb1b9d->leave($__internal_8833fb510c328f346cea0731944c48de192bb04f50a436d83dfaac41a3fb1b9d_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_7ad092de5f19c0d6c0f21a22ab88687927c03a0c373edabcfb7685739b3baef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ad092de5f19c0d6c0f21a22ab88687927c03a0c373edabcfb7685739b3baef7->enter($__internal_7ad092de5f19c0d6c0f21a22ab88687927c03a0c373edabcfb7685739b3baef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_7ad092de5f19c0d6c0f21a22ab88687927c03a0c373edabcfb7685739b3baef7->leave($__internal_7ad092de5f19c0d6c0f21a22ab88687927c03a0c373edabcfb7685739b3baef7_prof);

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
