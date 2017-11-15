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
        $__internal_cb8d3f839ee433844993189cf407f55964bbfa298b50cbbd4ce4e9925f8cb5e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb8d3f839ee433844993189cf407f55964bbfa298b50cbbd4ce4e9925f8cb5e9->enter($__internal_cb8d3f839ee433844993189cf407f55964bbfa298b50cbbd4ce4e9925f8cb5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb8d3f839ee433844993189cf407f55964bbfa298b50cbbd4ce4e9925f8cb5e9->leave($__internal_cb8d3f839ee433844993189cf407f55964bbfa298b50cbbd4ce4e9925f8cb5e9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_395568015bf3849134728e7347ed6732f1c4a8870a9f806b27daaa2126888a6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_395568015bf3849134728e7347ed6732f1c4a8870a9f806b27daaa2126888a6d->enter($__internal_395568015bf3849134728e7347ed6732f1c4a8870a9f806b27daaa2126888a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_395568015bf3849134728e7347ed6732f1c4a8870a9f806b27daaa2126888a6d->leave($__internal_395568015bf3849134728e7347ed6732f1c4a8870a9f806b27daaa2126888a6d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_010d9a9f6ad9228617894931b1404bfcbff67c29ae33ce075af7c0e5821933aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_010d9a9f6ad9228617894931b1404bfcbff67c29ae33ce075af7c0e5821933aa->enter($__internal_010d9a9f6ad9228617894931b1404bfcbff67c29ae33ce075af7c0e5821933aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_010d9a9f6ad9228617894931b1404bfcbff67c29ae33ce075af7c0e5821933aa->leave($__internal_010d9a9f6ad9228617894931b1404bfcbff67c29ae33ce075af7c0e5821933aa_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9eba7760e1ec1c3e2f47574bd50e212ce93a6698b3cf48a5a2b530d1c74ccb5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eba7760e1ec1c3e2f47574bd50e212ce93a6698b3cf48a5a2b530d1c74ccb5a->enter($__internal_9eba7760e1ec1c3e2f47574bd50e212ce93a6698b3cf48a5a2b530d1c74ccb5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9eba7760e1ec1c3e2f47574bd50e212ce93a6698b3cf48a5a2b530d1c74ccb5a->leave($__internal_9eba7760e1ec1c3e2f47574bd50e212ce93a6698b3cf48a5a2b530d1c74ccb5a_prof);

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
