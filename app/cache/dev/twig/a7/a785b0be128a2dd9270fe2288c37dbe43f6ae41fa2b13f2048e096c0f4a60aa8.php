<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e4d70fa4b26812d0270b58d85759914e4f58f09509c07ef3d8768d1fff4610e8 extends Twig_Template
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
        $__internal_02fd881b4c0a6d564e2b3eb420ef099d5ac5ffc89b06a1047a0bb1b644d1b342 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02fd881b4c0a6d564e2b3eb420ef099d5ac5ffc89b06a1047a0bb1b644d1b342->enter($__internal_02fd881b4c0a6d564e2b3eb420ef099d5ac5ffc89b06a1047a0bb1b644d1b342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02fd881b4c0a6d564e2b3eb420ef099d5ac5ffc89b06a1047a0bb1b644d1b342->leave($__internal_02fd881b4c0a6d564e2b3eb420ef099d5ac5ffc89b06a1047a0bb1b644d1b342_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_10a8ea9fa82104d7e43954493199a39bddffd0791868c08cc0c478f9a8f67b65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10a8ea9fa82104d7e43954493199a39bddffd0791868c08cc0c478f9a8f67b65->enter($__internal_10a8ea9fa82104d7e43954493199a39bddffd0791868c08cc0c478f9a8f67b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_10a8ea9fa82104d7e43954493199a39bddffd0791868c08cc0c478f9a8f67b65->leave($__internal_10a8ea9fa82104d7e43954493199a39bddffd0791868c08cc0c478f9a8f67b65_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1bd9ad1c5d41c01a2f60d6277bf7470f177ed3a584ef995096e54e672be5081d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bd9ad1c5d41c01a2f60d6277bf7470f177ed3a584ef995096e54e672be5081d->enter($__internal_1bd9ad1c5d41c01a2f60d6277bf7470f177ed3a584ef995096e54e672be5081d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1bd9ad1c5d41c01a2f60d6277bf7470f177ed3a584ef995096e54e672be5081d->leave($__internal_1bd9ad1c5d41c01a2f60d6277bf7470f177ed3a584ef995096e54e672be5081d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_54c113a977567a8490ece3e29e64b51268966ac89e2544cf725326acd4710d42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54c113a977567a8490ece3e29e64b51268966ac89e2544cf725326acd4710d42->enter($__internal_54c113a977567a8490ece3e29e64b51268966ac89e2544cf725326acd4710d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_54c113a977567a8490ece3e29e64b51268966ac89e2544cf725326acd4710d42->leave($__internal_54c113a977567a8490ece3e29e64b51268966ac89e2544cf725326acd4710d42_prof);

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
