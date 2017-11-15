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
        $__internal_5ee3c50f9713a6313d1e71b7278ea49aa08611ea5bfda0b6bb5840e8c423fb2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ee3c50f9713a6313d1e71b7278ea49aa08611ea5bfda0b6bb5840e8c423fb2a->enter($__internal_5ee3c50f9713a6313d1e71b7278ea49aa08611ea5bfda0b6bb5840e8c423fb2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ee3c50f9713a6313d1e71b7278ea49aa08611ea5bfda0b6bb5840e8c423fb2a->leave($__internal_5ee3c50f9713a6313d1e71b7278ea49aa08611ea5bfda0b6bb5840e8c423fb2a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_75f52b2e8972306433ecd31d59edf71e0395d30329bef54ca431676a2d9dfe9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75f52b2e8972306433ecd31d59edf71e0395d30329bef54ca431676a2d9dfe9b->enter($__internal_75f52b2e8972306433ecd31d59edf71e0395d30329bef54ca431676a2d9dfe9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_75f52b2e8972306433ecd31d59edf71e0395d30329bef54ca431676a2d9dfe9b->leave($__internal_75f52b2e8972306433ecd31d59edf71e0395d30329bef54ca431676a2d9dfe9b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_818a8cc360f8ad4929fab947d9ea5a85518a2c331c17ff3168c0c49307f3be69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_818a8cc360f8ad4929fab947d9ea5a85518a2c331c17ff3168c0c49307f3be69->enter($__internal_818a8cc360f8ad4929fab947d9ea5a85518a2c331c17ff3168c0c49307f3be69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_818a8cc360f8ad4929fab947d9ea5a85518a2c331c17ff3168c0c49307f3be69->leave($__internal_818a8cc360f8ad4929fab947d9ea5a85518a2c331c17ff3168c0c49307f3be69_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9114fd24b1d720a5c308fa453b6a5c6942cb43878fe3c27de6319e265e80c07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9114fd24b1d720a5c308fa453b6a5c6942cb43878fe3c27de6319e265e80c07->enter($__internal_c9114fd24b1d720a5c308fa453b6a5c6942cb43878fe3c27de6319e265e80c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c9114fd24b1d720a5c308fa453b6a5c6942cb43878fe3c27de6319e265e80c07->leave($__internal_c9114fd24b1d720a5c308fa453b6a5c6942cb43878fe3c27de6319e265e80c07_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_4e27981235852e6a7bb83332ddb6149646e5292e6375446cc32b60acf5a5db20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e27981235852e6a7bb83332ddb6149646e5292e6375446cc32b60acf5a5db20->enter($__internal_4e27981235852e6a7bb83332ddb6149646e5292e6375446cc32b60acf5a5db20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_4e27981235852e6a7bb83332ddb6149646e5292e6375446cc32b60acf5a5db20->leave($__internal_4e27981235852e6a7bb83332ddb6149646e5292e6375446cc32b60acf5a5db20_prof);

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
