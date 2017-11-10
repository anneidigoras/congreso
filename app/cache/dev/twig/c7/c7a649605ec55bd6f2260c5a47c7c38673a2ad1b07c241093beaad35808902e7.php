<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_60fa8c80a06f1df51676d53232fb2e0e1a84533aae91da00463905873205bb1d extends Twig_Template
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
        $__internal_3cc7423340e54ff8f0b3be5ab644ae931c7b7e75d64d9a70527f06eae900b70f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cc7423340e54ff8f0b3be5ab644ae931c7b7e75d64d9a70527f06eae900b70f->enter($__internal_3cc7423340e54ff8f0b3be5ab644ae931c7b7e75d64d9a70527f06eae900b70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cc7423340e54ff8f0b3be5ab644ae931c7b7e75d64d9a70527f06eae900b70f->leave($__internal_3cc7423340e54ff8f0b3be5ab644ae931c7b7e75d64d9a70527f06eae900b70f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b35d275b87ff9224de2fe7ee222f1312f65ea84b0d0913a656620cf59a69a5e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b35d275b87ff9224de2fe7ee222f1312f65ea84b0d0913a656620cf59a69a5e9->enter($__internal_b35d275b87ff9224de2fe7ee222f1312f65ea84b0d0913a656620cf59a69a5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_b35d275b87ff9224de2fe7ee222f1312f65ea84b0d0913a656620cf59a69a5e9->leave($__internal_b35d275b87ff9224de2fe7ee222f1312f65ea84b0d0913a656620cf59a69a5e9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7832f1d256a38b3cb3b1944821e48bf12daa4ae31ce14899d17e0b865be5a264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7832f1d256a38b3cb3b1944821e48bf12daa4ae31ce14899d17e0b865be5a264->enter($__internal_7832f1d256a38b3cb3b1944821e48bf12daa4ae31ce14899d17e0b865be5a264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_7832f1d256a38b3cb3b1944821e48bf12daa4ae31ce14899d17e0b865be5a264->leave($__internal_7832f1d256a38b3cb3b1944821e48bf12daa4ae31ce14899d17e0b865be5a264_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_125dffa37cca18a29c54454706d463d48beb8fec7a8644c1a20b2d8ee1ba56c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_125dffa37cca18a29c54454706d463d48beb8fec7a8644c1a20b2d8ee1ba56c9->enter($__internal_125dffa37cca18a29c54454706d463d48beb8fec7a8644c1a20b2d8ee1ba56c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_125dffa37cca18a29c54454706d463d48beb8fec7a8644c1a20b2d8ee1ba56c9->leave($__internal_125dffa37cca18a29c54454706d463d48beb8fec7a8644c1a20b2d8ee1ba56c9_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_985aaf3b63829fb942626de2e97f89523123c627beea686c9505fdffe37f84db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_985aaf3b63829fb942626de2e97f89523123c627beea686c9505fdffe37f84db->enter($__internal_985aaf3b63829fb942626de2e97f89523123c627beea686c9505fdffe37f84db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_985aaf3b63829fb942626de2e97f89523123c627beea686c9505fdffe37f84db->leave($__internal_985aaf3b63829fb942626de2e97f89523123c627beea686c9505fdffe37f84db_prof);

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
", "SensioDistributionBundle::Configurator/layout.html.twig", "C:\\xampp\\htdocs\\ingweb_congreso\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
