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
        $__internal_61e65332a9382614e9904a96156c4b74087b1f1973f9f218f41043f9a2b86899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61e65332a9382614e9904a96156c4b74087b1f1973f9f218f41043f9a2b86899->enter($__internal_61e65332a9382614e9904a96156c4b74087b1f1973f9f218f41043f9a2b86899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61e65332a9382614e9904a96156c4b74087b1f1973f9f218f41043f9a2b86899->leave($__internal_61e65332a9382614e9904a96156c4b74087b1f1973f9f218f41043f9a2b86899_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_05665ac2ef4bbee8bb143c6e88887066e0b522de501c528a2e794e7602b36925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05665ac2ef4bbee8bb143c6e88887066e0b522de501c528a2e794e7602b36925->enter($__internal_05665ac2ef4bbee8bb143c6e88887066e0b522de501c528a2e794e7602b36925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_05665ac2ef4bbee8bb143c6e88887066e0b522de501c528a2e794e7602b36925->leave($__internal_05665ac2ef4bbee8bb143c6e88887066e0b522de501c528a2e794e7602b36925_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d907f28f33a490f019b3dfb3ae52ce40fd478063d452748c05cb2910d5730ff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d907f28f33a490f019b3dfb3ae52ce40fd478063d452748c05cb2910d5730ff3->enter($__internal_d907f28f33a490f019b3dfb3ae52ce40fd478063d452748c05cb2910d5730ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d907f28f33a490f019b3dfb3ae52ce40fd478063d452748c05cb2910d5730ff3->leave($__internal_d907f28f33a490f019b3dfb3ae52ce40fd478063d452748c05cb2910d5730ff3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bd0c7f07e054e0b624e4db5b000979fc6a0bf6948cb715199ffbb6df5bd4c061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd0c7f07e054e0b624e4db5b000979fc6a0bf6948cb715199ffbb6df5bd4c061->enter($__internal_bd0c7f07e054e0b624e4db5b000979fc6a0bf6948cb715199ffbb6df5bd4c061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bd0c7f07e054e0b624e4db5b000979fc6a0bf6948cb715199ffbb6df5bd4c061->leave($__internal_bd0c7f07e054e0b624e4db5b000979fc6a0bf6948cb715199ffbb6df5bd4c061_prof);

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
