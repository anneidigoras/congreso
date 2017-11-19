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
        $__internal_7b987d0f6ced026c2b9f5d1ea6935f432f9adcdb087e08930e845fa05acd2e9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b987d0f6ced026c2b9f5d1ea6935f432f9adcdb087e08930e845fa05acd2e9b->enter($__internal_7b987d0f6ced026c2b9f5d1ea6935f432f9adcdb087e08930e845fa05acd2e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b987d0f6ced026c2b9f5d1ea6935f432f9adcdb087e08930e845fa05acd2e9b->leave($__internal_7b987d0f6ced026c2b9f5d1ea6935f432f9adcdb087e08930e845fa05acd2e9b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_18eb46b19a6b4e5216aa660e0de6686daab85617638248d67669d5afe8f4f35d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18eb46b19a6b4e5216aa660e0de6686daab85617638248d67669d5afe8f4f35d->enter($__internal_18eb46b19a6b4e5216aa660e0de6686daab85617638248d67669d5afe8f4f35d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_18eb46b19a6b4e5216aa660e0de6686daab85617638248d67669d5afe8f4f35d->leave($__internal_18eb46b19a6b4e5216aa660e0de6686daab85617638248d67669d5afe8f4f35d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_baafe255df946d7c7ca5ab3e61104fa8d655dc6e6d1b4c6dc7d92dc79d67e1d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baafe255df946d7c7ca5ab3e61104fa8d655dc6e6d1b4c6dc7d92dc79d67e1d2->enter($__internal_baafe255df946d7c7ca5ab3e61104fa8d655dc6e6d1b4c6dc7d92dc79d67e1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_baafe255df946d7c7ca5ab3e61104fa8d655dc6e6d1b4c6dc7d92dc79d67e1d2->leave($__internal_baafe255df946d7c7ca5ab3e61104fa8d655dc6e6d1b4c6dc7d92dc79d67e1d2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fc0f682ffc5de13ae6a958716a2c01ec685d61557b5e80b021aba8959512f025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc0f682ffc5de13ae6a958716a2c01ec685d61557b5e80b021aba8959512f025->enter($__internal_fc0f682ffc5de13ae6a958716a2c01ec685d61557b5e80b021aba8959512f025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fc0f682ffc5de13ae6a958716a2c01ec685d61557b5e80b021aba8959512f025->leave($__internal_fc0f682ffc5de13ae6a958716a2c01ec685d61557b5e80b021aba8959512f025_prof);

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
