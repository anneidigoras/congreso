<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_79a38a94ef95ccd4f299af2532aaa9c14989e2222d45370a261deb698ec0683c extends Twig_Template
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
        $__internal_db80d426974867af89471fe7d1d591a6d69d4d5213d4628dd82930cfe5fb0496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db80d426974867af89471fe7d1d591a6d69d4d5213d4628dd82930cfe5fb0496->enter($__internal_db80d426974867af89471fe7d1d591a6d69d4d5213d4628dd82930cfe5fb0496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db80d426974867af89471fe7d1d591a6d69d4d5213d4628dd82930cfe5fb0496->leave($__internal_db80d426974867af89471fe7d1d591a6d69d4d5213d4628dd82930cfe5fb0496_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3c1ac00e3f92efdc8b962e1bced58b1b87c85676e892ca25a141244275e01ac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c1ac00e3f92efdc8b962e1bced58b1b87c85676e892ca25a141244275e01ac4->enter($__internal_3c1ac00e3f92efdc8b962e1bced58b1b87c85676e892ca25a141244275e01ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3c1ac00e3f92efdc8b962e1bced58b1b87c85676e892ca25a141244275e01ac4->leave($__internal_3c1ac00e3f92efdc8b962e1bced58b1b87c85676e892ca25a141244275e01ac4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0baf2f294f5481a8690096a84676ac5581d6b185be179da3bde72a5056d96629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0baf2f294f5481a8690096a84676ac5581d6b185be179da3bde72a5056d96629->enter($__internal_0baf2f294f5481a8690096a84676ac5581d6b185be179da3bde72a5056d96629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0baf2f294f5481a8690096a84676ac5581d6b185be179da3bde72a5056d96629->leave($__internal_0baf2f294f5481a8690096a84676ac5581d6b185be179da3bde72a5056d96629_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9538b727355c4ce50c9c164ced2422efdd8f3d89e217f0e913cd6740b5ee11a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9538b727355c4ce50c9c164ced2422efdd8f3d89e217f0e913cd6740b5ee11a6->enter($__internal_9538b727355c4ce50c9c164ced2422efdd8f3d89e217f0e913cd6740b5ee11a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9538b727355c4ce50c9c164ced2422efdd8f3d89e217f0e913cd6740b5ee11a6->leave($__internal_9538b727355c4ce50c9c164ced2422efdd8f3d89e217f0e913cd6740b5ee11a6_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
