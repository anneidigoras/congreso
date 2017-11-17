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
        $__internal_fbfa016f8dea16f6596b5e596993acbcf2d899eebb08caf9a74c211ce0212b35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbfa016f8dea16f6596b5e596993acbcf2d899eebb08caf9a74c211ce0212b35->enter($__internal_fbfa016f8dea16f6596b5e596993acbcf2d899eebb08caf9a74c211ce0212b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbfa016f8dea16f6596b5e596993acbcf2d899eebb08caf9a74c211ce0212b35->leave($__internal_fbfa016f8dea16f6596b5e596993acbcf2d899eebb08caf9a74c211ce0212b35_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cdea1c6fbdf122606b28d70f3565997b9854eb4cbef53a59adb7b0454d1c265c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdea1c6fbdf122606b28d70f3565997b9854eb4cbef53a59adb7b0454d1c265c->enter($__internal_cdea1c6fbdf122606b28d70f3565997b9854eb4cbef53a59adb7b0454d1c265c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cdea1c6fbdf122606b28d70f3565997b9854eb4cbef53a59adb7b0454d1c265c->leave($__internal_cdea1c6fbdf122606b28d70f3565997b9854eb4cbef53a59adb7b0454d1c265c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6334b7db51e66bfb0e658f43a65b75ce258f472e0f47a7120d01e6ae915b55a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6334b7db51e66bfb0e658f43a65b75ce258f472e0f47a7120d01e6ae915b55a9->enter($__internal_6334b7db51e66bfb0e658f43a65b75ce258f472e0f47a7120d01e6ae915b55a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6334b7db51e66bfb0e658f43a65b75ce258f472e0f47a7120d01e6ae915b55a9->leave($__internal_6334b7db51e66bfb0e658f43a65b75ce258f472e0f47a7120d01e6ae915b55a9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6939b025d8db7b56648a8f3caa14294a6d07afd70510b8c329437e88d55ae6c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6939b025d8db7b56648a8f3caa14294a6d07afd70510b8c329437e88d55ae6c3->enter($__internal_6939b025d8db7b56648a8f3caa14294a6d07afd70510b8c329437e88d55ae6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6939b025d8db7b56648a8f3caa14294a6d07afd70510b8c329437e88d55ae6c3->leave($__internal_6939b025d8db7b56648a8f3caa14294a6d07afd70510b8c329437e88d55ae6c3_prof);

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
