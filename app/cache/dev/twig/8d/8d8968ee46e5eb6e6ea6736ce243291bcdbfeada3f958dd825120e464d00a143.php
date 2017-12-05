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
        $__internal_bdf6e3e6e31d49802dc1705fd1c811ed40f5f1289123a690d92d0155eb9f6011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdf6e3e6e31d49802dc1705fd1c811ed40f5f1289123a690d92d0155eb9f6011->enter($__internal_bdf6e3e6e31d49802dc1705fd1c811ed40f5f1289123a690d92d0155eb9f6011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdf6e3e6e31d49802dc1705fd1c811ed40f5f1289123a690d92d0155eb9f6011->leave($__internal_bdf6e3e6e31d49802dc1705fd1c811ed40f5f1289123a690d92d0155eb9f6011_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8445f72c72a6e484ed50bb83823cabac08a2c7fdc33ccbbf1a14018db3ab5307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8445f72c72a6e484ed50bb83823cabac08a2c7fdc33ccbbf1a14018db3ab5307->enter($__internal_8445f72c72a6e484ed50bb83823cabac08a2c7fdc33ccbbf1a14018db3ab5307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8445f72c72a6e484ed50bb83823cabac08a2c7fdc33ccbbf1a14018db3ab5307->leave($__internal_8445f72c72a6e484ed50bb83823cabac08a2c7fdc33ccbbf1a14018db3ab5307_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0d0afbd5b02d49a23c93d259378d45167173cec78e9e1747ba0c0e268fdd24e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d0afbd5b02d49a23c93d259378d45167173cec78e9e1747ba0c0e268fdd24e->enter($__internal_a0d0afbd5b02d49a23c93d259378d45167173cec78e9e1747ba0c0e268fdd24e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a0d0afbd5b02d49a23c93d259378d45167173cec78e9e1747ba0c0e268fdd24e->leave($__internal_a0d0afbd5b02d49a23c93d259378d45167173cec78e9e1747ba0c0e268fdd24e_prof);

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
