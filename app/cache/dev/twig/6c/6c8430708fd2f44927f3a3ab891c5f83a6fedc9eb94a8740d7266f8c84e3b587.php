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
        $__internal_cb22b864b9adc4de1b36a1f1172e64bbdb4d3d6506ad462c1cd1872c247f954f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb22b864b9adc4de1b36a1f1172e64bbdb4d3d6506ad462c1cd1872c247f954f->enter($__internal_cb22b864b9adc4de1b36a1f1172e64bbdb4d3d6506ad462c1cd1872c247f954f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb22b864b9adc4de1b36a1f1172e64bbdb4d3d6506ad462c1cd1872c247f954f->leave($__internal_cb22b864b9adc4de1b36a1f1172e64bbdb4d3d6506ad462c1cd1872c247f954f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d77d6c6248e6010d93395bf56aa7392c5f90a7d854644ae508587d861d944b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d77d6c6248e6010d93395bf56aa7392c5f90a7d854644ae508587d861d944b30->enter($__internal_d77d6c6248e6010d93395bf56aa7392c5f90a7d854644ae508587d861d944b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_d77d6c6248e6010d93395bf56aa7392c5f90a7d854644ae508587d861d944b30->leave($__internal_d77d6c6248e6010d93395bf56aa7392c5f90a7d854644ae508587d861d944b30_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0780cc6346d3a903f61b4c463194e929a0de3753545ec26b1fd422652daaf39d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0780cc6346d3a903f61b4c463194e929a0de3753545ec26b1fd422652daaf39d->enter($__internal_0780cc6346d3a903f61b4c463194e929a0de3753545ec26b1fd422652daaf39d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_0780cc6346d3a903f61b4c463194e929a0de3753545ec26b1fd422652daaf39d->leave($__internal_0780cc6346d3a903f61b4c463194e929a0de3753545ec26b1fd422652daaf39d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a632d8bafef222dc710409a1a1bbc9c53d56967e7fee8e2f26ebb7481e2828f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a632d8bafef222dc710409a1a1bbc9c53d56967e7fee8e2f26ebb7481e2828f->enter($__internal_5a632d8bafef222dc710409a1a1bbc9c53d56967e7fee8e2f26ebb7481e2828f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5a632d8bafef222dc710409a1a1bbc9c53d56967e7fee8e2f26ebb7481e2828f->leave($__internal_5a632d8bafef222dc710409a1a1bbc9c53d56967e7fee8e2f26ebb7481e2828f_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_5a3b6f31d4589a1791bcab3ee12f7e14b11bbcf67469d2e83323080312478848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a3b6f31d4589a1791bcab3ee12f7e14b11bbcf67469d2e83323080312478848->enter($__internal_5a3b6f31d4589a1791bcab3ee12f7e14b11bbcf67469d2e83323080312478848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_5a3b6f31d4589a1791bcab3ee12f7e14b11bbcf67469d2e83323080312478848->leave($__internal_5a3b6f31d4589a1791bcab3ee12f7e14b11bbcf67469d2e83323080312478848_prof);

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
