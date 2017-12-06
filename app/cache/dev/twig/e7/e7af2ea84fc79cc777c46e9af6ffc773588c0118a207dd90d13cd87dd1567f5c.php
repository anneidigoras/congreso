<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8c79dc4721822c3da769f6e883fd81b1d7f92d660e13d05deff15f545a258dab extends Twig_Template
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
        $__internal_021fceecee7252056fb4181709df780d8a47a77af87e8987b92c01d05bebda15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_021fceecee7252056fb4181709df780d8a47a77af87e8987b92c01d05bebda15->enter($__internal_021fceecee7252056fb4181709df780d8a47a77af87e8987b92c01d05bebda15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_021fceecee7252056fb4181709df780d8a47a77af87e8987b92c01d05bebda15->leave($__internal_021fceecee7252056fb4181709df780d8a47a77af87e8987b92c01d05bebda15_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_152f2cb1879a871ea424a8a576835bcfea0ae55d7ea30a0997f25b6d50fb139e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_152f2cb1879a871ea424a8a576835bcfea0ae55d7ea30a0997f25b6d50fb139e->enter($__internal_152f2cb1879a871ea424a8a576835bcfea0ae55d7ea30a0997f25b6d50fb139e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_152f2cb1879a871ea424a8a576835bcfea0ae55d7ea30a0997f25b6d50fb139e->leave($__internal_152f2cb1879a871ea424a8a576835bcfea0ae55d7ea30a0997f25b6d50fb139e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f77c0e058d604101bfec7a5a0d617cedd629eb91f21a7bf276e0d65a25bf2baf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f77c0e058d604101bfec7a5a0d617cedd629eb91f21a7bf276e0d65a25bf2baf->enter($__internal_f77c0e058d604101bfec7a5a0d617cedd629eb91f21a7bf276e0d65a25bf2baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f77c0e058d604101bfec7a5a0d617cedd629eb91f21a7bf276e0d65a25bf2baf->leave($__internal_f77c0e058d604101bfec7a5a0d617cedd629eb91f21a7bf276e0d65a25bf2baf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_585b145f18adbeb739204897127f65f13c8df4a8c50b518da8179adb75c811ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_585b145f18adbeb739204897127f65f13c8df4a8c50b518da8179adb75c811ec->enter($__internal_585b145f18adbeb739204897127f65f13c8df4a8c50b518da8179adb75c811ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_585b145f18adbeb739204897127f65f13c8df4a8c50b518da8179adb75c811ec->leave($__internal_585b145f18adbeb739204897127f65f13c8df4a8c50b518da8179adb75c811ec_prof);

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
