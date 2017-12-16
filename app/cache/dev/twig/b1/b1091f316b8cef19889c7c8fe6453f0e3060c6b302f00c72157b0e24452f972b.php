<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d3caa8cea35237c267b3e33abd03498d29fa8b1d095349910f17268c6d760d30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_c9043db06ceb2d8e7e3cf83763505f783aaa12cfa43edcadeaa2fdaf302a7f10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9043db06ceb2d8e7e3cf83763505f783aaa12cfa43edcadeaa2fdaf302a7f10->enter($__internal_c9043db06ceb2d8e7e3cf83763505f783aaa12cfa43edcadeaa2fdaf302a7f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9043db06ceb2d8e7e3cf83763505f783aaa12cfa43edcadeaa2fdaf302a7f10->leave($__internal_c9043db06ceb2d8e7e3cf83763505f783aaa12cfa43edcadeaa2fdaf302a7f10_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7cfb69bcbb9cbafb5e70a761070998b611f83c95ae364e5733fe7d42f418d8b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cfb69bcbb9cbafb5e70a761070998b611f83c95ae364e5733fe7d42f418d8b1->enter($__internal_7cfb69bcbb9cbafb5e70a761070998b611f83c95ae364e5733fe7d42f418d8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7cfb69bcbb9cbafb5e70a761070998b611f83c95ae364e5733fe7d42f418d8b1->leave($__internal_7cfb69bcbb9cbafb5e70a761070998b611f83c95ae364e5733fe7d42f418d8b1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8082f8892547dbf5d26371196802fcdeedbe1e9b594fc3a4f706c4b50d0f70e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8082f8892547dbf5d26371196802fcdeedbe1e9b594fc3a4f706c4b50d0f70e3->enter($__internal_8082f8892547dbf5d26371196802fcdeedbe1e9b594fc3a4f706c4b50d0f70e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_8082f8892547dbf5d26371196802fcdeedbe1e9b594fc3a4f706c4b50d0f70e3->leave($__internal_8082f8892547dbf5d26371196802fcdeedbe1e9b594fc3a4f706c4b50d0f70e3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
