<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c3e78761fe2570c702bbd8a607479b014bd2d8ab2cf2bedc98a9d055b8d3e588 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_0b7037576da8d29f64d5d9e3d991ab87ecc81094c3e770ff6fae8c905d1f5982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b7037576da8d29f64d5d9e3d991ab87ecc81094c3e770ff6fae8c905d1f5982->enter($__internal_0b7037576da8d29f64d5d9e3d991ab87ecc81094c3e770ff6fae8c905d1f5982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b7037576da8d29f64d5d9e3d991ab87ecc81094c3e770ff6fae8c905d1f5982->leave($__internal_0b7037576da8d29f64d5d9e3d991ab87ecc81094c3e770ff6fae8c905d1f5982_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_09002c666ba370a98ff0e749cb326766c7a0e267570e2373429ec3d023d0ca7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09002c666ba370a98ff0e749cb326766c7a0e267570e2373429ec3d023d0ca7c->enter($__internal_09002c666ba370a98ff0e749cb326766c7a0e267570e2373429ec3d023d0ca7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_09002c666ba370a98ff0e749cb326766c7a0e267570e2373429ec3d023d0ca7c->leave($__internal_09002c666ba370a98ff0e749cb326766c7a0e267570e2373429ec3d023d0ca7c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cddd72e321cd1ad6b3c2031e94a4afd06a411eaddd0dbcc4cf350a02ad518585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cddd72e321cd1ad6b3c2031e94a4afd06a411eaddd0dbcc4cf350a02ad518585->enter($__internal_cddd72e321cd1ad6b3c2031e94a4afd06a411eaddd0dbcc4cf350a02ad518585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cddd72e321cd1ad6b3c2031e94a4afd06a411eaddd0dbcc4cf350a02ad518585->leave($__internal_cddd72e321cd1ad6b3c2031e94a4afd06a411eaddd0dbcc4cf350a02ad518585_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bdd67f45d619dd405ed9bfff02644ec98767a6facc31acd4ff1c8252eac06f70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdd67f45d619dd405ed9bfff02644ec98767a6facc31acd4ff1c8252eac06f70->enter($__internal_bdd67f45d619dd405ed9bfff02644ec98767a6facc31acd4ff1c8252eac06f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_bdd67f45d619dd405ed9bfff02644ec98767a6facc31acd4ff1c8252eac06f70->leave($__internal_bdd67f45d619dd405ed9bfff02644ec98767a6facc31acd4ff1c8252eac06f70_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\ingweb_congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
