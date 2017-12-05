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
        $__internal_a90776fe9c3a5aebdcd4cadec1331b29b4bc40aa2b8525c47ae57af7dafa58a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a90776fe9c3a5aebdcd4cadec1331b29b4bc40aa2b8525c47ae57af7dafa58a5->enter($__internal_a90776fe9c3a5aebdcd4cadec1331b29b4bc40aa2b8525c47ae57af7dafa58a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a90776fe9c3a5aebdcd4cadec1331b29b4bc40aa2b8525c47ae57af7dafa58a5->leave($__internal_a90776fe9c3a5aebdcd4cadec1331b29b4bc40aa2b8525c47ae57af7dafa58a5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_015028245156a5fee9639e91142efa8f35f56570e65b24dd9f9e4ed0bd9c8911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_015028245156a5fee9639e91142efa8f35f56570e65b24dd9f9e4ed0bd9c8911->enter($__internal_015028245156a5fee9639e91142efa8f35f56570e65b24dd9f9e4ed0bd9c8911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_015028245156a5fee9639e91142efa8f35f56570e65b24dd9f9e4ed0bd9c8911->leave($__internal_015028245156a5fee9639e91142efa8f35f56570e65b24dd9f9e4ed0bd9c8911_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d0013f55dd4a0e59d1094d1e6eb001cd9305d8fcab74c65e100972f5244ddc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d0013f55dd4a0e59d1094d1e6eb001cd9305d8fcab74c65e100972f5244ddc8->enter($__internal_5d0013f55dd4a0e59d1094d1e6eb001cd9305d8fcab74c65e100972f5244ddc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5d0013f55dd4a0e59d1094d1e6eb001cd9305d8fcab74c65e100972f5244ddc8->leave($__internal_5d0013f55dd4a0e59d1094d1e6eb001cd9305d8fcab74c65e100972f5244ddc8_prof);

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
