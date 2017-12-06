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
        $__internal_6039c6169ce283b65e409c46c8e6c380ecd96c7e9c2d5e84a7ae9f1c6f61161d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6039c6169ce283b65e409c46c8e6c380ecd96c7e9c2d5e84a7ae9f1c6f61161d->enter($__internal_6039c6169ce283b65e409c46c8e6c380ecd96c7e9c2d5e84a7ae9f1c6f61161d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6039c6169ce283b65e409c46c8e6c380ecd96c7e9c2d5e84a7ae9f1c6f61161d->leave($__internal_6039c6169ce283b65e409c46c8e6c380ecd96c7e9c2d5e84a7ae9f1c6f61161d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_45effe9a72c4c4ae27cb6bd905ea442a55f6d1bbb07c2b57b0b274ea97b59c1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45effe9a72c4c4ae27cb6bd905ea442a55f6d1bbb07c2b57b0b274ea97b59c1d->enter($__internal_45effe9a72c4c4ae27cb6bd905ea442a55f6d1bbb07c2b57b0b274ea97b59c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_45effe9a72c4c4ae27cb6bd905ea442a55f6d1bbb07c2b57b0b274ea97b59c1d->leave($__internal_45effe9a72c4c4ae27cb6bd905ea442a55f6d1bbb07c2b57b0b274ea97b59c1d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1557a0bf70cec22646f0536e16b44613baec1c6c6985a148833a7865e8a82314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1557a0bf70cec22646f0536e16b44613baec1c6c6985a148833a7865e8a82314->enter($__internal_1557a0bf70cec22646f0536e16b44613baec1c6c6985a148833a7865e8a82314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1557a0bf70cec22646f0536e16b44613baec1c6c6985a148833a7865e8a82314->leave($__internal_1557a0bf70cec22646f0536e16b44613baec1c6c6985a148833a7865e8a82314_prof);

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
