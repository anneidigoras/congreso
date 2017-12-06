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
        $__internal_9bf70ac495216a78b14d428cbc5213ebfaac5501b351ddcd9fec1d3d75b87fc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bf70ac495216a78b14d428cbc5213ebfaac5501b351ddcd9fec1d3d75b87fc5->enter($__internal_9bf70ac495216a78b14d428cbc5213ebfaac5501b351ddcd9fec1d3d75b87fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bf70ac495216a78b14d428cbc5213ebfaac5501b351ddcd9fec1d3d75b87fc5->leave($__internal_9bf70ac495216a78b14d428cbc5213ebfaac5501b351ddcd9fec1d3d75b87fc5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_761aeb1c44a4b277af88c3bd38070c0f1833aa40686a648c34f754168fb9af01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_761aeb1c44a4b277af88c3bd38070c0f1833aa40686a648c34f754168fb9af01->enter($__internal_761aeb1c44a4b277af88c3bd38070c0f1833aa40686a648c34f754168fb9af01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_761aeb1c44a4b277af88c3bd38070c0f1833aa40686a648c34f754168fb9af01->leave($__internal_761aeb1c44a4b277af88c3bd38070c0f1833aa40686a648c34f754168fb9af01_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b10838d913d36e1f14c324288114522129538f9e1dcdb4bb8430631907afc98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b10838d913d36e1f14c324288114522129538f9e1dcdb4bb8430631907afc98->enter($__internal_5b10838d913d36e1f14c324288114522129538f9e1dcdb4bb8430631907afc98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_5b10838d913d36e1f14c324288114522129538f9e1dcdb4bb8430631907afc98->leave($__internal_5b10838d913d36e1f14c324288114522129538f9e1dcdb4bb8430631907afc98_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a50187f274a22454a2c219b1e9a9db37203e67e7bad2dbf7b2ca1607bfdbc6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a50187f274a22454a2c219b1e9a9db37203e67e7bad2dbf7b2ca1607bfdbc6c->enter($__internal_5a50187f274a22454a2c219b1e9a9db37203e67e7bad2dbf7b2ca1607bfdbc6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5a50187f274a22454a2c219b1e9a9db37203e67e7bad2dbf7b2ca1607bfdbc6c->leave($__internal_5a50187f274a22454a2c219b1e9a9db37203e67e7bad2dbf7b2ca1607bfdbc6c_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_3d5eff4f2b55e52823cc077511900a8e52965edceccfea45175c9827f0814c44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d5eff4f2b55e52823cc077511900a8e52965edceccfea45175c9827f0814c44->enter($__internal_3d5eff4f2b55e52823cc077511900a8e52965edceccfea45175c9827f0814c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_3d5eff4f2b55e52823cc077511900a8e52965edceccfea45175c9827f0814c44->leave($__internal_3d5eff4f2b55e52823cc077511900a8e52965edceccfea45175c9827f0814c44_prof);

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
