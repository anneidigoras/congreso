<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_08376dfef13fae8630944fbbe37a6b70aeb78ef495b9098d87f4bd42b6fcba67 extends Twig_Template
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
        $__internal_d7fa88a08c3aee0bdb1263f8794d1598d3ecee3d42fc97a27cac8b397f20e1a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7fa88a08c3aee0bdb1263f8794d1598d3ecee3d42fc97a27cac8b397f20e1a3->enter($__internal_d7fa88a08c3aee0bdb1263f8794d1598d3ecee3d42fc97a27cac8b397f20e1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7fa88a08c3aee0bdb1263f8794d1598d3ecee3d42fc97a27cac8b397f20e1a3->leave($__internal_d7fa88a08c3aee0bdb1263f8794d1598d3ecee3d42fc97a27cac8b397f20e1a3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_16a64d06cbdf5d9c5e0c3799a9af6eb80adb144aadc12d0f5294b8869dbdef6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16a64d06cbdf5d9c5e0c3799a9af6eb80adb144aadc12d0f5294b8869dbdef6f->enter($__internal_16a64d06cbdf5d9c5e0c3799a9af6eb80adb144aadc12d0f5294b8869dbdef6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_16a64d06cbdf5d9c5e0c3799a9af6eb80adb144aadc12d0f5294b8869dbdef6f->leave($__internal_16a64d06cbdf5d9c5e0c3799a9af6eb80adb144aadc12d0f5294b8869dbdef6f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0295073955d64e0b04e93e9f9008f5768bed5e87ae24242a06a141dfe48bbbcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0295073955d64e0b04e93e9f9008f5768bed5e87ae24242a06a141dfe48bbbcf->enter($__internal_0295073955d64e0b04e93e9f9008f5768bed5e87ae24242a06a141dfe48bbbcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0295073955d64e0b04e93e9f9008f5768bed5e87ae24242a06a141dfe48bbbcf->leave($__internal_0295073955d64e0b04e93e9f9008f5768bed5e87ae24242a06a141dfe48bbbcf_prof);

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
