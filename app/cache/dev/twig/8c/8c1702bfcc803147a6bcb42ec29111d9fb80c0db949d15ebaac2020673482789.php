<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_18d6667e8874c348cd76f6c7d9f2ff0b4daf99d663d4ba13edf04ba359c575bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_8155c156f9f38ae00e157abfb4390959dabdf78feae62515e9d8a51025619238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8155c156f9f38ae00e157abfb4390959dabdf78feae62515e9d8a51025619238->enter($__internal_8155c156f9f38ae00e157abfb4390959dabdf78feae62515e9d8a51025619238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8155c156f9f38ae00e157abfb4390959dabdf78feae62515e9d8a51025619238->leave($__internal_8155c156f9f38ae00e157abfb4390959dabdf78feae62515e9d8a51025619238_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cec66b53c07ae208f39fd80fb3a863554bb366288df08b868c14812efba958b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cec66b53c07ae208f39fd80fb3a863554bb366288df08b868c14812efba958b9->enter($__internal_cec66b53c07ae208f39fd80fb3a863554bb366288df08b868c14812efba958b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cec66b53c07ae208f39fd80fb3a863554bb366288df08b868c14812efba958b9->leave($__internal_cec66b53c07ae208f39fd80fb3a863554bb366288df08b868c14812efba958b9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9179068bbecb38b904d1090190dfb40f0d84d03dc2d8c774d97743c2ffef3429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9179068bbecb38b904d1090190dfb40f0d84d03dc2d8c774d97743c2ffef3429->enter($__internal_9179068bbecb38b904d1090190dfb40f0d84d03dc2d8c774d97743c2ffef3429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9179068bbecb38b904d1090190dfb40f0d84d03dc2d8c774d97743c2ffef3429->leave($__internal_9179068bbecb38b904d1090190dfb40f0d84d03dc2d8c774d97743c2ffef3429_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_66a9dfc46ac54b96454439e9cc50b09a7472cbc481b15076fad0de91ff2c3183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66a9dfc46ac54b96454439e9cc50b09a7472cbc481b15076fad0de91ff2c3183->enter($__internal_66a9dfc46ac54b96454439e9cc50b09a7472cbc481b15076fad0de91ff2c3183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_66a9dfc46ac54b96454439e9cc50b09a7472cbc481b15076fad0de91ff2c3183->leave($__internal_66a9dfc46ac54b96454439e9cc50b09a7472cbc481b15076fad0de91ff2c3183_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
