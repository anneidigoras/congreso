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
        $__internal_559cd7995d73d20903313d2188b77e768a9c62a7022403854778c972f67d975c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_559cd7995d73d20903313d2188b77e768a9c62a7022403854778c972f67d975c->enter($__internal_559cd7995d73d20903313d2188b77e768a9c62a7022403854778c972f67d975c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_559cd7995d73d20903313d2188b77e768a9c62a7022403854778c972f67d975c->leave($__internal_559cd7995d73d20903313d2188b77e768a9c62a7022403854778c972f67d975c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4e6bdf6e08b1c638f9f83f2cc15a127232019a9471610834f1c1853d7ddc20ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e6bdf6e08b1c638f9f83f2cc15a127232019a9471610834f1c1853d7ddc20ed->enter($__internal_4e6bdf6e08b1c638f9f83f2cc15a127232019a9471610834f1c1853d7ddc20ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_4e6bdf6e08b1c638f9f83f2cc15a127232019a9471610834f1c1853d7ddc20ed->leave($__internal_4e6bdf6e08b1c638f9f83f2cc15a127232019a9471610834f1c1853d7ddc20ed_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4937945bf40993619e136030e38f134d5c72f279d03dcb3bfb5955f77713bee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4937945bf40993619e136030e38f134d5c72f279d03dcb3bfb5955f77713bee7->enter($__internal_4937945bf40993619e136030e38f134d5c72f279d03dcb3bfb5955f77713bee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_4937945bf40993619e136030e38f134d5c72f279d03dcb3bfb5955f77713bee7->leave($__internal_4937945bf40993619e136030e38f134d5c72f279d03dcb3bfb5955f77713bee7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e2930c4c8bb6c69fc56509e6b5b7c7d50370e75e644e9089bbaf831b4f1b616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e2930c4c8bb6c69fc56509e6b5b7c7d50370e75e644e9089bbaf831b4f1b616->enter($__internal_8e2930c4c8bb6c69fc56509e6b5b7c7d50370e75e644e9089bbaf831b4f1b616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8e2930c4c8bb6c69fc56509e6b5b7c7d50370e75e644e9089bbaf831b4f1b616->leave($__internal_8e2930c4c8bb6c69fc56509e6b5b7c7d50370e75e644e9089bbaf831b4f1b616_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_0631992ce335659ed1460cfb0bbff22e5eb54cab553c0fe071be0f00c4ef344d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0631992ce335659ed1460cfb0bbff22e5eb54cab553c0fe071be0f00c4ef344d->enter($__internal_0631992ce335659ed1460cfb0bbff22e5eb54cab553c0fe071be0f00c4ef344d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_0631992ce335659ed1460cfb0bbff22e5eb54cab553c0fe071be0f00c4ef344d->leave($__internal_0631992ce335659ed1460cfb0bbff22e5eb54cab553c0fe071be0f00c4ef344d_prof);

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
", "@SensioDistribution/Configurator/layout.html.twig", "C:\\xampp\\htdocs\\ingweb_congreso\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle\\Resources\\views\\Configurator\\layout.html.twig");
    }
}
