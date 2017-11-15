<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_08376dfef13fae8630944fbbe37a6b70aeb78ef495b9098d87f4bd42b6fcba67 extends Twig_Template
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
        $__internal_84b688420d1fbc21804d8821d0f7669c80925dffab6509c5ffba442d94bc8731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84b688420d1fbc21804d8821d0f7669c80925dffab6509c5ffba442d94bc8731->enter($__internal_84b688420d1fbc21804d8821d0f7669c80925dffab6509c5ffba442d94bc8731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84b688420d1fbc21804d8821d0f7669c80925dffab6509c5ffba442d94bc8731->leave($__internal_84b688420d1fbc21804d8821d0f7669c80925dffab6509c5ffba442d94bc8731_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fbb58afb7f9f342e9551ad17b34d5ab62190596c41f4de7c08c2eadc6a397195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbb58afb7f9f342e9551ad17b34d5ab62190596c41f4de7c08c2eadc6a397195->enter($__internal_fbb58afb7f9f342e9551ad17b34d5ab62190596c41f4de7c08c2eadc6a397195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_fbb58afb7f9f342e9551ad17b34d5ab62190596c41f4de7c08c2eadc6a397195->leave($__internal_fbb58afb7f9f342e9551ad17b34d5ab62190596c41f4de7c08c2eadc6a397195_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_41c747a97d20c900f3ec1f1cecbda274387e7a28c835c89f3bc9f58542ec1594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41c747a97d20c900f3ec1f1cecbda274387e7a28c835c89f3bc9f58542ec1594->enter($__internal_41c747a97d20c900f3ec1f1cecbda274387e7a28c835c89f3bc9f58542ec1594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_41c747a97d20c900f3ec1f1cecbda274387e7a28c835c89f3bc9f58542ec1594->leave($__internal_41c747a97d20c900f3ec1f1cecbda274387e7a28c835c89f3bc9f58542ec1594_prof);

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
