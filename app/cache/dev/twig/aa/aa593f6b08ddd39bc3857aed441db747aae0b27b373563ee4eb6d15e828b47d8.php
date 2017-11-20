<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_8fba5c5697898b39c7af9b84e38757e94be5dbc7c0075c3b2301dbb9029262d9 extends Twig_Template
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
        $__internal_b5637f9e6b3c11f0314fce53e9bf6e3361c029ee3804dd639284307d6379c958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5637f9e6b3c11f0314fce53e9bf6e3361c029ee3804dd639284307d6379c958->enter($__internal_b5637f9e6b3c11f0314fce53e9bf6e3361c029ee3804dd639284307d6379c958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5637f9e6b3c11f0314fce53e9bf6e3361c029ee3804dd639284307d6379c958->leave($__internal_b5637f9e6b3c11f0314fce53e9bf6e3361c029ee3804dd639284307d6379c958_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4537c3bb23dd33de91ee08a5857bd551ddf62db5406d3e0000f327d6347c68c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4537c3bb23dd33de91ee08a5857bd551ddf62db5406d3e0000f327d6347c68c0->enter($__internal_4537c3bb23dd33de91ee08a5857bd551ddf62db5406d3e0000f327d6347c68c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4537c3bb23dd33de91ee08a5857bd551ddf62db5406d3e0000f327d6347c68c0->leave($__internal_4537c3bb23dd33de91ee08a5857bd551ddf62db5406d3e0000f327d6347c68c0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9fe81caf114431536a847c216f3ef366c659d5b461ee824a7f3e7f71d9aafc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9fe81caf114431536a847c216f3ef366c659d5b461ee824a7f3e7f71d9aafc0->enter($__internal_a9fe81caf114431536a847c216f3ef366c659d5b461ee824a7f3e7f71d9aafc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a9fe81caf114431536a847c216f3ef366c659d5b461ee824a7f3e7f71d9aafc0->leave($__internal_a9fe81caf114431536a847c216f3ef366c659d5b461ee824a7f3e7f71d9aafc0_prof);

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
