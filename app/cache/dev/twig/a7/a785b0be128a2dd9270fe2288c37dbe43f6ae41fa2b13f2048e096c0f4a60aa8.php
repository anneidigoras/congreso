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
        $__internal_83e93c2c8ef7e850884a24ea413ef1c08960692873a4cba22c8584fc7d3e2702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83e93c2c8ef7e850884a24ea413ef1c08960692873a4cba22c8584fc7d3e2702->enter($__internal_83e93c2c8ef7e850884a24ea413ef1c08960692873a4cba22c8584fc7d3e2702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83e93c2c8ef7e850884a24ea413ef1c08960692873a4cba22c8584fc7d3e2702->leave($__internal_83e93c2c8ef7e850884a24ea413ef1c08960692873a4cba22c8584fc7d3e2702_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_377d9e7b907c22f78e5410bcb71a0c2a919861789a2a8a342d8288188cd0ebb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_377d9e7b907c22f78e5410bcb71a0c2a919861789a2a8a342d8288188cd0ebb8->enter($__internal_377d9e7b907c22f78e5410bcb71a0c2a919861789a2a8a342d8288188cd0ebb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_377d9e7b907c22f78e5410bcb71a0c2a919861789a2a8a342d8288188cd0ebb8->leave($__internal_377d9e7b907c22f78e5410bcb71a0c2a919861789a2a8a342d8288188cd0ebb8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a48a9ecd2c0dd128ce6e13e91d3a2c8eecda3b4ad29d39f6b4e848fe3b8bfb1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a48a9ecd2c0dd128ce6e13e91d3a2c8eecda3b4ad29d39f6b4e848fe3b8bfb1f->enter($__internal_a48a9ecd2c0dd128ce6e13e91d3a2c8eecda3b4ad29d39f6b4e848fe3b8bfb1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a48a9ecd2c0dd128ce6e13e91d3a2c8eecda3b4ad29d39f6b4e848fe3b8bfb1f->leave($__internal_a48a9ecd2c0dd128ce6e13e91d3a2c8eecda3b4ad29d39f6b4e848fe3b8bfb1f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dc76ae4feca4e52f735381e51fa9b16022d042ed87e14aa1348438a7d76fb62f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc76ae4feca4e52f735381e51fa9b16022d042ed87e14aa1348438a7d76fb62f->enter($__internal_dc76ae4feca4e52f735381e51fa9b16022d042ed87e14aa1348438a7d76fb62f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dc76ae4feca4e52f735381e51fa9b16022d042ed87e14aa1348438a7d76fb62f->leave($__internal_dc76ae4feca4e52f735381e51fa9b16022d042ed87e14aa1348438a7d76fb62f_prof);

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
