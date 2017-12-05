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
        $__internal_6e29f93fd3891bde620207cb64f3144fb55d4a83cc2fff47826e832528743f8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e29f93fd3891bde620207cb64f3144fb55d4a83cc2fff47826e832528743f8b->enter($__internal_6e29f93fd3891bde620207cb64f3144fb55d4a83cc2fff47826e832528743f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e29f93fd3891bde620207cb64f3144fb55d4a83cc2fff47826e832528743f8b->leave($__internal_6e29f93fd3891bde620207cb64f3144fb55d4a83cc2fff47826e832528743f8b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ddb68e0dc3853fa02c39a590c9cb76618364ff2b779f0dde4aa0e410acd9c899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddb68e0dc3853fa02c39a590c9cb76618364ff2b779f0dde4aa0e410acd9c899->enter($__internal_ddb68e0dc3853fa02c39a590c9cb76618364ff2b779f0dde4aa0e410acd9c899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_ddb68e0dc3853fa02c39a590c9cb76618364ff2b779f0dde4aa0e410acd9c899->leave($__internal_ddb68e0dc3853fa02c39a590c9cb76618364ff2b779f0dde4aa0e410acd9c899_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e18a6d45d9dc2dcd7f22a9ab06e1fba061ed11c5508bf254d834fcb65deed4dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e18a6d45d9dc2dcd7f22a9ab06e1fba061ed11c5508bf254d834fcb65deed4dc->enter($__internal_e18a6d45d9dc2dcd7f22a9ab06e1fba061ed11c5508bf254d834fcb65deed4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_e18a6d45d9dc2dcd7f22a9ab06e1fba061ed11c5508bf254d834fcb65deed4dc->leave($__internal_e18a6d45d9dc2dcd7f22a9ab06e1fba061ed11c5508bf254d834fcb65deed4dc_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f0350d7aa314812eb29e9c2b10fdf8af9da2d9d796b01357d3dea943f668956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f0350d7aa314812eb29e9c2b10fdf8af9da2d9d796b01357d3dea943f668956->enter($__internal_8f0350d7aa314812eb29e9c2b10fdf8af9da2d9d796b01357d3dea943f668956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8f0350d7aa314812eb29e9c2b10fdf8af9da2d9d796b01357d3dea943f668956->leave($__internal_8f0350d7aa314812eb29e9c2b10fdf8af9da2d9d796b01357d3dea943f668956_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_c5e76040694482b64effa1cc81652d5b1a741813c6c01d2b7120e4ba36d20b8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5e76040694482b64effa1cc81652d5b1a741813c6c01d2b7120e4ba36d20b8b->enter($__internal_c5e76040694482b64effa1cc81652d5b1a741813c6c01d2b7120e4ba36d20b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_c5e76040694482b64effa1cc81652d5b1a741813c6c01d2b7120e4ba36d20b8b->leave($__internal_c5e76040694482b64effa1cc81652d5b1a741813c6c01d2b7120e4ba36d20b8b_prof);

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
