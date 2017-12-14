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
        $__internal_61468c94f28835b76c7a49d49a1fb7e10cc82fffe13282978a17b4648de7c02b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61468c94f28835b76c7a49d49a1fb7e10cc82fffe13282978a17b4648de7c02b->enter($__internal_61468c94f28835b76c7a49d49a1fb7e10cc82fffe13282978a17b4648de7c02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61468c94f28835b76c7a49d49a1fb7e10cc82fffe13282978a17b4648de7c02b->leave($__internal_61468c94f28835b76c7a49d49a1fb7e10cc82fffe13282978a17b4648de7c02b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_308b783779696d0a8740e7402c1b3b5350858d1e4ab9eac76b74c3b8f9cb1399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_308b783779696d0a8740e7402c1b3b5350858d1e4ab9eac76b74c3b8f9cb1399->enter($__internal_308b783779696d0a8740e7402c1b3b5350858d1e4ab9eac76b74c3b8f9cb1399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_308b783779696d0a8740e7402c1b3b5350858d1e4ab9eac76b74c3b8f9cb1399->leave($__internal_308b783779696d0a8740e7402c1b3b5350858d1e4ab9eac76b74c3b8f9cb1399_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8d9d9e4446e4ccb19f8f10e9e27f190f149abf5e62f4ac515cbf3e1b10c50d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8d9d9e4446e4ccb19f8f10e9e27f190f149abf5e62f4ac515cbf3e1b10c50d9->enter($__internal_f8d9d9e4446e4ccb19f8f10e9e27f190f149abf5e62f4ac515cbf3e1b10c50d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f8d9d9e4446e4ccb19f8f10e9e27f190f149abf5e62f4ac515cbf3e1b10c50d9->leave($__internal_f8d9d9e4446e4ccb19f8f10e9e27f190f149abf5e62f4ac515cbf3e1b10c50d9_prof);

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
