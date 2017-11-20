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
        $__internal_7b4c9660bcae4b98edcfd53b7e535e53f05a0a6566e90b9c7b0db1a2cb3d6e2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b4c9660bcae4b98edcfd53b7e535e53f05a0a6566e90b9c7b0db1a2cb3d6e2b->enter($__internal_7b4c9660bcae4b98edcfd53b7e535e53f05a0a6566e90b9c7b0db1a2cb3d6e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b4c9660bcae4b98edcfd53b7e535e53f05a0a6566e90b9c7b0db1a2cb3d6e2b->leave($__internal_7b4c9660bcae4b98edcfd53b7e535e53f05a0a6566e90b9c7b0db1a2cb3d6e2b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4ca49cc084ffb999b7a1d61a0a72386c56469f5a8dbfb0b78875cdfb94f6d69c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ca49cc084ffb999b7a1d61a0a72386c56469f5a8dbfb0b78875cdfb94f6d69c->enter($__internal_4ca49cc084ffb999b7a1d61a0a72386c56469f5a8dbfb0b78875cdfb94f6d69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4ca49cc084ffb999b7a1d61a0a72386c56469f5a8dbfb0b78875cdfb94f6d69c->leave($__internal_4ca49cc084ffb999b7a1d61a0a72386c56469f5a8dbfb0b78875cdfb94f6d69c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c21e3434fb21c11f9b8fed5d46056aafc7d6b40aa3add32146a28a96753dae7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c21e3434fb21c11f9b8fed5d46056aafc7d6b40aa3add32146a28a96753dae7e->enter($__internal_c21e3434fb21c11f9b8fed5d46056aafc7d6b40aa3add32146a28a96753dae7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c21e3434fb21c11f9b8fed5d46056aafc7d6b40aa3add32146a28a96753dae7e->leave($__internal_c21e3434fb21c11f9b8fed5d46056aafc7d6b40aa3add32146a28a96753dae7e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4737b8b9498f9cc4f20b5c76754ff72ed7299461a0b49cf15da7ead13b91b0f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4737b8b9498f9cc4f20b5c76754ff72ed7299461a0b49cf15da7ead13b91b0f6->enter($__internal_4737b8b9498f9cc4f20b5c76754ff72ed7299461a0b49cf15da7ead13b91b0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4737b8b9498f9cc4f20b5c76754ff72ed7299461a0b49cf15da7ead13b91b0f6->leave($__internal_4737b8b9498f9cc4f20b5c76754ff72ed7299461a0b49cf15da7ead13b91b0f6_prof);

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
