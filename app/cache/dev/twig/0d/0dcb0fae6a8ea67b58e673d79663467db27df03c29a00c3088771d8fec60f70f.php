<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_d02573ad3e1931d251f7b5eb8a85540b2b7bce5f05c854983ca14b6afaa602c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_d61475a5167b032022f0f41b7c3e6babfbc8ed2fc30489b6255f1c16777b60f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d61475a5167b032022f0f41b7c3e6babfbc8ed2fc30489b6255f1c16777b60f3->enter($__internal_d61475a5167b032022f0f41b7c3e6babfbc8ed2fc30489b6255f1c16777b60f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d61475a5167b032022f0f41b7c3e6babfbc8ed2fc30489b6255f1c16777b60f3->leave($__internal_d61475a5167b032022f0f41b7c3e6babfbc8ed2fc30489b6255f1c16777b60f3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a4f294b8c5aae4ddad5efa817a0379730dee42a512f64cd6392f4e7b5c10365f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4f294b8c5aae4ddad5efa817a0379730dee42a512f64cd6392f4e7b5c10365f->enter($__internal_a4f294b8c5aae4ddad5efa817a0379730dee42a512f64cd6392f4e7b5c10365f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a4f294b8c5aae4ddad5efa817a0379730dee42a512f64cd6392f4e7b5c10365f->leave($__internal_a4f294b8c5aae4ddad5efa817a0379730dee42a512f64cd6392f4e7b5c10365f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e5353028ae5b4f6d309c0872b8ea05a5aac4e763ae282750d46050d07b9cd211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5353028ae5b4f6d309c0872b8ea05a5aac4e763ae282750d46050d07b9cd211->enter($__internal_e5353028ae5b4f6d309c0872b8ea05a5aac4e763ae282750d46050d07b9cd211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e5353028ae5b4f6d309c0872b8ea05a5aac4e763ae282750d46050d07b9cd211->leave($__internal_e5353028ae5b4f6d309c0872b8ea05a5aac4e763ae282750d46050d07b9cd211_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1a031046ed0662d92a1caa10667c8f6c889f28175f3002569b1d06b7e25d9601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a031046ed0662d92a1caa10667c8f6c889f28175f3002569b1d06b7e25d9601->enter($__internal_1a031046ed0662d92a1caa10667c8f6c889f28175f3002569b1d06b7e25d9601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1a031046ed0662d92a1caa10667c8f6c889f28175f3002569b1d06b7e25d9601->leave($__internal_1a031046ed0662d92a1caa10667c8f6c889f28175f3002569b1d06b7e25d9601_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
