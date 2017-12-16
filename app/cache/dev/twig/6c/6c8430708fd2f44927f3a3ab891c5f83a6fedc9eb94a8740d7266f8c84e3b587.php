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
        $__internal_a5b8acdd5f711e4d3411a054fac67781c17cc2a1a4a2a0772c12ad7f891b80e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5b8acdd5f711e4d3411a054fac67781c17cc2a1a4a2a0772c12ad7f891b80e4->enter($__internal_a5b8acdd5f711e4d3411a054fac67781c17cc2a1a4a2a0772c12ad7f891b80e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5b8acdd5f711e4d3411a054fac67781c17cc2a1a4a2a0772c12ad7f891b80e4->leave($__internal_a5b8acdd5f711e4d3411a054fac67781c17cc2a1a4a2a0772c12ad7f891b80e4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fefd21e37aa320ba7f41d5e10d8765f7834be109721004681625ddda942616ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fefd21e37aa320ba7f41d5e10d8765f7834be109721004681625ddda942616ad->enter($__internal_fefd21e37aa320ba7f41d5e10d8765f7834be109721004681625ddda942616ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_fefd21e37aa320ba7f41d5e10d8765f7834be109721004681625ddda942616ad->leave($__internal_fefd21e37aa320ba7f41d5e10d8765f7834be109721004681625ddda942616ad_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_48b59954a794043819aec6c6029eb9176aef1ac69433d52bc14e141ebb9b56d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48b59954a794043819aec6c6029eb9176aef1ac69433d52bc14e141ebb9b56d5->enter($__internal_48b59954a794043819aec6c6029eb9176aef1ac69433d52bc14e141ebb9b56d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_48b59954a794043819aec6c6029eb9176aef1ac69433d52bc14e141ebb9b56d5->leave($__internal_48b59954a794043819aec6c6029eb9176aef1ac69433d52bc14e141ebb9b56d5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0dfa493a6a8d8e6b6009d2aabff71501afee709bb5210daa8d0888d9338dd9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0dfa493a6a8d8e6b6009d2aabff71501afee709bb5210daa8d0888d9338dd9f->enter($__internal_f0dfa493a6a8d8e6b6009d2aabff71501afee709bb5210daa8d0888d9338dd9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f0dfa493a6a8d8e6b6009d2aabff71501afee709bb5210daa8d0888d9338dd9f->leave($__internal_f0dfa493a6a8d8e6b6009d2aabff71501afee709bb5210daa8d0888d9338dd9f_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_330fd5be695c224941782d8225980d7ecfde0036f9fa863406381cf3871e719b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_330fd5be695c224941782d8225980d7ecfde0036f9fa863406381cf3871e719b->enter($__internal_330fd5be695c224941782d8225980d7ecfde0036f9fa863406381cf3871e719b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_330fd5be695c224941782d8225980d7ecfde0036f9fa863406381cf3871e719b->leave($__internal_330fd5be695c224941782d8225980d7ecfde0036f9fa863406381cf3871e719b_prof);

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
