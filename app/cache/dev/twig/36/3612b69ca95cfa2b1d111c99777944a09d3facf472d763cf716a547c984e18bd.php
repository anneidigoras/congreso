<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b6131bd90daccf5af172ed490836fefa13892b9078781615be9d963a3411b4b0 extends Twig_Template
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
        $__internal_34a32d2e54e8ec0c54576bb16524e110aeaa9127093b16f8ef0dd066bd784768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34a32d2e54e8ec0c54576bb16524e110aeaa9127093b16f8ef0dd066bd784768->enter($__internal_34a32d2e54e8ec0c54576bb16524e110aeaa9127093b16f8ef0dd066bd784768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34a32d2e54e8ec0c54576bb16524e110aeaa9127093b16f8ef0dd066bd784768->leave($__internal_34a32d2e54e8ec0c54576bb16524e110aeaa9127093b16f8ef0dd066bd784768_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9d7d2db2f49d6f4ffd598569d519196bd85128987fc3c00eac8463f758a5d447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d7d2db2f49d6f4ffd598569d519196bd85128987fc3c00eac8463f758a5d447->enter($__internal_9d7d2db2f49d6f4ffd598569d519196bd85128987fc3c00eac8463f758a5d447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9d7d2db2f49d6f4ffd598569d519196bd85128987fc3c00eac8463f758a5d447->leave($__internal_9d7d2db2f49d6f4ffd598569d519196bd85128987fc3c00eac8463f758a5d447_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bfd4625657d88b8708db8f9b37966a8316f690372121e786000a01cb3b6ed21d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfd4625657d88b8708db8f9b37966a8316f690372121e786000a01cb3b6ed21d->enter($__internal_bfd4625657d88b8708db8f9b37966a8316f690372121e786000a01cb3b6ed21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bfd4625657d88b8708db8f9b37966a8316f690372121e786000a01cb3b6ed21d->leave($__internal_bfd4625657d88b8708db8f9b37966a8316f690372121e786000a01cb3b6ed21d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8fa6c8b5704ef91dc99902e5fb2ff7254bb3bacfc4594561b03685e516f9ef97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fa6c8b5704ef91dc99902e5fb2ff7254bb3bacfc4594561b03685e516f9ef97->enter($__internal_8fa6c8b5704ef91dc99902e5fb2ff7254bb3bacfc4594561b03685e516f9ef97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8fa6c8b5704ef91dc99902e5fb2ff7254bb3bacfc4594561b03685e516f9ef97->leave($__internal_8fa6c8b5704ef91dc99902e5fb2ff7254bb3bacfc4594561b03685e516f9ef97_prof);

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
