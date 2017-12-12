<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f97c8a1787df839bdffafdd4590367c492bf691f87a5dbc9f4c5c6a8ef593ec9 extends Twig_Template
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
        $__internal_fb733631b76049c48f9de210d42ec36c07c5df9257c3e490fe4af514af38aad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb733631b76049c48f9de210d42ec36c07c5df9257c3e490fe4af514af38aad0->enter($__internal_fb733631b76049c48f9de210d42ec36c07c5df9257c3e490fe4af514af38aad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb733631b76049c48f9de210d42ec36c07c5df9257c3e490fe4af514af38aad0->leave($__internal_fb733631b76049c48f9de210d42ec36c07c5df9257c3e490fe4af514af38aad0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fb042c85d5fc9d4896f4a28436557026d27828859d8cc54deb9aefd41c2dd43c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb042c85d5fc9d4896f4a28436557026d27828859d8cc54deb9aefd41c2dd43c->enter($__internal_fb042c85d5fc9d4896f4a28436557026d27828859d8cc54deb9aefd41c2dd43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fb042c85d5fc9d4896f4a28436557026d27828859d8cc54deb9aefd41c2dd43c->leave($__internal_fb042c85d5fc9d4896f4a28436557026d27828859d8cc54deb9aefd41c2dd43c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_441eea4355aae5e250e40e90745f89a41f0a60b840cdee26ad86baa2b1b1b160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_441eea4355aae5e250e40e90745f89a41f0a60b840cdee26ad86baa2b1b1b160->enter($__internal_441eea4355aae5e250e40e90745f89a41f0a60b840cdee26ad86baa2b1b1b160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_441eea4355aae5e250e40e90745f89a41f0a60b840cdee26ad86baa2b1b1b160->leave($__internal_441eea4355aae5e250e40e90745f89a41f0a60b840cdee26ad86baa2b1b1b160_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4104c8af604da0e4696c323a0a4d5b81e452c86113d99b6a587819486f42050f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4104c8af604da0e4696c323a0a4d5b81e452c86113d99b6a587819486f42050f->enter($__internal_4104c8af604da0e4696c323a0a4d5b81e452c86113d99b6a587819486f42050f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4104c8af604da0e4696c323a0a4d5b81e452c86113d99b6a587819486f42050f->leave($__internal_4104c8af604da0e4696c323a0a4d5b81e452c86113d99b6a587819486f42050f_prof);

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
