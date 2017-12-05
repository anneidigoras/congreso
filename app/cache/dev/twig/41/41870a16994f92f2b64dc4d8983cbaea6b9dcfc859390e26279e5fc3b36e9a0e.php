<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_edd653923438e67d6eaa61d5840b114fd8b3e8b30fe59da261433bc94772d5be extends Twig_Template
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
        $__internal_6d5db5b4fe291db333a254a97194f3824991666e1f271d8c5a1ce833e970c70b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d5db5b4fe291db333a254a97194f3824991666e1f271d8c5a1ce833e970c70b->enter($__internal_6d5db5b4fe291db333a254a97194f3824991666e1f271d8c5a1ce833e970c70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d5db5b4fe291db333a254a97194f3824991666e1f271d8c5a1ce833e970c70b->leave($__internal_6d5db5b4fe291db333a254a97194f3824991666e1f271d8c5a1ce833e970c70b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eb55e59a9f667fe4740b124dc687993890e1b6207559240ee388e141683a514e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb55e59a9f667fe4740b124dc687993890e1b6207559240ee388e141683a514e->enter($__internal_eb55e59a9f667fe4740b124dc687993890e1b6207559240ee388e141683a514e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_eb55e59a9f667fe4740b124dc687993890e1b6207559240ee388e141683a514e->leave($__internal_eb55e59a9f667fe4740b124dc687993890e1b6207559240ee388e141683a514e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_60b475ce81b46f8efa7469f44cb4136a38d7645374f2f2b8f7ddce95d7c6ca3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60b475ce81b46f8efa7469f44cb4136a38d7645374f2f2b8f7ddce95d7c6ca3a->enter($__internal_60b475ce81b46f8efa7469f44cb4136a38d7645374f2f2b8f7ddce95d7c6ca3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_60b475ce81b46f8efa7469f44cb4136a38d7645374f2f2b8f7ddce95d7c6ca3a->leave($__internal_60b475ce81b46f8efa7469f44cb4136a38d7645374f2f2b8f7ddce95d7c6ca3a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1475c2102a7d4159bd824e88a11f0b29410cceacfb8d464e06619bf7bfcb6e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1475c2102a7d4159bd824e88a11f0b29410cceacfb8d464e06619bf7bfcb6e3b->enter($__internal_1475c2102a7d4159bd824e88a11f0b29410cceacfb8d464e06619bf7bfcb6e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1475c2102a7d4159bd824e88a11f0b29410cceacfb8d464e06619bf7bfcb6e3b->leave($__internal_1475c2102a7d4159bd824e88a11f0b29410cceacfb8d464e06619bf7bfcb6e3b_prof);

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
