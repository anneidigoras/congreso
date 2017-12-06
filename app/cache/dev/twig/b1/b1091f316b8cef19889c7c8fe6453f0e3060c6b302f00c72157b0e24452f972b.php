<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d3caa8cea35237c267b3e33abd03498d29fa8b1d095349910f17268c6d760d30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0cb17606811baf12464b3164d44b93a01cf74acd4067837bf85d090c3f2a4f6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb17606811baf12464b3164d44b93a01cf74acd4067837bf85d090c3f2a4f6a->enter($__internal_0cb17606811baf12464b3164d44b93a01cf74acd4067837bf85d090c3f2a4f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cb17606811baf12464b3164d44b93a01cf74acd4067837bf85d090c3f2a4f6a->leave($__internal_0cb17606811baf12464b3164d44b93a01cf74acd4067837bf85d090c3f2a4f6a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc88f980cf732aeab6d51cca74f4caaeba71818022899308e25ce1888fad1828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc88f980cf732aeab6d51cca74f4caaeba71818022899308e25ce1888fad1828->enter($__internal_cc88f980cf732aeab6d51cca74f4caaeba71818022899308e25ce1888fad1828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cc88f980cf732aeab6d51cca74f4caaeba71818022899308e25ce1888fad1828->leave($__internal_cc88f980cf732aeab6d51cca74f4caaeba71818022899308e25ce1888fad1828_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e20b87d48ec77a0c22e2f479d5d7f845c5d1eedf7b43051c28a093af3cfb453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e20b87d48ec77a0c22e2f479d5d7f845c5d1eedf7b43051c28a093af3cfb453->enter($__internal_6e20b87d48ec77a0c22e2f479d5d7f845c5d1eedf7b43051c28a093af3cfb453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_6e20b87d48ec77a0c22e2f479d5d7f845c5d1eedf7b43051c28a093af3cfb453->leave($__internal_6e20b87d48ec77a0c22e2f479d5d7f845c5d1eedf7b43051c28a093af3cfb453_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
