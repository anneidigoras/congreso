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
        $__internal_b90a3a4bf3e153f36f2098072e446d287300f37d919f3082bf65c723747346be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b90a3a4bf3e153f36f2098072e446d287300f37d919f3082bf65c723747346be->enter($__internal_b90a3a4bf3e153f36f2098072e446d287300f37d919f3082bf65c723747346be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b90a3a4bf3e153f36f2098072e446d287300f37d919f3082bf65c723747346be->leave($__internal_b90a3a4bf3e153f36f2098072e446d287300f37d919f3082bf65c723747346be_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bdca8cba21b37dcdcac09b19b2ec2c222fc47c0f4809c3ee4b3bfa2591d7a560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdca8cba21b37dcdcac09b19b2ec2c222fc47c0f4809c3ee4b3bfa2591d7a560->enter($__internal_bdca8cba21b37dcdcac09b19b2ec2c222fc47c0f4809c3ee4b3bfa2591d7a560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_bdca8cba21b37dcdcac09b19b2ec2c222fc47c0f4809c3ee4b3bfa2591d7a560->leave($__internal_bdca8cba21b37dcdcac09b19b2ec2c222fc47c0f4809c3ee4b3bfa2591d7a560_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1efeb1efedb9ca131d546bad6ef7d9b946c7773d5eadf9641ca63a1e1165a0c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1efeb1efedb9ca131d546bad6ef7d9b946c7773d5eadf9641ca63a1e1165a0c8->enter($__internal_1efeb1efedb9ca131d546bad6ef7d9b946c7773d5eadf9641ca63a1e1165a0c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1efeb1efedb9ca131d546bad6ef7d9b946c7773d5eadf9641ca63a1e1165a0c8->leave($__internal_1efeb1efedb9ca131d546bad6ef7d9b946c7773d5eadf9641ca63a1e1165a0c8_prof);

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
