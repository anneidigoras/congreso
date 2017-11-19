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
        $__internal_cab90c8858f492c1ccdd0141ddddf4ffaa4fb92275f614a1ac4737bb7c42cd95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cab90c8858f492c1ccdd0141ddddf4ffaa4fb92275f614a1ac4737bb7c42cd95->enter($__internal_cab90c8858f492c1ccdd0141ddddf4ffaa4fb92275f614a1ac4737bb7c42cd95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cab90c8858f492c1ccdd0141ddddf4ffaa4fb92275f614a1ac4737bb7c42cd95->leave($__internal_cab90c8858f492c1ccdd0141ddddf4ffaa4fb92275f614a1ac4737bb7c42cd95_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f92db1685e60ece2f98fc2468492f05a260bc72968a8cf4ad42c93ba9a0f8386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f92db1685e60ece2f98fc2468492f05a260bc72968a8cf4ad42c93ba9a0f8386->enter($__internal_f92db1685e60ece2f98fc2468492f05a260bc72968a8cf4ad42c93ba9a0f8386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f92db1685e60ece2f98fc2468492f05a260bc72968a8cf4ad42c93ba9a0f8386->leave($__internal_f92db1685e60ece2f98fc2468492f05a260bc72968a8cf4ad42c93ba9a0f8386_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ff8b693dd1231f73f03a1cf4fbf9cbf9f3bb28f4ea236522fa1ceca251ca40f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff8b693dd1231f73f03a1cf4fbf9cbf9f3bb28f4ea236522fa1ceca251ca40f0->enter($__internal_ff8b693dd1231f73f03a1cf4fbf9cbf9f3bb28f4ea236522fa1ceca251ca40f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ff8b693dd1231f73f03a1cf4fbf9cbf9f3bb28f4ea236522fa1ceca251ca40f0->leave($__internal_ff8b693dd1231f73f03a1cf4fbf9cbf9f3bb28f4ea236522fa1ceca251ca40f0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eec55bbeb6013536cef1042b9c23124c4418c131aaad594faed89bfa0c27fda1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eec55bbeb6013536cef1042b9c23124c4418c131aaad594faed89bfa0c27fda1->enter($__internal_eec55bbeb6013536cef1042b9c23124c4418c131aaad594faed89bfa0c27fda1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_eec55bbeb6013536cef1042b9c23124c4418c131aaad594faed89bfa0c27fda1->leave($__internal_eec55bbeb6013536cef1042b9c23124c4418c131aaad594faed89bfa0c27fda1_prof);

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
