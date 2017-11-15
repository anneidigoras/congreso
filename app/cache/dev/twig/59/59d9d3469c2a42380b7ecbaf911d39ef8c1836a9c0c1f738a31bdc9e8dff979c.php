<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5c13750a9193d6a6d88e33f1e18c96c5c8f11b0beae02a47a46260c6c6f2c4ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8bbf086a4bd7637e23bc08b2d5547936ada834bb4ec1e6189a13d3c97e13a5c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bbf086a4bd7637e23bc08b2d5547936ada834bb4ec1e6189a13d3c97e13a5c6->enter($__internal_8bbf086a4bd7637e23bc08b2d5547936ada834bb4ec1e6189a13d3c97e13a5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bbf086a4bd7637e23bc08b2d5547936ada834bb4ec1e6189a13d3c97e13a5c6->leave($__internal_8bbf086a4bd7637e23bc08b2d5547936ada834bb4ec1e6189a13d3c97e13a5c6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c115278a92c98ae1ad1c2588aad33b3e694f00947ee7121db068e4e2ec3b09aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c115278a92c98ae1ad1c2588aad33b3e694f00947ee7121db068e4e2ec3b09aa->enter($__internal_c115278a92c98ae1ad1c2588aad33b3e694f00947ee7121db068e4e2ec3b09aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c115278a92c98ae1ad1c2588aad33b3e694f00947ee7121db068e4e2ec3b09aa->leave($__internal_c115278a92c98ae1ad1c2588aad33b3e694f00947ee7121db068e4e2ec3b09aa_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d649be7ac22ef628a3a12e70883baddeb1d04e42cf11f7de4fba13cfc919ac5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d649be7ac22ef628a3a12e70883baddeb1d04e42cf11f7de4fba13cfc919ac5f->enter($__internal_d649be7ac22ef628a3a12e70883baddeb1d04e42cf11f7de4fba13cfc919ac5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d649be7ac22ef628a3a12e70883baddeb1d04e42cf11f7de4fba13cfc919ac5f->leave($__internal_d649be7ac22ef628a3a12e70883baddeb1d04e42cf11f7de4fba13cfc919ac5f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d865db42095a9dbdfa28e563dbc50c52283b4db51bc23fae36fd894eab924c0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d865db42095a9dbdfa28e563dbc50c52283b4db51bc23fae36fd894eab924c0e->enter($__internal_d865db42095a9dbdfa28e563dbc50c52283b4db51bc23fae36fd894eab924c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d865db42095a9dbdfa28e563dbc50c52283b4db51bc23fae36fd894eab924c0e->leave($__internal_d865db42095a9dbdfa28e563dbc50c52283b4db51bc23fae36fd894eab924c0e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
