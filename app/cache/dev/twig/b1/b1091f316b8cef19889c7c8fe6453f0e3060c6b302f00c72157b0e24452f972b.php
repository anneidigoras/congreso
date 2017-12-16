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
        $__internal_b928a475d47c409656da5243cf32ce692b06410407b6fda53a03fee00146dc7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b928a475d47c409656da5243cf32ce692b06410407b6fda53a03fee00146dc7e->enter($__internal_b928a475d47c409656da5243cf32ce692b06410407b6fda53a03fee00146dc7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b928a475d47c409656da5243cf32ce692b06410407b6fda53a03fee00146dc7e->leave($__internal_b928a475d47c409656da5243cf32ce692b06410407b6fda53a03fee00146dc7e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dcaa28b29716c0bc6680989eceda06933b0b10383d1da8cf3868d854cfb7ea6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcaa28b29716c0bc6680989eceda06933b0b10383d1da8cf3868d854cfb7ea6b->enter($__internal_dcaa28b29716c0bc6680989eceda06933b0b10383d1da8cf3868d854cfb7ea6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_dcaa28b29716c0bc6680989eceda06933b0b10383d1da8cf3868d854cfb7ea6b->leave($__internal_dcaa28b29716c0bc6680989eceda06933b0b10383d1da8cf3868d854cfb7ea6b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b41d12e34991ae6108152577e2a357698279f888fb59d9d8245aa184e40ed367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b41d12e34991ae6108152577e2a357698279f888fb59d9d8245aa184e40ed367->enter($__internal_b41d12e34991ae6108152577e2a357698279f888fb59d9d8245aa184e40ed367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b41d12e34991ae6108152577e2a357698279f888fb59d9d8245aa184e40ed367->leave($__internal_b41d12e34991ae6108152577e2a357698279f888fb59d9d8245aa184e40ed367_prof);

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
