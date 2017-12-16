<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_8bfea18e871773f1de32ba9ec16a7c19b38cd9ef2f5a3d3cd2d33fba768a3e56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_8f209cd48cb30a2196ecafd4c99235e4e7f1753b771b53607282d9e6e71f9b8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f209cd48cb30a2196ecafd4c99235e4e7f1753b771b53607282d9e6e71f9b8f->enter($__internal_8f209cd48cb30a2196ecafd4c99235e4e7f1753b771b53607282d9e6e71f9b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f209cd48cb30a2196ecafd4c99235e4e7f1753b771b53607282d9e6e71f9b8f->leave($__internal_8f209cd48cb30a2196ecafd4c99235e4e7f1753b771b53607282d9e6e71f9b8f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_19f0d7f19161192169d22fc8cb10a5a943bbcb94a0f9feee1eeb45ab3dc5a6e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f0d7f19161192169d22fc8cb10a5a943bbcb94a0f9feee1eeb45ab3dc5a6e9->enter($__internal_19f0d7f19161192169d22fc8cb10a5a943bbcb94a0f9feee1eeb45ab3dc5a6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_19f0d7f19161192169d22fc8cb10a5a943bbcb94a0f9feee1eeb45ab3dc5a6e9->leave($__internal_19f0d7f19161192169d22fc8cb10a5a943bbcb94a0f9feee1eeb45ab3dc5a6e9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e93e51773226999862ca58bd99290b6c68a37a783249d862cda9d66950a180f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e93e51773226999862ca58bd99290b6c68a37a783249d862cda9d66950a180f3->enter($__internal_e93e51773226999862ca58bd99290b6c68a37a783249d862cda9d66950a180f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e93e51773226999862ca58bd99290b6c68a37a783249d862cda9d66950a180f3->leave($__internal_e93e51773226999862ca58bd99290b6c68a37a783249d862cda9d66950a180f3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
