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
        $__internal_2fee5197988816ec55565e9b838925275d2be02738b520497322622b28bf1f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fee5197988816ec55565e9b838925275d2be02738b520497322622b28bf1f2a->enter($__internal_2fee5197988816ec55565e9b838925275d2be02738b520497322622b28bf1f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fee5197988816ec55565e9b838925275d2be02738b520497322622b28bf1f2a->leave($__internal_2fee5197988816ec55565e9b838925275d2be02738b520497322622b28bf1f2a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1dd0675d74ba8ed0a10dbf13561c3e8ca9628c57c1eb5c74b59049cbe04aaf49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd0675d74ba8ed0a10dbf13561c3e8ca9628c57c1eb5c74b59049cbe04aaf49->enter($__internal_1dd0675d74ba8ed0a10dbf13561c3e8ca9628c57c1eb5c74b59049cbe04aaf49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1dd0675d74ba8ed0a10dbf13561c3e8ca9628c57c1eb5c74b59049cbe04aaf49->leave($__internal_1dd0675d74ba8ed0a10dbf13561c3e8ca9628c57c1eb5c74b59049cbe04aaf49_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5aeb01d000f62f330ea8d5384e18c5a3b03508f09476ecd62a3d5725f25aa670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aeb01d000f62f330ea8d5384e18c5a3b03508f09476ecd62a3d5725f25aa670->enter($__internal_5aeb01d000f62f330ea8d5384e18c5a3b03508f09476ecd62a3d5725f25aa670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5aeb01d000f62f330ea8d5384e18c5a3b03508f09476ecd62a3d5725f25aa670->leave($__internal_5aeb01d000f62f330ea8d5384e18c5a3b03508f09476ecd62a3d5725f25aa670_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bcfff0fa583a36342bb5bbf6c4d53dae8e1c8a2fbde6a0f9f235bbe00bf68464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcfff0fa583a36342bb5bbf6c4d53dae8e1c8a2fbde6a0f9f235bbe00bf68464->enter($__internal_bcfff0fa583a36342bb5bbf6c4d53dae8e1c8a2fbde6a0f9f235bbe00bf68464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_bcfff0fa583a36342bb5bbf6c4d53dae8e1c8a2fbde6a0f9f235bbe00bf68464->leave($__internal_bcfff0fa583a36342bb5bbf6c4d53dae8e1c8a2fbde6a0f9f235bbe00bf68464_prof);

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
