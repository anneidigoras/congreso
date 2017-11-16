<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_bcd68bcfce815450f95b685f94438cd4d130ccd92c8a95e77deedaef1d28e101 extends Twig_Template
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
        $__internal_31961e08b7ddf5545a96e9384325f815b5eb322434959c5812190e593fa0a259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31961e08b7ddf5545a96e9384325f815b5eb322434959c5812190e593fa0a259->enter($__internal_31961e08b7ddf5545a96e9384325f815b5eb322434959c5812190e593fa0a259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31961e08b7ddf5545a96e9384325f815b5eb322434959c5812190e593fa0a259->leave($__internal_31961e08b7ddf5545a96e9384325f815b5eb322434959c5812190e593fa0a259_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3f896c2f1edc74769497119dffad5dc4c2c82896a87e2eea882e9a55d58ba84f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f896c2f1edc74769497119dffad5dc4c2c82896a87e2eea882e9a55d58ba84f->enter($__internal_3f896c2f1edc74769497119dffad5dc4c2c82896a87e2eea882e9a55d58ba84f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3f896c2f1edc74769497119dffad5dc4c2c82896a87e2eea882e9a55d58ba84f->leave($__internal_3f896c2f1edc74769497119dffad5dc4c2c82896a87e2eea882e9a55d58ba84f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2acc710a37a9f0cb3621c4089b5ed4d3223a739cfe595e4d9337855047e9ca3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2acc710a37a9f0cb3621c4089b5ed4d3223a739cfe595e4d9337855047e9ca3e->enter($__internal_2acc710a37a9f0cb3621c4089b5ed4d3223a739cfe595e4d9337855047e9ca3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2acc710a37a9f0cb3621c4089b5ed4d3223a739cfe595e4d9337855047e9ca3e->leave($__internal_2acc710a37a9f0cb3621c4089b5ed4d3223a739cfe595e4d9337855047e9ca3e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9ddd59152b1d52a3ac39e1f29f06168bc8586b403b5b71a5135faa711b5b390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9ddd59152b1d52a3ac39e1f29f06168bc8586b403b5b71a5135faa711b5b390->enter($__internal_f9ddd59152b1d52a3ac39e1f29f06168bc8586b403b5b71a5135faa711b5b390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f9ddd59152b1d52a3ac39e1f29f06168bc8586b403b5b71a5135faa711b5b390->leave($__internal_f9ddd59152b1d52a3ac39e1f29f06168bc8586b403b5b71a5135faa711b5b390_prof);

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
