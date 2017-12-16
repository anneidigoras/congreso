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
        $__internal_a3aa7979780858dcf510cd3151dfa79b6a67b003e77948d0f2098a596365128e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3aa7979780858dcf510cd3151dfa79b6a67b003e77948d0f2098a596365128e->enter($__internal_a3aa7979780858dcf510cd3151dfa79b6a67b003e77948d0f2098a596365128e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3aa7979780858dcf510cd3151dfa79b6a67b003e77948d0f2098a596365128e->leave($__internal_a3aa7979780858dcf510cd3151dfa79b6a67b003e77948d0f2098a596365128e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a1e2ae94d2533164bc385c7254077122fd292cee38f080ee6ee9492845565e7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1e2ae94d2533164bc385c7254077122fd292cee38f080ee6ee9492845565e7b->enter($__internal_a1e2ae94d2533164bc385c7254077122fd292cee38f080ee6ee9492845565e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_a1e2ae94d2533164bc385c7254077122fd292cee38f080ee6ee9492845565e7b->leave($__internal_a1e2ae94d2533164bc385c7254077122fd292cee38f080ee6ee9492845565e7b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a7029cdc3a0a878b2cb6683652b4de04b5394df9b9e75c6402f04b63dfdc0a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a7029cdc3a0a878b2cb6683652b4de04b5394df9b9e75c6402f04b63dfdc0a3->enter($__internal_5a7029cdc3a0a878b2cb6683652b4de04b5394df9b9e75c6402f04b63dfdc0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_5a7029cdc3a0a878b2cb6683652b4de04b5394df9b9e75c6402f04b63dfdc0a3->leave($__internal_5a7029cdc3a0a878b2cb6683652b4de04b5394df9b9e75c6402f04b63dfdc0a3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_086359923ccc5ab7824e549daba8a1f2ac935037cbe9d81608b235e866753819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_086359923ccc5ab7824e549daba8a1f2ac935037cbe9d81608b235e866753819->enter($__internal_086359923ccc5ab7824e549daba8a1f2ac935037cbe9d81608b235e866753819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_086359923ccc5ab7824e549daba8a1f2ac935037cbe9d81608b235e866753819->leave($__internal_086359923ccc5ab7824e549daba8a1f2ac935037cbe9d81608b235e866753819_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_ddee34fcb6967bc123a64f81e38a329af805f24d21c342873abaec6c64af4f30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddee34fcb6967bc123a64f81e38a329af805f24d21c342873abaec6c64af4f30->enter($__internal_ddee34fcb6967bc123a64f81e38a329af805f24d21c342873abaec6c64af4f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_ddee34fcb6967bc123a64f81e38a329af805f24d21c342873abaec6c64af4f30->leave($__internal_ddee34fcb6967bc123a64f81e38a329af805f24d21c342873abaec6c64af4f30_prof);

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
