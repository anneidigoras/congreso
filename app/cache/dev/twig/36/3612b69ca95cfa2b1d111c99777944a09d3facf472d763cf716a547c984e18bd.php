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
        $__internal_9b19dca7c601e66793cfa8f5ee648f49a1de5f86d3252492b6d43d699a12ea1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b19dca7c601e66793cfa8f5ee648f49a1de5f86d3252492b6d43d699a12ea1c->enter($__internal_9b19dca7c601e66793cfa8f5ee648f49a1de5f86d3252492b6d43d699a12ea1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b19dca7c601e66793cfa8f5ee648f49a1de5f86d3252492b6d43d699a12ea1c->leave($__internal_9b19dca7c601e66793cfa8f5ee648f49a1de5f86d3252492b6d43d699a12ea1c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c00746930cc0433b5c9f01922df454aac0b1bb80cb4b9bce817fac03dde2e25b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c00746930cc0433b5c9f01922df454aac0b1bb80cb4b9bce817fac03dde2e25b->enter($__internal_c00746930cc0433b5c9f01922df454aac0b1bb80cb4b9bce817fac03dde2e25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c00746930cc0433b5c9f01922df454aac0b1bb80cb4b9bce817fac03dde2e25b->leave($__internal_c00746930cc0433b5c9f01922df454aac0b1bb80cb4b9bce817fac03dde2e25b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_be5adb1a7c7e71fafe2b5ca6da18ae30acaa1f300d044c897b6f76bdbb9dbf3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be5adb1a7c7e71fafe2b5ca6da18ae30acaa1f300d044c897b6f76bdbb9dbf3f->enter($__internal_be5adb1a7c7e71fafe2b5ca6da18ae30acaa1f300d044c897b6f76bdbb9dbf3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_be5adb1a7c7e71fafe2b5ca6da18ae30acaa1f300d044c897b6f76bdbb9dbf3f->leave($__internal_be5adb1a7c7e71fafe2b5ca6da18ae30acaa1f300d044c897b6f76bdbb9dbf3f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b83f2e5288cece3e3a9f0dc2c0016ea62af6387eb5f5a4a568db1554fc7d424a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b83f2e5288cece3e3a9f0dc2c0016ea62af6387eb5f5a4a568db1554fc7d424a->enter($__internal_b83f2e5288cece3e3a9f0dc2c0016ea62af6387eb5f5a4a568db1554fc7d424a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b83f2e5288cece3e3a9f0dc2c0016ea62af6387eb5f5a4a568db1554fc7d424a->leave($__internal_b83f2e5288cece3e3a9f0dc2c0016ea62af6387eb5f5a4a568db1554fc7d424a_prof);

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
