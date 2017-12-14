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
        $__internal_601ba434cf11e2f122aae3ca805620c3437ccd01c7e8cd6e4ba3b41be8520a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_601ba434cf11e2f122aae3ca805620c3437ccd01c7e8cd6e4ba3b41be8520a1a->enter($__internal_601ba434cf11e2f122aae3ca805620c3437ccd01c7e8cd6e4ba3b41be8520a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_601ba434cf11e2f122aae3ca805620c3437ccd01c7e8cd6e4ba3b41be8520a1a->leave($__internal_601ba434cf11e2f122aae3ca805620c3437ccd01c7e8cd6e4ba3b41be8520a1a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d98c1999900e5e8f6bbaeac163a9a9385816cbb952ed67e82ea1113c7f5da6fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d98c1999900e5e8f6bbaeac163a9a9385816cbb952ed67e82ea1113c7f5da6fc->enter($__internal_d98c1999900e5e8f6bbaeac163a9a9385816cbb952ed67e82ea1113c7f5da6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d98c1999900e5e8f6bbaeac163a9a9385816cbb952ed67e82ea1113c7f5da6fc->leave($__internal_d98c1999900e5e8f6bbaeac163a9a9385816cbb952ed67e82ea1113c7f5da6fc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_83b8312550236b02f6d7472b9dc7c52918e37b5f53038aed485154564a4cf0cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83b8312550236b02f6d7472b9dc7c52918e37b5f53038aed485154564a4cf0cf->enter($__internal_83b8312550236b02f6d7472b9dc7c52918e37b5f53038aed485154564a4cf0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_83b8312550236b02f6d7472b9dc7c52918e37b5f53038aed485154564a4cf0cf->leave($__internal_83b8312550236b02f6d7472b9dc7c52918e37b5f53038aed485154564a4cf0cf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6321f59b6be653a5cb7dab0686780391060b5e2e27f4aff554bb0ffff18ab68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6321f59b6be653a5cb7dab0686780391060b5e2e27f4aff554bb0ffff18ab68->enter($__internal_e6321f59b6be653a5cb7dab0686780391060b5e2e27f4aff554bb0ffff18ab68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e6321f59b6be653a5cb7dab0686780391060b5e2e27f4aff554bb0ffff18ab68->leave($__internal_e6321f59b6be653a5cb7dab0686780391060b5e2e27f4aff554bb0ffff18ab68_prof);

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
