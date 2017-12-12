<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_8bfea18e871773f1de32ba9ec16a7c19b38cd9ef2f5a3d3cd2d33fba768a3e56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_1d509e7c070c7889debd0b00eea8601dbb22b64def559b047a6593eb4514292d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d509e7c070c7889debd0b00eea8601dbb22b64def559b047a6593eb4514292d->enter($__internal_1d509e7c070c7889debd0b00eea8601dbb22b64def559b047a6593eb4514292d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d509e7c070c7889debd0b00eea8601dbb22b64def559b047a6593eb4514292d->leave($__internal_1d509e7c070c7889debd0b00eea8601dbb22b64def559b047a6593eb4514292d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_90a9c817bb23fdf031c1aeec1522e0891a908aaf59968f609f499f849518d6f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90a9c817bb23fdf031c1aeec1522e0891a908aaf59968f609f499f849518d6f9->enter($__internal_90a9c817bb23fdf031c1aeec1522e0891a908aaf59968f609f499f849518d6f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_90a9c817bb23fdf031c1aeec1522e0891a908aaf59968f609f499f849518d6f9->leave($__internal_90a9c817bb23fdf031c1aeec1522e0891a908aaf59968f609f499f849518d6f9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f89bd628ee70327009fbf56ce08e5075ef62b72653a81162aa5c6ca4eec5d69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f89bd628ee70327009fbf56ce08e5075ef62b72653a81162aa5c6ca4eec5d69->enter($__internal_9f89bd628ee70327009fbf56ce08e5075ef62b72653a81162aa5c6ca4eec5d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9f89bd628ee70327009fbf56ce08e5075ef62b72653a81162aa5c6ca4eec5d69->leave($__internal_9f89bd628ee70327009fbf56ce08e5075ef62b72653a81162aa5c6ca4eec5d69_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
